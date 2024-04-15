# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

# powershell.exe Invoke-WebRequest -UseBasicParsing http://SERVER/open-audit/index.php/agents/windows/download -Outfile agent.ps1 -Method GET
# powershell.exe -executionpolicy bypass -file .\agent.ps1 -install -debug 1

param (
    [int]$debug = 0,
    [switch]$uninstall,
    [switch]$install,
    [switch]$audit,
    [switch]$help
)

$url = ''
$programVersion = '5.2.0'
$programPath = 'C:\Program Files\Open-AudIT Agent'
$programReg = 'HKLM:\SOFTWARE\Microsoft\Windows\CurrentVersion\Uninstall\Open-AudIT Agent'
$agentId = ''
$advanced = 'n'

if ($help -eq $true) {
    Write-Host "This is the Open-AudIT Agent version $programVersion."
    Write-Host "This powershell script is normally called from a scheduled task."
    Write-Host "Options for calling directly from the command line are:"
    Write-Host " -debug (int): Set the debug output level (default 0)."
    Write-Host " -uninstall: Uninstall this agent (default false)."
    Write-Host " -audit: Audit the local computer and submit the result (default false)."
    Write-Host " -help: These options."
    Write-Host
    exit
}

function Execute-Audit($location_id, $org_id) {
    if (Test-Path -Path ".\downloads") {
        if ($debug -eq 1) {
            Write-Host "The path for downloads exists"
        }
    } else {
        if ($debug -eq 1) {
            Write-Host "Need to create downloads"
        }
        try {
            New-Item -ItemType Directory -Path ".\downloads" -Force > $null
            if ($debug -eq 1) {
                Write-Host ".\downloads directory created."
            }
        } catch {
            Write-Host "ERROR - Could not create .\downloads"
            Write-error $_
            exit
        }
    }
    if ($debug -eq 1) {
        Write-Host "Downloading audit script"
    }
    Invoke-WebRequest -UseBasicParsing "$($url)/scripts/windows-ps1/download" -Outfile ".\downloads\audit_windows.ps1" -Method GET
    $command = "./downloads/audit_windows.ps1"
    if ($debug -eq 1) {
        $command = "$($command) -debugging 1"
    }
    if ($location_id -ne 0) {
        $command = "$($command) -location_id $location_id"
    }
    if ($org_id -ne 0) {
        $command = "$($command) -org_id $org_id"
    }
    if ($debug -eq 1) {
        Write-Host "$($command)"
    }
    iex "& $command"
}

function Execute-Command($command) {
    if ($command -eq $false -or $command -eq "") {
        return
    }
    if ($debug -eq 1) {
        Write-Host "Executing: $command"
    }
    iex "& $command"
}

function Execute-Download($url) {
    if ($url -eq $false -or $url -eq "") {
        return
    }
    if ($debug -eq 1) {
        Write-Host "Downloading: $url"
    }
    $dest = $url.SubString($url.LastIndexOf('/') + 1)
    if ($debug -eq 1) {
        Write-Host "Destination: $dest"
    }
    Invoke-WebRequest -UseBasicParsing "$($url)" -Outfile ".\downloads\$dest" -Method GET
}

