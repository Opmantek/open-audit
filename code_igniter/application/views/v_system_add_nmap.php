<?php
/**
 * OAv2
 *
 * An open source network auditing application
 *
 * @package OAv2
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version beta 8
 * @copyright Copyright (c) 2011, Mark Unwin
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<title>OAv2 Nmap Input</title>
</head>
<body>
<?php $attributes = array('accept-charset'=>'UTF-8'); ?>
<?php echo form_open('system/add_nmap', $attributes) . "\n"; ?>
    <?php echo form_fieldset('Add an Nmap audit') . "\n"; ?>
        <label for="form_nmap">Details: </label><p><?php echo form_textarea(array('name' => 'form_nmap', 'id' => 'form_nmap', 'rows' => '15', 'cols' => '100')); ?></p>
        <p><?php echo form_submit('submit', 'Submit'); ?></p>
    <?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
</body>
</html>
