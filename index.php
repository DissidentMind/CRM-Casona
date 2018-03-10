  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
			<!-- Compiled and minified CSS -->
			 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	    <title>CRM - La Casona del Banco</title>
			<!--Import jQuery before materialize.js-->
			<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			<!-- Compiled and minified JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>

      <link rel="stylesheet" type="text/css" href="css_lib/crm_styler.css">
    </head>
  <body>
<!-- Connect - DB -->
<!-- ****************************** -->
<?php
/*require_once ('php_lib/MysqliDb.php');
require_once('custm_lib/evnf_connect.php');
require_once('custm_lib/evnf_fun.php');

$arryCols = Array("id","getid","deed");
$tableName = "deeds_db";*/

/*require_once ('php_lib/MysqliDb.php');
$db = new MysqliDb (Array (
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'evanfa85',
    'db'=> 'test_dummy',
    'port' => 3307,
    'prefix' => '',
    'charset' => 'utf8'));
$db->autoReconnect = false;*/
/*$data = Array (
    "name" => 'Test'
    );
$id = $db->insert ('category', $data);
if($id)
    echo 'user was created. Id=' . $id;
if ($db->getLastErrno() === 0)
    echo 'Succesfull';
        else
    echo 'Failed. Error: '. $db->getLastError();
    */
 ?>
<!-- ****************************** -->
<!-- Connect - DB -->

<!-- Nav -->
  <nav>
    <div class="nav-wrapper brown darken-3">
      <a href="#!" class="brand-logo">CRM - La Casona del Banco - Deployer</a>
      <ul class="right hide-on-med-and-down">
        <li><a id="btnReload" class="waves-effect waves-light brown btn lighten-2">Execute<i class="material-icons right">cached</i></a></li>
      </ul>
    </div>
  </nav>
<!-- Container -->
<!-- Container -->
<!--<div class="content">-->

<script type="text/javascript">
  $(btnReload).click(function(e){
  	location.reload();
  });
</script>

</br>
<div class="row">
  <div class="col l6 s12">
    <p>  Data Table  </p>
<?php
//require_once ('php_lib/MysqliDb.php');
/*require_once('custm_lib/evnf_connect.php');*/
require_once('custm_lib/evnf_fun.php');

$arryCols = Array("id","name_usr","email_usr","level_usr");
$tableName = 'users_crm';
$crmFunCall = new CrmCasonaFuns();
$crmFunCall ->getsTableRecords($arryCols, $tableName);
    /*$db->where ("id", 3);
    $user = $db->getOne ("category");
    echo $user['name'];*/
    /*$stats = $db->getOne ("users", "sum(id), count(*) as cnt");
    echo "total ".$stats['cnt']. "users found";*/
 ?>
  </div>
</div>

<div class="row">
  <ul class="pagination">
     <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
     <li class="active"><a href="#!">1</a></li>
     <li class="waves-effect"><a href="#!">2</a></li>
     <li class="waves-effect"><a href="#!">3</a></li>
     <li class="waves-effect"><a href="#!">4</a></li>
     <li class="waves-effect"><a href="#!">5</a></li>
     <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
   </ul>
</div>

<!-- Container -->
<!--</div>-->
<!-- Container -->

<footer class="page-footer brown darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">CRM - La Casona del Banco</h5>
                <p class="grey-text text-lighten-4">La Casona del Banco, Parras, Coauhila.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Querys</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    </body>
  </html>
