<?php
class CrmCasonaFuns{
  public function setConnectionDB(){
  $db = new MysqliDb (Array (
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db'=> 'db_crm_casona',
        'port' => 3306,
        'prefix' => '',
        'charset' => 'utf8'));
    $db->autoReconnect = false;

    if ($db->getLastErrno() === 0)
      echo 'Succesfull';
          else
      echo 'Failed. Error: '. $db->getLastError();
  }

  public function getsTableRecords($arryCols, $tableName){
    require_once ('php_lib/MysqliDb.php');
    $db = new MysqliDb (Array (
          'host' => 'localhost',
          'username' => 'root',
          'password' => '',
          'db'=> 'db_crm_casona',
          'port' => 3306,
          'prefix' => '',
          'charset' => 'utf8'));
      //  $this->setConnectionDB();
    //  $db->autoReconnect = false;

      if ($db->getLastErrno() === 0)
        echo 'Succesfull';
        $users = $db->get ($tableName, null, $arryCols);
        if ($db->count > 0){
        echo('<table class="striped">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>USER</th>
                      <th>EMAIL</th>
                      <th>LEVEL</th>
                  </tr>
                </thead>
                <tbody>');
            foreach ($users as $user) {
                //print_r ($user);
  //***********************************
        echo('<tr>
                <td>'.$user['id'].'</td>
                <td>'.$user['name_usr'].'</td>
                <td>'.$user['email_usr'].'</td>
                <td>'.$user['level_usr'].'</td>
              </tr>');
  //**********************************
            }
            echo('</tbody>
            </table>');
        }    else
        echo 'Failed. Error: -> '. $db->getLastError() . '</br>';
      }
}/*functions*/
//}
//foreach($arryCols as $arryC){
//$cols = Array ("id", "name", "email");
?>
