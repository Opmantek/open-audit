<?php

function aboutNotesDiv (string $collection = '', object $dictionary = null)
{
    $return = '';
    if (! empty($dictionary->about)) {
        $return .= "<h4 class=\"text-center\">" . __('About') . "</h4><br>";
        $return .= __($dictionary->about);
        $return .= __($dictionary->link) . ' <a href="' . url_to($collection . 'Help') . '"><i class="fa-solid fa-link fa-sm"></i></a><br><br>';
    }
    if (! empty($dictionary->notes)) {
        $return .= "<h4 class=\"text-center\">" . __('Notes') . "</h4><br>";
        $return .= html_entity_decode($dictionary->notes);
    }
    return $return;
}

function fieldsInfoDiv (object $dictionary = null, array $fieldsList = [])
{
    if (empty($dictionary)) {
        return '';
    }
    log_message('info', json_encode($dictionary));
    $return = '';
    $return .= "<h4 class=\"text-center\">" . __('Fields') . "</h4><br>";
    foreach ($dictionary->columns as $key => $value) {
        if ($value !== 'Unused.' and $value !== '' and $key !== 'id' and $key !== 'edited_by' and $key !== 'edited_date' and (in_array($key, $fieldsList) or empty($fieldsList))) {
            $key = ($key === 'org_id') ? strtolower(__('Organisation')) : $key;
            $return .= "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
        }
    }
    return $return;
}