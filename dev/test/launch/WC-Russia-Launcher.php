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
    <link rel="stylesheet" href="../css/custom_style.css" type="text/css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">-->
     <!-- <link rel="stylesheet" type="text/css" href=".../css_lib/crm_styler.css"> -->
    <style>
    @page {
        size: Letter landscape; 
        size: auto;/* es el valor por defecto */
        margin: 10%;
        }
        
    @media print {
       /* Todas las reglas Css */
        
    }
        
    h3{  
        margin: 0;
        padding: 0;
        font-weight: bold;
        color:#666;
        font-size: 20px;
        font-family:"Myriad Pro", Arial, Helvetica, sans-serif;
        text-transform:uppercase;
        border-bottom: 1px #eeeeee solid;
        /*margin-bottom: 13px;
        line-height: 35px;*/
        }
        
    table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        .txt-bld{
            font-family: sans-serif;
            font-size: 15px;
            font-weight: bold;
            color: #373d47;
        }
        .ply-font{
            font-family: sans-serif;
            font-size: 13px;
            font-weight: bold;
            color: #373d47;
        }
        
    
    </style>
</head>
<body>
    <h3>World Cup Russia 2018 - FIFA</h3>
     <div id="container">
      <!--  <p>
        <input type="button" id="getusers" class="uibutton" value="GET Value"/>
        </p> -->
<?php       
    /*if ($db_conct->getLastErrno() === 0){
        echo 'Sucess';
    }else{
      echo 'Failed:'. $db_conct->getLastError();  
    }*/
//include($rootpath."/CRM-Casona/dev/app/custom/UtilityFuncts.php");
         
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
         
function displayMatches($offset,$count){
    //echo(__DIR__);
    //echo("<br>".$rootpath);
    
$cars = array("rus","ksa","egy","uru","mar","irn","por","esp","fra","aus","arg","isl","per","den","cro","nga","crc","srb","ger","mex","bra","sui","swe","kor","bel","pan","tun","eng","col","jpn","pol","sen");
    
    $db_conct = connectStart();
    $arryCols = Array("team_l","team_v");
    $tableName = 'matches_wc';
    
if ($db_conct->getLastErrno() === 0)
      echo 'Succesfull';
    //$users = $db_conct ->get($tableName,$interval,$arryCols);
    //******************
        $users = $db_conct->withTotalCount()->get($tableName, Array ($offset, $count));
    //*******************
    //*******************
    //$page = 1;
    // set page limit to 2 results per page. 20 by default
    //$db_conct->pageLimit = 16;
    //$products = $db_conct->arraybuilder()->paginate("products", $page);
    //echo "showing $page out of " . $db->totalPages;
    //*******************
    
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
              <td><img src=".$url.$user['team_l']." height='32' width='73'/></td>
              <td align='center' class='txt-bld'>".$user['score_l']."</td>
              <td align='center' class='txt-bld'>".$user['score_v']."</td>
              <td>
              <img src=".$url.$user['team_v']." height='32' width='73'/>
              </td>
            </tr>");
          }
          echo('</tbody>
          </table>');
      }else{
      echo 'Failed. Error: -> '. $db_conct->getLastError() . '</br>';
        }
    }
         
function displayPlayersScoreCard(){
   
    try{
        $db_con = connectStart();
    }catch(Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    
    $tablePlay = 'contest_wc';
    $cols = Array("name_player","points_player","goals_player");
    
   // echo($db_con);
    //echo($db_con->count);
   /* if ($db_con->getLastErrno() === 0){
       echo 'Succesfull'; 
    }*/
    $players = $db_con->get($tablePlay, null, $cols);
    
    if ($db_con->count > 0){
        //echo $players;
        $pos = 1;
          echo("<table class='striped'>
              <thead>
                <tr>
                    <th>CLASF.</>
                    <th>JUGADOR</th>
                    <th>ACIERTOS</th>
                    <th>TOT.GOLES</th>
                </tr>
              </thead>
              <tbody>");
        foreach ($players as $play) {                 
            echo("<tr>
                    <td align='center' class='ply-font'>".$pos."</td>
                    <td class='ply-font'>".$play['name_player']."</td>
                    <td align='center'>".$play['points_player']."</td>
                    <td align='center'>".$play['goals_player']."</td>
                    </tr>");
            $pos += 1;
                }
            echo("</tbody>
                </table>");
            //if ($db_conct->count > 0)
        }
    }      
?>                
</div>        


<div class="row">
      <div class="col s7">
          <table>
            <tbody>
                <tr>
                    <td><?php displayMatches(0,16); ?></td>
                    <td><?php displayMatches(16,16); ?></td>
                    <td><?php displayMatches(32,16); ?></td>
                </tr>          
            </tbody>
        </table></div>
      <div class="col s5">
          <table>
              <tbody>
                <tr>
                    <td><?php displayPlayersScoreCard(); ?></td>
                </tr> 
              </tbody>
          </table>
    </div>
</div>
    
</body>
</html>
