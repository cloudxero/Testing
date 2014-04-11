<?php
if (isset($_POST['action'])) {
  switch ($_POST['action']) {
    case 'version':
      echo '3.24.4';
      break;
    case 'info':
      $obj = new stdClass();
      $obj->slug = 'plugin.php';
      $obj->plugin_name = 'plugin.php';
      $obj->new_version = '3.24.4';
      $obj->requires = '3.0';
      $obj->tested = '3.3.1';
      $obj->downloaded = 12540;
      $obj->last_updated = '2014-04-10';
      $obj->sections = array(
        'description' => 'The new version of the DealerTrend plugin',
        'another_section' => 'This is another section',
        'changelog' => 'Some new features'
      );
      $obj->download_link = 'http://updates.s3.dealertrend.com/wp-plugin-inventory-api/current/dealertrend-inventory-api.zip';
      echo serialize($obj);
    case 'license':
      echo 'false';
      break;
  }
} else {
    header('Cache-Control: public');
    header('Content-Description: File Transfer');
    header('Content-Type: application/zip');
    readfile('http://updates.s3.dealertrend.com/wp-plugin-inventory-api/current/dealertrend-inventory-api.zip');
}
?>
