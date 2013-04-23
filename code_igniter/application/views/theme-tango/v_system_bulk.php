<?php echo form_open('bulk/add_bulk') . "\n"; ?>
    <?php echo form_fieldset('Bulk Load Systems') . "\n"; ?>
        <label for="form_systemXML">Details: </label><p><?php echo form_textarea('form_systemXML'); ?></p>
        <p><?php echo form_submit('submit', 'Submit'); ?></p>
    <?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>
