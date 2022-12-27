<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <title>McQueen</title>
</head>
<body>
<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
<div class="topnav">
    <a class="foncolor" href="index.php">Type Cars</a>
    <a href="about.html">About</a>
    <a href="trucks.html">Trucks</a>
    <a href="passangerars.html">Passanger Cars</a>
    <a href="carsbrand.html">Cars Brand</a>
    <a href="registretion.php">Registration</a>
</div>
<p><h1>Реєстрація</h1></p>
<form method="post" action="action_page.php">
    <label for="fname">Ім'я:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Фамілія:</label><br>
    <input type="text" id="lname" name="lname"><br><br>
    <label for="datemin">Дата народження:</label>
    <input type="date" id="datemin" name="datemin"><br><br>
    <label for="email">Пошта:</label><br>
    <input type="text" id="email" name="email"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>