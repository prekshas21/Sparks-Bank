<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<style>
  body{
    background-color:lavender;
  }
  h2{
    color: white;
    border:4px solid navy;
    background-color:navy;
    font-weight:bold;
    margin-left:400px;
    margin-right:400px;
    padding:20px;
    border-radius:4px;
    box-shadow:4px 4px red;
  }
  .box{
    text-align:center;
    align-items:center;
  }
  .app-form-control{
    border:2px solid black;
  }
  .app-form-button{

    color:white;
    padding-left:20px;
    padding-right:20px;
    background-color: navy;
    font-style:italic;
    text-shadow:2px 2px grey;
    font-weight:bold;
    box-shadow:2px 2px red;
  }
  .app-form-button:hover{
    height:20%;
    width:10%;
    color:white;
    cursor: pointer;
    font-weight:bold;
  }
</style>
<body>
<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $id=$_POST['id'];
    $sql="INSERT INTO  `banking`.`user` (id,name,email,balance) values( '{$id}', '{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> 
               alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-0">Create a User</h2>
        <br>

  
      
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      
      
        <div class="box">
        <div class="screen-body-item">
          <form class="app-form" method="post">
          <div class="app-form-group">
              <input class="app-form-control" placeholder="ID" type="number" name="id" required>
            </div>
            <br>
            <br>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <br>
            <br>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <br>
            <br>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="PROCEED" name="submit"></input>
              </div>
          </form>
        </div>
        </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>