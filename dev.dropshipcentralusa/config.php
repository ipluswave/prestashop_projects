<?php
// FRONTEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://dropshipcentralusa.com/');
define('HTTP_CATALOG', 'http://dropshipcentralusa.com/');
define('HTTP_IMAGE', 'http://dropshipcentralusa.com/image/');
define('HTTP_ADMIN', 'http://dropshipcentralusa.com/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_CATALOG', HTTP_CATALOG);
define('HTTPS_IMAGE', HTTP_IMAGE);
define('HTTPS_ADMIN', HTTP_ADMIN);

// DIR
define('DIR_CATALOG', '/home/atul123/public_html/dropshipcentralusa.com/catalog/');
define('DIR_APPLICATION', DIR_CATALOG);
define('DIR_SYSTEM', '/home/atul123/public_html/dropshipcentralusa.com/system/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/atul123/public_html/dropshipcentralusa.com/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM.'download/');
define('DIR_UPLOAD', DIR_SYSTEM.'upload/');
define('DIR_MODIFICATION', DIR_SYSTEM.'modification/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'atul123_oc2');
define('DB_PASSWORD', 'L*4RIBple3[r(aO0L#[32](0');
define('DB_DATABASE', 'atul123_oc2');
define('DB_PREFIX', 'oc_');
define('DB_PORT', '3306');
?>