<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD KTP NATIVE</title>
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      hr {
        border:none;
        border-top:1px dotted #000;
        color:#fff;
        background-color:#fff;
        height:1px;
        width:100%;
      }
    </style>
   </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CRUD NATIVE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=crud/index">CRUD NATIVE</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <?php
      if(!empty($_GET['page'])){
        include('views/'.$_GET['page'].'.php');
      }else{
      echo '<div class="jumbotron">
        <p>Crud Native Example</p>
      </div>';
      }
      ?>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- script ajax untuk create -->
    <script type="text/javascript">
       $(function () {
        $('.form-data-ktp').on('submit', function (e) {
          var data = $('.form-data-ktp').serialize();
          e.preventDefault();
          e.stop
          $.ajax({
            type: 'POST',
            url: "process/create.php",
            data: data,
            success: function(message) {
              alert(message);
              window.location.href='index.php?page=crud/index';
            },
            error: function(message) {
              alert('message');
            }
          });
        });
      });
    </script>

    <!-- script ajax untuk edit -->
    <script type="text/javascript">
       $(function () {
        $('.form-edit-data').on('submit', function (e) {
          var data = $('.form-edit-data').serialize();
          e.preventDefault();

          $.ajax({
            type: 'POST',
            url: "process/edit.php",
            data: data,
            success: function(message) {
              alert(message);
              window.location.href='index.php?page=crud/index';
            },
            error: function(message) {
              alert(message);
            }
          });
        });
      });
    </script>

    <!-- script ajax untuk hapus -->
    <script type="text/javascript">
      $('.removeItem').click(function (event) {
          var url = $(this).attr("data-url");
          if (confirm('Are you sure you want to delete this?')) {
              $.ajax({
                  url: url,
                  success: function (message) {
                    alert(message);
                    window.location.href='index.php?page=crud/index';
                  }
              });
          }
      });

    </script>
  </body>
</html>
