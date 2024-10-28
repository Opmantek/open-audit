# To see all properties
# Get-WmiObject -Class Win32_computersystem | Format-List *

# Get-Help Get-WmiObject
# Get-Command

# Comparison Operators
# https://learn.microsoft.com/en-us/powershell/module/microsoft.powershell.core/about/about_comparison_operators?view=powershell-7.4

# Apps
# https://learn.microsoft.com/en-us/windows/application-management/overview-windows-apps

param (
    [int]$debugging = 0,
    [string]$url = '',
    [string]$create_file = 'n',
    [string]$submit_online = 'y',
    [string]$last_seen_by = '',
    [int]$location_id = 0,
    [int]$org_id = 0,
    [int]$system_id = 0,
    [int]$discovery_id = 0
)

$version="5.5.0"

$debug = $debugging

$timer = [Diagnostics.Stopwatch]::StartNew()

$file = "output.json"
if ($discovery_id -ne 0) {
    $file = hostname
    $file = $file + "-" + [string](Get-Date -Uformat "%Y%m%d%H%M%S") + ".json"
}

# For developers only to save time when testing other items as these take a while
$audit_software = 'y'
$audit_netstat_udp = 'n'
$audit_firewall_rule = 'n'

if ($debug -gt 0) {
    Write-Host "================"
    Write-Host "Starting Audit"
    Write-Host "================"
    Write-Host "CreateFile: $create_file"
    Write-Host "SubmitOnline: $submit_online"
    Write-Host "Location: $location_id"
    Write-Host "Organisation: $org_id"
    Write-Host "Debug: $debugging"
    Write-Host "SystemID: $system_id"
    Write-Host "File  $file"
    Write-Host "================"
}

function Get-LittleEndianInt($array, $index) {
    $temp = @(0) * 4
    [Array]::Copy($array, $index, $temp, 0, 4)
    [Array]::Reverse($temp)
    [System.BitConverter]::ToInt32($temp, 0)
}

$Win32_BIOS = Get-WmiObject -Class Win32_BIOS
$Win32_ComputerSystem = Get-WmiObject -Class Win32_ComputerSystem
$Win32_ComputerSystemProduct = Get-WmiObject -Class Win32_ComputerSystemProduct
$Win32_OperatingSystem = Get-WmiObject -Class Win32_OperatingSystem
$Win32_PhysicalMemory = Get-WmiObject -Class Win32_PhysicalMemory
$Win32_Processor = Get-WmiObject -Class Win32_Processor
$Win32_SystemEnclosure = Get-WmiObject -Class Win32_SystemEnclosure
$Win32_BaseBoard = Get-WmiObject -Class Win32_BaseBoard
$Win32_LogicalDiskToPartition = Get-WmiObject -Class Win32_LogicalDiskToPartition
$Win32_MappedLogicalDisk = Get-WmiObject -Class Win32_MappedLogicalDisk -ErrorAction Ignore
$Win32_NetworkAdapter = Get-WmiObject -Class Win32_NetworkAdapter -ErrorAction Ignore