function Execute-Install {
    $currentPrincipal = [Security.Principal.WindowsPrincipal] [Security.Principal.WindowsIdentity]::GetCurrent()
    $isAdmin = $currentPrincipal.IsInRole([Security.Principal.WindowsBuiltInRole]::Administrator)
    if (!$isAdmin) {
        Write-Host "This installer should be run by an Administrator."
        Write-Host "Click Start, type cmd, right-click 'Command Prompt' and click 'Run as administrator'."
        exit
    }

    if ($debug -eq 1) {
        Write-Host "Installing into $programPath."
    }

    # Create the install directory if it doesn't already exist
    try {
        New-Item -ItemType Directory -Path "$programPath" -Force > $null
        if ($debug -eq 1) {
            Write-Host "$programPath directory created."
        }
    } catch {
        Write-Host "ERROR - Could not create $programPath"
        Write-error $_
    }

    # Create the downloads directory if it doesn't already exist
    try {
        New-Item -ItemType Directory -Path "$programPath\downloads" -Force > $null
        if ($debug -eq 1) {
            Write-Host "$programPath\downloads directory created."
        }
    } catch {
        Write-Host "ERROR - Could not create $programPath\downloads"
        Write-error $_
    }

    # Copy the agent into this directory
    try {
        Copy-Item $PSCommandPath -Destination "$programPath\agent.ps1" -Force > $null
        if ($debug -eq 1) {
            Write-Host "Agent copied."
        }
    } catch {
        Write-Host "ERROR - Could not copy $PSCommandPath to $programPath\agent.ps1"
        Write-error $_
    }

    # Create our scheduled task. By default at 10am with an up to 30 minute delay
    $taskExists = Get-ScheduledTask | Where-Object {$_.TaskName -eq "Open-AudIT Agent" }

    if ($taskExists) {
       $test = Unregister-ScheduledTask -TaskName "Open-AudIT Agent" -Confirm:$false
    }

    $taskTrigger = New-ScheduledTaskTrigger -Daily -At 10am -RandomDelay 00:30:00

    $taskAction = New-ScheduledTaskAction -Execute "C:\Windows\System32\WindowsPowerShell\v1.0\powershell.exe" -Argument "-NoProfile -ExecutionPolicy Bypass -File `"$programPath\agent.ps1`"" -WorkingDirectory "$programPath"

    $taskDescription = "This task starts the agent and check-in with the server."

    $taskSettings = New-ScheduledTaskSettingsSet -AllowStartIfOnBatteries -DontStopIfGoingOnBatteries -RunOnlyIfNetworkAvailable 

    $taskRegister = Register-ScheduledTask 'Open-AudIT Agent' -Action $taskAction -Trigger $taskTrigger -RunLevel Highest -Description $taskDescription -Settings $taskSettings -Force

    if ($taskRegister -eq $false) {
        if ($debug -eq 1) {
            Write-Host "Scheduled task not created."
        }
    } else {
        if ($debug -eq 1) {
            Write-Host "Task created successfully."
        }
    }

    # Register Open-AudIT Agent in add/remove programs
    try {  
        $test = Get-ItemProperty -Path $programReg -Name 'DisplayVersion' -ErrorAction Stop  
    } catch [System.Management.Automation.ItemNotFoundException] {  
        $test = New-Item -Path $programReg -Force   
    }
    Set-ItemProperty -Path $programReg -Name 'Comments' -Value 'This agent is run on a schedule and checks-in with the Open-AudIT Server for actions to be performed.'
    Set-ItemProperty -Path $programReg -Name 'Contact' -Value 'support@firstwave.com'
    Set-ItemProperty -Path $programReg -Name 'DisplayName' -Value 'Open-AudIT Agent'
    Set-ItemProperty -Path $programReg -Name 'DisplayVersion' -Value $programVersion
    Set-ItemProperty -Path $programReg -Name 'InstallLocation' -Value 'C:\Program Files\Open-AudIT Agent'
    Set-ItemProperty -Path $programReg -Name 'Publisher' -Value 'FirstWave'
    Set-ItemProperty -Path $programReg -Name 'UninstallString' -Value "`"C:\Windows\System32\WindowsPowerShell\v1.0\powershell.exe`" -executionpolicy bypass -file `"$programPath\agent.ps1`" -uninstall"
    Set-ItemProperty -Path $programReg -Name 'URLInfoAbout' -Value 'http://www.open-audit.org'
    Set-ItemProperty -Path $programReg -Name 'URLUpdateInfo' -Value 'https://www.firstwave.com'
    Set-ItemProperty -Path $programReg -Name 'Version' -Value $programVersion
    if ($debug -eq 1) {
        Write-Host "Program registry entries created."
    }
    if ($debug -eq 1) {
        Write-Host "Open-AudIT Agent installed."
        Write-Host
    }
    # & "C:\Program Files\Open-AudIT Agent\agent.ps1" -debugging 1
    # Invoke-Expression "&'C:\Program Files\Open-AudIT Agent\agent.ps1' -debugging 1"
    exit;
}

function Execute-Uninstall {
    $currentPrincipal = [Security.Principal.WindowsPrincipal] [Security.Principal.WindowsIdentity]::GetCurrent()
    $isAdmin = $currentPrincipal.IsInRole([Security.Principal.WindowsBuiltInRole]::Administrator)
    if (!$isAdmin) {
        Write-Host "This uninstaller should be run by an Administrator."
        Write-Host "Click Start, type cmd, right-click 'Command Prompt' and click 'Run as administrator'."
        exit
    }

    if ($debug -eq 1) {
        Write-Host "Uninstalling Open-AudIT Agent version $programVersion."
    }

    $taskExists = Get-ScheduledTask | Where-Object {$_.TaskName -eq "Open-AudIT Agent" }
    if ($taskExists) {
       Unregister-ScheduledTask -TaskName "Open-AudIT Agent" -Confirm:$false
    }
    if ($debug -eq 1) {
        Write-Host "Removed task."
    }
    if (Test-Path -Path $programReg) {
        try {
            Remove-Item -Path $programReg -force
            if ($debug -eq 1) {
                Write-Host "Registry key deleted."
            }
        }
        catch {
            if ($debug -eq 1) {
                Write-error $_
            }
        }
    }
    
    $currentDir = Get-Location | Select -expand Path
    if ($currentDir -eq "$programPath") {
        cd ..
    }
    if (Test-Path -Path $programPath) {
        try {
            Remove-Item "$programPath\agent.ps1" -Force
            if ($debug -eq 1) {
                Write-Host "Program agent deleted."
            }
        } catch {
            Write-Host "ERROR - Could not delete $programPath\agent.ps1"
            Write-error $_
            Write-Host "Please delete the 'C:\Program Files\Open-AudIT Agent' folder."
        }
        try {
            Remove-Item -LiteralPath "$programPath\downloads" -Force -Recurse
            if ($debug -eq 1) {
                Write-Host "Download directory deleted."
            }
        } catch {
            Write-Host "ERROR - Could not delete $programPath"
            Write-error $_
            Write-Host "Please delete the 'C:\Program Files\Open-AudIT Agent\download' folder."
        }
        try {
            Remove-Item -LiteralPath $programPath -Force -Recurse
            if ($debug -eq 1) {
                Write-Host "Program directory deleted."
            }
        } catch {
            Write-Host "ERROR - Could not delete $programPath"
            Write-error $_
            Write-Host "Please delete the 'C:\Program Files\Open-AudIT Agent' folder."
        }
    }
    Write-Host "Open-AudIT Agent has been uninstalled."
    Write-Host
    exit
}

