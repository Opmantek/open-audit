# $currentPrincipal = [Security.Principal.WindowsPrincipal] [Security.Principal.WindowsIdentity]::GetCurrent()
# $isAdmin = $currentPrincipal.IsInRole([Security.Principal.WindowsBuiltInRole]::Administrator)
# if (!$isAdmin) {
#     Write-Host "This installer should be run by an Administrator."
#     Write-Host "Click Start, type cmd, right-click 'Command Prompt' and click 'Run as administrator'."
#     Write-Host "Then paste in the command line provided by Open-AudIT (or your Administrator)."
#     exit
# }

param (
    [int]$debug = 0,
    [switch]$uninstall,
    [switch]$audit,
    [switch]$help
)

$version = "5.2.0"

if ($help -eq $true) {
    Write-Host "This is the Open-AudIT Agent version $version."
    Write-Host "This powershell script is normally called from a scheduled task."
    Write-Host "Options for calling directly from the command line are:"
    Write-Host " -debug (int): Set the debug output level (default 0)."
    Write-Host " -uninstall: Uninstall this agent (default false)."
    Write-Host " -audit: Audit the local computer and submit the result (default false)."
    Write-Host " -help: These options."
    Write-Host
    exit
}

$config = Get-Content -Path .\config.json -Raw | ConvertFrom-Json
$config.url = $config.url . 'agents/execute'

Write-Host $config

$post = @{}
$post.hostname = hostname
$post.uuid = Get-WmiObject -Class Win32_ComputerSystemProduct | Select-Object -ExpandProperty UUID
$post.serial =  Get-WmiObject -Class Win32_BIOS | Select-Object -ExpandProperty SerialNumber
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

$post | ConvertTo-Json
Write-Host $post


#Invoke-WebRequest -UseBasicParsing $config.url -Method POST



