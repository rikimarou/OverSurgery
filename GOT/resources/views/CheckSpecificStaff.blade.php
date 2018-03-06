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


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();

        } );
    </script>



    <style type="text/css">

        img{
            display: block;
            margin-left: auto;
            margin-right: auto;

        }




        .Datepicker{

            margin-left: 600px;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

         .text-center{

             margin-right:30px;
         }




        .GPorNurse{

            margin-left: 467px;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        .btn-success{
            display: block;
            width: 80px;
            margin-left: 730px;
        }
        .textBox{
            margin-left: 400px;
            width: 700px;
            height: 150px;
            margin-top: 45px;
        }
        .dropdownB{

            font-size: 20px;
            width: 243px;
            height: 35px;
        }

    </style>
</head>

<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Apple_priapple_tree_flower.JPG/1280px-Apple_priapple_tree_flower.JPG); background-size: 100%;">

<form  name="RegistrationForm">

    <img src="C:\Users\rikim\Desktop\overSurgery\Ayurvedic-Doctor-Logo.jpg.png" align="middle"  alt="Over-surgery-Logo" width="100" height="100" >

    <h2 class="text-center" style="color:black; font-style:italic"> Over Surgery</h2>
    <h3  class="text-center" style="color:black; font-style:italic">Check GP or Nurse avalaibility</h3>
    <br>


    <p class="GPorNurse">GP or Nurse name:
    <select class="dropdownB">
        <option></option>
        <option>Dr. Marc De LaCruz</option>
        <option>Dr. Anthony Watson</option>
        <option>Jessica Thomson</option>
        <option>Rose Taylor</option>
        <option>Paul Cole</option>
    </select>
    </p>

    <div>
    <p class="Datepicker">Date: <input type="text" id="datepicker"></p>

    </div>

    <div ><button type="button"  class="btn btn-success">OK</button></div>
<br>

    <input type="text" class="textBox" >
</form>

</body>

</html>