$itimer = [Diagnostics.Stopwatch]::StartNew()
$result = @{}
$result.sys = @{}
$result.sys.script_version = $version
if ($system_id -ne 0) {
    $result.sys.id = $system_id
}
$result.sys.uuid = $Win32_ComputerSystemProduct | Select-Object -ExpandProperty UUID
$result.sys.name = hostname
$result.sys.hostname = hostname
$result.sys.domain = $Win32_ComputerSystem | Select-Object -ExpandProperty Domain
if ($result.sys.domain -eq 'WORKGROUP') {
    $result.sys.domain = ''
}
$result.sys.ip = (Find-NetRoute -RemoteIPAddress "0.0.0.0" | % { $_.IPAddress })[0]
$result.sys.description = $Win32_OperatingSystem | Select-Object -ExpandProperty Description
$result.sys.type = 'computer'
$result.sys.icon = 'windows'
$result.sys.os_group = 'Windows'
$result.sys.os_name = $Win32_OperatingSystem.Caption
$result.sys.os_family = ''
if ($result.sys.os_name -like "*Server*") { $result.sys.os_family = "Windows Server" }
if ($result.sys.os_name -like "* 95*") { $result.sys.os_name_family = "Windows 95" }
if ($result.sys.os_name -like "* 98*") { $result.sys.os_family = "Windows 98" }
if ($result.sys.os_name -like "* NT*") { $result.sys.os_family = "Windows NT" }
if ($result.sys.os_name -like "*2000*") { $result.sys.os_family = "Windows 2000" }
if ($result.sys.os_name -like "* XP*") { $result.sys.os_family = "Windows XP" }
if ($result.sys.os_name -like "*2003*") { $result.sys.os_family = "Windows 2003" }
if ($result.sys.os_name -like "*Vista*") { $result.sys.os_family = "Windows Vista" }
if ($result.sys.os_name -like "*Windows 7*") { $result.sys.os_family = "Windows 7" }
if ($result.sys.os_name -like "*Windows 8*") { $result.sys.os_family = "Windows 8" }
if ($result.sys.os_name -like "*Windows 10*") { $result.sys.os_family = "Windows 10" }
if ($result.sys.os_name -like "*Windows 11*") { $result.sys.os_family = "Windows 11" }
if ($result.sys.os_name -like "*2008*") { $result.sys.os_family = "Windows 2008" }
if ($result.sys.os_name -like "*2012*") { $result.sys.os_family = "Windows 2012" }
if ($result.sys.os_name -like "*2016*") { $result.sys.os_family = "Windows 2016" }
if ($result.sys.os_name -like "*2019*") { $result.sys.os_family = "Windows 2019" }
if ($result.sys.os_name -like "*2022*") { $result.sys.os_family = "Windows 2022" }
$result.sys.os_version = $Win32_OperatingSystem.Version
$result.sys.serial = $Win32_ComputerSystemProduct.IdentifyingNumber
$result.sys.model = $Win32_ComputerSystem | Select-Object -ExpandProperty Model
$result.sys.manufacturer = $Win32_ComputerSystemProduct.Vendor
$result.sys.uptime = Get-WmiObject -Class Win32_PerfFormattedData_PerfOS_System | Select-Object -ExpandProperty SystemUpTime
$form_factor = ($Win32_SystemEnclosure | Select ChassisTypes)[0].ChassisTypes[0]
if ([int]$form_factor -eq 1  ) { $result.sys.form_factor = 'Other' }
if ([int]$form_factor -eq 2  ) { $result.sys.form_factor = 'Unknown' }
if ([int]$form_factor -eq 3  ) { $result.sys.form_factor = 'Desktop'; $result.sys.class = 'desktop' }
if ([int]$form_factor -eq 4  ) { $result.sys.form_factor = 'Low Profile Desktop'; $result.sys.class = 'desktop' }
if ([int]$form_factor -eq 5  ) { $result.sys.form_factor = 'Pizza Box'; $result.sys.class = 'desktop' }
if ([int]$form_factor -eq 6  ) { $result.sys.form_factor = 'Mini Tower'; $result.sys.class = 'desktop' }
if ([int]$form_factor -eq 7  ) { $result.sys.form_factor = 'Tower'; $result.sys.class = 'desktop' }
if ([int]$form_factor -eq 8  ) { $result.sys.form_factor = 'Portable'; $result.sys.class = 'laptop' }
if ([int]$form_factor -eq 9  ) { $result.sys.form_factor = 'Laptop'; $result.sys.class = 'laptop' }
if ([int]$form_factor -eq 10 ) { $result.sys.form_factor = 'Notebook'; $result.sys.class = 'laptop' }
if ([int]$form_factor -eq 11 ) { $result.sys.form_factor = 'Hand Held' }
if ([int]$form_factor -eq 12 ) { $result.sys.form_factor = 'Docking Station' }
if ([int]$form_factor -eq 13 ) { $result.sys.form_factor = 'All in One' }
if ([int]$form_factor -eq 14 ) { $result.sys.form_factor = 'Sub Notebook'; $result.sys.class = 'laptop' }
if ([int]$form_factor -eq 15 ) { $result.sys.form_factor = 'Space-Saving' }
if ([int]$form_factor -eq 16 ) { $result.sys.form_factor = 'Lunch Box' }
if ([int]$form_factor -eq 17 ) { $result.sys.form_factor = 'Main System Chassis' }
if ([int]$form_factor -eq 18 ) { $result.sys.form_factor = 'Expansion Chassis' }
if ([int]$form_factor -eq 19 ) { $result.sys.form_factor = 'SubChassis' }
if ([int]$form_factor -eq 20 ) { $result.sys.form_factor = 'Bus Expansion Chassis' }
if ([int]$form_factor -eq 21 ) { $result.sys.form_factor = 'Peripheral Chassis' }
if ([int]$form_factor -eq 22 ) { $result.sys.form_factor = 'Storage Chassis' }
if ([int]$form_factor -eq 23 ) { $result.sys.form_factor = 'Rack Mount Chassis'; $result.sys.class = 'server' }
if ([int]$form_factor -eq 24 ) { $result.sys.form_factor = 'Sealed-Case PC'}
if ([int]$form_factor -eq 30 ) { $result.sys.form_factor = 'Tablet'; $result.sys.class = 'tablet' }
if ([int]$form_factor -eq 31 ) { $result.sys.form_factor = 'Convertible'; $result.sys.class = 'laptop' }
if ([int]$form_factor -eq 32 ) { $result.sys.form_factor = 'Detachable'; $result.sys.class = 'laptop' }
if ([int]$form_factor -eq 35 ) { $result.sys.form_factor = 'Mini PC'}

$result.sys.os_bit = ($Win32_Processor | Select AddressWidth)[0].AddressWidth
$result.sys.os_arch = $Win32_OperatingSystem.OSArchitecture
$result.sys.memory_count = [int64]0
$Win32_PhysicalMemory | ForEach {
    $result.sys.memory_count = [int64]$result.sys.memory_count + ([int64]$_.Capacity / 1024)
}
$result.sys.processor_count = [int]($Win32_ComputerSystem.NumberOfProcessors)
$result.sys.os_installation_date = [string](Get-Date -Date $Win32_OperatingSystem.ConvertToDateTime($Win32_OperatingSystem.InstallDate) -Uformat "%Y-%m-%d")
$result.sys.org_id = ''
$result.sys.cluster_name = ''
$result.sys.last_seen_by = 'audit'
if ($last_seen_by -ne '') {
    $result.sys.last_seen_by = $last_seen_by
}
$result.sys.discovery_id = ''
if ($discovery_id -ne 0) {
    $result.sys.discovery_id = $discovery_id
}

(New-Object -com "Microsoft.Update.AutoUpdate"). Results | ForEach {
    if ($_.LastSearchSuccessDate -ne $null -and $_.LastSearchSuccessDate -ne "") {
        $result.sys.last_os_update = [string](Get-Date -Date $_.LastSearchSuccessDate -Uformat "%Y-%m-%d %T")
    }
}

if ($org_id -ne 0) {
    $result.sys.org_id = $org_id
}
if ($location_id -ne 0) {
    $result.sys.location_id = $location_id
}
$itimer.Stop()
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    Write-Host "System, 1 entry took $totalSecs seconds"
}

