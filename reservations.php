<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" href="images\icon.png" type="image/gif" />
    <title> Reservations</title>
    <link rel="stylesheet" href="css\style.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="http://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>
<body>
<section id="reservations">
    <div class="reserve-title"> Reserve Your Table Today</div>
    <div class="reserve-form">
    <form action="">
        <table class ="reserve-tbl">
            <tr>
                <td><label for="table">Table Type</label></td>
                <td><select name="user-type" id="reserve-drop-down">
                    <option value="Couple">Couple Table</option>
                    <option value="Family">Family Table</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="date">Select Date</label> </td>
                <td><input type="date" id="date" name="date"> </td>
            </tr>
            <tr>
                <td><label for="customername">Customer Name</label></td>  
                <td><input type="text" id="cname" name="cname"> </td>
            </tr>
            <tr>
                <td><label for="contact">Contact Number</label></td>  
                <td><input type="text" id="contact-no" name="contact"> </td>
            </tr>
        </table>
        
    </form>
    </div>


</section>


</body>
</html>