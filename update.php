<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    
    
    
    </style>

</head>
<body>
  


<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update crud set id='$id',name='$name',email='$email',mobile='$mobile',password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<h1>Updated successfully<h1>";
        //header('location:display.php');

    }else{
        die(mysqli_error($con));

    }
}

?>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Update</title>
    
    <style>
    body{
      background-color:blue;
      
    }
    .user{
      font-size:25px;
      background-color:blue;
      
      padding:0px 40px 80px;

      position:absolute;
      top:10%;
      left:20%;
      border:5px solid white;
      
      border-radius:35px;

    }
    .name{
      padding:20px;
      color:yellow;
    }
    .email{
      padding:20px;
    }

    .mobile{
      padding:15px;
    }

    .password{
      padding:10px;
    }
  .submit{
    font-size:25px;
    border-radius:10px;
    background-color:blue;
    color:white;
    border:1px solid white;

    position:absolute;
    top:85%;
    left:40%;
    curser:pointer;
    
  }
  .table, tr, th{
    padding:15px;
    
    
  }
  .input1{
    height: 20px;
    width:200px;
    font-size:15px;
    color:black;
    
  }
  .input2{
    height: 20px;
    width:200px;
    font-size:15px;
    color:black;
    
  }
  .input3{
    height: 20px;
    width:200px;
    font-size:15px;
    color:black;
    
  }
  .input4{
    height: 20px;
    width:200px;
    font-size:15px;
    color:black;
    
  }
  
  .button  {
        text-decoration:none;
        font-size:40px;
        position:absolute;
        top:45%;
        left:71%;
        background:blue;
        color:white;
        border-radius:20px;
        border:2px solid white;
        
      }
      a{
        color:white;
        text-decoration:none;
      
      }
      .butto {
        text-decoration:none;
        font-size:40px;
        position:absolute;
        top:60%;
        left:69%;
        background:blue;
        color:white;
        border-radius:20px;
        border:2px solid white;
        
      }
      .link{
        color:white;
        text-decoration:none;

      }
      
  



    </style>

  
  </head>
  <body>
    
  <button class="button"><a href="user.php">Register here</a></button>

  
    
  <button class="butto"><a class="link"href="display.php">Display Records</a></button>
  <form class="user" method="post" action="">
  <div class="name">
    <table>
      <tr>

    <th><label>Name</label></th>
    <th><input class="input1" type="text"  name="name" aria-describedby="emailHelp" placeholder="Enter your name" autocomplete="off" value=<?php echo $name;?>></th>
</tr>
  </div>
  <div class="email">
    <tr>
    <th><label>Email</label></th>
    <th><input class="input2" type="email" name="email" placeholder="Enter your email" autocomplete="off" value=<?php echo $email;?>></th>
</tr>
  </div>
  <div class="mobile">
    <tr>
    <th><label>Mobile</label></th>
    <th><input class="input3" type="text" name="mobile" placeholder="Enter your mobile" autocomplete="off" value=<?php echo $mobile;?>></th>
</tr>
  </div>
  <div class="password">
    <tr>
    <th><label>Password</label></th>
    <th><input class="input4" type="text" name="password" placeholder="Enter your password" autocomplete="off" value=<?php echo $password;?>></th>
</tr>
  </div>
</table>
  
  <button class="submit" type="submit" name="submit">update</button>
</form>
  </body>
</html>