silverstripe-colors
=======================================

Description
---------------------------------------
SilverStripe module which provides a [Color] DataObject and a Settings->Appearance->Colors menu for managing your website's Colors.

Usage
---------------------------------------
```
<?php
class MyDataObject extends DataObject {
    static $has_one = array (
        'MyColor' => 'Color'
    );

	public function getCMSFields() {
	    $fields = parent::getCMSFields();

        /*
        *   MAIN TAB
        */

	    $tab = 'Root.Main';
        
        //provides listbox field for selecting a predefined colors
	    $data = DataObject::get('Color');
	    $field = new ListboxField('MyColorID', 'My Color');
	    $field->setSource($data->map('ID', 'Name')->toArray());
	    $field->setEmptyString('Select one');
	    $fields->addFieldToTab($tab, $field);
        
        return $fields;
	}
}
```

Install
---------------------------------------
####Command Line:
```
composer require stephenjcorwin/silverstripe-colors
```

####Address Bar:
```
localhost/dev/build
```

Uninstall
---------------------------------------
####Command Line:
```
composer remove stephenjcorwin/silverstripe-colors
```

####Address Bar:
```
localhost/dev/build
```