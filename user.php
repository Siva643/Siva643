

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Insert data</title>
    <!-- Bootstrap CSS -->
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
      border:7px solid white;
      
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
    background-color:yellow;
    position:absolute;
    border:1px solid white;
    top:85%;
    left:40%;
    background-color:blue;
    color:white;
    
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
 
  


    </style>

  
  </head>
  <body>

    <center>
  <form class="user" method="post" action="create.php">

  <div class="name">
    <table class="table">
      <tr>
    
  
    <th><label>Name</label></th>
    <th><input class="input1" type="text" name="name" placeholder="Enter your name" Required="" autocomplete="off"></th>
</tr>
    
  </div>
  <div class="email">
    <tr>
    <th><label>Email</label></th>
    <th><input class="input2"type="email" name="email" placeholder="Enter your email" Required="" autocomplete="off"></th>
</tr>
  </div>
  <div class="mobile">
    <tr>
    <th><label>Mobile</label></th>
    <th><input class="input3" type="text" name="mobile" placeholder="Enter your mobile" Required="" autocomplete="off"></th>
</tr>
  </div>
  <div class="password">
    <tr>
    <th><label>Password</label></th>
    <th><input class="input4" type="text"  name="password" placeholder="Enter your password" Required="" autocomplete="off"></th>
</tr>
</table>
  </div>
  
  
  
  <button class="submit"  type="submit">Submit</button>
</form>
  </center>
  </body>
</html>