<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>EDP Dashboard</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
   <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>

   <?php include_once("./templates\header.php") ?>
   

   <br></br>
   <style>
         p {
           background-image: url('img_girl.jpg');
         }
</style>
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="card mx-auto">
              <img class="card-img-top mx-auto" style="width:60%;" src="./publichtml/user.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><i class="fa fa-address-card">&nbsp; </i>Profile Info</h4>
                <p class="card-text"><i class="fa fa-user">&nbsp;</i>Ricardo Ignacio</p>
                <p class="card-text"><i class="fa fa-gears">&nbsp;</i>Admin</p>
                <p class="card-text"><i class="fa fa-calendar-days">&nbsp;</i>Last Login : xxxx-xx-xx</p>
                <a href="#" class="btn btn-primary"><i class="fa fa-user-pen">&nbsp;</i>Edit Profile</a>
              </div>
            </div>
         </div>
         <div class="col-md-8">
            <div class="jumbotron" style="width:100%;height:100%;">
               <h1>Welcome Admin,</h1>
               <div class="row">
                  <div class="col-sm-6">
                     <iframe src="https://free.timeanddate.com/clock/i8thnp9k/n145/szw210/szh210/hocddd/hbw0/hfc000/cf100/hgr0/fav0/fiv0/mqcfff/mql15/mqw8/mqd100/mhcfff/mhl15/mhw4/mhd100/mmv0/hhcff9/hmcff9" frameborder="0" width="210" height="210"></iframe>

                  </div>
                  <div class="col-sm-6">
                     <div class="card">
                        <div class="card-body">
                          <h4 class="card-title"><i class="fa solid fa-box-archive">&nbsp; </i>Storage</h4>
                          <p class="card-text">Here you can Add/Delete/Modify Items in Storage</p>
                          <a href="#" class="btn btn-primary"><i class="fa solid fa-magnifying-glass">&nbsp;</i>See Storage</a>
                        </div>
                      </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <p></p>
   <p></p>
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="card">
                  <div class="card-body">
                  <h4 class="card-title"><i class="fa fa-list-check">&nbsp; </i>Item Categories</h4>
                  <p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
                  <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary"><i class="fa fa-folder-plus">&nbsp;</i>Add</a>
                  <a href="#" class="btn btn-primary"><i class="fa fa-pencil">&nbsp;</i>Manage</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
                  <div class="card-body">
                  <h4 class="card-title"><i class="fa duotone fa-users">&nbsp; </i>Users</h4>
                  <p class="card-text">Here you can manage users and you add new users</p>
                  <a href="#" data-toggle="modal" data-target="#form_users" class="btn btn-primary"><i class="fa fa-folder-plus">&nbsp;</i>Add</a>
                  <a href="#" class="btn btn-primary"><i class="fa fa-pencil">&nbsp;</i>Manage</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
                  <div class="card-body">
                  <h4 class="card-title"><i class="fa fa-folder-open">&nbsp; </i>Weekly Reports</h4>
                  <p class="card-text">Here you can manage weekly reports of storage</p>
                  <a href="#" data-toggle="#" data-target="#" class="btn btn-primary"><i class="fa fa-folder-plus">&nbsp;</i>Add</a>
                  <a href="#" class="btn btn-primary"><i class="fa fa-pencil">&nbsp;</i>Manage</a>
               </div>

          
         <?php 
         //Category Form

         include_once("./templates/category.php");

         ?>
         <?php 
         //Users Form

         include_once("./templates/users.php");

         ?>
</body>
</html>