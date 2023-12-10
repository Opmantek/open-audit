# To see all properties
# Get-WmiObject -Class Win32_computersystem | Format-List *

# Get-Help Get-WmiObject
# Get-Command

$Win32_BIOS = Get-WmiObject -Class Win32_BIOS
$Win32_ComputerSystem = Get-WmiObject -Class Win32_ComputerSystem
$Win32_ComputerSystemProduct = Get-WmiObject -Class Win32_ComputerSystemProduct
$Win32_DesktopMonitor = Get-WmiObject -Class Win32_DesktopMonitor
$Win32_OperatingSystem = Get-WmiObject -Class Win32_OperatingSystem
$Win32_PhysicalMemory = Get-WmiObject -Class Win32_PhysicalMemory
$Win32_Processor = Get-WmiObject -Class Win32_Processor
$Win32_SystemEnclosure = Get-WmiObject -Class Win32_SystemEnclosure
$Win32_BaseBoard = Get-WmiObject -Class Win32_BaseBoard


$result = @{}
$result.sys = @{}
$result.sys.script_version = '5.0.2'
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
$result.sys.os_installation_date = [string]($Win32_OperatingSystem.ConvertToDateTime($Win32_OperatingSystem.InstallDate) -f "yyyy/MM/ddy")
$result.sys.org_id = ''
$result.sys.cluster_name = ''
$result.sys.last_seen_by = ''
$result.sys.discovery_id = ''


$result.windows = @()
$item = @{}
$item.build_number = [int]$Win32_OperatingSystem.BuildNumber
$item.user_name = ""
$item.client_site_name = ""
$item.domain_short = ""
$item.workgroup = ""
$item.domain_controller_address = ""
$item.domain_controller_name = ""
if ($Win32_ComputerSystem.DomainRole -eq 0) { $item.domain_role = "Standalone Workstation" }
if ($Win32_ComputerSystem.DomainRole -eq 1) { $item.domain_role = "Workstation" }
if ($Win32_ComputerSystem.DomainRole -eq 2) { $item.domain_role = "Standalone Server" }
if ($Win32_ComputerSystem.DomainRole -eq 3) { $item.domain_role = "Member Server" }
if ($Win32_ComputerSystem.DomainRole -eq 4) { $item.domain_role = "Backup Domain Controller" }
if ($Win32_ComputerSystem.DomainRole -eq 5) { $item.domain_role = "Primary Domain Controller" }
$item.part_of_domain = ""
$item.id_number = ""
$item.time_caption = ""
$item.time_daylight = ""
$item.boot_device = ""
$item.country_code = ""
$item.organisation = ""
$item.language = ""
$item.registered_user = ""
$item.service_pack = ""
$item.version = ""
$item.install_directory = ""
$item.active_directory_ou = ""
$result.windows += $item


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

$result.processor = @()
$item = @{}
Clear-Variable -name item
$item = @{}
$item.physical_count = [int]$Win32_ComputerSystem.NumberOfProcessors
$item.core_count = [int]$item.physical_count * $Win32_Processor[0].NumberOfEnabledCore
$item.logical_count = [int]$item.core_count * $Win32_Processor[0].NumberOfLogicalProcessors
$item.speed = $Win32_Processor[0].MaxClockSpeed
$item.manufacturer = $Win32_Processor[0].Manufacturer

$item.architecture = "Unknown"
if ($Win32_Processor[0].Architecture -eq '0' ) { $item.architecture = 'x86' }
if ($Win32_Processor[0].Architecture -eq '1' ) { $item.architecture = 'MIPS' }
if ($Win32_Processor[0].Architecture -eq '2' ) { $item.architecture = 'Alpha' }
if ($Win32_Processor[0].Architecture -eq '3' ) { $item.architecture = 'PowerPC' }
if ($Win32_Processor[0].Architecture -eq '5' ) { $item.architecture = 'ARM' }
if ($Win32_Processor[0].Architecture -eq '6' ) { $item.architecture = 'Itanium-based systems' }
if ($Win32_Processor[0].Architecture -eq '9' ) { $item.architecture = 'x64' }

$item.description = $Win32_Processor[0].Name
$item.description = $item.description.Replace("(R)", "").Replace("(TM)", "").Replace("(r)", "").Replace("(tm)", "")
$item.description = $item.description -replace '\s{2,}', ' '

