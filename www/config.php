<?php

$PLATFORMPATH 	= dirname(__FILE__).'/../platform';

//set APPSPATH if you want to move APPSPATH folder
$APPSPATH		= dirname(__FILE__).'/apps';
$DEFAULTAPPNAME = 'front';
$DEFAULTFCPATH 	= dirname(__FILE__);


if (!isset($APPNAME)) {
    $APPNAME = $DEFAULTAPPNAME;
}

if (!isset($FCPATH)) {
    $FCPATH = $DEFAULTFCPATH;
}

if (!isset($SELF)) {
    $SELF = 'index.php';
}

$PLATFORMRUN 		= $PLATFORMPATH.'/run.php';
$PLATFORMCREATE 	= $PLATFORMPATH.'/create.php';
$PLATFORMDESTROY 	= $PLATFORMPATH.'/destroy.php';
