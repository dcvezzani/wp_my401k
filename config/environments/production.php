<?php
#$dev_server = preg_replace('/:.*/',"", $_SERVER['HTTP_HOST']);
$dev_server = "my401k.vezzaniphotography.com"

define('WP_SITEURL', "http://$dev_server");
define('WP_HOME', "http://$dev_server");

$WP_ENVIRONMENT = array(
	'db_name' => '',
	'db_user' => '',
	'db_password' => '',
	'db_host' => '',
	'wp_lang' => '',
	'wp_debug' => false,
	'name' => 'production'
);
?>
