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
                <h1>heBrews</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <!-- Sidenav button -->
                <span class="sidenav-btn" onclick="openNav()">&#9776; Menu</span>
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
