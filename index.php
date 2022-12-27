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
<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
        <a href="about.html">About</a>
        <a href="trucks.html">Trucks</a>
        <a href="passangerars.html">Passanger Cars</a>
    </div>
</div>
<div>
    <ol>
        <li>Porsche</li>
        <li>BMW</li>
        <li>Mercedes</li>
        <li>Audi</li>
    </ol>
</div>
<div style="display: flex;">
    <div style="flex-grow: 1;">
        <table>
            <tr>
                <th></th>
                <th>V8</th>
                <th>V10</th>
                <th>V12</th>
            </tr>
            <tr>
                <th>Audi</th>
                <td>V8</td>
                <td>R8</td>
                <td>Q7</td>
            </tr>
            <tr>
                <th>BMW</th>
                <td>M5</td>
                <td>S85</td>
                <td>G12 M760LiX</td>
            </tr>
            <tr>
                <th>Mercedes</th>
                <td>AMG E63</td>
                <td>SLR McLaren</td>
                <td>M120</td>
            </tr>
            <tr>
                <th>Porsche</th>
                <td>Cayenne</td>
                <td>Carrera GT</td>
                <td>917</td>
            </tr>
        </table>
    </div>
    <div style="flex-grow: 1;"><a href="https://www.youtube.com/watch?v=KZLygdpg3LU">
            <img src="https://avtoexperts.ru/wp-content/uploads/obSZFQ8Z.jpg" alt="V8" style="width:400px;height:250px;">
        </a>
    </div>
    <div style="flex-grow: 1;"><a href="https://www.youtube.com/watch?v=6hClmLhIeis">
            <img src="https://mirbmw.ru/wp-content/uploads/2020/08/bmw-s85-v10-01.jpg" alt="V10"
                 style="width:400px;height:250px;">
        </a></div>
</div>
<div>
    <a href="https://www.youtube.com/watch?v=nBO7qdrWKSQ">
        <img src="https://carakoom.com/data/wall/787/63148061.jpg" alt="V12" style="width:400px;height:250px;">
    </a>
</div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/ZQvfHyfgBtA" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
<div>
    <?php
    $a = date('d.m.Y H:i:s');
    echo $a;
    ?>
</div>

</body>
</html>