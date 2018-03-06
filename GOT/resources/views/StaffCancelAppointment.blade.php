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
            margin-left: 100px;
            margin-right: 50px;
        }

        .Main-title{
            font-size: 30px;
            font-style: normal;
            color: black;
            margin-left: 690px;
            font-weight: bold;
        }

        .SecondTitle{

            font-size: 20px;
            font-style: normal;
            color: black;
            margin-left: 690px;
            font-weight: bold;
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

        .btn-success{
            display: block;
            width: 80px;
            margin-left: 720px;
        }

        .StaffTable,th,td{

            color: black;
            font-size: 16px;
            margin-left: 320px;
            border: 3px solid black;
            padding: 7px;
            background-color: #71dd8a;
            text-align: center;
            margin-top: 50px;

        }

    </style>

</head>
<body style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Flower_field_01.jpg/1280px-Flower_field_01.jpg); background-size: 100%;">


<form  name="loginForm">

    <img src="C:\Users\rikim\Desktop\overSurgery\Ayurvedic-Doctor-Logo.jpg.png" align="center"  alt="Over-surgery-Logo" width="160" height="160">

    <h2 class="Main-title" > Over Surgery</h2>
    <h2 class="SecondTitle" > Cancel Appointment</h2>
    <br>


    <p class="PatientSurname">Patient Surname: <input type="text" id="PatientSurname"></p>
    <br>

    <p class="PatientLastname">Patient Lastname: <input type="text" id="PatientLastname"></p>
    <br>
    <div ><button type="button"  class="btn btn-success">OK</button></div>
    <br>


    <table class="StaffTable">
        <tr>
            <th width="160">Surname</th>
            <th width="160">Lastname</th>
            <th width="160">Date</th>
            <th width="160">Time</th>
            <th width="160">GP or Nurse</th>
            <th width="160">Canceled</th>

        </tr>

        <tr>
            <td height="145"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>









    </table>





</form>


</body>
</html>