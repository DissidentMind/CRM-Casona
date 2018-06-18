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
    
    <script type="application/javascript">    
        $(function(){
              $('#getusers').on('click', function(e){
                e.preventDefault();
                $('#followbtn').fadeOut(300);

                $.ajax({
                  url: 'php/ajax-follow.php',
                  type: 'post',
                  data: {'action': 'follow', 'userid': '11239528343'},
                  success: function(data, status) {
                    if(data == "ok") {
                      $('#followbtncontainer').html('<p><em>Following!</em></p>');
                      var numfollowers = parseInt($('#followercnt').html()) + 1;
                      $('#followercnt').html(numfollowers);
                    }
                  },
                  error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                  }
                }); // end ajax call
            });
            
             $('#followbtn').on('click', function(e){
                
                 $.ajax({
                     url: 'app/template/Emailer.php',
                     type: 'post',
                     data:{},
                     success: function(data){
                         console.log("SucessX");
                     }
                 });
                 
             });                           
        });
  </script>
        
</head>
<body>
    <h3>Deploy Test</h3>
<?php
    
    $rootpath = $_SERVER['DOCUMENT_ROOT'];
    include($rootpath."/CRM-Casona/dev/app/custom/UtilityFuncts.php");
    
    echo(__DIR__);
    echo("<br>".$rootpath);
    
    /*$rootpath = $_SERVER['DOCUMENT_ROOT'];
    include($rootpath."/CRM-Casona/dev/app/template/DisplayTemplate.php");*/
    
    //$dplyTemplate = new DisplayTemplate();
    //$dplyTemplate->displayTable();
    
    /*$cars = array("http://paneldemo.oneplace.mx/themes/zicepanel_flat/js/jquery.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/jquery.ui.min.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/timepicker.js",
  "http://paneldemo.oneplace.mx/themes/zicepanel_flat/components/ui/jquery.ui.datepicker-es.js");
    
    $appUtils = new UtilityFuncts();
    $appUtils->createFileFromUrl($cars,"C:\\Users\\evanf\\Documents\\roottest\\");
    */
    //$rootpath = $_SERVER['DOCUMENT_ROOT'];
    //include($rootpath."/CRM-Casona/dev/app/custom/UtilityFuncts.php");
    
   ?>
    
    <div id="container">
        <p>
        <input type="button" id="getusers" class="uibutton" value="GET Value"/>
        </p>
        <p>
        <input type="button" id="followbtn" class="uibutton" value="Follow"/>
        </p>
        <div id="followercnt">
            
        </div>
    </div>
</body>
</html>
