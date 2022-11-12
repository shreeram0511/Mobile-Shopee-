<?php

include 'config.php';


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
   --border:2px solid var(--black);
   
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
   
}

*::-webkit-scrollbar{
   width: 10px;
   height: 5px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

body{
   background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);

}

.message{
   position: sticky;
   top:0; left:0; right:0;
   padding:15px 10px;
   background-color: var(--white);
   text-align: center;
   z-index: 1000;
   box-shadow: var(--box-shadow);
   color:var(--black);
   font-size: 20px;
   text-transform: capitalize;
   cursor: pointer;
}

.btn,
.delete-btn,
.option-btn{
   display: inline-block;
   padding:10px 30px;
   cursor: pointer;
   font-size: 18px;
   color:var(--white);
   border-radius: 5px;
   text-transform: capitalize;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--black);
   color:#fff;
}

.btn{
   background-color: #f39c12;
   color:black;
   margin-top: 10px;
}

.delete-btn{
   background-color: var(--red);
}

.option-btn{
   background-color: var(--orange);
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 70px;
}

.form-container form{
   width: 500px;
   border-radius: 5px;
   border:var(--border);
   padding:20px;
   text-align: center;
   background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);


}

.form-container form h3{
   font-size: 30px;
   margin-bottom: 10px;
   text-transform: uppercase;
   color:var(--black);
}

.form-container form .box{
   width: 100%;
   border-radius: 5px;
   border:var(--border);
   padding:12px 14px;
   font-size: 18px;
   margin:10px 0;
}

.form-container form p{
   margin-top: 20px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.container{
   padding:0 20px;
   margin:0 auto;
   max-width: 1200px;
   padding-bottom: 70px;
}

.container .heading{
   text-align: center;
   margin-bottom: 20px;
   font-size: 40px;
   text-transform: uppercase;
   color:var(--black);
}

.container .user-profile{
   padding:20px;
   text-align: center;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: 5px;
   margin:20px auto;
   max-width: 500px;
}



@media (max-width:450px){
   .container .heading{
      font-size: 30px;
   }
   .container .products .box-container .box img{
      height: 200px;
   }
} 

   </style> <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#3498db;
   --red:#e74c3c;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-bg:#eee;
   --box-shadow:0 5px 10px rgba(0,0,0,.1);
   --border:2px solid var(--black);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

*::-webkit-scrollbar{
   width: 10px;
   height: 5px;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

body{
   background-color: var(--light-bg);
}

.message{
   position: sticky;
   top:0; left:0; right:0;
   padding:15px 10px;
   background-color: var(--white);
   text-align: center;
   z-index: 1000;
   box-shadow: var(--box-shadow);
   color:var(--black);
   font-size: 20px;
   text-transform: capitalize;
   cursor: pointer;
}

.btn,
.delete-btn,
.option-btn{
   display: inline-block;
   padding:10px 30px;
   cursor: pointer;
   font-size: 18px;
   color:var(--white);
   border-radius: 5px;
   text-transform: capitalize;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--black);
}

.btn{
   background-color:#f39c12 ;
   color: #333;
   margin-top: 10px;
}

.delete-btn{
   background-color: var(--red);
}

.option-btn{
   background-color: var(--orange);
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 70px;
}

.form-container form{
   width: 500px;
   border-radius: 5px;
   border:var(--border);
   padding:20px;
   text-align: center;
   background-color: var(--white);
}

.form-container form h3{
   font-size: 30px;
   margin-bottom: 10px;
   text-transform: uppercase;
   color:var(--black);
}

.form-container form .box{
   width: 100%;
   border-radius: 5px;
   border:var(--border);
   padding:12px 14px;
   font-size: 18px;
   margin:10px 0;
}

.form-container form p{
   margin-top: 20px;
   font-size: 20px;
   color:var(--black);
}

.form-container form p a{
   color:var(--red);
}

.form-container form p a:hover{
   text-decoration: underline;
}

.container{
   padding:0 20px;
   margin:0 auto;
   max-width: 1200px;
   padding-bottom: 70px;
}

.container .heading{
   text-align: center;
   margin-bottom: 20px;
   font-size: 40px;
   text-transform: uppercase;
   color:var(--black);
}

.container .user-profile{
   padding:20px;
   text-align: center;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: 5px;
   margin:20px auto;
   max-width: 500px;
}

.container .user-profile p{
   margin-bottom: 10px;
   font-size: 25px;
   color:var(--black);
}

.container .user-profile p span{
   color:var(--red);
}

.container .user-profile .flex{
   display: flex;
   justify-content: center;
   flex-wrap: wrap;
   gap:10px;
   align-items: flex-end;
}

.container .products .box-container{
   display: flex;
   flex-wrap: wrap;
   gap:15px;
   justify-content: center;
}

.container .products .box-container .box{
   text-align: center;
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   border:var(--border);
   position: relative;
   padding:20px;
   background-color: var(--white);
   width: 350px;
}

.container .products .box-container .box img{
   height: 250px;
}

.container .products .box-container .box .name{
   font-size: 20px;
   color:var(--black);
   padding:5px 0;
}

.container .products .box-container .box .price{
   position: absolute;
   top:10px; left:10px;
   padding:5px 10px;
   border-radius: 5px;
   background-color: var(--orange);
   color:var(--white);
   font-size: 25px;
}

.container .products .box-container .box input[type="number"]{
   margin:10px 0;
   width: 100%;
   border:var(--border);
   border-radius: 5px;
   font-size: 20px;
   color:var(--black);
   padding:12px 14px
}

.container .shopping-cart{
   padding:20px 0;
}

.container .shopping-cart table{
   width: 100%;
   text-align: center;
   border:var(--border);
   border-radius: 5px;
   box-shadow: var(--box-shadow);
   background-color: var(--white);
}

.container .shopping-cart table thead{
   background-color: var(--black);
}

.container .shopping-cart table thead th{
   padding:10px;
   color:var(--white);
   text-transform: capitalize;
   font-size: 20px;
}

.container .shopping-cart table .table-bottom{
   background-color: var(--light-bg);
}

.container .shopping-cart table tr td{
   padding:10px;
   font-size: 20px;
   color:var(--black);
}

.container .shopping-cart table tr td:nth-child(1){
   padding:0;
}

.container .shopping-cart table tr td input[type="number"]{
   width: 80px;
   border:var(--border);
   padding:12px 14px;
   font-size: 20px;
   color:var(--black);
}

.container .shopping-cart .cart-btn{
   margin-top: 10px;
   text-align: center;
}

.container .shopping-cart .disabled{
   pointer-events: none;
   background-color: var(--red);
   opacity: .5;
   user-select: none;
}


@media (max-width:1200px){
   .container .shopping-cart{
      overflow-x: scroll;
   }

   .container .shopping-cart table{
      width: 1200px;
   }
}

@media (max-width:450px){
   .container .heading{
      font-size: 30px;
   }
   .container .products .box-container .box img{
      height: 200px;
   }
} 
   </style>
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Register Now</h3>
      <input type="text" name="name" required placeholder="Enter username" class="box">
      <input type="email" name="email" required placeholder="Enter email" class="box">
      <input type="password" name="password" required placeholder="Enter password" class="box">
      <input type="password" name="cpassword" required placeholder="Confirm password" class="box">
      <input type="submit" name="submit" class="btn" value="register now">
      <p>Already have an Account? <a href="login.php">Login Now!</a></p>
   </form>

</div>

</body>
</html>