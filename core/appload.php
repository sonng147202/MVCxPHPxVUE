<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

// CONFIGPATH
define('CONFIGPATH', APPPATH.DIRECTORY_SEPARATOR.'config');

// Include file config/path
require CONFIGPATH . DIRECTORY_SEPARATOR . 'path.php';

// Include file config/database
require CONFIGPATH . DIRECTORY_SEPARATOR . 'database.php';

// Include file config/email
require CONFIGPATH . DIRECTORY_SEPARATOR . 'mail.php';

// Include file config/autoload
require CONFIGPATH . DIRECTORY_SEPARATOR . 'autoload.php';

// // Include core available/Route
require COREPATH . DIRECTORY_SEPARATOR . 'available' . DIRECTORY_SEPARATOR . 'Route.php';

// // Include core routes/web
require ROUTESPATH . DIRECTORY_SEPARATOR . 'api.php';

// // Include public/index "VIEW MAIN"
require PUBLICPATH.DIRECTORY_SEPARATOR.'index.php';
















