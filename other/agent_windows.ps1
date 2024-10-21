# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

# powershell.exe Invoke-WebRequest -UseBasicParsing http://SERVER/open-audit/index.php/agents/windows/download -Outfile agent.ps1 -Method GET
# powershell.exe -executionpolicy bypass -file .\agent.ps1 -install -debug 1

param (
    [int]$debug = 0,
    [switch]$uninstall,
    [switch]$install,
    [switch]$audit,
    [switch]$help,
    [string]$benchmark,
    [int]$benchmark_id,
    [int]$device_id
)

$url = ''
$programVersion = '5.6.0'
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

function Execute-Benchmark($benchmark, $benchmark_id, $device_id) {
    if ($debug -eq 1) {
        Write-Host "Executing benchmark"
    }

    if ($debug -eq 1) {
        Write-Host "Setting execution policy"
    }
    # Set the execution policy
    $result = Set-ExecutionPolicy Bypass -Scope Localmachine 2>&1
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
    }
    # Get the execution policy
    $result = Get-ExecutionPolicy 2>&1
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
    }
    if ($result -ne "Bypass") {
        Write-Host "Cannot execute, we require the execution policy to be set to Bypass."
        exit
    }

    if ($debug -eq 1) {
        Write-Host "Activate PackageManagement"
    }
    $result = Import-Module PackageManagement -RequiredVersion 1.0.0.1
    if ($debug -eq 1 -and $result -ne $null -and [string]$result -ne "") {
        Write-Host "Command Output: $result"
    }

    # Add NuGet
    if ($debug -eq 1) {
        Write-Host "Adding NuGet"
    }
    $result = Install-PackageProvider -Name NuGet -MinimumVersion 2.8.5.201 -Force
    if ($debug -eq 1 -and $result -ne $null -and [string]$result -ne "") {
        Write-Host "Command Output: $result"
    }

    # Add the PSGallery repository
    $result = Get-PSRepository -name PSGallery 2>Out-Null
    if ($result -eq $null) {
        if ($debug -eq 1) {
            Write-Host "Adding PSGallery"
        }
        $result = Set-PSRepository -name PSGallery 2>&1
        if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
            Write-Host "Command Output: $result"
        }
    }

    # Install PowerSTIG
    if (Get-Module -ListAvailable -Name PowerSTIG) {
        # It is already installed
    } else {
        if ($debug -eq 1) {
            Write-Host "Installing module PowerSTIG"
        }
        $result = Install-Module PowerSTIG 2>&1
        if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
            Write-Host "Command Output: $result"
        }
    }

    # Get the ConfigManager object
    # if ($debug -eq 1) {
    #     Write-Host "Getting DSCLocalConfigurationManager"
    # }
    # $result = Get-DSCLocalConfigurationManager 2>&1
    # if ($debug -eq 1) {
    #     Write-Host "Command Output: $result"
    #     Write-Host "Getting DscResource -Module PowerSTIG"
    # }

    # Import the PowerSTIG module
    $result = Get-DscResource -Module PowerSTIG 2>&1
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
    }

    # Get the name of the public profile
    if ($debug -eq 1) {
        Write-Host "Getting InterfaceAlias"
    }
    $result = $(Get-NetConnectionProfile | Select InterfaceAlias).InterfaceAlias
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
        Write-Host "Setting NetConnectionProfile with $result to Private"
    }
    if ($result -eq $null) {
        Write-Host "Cannot execute, no InterfaceAlias retrieved."
        exit
    }

    # Update the InterfaceAlias parameter with the name of the profile from above
    $result = Set-NetConnectionProfile -InterfaceAlias $result -NetworkCategory Private 2>&1
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
    }

    # Update the WSMAN MaxEnvelopeSizekb
    if ($debug -eq 1) {
        Write-Host "Setting MaxEnvelopeSizekb to 8192"
    }
    $result = Set-Item -Path WSMan:\localhost\MaxEnvelopeSizekb -Value 8192 2>&1
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
    }

    # Run winrm quickconfig
    if ($debug -eq 1) {
        Write-Host "Running winrm quickconfig"
    }
    $result = winrm quickconfig 2>&1
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
    }

    $ssg_url = $url.replace("index.php", "ssg-definitions")
    $ssg_url = "$($ssg_url)$($benchmark)"
    if ($debug -eq 1) {
        Write-Host "Downloading benchmark: $ssg_url"
    }
    Invoke-WebRequest -UseBasicParsing "$($ssg_url)" -Outfile ".\$($benchmark)" -Method GET

    if ($benchmark -like 'WindowsClient-10*') {
        $config = 'WindowsClient BaseLine {
            OsVersion     = "10"
            StigVersion   = "2.9"
            SkipRule      = @("V-253261","V-253427.a","V-253427.b","V-253427.c","V-253427.d","V-253429.a","V-253429.b","V-253430.a","V-253430.b","V-253435","V-253436")
            # OrgSettings = "$PSScriptRoot\$($benchmark).default.xml"
        }'
    }
    if ($benchmark -like 'WindowsClient-11*') {
        $config = 'WindowsClient BaseLine {
            OsVersion     = "11"
            StigVersion   = "1.6"
            SkipRule      = @("V-253261","V-253427.a","V-253427.b","V-253427.c","V-253427.d","V-253429.a","V-253429.b","V-253430.a","V-253430.b","V-253435","V-253436")
            # OrgSettings = "$PSScriptRoot\$($benchmark).default.xml"
        }'
    }
    if ($benchmark -like 'WindowsServer-2016*') {
        $config = 'WindowsServer BaseLine {
            OsVersion     = "2016"
            StigVersion   = "2.8"
            SkipRule      = @("V-253261","V-253427.a","V-253427.b","V-253427.c","V-253427.d","V-253429.a","V-253429.b","V-253430.a","V-253430.b","V-253435","V-253436")
            # OrgSettings = "$PSScriptRoot\$($benchmark).default.xml"
        }'
    }
    if ($benchmark -like 'WindowsServer-2019*') {
        $config = 'WindowsServer BaseLine {
            OsVersion     = "2019"
            StigVersion   = "2.9"
            SkipRule      = @("V-253261","V-253427.a","V-253427.b","V-253427.c","V-253427.d","V-253429.a","V-253429.b","V-253430.a","V-253430.b","V-253435","V-253436")
            # OrgSettings = "$PSScriptRoot\$($benchmark).default.xml"
        }'
    }
    if ($benchmark -like 'WindowsServer-2022*') {
        $config = 'WindowsServer BaseLine {
            OsVersion     = "2022"
            StigVersion   = "1.5"
            SkipRule      = @("V-253261","V-253427.a","V-253427.b","V-253427.c","V-253427.d","V-253429.a","V-253429.b","V-253430.a","V-253430.b","V-253435","V-253436")
            # OrgSettings = "$PSScriptRoot\$($benchmark).default.xml"
        }'
    }


    # Add STIGTest.ps1
    if ($debug -eq 1) {
        Write-Host "Add STIGTest.ps1"
    }
    $content = 'configuration STIGTest
{
    param
    (
        [parameter()]
        [string]
        $NodeName = "localhost"
    )

    Import-DscResource -ModuleName PowerStig

    Node $NodeName
    {
        ' + $config + '
    }
}

