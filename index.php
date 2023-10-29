<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>EDP Inventory System</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
   <script type="text/javascript" src="./javascript/main.js"></script>
</head>
<body>

   <?php include_once("./templates\header.php") ?>
   

   <br></br>

   <div class="container">
      <div class="card mx-auto" style="width: 20rem;">
      <img class="card-img-top mx-auto" style="width: 60%;" src="./publichtml/login.png" alt="Login Icon">

        <form>
            <div class="form-group">
            <label for="exampleInputEmail1"><i class="fa-solid fa-user">&nbsp;</i>Username</label>
             <input type="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
            <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1"><i class="fa-solid fa-key">&nbsp;</i>Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-arrow-right">&nbsp;</i>Login</button>
            <span><a href="register.php">Register</a></span>
            <br></br>
            <span><a href="#">Forget Password?</a></span>

         </form>
         </div>
         
      </div>
      
   </div>

   

</body>
</html>