$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.windows = @()
$item = @{}
$item.build_number = [string]$Win32_OperatingSystem.BuildNumber + "." + [string]$(Get-ItemProperty -Path 'Registry::HKEY_LOCAL_MACHINE\Software\Microsoft\Windows NT\CurrentVersion' UBR).UBR
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
    $domain = $Win32_ComputerSystem | Select-Object -ExpandProperty Domain
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
$result.certificate = @()
$item = @{}
Get-ChildItem -Recurse Cert: -ErrorAction Ignore | WHERE FriendlyName -ne "" | Select FriendlyName, SerialNumber, Issuer, NotAfter, NotBefore, SignatureAlgorithm, Version, @{Name='NotAfterFormatted';Expression={Get-Date -Date $_.NotAfter -Uformat "%Y-%m-%d %R"}}, @{Name='NotBeforeFormatted';Expression={Get-Date -Date $_.NotBefore -Uformat "%Y-%m-%d %R"}} | ForEach {
    $item = @{}
    $item.name = $_.FriendlyName
    $item.serial = $_.SerialNumber
    $item.issuer = $_.Issuer
    $item.valid_from_raw = [string]$_.NotBefore
    $item.valid_from = $_.NotBeforeFormatted
    $item.valid_to_raw = [string]$_.NotAfter
    $item.valid_to = $_.NotAfterFormatted
    $item.encryption = ""
    $item.algorithm = $_.SignatureAlgorithm
    $item.version = $_.Version

    if ($item.name -ne $null) {
        $result.certificate += $item
    }
    Clear-Variable -name item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.certificate.count
    Write-Host "Certificate, $count entries took $totalSecs seconds"
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
$item.core_count = $item.physical_count * [int]$processor.NumberOfCores
$item.logical_count = $item.physical_count * [int]$processor.NumberOfLogicalProcessors
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
$monitors = Get-WmiObject WMIMonitorID -Namespace root\wmi -ErrorAction Ignore | Sort -Descending
ForEach ($monitor in $monitors) {
    Clear-Variable -name item
    $item = @{}
    $thisMonitor = (Get-WmiObject Win32_PnPEntity -Filter "Service='monitor'" | Where-Object {$monitor.InstanceName.TrimEnd('0').TrimEnd('_') -contains $_.DeviceID})
    $item.device = $thisMonitor.deviceid
    $path = "HKLM:\SYSTEM\CurrentControlSet\Enum\" + $item.device + "\Device Parameters"
    $edid = (Get-ItemProperty $path EDID -ErrorAction SilentlyContinue).EDID
    $HorizontalSize = $edid[21]
    $VerticalSize = $edid[22]
    $item.size = [Math]::Round([Math]::Sqrt($HorizontalSize*$HorizontalSize + $VerticalSize*$VerticalSize) / 2.54)
    $item.model = ""
    for ($i = 54; $i -lt 109; $i += 18) {
        if ((Get-LittleEndianInt $edid $i) -eq 0xff) {
            for ($j = $i+5; $edid[$j] -ne 10 -and $j -lt $i+18; $j++) { $item.serial += [char]$edid[$j] }
        }
        if ((Get-LittleEndianInt $edid $i) -eq 0xfc) {
            for ($j = $i+5; $edid[$j] -ne 10 -and $j -lt $i+18; $j++) { $item.model += [char]$edid[$j] }
        }
    }
    $res = Get-WmiObject WmiMonitorListedSupportedSourceModes -Namespace root\wmi | Where-Object {$_.InstanceName -eq $monitor.InstanceName}
    $pmsmi = $res.PreferredMonitorSourceModeIndex
    $item.description = [string]$res.MonitorSourceModes[$pmsmi].HorizontalActivePixels + " x " + [string]$res.MonitorSourceModes[$pmsmi].VerticalActivePixels
    $item.aspect_ratio = ""
    $item.aspect_ratio = switch ($item.description) {
        {@("854 x 450", "1280 x 720", "1366 x 768", "1920 x 1080", "2048 x 1152", "3840 x 2160", "7680 x 4320", "15360 x 8640") -contains $_ } { "16:9" }
        {@("320 x 240", "640 x 480", "768 x 576", "800 x 600", "1024 x 768", "1400 x 1050", "1600 x 1200", "2048 x 1536", "4096 x 3072") -contains $_ } { "4:3" }
        {@("320 x 200", "1280 x 800", "1680 x 1050", "1920 x 1200", "2220 x 1080", "2560 x 1600", "3840 x 2400") -contains $_ } { "16:10" }
        {@("720 x 480", "1152 x 768", "1440 x 960", "2560 x 1440") -contains $_ } { "3:2" }
        {@("800 x 480", "1280 x 768") -contains $_ } { "5:3" }
        {@("1280 x 1024", "2560 x 2048", "3200 x 1800") -contains $_ } { "5:4" }
        {@("1920 x 800", "2560 x 1080", "2880 x 1200", "3440 x 1440", "3840 x 1600", "5160 x 2160", "4320 x 1800", "5120 x 2160", "5760 x 2400", "6880 x 2880", "7680 x 3200", "7680 x 3240", "8640 x 3600", "10240 x 4320") -contains $_ } { "21:9" }
        default { "" }
    }
    if ($item.aspect_ratio -eq "" -and $item.description -contains "10240 x ") {
        $item.aspect_ratio = "16:9"
    }
    if ($item.aspect_ratio -eq "" -and $item.description -contains "2048 x ") {
        $item.aspect_ratio = "16:9"
    }
    $interface = (Get-WMIObject WmiMonitorConnectionParams -NameSpace root\wmi | Where-Object {$_.InstanceName -eq $monitor.InstanceName})
    $item.interface = Switch ($interface.VideoOutputTechnology){
        "-2" { "Uninitialized" }
        "-1" { "Unknown" }
        "0"  { "VGA" }
        "1"  { "SVGA" }
        "2"  { "Composite" }
        "3"  { "Component" }
        "4"  { "DVI" }
        "5"  { "HDMI" }
        "6"  { "LVDS" }
        "8"  { "D_IPN" }
        "9"  { "SDI" }
        "10" { "DisplayPort-External" }
        "11" { "DisplayPort-Embedded" }
        "12" { "UDI-External" }
        "13" { "UDI-Embedded" }
        "14" { "SDTV-Dongle" }
        "15" { "MiraCast" }
        "2147483648" { "Laptop Internal" }
        default { $interface.VideoOutputTechnology }
    }
    $manufacturer = ($monitor.ManufacturerName -notmatch 0 | ForEach{[char]$_}) -join "";
    $item.manufacturer = switch ($manufacturer) {
        "___" { "Targa" }
        "ACR" { "Acer" }
        "ACT" { "Targa" }
        "ADI" { "ADI" }
        "AOC" { "AOC International" }
        "API" { "Acer" }
        "APP" { "Apple" }
        "ART" { "ArtMedia" }
        "AST" { "AST Research" }
        "AUO" { "AU Optronics" }
        "BMM" { "BMM" }
        "BNQ" { "BenQ Corporation" }
        "BOE" { "BOE Display Technology" }
        "CPL" { "Compal" }
        "CPQ" { "Compaq" }
        "CTX" { "Chuntex" }
        "DEC" { "Digital Equipment Corporation" }
        "DEL" { "Dell" }
        "DPC" { "Delta" }
        "DWE" { "Daewoo" }
        "ECS" { "Elitegroup Computer Systems" }
        "EIZ" { "EIZO" }
        "EPI" { "Envision" }
        "FCM" { "Funai" }
        "FUS" { "Fujitsu" }
        "GSM" { "LG Electronics" }
        "GWY" { "Gateway 2000" }
        "HEI" { "Hyundai" }
        "HIQ" { "Hyundai ImageQuest" }
        "HIT" { "Hitachi" }
        "HPN" { "Hewlett Packard" }
        "HSD" { "Hanns.G" }
        "HSL" { "Hansol Electronics" }
        "HTC" { "Hitachi" }
        "HWP" { "Hewlett Packard" }
        "IBM" { "IBM" }
        "ICL" { "Fujitsu" }
        "IFS" { "InFocus" }
        "IQT" { "Hyundai" }
        "IVM" { "Idek Iiyama" }
        "KDS" { "KDS USA" }
        "KFC" { "KFC Computek" }
        "LEN" { "Lenovo" }
        "LGD" { "LG Display" }
        "LKM" { "ADLAS / AZALEA" }
        "LNK" { "LINK Technologies" }
        "LPL" { "LG Philips" }
        "LTN" { "Lite-On" }
        "MAG" { "MAG InnoVision" }
        "MAX" { "Maxdata Computer" }
        "MEI" { "Panasonic" }
        "MEL" { "Mitsubishi Electronics" }
        "MIR" { "Miro" }
        "MTC" { "MITAC" }
        "NAN" { "NANAO" }
        "NEC" { "NEC" }
        "NOK" { "Nokia" }
        "NVD" { "Nvidia" }
        "OQI" { "Optiquest" }
        "PBN" { "Packard Bell" }
        "PCK" { "Daewoo" }
        "PDC" { "Polaroid" }
        "PGS" { "Princeton Graphic Systems" }
        "PHL" { "Philips" }
        "PNP" { "Plug n Play (Microsoft)" }
        "PRT" { "Princeton" }
        "REL" { "Relisys" }
        "SAM" { "Samsung" }
        "SEC" { "Samsung" }
        "SHP" { "Sharp" }
        "SMC" { "Samtron" }
        "SMI" { "Smile" }
        "SNI" { "Siemens Nixdorf" }
        "SNY" { "Sony Corporation" }
        "SPT" { "Sceptre" }
        "SRC" { "Shamrock Technology" }
        "STN" { "Samtron" }
        "STP" { "Sceptre" }
        "TAT" { "Tatung" }
        "TOS" { "Toshiba" }
        "TRL" { "Royal Information Company" }
        "TSB" { "Toshiba" }
        "UNM" { "Unisys" }
        "VSC" { "ViewSonic" }
        "WTC" { "Wen Technology" }
        "ZCM" { "Zenith Data Systems" }
        default { $manufacturer }
    }
    $item.device = ([System.Text.Encoding]::UTF8.GetString($monitor.ProductCodeID)) -replace "`0", ""
    $year = $monitor.YearOfManufacture
    $week = $monitor.WeekOfManufacture
    $item.manufacture_date = ((get-date -Date "$year/01/01").AddDays((7*$week))).ToString("MM/yyyy")
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
    $item.hard_drive_index = $_.Index
    $item.scsi_logical_unit = $_.SCSITargetId
    $item.model = $_.Model
    if ($item.model.IndexOf("VMware") -eq 0) { $item.model = "VMware Virtual Disk" }
    $item.firmware = if ($_.FirmwareRevision) { $_.FirmwareRevision } Else { "" }
    $item.serial = if ($_.SerialNumber) { $_.SerialNumber } Else { "" }
    $item.size = [Math]::Round($_.size / 1024 / 1024)
    $item.partitions = $_.Partitions
    $model = $item.model.ToLower();
    if ($item.manufacturer -eq "(Standard disk drives)" -and $model.IndexOf("hitachi") -eq 0) { $item.manufacturer = "Hitachi" }
    if ($item.manufacturer -eq "(Standard disk drives)" -and $model.IndexOf("maxtor") -eq 0) { $item.manufacturer = "Maxtor" }
    if ($item.manufacturer -eq "(Standard disk drives)" -and $model.IndexOf("sandisk") -eq 0) { $item.manufacturer = "SanDisk" }
    if ($item.manufacturer -eq "(Standard disk drives)" -and $model.IndexOf("toshiba") -eq 0) { $item.manufacturer = "Toshiba" }
    if ($item.manufacturer -eq "(Standard disk drives)" -and $model.IndexOf("st") -eq 0) { $item.manufacturer = "Seagate" }
    if ($item.manufacturer -eq "(Standard disk drives)" -and $model.IndexOf("wdc") -eq 0) { $item.manufacturer = "Western Digital" }
    if ($item.manufacturer -eq "(Standard disk drives)" -and $model.IndexOf("wd ") -eq 0) { $item.manufacturer = "Western Digital" }
    if ($item.manufacturer -eq "(Standard disk drives)" -and $model.IndexOf("vmware") -eq 0) { $item.manufacturer = "VMware" }
    $index = $_.Index
    $PhysicalDisk = (Get-PhysicalDisk | Where-Object {$_.DeviceId -eq $index})
    $item.interface_type = $PhysicalDisk.BusType
    $item.status = $PhysicalDisk.HealthStatus
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
    $item.mount_point = $_.Caption
    $item.name = if ($_.VolumeName) { $_.VolumeName } else { "" }
    $item.serial = if ($_.VolumeSerialNumber) { $_.VolumeSerialNumber } else { "" }
    if ($_.DriveType = "2") {$item.type = "local removable"}
    if ($_.DriveType = "3") {$item.type = "local"}
    $item.used = [Math]::Round($item.size - $item.free)
    $Win32_LogicalDiskToPartition | ForEach {
        if ($_.Dependent.IndexOf($item.device) -ne "null") {
            $item.hard_drive_index = ((($_.Antecedent.split('"'))[1].split('#'))[1].split(','))[0]
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
      try {
          $item.size = [Int]((Get-ChildItem -Path $_.Path -Recurse | Measure-Object -Sum Length).Sum / 1024 / 1024)
      } catch {
          $item.size = 0
          if ($item.description -eq "") {
              $item.description = "Cannot read folder size."
          }
      }
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
Get-WmiObject -Class Win32_NetworkAdapterConfiguration -filter "IPEnabled = True or (ServiceName<>'' AND ServiceName<>'vwifimp' AND ServiceName<>'AsyncMac' AND ServiceName<>'VMnetx' AND ServiceName<>'VMnetadapter' AND ServiceName<>'Rasl2tp' AND ServiceName<>'msloop' AND ServiceName<>'PptpMiniport' AND ServiceName<>'Raspti' AND ServiceName<>'NDISWan' AND ServiceName<>'NdisWan4' AND ServiceName<>'RasPppoe' AND ServiceName<>'NdisIP' AND ServiceName<>'tunmp' AND Description<>'PPP Adapter.') AND MACAddress is not NULL" | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.dns_server = ""
    $item.net_index = if ($_.Index) { $_ | select -ExpandProperty Index } Else { "" }
    $item.mac = if ($_.MACAddress) { $_.MACAddress } Else { "" }
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
            $item.type = $_.AdapterType
            $item.manufacturer = $_.Manufacturer
            $item.model = $_.ProductName
            $item.connection = $_.NetConnectionID
            $item.connection_status = $_.NetConnectionStatus
            $item.speed = if ($_.MaxSpeed) { [int]$_.MaxSpeed } else { 0 }
            if ($item.connection_status -eq 0 ) { $item.connection_status = "Disconnected" }
            if ($item.connection_status -eq 1 ) { $item.connection_status = "Connecting" }
            if ($item.connection_status -eq 2 ) { $item.connection_status = "Connected" }
            if ($item.connection_status -eq 3 ) { $item.connection_status = "Disconnecting" }
            if ($item.connection_status -eq 4 ) { $item.connection_status = "Hardware not present" }
            if ($item.connection_status -eq 5 ) { $item.connection_status = "Hardware disabled" }
            if ($item.connection_status -eq 6 ) { $item.connection_status = "Hardware malfunction" }
            if ($item.connection_status -eq 7 ) { $item.connection_status = "Media disconnected" }
            if ($item.connection_status -eq 8 ) { $item.connection_status = "Authenticating" }
            if ($item.connection_status -eq 9 ) { $item.connection_status = "Authentication succeeded" }
            if ($item.connection_status -eq 10 ) { $item.connection_status = "Authentication failed" }
            if ($item.connection_status -eq 11 ) { $item.connection_status = "Invalid address" }
            if ($item.connection_status -eq 12 ) { $item.connection_status = "Credentials required" }
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
        $item.class = $_.PNPClass
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
$Win32_Printer = Get-WmiObject Win32_Printer -filter "PrintProcessor <> 'winprint'" -ErrorAction Ignore
if ($Win32_Printer -ne $null) {
    $Win32_Printer | ForEach {
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
$Win32_UserProfile = Get-WmiObject Win32_UserProfile -ErrorAction Ignore
$Win32_UserAccount = Get-WmiObject Win32_UserAccount -ErrorAction Ignore
$LocalUser = Get-LocalUser -ErrorAction Ignore
if (($Win32_ComputerSystem.DomainRole -ne 4) -and ($Win32_ComputerSystem.DomainRole -ne 5)) {
    $Win32_UserAccount | ForEach {
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

        # Below breaks because Get-LocalGroupMember is broken
        # https://superuser.com/questions/1131901/get-localgroupmember-generates-error-for-administrators-group
        # https://github.com/PowerShell/PowerShell/issues/2996
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
        Get-LocalGroupMember $_.Name -ErrorAction Ignore | ForEach {
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


[Flags()] enum ProductState
{
    Off         = 0x0000
    On          = 0x1000
    Snoozed     = 0x2000
    Expired     = 0x3000
}

[Flags()] enum SignatureStatus
{
    UpToDate     = 0x00
    OutOfDate    = 0x10
}

[Flags()] enum ProductOwner
{
    NonMs        = 0x000
    Windows      = 0x100
}

[Flags()] enum ProductFlags
{
    SignatureStatus = 0x00F0
    ProductOwner    = 0x0F00
    ProductState    = 0xF000
}

$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.antivirus = @()
$item = @{}
Get-CimInstance -Namespace root/SecurityCenter2 -ClassName AntiVirusProduct -ErrorAction Ignore | ForEach {
    Clear-Variable -name item
    $item = @{}
    [UInt32]$state = $_.productState
    $item.name = $_.displayName
    $item.executable = $_.pathToSignedProductExe
    $item.reportable = $_.pathToSignedReportingExe
    $item.owner = [string]([ProductOwner]($state -band [ProductFlags]::ProductOwner))
    $item.state = [string]([ProductState]($state -band [ProductFlags]::ProductState))
    $item.status = [string]([SignatureStatus]($state -band [ProductFlags]::SignatureStatus))
    $result.antivirus += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.route.count
    Write-Host "AntiVirus, $count entries took $totalSecs seconds"
}

$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.firewall = @()
$item = @{}
$fwStatus = 'On'
Get-CimInstance -Namespace root/SecurityCenter2 -ClassName FirewallProduct -ErrorAction Ignore | ForEach {
    Clear-Variable -name item
    $item = @{}
    [UInt32]$state = $_.productState
    $item.name = $_.displayName
    $item.executable = $_.pathToSignedProductExe
    $item.reportable = $_.pathToSignedReportingExe
    $item.owner = [string]([ProductOwner]($state -band [ProductFlags]::ProductOwner))
    $item.state = [string]([ProductState]($state -band [ProductFlags]::ProductState))
    $item.status = [string]([SignatureStatus]($state -band [ProductFlags]::SignatureStatus))
    $result.firewall += $item
    if ($item.state -eq 'On') {
        $fwStatus = 'Off';
    }
}

Clear-Variable -name item
$fw = 'false'
Get-WmiObject Win32_Service | ForEach {
    if ($_.DisplayName -eq "Windows Defender Firewall") {
        $executable = $_.PathName
        $fw ='true'
    }
}
if ($fw -eq 'true') {
    $item = @{}
    $item.name = 'Windows Defender Firewall'
    $item.executable = $executable
    $item.reportable = ''
    $item.owner = 'Windows'
    $item.state = $fwStatus
    $item.status = ''
    $result.firewall += $item
}
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.route.count
    Write-Host "Firewall, $count entries took $totalSecs seconds"
}

$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.firewall_rule = @()
$item = @{}

if ($audit_firewall_rule -eq 'y') {
    # Only run when Windows Firewall is On
    if ($fwstatus -eq "On") {
        # Only run when executing as an Agent because it takes too long for a discovery
        if ($file -eq "output.json") {
            Get-NetFirewallRule | Select-Object DisplayName, InstanceID, DisplayGroup, Description, Enabled, Profile, Direction, Action, RuleGroup, @{Name='LocalPort';Expression={($PSItem | Get-NetFirewallPortFilter).LocalPort}}, @{Name='RemotePort';Expression={($PSItem | Get-NetFirewallPortFilter).RemotePort}}, @{Name='RemoteAddress';Expression={($PSItem | Get-NetFirewallAddressFilter).RemoteAddress}}, @{Name='Protocol';Expression={($PSItem | Get-NetFirewallPortFilter).Protocol}} | ForEach {
                Clear-Variable -name item
                $item = @{}
                $item.name = [string]$_.DisplayName
                $item.external_ident = [string]$_.InstanceID
                $item.group = [string]$_.DisplayGroup
                $item.description = [string]$_.Description
                $item.enabled = [string]$_.Enabled
                $item.profile = [string]$_.Profile
                $item.direction = [string]$_.Direction
                $item.action = [string]$_.Action
                $item.local_port = [string]$_.LocalPort
                $item.remote_port = [string]$_.RemotePort
                $item.remote_address = [string]$_.RemoteAddress
                $item.protocol = [string]$_.Protocol
                $item.rule_group = [string]$_.RuleGroup
                $item.firewall = 'Windows Defender'
                $result.firewall_rule += $item
            }
            $totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
            if ($debug -gt 0) {
                $count = [int]$result.firewall_rule.count
                Write-Host "Firewall Rules, $count entries took $totalSecs seconds"
            }
        }
    }
} # End of audit_firewall_rule

$itimer = [Diagnostics.Stopwatch]::StartNew()
$result.software = @()
$item = @{}
$item.name = $Win32_OperatingSystem.Caption
$item.version = $Win32_OperatingSystem.Version
$item.publisher = "Microsoft Corporation"
$item.description = "Operating System"
$result.software += $item

Get-WmiObject Win32_Service | ForEach {
    if ($_.DisplayName -eq "Windows Defender Firewall" -and $_.State -eq "Running") {
        $item = @{}
        $item.name = 'Windows Defender Firewall'
        $item.version = $Win32_OperatingSystem.Version
        $item.publisher = 'Microsoft Corporation'
        $item.url = 'https://learn.microsoft.com/en-us/windows/security/operating-system-security/network-security/windows-firewall/'
        $result.software += $item
    }
}

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

if ($audit_software -eq 'y') {
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
    Get-WmiObject Win32_InstalledStoreProgram -ErrorAction Ignore | ForEach {
        $item = @{}
        $microsoft = 'n'
        $item.name = [string]$_.Name
        if ($item.name -like 'Microsoft*' -or $item.name -like 'Windows*' -or $item.name -like 'windows*' -or $item.name -like 'MicrosoftWindows*' -or $_.Vendor -like '*Microsoft Corporation*') {
            $item.publisher = 'Microsoft Corporation'
            $microsoft = 'y'
        }
        $name = $item.name
        $name = $name.Replace('Microsoft.', '')
        $name = $name.Replace('Windows.', '')
        $name = $name.Replace('windows.', '')
        $name = $name.Replace('MicrosoftWindows.', '')
        $item.name = $name
        if ($microsoft -eq 'n') {
            $split = $item.name.Split('.')
            $item.publisher = $split[0]
            $item.name = $name.Replace($item.publisher + '.', '')
        }
        if ($item.name -eq '1527c705-839a-4832-9118-54d4Bd6a0c89') {
            $item.name = 'FilePicker'
        }
        if ($item.name -eq 'c5e2524a-ea46-4f67-841f-6a9465d9d515') {
            $item.name = 'FileExplorer'
        }
        if ($item.name -eq 'E2A4F912-2574-4A75-9BB0-0D023378592B') {
            $item.name = 'AppResolver'
        }
        if ($item.name -eq 'F46D4000-FD22-4DB4-AC8E-4E1DDDE828FE') {
            $item.name = 'AddSuggestedFoldersToLibrary'
        }

        $item.version = $_.Version
        $item.location = $_.__PATH
        $item.type = "Windows Store App"
        $result.software += $item
        Clear-Variable -name item
    }
    $totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
    if ($debug -gt 0) {
        $count = [int]$result.software.count
        Write-Host "Software 4, $count entries took $totalSecs seconds"
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
    if ($debug -gt 0) {
        $count = [int]$result.software.count
        Write-Host "Software 5, $count entries took $totalSecs seconds"
    }

    $itimer = [Diagnostics.Stopwatch]::StartNew()
    Get-WmiObject Win32_OptionalFeature -ErrorAction Ignore | WHERE {$_.InstallState -eq 1} | ForEach {
        $item = @{}
        $item.name = $_.Caption
        if ($item.name -eq "") {
            $item.name = $_.name
        }
        $item.version = ""
        if ($_.InstallDate -ne "" -and $_.InstallDate -ne $null) {
            $item.installed_on = $_.InstallDate
        }
        $item.publisher = "Microsoft Corporation"
        $item.type = "Optional Feature"
        $result.software += $item
        Clear-Variable -name item
    }
    $totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
    if ($debug -gt 0) {
        $count = [int]$result.software.count
        Write-Host "Software 6, $count entries took $totalSecs seconds"
    }


    $itimer = [Diagnostics.Stopwatch]::StartNew()
    if (Get-Command "get-WindowsFeature" -errorAction SilentlyContinue) { 
        Get-WindowsFeature -ErrorAction Ignore | WHERE Installed | Select DisplayName, Description, @{name='Version';expression={"{0}.{1}" -f $_.AdditionalInfo.MajorVersion,$_.AdditionalInfo.MinorVersion }} | ForEach {
            $item = @{}
            $item.name = $_.DisplayName
            $item.description = $_.Description
            $item.version = $_.Version
            $item.publisher = "Microsoft Corporation"
            $item.type = "Windows Feature"
            $test = $false
            for ($i = 0; $i -lt $result.software.Length; $i++) {
                if ($result.software[$i].name -eq $item.name) {
                    $test = $true
                    if ([string]$item.version -ne "" -and [string]$item.version -ne "0.0" -and [string]$result.software[$i].version -eq "") {
                        # We already have this, likely from Win32_OptionalFeature above. Add the version if it's set and not 0.0.
                        $result.software[$i].Version = $item.version
                    }
                }
            }
            if ($test -eq $false) {
                $result.software += $item
            }
            Clear-Variable -name item
        }
        $totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
        if ($debug -gt 0) {
            $count = [int]$result.software.count
            Write-Host "Software 7, $count entries took $totalSecs seconds"
        }
    }
} # End of audit_software

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


$result.server = @()
$result.server_item = @()
$item = @{}
$test = Get-Service -name "W3SVC" -ErrorAction Ignore
if ($test.Status -ne $null -and $test.Status.ToString() -eq "Running") {
    $itimer = [Diagnostics.Stopwatch]::StartNew()
    # Get IIS details
    Clear-Variable -name item
    $item = @{}
    $item.type = 'web';
    $item.name = 'IIS';
    $item.version = [System.Diagnostics.FileVersionInfo]::GetVersionInfo("$env:SystemRoot\system32\inetsrv\InetMgr.exe").ProductVersion
    $service = Get-Service -Name W3SVC
    $item.status = $service.Status.ToString()
    $result.server += $item

    # Get the individual websites now
    Get-Website -ErrorAction Ignore | ForEach {
        Clear-Variable -name item
        $item = @{}
        $item.type = 'website'
        $item.name = $_.name
        $item.parent_name = 'IIS'
        $item.id_internal = $_.id
        $item.status = [string]$_.state
        $item.path = $_.physicalPath
        $item.path = $item.path.replace("%SystemDrive%", "$Env:SystemDrive")
        $bindings = $_.bindings.Collection.bindingInformation
        $item.ip = $($bindings -split ":")[0]
        $item.port = $($bindings -split ":")[1]
        $item.hostname = $($bindings -split ":")[2]
        $item.size = [math]::ceiling((Get-ChildItem $item.path -force -Recurse -ErrorAction SilentlyContinue| measure Length -sum).sum / 1Mb)
        $item.instance = $_.applicationPool
        $item.log_status = $_.logfile.enabled.ToString()
        $item.log_format = $_.logfile.logFormat
        $item.log_path = $_.logfile.directory + "\W3SVC" + $_.id
        $item.log_rotation = ''
        if ($_.logfile.period -eq 'MaxSize') {
            if ($_.logfile.truncateSize -eq -1) {
                $item.log_rotation = 'Unlimited file size'
            } else {
                $item.log_rotation = "When file size reaches $([int]($_.logfile.truncateSize / 1Mb)) MB"
            }
        } else {
            $item.log_rotation = $_.logfile.period;
        }
        $result.server_item += $item
    }
    if ($debug -gt 0) {
        $count = [int]$result.server_item.count
        $totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
        Write-Host "IIS, $count entries took $totalSecs seconds"
    }
}

$test = Get-Service -name "MSSQLSERVER"  -ErrorAction Ignore
if ($test.Status -ne $null -and $test.Status.ToString() -eq "Running") {
    $itimer = [Diagnostics.Stopwatch]::StartNew()
    # Get MSSQL details
    Clear-Variable -name item
    $item = @{}
    $item.type = 'database'
    $item.status = (Get-Service -name "MSSQLSERVER").Status.ToString()
    $item.name = 'SQL Server'
    $item.version = (Invoke-SqlCmd -query "SELECT SERVERPROPERTY('productversion')").Column1.ToString()
    $item.edition = (Invoke-SqlCmd -query "SELECT SERVERPROPERTY('edition')").Column1.ToString()
    $item.port = (Get-ItemProperty HKLM:\Software\Microsoft\MSSQLServer\MSSQLServer\SuperSocketNetLib\Tcp).TcpPort
    $result.server += $item

    # Get the individual databases now
    $instances = [System.Data.Sql.SqlDataSourceEnumerator]::Instance.GetDataSources()
    $count = 0
    if ($instances -ne $null) {
        $instances | ForEach {
            if ($_.InstanceName -eq "") {
                $instanceName = '.'
            } else {
                $instanceName = '.\' + $_.InstanceName
            }
            Get-SqlDatabase -ServerInstance $instanceName -ErrorAction SilentlyContinue | ForEach {
                $count = $count + 1
                Clear-Variable -name item
                $item = @{}
                $item.type = 'database'
                $item.parent_name = 'SQL Server'
                $item.name = $_.Name
                $item.id_internal = $_.ID
                $item.instance = $instanceName
                $item.size = $_.size
                $item.path = $_.PrimaryFilePath
                $item.details_creation_date = $_.CreateDate
                $result.server_item += $item
            }
        }
    }
    if ($debug -gt 0) {
        $totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
        Write-Host "SQL, $count entries took $totalSecs seconds"
    }
}


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
$totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
if ($debug -gt 0) {
    $count = [int]$result.netstat.count
    Write-Host "Netstat TCP, $count entries took $totalSecs seconds"
}

if ($audit_netstat_udp -eq 'y') {
    $itimer = [Diagnostics.Stopwatch]::StartNew()
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
        Write-Host "Netstat UDP, $count entries took $totalSecs seconds"
    }
} # End of audit_netstat_udp




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


# Dell warranties if Dell Command | Monitor is installed
# $itimer = [Diagnostics.Stopwatch]::StartNew()
# $result.warranty = @()
# $item = @{}
# $DCIM_AssetWarrantyInformation = Get-CimInstance -Namespace root/DCIM/SYSMAN -Classname DCIM_AssetWarrantyInformation -ErrorAction Ignore
# $DCIM_AssetWarrantyInformation | Foreach {
#     Clear-Variable -name item
#     $item = @{}
#     $item.name = $_.Name
#     $item.refreshed = $_.LastRefereshed
#     $item.external_ident = $_.IdentifyingNumber
#     $item.sku = $_.SKUNumber
#     $item.start = [string]$_.WarrantyStartDate.Year + "-" + [string]$_.WarrantyStartDate.Month + "-" + [string]$_.WarrantyStartDate.Day
#     $item.end = [string]$_.WarrantyEndDate.Year + "-" + [string]$_.WarrantyEndDate.Month + "-" + [string]$_.WarrantyEndDate.Day
#     $item.duration = $_.WarrantyDuration
#     $item.details = $_ | ConvertTo-Json
#     $result.warranty += $item
# }
# $totalSecs =  [math]::Round($itimer.Elapsed.TotalSeconds,2)
# if ($debug -gt 0) {
#     $count = [int]$result.warranty.count
#     Write-Host "Warranty, $count entries took $totalSecs seconds"
# }


$result = $result | ConvertTo-Json
$result = $result -replace '[\u0026]', "&"
$result = $result -replace '[\u2019\u2018]', "'"
$result = $result -replace '[\u201C\u201D]', '\"'

if ($submit_online -eq "y") {
    try {
        $Response = Invoke-WebRequest -UseBasicParsing "$url" -Method POST -Body "data=$result"
        $StatusCode = $Response.StatusCode
    } catch {
        $StatusCode = $_.Exception.Response.StatusCode.value__
    }
    if ($debug -gt 0) {
        "Submission Status: $StatusCode"
    }
}

if ($create_file -eq "y") {
    $result | Out-File $file
}

$timer.Stop()
$totalSecs =  [math]::Round($timer.Elapsed.TotalSeconds,0)
if ($debug -gt 0) {
    Write-Host "Script took $totalSecs seconds to complete."
}
