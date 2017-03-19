    <!doctype html>
    <html ng-app lang="en">
      <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#hideIt").fadeIn(3000);
    });
    </script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
        <title>Angular Template</title>
<link href="css/main.css" rel="stylesheet">

            <!-- Bootstrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet">




            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

            <!-- start of fade in -->


            <!-- end of fade in-->



      </head>
      <body>
        <div class="container-fluid">
          <div class="headerGraph"></div>
</div>
        <div class="container">
          <div class="welcome">
          <label >Your name:</label>
          <input type="text" ng-model="yourName" placeholder="Enter a name here">
          <hr>
          <h1 id="hideIt">Hello {{yourName}}!</h1>
        </div>
        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>

      </body>
    </html>
