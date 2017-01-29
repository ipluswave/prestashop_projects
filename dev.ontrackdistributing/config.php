<?php
// FRONTEND CONFIG

// HTTP
define('HTTP_SERVER', 'http://ontrackdistributing.com/');
define('HTTP_CATALOG', 'http://ontrackdistributing.com/');
define('HTTP_IMAGE', 'http://ontrackdistributing.com/image/');
define('HTTP_ADMIN', 'http://ontrackdistributing.com/admin/');

// HTTPS
define('HTTPS_SERVER', HTTP_SERVER);
define('HTTPS_CATALOG', HTTP_CATALOG);
define('HTTPS_IMAGE', HTTP_IMAGE);
define('HTTPS_ADMIN', HTTP_ADMIN);

// DIR
define('DIR_CATALOG', '/home/atul123/public_html/ontrackdistributing.com/catalog/');
define('DIR_APPLICATION', DIR_CATALOG);
define('DIR_SYSTEM', '/home/atul123/public_html/ontrackdistributing.com/system/');
define('DIR_LANGUAGE', DIR_APPLICATION.'language/');
define('DIR_TEMPLATE', DIR_APPLICATION.'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM.'config/');
define('DIR_IMAGE', '/home/atul123/public_html/ontrackdistributing.com/image/');
define('DIR_CACHE', DIR_SYSTEM.'cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM.'download/');
define('DIR_UPLOAD', DIR_SYSTEM.'upload/');
define('DIR_MODIFICATION', DIR_SYSTEM.'modification/');
define('DIR_LOGS', DIR_SYSTEM.'logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'atul123_oc3');
define('DB_PASSWORD', 'P&rexpx#cLhY58(s90(65.(8');
define('DB_DATABASE', 'atul123_oc3');
define('DB_PREFIX', 'oc_');
define('DB_PORT', '3306');
?>