<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>display</title>
    <style>
      body{
        background-color:blue;
      }
      .table, thead, tr, td, tbody {
        border:2px solid black;
        border-collapse:collapse;
        padding:40px;
        font-size:30px;
        background-color:yellow;
       
      }
      button  {
        text-decoration:none;
        font-size:20px;
           
        background:blue;
        color:white;
        border-radius:10px;
        border:2px solid white;
        
      }
      a{
        color:white;
        text-decoration:none;
      
      }
      .center{
        position:absolute;
        top:10%;
        left:3%;
      }
      </style>
    
</head>
<body>
    <div class="container">
    

        <button><a href="user.php">Add user</a></button>
        <center class="center">
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from crud";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            echo '<tr>
            <td>' .$id. '</td>
           
            <td>' .$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button><a href="update.php?updateid=' .$id. '">Update</a></button>
            <button><a href="delete.php?deleteid=' .$id. '">Delete</a></button>
            </td>
        
            </tr>';
        }
        
     }
     
 
?>
   
    </tbody> 
    </table>
    </center>
</body>
</html>