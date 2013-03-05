<?php
require_once 'config/bootstrap.php';

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         '^G1LfBWst~>E_1FAc=me}Qa,ffc+U.K<~Ase:@-aHR97|_(-4(LDmAGv2F{1@8Gc');
define('SECURE_AUTH_KEY',  '*(RAib;>K>!M-yY=(4wJ]INy|rg9QLoR#Y)0+LHTNg9qI[u>3P!=,t%0KW]&s+L|');
define('LOGGED_IN_KEY',    'VUMeUUlgU`yvjRI^5E}&>->PY(;.l_|r*sc&Q|t-ENGaGVlgVdhO:j%(o6hE<B.u');
define('NONCE_KEY',        ':(wVMkc0MIJ4:VJk6Z9xO(F^MjbY!0PFRF_fLq]#33sXSuLykh&gwPfyh#[fd^H0');
define('AUTH_SALT',        ']+ +B9Uew=h>pw)Wf &WA**L#2Y2aH5`W*vsf`K}`?1Da0y-3YRhV.DjX/5l,zjV');
define('SECURE_AUTH_SALT', 'Gxjvo/+1,wH*GWs1W$Z<G|VM6yKU|@/uU`*Do4IA8NQ*_1F)} p]DA7FK1}#`rTh');
define('LOGGED_IN_SALT',   'bhGla{7+=3`Fj#C*daZ5]R/VBf)wS2;75Y<Ps*B}T-rHF+%OrY&F8>.2;0pn|`eC');
define('NONCE_SALT',       '0oM*m/-{8msQg+hEWPq_f[2DRYT?cU|da:)>_|gFALNp#@XTYY^o^OZb7fmzG]yM');

$table_prefix  = 'wp_';
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
?>
