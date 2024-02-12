# To see all properties
# Get-WmiObject -Class Win32_computersystem | Format-List *

# Get-Help Get-WmiObject
# Get-Command

echo "Not ready for use"
exit

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


$result = @{}
$result.sys = @{}
$result.sys.script_version = '5.2.0'
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
  $item.size = [Math]::Round($_.AdapterRAM / 1024 / 1024)
  $result.video += $item
}

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
    $item.serial = ""
    $item.pnp_id = ($_.PNPDeviceID + "_0")
    $item.pnp_id = $item.pnp_id.ToLower()
    $item.firmware = if ($_.FirmwareRevision) { $_.FirmwareRevision } Else { "" }
    $item.serial = if ($_.SerialNumber) { $_.SerialNumber } Else { "" }
    $item.size = [Math]::Round($_.size / 1024 / 1024)
    $item.device_id = $_.deviceid
    $item.partitions = $_.Partitions
    $item.manufacturer = $_.manufacturer
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
    $item.name = $_.VolumeName
    $item.serial = $_.VolumeSerialNumber
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
      $item.name = $_.VolumeName
      $item.partition_disk_index = ""
      $item.serial = $_.VolumeSerialNumber
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
    $item.name = $_.VolumeName
    $item.partition_disk_index = ""
    $item.serial = $_.VolumeSerialNumber
  $item.size = [Math]::Round($_.Size / 1024 / 1024)
    $item.type = "volume"
    $item.used = [Math]::Round($item.size - $item.free)

  $result.partition += $item
}


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

$result.network = @()
$item = @{}
Get-WmiObject -Class Win32_NetworkAdapterConfiguration -filter "IPEnabled = True or (ServiceName<>'' AND ServiceName<>'AsyncMac' AND ServiceName<>'VMnetx' AND ServiceName<>'VMnetadapter' AND ServiceName<>'Rasl2tp' AND ServiceName<>'msloop' AND ServiceName<>'PptpMiniport' AND ServiceName<>'Raspti' AND ServiceName<>'NDISWan' AND ServiceName<>'NdisWan4' AND ServiceName<>'RasPppoe' AND ServiceName<>'NdisIP' AND ServiceName<>'tunmp' AND Description<>'PPP Adapter.') AND MACAddress is not NULL" | ForEach {
    Clear-Variable -name item
    $item = @{}
    $item.dns_server = ""
    $item.net_index = if ($_.Index) { $_ | select -ExpandProperty Index } Else { "" }
    $item.mac_address = if ($_.MACAddress) { $_.MACAddress } Else { "" }
    $item.description = if ($_.Description) { $_.Description } Else { "" }
    $item.dhcp_enabled = if ($_.DHCPEnabled) { $_.DHCPEnabled } Else { "" }
    $item.dhcp_server = if ($_.DHCPServer) { $_.DHCPServer } Else { "" }
    $item.dns_server = if ($_.DNSServerSearchOrder) { $_.DNSServerSearchOrder  -join "," } Else { "" }
    $item.dns_host_name = if ($_.DNSHostName) { $_.DNSHostName } Else { "" }
    $item.dns_domain = if ($_.DNSDomain) { $_.DNSDomain } Else { "" }
    $item.dhcp_lease_obtained = if ($_.DHCPLeaseObtained) { [string]($_.ConvertToDateTime($_.DHCPLeaseObtained) -f "yyyy/MM/ddy") } Else { "" }
    $item.dhcp_lease_expires = if ($_.DHCPLeaseExpires) { [string]($_.ConvertToDateTime($_.DHCPLeaseExpires) -f "yyyy/MM/ddy") } Else { "" }
    $item.ip_enabled = if ($_.IPEnabled) { $_.IPEnabled } Else { "" }
    $item.dns_domain_reg_enabled = if ($_.IPEnabled) { $_.IPEnabled } Else { "" }
    $item.net_wins_primary = if ($_.WINSPrimaryServer) { $_.WINSPrimaryServer } Else { "" }
    $item.net_wins_lmhosts_enabled = if ($_.WINSEnableLMHostsLookup) { $_.WINSEnableLMHostsLookup } Else { "" }
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

$result.ip = @()
$item = @{}
$dns_server = ""
Get-WmiObject -Class Win32_NetworkAdapterConfiguration -filter "IPEnabled = True AND MACAddress is not NULL" | ForEach {
    for ($i = 0; $i -lt $_.IPAddress.Length; $i++) {
        Clear-Variable -name item
        $item = @{}
        $item.mac = if ($_.MACAddress) { $_.MACAddress } Else { "" }
        $item.net_index = if ($_.Index) { $_.Index } Else { "" }
        $item.ip_address = if ($_.IPAddress[$i]) { $_.IPAddress[$i] } Else { "" }
        $item.subnet = if ($_.IPSubnet[$i]) { $_.IPSubnet[$i] } Else { "" }
        $item.version = if ($item.ip_address.Length -gt 15) { 6 } Else { 4 }
        if ($item.ip_address) {
            $result.ip += $item
        }
        $dns_server = if ($_.DNSServerSearchOrder[0]) { $_.DNSServerSearchOrder[0] }
    }
}

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

$result.printer | ConvertTo-Json












