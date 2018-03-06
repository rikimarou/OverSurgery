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


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>


    <script>
        $( function() {
            $( "#timepicker" ).timepicker();

        } );
    </script>



    <style type="text/css">

        img{
            display: block;
            margin-left: 90px;
            margin-right: 60px;
        }

        .Main-title{
            font-size: 30px;
            font-style: normal;
            color: black;
            margin-left: 690px;
            font-weight: bold;
        }


        .Datepicker{

            margin-left: 595px;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }
        .timepicker{
            margin-left: 595px;
            font-size: 20px;
            font-weight: bold;
            color: black;

        }

           .PatientSurname{
               margin-left: 480px;
               font-size: 20px;
               font-weight: bold;
               color: black;

           }

        .PatientLastname{
            margin-left: 475px;
            font-size: 20px;
            font-weight: bold;
            color: black;

           }

        .GPorNurse{

            margin-left: 465px;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }
        .btn-success{
            display: block;
            width: 80px;
            margin-left: 720px;
        }

        .dropdownB{

            font-size: 20px;
            width: 243px;
            height: 35px;
        }
        .OpeningHours{

            margin-left: 510px;
            color: red;
            font-weight: bold;
            font-size: 22px;
            line-height: 135px;
        }
.SecondTitle{


    font-size: 20px;
    font-style: normal;
    color: black;
    margin-left: 690px;
    font-weight: bold;
}

    </style>

</head>
<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Colorful_spring_garden.jpg/1280px-Colorful_spring_garden.jpg); background-size: 100%;">


<form  name="loginForm">

    <img src="C:\Users\rikim\Desktop\overSurgery\Ayurvedic-Doctor-Logo.jpg.png" align="center"  alt="Over-surgery-Logo" width="160" height="160">

    <h2 class="Main-title" > Over Surgery</h2>
    <h2 class="SecondTitle" > Book Appointment</h2>
     <br>

    <p class="PatientSurname">Patient Surname: <input type="text" id="PatientSurname"></p>
    <br>
    <p class="PatientLastname">Patient Lastname: <input type="text" id="PatientLastname"></p>
    <br>

    <p class="Datepicker">Date: <input type="text" id="datepicker"></p>
    <br>
    <p class="timepicker">Time: <input type="text" id="timepicker"></p>
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
    <br>
    <div ><button type="button"  class="btn btn-success">OK</button></div>
    <p class="OpeningHours">Surgery open from 9am to 5pm Monday to Friday</p>


</form>


</body>
</html>