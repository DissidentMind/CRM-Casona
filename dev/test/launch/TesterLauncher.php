<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />-->
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
    
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="/css/ie.css" media="screen, projection" />
  <![endif]-->
  <link rel="shortcut icon" type="image/ico" href="http://paneldemo.oneplace.mx/themes/zicepanel_flat/images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="http://paneldemo.oneplace.mx/themes/zicepanel_flat/css/zice.style.css" />
</head>
<body>
    <h3>Deploy Test</h3>
<?php
      
    $rootpath = $_SERVER['DOCUMENT_ROOT'];
    include($rootpath."/CRM-Casona/dev/app/custom/UtilityFuncts.php");
    
    //define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/CRM-Casona/dev/app/custom/UtilityFuncts.php");
    //echo("Path: ".ROOT_PATH);
    
    //___DIR___
    //fopen(__DIR__.'/c/c/c/',a);
    
   /* $array = array(
    "foo" => "bar",
    "bar" => "foo"
    );*/
    
    $cars = array("http://paneldemo.oneplace.mx/themes/zicepanel_flat/js/jquery.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/jquery.ui.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/timepicker.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/jquery.ui.datepicker-es.js");
    
    $appUtils = new UtilityFuncts();
    $appUtils->createFileFromUrl($cars,"C:\\Users\\evanf\\Documents\\roottest\\");
    
   ?>
</body>
</html>
