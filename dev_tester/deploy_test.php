<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="/css/ie.css" media="screen, projection" />
  <![endif]-->
  <link rel="shortcut icon" type="image/ico" href="http://paneldemo.oneplace.mx/themes/zicepanel_flat/images/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="http://paneldemo.oneplace.mx/themes/zicepanel_flat/css/zice.style.css" />
</head>
<body>
  <textarea rows="20" cols="120" name="comment" form="usrform">
  <?php
  /*include('custm_lib/evnf_fun.php');
  $arryCols = Array("id","name_usr","email_usr","level_usr");
  $tableName = 'users_crm';
  $crmFunCall = new CrmCasonaFuns();
  $crmFunCall ->getsTableRecords($arryCols, $tableName);*/

  include("CstmEvanFun.php");
  $ctmEvn = new CstmEvanFun();
  $ctmEvn->cstmTest();

   ?>
   </textarea>
</body>
</html>
