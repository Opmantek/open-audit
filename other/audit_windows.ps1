# To see all properties
# Get-WmiObject -Class Win32_computersystem | Format-List *

# Get-Help Get-WmiObject
# Get-Command

# Comparison Operators
# https://learn.microsoft.com/en-us/powershell/module/microsoft.powershell.core/about/about_comparison_operators?view=powershell-7.4

# Apps
# https://learn.microsoft.com/en-us/windows/application-management/overview-windows-apps

echo "Not ready for use"
exit

param (
    [int]$debugging = 1
)
$debug = $debugging

$timer = [Diagnostics.Stopwatch]::StartNew()

if ($debug -gt 0) {
    Write-Host "Starting Audit"
}

$Win32_BIOS = Get-WmiObject -Class Win32_BIOS
$Win32_ComputerSystem = Get-WmiObject -Class Win32_ComputerSystem
$Win32_ComputerSystemProduct = Get-WmiObject -Class Win32_ComputerSystemProduct
$Win32_DesktopMonitor = Get-WmiObject -Class Win32_DesktopMonitor
$Win32_OperatingSystem = Get-WmiObject -Class Win32_OperatingSystem
$Win32_PhysicalMemory = Get-WmiObject -Class Win32_PhysicalMemory
$Win32_Processor = Get-WmiObject -Class Win32_Processor
$Win32_SystemEnclosure = Get-WmiObject -Class Win32_SystemEnclosure
$Win32_BaseBoard = Get-WmiObject -Class Win32_BaseBoard
$MSStorageDriver = Get-WmiObject -class MSStorageDriver_FailurePredictStatus -ErrorAction Ignore
$Win32_LogicalDiskToPartition = Get-WmiObject -Class Win32_LogicalDiskToPartition
$Win32_MappedLogicalDisk = Get-WmiObject -Class Win32_MappedLogicalDisk -ErrorAction Ignore
$Win32_NetworkAdapter = Get-WmiObject -Class Win32_NetworkAdapter -ErrorAction Ignore

$itimer = [Diagnostics.Stopwatch]::StartNew()
$result = @{}
$result.sys = @{}
$result.sys.script_version = '5.1.0'
$result.sys.id = ''
$result.sys.uuid = $Win32_ComputerSystemProduct | Select-Object -ExpandProperty UUID
$result.sys.name = hostname
$result.sys.domain = $Win32_ComputerSystem | Select-Object -ExpandProperty Domain
$result.sys.ip = (Find-NetRoute -RemoteIPAddress "0.0.0.0" | % { $_.IPAddress })[0]
$result.sys.description = $Win32_OperatingSystem | Select-Object -ExpandProperty Description
$result.sys.type = 'computer'
$result.sys.icon = 'windows'
$result.sys.os_group = 'Windows'
$result.sys.os_name = $Win32_OperatingSystem.Caption
$result.sys.os_family = ""
if ($result.sys.os_name -like "*Server*") { $result.sys.os_family = "Windows Server" }
if ($result.sys.os_name -like "* 95*") { $result.sys.os_name_family = "Windows 95" }
if ($result.sys.os_name -like "* 98*") { $result.sys.os_family = "Windows 98" }
if ($result.sys.os_name -like "* NT*") { $result.sys.os_family = "Windows NT" }
if ($result.sys.os_name -like "*2000*") { $result.sys.os_family = "Windows 2000" }
if ($result.sys.os_name -like "* XP*") { $result.sys.os_family = "Windows XP" }
if ($result.sys.os_name -like "*2003*") { $result.sys.os_family = "Windows 2003" }
if ($result.sys.os_name -like "*Vista*") { $result.sys.os_family = "Windows Vista" }
if ($result.sys.os_name -like "*2008*") { $result.sys.os_family = "Windows 2008" }
if ($result.sys.os_name -like "*Windows 7*") { $result.sys.os_family = "Windows 7" }
if ($result.sys.os_name -like "*Windows 8*") { $result.sys.os_family = "Windows 8" }
if ($result.sys.os_name -like "*2012*") { $result.sys.os_family = "Windows 2012" }
if ($result.sys.os_name -like "*Windows 10*") { $result.sys.os_family = "Windows 10" }
if ($result.sys.os_name -like "*Windows 11*") { $result.sys.os_family = "Windows 11" }
if ($result.sys.os_name -like "*2016*") { $result.sys.os_family = "Windows 2016" }
if ($result.sys.os_name -like "*2019*") { $result.sys.os_family = "Windows 2019" }
if ($result.sys.os_name -like "*2022*") { $result.sys.os_family = "Windows 2022" }
$result.sys.os_version = $Win32_OperatingSystem.Version
$result.sys.serial = $Win32_BIOS | Select-Object -ExpandProperty SerialNumber
$result.sys.model = $Win32_ComputerSystem | Select-Object -ExpandProperty Model
$result.sys.manufacturer = $Win32_ComputerSystemProduct.Vendor
$result.sys.uptime = Get-WmiObject -Class Win32_PerfFormattedData_PerfOS_System | Select-Object -ExpandProperty SystemUpTime
$result.sys.form_factor = ($Win32_SystemEnclosure | Select ChassisTypes)[0].ChassisTypes[0]
$result.sys.os_bit = ($Win32_Processor | Select AddressWidth)[0].AddressWidth
$result.sys.os_arch = $Win32_OperatingSystem.OSArchitecture
$result.sys.memory_count = [int]([bigint]($Win32_PhysicalMemory | Measure-Object -Property Capacity -Sum | Select Sum).Sum / 1024)
$result.sys.processor_count = [int]($Win32_ComputerSystem.NumberOfProcessors)
$result.sys.os_installation_date = [string]($Win32_OperatingSystem.ConvertToDateTime($Win32_OperatingSystem.InstallDate) -f "yyyy/MM/dd")
$result.sys.org_id = ''
$result.sys.cluster_name = ''
$result.sys.last_seen_by = ''
$result.sys.discovery_id = ''
$itimer.Stop()
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    Write-Host "System, 1 entry took $totalSecs seconds"
}

