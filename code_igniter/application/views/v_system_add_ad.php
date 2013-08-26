<?php
/**
 * Open-AudIT
 *
 * An open source network auditing application
 *
 * @package Open-AudIT
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version v1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>OAv2 System Input</title>
</head>
<body>
<?php $attributes = array('accept-charset'=>'UTF-8'); ?>
<?php echo form_open('system/add_system_ad', $attributes) . "\n"; ?>
    <?php echo form_fieldset('Add an AD audit') . "\n"; ?>
        <label for="form_systemXML">Details: </label><p><?php echo form_textarea(array('name' => 'form_systemXML', 'id' => 'form_systemXML', 'rows' => '15', 'cols' => '100')); ?></p>
        <p><?php echo form_submit('submit', 'Submit'); ?></p>
    <?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
</body>
</html>
