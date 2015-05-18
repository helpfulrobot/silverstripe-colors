<?php
class MyDataObject extends DataObject {
    private static $has_one = array (
        'MyColor' => 'Color'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        /*
        *   MAIN TAB
        */

        $tab = 'Root.Main';
        
        //provides listbox field menu for selecting a predefined Color
        $data = DataObject::get('Color');
        $field = new ListboxField('MyColorID', 'My Color');
	    $field->setSource($data->map('ID', 'Name')->toArray());
	    $field->setEmptyString('Select one');
	    $fields->addFieldToTab($tab, $field);

        return $fields;
	}
}