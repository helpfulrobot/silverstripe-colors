<?php
class Colors_SiteConfigExtension extends DataExtension {
  /**
    FIELDS
  **/

  static $db = array (
  );

  public static $default_sort='';

  static $summary_fields = array (
  );

  /**
    CMS FIELDS
  **/

  public function updateCMSFields(FieldList $fields) {    
    /*
      APPEARANCE TAB
    */

    $tab = 'Root.Appearance.Colors';
    
    $conf=GridFieldConfig_RelationEditor::create(10);
    $conf->removeComponentsByType('GridFieldPaginator');
    $conf->removeComponentsByType('GridFieldPageCount');
    $data = DataObject::get('Color');
    $field = new GridField('Color', 'Colors', $data, $conf);
    $fields->addFieldToTab($tab, $field);
  }
}