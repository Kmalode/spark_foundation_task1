<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="createuser.css">
</head>

<body style="background-color :  #ffffff">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,gender,balance) values('{$name}','{$email}','{$gender}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User has been created!');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>
<ul class="nav nav-tabs">
  <li ><a href="index.php" ><h4>Home</h4></a></li>
  <li class="active"><a href="createuser.php"><h4>Create User</h4></a></li>
  <li><a href="transfermoney.php"><h4>Transfer Money</h4></a></li>
  <li><a href="transactionhistory.php"><h4>Transaction History</h4></a></li>
</ul>


        <h2 class="text-center pt-4">Create a User</h2>
        <br>

  <div class="background" style="background-color: #ffffff;">
  <div class="container" style="background-color: #ffffff;">
    <div class="screen" style="background-color: #ffffff;">
      
      <div class="screen-body" style="color: #ffffff;">
        <div class="screen-body-item left" >
          <img class="img-fluid" src="user1.jpg" style="border: none; border-radius: 10%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="FULLNAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <select name="gender" class="app-form-control" type="text" required>
                <option selected>SELECT</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                           <option value="Female">other</option>
            

              </select>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="INITIAL BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" style="color:#4d865a;" type="submit" value="CREATE USER" name="submit"></input>
              <input class="app-form-button" style="color:#dc3545;" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center mt-5 py-2">
            
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>