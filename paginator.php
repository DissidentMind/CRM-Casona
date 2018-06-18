
<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	    <title>CRM - La Casona del Banco</title>
			<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css_lib/crm_styler.css">
    </head>
<body>
  <div class="row">
    <div class="col l6 s12">
    <?php
    //if(isset($_GET['id']) && $_GET['id'] !== ''){
     // $product_id = $_GET['id'];
      //echo $product_id;

      require_once('custm_lib/evnf_fun.php');
      $arryCols = Array("id","name_usr","email_usr","level_usr");
      $tableName = 'users_crm';
      $crmFunCall = new CrmCasonaFuns();
      //$crmFunCall ->getsTableRecords($arryCols, $tableName);
      $crmFunCall ->getsTotalRecords($arryCols, $tableName);
    //  echo $crmFunCall;
    //} else {
    //  echo "failed";
    //}
  /*<a href="pages.php?id=<?php echo $product_id; ?>"> */
     ?>
   </div>
 </div>


</body>
</html>