STIGTest'

    Set-Content -Path "C:\Program Files\Open-AudIT Agent\STIGTest.ps1" -Value "$($content)"

    $benchmark_result = @{}
    $benchmark_result.benchmark_id = $benchmark_id
    $benchmark_result.device_id = $device_id
    $benchmark_result.result = @()

    # Build DSC
    if ($debug -eq 1) {
        Write-Host "Build DSC"
    }

    Invoke-Expression -Command ".\STIGTest -ComputerName localhost -Detailed" 3>&1 | Tee-Object -Variable DscResults
    # $benchmark_notchecked = @()
    # $DscResults | ForEach {
    #     $item = @{}
    #     if ($_ -like "*V-*") {
    #         $item.result = "notchecked"
    #         [string]$external = $_
    #         $external_i = $external.split(':')[1]
    #         if ($external_i -ne $null) {
    #             $external_id = $external_i.split('/')[0]
    #             if ($external_id -ne $null) {
    #                 $external_ident = $external_id.trim()
    #                 if ($external_ident -like "*V-*") {
    #                     $item.external_ident = $external_ident
    #                     $benchmark_result.result += $item
    #                     $benchmark_notchecked += $item
    #                 }
    #             }
    #         }
    #     }
    #     Clear-Variable -name item
    # }

    # Install Module
    $result = Install-Module DSCEA -Scope CurrentUser 2>&1
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
    }

    # Start STIG
    if ($debug -eq 1) {
        Write-Host "Start STIG"
    }
    $result = Start-DSCEAscan -MofFile .\STIGTest\localhost.mof -ComputerName localhost -OutputPath .\
    if ($debug -eq 1 -and [string]$result -ne "" -and $result -ne $null) {
        Write-Host "Command Output: $result"
    }

    $auditc = Import-Clixml -Path "$result"
    $auditc.Compliance[0].ResourcesInDesiredState | ForEach {
        $item = @{}
        $item.result = "pass"
        $external_ident = $_.InstanceName.Split("]")
        $external_ident = $external_ident[0].Split("[")
        [bool] $add = $true
        # $benchmark_notchecked | ForEach {
        #     if ($_.external_ident -eq $external_ident) {
        #         $add = $false
        #     }
        # }
        if ($add -eq $true) {
            $item.external_ident = $external_ident
            if ($item.external_ident -like "V-*") {
                $benchmark_result.result += $item
            }
        }
        Clear-Variable -name item
    }
    $auditc.Compliance[0].ResourcesNotInDesiredState | ForEach {
        $item = @{}
        $item.result = "fail"
        $external_ident = $_.InstanceName.Split("]")
        $external_ident = $external_ident[0].Split("[")
        [bool] $add = $true
        # $benchmark_notchecked | ForEach {
        #     if ($_.external_ident -eq $external_ident) {
        #         $add = $false
        #     }
        # }
        if ($add -eq $true) {
            $item.external_ident = $external_ident
            if ($item.external_ident -like "V-*") {
                $benchmark_result.result += $item
            }
        }
        Clear-Variable -name item
    }

    # Submit Result
    $submit_url = "$($url)input/benchmarks"
    if ($debug -eq 1) {
        Write-Host "Submitting result to $submit_url"
    }
    $benchmarks_response = Invoke-WebRequest -UseBasicParsing "$($submit_url)" -Method POST -Body ($benchmark_result | ConvertTo-Json) -ContentType 'application/json'
    Write-Host $benchmarks_response.Status
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

    $taskPrinciple = New-ScheduledTaskPrincipal -UserID "NT AUTHORITY\SYSTEM" -LogonType ServiceAccount -RunLevel Highest

    $taskSettings = New-ScheduledTaskSettingsSet -AllowStartIfOnBatteries -DontStopIfGoingOnBatteries -RunOnlyIfNetworkAvailable -ExecutionTimeLimit (New-TimeSpan -Minutes 60)

    $taskRegister = Register-ScheduledTask -Force -TaskName 'Open-AudIT Agent' -Action $taskAction -Trigger $taskTrigger -Description $taskDescription -Settings $taskSettings -Principal $taskPrinciple

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
    Invoke-Expression "&'C:\Program Files\Open-AudIT Agent\agent.ps1' -debug 1"
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
    # Update the actual agent script
    powershell.exe Invoke-WebRequest -UseBasicParsing "$($url)/agents/windows/download" -Outfile ".\downloads\agent.ps1" -Method GET
    Move-item -Path 'C:\Program Files\Open-AudIT Agent\downloads\agent.ps1' -destination 'C:\Program Files\Open-AudIT Agent\agent.ps1' -force

    # Recreate our scheduled task. By default at 10am with an up to 30 minute delay
    $taskExists = Get-ScheduledTask | Where-Object {$_.TaskName -eq "Open-AudIT Agent" }

    if ($taskExists) {
       $test = Unregister-ScheduledTask -TaskName "Open-AudIT Agent" -Confirm:$false
    }

    $taskTrigger = New-ScheduledTaskTrigger -Daily -At 10am -RandomDelay 00:30:00

    $taskAction = New-ScheduledTaskAction -Execute "C:\Windows\System32\WindowsPowerShell\v1.0\powershell.exe" -Argument "-NoProfile -ExecutionPolicy Bypass -File `"$programPath\agent.ps1`"" -WorkingDirectory "$programPath"

    $taskDescription = "This task starts the agent and check-in with the server."

    $taskPrinciple = New-ScheduledTaskPrincipal -UserID "NT AUTHORITY\SYSTEM" -LogonType ServiceAccount -RunLevel Highest

    $taskSettings = New-ScheduledTaskSettingsSet -AllowStartIfOnBatteries -DontStopIfGoingOnBatteries -RunOnlyIfNetworkAvailable -ExecutionTimeLimit (New-TimeSpan -Minutes 60)

    $taskRegister = Register-ScheduledTask -Force -TaskName 'Open-AudIT Agent' -Action $taskAction -Trigger $taskTrigger -Description $taskDescription -Settings $taskSettings -Principal $taskPrinciple

    if ($taskRegister -eq $false) {
        if ($debug -eq 1) {
            Write-Host "Scheduled task not created."
        }
    } else {
        if ($debug -eq 1) {
            Write-Host "Task created successfully."
        }
    }
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

if ($benchmark -ne "") {
    # Provided on the command line
    Execute-Benchmark $benchmark
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

Write-Host "Update: $($response.actions.update)"
if ($response.actions.update -eq $true) {
    if ($debug -eq 1) {
        Write-Host "Updating"
    }
    Execute-Update
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

Write-Host "Benchmark: $($response.actions.benchmark)"
if ([string]$response.actions.benchmark -ne "") {
    if ($debug -eq 1) {
        Write-Host "Benchmarking"
    }
    Execute-Benchmark $response.actions.benchmark -benchmark_id $response.actions.benchmark_id -device_id $response.actions.device_id
}

