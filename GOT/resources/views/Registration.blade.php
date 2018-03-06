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
              margin-left: auto;
              margin-right: auto;
          }

          .btn-success {
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 100px;
          }

      </style>
</head>

<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Apple_priapple_tree_flower.JPG/1280px-Apple_priapple_tree_flower.JPG); background-size: 100%;">

        <form  name="RegistrationForm">

           <img src="C:\Users\rikim\Desktop\overSurgery\Ayurvedic-Doctor-Logo.jpg.png" align="middle"  alt="Over-surgery-Logo" width="110" height="110" >

            <h2 class="text-center" style="color:black; font-style:italic"> Over Surgery</h2>
             <h3  class="text-center" style="color:black; font-style:italic">Registration</h3>


            <div class="form-group"><input type="Title" class="form-control" id="Title" placeholder="Title" name="Tile"></div>
              <div class="form-group"><input type="Surname" class="form-control" id="Surname" placeholder="Surname" name="Surname" ></div>
               <div class="form-group"><input type="Last Name" class="form-control" id="last name" placeholder="Last Name" name="Last Name"></div>
                <div class="form-group"><input type="Date of birth" class="form-control" id="DOB" placeholder="Date of birth" name="Date of birth" ></div>
                 <div class="form-group"><input type="Contact" class="form-control" id="Contact" placeholder="Contact number" name="Contact"></div>
               <div class="form-group"><input type="Username" class="form-control" id="Username" placeholder="Username" name="Username" ></div>
             <div class="form-group"><input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd" required pattern="([a-zA-Z0-9]){4,16}"></div>


            <a type="button"  class="btn btn-success"  a href="home" >OK</a>



         </form>

</body>
</html>