<?php
/**
 * Created by PhpStorm.
 * User: Jatom_
 * Date: 2016/9/3
 * Time: 0:20
 */
include_once('../world_config_inc.php');
include_once (include_dir. '/mytemplate/_lib/class.quickskin.php');

$_CONFIG['template_dir'] = __DIR__;
//echo __DIR__;
$tpl = new QuickSkin( "index.tpl.html" );
//echo __DIR__;
//$out = 'caijiatong';
//$tpl->assign('out',$out);

$tpl->output();
