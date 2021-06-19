<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank</title>
</head>
<style>
    body{
        background-color:lavender;
    }
    h1{
        background-color:navy;
        text-align: center;
        color:white;
        border: 2px solid black;
        padding: 20px;
        border-radius:16px;
        box-shadow:4px 4px red;
        text-shadow:2px 2px red;
    }
    .user{
        margin-top: 40px;
        width: 120px;
        margin-left: 750px;
        border: 4px solid navy;
        box-shadow:4px 4px red;
    }
    h3{
        
        text-align: center;
        border-radius: 4px;
        margin-left: 680px;
        margin-right: 680px;
        text-shadow:1px 1px red;
        font-weight:bolder;
    }
    h3:hover{
        cursor: pointer;
    }
    .container{
        display: flex;
        flex-direction: row;
    }
    p{
        padding: 20px;
        margin: auto;

    }
    .transaction{
        font-weight: bold;
        padding: 20px;
        text-align: center;
        font-size: large;
        justify-content: center;
        background-color:navy;
        box-shadow:6px 6px red;
        border-radius:4px;
        
    }
    .transaction p{
        padding-top: 20px;
    }
    .transimage{
        display: block;
        width: 200px;
        padding: 30px;
        background-color:red;
    }
    .transactionhistory{
        font-weight: bold;
        padding: 20px;
        text-align: center;
        font-size: large;
        justify-content: center;
        box-shadow:6px 6px red;
        border-radius:4px;
        background-color:navy;
    }
    .transhistory{
        display: block;
        width: 200px;
        height: 160px;
        padding: 30px;
        background-color:red;
    }
    .nav-link{
        color:white;
        text-decoration:none;
    }
    .nav-item{
        font-weight:bolder;
        list-style-type:none;
        cursor: pointer;
        background-color: navy;
       box-shadow: 4px 4px red;
       border-radius:8px;
       padding:10px;
       padding-right:50px;
       margin-right:1600px;
    }
    .but{
        height:60%;
        color:white;
        border:2px solid navy;
        background-color:navy;
        padding:0px;
        margin-left:100px;
        border-radius:40px;
        box-shadow:2px 2px red;
    }
    .but:hover{
        background-color:black;

    }
    .but-t{
        color:white;
        border:2px solid white;
        background-color:navy;
        box-shadow:4px 4px red;
    }
    .but-t:hover{
        cursor:pointer;
    }
</style>
<body>
    <?php
    include 'navbar.php';
    ?>
    <h1>WELCOME TO SPARKS_BANK</h1>
    <br><br><br><br>
    <img src="https://www.computerhope.com/issues/pictures/users.jpg" alt="" class="user">
    <br><br>
    <a href="user.php"><button class="but">
    <h3>Create a User</h3>
</button></a>
<br><br><br><br>
    <div class="container">
        <p class="transaction">
            <img src="https://miro.medium.com/max/3200/1*l4FAfcRJ58nmIDShIinRzQ.jpeg" alt="" class="transimage">
            <br><br><br><br>
            <a href="transfermoney.php"><button class="but-t">Make a Transaction</button></a>
        </p>

        <p class="transactionhistory">
            <img src="https://cdnblog.etmoney.com/wp-content/uploads/2020/09/Planning-To-Invest-2.jpg" alt="" class="transhistory">
            <br><br><br><br>
            <a href="transactionhistory.php"><button class="but-t">Transaction History</button></a>
        </p>
    </div>
</body>
</html>
© 2021 GitHub, Inc.