$item.socket = ''
if ($Win32_Processor[0].UpgradeMethod -eq 1) { $item.socket = 'Other' }
if ($Win32_Processor[0].UpgradeMethod -eq 2) { $item.socket = 'Unknown' }
if ($Win32_Processor[0].UpgradeMethod -eq 3) { $item.socket = 'Daughter Board' }
if ($Win32_Processor[0].UpgradeMethod -eq 4) { $item.socket = 'ZIF Socket' }
if ($Win32_Processor[0].UpgradeMethod -eq 5) { $item.socket = 'Replaceable Piggy Back' }
if ($Win32_Processor[0].UpgradeMethod -eq 6) { $item.socket = 'None' }
if ($Win32_Processor[0].UpgradeMethod -eq 7) { $item.socket = 'LIF Socket' }
if ($Win32_Processor[0].UpgradeMethod -eq 8) { $item.socket = 'Slot 1' }
if ($Win32_Processor[0].UpgradeMethod -eq 9) { $item.socket = 'Slot 2' }
if ($Win32_Processor[0].UpgradeMethod -eq 10) { $item.socket = '370 Pin Socket' }
if ($Win32_Processor[0].UpgradeMethod -eq 11) { $item.socket = 'Slot A' }
if ($Win32_Processor[0].UpgradeMethod -eq 12) { $item.socket = 'Slot M' }
if ($Win32_Processor[0].UpgradeMethod -eq 13) { $item.socket = 'Socket 423' }
if ($Win32_Processor[0].UpgradeMethod -eq 14) { $item.socket = 'Socket A (462)' }
if ($Win32_Processor[0].UpgradeMethod -eq 15) { $item.socket = 'Socket 478' }
if ($Win32_Processor[0].UpgradeMethod -eq 16) { $item.socket = 'Socket 754' }
if ($Win32_Processor[0].UpgradeMethod -eq 17) { $item.socket = 'Socket 940' }
if ($Win32_Processor[0].UpgradeMethod -eq 18) { $item.socket = 'Socket 939' }
if ($Win32_Processor[0].UpgradeMethod -eq 19) { $item.socket = 'Socket mPGA 604' }
if ($Win32_Processor[0].UpgradeMethod -eq 20) { $item.socket = 'Socket LGA 771' }
if ($Win32_Processor[0].UpgradeMethod -eq 21) { $item.socket = 'Socket LGA 775' }
if ($Win32_Processor[0].UpgradeMethod -eq 22) { $item.socket = 'Socket S1' }
if ($Win32_Processor[0].UpgradeMethod -eq 23) { $item.socket = 'Socket AM2' }
if ($Win32_Processor[0].UpgradeMethod -eq 24) { $item.socket = 'Socket F (1207)' }
if ($Win32_Processor[0].UpgradeMethod -eq 25) { $item.socket = 'Socket LGA 1366' }
if ($Win32_Processor[0].UpgradeMethod -eq 26) { $item.socket = 'Socket G34' }
if ($Win32_Processor[0].UpgradeMethod -eq 27) { $item.socket = 'Socket AM3' }
if ($Win32_Processor[0].UpgradeMethod -eq 28) { $item.socket = 'Socket C32' }
if ($Win32_Processor[0].UpgradeMethod -eq 29) { $item.socket = 'Socket LGA 1156' }
if ($Win32_Processor[0].UpgradeMethod -eq 30) { $item.socket = 'Socket LGA 1567' }
if ($Win32_Processor[0].UpgradeMethod -eq 31) { $item.socket = 'Socket PGA 988A' }
if ($Win32_Processor[0].UpgradeMethod -eq 32) { $item.socket = 'Socket BGA 1288' }
if ($Win32_Processor[0].UpgradeMethod -eq 33) { $item.socket = 'Socket rPGA 988B' }
if ($Win32_Processor[0].UpgradeMethod -eq 34) { $item.socket = 'Socket BGA 1023' }
if ($Win32_Processor[0].UpgradeMethod -eq 35) { $item.socket = 'Socket BGA 1224' }
if ($Win32_Processor[0].UpgradeMethod -eq 36) { $item.socket = 'Socket LGA 1155' }
if ($Win32_Processor[0].UpgradeMethod -eq 37) { $item.socket = 'Socket LGA 1356' }
if ($Win32_Processor[0].UpgradeMethod -eq 38) { $item.socket = 'Socket LGA 2011' }
if ($Win32_Processor[0].UpgradeMethod -eq 39) { $item.socket = 'Socket FS1' }
if ($Win32_Processor[0].UpgradeMethod -eq 40) { $item.socket = 'Socket FS2' }
if ($Win32_Processor[0].UpgradeMethod -eq 41) { $item.socket = 'Socket FM1' }
if ($Win32_Processor[0].UpgradeMethod -eq 42) { $item.socket = 'Socket FM2' }
if ($Win32_Processor[0].UpgradeMethod -eq 43) { $item.socket = 'Socket LGA 2011-3' }
if ($Win32_Processor[0].UpgradeMethod -eq 44) { $item.socket = 'Socket LGA 1356-3' }
if ($Win32_Processor[0].UpgradeMethod -eq 185) { $item.socket = 'Socket P (478)' }
$processor_type = $item.socket

$result.processor += $item


$result.memory = @()
$Win32_PhysicalMemory | ForEach {
	Clear-Variable -name item
	$item = @{}
    $item.bank = $_.DeviceLocator
    $item.size = $_.Capacity /1024 /1024
    $item.speed = $_.Speed
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


$result.optical = @()
$item = @{}
Get-WmiObject -Class Win32_CDROMDrive | ForEach {
	Clear-Variable -name item
	$item = @{}
	$item.description = $_.Caption
	$item.model = $_.Caption
	$item.device = $_.DeviceID
	$item.mount_point = $_.Drive
	$item.serial = $_.SerialNumber
	$result.optical += $item
}


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
	$item.size = $_.AdapterRAM / 1024 / 1024
	$result.video += $item
}

$result.monitor = @()
$item = @{}
Get-WmiObject -Class Win32_DesktopMonitor | ForEach {
	Clear-Variable -name item
	$item = @{}

	$item.manufacturer = ''
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
	if ( $_.MonitorManufacturer -eq '___') { $item.manufacturer = 'Targa'


	$item.model = $_.Caption
	$item.device = $_.PNPDeviceID

	$result.monitor += $item
}

$result | ConvertTo-Json
