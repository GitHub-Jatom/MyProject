<?php
/**
 * Created by PhpStorm.
 * User: Jatom_
 * Date: 2016/9/1
 * Time: 23:17
 */
include_once('./mytemplate/_lib/class.quickskin.php');

define('_debug',true); // 在开发时,声明一个DEBUG模式 

//define('template_dir','mytemplate/_skins/');
//define('temp_dir','mytemplate/_skins_tmp/');
//define('cache_dir','mytemplate/_skins/');
define('include_dir',__DIR__);
$_CONFIG['template_dir'] = __DIR__;
//echo  __DIR__;
$_CONFIG['quickskin_compiled'] = __DIR__ . '/mytemplate/_skins_tmp/';
$_CONFIG['quickskin_cache'] = __DIR__ . '/mytemplate/_skins/';

$is_debug = $_GET['_debug'];
if($is_debug == '1')
{
	ini_set('max_execution_time', 120);
	ini_set('display_errors', 'On');
	error_reporting(E_ERROR|E_COMPILE_ERROR|E_CORE_ERROR );
	ini_set('display_errors', '1');
} 

$all_debug = $_GET['all_debug'];
if($all_debug == '1')
{
	ini_set('max_execution_time', 120);
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
} 