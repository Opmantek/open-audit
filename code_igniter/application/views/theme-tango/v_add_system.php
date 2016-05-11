<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}
echo form_open('admin_system/add_system')."\n";
?>
<fieldset id="org_details" class='niceforms'>
    <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('System Details')?></span></legend>
    <img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
    <p><?php echo $error_message; ?>&nbsp;</p>
    <p><label for='man_type'><?php echo __("Type")?>: </label>
        <select id='man_type' name='man_type' tabindex='1' style='width: 135px' onchange='select_device();'>
            <?php foreach ($device_types as $key => $value) {
                echo "<option value='$key'>".__("$value")."</option>\n";
            } ?>
        </select>
    </p>
    <p><label for='notes1'> </label><span id='notes1' style='color: blue;'>*</span> You must have at least one of the blue attributes.<br />
       <label for='notes2'> </label><span id='notes2' style='color: red;'>*</span> You must have a red attribute.</p>
    <div id="details"></div>

</fieldset>
<?php echo form_close(); ?>

<?php
$location_form = "";
foreach ($locations as $location) {
    $location_form .= "<option value='".$location->id."'>".$location->name."<\/option>";
}
$location_form = "<label for='man_location_id'>Location<\/label><select id='man_location_id' name='man_location_id' style='width: 250px'>".$location_form."<\/select><br />";

$org_form = "";
foreach ($orgs as $org) {
    $org_form .= "<option value='".$org->id."'>".$org->name."<\/option>";
}
$org_form = "<label for='man_org_id'>Organisation<\/label><select id='man_org_id' name='man_org_id' style='width: 250px'>".$org_form."<\/select><br />";

$os_group_form = "";
foreach ($os_group as $item) {
    $os_group_form .= "<option value='".$item->man_os_group."'>".$item->man_os_group."<\/option>";
}
$os_group_form = "<label for='man_os_group_2'> <\/label><select id='man_os_group_2' name='man_os_group_2' style='width: 250px'>".$os_group_form."<\/select><br />";

$os_family_form = "";
foreach ($os_family as $item) {
    $os_family_form .= "<option value='".$item->man_os_family."'>".$item->man_os_family."<\/option>";
}
$os_family_form = "<label for='man_os_family'> <\/label><select id='man_os_family' name='man_os_family' style='width: 250px'>".$os_family_form."<\/select><br />";

$os_name_form = "";
foreach ($os_name as $item) {
    $os_name_form .= "<option value='".$item->man_os_name."'>".$item->man_os_name."<\/option>";
}
$os_name_form = "<label for='man_os_name_2'> <\/label><select id='man_os_name_2' name='man_os_name_2' style='width: 250px'>".$os_name_form."<\/select><br />";

?>
<!-- TODO: validate the various attributes that MUST be submitted, are - client side -->

<script type="text/javascript">
<?php if (isset($error_message)) {
    echo "error_message = \"".$error_message."\";\n";
} else {
    echo "error_message = \"\";";
} ?>


if (error_message > "") {
        document.getElementById("man_type").value = "<?php if (isset($form)) { echo $form['man_type']; } ?>";
        select_device();
        <?php if (isset($form)) {
            foreach ($form as $key => $value) {
                echo "\tdocument.getElementById(\"$key\").value = \"$value\"\n";
            }
        }?>
    }

