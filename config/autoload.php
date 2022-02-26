<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

global $autoload;

$autoload['libraries'] = [
    'database',
    'mail'
];

$autoload['helper'] = [
    'data', 
    'format', 
    'prem'
];