function Execute-Update {
    powershell.exe Invoke-WebRequest -UseBasicParsing "$($url)" -Outfile ".\downloads\agent.ps1" -Method GET
    mv ".\downloads\agent.ps1" "..\"
}

if ($audit -eq $true) {
    # Provided on the command line
    Execute-Audit -location_id 0 -org_id 0
    exit
}

if ($install -eq $true) {
    # Provided on the command line
    Execute-Install
}

if ($uninstall -eq $true) {
    # Provided on the command line
    Execute-Uninstall
    exit
}

$post = @{}
$post.version = $programVersion
$post.hostname = hostname
$post.uuid = Get-WmiObject -Class Win32_ComputerSystemProduct | Select-Object -ExpandProperty UUID
$post.serial =  Get-WmiObject -Class Win32_BIOS | Select-Object -ExpandProperty SerialNumber
$post.ip = (Find-NetRoute -RemoteIPAddress "0.0.0.0" | % { $_.IPAddress })[0]
$post.os_name = Get-WmiObject -Class Win32_OperatingSystem | Select-Object -ExpandProperty Caption
$post.os_family = ""
if ($post.os_name -like "*Server*") { $post.os_family = "Windows Server" }
if ($post.os_name -like "* 95*") { $post.os_name_family = "Windows 95" }
if ($post.os_name -like "* 98*") { $post.os_family = "Windows 98" }
if ($post.os_name -like "* NT*") { $post.os_family = "Windows NT" }
if ($post.os_name -like "*2000*") { $post.os_family = "Windows 2000" }
if ($post.os_name -like "* XP*") { $post.os_family = "Windows XP" }
if ($post.os_name -like "*2003*") { $post.os_family = "Windows 2003" }
if ($post.os_name -like "*Vista*") { $post.os_family = "Windows Vista" }
if ($post.os_name -like "*Windows 7*") { $post.os_family = "Windows 7" }
if ($post.os_name -like "*Windows 8*") { $post.os_family = "Windows 8" }
if ($post.os_name -like "*Windows 10*") { $post.os_family = "Windows 10" }
if ($post.os_name -like "*Windows 11*") { $post.os_family = "Windows 11" }
if ($post.os_name -like "*2008*") { $post.os_family = "Windows 2008" }
if ($post.os_name -like "*2012*") { $post.os_family = "Windows 2012" }
if ($post.os_name -like "*2016*") { $post.os_family = "Windows 2016" }
if ($post.os_name -like "*2019*") { $post.os_family = "Windows 2019" }
if ($post.os_name -like "*2022*") { $post.os_family = "Windows 2022" }

$response = Invoke-WebRequest -UseBasicParsing "$($url)/agents/execute" -Method POST -Body ($post | ConvertTo-Json) -ContentType 'application/json'
if ($debug -eq 1) {
    Write-Host $response.content
}
$response = $response.content | ConvertFrom-Json

if ($advanced -eq 'y') {
    foreach ($command in $($response.actions.commands)) {
        if ($command.PSobject.Properties.Name -contains "download") {
            if ($debug -eq 1) {
                Write-Host "Download: $($command.download)"
            }
            Execute-Download $($command.download)
        }
        if ($command.PSobject.Properties.Name -contains "command") {
            if ($debug -eq 1) {
                Write-Host "Command: $($command.command)"
            }
            Execute-Command $($command.command)
        }
    }
}

Write-Host "Audit: $($response.actions.audit)"
if ($response.actions.audit -eq $true) {
    if ($debug -eq 1) {
        Write-Host "Auditing"
    }
    Execute-Audit -location_id $response.actions.location_id -org_id $response.actions.org_id
}

Write-Host "Uninstall: $($response.actions.uninstall)"
if ($response.actions.uninstall -eq $true) {
    if ($debug -eq 1) {
        Write-Host "Uninstalling"
    }
    Execute-Uninstall
}

Write-Host "Update: $($response.actions.update)"
if ($response.actions.update -eq $true) {
    if ($debug -eq 1) {
        Write-Host "Updating"
    }
    Execute-Update
}
