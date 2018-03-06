<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ngStorage/0.3.6/ngStorage.min.js"></script>
    <link data-require="bootstrap-css@3.3.7" data-semver="3.3.7" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">

    <style type="text/css">

        img{
            display: block;
            margin-left: 85px;
            margin-right: 60px;
        }

        .btn-primary{
          display: block;
          margin-left: 560px;
          width: 140px;

         }

        .btn-success{
         display: block;
         margin-right: 50px;
         width: 140px;
         }

    </style>

</head>
   <body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Viola_tricolor_pansy_flower_close_up.jpg/1280px-Viola_tricolor_pansy_flower_close_up.jpg); background-size: 100%;">


       <form  name="loginForm">

           <img src="C:\Users\rikim\Desktop\overSurgery\Ayurvedic-Doctor-Logo.jpg.png" align="center"  alt="Over-surgery-Logo" width="160" height="160">

           <h2 class="text-center" style="color:darkgreen; font-style:italic"> Over Surgery</h2>
           <br>

           <div class="form-group"><input type="username" class="form-control" id="Username" placeholder="Username" name="Username"></div> <br>

           <div class="form-group"><input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd" required pattern="([a-zA-Z0-9]){4,16}"></div>
           <br>

           <div class="row">
             <div class="col col-md-6"><a type="button"  class="btn btn-primary"  a href="Registration"  >Register</a> </div>
              <div class="col col-md-6">   <a type="button"  class="btn btn-success" a href="PatientDashboard">Login</a>   </div>
               </div>

              <div class="col col-md-6">   <a type="button"  class="Staffbutton" a href="StaffDashboard">staffDashboard</a>   </div>

       </form>


   </body>
</html>