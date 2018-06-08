<?php
//require_once('../custm_lib/evnf_fun.php');
require_once ('../php_lib/MysqliDb.php');

   $db_conct = new MysqliDb (Array (
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db'=> 'db_crm_casona',
        'port' => 3306,
        'prefix' => '',
        'charset' => 'utf8'));

    $db_conct->autoReconnect = false;

    if ($db_conct->getLastErrno() === 0){
        //return $$db_conct;
        echo 'Sucess';
    }else{
      echo 'Failed. Error: '. $db_conct->getLastError();  
    }

//$db_conct = CrmCasonaFuns::startConnectionDb();


//$db_conct->rawQuery('SELECT * from users_crm where level_usr=1', Array (10));


//echo("Result: ".$rslt);
//echo("Connection: ".{$db_conct});

/*if(isset($_POST["idreq"])){
     if($_POST["idreq"] != ''){
         
$users = $db_conct->rawQuery('SELECT * from users_crm where level_usr='.$_POST["idreq"], Array (10));
foreach ($users as $user) {
    //print_r ($user);
    echo($user);
        }     
     }
}*/

/*$arryCols = Array("id","name_usr","email_usr","level_usr");
$tableName = 'users_crm';
$crmFunCall = new CrmCasonaFuns();*/
// }
//}
//return $users;
    
?>