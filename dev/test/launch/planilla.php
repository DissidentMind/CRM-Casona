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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <style>
        @page {
            size: Letter landscape;
            size: auto;
            /* es el valor por defecto */
            margin: 10%;
        }

        h3 {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #666;
            font-size: 20px;
            font-family: "Myriad Pro", Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            border-bottom: 1px #eeeeee solid;
            /*margin-bottom: 13px;
        line-height: 35px;*/
        }

        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        .ply_font {
            font-family: "Myriad Pro", Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-size: bold;
        }

        #matches_table {
            position: relative;
            /*top: 0px;
            bottom: 0px;
            left: 0px;*/
            /*width: 70%;*/
        }

        input {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
function connectStart(){
    $rootpath = $_SERVER['DOCUMENT_ROOT'];
    require_once($rootpath."/CRM-Casona/php_lib/MysqliDb.php");
    $db_conct = new MysqliDb (Array (
      'host' => 'localhost',
      'username' => 'root',
      'password' => '',
      'db'=> 'db_wc_russia2018',
      'port' => 3306,
      'prefix' => '',
      'charset' => 'utf8'));
 return $db_conct;
    }
    
function getUserName($idUser){    
    $dbC = connectStart();
    $par = Array($idUser);
    
    $user = $dbC->rawQueryValue ('SELECT name_player FROM contest_wc WHERE n=? limit 1', $par);
    
    return $user;
}
    
function displayMatches($idplayer,$offset,$count){
    $db_conct = connectStart();
    //$arryCols = Array("n","match_n","score_l","score_v");
    //$tableName = 'selections_wc';
    
    $arryCols = Array("team_l","team_v");
    $tableName = 'matches_wc';
    
    $arrayMatch = Array("n","score_l","score_v");
    $tableMatch = 'selections_wc';

if ($db_conct->getLastErrno() === 0)
      echo 'Succesfull';
        
    $users = $db_conct->withTotalCount()->get($tableName, Array ($offset, $count));
    //$db_conct->where ("id", 1);
    //$user = $db_conct->getOne ($tableMatch);

if($offset == 0 || $offset == 16 || $offset == 32){
     $count = $offset;
     $count += 1;
}
    
if ($db_conct->count > 0){
    $url = "https://api.fifa.com/api/v1/picture/flags-fwc2018-4/";
      echo("<table class='striped'>
              <thead>
                <tr>
                <th>LOCAL</th>
                <th>GOLES</th>
                <th>GOLES</th>
                <th>VISITANTE</th>
                </tr>
              </thead>
              <tbody>");
    foreach ($users as $user) {
      echo("<tr>
              <td><img src=".$url.$user['team_l']." height='32' width='73'/></td>");
//***************************  

//***************************
    echo("<td align='center' class='txt-bld'>");
        $params = Array($idplayer,$count);

        $goals_l = $db_conct->rawQueryValue ('SELECT score_l FROM '.$tableMatch.' WHERE n=? AND match_n = ? limit 1', $params);
        
        echo($goals_l);
        
    echo("</td><td align='center' class='txt-bld'>");
        
        $goals_v = $db_conct->rawQueryValue ('SELECT score_v FROM '.$tableMatch.' WHERE n=? AND match_n = ? limit 1', $params);
        
         echo($goals_v);
        
    echo("</td>");
        
//***************************
         $count += 1;
//***************************
        echo("<td>
              <img src=".$url.$user['team_v']." height='32' width='73'/>
              </td>
            </tr>");
        
          }
          echo('</tbody>
          </table>
          
          ');
    
     $db_conct->disconnect();
    
      }else{
      echo 'Failed. Error: -> '. $db_conct->getLastError() . '</br>';
        }
    }
?>    
<?php
if(isset($_GET['ply'])){
    
    $n = $_GET['ply'];
    
echo("<h3>World Cup Russia 2018 - FIFA - ".getUserName($n)."</h3>");
    
echo("<div id='container'>
        <div class='row'>
        <div class='col s7' id='matches_table'>
                <table>
                    <tbody>
                        <tr><td>");
                        displayMatches($n,0,16);
                echo("</td><td>");
                        displayMatches($n,16,16);
                 echo("</td><td>");
                        displayMatches($n,32,16);
                 echo("   </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>");
}else{
    echo("<div id='container'>
        <div class='row'>");
    echo("<h3>Empty</h3>");
    echo("</div></div>");
}
?>
</body>
</html>