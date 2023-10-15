<!DOCTYPE html>
<html lang="zxx">

<head>

    <?php require "../includes/header.php"; ?>
    <?php require "../includes/css.php"; ?>
    <?php require "../../config/config.php"; ?>

</head>

<?php
/* if (isset($_POST['submit'])) {
    if (empty($_POST['correo']) or empty($_POST['nombre']) or empty($_POST['contrasena'])) {

        echo "<script> alert('alguno de los campos estan vacios')</script>";
    } else {

        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);


        $insert = $conn->prepare("INSERT INTO usuarios (correo, nombre, contrasena) VALUES (:correo, :nombre, :contrasena)");

        $insert->execute([
            ":correo" => $correo,
            ":nombre" => $nombre,
            ":contrasena" => $contrasena
        ]);

        header("location: ../login/login.php");

    }

} */
?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="../menu/index.php">
                            <img src="../../img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="../menu/index.php">Homepage</a></li>
                                <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="../../img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Sign Up</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login__form">
                        <h3>Sign Up</h3>
                        <!-- FORMULAAARIO -->
                        <form action="signup.php" method="POST" name="nuevo_registro" id="nuevo_registro"
                            enctype="multipart/form-data" action="procesar.php" onsubmit="guardar(); return false;">

                            <div class="input__item ">
                                <input name="correo" id="correo" class="col-md-12" type="text"
                                    placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>

                            <div class="input__item">
                                <input name="nombre" id="nombre" type="text" placeholder="Your Name">
                                <span class="icon_profile"></span>
                            </div>

                            <div class="input__item">
                                <input name="contrasena" id="contrasena" type="text" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>

                            <button type="submit" name="submit" class="site-btn">Registrarse</button>

                        </form>
                        <!-- FORMULAAARIO -->
                        <h5>Already have an account? <a href="../login/login.php">Log In!</a></h5>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Signup Section End -->
    <!-- Footer Section Begin -->
    <?php require "../includes/footer.php"; ?>

    <!-- Js Plugins -->
    <?php require "../includes/js_scripts.php"; ?>

    <!-- Search model end -->

    <!---------------------------------------------------------------------------------------------------------------------------------------->
    <!--JS------------------------------------------------------------------------------------------------------------------------------------>

    <script src="registro.js"></script>

    <!---------------------------------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------------->

</body>

</html>