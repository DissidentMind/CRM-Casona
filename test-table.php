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
        <!-- JQuery -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <style>
            .container {
              width: 100%;
              max-width:initial;
            }
            .container > .row {
              margin: 0;
            }
            .container > .row > .col {
              padding: 0;
            }
        </style>
        <!-- CUSTOM TABLES -->
        <link rel="stylesheet" type="text/css" href="css_lib/crm_styler.css">
        <title>CRM - La Casona del Banco</title>
        
<script type="text/javascript">
  $(document).ready(function() {
      //$('#listSelect').change(function(){
        //var listSelect = $(this).val();
      
        var listSelect = 1;
      
        $.ajax({
            url:"dev_tester/getDataFromQuery.php",
            method: "POST",
            data:{
                idreq:listSelect
            },
            success:function(data){
                console.log("Success");
                //console.log(data);
              // $('#datatable').html(data);
                 $('#show_section').html(data);
            }
        });
   // });
  });
    
</script>
</head>
      
<body> 
<!-- Nav -->
  <nav>
    <div class="nav-wrapper brown darken-3">
      <a href="#!" class="brand-logo">CRM - La Casona del Banco - Deployer</a>
      <ul class="right hide-on-med-and-down">
        <li><a id="btnReload" class="waves-effect waves-light brown btn lighten-2">Execute<i class="material-icons right">cached</i></a></li>
      </ul>
    </div>
  </nav>

<script type="text/javascript">
  $(btnReload).click(function(e){
  	location.reload();
  });
</script>

<div class="container">
    <div class="row">
        <div class="col s12">
        <!--<select name="listSelect" id="listSelect">
            <option value="">Show Levels</option>
            <option value="1">Level 1</option>
            <option value="2">Level 2</option>
            <option value="3">Level 3</option>
        </select>-->
            
            <div id="show_section">
            
            
            </div>

        </div>
    </div>
    </div>    
    
<!--------------------- Container ----------------------->  
<div class="container">
  <div class="row">
    <div class="col s12">
      This div is 12-columns wide on all screen sizes
    </div>
    <div class="col s6 yellow">6-columns (one-half)</div>
    <div class="col s6 blue">6-columns (one-half)</div>
  </div>
  <div class="row">
    <div class="col s12">
      This div is 12-columns wide on all screen sizes
    </div>
   
  </div>
</div>
<!--------------------- Container -----------------------> 
    
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