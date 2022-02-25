<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

require COREPATH . DIRECTORY_SEPARATOR . 'base.php';

load_folder(CONFIGPATH);

load_folder(COREPATH . DIRECTORY_SEPARATOR . 'available');

if (is_array($autoload)) {
    foreach ($autoload as $type => $list_auto) {
        if (!empty($list_auto)) {
            foreach ($list_auto as $name) {
                load_storage($type, $name);
            }
        }
    }
}

// // CONTROLLERS
load_folder(FAPPPATH . DIRECTORY_SEPARATOR . 'controllers');

// // MODELS
load_folder(FAPPPATH . DIRECTORY_SEPARATOR . 'models');

// // API
require ROUTESPATH . DIRECTORY_SEPARATOR . 'api.php';

// // LOAD VIEW
require PUBLICPATH.DIRECTORY_SEPARATOR.'index.php';
















