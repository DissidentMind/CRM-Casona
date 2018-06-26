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
    <script>
    $(document).ready(function() {

            var matchData = new Array();
            var goals_l = new Array();
            var goals_v = new Array();

        $("#submitForm").click(function(event) {
            var x = $("#formf").serializeArray();
            
            //
            //************************
 var saveLocal = false;
            var namesP;
            var match_n;
            var goles_l;
            var goles_v;
            
  $.each(x, function(i, field) {
                    //console.log("N: "+field.name);
                    //console.log("V: "+field.value);

            if (field.value != "") {

                if(field.name == "names"){
                    namesP = field.value;
                    //console.log("ID: "+namesP);
                     }

                if(field.name.substr(0, field.name.indexOf('_'))){
                        match_n = field.name.substr(0, field.name.indexOf('_'));
                         //console.log("Match ID: "+match_n);
                    }

                    if (field.name.match(/[l]/i)) {
                        goles_l = field.value;
                         //console.log("Local: "+goles_l);
                    }

                    if(field.name.match(/[v]/i)) {
                        goles_v = field.value;
                         //console.log("Visita: "+goles_v);
                    }
//***********************************************************
if(saveLocal == false){
    if(namesP && match_n && goles_l){
                    console.log("Id: "+namesP);
                    console.log("Match: "+match_n);
                    console.log("Goles L: "+goles_l);
                    saveLocal = true;
                }
}else{
    if(namesP && match_n && goles_l && goles_v){
                    console.log("Id: "+namesP);
                    console.log("Match: "+match_n);
                    console.log("Goles V: "+goles_v);
                    saveLocal = false;
                }
            }
//***********************************************************
    }//Empty IF
});
    event.preventDefault();
            });
        });
        
function storeValuesForm(var playerID, var matchNum, var golesScore){
    
}        

    </script>
</head>

<body>
    <h3>World Cup Russia 2018 - FIFA - Update Players Choises</h3>
    <div id="container">
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
    
function displayPlayers(){
    $db_conct = connectStart();
    $arryCols = Array("n","name_player");
    $tableName = 'contest_wc';
    
    if ($db_conct->getLastErrno() === 0)
      echo 'Succesfull';
    $users = $db_conct->get($tableName,10,$arryCols);
     if ($db_conct->count > 0){
         foreach ($users as $user) {
            echo("<option value='".$user['n']."'>".$user['name_player']."</option>");
         }
     }else{
          echo 'Failed. Error: -> '. $db_conct->getLastError() . '</br>';
     }
}    
    
function displayMatches($offset,$count){
    $db_conct = connectStart();
    $arryCols = Array("team_l","team_v");
    $tableName = 'matches_wc';

if ($db_conct->getLastErrno() === 0)
      echo 'Succesfull';
        $users = $db_conct->withTotalCount()->get($tableName, Array ($offset, $count));

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
        if(is_null($user['score_l']) || is_null($user['score_v'])){
            echo("<td align='center' class='txt-bld'>
                <input type='text' size='4' name='".$count."_l'>            </td>
              <td align='center' class='txt-bld'><input type='text' size='4' name='".$count."_v'></td>");
            $count += 1;
        }else{
            echo(" <td align='center' class='txt-bld'>".$user['score_l']."</td>
              <td align='center' class='txt-bld'>".$user['score_v']."</td>");
            $count += 1;
            }       
        echo("<td>
              <img src=".$url.$user['team_v']." height='32' width='73'/>
              </td>
            </tr>");
          }
          echo('</tbody>
          </table>
          
          ');
      }else{
      echo 'Failed. Error: -> '. $db_conct->getLastError() . '</br>';
        }
    }
?>
    </div>
    <div class="row">
        <div class="col s7" id="matches_table">
            <form id="formf" action="">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <select name="names">
                                <?php displayPlayers(); ?>
                            </select>
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <?php displayMatches(0,16); ?>
                            </td>
                            <td>
                                <?php displayMatches(16,16); ?>
                            </td>
                            <td>
                                <?php displayMatches(32,16); ?>
                            </td>
                        </tr>
                    
                </tbody>
            </table>
        </form>
                <!-- <input type="submit" id="submitForm" name="submitForm" value="Submit">-->
            
            <button id="submitForm" name="submitForm">Done</button>
        </div>
    </div>
    <div class="row">
        <div id="results" name="results"></div>
    </div>
    
    <spawn id="sub" name="sub">
    </spawn>
</body>

</html>