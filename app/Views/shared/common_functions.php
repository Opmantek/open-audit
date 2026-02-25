<?php

function aboutNotesDiv (string $collection = '', object $dictionary = null)
{
    $return = '';
    if (! empty($dictionary->about)) {
        $return .= "<h4 class=\"text-center\">" . __('About') . "</h4><br>";
        $return .= __($dictionary->about);
        $return .= __($dictionary->link) . ' <a href="' . url_to($collection . 'Help') . '"><i class="icon-link"></i></a><br><br>';
    }
    if (! empty($dictionary->notes)) {
        $return .= "<h4 class=\"text-center\">" . __('Notes') . "</h4><br>";
        $return .= html_entity_decode(__($dictionary->notes));
    }
    return $return;
}

function fieldsInfoDiv (object $dictionary = null, array $fieldsList = [])
{
    if (empty($dictionary)) {
        return '';
    }
    $return = '';
    $return .= "<h4 class=\"text-center\">" . __('Fields') . "</h4><br>";
    foreach ($dictionary->columns as $key => $value) {
        if ($value !== 'Unused.' and $value !== '' and $key !== 'id' and $key !== 'edited_by' and $key !== 'edited_date' and (in_array($key, $fieldsList) or empty($fieldsList))) {
            // $key = ($key === 'org_id') ? strtolower(__('Organisation')) : $key;
            $return .= "<code>$key:</code> " . nl2br(html_entity_decode(__($value))) . "<br><br>";
        }
    }
    return $return;
}