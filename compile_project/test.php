<?php
/**
 * Created by PhpStorm.
 * User: Jatom_
 * Date: 2016/9/1
 * Time: 21:59
 */
include_once('./world_config_inc.php');

$tpl = new QuickSkin( "test.tpl.html" );

$output = 'caijiattong';

$tpl->assign('output',$output);

$tpl->output();