$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.windows = @()
$item = @{}
$item.build_number = [int]$Win32_OperatingSystem.BuildNumber
$item.user_name = ""
Get-ItemProperty HKLM:\SOFTWARE\Microsoft\Windows\CurrentVersion\Authentication\LogonUI | ForEach {
    if ($_.LastLoggedOnUser -ne $null -and $_.LastLoggedOnUser -ne "") {
        $item.user_name = $_.LastLoggedOnUser
    }
    if ($item.user_name -eq "" -and $_.LastLoggedOnSamUser -ne $null -and $_.LastLoggedOnSamUser -ne "") {
        $item.user_name = $_.LastLoggedOnSamUser
    }
    $split_user = $item.user_name.Split("\")
    $item.user_name = $split_user[1]
    if (($split_user[0] -eq "@") -or ($split_user[0] -eq ".") -or ($split_user[0] -eq "@.")) {
        $item.user_name = $item.user_name + "@" + $result.sys.name
    } else {
        $item.user_name = $item.user_name + "@" + $split_user[0]
    }
}
if ($Win32_ComputerSystem.PartOfDomain) {
    $domain = Win32_ComputerSystem.Domain
    Get-WmiObject -Class Win32_NTDomain -filter "DomainName = '$domain'" | ForEach {
        $item.client_site_name = $_.ClientSiteName
        $item.domain_short = ""
        $item.domain_controller_address = $_.DomainControllerAddress
        $item.domain_controller_name = $_.DomainControllerName
    }
} else {
    $item.workgroup = $Win32_ComputerSystem.Workgroup
}
if ($Win32_ComputerSystem.DomainRole -eq 0) { $item.domain_role = "Standalone Workstation" }
if ($Win32_ComputerSystem.DomainRole -eq 1) { $item.domain_role = "Workstation" }
if ($Win32_ComputerSystem.DomainRole -eq 2) { $item.domain_role = "Standalone Server" }
if ($Win32_ComputerSystem.DomainRole -eq 3) { $item.domain_role = "Member Server" }
if ($Win32_ComputerSystem.DomainRole -eq 4) { $item.domain_role = "Backup Domain Controller" }
if ($Win32_ComputerSystem.DomainRole -eq 5) { $item.domain_role = "Primary Domain Controller" }
$item.part_of_domain = [string]$Win32_ComputerSystem.PartOfDomain
$item.id_number = $Win32_ComputerSystemProduct.IdentifyingNumber
Get-WmiObject -Class Win32_TimeZone | ForEach {
    $item.time_caption = $_.Caption
    $item.time_daylight = $_.DaylightName
}
$item.boot_device = $Win32_OperatingSystem.BootDevice
$item.organisation = if ($Win32_OperatingSystem.Organisation) { $Win32_OperatingSystem.Organisation } else { "" }
switch ($Win32_OperatingSystem.CountryCode) {
    "1" { $item.country_code = "UNITED STATES" }
    "2" { $item.country_code = "CANADA" }
    "7" { $item.country_code = "RUSSIAN FEDERATION" }
    "20" { $item.country_code = "EGYPT" }
    "27" { $item.country_code = "SOUTH AFRICA" }
    "30" { $item.country_code = "GREECE" }
    "31" { $item.country_code = "NETHERLANDS" }
    "32" { $item.country_code = "BELGIUM" }
    "33" { $item.country_code = "FRANCE" }
    "34" { $item.country_code = "SPAIN" }
    "36" { $item.country_code = "HUNGARY" }
    "39" { $item.country_code = "ITALY" }
    "40" { $item.country_code = "ROMANIA" }
    "41" { $item.country_code = "SWITZERLAND" }
    "43" { $item.country_code = "AUSTRIA" }
    "44" { $item.country_code = "UNITED KINGDOM" }
    "45" { $item.country_code = "DENMARK" }
    "46" { $item.country_code = "SWEDEN" }
    "47" { $item.country_code = "NORWAY" }
    "48" { $item.country_code = "POLAND" }
    "49" { $item.country_code = "GERMANY" }
    "51" { $item.country_code = "PERU" }
    "52" { $item.country_code = "MEXICO" }
    "54" { $item.country_code = "ARGENTINA" }
    "55" { $item.country_code = "BRAZIL" }
    "56" { $item.country_code = "CHILE" }
    "57" { $item.country_code = "COLOMBIA" }
    "58" { $item.country_code = "VENEZUELA" }
    "60" { $item.country_code = "MALAYSIA" }
    "61" { $item.country_code = "AUSTRALIA" }
    "62" { $item.country_code = "INDONESIA" }
    "63" { $item.country_code = "PHILIPPINES" }
    "64" { $item.country_code = "NEW ZEALAND" }
    "65" { $item.country_code = "SINGAPORE" }
    "81" { $item.country_code = "JAPAN" }
    "82" { $item.country_code = "KOREA, REPUBLIC OF" }
    "84" { $item.country_code = "VIET NAM" }
    "86" { $item.country_code = "CHINA" }
    "90" { $item.country_code = "TURKEY" }
    "91" { $item.country_code = "INDIA" }
    "92" { $item.country_code = "PAKISTAN" }
    "212" { $item.country_code = "MOROCCO" }
    "213" { $item.country_code = "ALGERIA" }
    "216" { $item.country_code = "TUNISIA" }
    "218" { $item.country_code = "LIBYAN ARAB JAMAHIRIYA" }
    "254" { $item.country_code = "KENYA" }
    "263" { $item.country_code = "ZIMBABWE" }
    "298" { $item.country_code = "FAROE ISLANDS" }
    "351" { $item.country_code = "PORTUGAL" }
    "352" { $item.country_code = "LUXEMBOURG" }
    "353" { $item.country_code = "IRELAND" }
    "354" { $item.country_code = "ICELAND" }
    "355" { $item.country_code = "ALBANIA" }
    "358" { $item.country_code = "FINLAND" }
    "359" { $item.country_code = "BULGARIA" }
    "370" { $item.country_code = "LITHUANIA" }
    "371" { $item.country_code = "LATVIA" }
    "372" { $item.country_code = "ESTONIA" }
    "374" { $item.country_code = "ARMENIA" }
    "375" { $item.country_code = "BELARUS" }
    "380" { $item.country_code = "UKRAINE" }
    "381" { $item.country_code = "SERBIA" }
    "385" { $item.country_code = "CROATIA" }
    "386" { $item.country_code = "SLOVENIA" }
    "389" { $item.country_code = "MACEDONIA" }
    "420" { $item.country_code = "CZECH REPUBLIC" }
    "421" { $item.country_code = "SLOVAKIA (Slovak Republic)" }
    "501" { $item.country_code = "BELIZE" }
    "502" { $item.country_code = "GUATEMALA" }
    "503" { $item.country_code = "EL SALVADOR" }
    "504" { $item.country_code = "HONDURAS" }
    "505" { $item.country_code = "NICARAGUA" }
    "506" { $item.country_code = "COSTA RICA" }
    "507" { $item.country_code = "PANAMA" }
    "591" { $item.country_code = "BOLIVIA" }
    "593" { $item.country_code = "ECUADOR" }
    "595" { $item.country_code = "PARAGUAY" }
    "598" { $item.country_code = "URUGUAY" }
    "673" { $item.country_code = "BRUNEI DARUSSALAM" }
    "852" { $item.country_code = "HONG KONG" }
    "853" { $item.country_code = "MACAU" }
    "874" { $item.country_code = "THAILAND" }
    "886" { $item.country_code = "TAIWAN" }
    "960" { $item.country_code = "MALDIVES" }
    "961" { $item.country_code = "LEBANON" }
    "962" { $item.country_code = "JORDAN" }
    "963" { $item.country_code = "SYRIAN ARAB REPUBLIC" }
    "964" { $item.country_code = "IRAQ" }
    "965" { $item.country_code = "KUWAIT" }
    "966" { $item.country_code = "SAUDI ARABIA" }
    "967" { $item.country_code = "YEMEN" }
    "968" { $item.country_code = "OMAN" }
    "971" { $item.country_code = "UNITED ARAB EMIRATES" }
    "972" { $item.country_code = "ISRAEL" }
    "973" { $item.country_code = "BAHRAIN" }
    "974" { $item.country_code = "QATAR" }
    "976" { $item.country_code = "MONGOLIA" }
    "981" { $item.country_code = "IRAN" }
    "994" { $item.country_code = "AZERBAIJAN" }
    "995" { $item.country_code = "GEORGIA" }
    "996" { $item.country_code = "KYRGYZSTAN" }
    default { $item.country_code = "Unknown (" + $Win32_OperatingSystem.CountryCode + ")" }
}
switch ($Win32_OperatingSystem.OSLanguage) {
    "1" { $item.language = "Arabic" }
    "4" { $item.language = "Chinese (Simplified) - China" }
    "9" { $item.language = "English" }
    "1025" { $item.language = "Arabic - Saudi Arabia" }
    "1026" { $item.language = "Bulgarian" }
    "1027" { $item.language = "Catalan" }
    "1028" { $item.language = "Chinese (Traditional) - Taiwan" }
    "1029" { $item.language = "Czech" }
    "1030" { $item.language = "Danish" }
    "1031" { $item.language = "German - Germany" }
    "1032" { $item.language = "Greek" }
    "1033" { $item.language = "English - United States" }
    "1034" { $item.language = "Spanish - Traditional Sort" }
    "1035" { $item.language = "Finnish" }
    "1036" { $item.language = "French - France" }
    "1037" { $item.language = "Hebrew" }
    "1038" { $item.language = "Hungarian" }
    "1039" { $item.language = "Icelandic" }
    "1040" { $item.language = "Italian - Italy" }
    "1041" { $item.language = "Japanese" }
    "1042" { $item.language = "Korean" }
    "1043" { $item.language = "Dutch - Netherlands" }
    "1044" { $item.language = "Norwegian - Bokmal" }
    "1045" { $item.language = "Polish" }
    "1046" { $item.language = "Portuguese - Brazil" }
    "1047" { $item.language = "Rhaeto-Romanic" }
    "1048" { $item.language = "Romanian" }
    "1049" { $item.language = "Russian" }
    "1050" { $item.language = "Croatian" }
    "1051" { $item.language = "Slovak" }
    "1052" { $item.language = "Albanian" }
    "1053" { $item.language = "Swedish" }
    "1054" { $item.language = "Thai" }
    "1055" { $item.language = "Turkish" }
    "1056" { $item.language = "Urdu" }
    "1057" { $item.language = "Indonesian" }
    "1058" { $item.language = "Ukrainian" }
    "1059" { $item.language = "Belarusian" }
    "1060" { $item.language = "Slovenian" }
    "1061" { $item.language = "Estonian" }
    "1062" { $item.language = "Latvian" }
    "1063" { $item.language = "Lithuanian" }
    "1065" { $item.language = "Persian" }
    "1066" { $item.language = "Vietnamese" }
    "1069" { $item.language = "Basque" }
    "1070" { $item.language = "Serbian" }
    "1071" { $item.language = "Macedonian (FYROM)" }
    "1072" { $item.language = "Sutu" }
    "1073" { $item.language = "Tsonga" }
    "1074" { $item.language = "Tswana" }
    "1076" { $item.language = "Xhosa" }
    "1077" { $item.language = "Zulu" }
    "1078" { $item.language = "Afrikaans" }
    "1080" { $item.language = "Faeroese" }
    "1081" { $item.language = "Hindi" }
    "1082" { $item.language = "Maltese" }
    "1084" { $item.language = "Gaelic" }
    "1085" { $item.language = "Yiddish" }
    "1086" { $item.language = "Malay - Malaysia" }
    "2049" { $item.language = "Arabic - Iraq" }
    "2052" { $item.language = "Chinese (Simplified) - PRC" }
    "2055" { $item.language = "German - Switzerland" }
    "2057" { $item.language = "English - United Kingdom" }
    "2058" { $item.language = "Spanish - Mexico" }
    "2060" { $item.language = "French - Belgium" }
    "2064" { $item.language = "Italian - Switzerland" }
    "2067" { $item.language = "Dutch - Belgium" }
    "2068" { $item.language = "Norwegian - Nynorsk" }
    "2070" { $item.language = "Portuguese - Portugal" }
    "2072" { $item.language = "Romanian - Moldova" }
    "2073" { $item.language = "Russian - Moldova" }
    "2074" { $item.language = "Serbian - Latin" }
    "2077" { $item.language = "Swedish - Finland" }
    "3073" { $item.language = "Arabic - Egypt" }
    "3076" { $item.language = "Chinese (Traditional) Hong Kong SAR" }
    "3079" { $item.language = "German - Austria" }
    "3081" { $item.language = "English - Australia" }
    "3082" { $item.language = "Spanish - International Sort" }
    "3084" { $item.language = "French - Canada" }
    "3098" { $item.language = "Serbian - Cyrillic" }
    "4097" { $item.language = "Arabic - Libya" }
    "4100" { $item.language = "Chinese (Simplified) Singapore" }
    "4103" { $item.language = "German - Luxembourg" }
    "4105" { $item.language = "English - Canada" }
    "4106" { $item.language = "Spanish - Guatemala" }
    "4108" { $item.language = "French - Switzerland" }
    "5121" { $item.language = "Arabic - Algeria" }
    "5127" { $item.language = "German - Liechtenstein" }
    "5129" { $item.language = "English - New Zealand" }
    "5130" { $item.language = "Spanish - Costa Rica" }
    "5132" { $item.language = "French - Luxembourg" }
    "6145" { $item.language = "Arabic - Morocco" }
    "6153" { $item.language = "English - Ireland" }
    "6154" { $item.language = "Spanish - Panama" }
    "7169" { $item.language = "Arabic - Tunisia" }
    "7177" { $item.language = "English - South Africa" }
    "7178" { $item.language = "Spanish - Dominican Republic" }
    "8193" { $item.language = "Arabic - Oman" }
    "8201" { $item.language = "English - Jamaica" }
    "8202" { $item.language = "Spanish - Venezuela" }
    "9217" { $item.language = "Arabic - Yemen" }
    "9226" { $item.language = "Spanish - Colombia" }
    "10241" { $item.language = "Arabic - Syria" }
    "10249" { $item.language = "English - Belize" }
    "10250" { $item.language = "Spanish - Peru" }
    "11265" { $item.language = "Arabic - Jordan" }
    "11273" { $item.language = "English - Trinidad" }
    "11274" { $item.language = "Spanish - Argentina" }
    "12289" { $item.language = "Arabic - Lebanon" }
    "12298" { $item.language = "Spanish - Ecuador" }
    "13313" { $item.language = "Arabic - Kuwait" }
    "13322" { $item.language = "Spanish - Chile" }
    "14337" { $item.language = "Arabic - U.A.E." }
    "14346" { $item.language = "Spanish - Uruguay" }
    "15361" { $item.language = "Arabic - Bahrain" }
    "15370" { $item.language = "Spanish - Paraguay" }
    "16385" { $item.language = "Arabic - Qatar" }
    "16394" { $item.language = "Spanish - Bolivia" }
    "17418" { $item.language = "Spanish - El Salvador" }
    "18442" { $item.language = "Spanish - Honduras" }
    "19466" { $item.language = "Spanish - Nicaragua" }
    "20490" { $item.language = "Spanish - Puerto Rico" }
    default { $item.language = "Unknown (" + $Win32_OperatingSystem.OSLanguage + ")" }
}
$item.registered_user = $Win32_OperatingSystem.RegisteredUser
$item.service_pack = [string]$Win32_OperatingSystem.ServicePackMajorVersion
$item.version = $Win32_OperatingSystem.Version
$item.install_directory = [string]$Win32_OperatingSystem.Name.Split("|")[1]
# TODO
# Get-ADOrganizationalUnit
# $item.active_directory_ou = ""
$result.windows += $item
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    Write-Host "Windows, 1 entry took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.bios = @()
Clear-Variable -name item
$item = @{}
$item.description = $Win32_BIOS | Select-Object -ExpandProperty Description
$item.manufacturer = $Win32_BIOS | Select-Object -ExpandProperty Manufacturer
$item.serial = $Win32_BIOS | Select-Object -ExpandProperty SerialNumber
$item.smversion = $Win32_BIOS | Select-Object -ExpandProperty SMBIOSBIOSVersion
$item.version = $Win32_BIOS | Select-Object -ExpandProperty Version
$item.asset_tag = $Win32_SystemEnclosure | Select-Object -ExpandProperty SMBIOSAssetTag
$result.bios += $item
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    Write-Host "Bios, 1 entry took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.scsi = @()
$item = @{}
Get-WmiObject -Class Win32_SCSIController | ForEach {
  Clear-Variable -name item
  $item = @{}
  $item.model = $_.name
  $item.manufacturer = $_.Manufacturer
  $item.device = $_.PNPDeviceID
  $item.type = 'other'
  $result.scsi += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.scsi.count
    Write-Host "SCSI, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.processor = @()
$item = @{}
Clear-Variable -name item
$item = @{}
# NOTE - Computers with multiple physical CPUs return an array
#        but those with a single CPU return an object, hence the test below
if ($Win32_Processor[0] -ne $null) {
    $processor = $Win32_Processor[0]
} else {
    $processor = $Win32_Processor
}
$item.physical_count = [int]$Win32_ComputerSystem.NumberOfProcessors
$item.core_count = $item.physical_count * [int]$processor.NumberOfEnabledCore
$item.logical_count = $item.core_count * [int]$processor.NumberOfLogicalProcessors
$item.speed = $processor.MaxClockSpeed
$item.manufacturer = $processor.Manufacturer
$item.architecture = "Unknown"
if ($processor.Architecture -eq '0' ) { $item.architecture = 'x86' }
if ($processor.Architecture -eq '1' ) { $item.architecture = 'MIPS' }
if ($processor.Architecture -eq '2' ) { $item.architecture = 'Alpha' }
if ($processor.Architecture -eq '3' ) { $item.architecture = 'PowerPC' }
if ($processor.Architecture -eq '5' ) { $item.architecture = 'ARM' }
if ($processor.Architecture -eq '6' ) { $item.architecture = 'Itanium' }
if ($processor.Architecture -eq '9' ) { $item.architecture = 'x64' }
$item.description = $processor.Name
if ($item.description -ne $null) {
    $item.description = $item.description.Replace("(R)", "").Replace("(TM)", "").Replace("(r)", "").Replace("(tm)", "")
    $item.description = $item.description -replace '\s{2,}', ' '
}
$item.socket = ''
if ($processor.UpgradeMethod -eq 1) { $item.socket = 'Other' }
if ($processor.UpgradeMethod -eq 2) { $item.socket = 'Unknown' }
if ($processor.UpgradeMethod -eq 3) { $item.socket = 'Daughter Board' }
if ($processor.UpgradeMethod -eq 4) { $item.socket = 'ZIF Socket' }
if ($processor.UpgradeMethod -eq 5) { $item.socket = 'Replaceable Piggy Back' }
if ($processor.UpgradeMethod -eq 6) { $item.socket = 'None' }
if ($processor.UpgradeMethod -eq 7) { $item.socket = 'LIF Socket' }
if ($processor.UpgradeMethod -eq 8) { $item.socket = 'Slot 1' }
if ($processor.UpgradeMethod -eq 9) { $item.socket = 'Slot 2' }
if ($processor.UpgradeMethod -eq 10) { $item.socket = '370 Pin Socket' }
if ($processor.UpgradeMethod -eq 11) { $item.socket = 'Slot A' }
if ($processor.UpgradeMethod -eq 12) { $item.socket = 'Slot M' }
if ($processor.UpgradeMethod -eq 13) { $item.socket = 'Socket 423' }
if ($processor.UpgradeMethod -eq 14) { $item.socket = 'Socket A (462)' }
if ($processor.UpgradeMethod -eq 15) { $item.socket = 'Socket 478' }
if ($processor.UpgradeMethod -eq 16) { $item.socket = 'Socket 754' }
if ($processor.UpgradeMethod -eq 17) { $item.socket = 'Socket 940' }
if ($processor.UpgradeMethod -eq 18) { $item.socket = 'Socket 939' }
if ($processor.UpgradeMethod -eq 19) { $item.socket = 'Socket mPGA 604' }
if ($processor.UpgradeMethod -eq 20) { $item.socket = 'Socket LGA 771' }
if ($processor.UpgradeMethod -eq 21) { $item.socket = 'Socket LGA 775' }
if ($processor.UpgradeMethod -eq 22) { $item.socket = 'Socket S1' }
if ($processor.UpgradeMethod -eq 23) { $item.socket = 'Socket AM2' }
if ($processor.UpgradeMethod -eq 24) { $item.socket = 'Socket F (1207)' }
if ($processor.UpgradeMethod -eq 25) { $item.socket = 'Socket LGA 1366' }
if ($processor.UpgradeMethod -eq 26) { $item.socket = 'Socket G34' }
if ($processor.UpgradeMethod -eq 27) { $item.socket = 'Socket AM3' }
if ($processor.UpgradeMethod -eq 28) { $item.socket = 'Socket C32' }
if ($processor.UpgradeMethod -eq 29) { $item.socket = 'Socket LGA 1156' }
if ($processor.UpgradeMethod -eq 30) { $item.socket = 'Socket LGA 1567' }
if ($processor.UpgradeMethod -eq 31) { $item.socket = 'Socket PGA 988A' }
if ($processor.UpgradeMethod -eq 32) { $item.socket = 'Socket BGA 1288' }
if ($processor.UpgradeMethod -eq 33) { $item.socket = 'Socket rPGA 988B' }
if ($processor.UpgradeMethod -eq 34) { $item.socket = 'Socket BGA 1023' }
if ($processor.UpgradeMethod -eq 35) { $item.socket = 'Socket BGA 1224' }
if ($processor.UpgradeMethod -eq 36) { $item.socket = 'Socket LGA 1155' }
if ($processor.UpgradeMethod -eq 37) { $item.socket = 'Socket LGA 1356' }
if ($processor.UpgradeMethod -eq 38) { $item.socket = 'Socket LGA 2011' }
if ($processor.UpgradeMethod -eq 39) { $item.socket = 'Socket FS1' }
if ($processor.UpgradeMethod -eq 40) { $item.socket = 'Socket FS2' }
if ($processor.UpgradeMethod -eq 41) { $item.socket = 'Socket FM1' }
if ($processor.UpgradeMethod -eq 42) { $item.socket = 'Socket FM2' }
if ($processor.UpgradeMethod -eq 43) { $item.socket = 'Socket LGA 2011-3' }
if ($processor.UpgradeMethod -eq 44) { $item.socket = 'Socket LGA 1356-3' }
if ($processor.UpgradeMethod -eq 185) { $item.socket = 'Socket P (478)' }
$processor_type = $item.socket
$result.processor += $item
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    Write-Host "Processor, 1 entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.memory = @()
$Win32_PhysicalMemory | ForEach {
  Clear-Variable -name item
  $item = @{}
    $item.bank = $_.DeviceLocator
    $item.size = $_.Capacity /1024 /1024
    $item.speed = $_.Speed
    if ($item.speed -eq $null) {
        $item.speed = 0
    }
    $item.serial = $_.SerialNumber
    $item.tag = $_.Tag

  $item.form_factor = 'Unknown'
  if ( $_.FormFactor -eq 1) { $item.form_factor = 'Other' }
  if ( $_.FormFactor -eq 2) { $item.form_factor = 'SIP' }
  if ( $_.FormFactor -eq 3) { $item.form_factor = 'DIP' }
  if ( $_.FormFactor -eq 4) { $item.form_factor = 'ZIP' }
  if ( $_.FormFactor -eq 5) { $item.form_factor = 'SOJ' }
  if ( $_.FormFactor -eq 6) { $item.form_factor = 'Proprietary' }
  if ( $_.FormFactor -eq 7) { $item.form_factor = 'SIMM' }
  if ( $_.FormFactor -eq 8) { $item.form_factor = 'DIMM' }
  if ( $_.FormFactor -eq 9) { $item.form_factor = 'TSOP' }
  if ( $_.FormFactor -eq 10) { $item.form_factor = 'PGA' }
  if ( $_.FormFactor -eq 11) { $item.form_factor = 'RIMM' }
  if ( $_.FormFactor -eq 12) { $item.form_factor = 'SODIMM' }
  if ( $_.FormFactor -eq 13) { $item.form_factor = 'SRIMM' }
  if ( $_.FormFactor -eq 14) { $item.form_factor = 'SMD' }
  if ( $_.FormFactor -eq 15) { $item.form_factor = 'SSMP' }
  if ( $_.FormFactor -eq 16) { $item.form_factor = 'QFP' }
  if ( $_.FormFactor -eq 17) { $item.form_factor = 'TQFP' }
  if ( $_.FormFactor -eq 18) { $item.form_factor = 'SOIC' }
  if ( $_.FormFactor -eq 19) { $item.form_factor = 'LCC' }
  if ( $_.FormFactor -eq 20) { $item.form_factor = 'PLCC' }
  if ( $_.FormFactor -eq 21) { $item.form_factor = 'BGA' }
  if ( $_.FormFactor -eq 22) { $item.form_factor = 'FPBGA' }
  if ( $_.FormFactor -eq 23) { $item.form_factor = 'LGA' }

  $item.detail = 'Unknown'
    if ( $_.MemoryType -eq 0) { $item.detail = 'Unknown' }
    if ( $_.MemoryType -eq 1) { $item.detail = 'Other' }
    if ( $_.MemoryType -eq 2) { $item.detail = 'DRAM' }
    if ( $_.MemoryType -eq 3) { $item.detail = 'Synchronous DRAM' }
    if ( $_.MemoryType -eq 4) { $item.detail = 'Cache DRAM' }
    if ( $_.MemoryType -eq 5) { $item.detail = 'EDO' }
    if ( $_.MemoryType -eq 6) { $item.detail = 'EDRAM' }
    if ( $_.MemoryType -eq 7) { $item.detail = 'VRAM' }
    if ( $_.MemoryType -eq 8) { $item.detail = 'SRAM' }
    if ( $_.MemoryType -eq 9) { $item.detail = 'RAM' }
    if ( $_.MemoryType -eq 10) { $item.detail = 'ROM' }
    if ( $_.MemoryType -eq 11) { $item.detail = 'Flash' }
    if ( $_.MemoryType -eq 12) { $item.detail = 'EEPROM' }
    if ( $_.MemoryType -eq 13) { $item.detail = 'FEPROM' }
    if ( $_.MemoryType -eq 14) { $item.detail = 'EPROM' }
    if ( $_.MemoryType -eq 15) { $item.detail = 'CDRAM' }
    if ( $_.MemoryType -eq 16) { $item.detail = '3DRAM' }
    if ( $_.MemoryType -eq 17) { $item.detail = 'SDRAM' }
    if ( $_.MemoryType -eq 18) { $item.detail = 'SGRAM' }
    if ( $_.MemoryType -eq 19) { $item.detail = 'RDRAM' }
    if ( $_.MemoryType -eq 20) { $item.detail = 'DDR' }
    if ( $_.MemoryType -eq 21) { $item.detail = 'DDR-2' }
    if ( $_.MemoryType -eq 22) { $item.detail = 'DDR-3' }

  $item.type = 'Unknown'
    if ( $_.TypeDetail -eq 1 ) { $item.type = 'Reserved' }
    if ( $_.TypeDetail -eq 2 ) { $item.type = 'Other' }
    if ( $_.TypeDetail -eq 4 ) { $item.type = 'Unknown' }
    if ( $_.TypeDetail -eq 8 ) { $item.type = 'Fast-paged' }
    if ( $_.TypeDetail -eq 16 ) { $item.type = 'Static column' }
    if ( $_.TypeDetail -eq 32 ) { $item.type = 'Pseudo-static' }
    if ( $_.TypeDetail -eq 64 ) { $item.type = 'RAMBUS' }
    if ( $_.TypeDetail -eq 128 ) { $item.type = 'Synchronous' }
    if ( $_.TypeDetail -eq 256 ) { $item.type = 'CMOS' }
    if ( $_.TypeDetail -eq 512 ) { $item.type = 'EDO' }
    if ( $_.TypeDetail -eq 1024 ) { $item.type = 'Window DRAM' }
    if ( $_.TypeDetail -eq 2048 ) { $item.type = 'Cache DRAM' }
    if ( $_.TypeDetail -eq 4096 ) { $item.type = 'Non-volatile' }

    $result.memory += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.memory.count
    Write-Host "Memory, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.motherboard = @()
$item = @{}
$Win32_BaseBoard | ForEach {
  Clear-Variable -name item
  $item = @{}
  $item.model = $_.Product
  $item.manufacturer = $_.Manufacturer
  $item.serial = $_.SerialNumber
  # Note below is technically incorrect. We just put the number of physical processors installed here
  $item.processor_slot_count = [int]($Win32_ComputerSystem.NumberOfProcessors)
  $item.processor_type = $processor_type
  $item.memory_slot_count = (Get-WmiObject -Class Win32_PhysicalMemoryArray).MemoryDevices
  $result.motherboard += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    Write-Host "Motherboard, 1 entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.optical = @()
$item = @{}
Get-WmiObject -Class Win32_CDROMDrive | ForEach {
  Clear-Variable -name item
  $item = @{}
  $item.description = $_.Caption
  $item.model = $_.Caption
  $item.device = $_.DeviceID
  $item.mount_point = $_.Drive
  $item.serial = if ($_.SerialNumber) { $item.SerialNumber } else { "" }
  $result.optical += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.optical.count
    Write-Host "Optical, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.video = @()
$item = @{}
Get-WmiObject -Class Win32_VideoController | ForEach {
  Clear-Variable -name item
  $item = @{}
    if ( ($_.Caption -eq 'vnc') -or ($_.Caption -eq "Microsoft Basic Render Driver") -or ($_.Caption -eq "DameWare") -or ($_.Caption -eq "Innobec SideWindow") -or ($_.Caption -eq "ConfigMgr Remote Control Driver") -or ($_.Caption -eq "Mirage Driver") -or ($_.Caption -eq "VNC Mirror Driver") -or ($_.Caption -eq "Microsoft SMS Mirror Driver") ) {
      continue
  }
  $item.model = $_.Name
  $item.device = $_.PNPDeviceID
  $item.manufacturer = $_.AdapterCompatibility
  $item.size = [Math]::Round($_.AdapterRAM / 1024 / 1024)
  $result.video += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.video.count
    Write-Host "Video, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.monitor = @()
$item = @{}
$Win32_DesktopMonitor | ForEach {
  Clear-Variable -name item
  $item = @{}
  $item.model = $_.Caption
  $item.device = $_.PNPDeviceID
  $item.manufacturer = $_.MonitorManufacturer
  if ( $_.MonitorManufacturer -eq 'ACR') { $item.manufacturer = 'Acer' }
  if ( $_.MonitorManufacturer -eq 'ACT') { $item.manufacturer = 'Targa' }
  if ( $_.MonitorManufacturer -eq 'ADI') { $item.manufacturer = 'ADI' }
  if ( $_.MonitorManufacturer -eq 'AOC') { $item.manufacturer = 'AOC International' }
  if ( $_.MonitorManufacturer -eq 'API') { $item.manufacturer = 'Acer' }
  if ( $_.MonitorManufacturer -eq 'APP') { $item.manufacturer = 'Apple' }
  if ( $_.MonitorManufacturer -eq 'ART') { $item.manufacturer = 'ArtMedia' }
  if ( $_.MonitorManufacturer -eq 'AST') { $item.manufacturer = 'AST Research' }
  if ( $_.MonitorManufacturer -eq 'CPL') { $item.manufacturer = 'Compal' }
  if ( $_.MonitorManufacturer -eq 'CPQ') { $item.manufacturer = 'Compaq' }
  if ( $_.MonitorManufacturer -eq 'CTX') { $item.manufacturer = 'Chuntex' }
  if ( $_.MonitorManufacturer -eq 'DEC') { $item.manufacturer = 'Digital Equipment Corporation' }
  if ( $_.MonitorManufacturer -eq 'DEL') { $item.manufacturer = 'Dell' }
  if ( $_.MonitorManufacturer -eq 'Dell Inc.') { $item.manufacturer = 'Dell' }
  if ( $_.MonitorManufacturer -like '*Dell Inc.*') { $item.manufacturer = 'Dell' }
  if ( $_.MonitorManufacturer -eq 'DPC') { $item.manufacturer = 'Delta' }
  if ( $_.MonitorManufacturer -eq 'DWE') { $item.manufacturer = 'Daewoo' }
  if ( $_.MonitorManufacturer -eq 'ECS') { $item.manufacturer = 'Elitegroup Computer Systems' }
  if ( $_.MonitorManufacturer -eq 'EIZ') { $item.manufacturer = 'EIZO' }
  if ( $_.MonitorManufacturer -eq 'EPI') { $item.manufacturer = 'Envision' }
  if ( $_.MonitorManufacturer -eq 'FCM') { $item.manufacturer = 'Funai' }
  if ( $_.MonitorManufacturer -eq 'FUS') { $item.manufacturer = 'Fujitsu' }
  if ( $_.MonitorManufacturer -eq 'GSM') { $item.manufacturer = 'LG Electronics' }
  if ( $_.MonitorManufacturer -eq 'GWY') { $item.manufacturer = 'Gateway 2000' }
  if ( $_.MonitorManufacturer -eq 'HEI') { $item.manufacturer = 'Hyundai' }
  if ( $_.MonitorManufacturer -eq 'HIT') { $item.manufacturer = 'Hitachi' }
  if ( $_.MonitorManufacturer -eq 'HSD') { $item.manufacturer = 'Hanns.G' }
  if ( $_.MonitorManufacturer -eq 'HSL') { $item.manufacturer = 'Hansol Electronics' }
  if ( $_.MonitorManufacturer -eq 'HTC') { $item.manufacturer = 'Hitachi' }
  if ( $_.MonitorManufacturer -eq 'HWP') { $item.manufacturer = 'Hewlett Packard' }
  if ( $_.MonitorManufacturer -eq 'IBM') { $item.manufacturer = 'IBM' }
  if ( $_.MonitorManufacturer -eq 'ICL') { $item.manufacturer = 'Fujitsu' }
  if ( $_.MonitorManufacturer -eq 'IVM') { $item.manufacturer = 'Idek Iiyama' }
  if ( $_.MonitorManufacturer -eq 'KFC') { $item.manufacturer = 'KFC Computek' }
  if ( $_.MonitorManufacturer -eq 'LEN') { $item.manufacturer = 'Lenovo' }
  if ( $_.MonitorManufacturer -eq 'LGD') { $item.manufacturer = 'LG Display' }
  if ( $_.MonitorManufacturer -eq 'LKM') { $item.manufacturer = 'ADLAS / AZALEA' }
  if ( $_.MonitorManufacturer -eq 'LNK') { $item.manufacturer = 'LINK Technologies' }
  if ( $_.MonitorManufacturer -eq 'LTN') { $item.manufacturer = 'Lite-On' }
  if ( $_.MonitorManufacturer -eq 'MAG') { $item.manufacturer = 'MAG InnoVision' }
  if ( $_.MonitorManufacturer -eq 'MAX') { $item.manufacturer = 'Maxdata Computer' }
  if ( $_.MonitorManufacturer -eq 'MEI') { $item.manufacturer = 'Panasonic' }
  if ( $_.MonitorManufacturer -eq 'MEL') { $item.manufacturer = 'Mitsubishi Electronics' }
  if ( $_.MonitorManufacturer -eq 'MIR') { $item.manufacturer = 'Miro' }
  if ( $_.MonitorManufacturer -eq 'MTC') { $item.manufacturer = 'MITAC' }
  if ( $_.MonitorManufacturer -eq 'NAN') { $item.manufacturer = 'NANAO' }
  if ( $_.MonitorManufacturer -eq 'NEC') { $item.manufacturer = 'NEC' }
  if ( $_.MonitorManufacturer -eq 'NOK') { $item.manufacturer = 'Nokia' }
  if ( $_.MonitorManufacturer -eq 'OQI') { $item.manufacturer = 'Optiquest' }
  if ( $_.MonitorManufacturer -eq 'PBN') { $item.manufacturer = 'Packard Bell' }
  if ( $_.MonitorManufacturer -eq 'PGS') { $item.manufacturer = 'Princeton Graphic Systems' }
  if ( $_.MonitorManufacturer -eq 'PHL') { $item.manufacturer = 'Philips' }
  if ( $_.MonitorManufacturer -eq 'PNP') { $item.manufacturer = 'Plug n Play (Microsoft)' }
  if ( $_.MonitorManufacturer -eq 'REL') { $item.manufacturer = 'Relisys' }
  if ( $_.MonitorManufacturer -eq 'SAM') { $item.manufacturer = 'Samsung' }
  if ( $_.MonitorManufacturer -eq 'SEC') { $item.manufacturer = 'Samsung' }
  if ( $_.MonitorManufacturer -eq 'SHP') { $item.manufacturer = 'Sharp' }
  if ( $_.MonitorManufacturer -eq 'SMI') { $item.manufacturer = 'Smile' }
  if ( $_.MonitorManufacturer -eq 'SMC') { $item.manufacturer = 'Samtron' }
  if ( $_.MonitorManufacturer -eq 'SNI') { $item.manufacturer = 'Siemens Nixdorf' }
  if ( $_.MonitorManufacturer -eq 'SNY') { $item.manufacturer = 'Sony Corporation' }
  if ( $_.MonitorManufacturer -eq 'SPT') { $item.manufacturer = 'Sceptre' }
  if ( $_.MonitorManufacturer -eq 'SRC') { $item.manufacturer = 'Shamrock Technology' }
  if ( $_.MonitorManufacturer -eq 'STN') { $item.manufacturer = 'Samtron' }
  if ( $_.MonitorManufacturer -eq 'STP') { $item.manufacturer = 'Sceptre' }
  if ( $_.MonitorManufacturer -eq 'TAT') { $item.manufacturer = 'Tatung' }
  if ( $_.MonitorManufacturer -eq 'TRL') { $item.manufacturer = 'Royal Information Company' }
  if ( $_.MonitorManufacturer -eq 'TOS') { $item.manufacturer = 'Toshiba' }
  if ( $_.MonitorManufacturer -eq 'TSB') { $item.manufacturer = 'Toshiba' }
  if ( $_.MonitorManufacturer -eq 'UNM') { $item.manufacturer = 'Unisys' }
  if ( $_.MonitorManufacturer -eq 'VSC') { $item.manufacturer = 'ViewSonic' }
  if ( $_.MonitorManufacturer -eq 'WTC') { $item.manufacturer = 'Wen Technology' }
  if ( $_.MonitorManufacturer -eq 'ZCM') { $item.manufacturer = 'Zenith Data Systems' }
  if ( $_.MonitorManufacturer -eq '___') { $item.manufacturer = 'Targa' }
  $result.monitor += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.monitor.count
    Write-Host "Monitor, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.sound = @()
$item = @{}
Get-WmiObject -Class Win32_SoundDevice | ForEach {
  Clear-Variable -name item
  $item = @{}
  $item.model = $_.Name
  $item.device = $_.DeviceID
  $item.manufacturer = $_.Manufacturer
  $result.sound += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.sound.count
    Write-Host "Sound, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.disk = @()
$item = @{}
Get-WmiObject -Class Win32_DiskDrive | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.model = $_.Name
    $item.device = $_.DeviceID
    $item.manufacturer = $_.Manufacturer
    $item.caption = $_.Caption
    $item.index = $_.Index
    $item.interface_type = $_.InterfaceType
    $item.scsi_logical_unit = $_.SCSITargetId
    $item.model = $_.Model
    if ($item.model.IndexOf("VMware") -eq 0) { $item.model = "VMware Virtual Disk" }
    $item.serial = $_.SerialNumber
    $item.pnp_id = ($_.PNPDeviceID + "_0")
    $item.pnp_id = $item.pnp_id.ToLower()
    $item.firmware = if ($_.FirmwareRevision) { $_.FirmwareRevision } Else { "" }
    $item.serial = if ($_.SerialNumber) { $_.SerialNumber } Else { "" }
    $item.size = [Math]::Round($_.size / 1024 / 1024)
    $item.partitions = $_.Partitions
    if ($item.manufacturer -eq "(Standard disk drives)") {
        $model = $item.model.ToLower();
        if ($model.IndexOf("hitachi") -eq 0) { $item.manufacturer = "Hitachi" }
        if ($model.IndexOf("maxtor") -eq 0) { $item.manufacturer = "Maxtor" }
        if ($model.IndexOf("sandisk") -eq 0) { $item.manufacturer = "SanDisk" }
        if ($model.IndexOf("st") -eq 0) { $item.manufacturer = "Seagate" }
        if ($model.IndexOf("wdc") -eq 0) { $item.manufacturer = "Western Digital" }
        if ($model.IndexOf("wd ") -eq 0) { $item.manufacturer = "Western Digital" }
        if ($model.IndexOf("vmware") -eq 0) { $item.manufacturer = "VMware" }
    }
    $item.status = "Not available"
    if ( $MSStorageDriver ) {
        $MSStorageDriver | ForEach {
            if ($_.InstanceName.ToLower() -eq $item.pnp_id) {
                if ($_.PredictFailure -And $_.Active) {
                    $item.status = $_.PredictFailure + " because of " + $_.Reason
                } else {
                    $item.status = "OK"
                }
            }
        }
    }
    $result.disk += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.disk.count
    Write-Host "Disk, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.partition = @()
$item = @{}
Get-WmiObject -Class Win32_LogicalDisk -Filter 'DriveType = "2" or DriveType = "3"' | ForEach {
  Clear-Variable -name item
  $item = @{}
  $item.device = $_.DeviceID
  $item.mount_type = "partition"
  $item.size = [Math]::Round($_.Size / 1024 / 1024)
    $item.description = $_.Caption
    $item.format = $_.FileSystem
    $item.free = [Math]::Round($_.FreeSpace / 1024 / 1024)
    $item.hard_drive_index = ""
    $item.mount_point = $_.Caption
    $item.name = if ($_.VolumeName) { $_.VolumeName } else { "" }
    $item.serial = if ($_.VolumeSerialNumber) { $_.VolumeSerialNumber } else { "" }
    if ($_.DriveType = "2") {$item.type = "local removable"}
    if ($_.DriveType = "3") {$item.type = "local"}
    $item.used = [Math]::Round($item.size - $item.free)
    $Win32_LogicalDiskToPartition | ForEach {
        if ($_.Dependent.IndexOf($item.device) -ne "null") {
            $replace = "\\" + $_.PSComputerName + "\root\cimv2:Win32_DiskPartition.DeviceID="
            $item.device = $_.Antecedent.Replace($replace, "")
            $item.device = $item.device.Replace('"', "")
            $temp = $item.device.Split("#")
            $temp1 = $temp[1]
            $temp1 = $temp1.Split(",")
            $item.hard_drive_index = [int]$temp1[0]
        }
    }
  $result.partition += $item
}
if ($Win32_MappedLogicalDisk) {
  $Win32_MappedLogicalDisk | ForEach {
        Clear-Variable -name item
        $item = @{}
        $item.bootable = ""
        $item.device = $_.DeviceID
        $item.description = $_.Caption
        $item.format = $_.FileSystem
        $item.free = [Math]::Round($_.FreeSpace / 1024 / 1024)
        $item.hard_drive_index = ""
        $item.mount_point = $_.Caption
        $item.mount_type = "mount point"
        $item.name = if ($_.VolumeName) { $_.VolumeName } else { "" }
        $item.partition_disk_index = ""
        $item.serial = if ($_.VolumeSerialNumber) { $_.VolumeSerialNumber } else { "" }
        $item.size = [Math]::Round($_.Size / 1024 / 1024)
        $item.type = "smb"
        $item.used = [Math]::Round($item.size - $item.free)

        $result.partition += $item
    }
}
Get-WmiObject -Class Win32_Volume -Filter 'DriveLetter = NULL' | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.bootable = ""
    $item.description = $_.Caption
    $item.device = $_.DeviceID
    $item.format = $_.FileSystem
    $item.free = [Math]::Round($_.FreeSpace / 1024 / 1024)
    $item.hard_drive_index = ""
    $item.mount_point = $_.Caption
    $item.mount_type = "mount point"
    $item.name = if ($_.VolumeName) { $_.VolumeName } else { "" }
    $item.partition_disk_index = ""
    $item.serial = if ($_.VolumeSerialNumber) { $_.VolumeSerialNumber } else { "" }
    $item.size = [Math]::Round($_.Size / 1024 / 1024)
    $item.type = "volume"
    $item.used = [Math]::Round($item.size - $item.free)

  $result.partition += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.partition.count
    Write-Host "Volume, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.share = @()
Get-WmiObject -Class Win32_Share -filter 'type = "0"' | Select Path, Name, Description | ForEach {
  Clear-Variable -name item
  $item = @{}
  $item.path = $_.Path
  $item.name = $_ | Select -ExpandProperty Name
  $item.description = $_.Description
  $item.size = 0
  if (($_.Path) -and $_.Path -ne "C:\WINNT" -and $_.Path -ne "C:\WINDOWS" -and $_.Path -ne "C:\" -and ($_.Path.ToCharArray() | Select-Object -First 1) -ne "\" -and $_.Path.Length -gt 3) {
      $item.size = [Int]((Get-ChildItem -Path $_.Path -Recurse | Measure-Object -Sum Length).Sum / 1024 / 1024)
  }
  $share_permissions = ""
  Get-WmiObject -Class Win32_LogicalShareAccess | ForEach {
      $SecuritySetting = $_.SecuritySetting
      $temp = $SecuritySetting.Split('"')
      $ShareName = $temp[1]
      $permission = ""
      if ($ShareName -eq $item.name) {
          $permission = ""
          $temp = $_.Trustee.Split('"')
          $trustee = $temp[1]
          $sid = [WMI]"root\cimv2:win32_sid.sid='$trustee'"
          $account = $sid.ReferencedDomainName
          if ($account) {
              $account = $account + " " + $sid.AccountName
          } else {
              $account = $sid.AccountName
          }
          If ($_.AccessMask -band 1048576 ) {
              $permission = ',"Synchronize"'
          }
          If ($_.AccessMask -band 524288) {
              $permission = $permission + ',"Write owner"'
          }
          If ($_.AccessMask -band 262144) {
              $permission = $permission + ',"Write ACL"'
          }
          If ($_.AccessMask -band 131072) {
              $permission = $permission + ',"Read security"'
          }
          If ($_.AccessMask -band 65536) {
              $permission = $permission + ',"Delete"'
          }
          If ($_.AccessMask -band 256) {
              $permission = $permission + ',"Write attributes"'
          }
          If ($_.AccessMask -band 128) {
              $permission = $permission + ',"Read attributes"'
          }
          If ($_.AccessMask -band 64) {
              $permission = $permission + ',"Delete dir"'
          }
          If ($_.AccessMask -band 32) {
              $permission = $permission + ',"Execute"'
          }
          If ($_.AccessMask -band 16) {
              $permission = $permission + ',"Write extended attributes"'
          }
          If ($_.AccessMask -band 8) {
              $permission = $permission + ',"Read extended attributes"'
          }
          If ($_.AccessMask -band 4) {
              $permission = $permission + ',"Append"'
          }
          If ($_.AccessMask -band 2) {
              $permission = $permission + ',"Write"'
          }
          If ($_.AccessMask -band 1) {
              $permission = $permission + ',"Read"'
          }
            $permission = $permission.Substring(1,($permission.Length-1));
            $share_permissions = $share_permissions + '"' + $account + '":[' + $permission + "],"
      }
      if ($share_permissions.Length -gt 1) {
          $item.users = "{" + $share_permissions.Substring(0, ($share_permissions.Length - 1)) + "}"
      }
  }
  $result.share += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.share.count
    Write-Host "Share, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.network = @()
$item = @{}
Get-WmiObject -Class Win32_NetworkAdapterConfiguration -filter "IPEnabled = True or (ServiceName<>'' AND ServiceName<>'AsyncMac' AND ServiceName<>'VMnetx' AND ServiceName<>'VMnetadapter' AND ServiceName<>'Rasl2tp' AND ServiceName<>'msloop' AND ServiceName<>'PptpMiniport' AND ServiceName<>'Raspti' AND ServiceName<>'NDISWan' AND ServiceName<>'NdisWan4' AND ServiceName<>'RasPppoe' AND ServiceName<>'NdisIP' AND ServiceName<>'tunmp' AND Description<>'PPP Adapter.') AND MACAddress is not NULL" | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.dns_server = ""
    $item.net_index = if ($_.Index) { $_ | select -ExpandProperty Index } Else { "" }
    $item.mac_address = if ($_.MACAddress) { $_.MACAddress } Else { "" }
    $item.description = if ($_.Description) { $_.Description } Else { "" }
    $item.dhcp_enabled = [string]$_.DHCPEnabled
    $item.dhcp_server = if ($_.DHCPServer) { $_.DHCPServer } Else { "" }
    $item.dns_server = if ($_.DNSServerSearchOrder) { $_.DNSServerSearchOrder  -join "," } Else { "" }
    $item.dns_host_name = if ($_.DNSHostName) { $_.DNSHostName } Else { "" }
    $item.dns_domain = if ($_.DNSDomain) { $_.DNSDomain } Else { "" }
    $item.dhcp_lease_obtained = if ($_.DHCPLeaseObtained) { [string]($_.ConvertToDateTime($_.DHCPLeaseObtained) -f "yyyy/MM/ddy") } Else { "" }
    $item.dhcp_lease_expires = if ($_.DHCPLeaseExpires) { [string]($_.ConvertToDateTime($_.DHCPLeaseExpires) -f "yyyy/MM/ddy") } Else { "" }
    $item.ip_enabled = [string]$_.IPEnabled
    $item.dns_domain_reg_enabled = [string]$_.DomainDNSRegistrationEnabled
    $item.net_wins_primary = if ($_.WINSPrimaryServer) { $_.WINSPrimaryServer } Else { "" }
    $item.net_wins_lmhosts_enabled = [string]$_.WINSEnableLMHostsLookup
    $item.net_wins_secondary = if ($_.WINSSecondaryServer) { $_.WINSSecondaryServer } Else { "" }
    $Win32_NetworkAdapter | ForEach {
        if ($item.net_index -eq $_.index) {
            $item.adapter_type = $_.AdapterType
            $item.manufacturer = $_.Manufacturer
            $item.model = $_.ProductName
            $item.connection_id = $_.NetConnectionID
            $item.connection_status = $_.NetConnectionStatus
            $item.speed = 0
            if ($_.NetConnectionStatus -eq "2" -or $_.NetConnectionStatus -eq "9") {
                # Found a connected NIC: detecting link speed
                $item.speed = $_.Speed
            }
        }
    }
    $result.network += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.network.count
    Write-Host "Network, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$ip_address_array = @()
$result.ip = @()
$item = @{}
$dns_server = ""
Get-WmiObject -Class Win32_NetworkAdapterConfiguration -filter "IPEnabled = True AND MACAddress is not NULL" | ForEach {
    for ($i = 0; $i -lt $_.IPAddress.Length; $i++) {
        Clear-Variable -name item
        $item = @{}
        $item.mac = if ($_.MACAddress) { $_.MACAddress } Else { "" }
        $item.net_index = if ($_.Index) { $_.Index } Else { "" }
        $item.subnet = if ($_.IPSubnet[$i]) { $_.IPSubnet[$i] } Else { "" }
        $item.ip = if ($_.IPAddress[$i]) { [string]$_.IPAddress[$i] } Else { "" }
        $length = $item.ip.Length
        $item.version = if ($length -gt 15) { 6 } Else { 4 }
        $result.ip += $item
        $ip_address_array += $result.ip
        $dns_server = if ($_.DNSServerSearchOrder[0]) { $_.DNSServerSearchOrder[0] }
    }
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.ip.count
    Write-Host "IP, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
if ($dns_server) {
    $result.dns = @()
    $item = @{}
    Get-WmiObject -Namespace "root\MicrosoftDNS" -ComputerName $dns_server -Class MicrosoftDNS_AType  -ErrorAction Ignore | ForEach {
        Clear-Variable -name item
        $item = @{}
        $temp = $_.OwnerName.Split("#")
        $item.name = $temp[0]
        $item.fqdn = $_.OwnerName
        $item.ip = $_.IPAddress
        $result.dns += $item
    }
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.dns.count
    Write-Host "DNS, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.usb = @()
$item = @{}
Get-WmiObject Win32_USBControllerDevice | %{[wmi]($_.Dependent)} | ForEach {
    Clear-Variable -name item
    if ($_.Description.ToLower() -notlike '*bluetooth*') {
        $item = @{}
        $item.name = $_.name
        $item.availability = $_.Availability
        switch ($_.Availability) {
            "1" { $item.availability = "1 - Other" }
            "2" { $item.availability = "2 - Unknown" }
            "3" { $item.availability = "3 - Running/Full Power" }
            "4" { $item.availability = "4 - Warning" }
            "5" { $item.availability = "5 - In Test" }
            "6" { $item.availability = "6 - Not Applicable" }
            "7" { $item.availability = "7 - Power Off" }
            "8" { $item.availability = "8 - Off Line" }
            "9" { $item.availability = "9 - Off Duty" }
            "10" { $item.availability = "10 - Degraded" }
            "11" { $item.availability = "11 - Not Installed" }
            "12" { $item.availability = "12 - Install Error" }
            "13" { $item.availability = "13 - Power Save - Unknown" }
            "14" { $item.availability = "14 - Power Save - Low Power Mode" }
            "15" { $item.availability = "15 - Power Save - Standby" }
            "16" { $item.availability = "16 - Power Cycle" }
            "17" { $item.availability = "17 - Power Save - Warning" }
            "18" { $item.availability = "18 - Paused" }
            "19" { $item.availability = "19 - Not Ready" }
            "20" { $item.availability = "20 - Not Configured" }
            "21" { $item.availability = "21 - Quiesced" }
            default { $item.availability = "0 - Available" }
        }
        $item.config_manager_error_code = $_.ConfigManagerErrorCode
        switch ($_.ConfigManagerErrorCode) {
            "0" { $item.config_manager_error_code = "0 - This device is working properly." }
            "1" { $item.config_manager_error_code = "1 - This device is not configured correctly." }
            "2" { $item.config_manager_error_code = "2 - Windows cannot load the driver for this device." }
            "3" { $item.config_manager_error_code = "3 - The driver for this device might be corrupted, or your system may be running low on memory or other resources." }
            "4" { $item.config_manager_error_code = "4 - This device is not working properly. One of its drivers or your registry might be corrupted." }
            "5" { $item.config_manager_error_code = "5 - The driver for this device needs a resource that Windows cannot manage." }
            "6" { $item.config_manager_error_code = "6 - The boot configuration for this device conflicts with other devices." }
            "7" { $item.config_manager_error_code = "7 - Cannot filter." }
            "8" { $item.config_manager_error_code = "8 - The driver loader for the device is missing." }
            "9" { $item.config_manager_error_code = "9 - This device is not working properly because the controlling firmware is reporting the resources for the device incorrectly." }
            "10" { $item.config_manager_error_code = "10 - This device cannot start." }
            "11" { $item.config_manager_error_code = "11 - This device failed." }
            "12" { $item.config_manager_error_code = "12 - This device cannot find enough free resources that it can use." }
            "13" { $item.config_manager_error_code = "13 - Windows cannot verify this device's resources." }
            "14" { $item.config_manager_error_code = "14 - This device cannot work properly until you restart your computer." }
            "15" { $item.config_manager_error_code = "15 - This device is not working properly because there is probably a re-enumeration problem." }
            "16" { $item.config_manager_error_code = "16 - Windows cannot identify all the resources this device uses." }
            "17" { $item.config_manager_error_code = "17 - This device is asking for an unknown resource type." }
            "18" { $item.config_manager_error_code = "18 - Reinstall the drivers for this device." }
            "19" { $item.config_manager_error_code = "19 - Failure using the VxD loader." }
            "20" { $item.config_manager_error_code = "20 - Your registry might be corrupted." }
            "21" { $item.config_manager_error_code = "21 - System failure: Try changing the driver for this device. If that does not work, see your hardware documentation. Windows is removing this device." }
            "22" { $item.config_manager_error_code = "22 - This device is disabled." }
            "23" { $item.config_manager_error_code = "23 - System failure: Try changing the driver for this device. If that doesn't work, see your hardware documentation." }
            "24" { $item.config_manager_error_code = "24 - This device is not present, is not working properly, or does not have all its drivers installed." }
            "25" { $item.config_manager_error_code = "25 - Windows is still setting up this device." }
            "26" { $item.config_manager_error_code = "26 - Windows is still setting up this device." }
            "27" { $item.config_manager_error_code = "27 - This device does not have valid log configuration." }
            "28" { $item.config_manager_error_code = "28 - The drivers for this device are not installed." }
            "29" { $item.config_manager_error_code = "29 - This device is disabled because the firmware of the device did not give it the required resources." }
            "30" { $item.config_manager_error_code = "30 - This device is using an Interrupt Request (IRQ) resource that another device is using." }
            "31" { $item.config_manager_error_code = "31 - This device is not working properly because Windows cannot load the drivers required for this device." }
        }
        $item.description = $_.Description
        $item.device = $_.DeviceID
        $item.manufacturer = $_.Manufacturer
        $item.present = "false"
        if ($_.Present) {
            $item.present = "true"
        }
        $item.serial = ""
        $item.status = $_.Status
        $result.usb += $item
    }
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.usb.count
    Write-Host "USB, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.printer = @()
$item = @{}
Get-WmiObject Win32_Printer -filter "PrintProcessor <> 'winprint'" | ForEach {
    Clear-Variable -name item
    if ($_.Attributes -and 64) {
        $item = @{}
        $item.name = $_.Name
        $item.description = if ($_.Comment) { $_.Comment } Else { "" }
        $item.device = $_.DeviceID
        $item.driver = $_.DriverName
        $item.port_name = $_.PortName
        $item.shared = $_.Shared
        $item.shared_name = $_.ShareName
        $item.location = $_.Location
        $item.color = "False"
        foreach ($capability in $_.CapabilityDescriptions) {
            if ($capability -like '*Color*') {
                $item.color = "True"
            }
        }
        $item.duplex = "False"
        foreach ($capability in $_.CapabilityDescriptions) {
            if ($capability -like '*Duplex*') {
                $item.duplex = "True"
            }
        }
        $item.model = $_.DriverName
        $item.model = $item.model.Replace(" PCL 5e", "")
        $item.model = $item.model.Replace(" PCL 5", "")
        $item.model = $item.model.Replace(" PCL5", "")
        $item.model = $item.model.Replace(" PCL 6e", "")
        $item.model = $item.model.Replace(" PCL 6", "")
        $item.model = $item.model.Replace(" PCL6", "")
        $item.model = $item.model.Replace(" PCL", "")
        $item.model = $item.model.Replace(" PS", "")
        $item.manufacturer = ""
        if ($item.model -like "*Aficio*") { $item.manufacturer = "Ricoh" }
        if ($item.model -like "*AGFA*") { $item.manufacturer = "Agfa" }
        if ($item.model -like "*Apple Laser*") { $item.manufacturer = "Apple Computer, Inc." }
        if ($item.model -like "*Brother*") { $item.manufacturer = "Brother" }
        if ($item.model -like "*Canon*") { $item.manufacturer = "Canon" }
        if ($item.model -like "*Color-MFPe*") { $item.manufacturer = "Toshiba" }
        if ($item.model -like "*Datamax*") { $item.manufacturer = "Datamax" }
        if ($item.model -like "*Dell*") { $item.manufacturer = "Dell" }
        if ($item.model -like "*DYMO*") { $item.manufacturer = "Dymo" }
        if ($item.model -like "*EasyCoder*") { $item.manufacturer = "Intermec" }
        if ($item.model -like "*Epson*") { $item.manufacturer = "Epson" }
        if ($item.model -like "*Fiery*") { $item.manufacturer = "Konica Minolta" }
        if ($item.model -like "*Fuji*") { $item.manufacturer = "Fujitsu" }
        if ($item.model -like "*FX ApeosPort*") { $item.manufacturer = "Fujitsu" }
        if ($item.model -like "*FX DocuCentre") { $item.manufacturer = "Fujitsu" }
        if ($item.model -like "*FX DocuPrint*") { $item.manufacturer = "Fujitsu" }
        if ($item.model -like "*FX DocuWide*")  { $item.manufacturer = "Fujitsu" }
        if ($item.model -like "*FX Document*") { $item.manufacturer = "Xerox" }
        if ($item.model -like "*GelSprinter*") { $item.manufacturer = "Ricoh" }
        if ($item.model -like "*HP *") { $item.manufacturer = "Hewlett Packard" }
        if ($item.model -like "*Konica*") { $item.manufacturer = "Konica Minolta" }
        if ($item.model -like "*Kyocera*") { $item.manufacturer = "Kyocera Mita" }
        if ($item.model -like "*LAN-Fax*") { $item.manufacturer = "Ricoh" }
        if ($item.model -like "*Lexmark*") { $item.manufacturer = "Lexmark" }
        if ($item.model -like "*Mita*") { $item.manufacturer = "Kyocera Mita" }
        if ($item.model -like "*Muratec*") { $item.manufacturer = "Muratec" }
        if ($item.model -like "*Oce*") { $item.manufacturer = "Oce" }
        if ($item.model -like "*Oki*") { $item.manufacturer = "Oki" }
        if ($item.model -like "*Panaboard*") { $item.manufacturer = "Panasonic" }
        if ($item.model -like "*Ricoh*") { $item.manufacturer = "Ricoh" }
        if ($item.model -like "*Samsung*") { $item.manufacturer = "Samsung" }
        if ($item.model -like "*Sharp*") { $item.manufacturer = "Sharp" }
        if ($item.model -like "*SP 3*") { $item.manufacturer = "Ricoh" }
        if ($item.model -like "*Tektronix*") { $item.manufacturer = "Tektronix" }
        if ($item.model -like "*Toshiba*") { $item.manufacturer = "Toshiba" }
        if ($item.model -like "*Xerox*") { $item.manufacturer = "Xerox" }
        if ($item.model -like "*ZDesigner*") { $item.manufacturer = "Zebra" }
        if ($item.model -like "*Zebra*") { $item.manufacturer = "Zebra" }
        $item.type = "Unknown"
        if ($_.MarkingTechnology -eq 1 ) { $item.type = "Other" }
        if ($_.MarkingTechnology -eq 2 ) { $item.type = "Unknown" }
        if ($_.MarkingTechnology -eq 3 ) { $item.type = "Electrophotographic LED" }
        if ($_.MarkingTechnology -eq 4 ) { $item.type = "Electrophotographic Laser" }
        if ($_.MarkingTechnology -eq 5 ) { $item.type = "Electrophotographic Other" }
        if ($_.MarkingTechnology -eq 6 ) { $item.type = "Impact Moving Head Dot Matrix 9pin" }
        if ($_.MarkingTechnology -eq 7 ) { $item.type = "Impact Moving Head Dot Matrix 24pin" }
        if ($_.MarkingTechnology -eq 8 ) { $item.type = "Impact Moving Head Dot Matrix Other" }
        if ($_.MarkingTechnology -eq 9 ) { $item.type = "Impact Moving Head Fully Formed" }
        if ($_.MarkingTechnology -eq 10 ) { $item.type = "Impact Band" }
        if ($_.MarkingTechnology -eq 11 ) { $item.type = "Impact Other" }
        if ($_.MarkingTechnology -eq 12 ) { $item.type = "Inkjet Aqueous" }
        if ($_.MarkingTechnology -eq 13 ) { $item.type = "Inkjet Solid" }
        if ($_.MarkingTechnology -eq 14 ) { $item.type = "Inkjet Other" }
        if ($_.MarkingTechnology -eq 15 ) { $item.type = "Pen" }
        if ($_.MarkingTechnology -eq 16 ) { $item.type = "Thermal Transfer" }
        if ($_.MarkingTechnology -eq 17 ) { $item.type = "Thermal Sensitive" }
        if ($_.MarkingTechnology -eq 18 ) { $item.type = "Thermal Diffusion" }
        if ($_.MarkingTechnology -eq 19 ) { $item.type = "Thermal Other" }
        if ($_.MarkingTechnology -eq 20 ) { $item.type = "Electroerosion" }
        if ($_.MarkingTechnology -eq 21 ) { $item.type = "Electrostatic" }
        if ($_.MarkingTechnology -eq 22 ) { $item.type = "Photographic Microfiche" }
        if ($_.MarkingTechnology -eq 23 ) { $item.type = "Photographic Imagesetter" }
        if ($_.MarkingTechnology -eq 24 ) { $item.type = "Photographic Other" }
        if ($_.MarkingTechnology -eq 25 ) { $item.type = "Ion Deposition" }
        if ($_.MarkingTechnology -eq 26 ) { $item.type = "eBeam" }
        if ($_.MarkingTechnology -eq 27 ) { $item.type = "Typesetter" }
        $item.status = ""
        if ($_.ExtendedPrinterStatus -eq 1 ) { $item.status = "Other" }
        if ($_.ExtendedPrinterStatus -eq 2 ) { $item.status = "Unknown" }
        if ($_.ExtendedPrinterStatus -eq 3 ) { $item.status = "Idle" }
        if ($_.ExtendedPrinterStatus -eq 4 ) { $item.status = "Printing" }
        if ($_.ExtendedPrinterStatus -eq 5 ) { $item.status = "Warming Up" }
        if ($_.ExtendedPrinterStatus -eq 6 ) { $item.status = "Stopped Printing" }
        if ($_.ExtendedPrinterStatus -eq 7 ) { $item.status = "Offline" }
        if ($_.ExtendedPrinterStatus -eq 8 ) { $item.status = "Paused" }
        if ($_.ExtendedPrinterStatus -eq 9 ) { $item.status = "Error" }
        if ($_.ExtendedPrinterStatus -eq 10 ) { $item.status = "Busy" }
        if ($_.ExtendedPrinterStatus -eq 11 ) { $item.status = "Not Available" }
        if ($_.ExtendedPrinterStatus -eq 12 ) { $item.status = "Waiting" }
        if ($_.ExtendedPrinterStatus -eq 13 ) { $item.status = "Processing" }
        if ($_.ExtendedPrinterStatus -eq 14 ) { $item.status = "Initialization" }
        if ($_.ExtendedPrinterStatus -eq 15 ) { $item.status = "Power Save" }
        if ($_.ExtendedPrinterStatus -eq 16 ) { $item.status = "Pending Deletion" }
        if ($_.ExtendedPrinterStatus -eq 17 ) { $item.status = "I/O Active" }
        if ($_.ExtendedPrinterStatus -eq 18 ) { $item.status = "Manual Feed" }
        $item.capabilities = [string]::join(", ", $_.CapabilityDescriptions)
        $result.printer += $item
    }
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.printer.count
    Write-Host "Printer, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.task = @()
$item = @{}
Get-ScheduledTask | Select-Object *, @{Name="RunAs";Expression={ $_.principal.userid }} | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.name = $_.TaskName
    $item.status = [Microsoft.PowerShell.Cmdletization.GeneratedTypes.ScheduledTask.StateEnum].GetEnumNames()[$_.State]
    $item.creator = ""
    $item.schedule = ""
    $item.task = $_.Actions.Execute + " " + $_.Actions.Arguments
    $item.state = [Microsoft.PowerShell.Cmdletization.GeneratedTypes.ScheduledTask.StateEnum].GetEnumNames()[$_.State]
    $item.runas = if ($_.RunAs) { $_.RunAs } else { "" }
    $item.comment = if ($_.Description) { $_.Description } else { "" }
    $item.next_run = ""
    $item.last_run = ""
    $item.last_result = ""
    Get-ScheduledTaskInfo -TaskPath $_.TaskPath -TaskName $_.TaskName | ForEach {
        if ($_.NextRunTime) {
            $item.next_run = $_.NextRunTime.ToString("yyyy/MM/dd H:mm:ss tt")
        }
        if ($_.LastRunTime) {
            $item.last_run = $_.LastRunTime.ToString("yyyy/MM/dd H:mm:ss tt")
        }
        $LastTaskResult = '{0:x}' -f $_.LastTaskResult
        $item.last_result = switch($LastTaskResult) {
            "41300" {"The task is ready to run at its next scheduled time."}
            "41301" {"The task is currently running."}
            "41302" {"The task will not run at the scheduled times because it has been disabled."}
            "41303" {"The task has not yet run."}
            "41304" {"There are no more runs scheduled for this task."}
            "41305" {"One or more of the properties that are needed to run this task on a schedule have not been set."}
            "41306" {"The last run of the task was terminated by the user."}
            "41307" {"Either the task has no triggers or the existing triggers are disabled or not set."}
            "41308" {"Event triggers do not have set run times."}
            "4131B" {"The task is registered, but not all specified triggers will start the task."}
            "4131C" {"The task is registered, but may fail to start. Batch logon privilege needs to be enabled for the task principal."}
            "41325" {"The Task Scheduler service has asked the task to run."}
            "40010004" {"The system cannot open the file"}
            "80041309" {"A task's trigger is not found."}
            "8004130A" {"One or more of the properties required to run this task have not been set."}
            "8004130B" {"There is no running instance of the task."}
            "8004130C" {"The Task Scheduler service is not installed on this computer."}
            "8004130D" {"The task object could not be opened."}
            "8004130E" {"The object is either an invalid task object or is not a task object."}
            "8004130F" {"No account information could be found in the Task Scheduler security database for the task indicated."}
            "80041310" {"Unable to establish existence of the account specified."}
            "80041311" {"Corruption was detected in the Task Scheduler security database; the database has been reset."}
            "80041312" {"Task Scheduler security services are available only on Windows NT."}
            "80041313" {"The task object version is either unsupported or invalid."}
            "80041314" {"The task has been configured with an unsupported combination of account settings and run time options."}
            "80041315" {"The Task Scheduler Service is not running."}
            "80041316" {"The task XML contains an unexpected node."}
            "80041317" {"The task XML contains an element or attribute from an unexpected namespace."}
            "80041318" {"The task XML contains a value which is incorrectly formatted or out of range."}
            "80041319" {"The task XML is missing a required element or attribute."}
            "8004131A" {"The task XML is malformed."}
            "8004131D" {"The task XML contains too many nodes of the same type."}
            "8004131E" {"The task cannot be started after the trigger end boundary."}
            "8004131F" {"An instance of this task is already running."}
            "80041320" {"The task will not run because the user is not logged on."}
            "80041321" {"The task image is corrupt or has been tampered with."}
            "80041322" {"The Task Scheduler service is not available."}
            "80041323" {"The Task Scheduler service is too busy to handle your request. Please try again later."}
            "80041324" {"The Task Scheduler service attempted to run the task, but the task did not run due to one of the constraints in the task definition."}
            "80041326" {"The task is disabled."}
            "80041327" {"The task has properties that are not compatible with earlier versions of Windows."}
            "80041328" {"The task settings do not allow the task to start on demand."}
            "default" {$LastTaskResult}
        }
        if (!$item.last_result) {
            $item.last_result = $_.LastTaskResult
        }
    }
  $result.task += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.task.count
    Write-Host "Task, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.variable = @()
$item = @{}
Get-WmiObject Win32_Environment -filter "SystemVariable = True and username = '<SYSTEM>'" | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.program = "environment"
    $item.name = $_.Name
    $item.value = $_.VariableValue
    $result.variable += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.variable.count
    Write-Host "Variable, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.log = @()
$item = @{}
Get-WmiObject Win32_NTEventLogFile | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.name = $_.LogFileName
    $item.file_name = $_.Name
    $item.file_size = $_.FileSize / 1024
    $item.max_file_size = $_.MaxFileSize / 1024
    $item.overwrite = $_.OverWritePolicy
    $result.log += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.log.count
    Write-Host "Log, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.user = @()
$item = @{}
$Win32_UserProfile = Get-WmiObject Win32_UserProfile
$LocalUser = Get-LocalUser
if (($Win32_ComputerSystem.DomainRole -ne 4) -and ($Win32_ComputerSystem.DomainRole -ne 5)) {
    Get-WmiObject Win32_UserAccount -Filter "Name = 'Administrator'" | ForEach {
        Clear-Variable -name item
        $item = @{}
        $item.caption = $_.Caption
        $item.disabled  = $_.Disabled
        $item.domain  = $_.Domain
        $item.full_name  = $_.FullName
        $item.name = $_.Name
        $item.password_changeable  = $_.PasswordChangeable
        $item.password_expires  = $_.PasswordExpires
        $item.password_required  = $_.PasswordRequired
        $item.sid  = $_.SID
        $item.status  = $_.Status
        $item.password_last_changed  = ""
        $item.last_logon = ""
        $item.user_home = ""
        # $item.groups = Get-LocalGroup | Where-Object {  $item.sid -in ($_ | Get-LocalGroupMember | Select-Object -ExpandProperty "SID") } | Select-Object -ExpandProperty "Name"

        $Win32_UserProfile | ForEach {
            if ($_.SID -eq $item.sid) {
                if ($_.LocalPath -ne "") {
                    $item.user_home = $_.LocalPath
                }
                if ($_.LastUseTime -ne "") {
                    $item.last_logon = [string]($_.ConvertToDateTime($_.LastUseTime) -f "yyyy/MM/dd H:m:s")
                }
            }
        }
        $LocalUser | ForEach {
            if ($_.SID -eq $item.sid) {
                $item.password_last_changed = ($_.PasswordLastSet) -f "yyyy/MM/dd H:m:s"
            }
        }
        $result.user += $item
    }
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.user.count
    Write-Host "User, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.user_group = @()
$item = @{}
if (($Win32_ComputerSystem.DomainRole -ne 4) -and ($Win32_ComputerSystem.DomainRole -ne 5)) {
    Get-WmiObject Win32_Group | ForEach {
        Clear-Variable -name item
        $item = @{}
        $item.name = $_.Name
        $item.description  = $_.Description
        $item.sid = if ($_.SID) { $_.SID } else { "" }
        $members = @()
        Get-LocalGroupMember $_.Name | ForEach {
            $members += $_.Name
        }
        $item.members = [string]::join(", ", $members)
        $result.user_group += $item
    }
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.user_group.count
    Write-Host "User Group, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.software = @()
$item = @{}
$item.name = $Win32_OperatingSystem.Caption
$item.version = $Win32_OperatingSystem.Version
$item.publisher = "Microsoft Corporation"
$item.description = "Operating System"
$result.software += $item

Clear-Variable -name item
$item = @{}
$item.name = "PowerShell"
$item.version = [string]$PSVersionTable.PSVersion
$item.publisher = "Microsoft Corporation"
$item.url = "https://docs.microsoft.com/en-us/powershell/"
$result.software += $item

Get-AppxPackage -Name Microsoft.MicrosoftEdge.Stable | Sort-Object -Descending Version | Select-Object -first 1 | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.name = "Edge"
    $item.version = $_.Version
    $item.publisher = "Microsoft Corporation"
    $item.url = "https://www.microsoft.com/en-us/edge"
    $result.software += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.user_group.count
    Write-Host "Software 1, 3 entries took $totalSecs seconds"
}

$itimer = [Diagnostics.Stopwatch]::StartNew()
Get-ItemProperty HKLM:\Software\Microsoft\Windows\CurrentVersion\Uninstall\* | Where-Object { $_.DisplayName -ne '' -and $_.DisplayName -ne $null } | ForEach {
    $item = @{}
    $item.name = $_.DisplayName
    $item.version = ""
    if ($_.DisplayVersion -ne "" -and $_.DisplayVersion -ne $null) {
        $item.version = $_.DisplayVersion
    }
    if ($_.InstallLocation -ne "" -and $_.InstallLocation -ne $null) {
        $item.location = $_.InstallLocation
    }
    if ($_.InstallDate -ne "" -and $_.InstallDate -ne $null) {
        $item.install_date = $_.InstallDate
    }
    $item.url = ""
    if ($_.URLInfoAbout -ne "" -and $_.URLInfoAbout -ne $null) {
        $item.url = $_.URLInfoAbout
    }
    if ($item.url -eq "" -and $_.URLUpdateInfo -ne "" -and $_.URLUpdateInfo -ne $null) {
        $item.url = $_.URLUpdateInfo
    }
    if ($_.UninstallString -ne "" -and $_.UninstallString -ne $null) {
        $item.uninstall  = $_.UninstallString.Trim('"')
    }
    if ($_.Publisher -ne "" -and $_.Publisher -ne $null) {
        $item.publisher  = $_.Publisher
    }
    if ($_.Comments -ne "" -and $_.Comments -ne $null) {
        $item.comments  = $_.Comments
    }
    if ($_.InstallSource -ne "" -and $_.InstallSource -ne $null) {
        $item.installsource  = $_.InstallSource
    }
    if ($_.SystemComponent -ne "" -and $_.SystemComponent -ne $null) {
        $item.system_component  = $_.SystemComponent
    }

    $name = [string]$_.DisplayName
    $package = Get-Package -name "$name" -ErrorAction Ignore
    if ($package -ne $null) {
        $package | ForEach {
            if ($_.MetaData["InstalledDate"][0] -ne $null) {
                $item.installed_on = $_.MetaData["InstalledDate"][0]
            }
            if ($_.MetaData["InstallDate"][0] -ne $null) {
                $item.installed_on = $_.MetaData["InstallDate"][0]
            }
            if ($_.MetaData["Date"][0] -ne $null) {
                $item.installed_on = $_.MetaData["Date"][0]
            }
        }
    }
    $result.software += $item
    Clear-Variable -name item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.software.count
    Write-Host "Software 2, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
Get-ItemProperty HKLM:\Software\Wow6432Node\Microsoft\Windows\CurrentVersion\Uninstall\* | Where-Object { $_.DisplayName -ne '' -and $_.DisplayName -ne $null } | ForEach {
    $item = @{}
    $item.name = $_.DisplayName
    $item.version = $_.DisplayVersion
    if ($_.InstallLocation -ne "" -and $_.InstallLocation -ne $null) {
        $item.location = $_.InstallLocation
    }
    if ($_.InstallDate -ne "" -and $_.InstallDate -ne $null) {
        $item.install_date = $_.InstallDate
    }
    $item.url = ""
    if ($_.URLInfoAbout -ne "" -and $_.URLInfoAbout -ne $null) {
        $item.url = $_.URLInfoAbout
    }
    if ($item.url -eq "" -and $_.URLUpdateInfo -ne "" -and $_.URLUpdateInfo -ne $null) {
        $item.url = $_.URLUpdateInfo
    }
    if ($_.UninstallString -ne "" -and $_.UninstallString -ne $null) {
        $item.uninstall  = $_.UninstallString.Trim('"')
    }
    if ($_.Publisher -ne "" -and $_.Publisher -ne $null) {
        $item.publisher  = $_.Publisher
    }
    if ($_.Comments -ne "" -and $_.Comments -ne $null) {
        $item.comments  = $_.Comments
    }
    if ($_.InstallSource -ne "" -and $_.InstallSource -ne $null) {
        $item.installsource  = $_.InstallSource
    }
    if ($_.SystemComponent -ne "" -and $_.SystemComponent -ne $null) {
        $item.system_component  = $_.SystemComponent
    }

    $name = [string]$_.DisplayName
    $package = Get-Package -name "$name" -ErrorAction Ignore
    if ($package -ne $null) {
        $package | ForEach {
            if ($_.MetaData["InstalledDate"][0] -ne $null) {
                $item.installed_on = $_.MetaData["InstalledDate"][0]
            }
            if ($_.MetaData["InstallDate"][0] -ne $null) {
                $item.installed_on = $_.MetaData["InstallDate"][0]
            }
            if ($_.MetaData["Date"][0] -ne $null) {
                $item.installed_on = $_.MetaData["Date"][0]
            }
        }
    }
    $result.software += $item
    Clear-Variable -name item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.software.count
    Write-Host "Software 3, $count entries took $totalSecs seconds"
}

$itimer = [Diagnostics.Stopwatch]::StartNew()
Get-WmiObject Win32_QuickFixEngineering | ForEach {
    $item = @{}
    $item.name = $_.HotFixID
    $item.version = $_.DisplayVersion
    if ($item.version -eq $null) {
        $item.version = ""
    }
    if ($_.InstallDate -ne "" -and $_.InstallDate -ne $null) {
        $item.installed_on = $_.InstallDate
    }
    if ($_.InstalledBy -ne "" -and $_.InstalledBy -ne $null) {
        $item.installed_by = $_.InstalledBy
    }
    $item.publisher = "Microsoft Corporation"
    $item.type = "update"
    $name = $_.HotFixID
    Get-Package | Where-Object name -like "*$name*" | ForEach {
        if ($_.MetaData["SupportUrl"][0] -ne $null) {
            $item.url = $_.MetaData["SupportUrl"][0]
        }
        if ($_.Name -ne "" -and $_.Name -ne $null) {
            $item.comment = $_.name
        }
    }
    $result.software += $item
    Clear-Variable -name item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
# if ($debug -gt 0) {
#     $count = [int]$result.software.count
#     Write-Host "Software, $count entries took $totalSecs seconds"
# }
if ($debug -gt 0) {
    $count = [int]$result.software.count
    Write-Host "Software 4, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.service = @()
$item = @{}
Get-WmiObject Win32_Service | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.name = $_.name
    $item.description = $_.DisplayName
    $item.executable = $_.PathName
    $item.user = $_.StartName
    if ($item.user -eq $null) {
        $item.user = ""
    }
    $item.start_mode = $_.StartMode
    $item.state = $_.State
    $result.service += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.service.count
    Write-Host "Service, $count entries took $totalSecs seconds"
}


# $result.server = @()
# Clear-Variable -name item
# $item = @{}
# $item.version = Get-ItemProperty HKLM:\SOFTWARE\Microsoft\MSSQLServer\MSSQLServer\CurrentVersion\CSDVersion -ErrorAction Ignore

# if ($item.version -eq "" -or $item.version -eq $null) {
#     $item.version = Get-ItemProperty HKLM:\SOFTWARE\Microsoft\MSSQLServer\MSSQLServer\CurrentVersion\CurrentVersion -ErrorAction Ignore
# }

# if ($item.version -eq "" -or $item.version -eq $null) {
#     $item.version = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\MSSQLSERVER\CurrentVersion\CurrentVersion" -ErrorAction Ignore
# }

# if ($item.version -eq "" -or $item.version -eq $null) {
#     $item.version = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\SQLEXPRESS\MSSQLSERVER\CurrentVersion\CurrentVersion" -ErrorAction Ignore
# }

# if ($item.version -ne "" -and $item.version -ne $null) {
#     $item.edition = ""

#     # SQL 2014
#     $item.edition = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL12.MSSQLSERVER\Setup\Edition" -ErrorAction Ignore

#     # SQL 2008 R2
#     if ($item.edition -eq "" -or $item.edition -eq $null) {
#         $item.edition = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL10_50.MSSQLSERVER\Setup\Edition"  -ErrorAction Ignore
#     }

#     # SQL 2008
#     if ($item.edition -eq "" -or $item.edition -eq $null) {
#         $item.edition = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL10.MSSQLSERVER\Setup\Edition" -ErrorAction Ignore
#     }

#     # SQL 2005
#     if ($item.edition -eq "" -or $item.edition -eq $null) {
#         $item.edition = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\Setup","Edition" -ErrorAction Ignore
#     }

#     # SQL 2000
#     if ($item.edition -eq "" -or $item.edition -eq $null) {
#         $item.edition = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\Setup\Edition" -ErrorAction Ignore
#     }

#     # SQL 2000
#     if ($item.edition -eq "" -or $item.edition -eq $null) {
#         $item.edition = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\MSSQLServer\Setup\Edition" -ErrorAction Ignore
#     }

#     if ($item.edition -like "*express*") {
#         $item.edition = "Express Edition"
#     }

#     $item.instances = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\Instance Names\SQL\*"

#     $loginMode = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\MSSQLServer\MSSQLServer\LoginMode"
#     if ($loginMode -eq $null -or $loginMode -eq "") {
#         $instance = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\Instance Names\SQL\MSSQLSERVER"
#         $loginMode = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\$instance\MSSQLServer\LoginMode"
#     }

#     if ($loginMode -eq $null -or $loginMode -eq "") {
#         $loginMode = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\$instances[0]\MSSQLServer\LoginMode"
#     }

#     if ($loginMode -eq $null -or $loginMode -eq "") {
#         $loginMode = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\MSSQLServer\LoginMode"
#     }

#     switch ($loginMode) {
#         # If we hit this, because we don't have SQL credentials, we don't enumerate databases
#         "0" { $item.login_type = "Allow SQL Server Authentication only" }

#         "1" { $item.login_type = "Allow Windows Authentication only" }

#         "2" { $item.login_type = "Allow Windows Authentication or SQL Server Authentication" }

#         # If we hit this, we don't enumerate databases
#         "9" { $item.login_type = "Security type unknown" }

#         # If we hit this, we cannot log in to the DB Server, therefore, we don't enumerate databases
#         default { $item.login_type = "Unknown" }
#     }

#     $item.port = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\MSSQLServer\MSSQLServer\SuperSocketNetLib\Tcp\TcpPort"
#     if ($item.port -eq "" -or $item.port -eq $null) {
#         $item.port = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\MSSQL.1\MSSQLServer\SuperSocketNetLib\Tcp\IPAll\TcpPort"
#     }
#     if ($item.port -eq "" -or $item.port -eq $null -and $item.edition -like "*express*") {
#         $item.port = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\SQLEXPRESS\MSSQLServer\SuperSocketNetLib\Tcp\IPAll\TcpPort"
#     }
#     if ($item.port -eq "" -or $item.port -eq $null -and $item.edition -like "*express*") {
#         $item.port = Get-ItemProperty "HKLM:\SOFTWARE\Microsoft\Microsoft SQL Server\$instances[0]\MSSQLServer\SuperSocketNetLib\Tcp\IPAll\TcpPort"
#     }

#     $result.server += $item
# }






$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.netstat = @()
$item = @{}
# Get-NetTCPConnection -State Listen | Select-Object -Property *,@{'Name' = 'ProcessName';'Expression'={(Get-Process -Id $_.OwningProcess).Name}} | ForEach {
Get-NetTCPConnection -State Listen | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.protocol = "tcp"
    $item.ip = $_.LocalAddress
    $item.port = $_.LocalPort
    $item.processId = $_.OwningProcess
    Get-WmiObject Win32_Process | Where-Object ProcessId -eq $_.OwningProcess | ForEach {
        $item.program = $_.CommandLine
    }
    if ($item.program -eq $null) {
        $item.program = ""
    }
    if ($item.port -ne "" -and $item.port -ne $null) {
        # Added this check because in testing we managed to get an entry without a port or associated program
        $result.netstat += $item
    }
}
Get-NetUDPEndpoint | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.protocol = "udp"
    $item.ip = $_.LocalAddress
    $item.port = $_.LocalPort
    $item.processId = $_.OwningProcess
    Get-WmiObject Win32_Process | Where-Object ProcessId -eq $_.OwningProcess | ForEach {
        $item.program = $_.CommandLine
    }
    if ($item.program -eq $null) {
        $item.program = ""
    }
    if ($item.port -ne "" -and $item.port -ne $null) {
        # Added this check because in testing we managed to get an entry without a port or associated program
        $result.netstat += $item
    }
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.netstat.count
    Write-Host "Netstat, $count entries took $totalSecs seconds"
}


$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.route = @()
$item = @{}
Get-NetRoute | Where-Object AddressFamily -eq "IPv4" | 
    Where-Object NextHop -ne "0.0.0.0" | 
    Where-Object NextHop -ne "127.0.0.1" | 
    Where-Object NextHop -notin $ip_address_array | ForEach {

    Clear-Variable -name item
    $item = @{}
    $item.DestinationPrefix = $_.DestinationPrefix
    $item.destination = ""
    $item.mask = ""
    $item.metric = $_.RouteMetric
    $item.next_hop = $_.NextHop
    $item.protocol = $_.Protocol
    switch ($_.TypeOfRoute) {
        "1" { $item.type = "Other" }
        "2" { $item.type = "Invalid" }
        "3" { $item.type = "Direct" }
        "4" { $item.type = "Indirect" }
        default { $item.type = "Unknown" }
    }
    $split = $_.DestinationPrefix.Split('/')
    $item.destination = $split[0]
    $prefix = $split[1]
    $bitString = ('1' * $prefix).PadRight(32, '0')
    $ipString = [String]::Empty
    for ( $i=0 ;$i -lt 32; $i+=8) {
        $byteString = $bitString.Substring($i, 8)
        $ipString += "$([Convert]::ToInt32($byteString, 2))."
    }
    $item.mask = $ipString.ToString().TrimEnd('.')

    $result.route += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.route.count
    Write-Host "Route, $count entries took $totalSecs seconds"
}


$result | ConvertTo-Json | Out-File "output.json"

$timer.Stop()
$totalSecs =  [math]::Round($timer.Elapsed.TotalSeconds,0)
if ($debug -gt 0) {
    Write-Host "Script took $totalSecs seconds to complete."
}




