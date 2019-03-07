<?php
/**
 * Created by PhpStorm.
 * User: luyan
 * Date: 2019/3/4
 * Time: 16:52
 */

//PATH
define('ROOT_PATH',BASE_PATH.'../');
define('APP_PATH',ROOT_PATH.'app');
define('APP_CONTROLLER_PATH',APP_PATH.'/controller');
define('APP_HOOK_PATH',APP_PATH.'/hook');
define('APP_LIB_PATH',APP_PATH.'/lib');
define('APP_MODEL_PATH',APP_PATH.'/model');
define('APP_VALIDATA_PATH',APP_PATH.'/validata');

define('DATA_PATH',ROOT_PATH.'data');
define('DATA_TWIG_CACHE_PATH',DATA_PATH.'/twig_cache');
define('DATA_CONFIG_PATH',DATA_PATH.'/config');
define('DATA_FUNCTIONS_PATH',DATA_PATH.'/functions');
define('APP_ACCESS_LOG_PATH',DATA_PATH.'/access_logs');
define('APP_MYSQL_LOG_PATH',DATA_PATH.'/mysql_logs');
define('APP_REDIS_LOG_PATH',DATA_PATH.'/redis_logs');
