<?php
/**
* autocomplete helper
* $string = string for search
*/
function _company_autocomplete($string) {
  $matches = array();

  $result = db_query_range("SELECT distinct(field_company_value)  FROM {content_type_corporate_barefoot} WHERE LOWER(field_company_value) LIKE LOWER('%s%') order by field_company_value asc", $string, 0, 10);

  while ($data = db_fetch_object($result)) {
    $matches[$data->field_company_value] = check_plain($data->field_company_value);
  }

  // return for JS
  print drupal_to_js($matches);
  exit();
}
?>