<?php
// HTTP
define('HTTP_SERVER', 'https://smartcool.local/');

// HTTPS
define('HTTPS_SERVER', 'https://smartcool.local/');

// DIR
define('DIR_APPLICATION', 'C:/OSPanel/home/SmartCool.local/catalog/');
define('DIR_SYSTEM', 'C:/OSPanel/home/SmartCool.local/system/');
define('DIR_IMAGE', 'C:/OSPanel/home/SmartCool.local/image/');
define('DIR_STORAGE', 'C:/OSPanel/home/SmartCool.local/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'MySQL-8.0');
define('DB_USERNAME', 'smart');
define('DB_PASSWORD', 'smart');
define('DB_DATABASE', 'SmartCool');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');