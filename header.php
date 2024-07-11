<!DOCTYPE html>
<html>
<head>
    <title>heBrews Coffee Shop</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div id="branding">
                <a href = "index.php"><h1>heBrews</h1></a>
            </div>
            <nav>
                <!-- Sidenav button -->
                <span class="sidenav-btn" onclick="openNav()">&#9776;</span>
            </nav>
        </div>
    </div>

    <!-- Sidenav menu -->
    <div id="sidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="#menu">Menu</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="crud.php">Admin Page</a>
    </div>

    <script>
        function openNav() {
            document.getElementById("sidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("sidenav").style.width = "0";
        }
    </script>
</body>
</html>
