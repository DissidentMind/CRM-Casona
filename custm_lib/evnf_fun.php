<?php
function setConnectionDB(){
$db = new MysqliDb (Array (
      'host' => 'localhost',
      'username' => 'root',
      'password' => 'evanfa85',
      'db'=> 'db_opsdeliver',
      'port' => 3307,
      'prefix' => '',
      'charset' => 'utf8'));
  $db->autoReconnect = false;

  if ($db->getLastErrno() === 0)
    echo 'Succesfull';
        else
    echo 'Failed. Error: '. $db->getLastError();
}

function getsTableRecords($arryCols, $tableName){
  require_once ('php_lib/MysqliDb.php');
  $db = new MysqliDb (Array (
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'evanfa85',
        'db'=> 'db_opsdeliver',
        'port' => 3307,
        'prefix' => '',
        'charset' => 'utf8'));
  //  $db->autoReconnect = false;

    if ($db->getLastErrno() === 0)
      echo 'Succesfull';
      $users = $db->get ($tableName, null, $arryCols);
      if ($db->count > 0){
      echo('<table class="striped">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>GET</th>
                    <th>DEED</th>
                </tr>
              </thead>
              <tbody>');
          foreach ($users as $user) {
              //print_r ($user);
//***********************************
      echo('<tr>
              <td>'.$user['id'].'</td>
              <td>'.$user['getid'].'</td>
              <td>'.$user['deed'].'</td>
            </tr>');
//**********************************
          }
          echo('</tbody>
          </table>');
      }    else
      echo 'Failed. Error: -> '. $db->getLastError() . '</br>';
    }
//}
//foreach($arryCols as $arryC){
//$cols = Array ("id", "name", "email");
?>