function select_device()
{
    status_text = "";
    device_type = document.getElementById("man_type").value;
    document.getElementById("details").innerHTML = status_text;
    switch (device_type)
    {
        case "mobile modem":
        case "cell phone":
        case "satellite phone":
        case "phone":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='man_description'><?php echo __('Description'); ?><\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_owner'><?php echo __('Allocated To')?><\/label><input type='text' id='man_owner' name='man_owner' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_manufacturer'><?php echo __('Manufacturer')?><\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'><?php echo __('Model')?><\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'><?php echo __('Serial')?><\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: red;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'><?php echo __('Asset Number')?><\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_status'><?php echo __('Status')?><\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_environment'><?php echo __('Environment')?><\/label><select id='man_environment' name='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'><?php echo __('PO Number')?><\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'><?php echo __('Cost Center')?><\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'><?php echo __('Vendor')?><\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_purchase_date'><?php echo __('Purchase Date')?><\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'><?php echo __('Purchase Amount')?><\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'><?php echo __('Warranty Duration')?><\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'><?php echo __('Warranty Expiration Date')?><\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_service_number'><?php echo __('Phone Number')?><\/label><input type='text' id='man_service_number' name='man_service_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_service_provider'><?php echo __('Service Provider')?><\/label><input type='text' id='man_service_provider' name='man_service_provider' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_service_type'><?php echo __('Service Type')?><\/label><select id='man_service_type' name='man_service_type' style='width: 135px' ><option value=''>&nbsp;<\/option><option value='voice'>Voice only<\/option><option value='data'>Data only<\/option><option value='voice and data'>Voice and Data<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_service_plan'><?php echo __('Service Plan')?><\/label><input type='text' id='man_service_plan' name='man_service_plan' size='20' title='$49 / month, etc' \/><br \/>";
            status_text = status_text + "<label for='man_service_network'><?php echo __('Service Network')?><\/label><input type='text' id='man_service_network' name='man_service_network' size='20' title='GSM, 2G, 3G, NextG, 4G, etc' \/><br \/>";
            status_text = status_text + "<label for='man_unlock_pin'><?php echo __('Phone PIN')?><\/label><input type='text' id='man_unlock_pin' name='man_unlock_pin' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_imei'><?php echo __('IMEI Serial')?><\/label><input type='text' id='man_serial_imei' name='man_serial_imei' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_sim'><?php echo __('SIM Serial')?><\/label><input type='text' id='man_serial_sim' name='man_serial_sim' size='20' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        case "smart phone":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='man_os_family'><?php echo __('OS Family'); ?><\/label><select id='man_os_family' name='man_os_family' style='width: 135px' ><option value=' '>&nbsp;<\/option><option value='android'>Android<\/option><option value='apple'>Apple<\/option><option value='blackberry'>Blackberry<\/option><option value='other'>Other<\/option><option value='windows phone'>Windows Phone<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_os_name'><?php echo __('OS Name'); ?><\/label><input type='text' id='man_os_name' name='man_os_name' size='20' title='4' \/><br \/>";
            status_text = status_text + "<label for='man_description'><?php echo __('Description'); ?><\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_owner'><?php echo __('Allocated To'); ?><\/label><input type='text' id='man_owner' name='man_owner' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_manufacturer'><?php echo __('Manufacturer'); ?><\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'><?php echo __('Model'); ?><\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'><?php echo __('Serial'); ?><\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: red;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'><?php echo __('Asset Number'); ?><\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_status'><?php echo __('Status'); ?><\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_environment'><?php echo __('Environment'); ?><\/label><select id='man_environment' name='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'><?php echo __('PO Number'); ?><\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'><?php echo __('Cost Center'); ?><\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'><?php echo __('Vendor'); ?><\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_purchase_date'><?php echo __('Purchase Date'); ?><\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'><?php echo __('Purchase Amount'); ?><\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'><?php echo __('Warranty Duration'); ?><\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'><?php echo __('Warranty Expiration Date'); ?><\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_service_number'><?php echo __('Phone Number'); ?><\/label><input type='text' id='man_service_number' name='man_service_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_service_provider'><?php echo __('Service Provider'); ?><\/label><input type='text' id='man_service_provider' name='man_service_provider' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_service_type'><?php echo __('Service Type'); ?><\/label><select id='man_service_type' name='man_service_type' style='width: 135px' ><option value=''>&nbsp;<\/option><option value='voice'>Voice only<\/option><option value='data'>Data only<\/option><option value='voice and data'>Voice and Data<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_service_plan'><?php echo __('Service Plan'); ?><\/label><input type='text' id='man_service_plan' name='man_service_plan' size='20' title='$49 / month, etc' \/><br \/>";
            status_text = status_text + "<label for='man_service_network'><?php echo __('Service Network'); ?><\/label><input type='text' id='man_service_network' name='man_service_network' size='20' title='GSM, 2G, 3G, NextG, 4G, etc' \/><br \/>";
            status_text = status_text + "<label for='man_unlock_pin'><?php echo __('Phone PIN'); ?><\/label><input type='text' id='man_unlock_pin' name='man_unlock_pin' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_imei'><?php echo __('IMEI Serial'); ?><\/label><input type='text' id='man_serial_imei' name='man_serial_imei' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_sim'><?php echo __('SIM Serial'); ?><\/label><input type='text' id='man_serial_sim' name='man_serial_sim' size='20' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        case "ip phone":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='hostname'>Hostname<\/label><input type='text' id='hostname' name='hostname' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_description'>Description<\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_ip_address'>IP Address<\/label><input type='text' id='man_ip_address' name='man_ip_address' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_owner'>Allocated To<\/label><input type='text' id='man_owner' name='man_owner' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_manufacturer'>Manufacturer<\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'>Model<\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'>Serial<\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'>Asset Number<\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_status'>Status<\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_environment'>Environment<\/label><select id='man_environment' name='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'>PO Number<\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'>Cost Center<\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'>Vendor<\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_purchase_date'>Purchase Date<\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'>Purchase Amount<\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'>Warranty Duration<\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'>Warranty Expiration Date<\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_service_number'>Phone Number<\/label><input type='text' id='man_service_number' name='man_service_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_service_provider'>Service Provider<\/label><input type='text' id='man_service_provider' name='man_service_provider' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_service_type'>Service Type<\/label><select id='man_service_type' name='man_service_type' style='width: 135px' ><option value=''>&nbsp;<\/option><option value='voice'>Voice only<\/option><option value='data'>Data only<\/option><option value='voice and data'>Voice and Data<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_service_plan'>Service Plan<\/label><input type='text' id='man_service_plan' name='man_service_plan' size='20' title='$49 / month, etc' \/><br \/>";
            status_text = status_text + "<label for='man_service_network'>Service Network<\/label><input type='text' id='man_service_network' name='man_service_network' size='20' title='GSM, 2G, 3G, NextG, 4G, etc' \/><br \/>";
            status_text = status_text + "<label for='man_unlock_pin'>Phone PIN<\/label><input type='text' id='man_unlock_pin' name='man_unlock_pin' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_imei'>IMEI Serial<\/label><input type='text' id='man_serial_imei' name='man_serial_imei' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_sim'>SIM Serial<\/label><input type='text' id='man_serial_sim' name='man_serial_sim' size='20' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        case "access token":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='man_description'>Description<\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_owner'>Allocated To<\/label><input type='text' id='man_owner' name='man_owner' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_manufacturer'>Manufacturer<\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'>Model<\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'>Serial<\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: red;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'>Asset Number<\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_status'>Status<\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_environment'>Environment<\/label><select id='man_environment' name='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_purchase_order_number'>PO Number<\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'>Cost Center<\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'>Vendor<\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_date'>Purchase Date<\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'>Purchase Amount<\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'>Warranty Duration<\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'>Warranty Expiration Date<\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_service_type'>Service Type<\/label><input type='text' id='man_service_type' name='man_service_type' size='20' title='Full, Restricted, etc' \/><br \/>";
            status_text = status_text + "<label for='man_unlock_pin'>PIN<\/label><input type='text' id='man_unlock_pin' name='man_unlock_pin' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_imei'>IMEI Serial<\/label><input type='text' id='man_serial_imei' name='man_serial_imei' size='20' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        case "tablet":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='man_os_family'>OS Family<\/label><select id='man_os_family' name='man_os_family' style='width: 135px' ><option value=' '>&nbsp;<\/option><option value='android'>Android<\/option><option value='blackberry'>Blackberry<\/option><option value='apple'>Apple<\/option><option value='windows'>Windows<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_os_name'>OS Name<\/label><input type='text' id='man_os_name' name='man_os_name' size='20' title='Android 4.0 (Ice Cream Sandwitch), etc' \/><br \/>";
            status_text = status_text + "<label for='man_description'>Description<\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_owner'>Allocated To<\/label><input type='text' id='man_owner' name='man_owner' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_manufacturer'>Manufacturer<\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'>Model<\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'>Serial<\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: red;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'>Asset Number<\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_status'>Status<\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_environment'>Environment<\/label><select id='man_environment' name='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'>PO Number<\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'>Cost Center<\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'>Vendor<\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_purchase_date'>Purchase Date<\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'>Purchase Amount<\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'>Warranty Duration<\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'>Warranty Expiration Date<\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_service_number'>Phone Service Number<\/label><input type='text' id='man_service_number' name='man_service_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_service_provider'>Service Provider<\/label><input type='text' id='man_service_provider' name='man_service_provider' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_service_type'>Service Type<\/label><select id='man_service_type' name='man_service_type' style='width: 135px' ><option value=' '>&nbsp;<\/option><option value='voice'>Voice only<\/option><option value='data'>Data only<\/option><option value='voice and data'>Voice and Data<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_service_plan'>Service Plan<\/label><input type='text' id='man_service_plan' name='man_service_plan' size='20' title='$49 / month, etc' \/><br \/>";
            status_text = status_text + "<label for='man_service_network'>Service Network<\/label><input type='text' id='man_service_network' name='man_service_network' size='20' title='GSM, 2G, 3G, NextG, 4G, etc' \/><br \/>";
            status_text = status_text + "<label for='man_unlock_pin'>Tablet PIN<\/label><input type='text' id='man_unlock_pin' name='man_unlock_pin' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_imei'>IMEI Serial<\/label><input type='text' id='man_serial_imei' name='man_serial_imei' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial_sim'>SIM Serial<\/label><input type='text' id='man_serial_sim' name='man_serial_sim' size='20' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        case "computer":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='hostname'>Hostname<\/label><input type='text' id='hostname' name='hostname' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_owner'>Assigned To<\/label><input type='text' id='man_owner' name='man_owner' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_ip_address'>IP Address<\/label><input type='text' id='man_ip_address' name='man_ip_address' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_os_group'>OS Group<\/label><input type='text' id='man_os_group' name='man_os_group' size='20' title='linux, windows, etc' \/> or <br \/>";
            status_text = status_text + " <?php echo $os_group_form;?>";
            status_text = status_text + "<label for='man_os_family_typed'>OS Family<\/label><input type='text' id='man_os_family_typed' name='man_os_family_typed' size='20' title='Windows XP, etc' \/> or <br \/>";
            status_text = status_text + " <?php echo $os_family_form;?>";
            status_text = status_text + "<label for='man_os_name'>OS Name<\/label><input type='text' id='man_os_name' name='man_os_name' size='20' title='Windows XP Professional, etc' \/> or <br \/>";
            status_text = status_text + " <?php echo $os_name_form;?>";
            status_text = status_text + "<label for='man_description'>Description<\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_manufacturer'>Manufacturer<\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'>Model<\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'>Serial<\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_asset_number'>Asset Number<\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_status'>Status<\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/><label for='man_environment'>Environment<\/label><select id='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'>PO Number<\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'>Cost Center<\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'>Vendor<\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_date'>Purchase Date<\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'>Purchase Amount<\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'>Warranty Duration<\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'>Warranty Expiration Date<\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        case "network printer":
        case "network scanner":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='hostname'>Hostname<\/label><input type='text' id='hostname' name='hostname' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_owner'>Assigned To<\/label><input type='text' id='man_owner' name='man_owner' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_ip_address'>IP Address<\/label><input type='text' id='man_ip_address' name='man_ip_address' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_description'>Description<\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_manufacturer'>Manufacturer<\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'>Model<\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'>Serial<\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'>Asset Number<\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_status'>Status<\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/><label for='man_environment'>Environment<\/label><select id='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'>PO Number<\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'>Cost Center<\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'>Vendor<\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_date'>Purchase Date<\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'>Purchase Amount<\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'>Warranty Duration<\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'>Warranty Expiration Date<\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        case "printer":
        case "projector":
        case "scanner":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='hostname'>Hostname<\/label><input type='text' id='hostname' name='hostname' size='20' \/><span style='color: red;'>*<\/span> (of the attached PC)<br \/>";
            status_text = status_text + "<label for='man_owner'>Assigned To<\/label><input type='text' id='man_owner' name='man_owner' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_description'>Description<\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_manufacturer'>Manufacturer<\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'>Model<\/label><input type='text' id='man_model' name='man_model' size='20' \/><\/span><br \/>";
            status_text = status_text + "<label for='man_serial'>Serial<\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: red;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'>Asset Number<\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_status'>Status<\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/><label for='man_environment'>Environment<\/label><select id='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'>PO Number<\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'>Cost Center<\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'>Vendor<\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_date'>Purchase Date<\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'>Purchase Amount<\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'>Warranty Duration<\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'>Warranty Expiration Date<\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        case "game console":
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='hostname'>Hostname<\/label><input type='text' id='hostname' name='hostname' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_ip_address'>IP Address<\/label><input type='text' id='man_ip_address' name='man_ip_address' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_os_group'>OS Group<\/label><input type='text' id='man_os_group' name='man_os_group' size='20' title='Xbox, Playstation, Wii, etc' \/><br \/>";
            status_text = status_text + "<label for='man_description'>Description<\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_manufacturer'>Manufacturer<\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'>Model<\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'>Serial<\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'>Asset Number<\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_status'>Status<\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/><label for='man_environment'>Environment<\/label><select id='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'>PO Number<\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'>Cost Center<\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'>Vendor<\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_date'>Purchase Date<\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'>Purchase Amount<\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'>Warranty Duration<\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'>Warranty Expiration Date<\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

        default:
            status_text = "<table><tr><td valign=\"top\">";
            status_text = status_text + "<label for='hostname'>Hostname<\/label><input type='text' id='hostname' name='hostname' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_ip_address'>IP Address<\/label><input type='text' id='man_ip_address' name='man_ip_address' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_os_group'>OS Group<\/label><input type='text' id='man_os_group' name='man_os_group' size='20' title='ios, etc' \/><br \/>";
            status_text = status_text + "<label for='man_os_family'>OS Family<\/label><input type='text' id='man_os_family' name='man_os_family' size='20' title='Cisco IOS 14, etc' \/><br \/>";
            status_text = status_text + "<label for='man_os_name'>OS Name<\/label><input type='text' id='man_os_name' name='man_os_name' size='20' title='Cisco IOS 14 v123, etc' \/><br \/>";;
            status_text = status_text + "<label for='man_description'>Description<\/label><input type='text' id='man_description' name='man_description' size='20' \/><br \/>";
            status_text = status_text + "<?php echo $location_form;?>";
            status_text = status_text + "<?php echo $org_form;?>";
            status_text = status_text + "<label for='man_manufacturer'>Manufacturer<\/label><input type='text' id='man_manufacturer' name='man_manufacturer' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_model'>Model<\/label><input type='text' id='man_model' name='man_model' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_serial'>Serial<\/label><input type='text' id='man_serial' name='man_serial' size='20' \/><span style='color: blue;'>*<\/span><br \/>";
            status_text = status_text + "<label for='man_asset_number'>Asset Number<\/label><input type='text' id='man_asset_number' name='man_asset_number' size='20' \/><br \/>";
            status_text = status_text + "<\/td><td valign=\"top\">";
            status_text = status_text + "<label for='man_status'>Status<\/label><select id='man_status' name='man_status' style='width: 135px' ><option selected value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><option value='unallocated'>Unallocated<\/option><option value='lost'>Lost<\/option><\/select><br \/><label for='man_environment'>Environment<\/label><select id='man_environment' ><option selected value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select><br \/>";
            status_text = status_text + "<label for='man_purchase_order_number'>PO Number<\/label><input type='text' id='man_purchase_order_number' name='man_purchase_order_number' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_cost_center'>Cost Center<\/label><input type='text' id='man_purchase_cost_center' name='man_purchase_cost_center' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_vendor'>Vendor<\/label><input type='text' id='man_purchase_vendor' name='man_purchase_vendor' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_date'>Purchase Date<\/label><input type='text' id='man_purchase_date' name='man_purchase_date' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<label for='man_purchase_amount'>Purchase Amount<\/label><input type='text' id='man_purchase_amount' name='man_purchase_amount' size='20' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_duration'>Warranty Duration<\/label><input type='text' id='man_warranty_duration' name='man_warranty_duration' size='20' title='in months' \/><br \/>";
            status_text = status_text + "<label for='man_warranty_expires'>Warranty Expiration Date<\/label><input type='text' id='man_warranty_expires' name='man_warranty_expires' size='20' title='YYYY-MM-DD' \/><br \/>";
            status_text = status_text + "<\/td><\/tr><\/table>";
            status_text = status_text + "<br \/><p><label for='submit'>&nbsp;<\/label><input type='submit' name='submit' value='<?php echo __('Submit'); ?>' id='submit' \/><\/p>";
            break;

    }
    document.getElementById("details").innerHTML = status_text;
}
</script>
