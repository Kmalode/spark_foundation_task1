<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <title>  sparks banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <ul class="nav nav-tabs">
  <li class="active"><a href="index.php" ><h4>Home</h4></a></li>
  <li><a href="createuser.php"><h4>Create User</h4></a></li>
  <li><a href="transfermoney.php"><h4>Transfer Money</h4></a></li>
  <li><a href="transactionhistory.php"><h4>Transaction History</h4></a></li>
</ul>


  
      <div class="container-fluid">
      <!-- Introduction section -->
      
      <!-- Activity section -->

            <div class="row activity text-center" style="margin-top: 50px;">
            <div class="col-md act text-center">
              
            <div class="card rounded" style="width: 50rem;margin-left: 200px;">
  <img class="card-img-top" src="mt.png" style="height: 400px" alt="Card image cap">
  <div class="card-body">
    <a href="transfermoney.php"><button type="button" class="btn btn-primary"><h4>Make Transaction</h4></button></a>
  </div>
</div>
                  
                  
            </div>
                  <div class="col-md act" style="align: center">
                  <div class="card" style="width: 50rem; margin-left: 200px;">
                    <img class="card-img-top" src="viewTransaction.jpg" style="height: 400px" alt="Card image cap">
                    <div class="card-body">
                      <a href="transactionhistory.php"><button type="button" class="btn btn-primary"><h4>Transaction History</h4></button></a>
                    </div>
            </div>
      </div>
       </body>
</html>