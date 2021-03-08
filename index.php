<?php
include("protect.php");
/* ADMIN pass: 1234qwerty */
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    $nombre = $_POST["user"];
    $pass = $_POST["pass"];
    include('database.php');
    $sql = "SELECT * FROM users WHERE user = '$nombre'";
    $do = mysqli_query($link, $sql);
    $result = mysqli_fetch_assoc($do);
    if (password_verify($pass, $result["pass"])) {
        $_SESSION['user_id'] = $result['id'];
        $hora = time();
        $idusuario = $result['id'];
        $sql = "UPDATE `users` SET `last_login` = '$hora' WHERE `usuarios`.`id` = $idusuario";
        mysqli_query($link, $sql);
        header("location: index.php");
    } else {
        echo "Bad Credentials. - Abrahampo1";
        exit;
    }
}
include("database.php");
if (isset($_POST["robloxuserregister"])) {
    $userid = $_POST["robloxuserregister"];
    if (isset($_POST["ok"])) {
        if (isset($_POST["password"])) {
            if (isset($_POST["password_repeat"])) {
                if ($_POST["password"] == $_POST["password_repeat"]) {
                    $password = $_POST["password"];
                    $rbxid = $_POST["rbxid"];
                    if ($userid != $rbxid) {
                        echo "c'mon dude... you can try it better... - Abrahampo1";
                        exit;
                    }
                    $username = $_POST["username"];
                    $hashpass = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users` (`id`, `rbxid`, `user`, `pass`) VALUES (NULL, '$rbxid', '$username', '$hashpass');";
                    if ($do = mysqli_query($link, $sql)) {
                        $_SESSION['user_id'] = mysqli_insert_id($link);
                        header("location: index.php");
                    } else {
                        echo 'Its seems like there are an error amongus... - Abrahampo1';
                        exit;
                    }
                } else {
                    echo "dude, stop trying to break my shit :( - Abrahampo1";
                    exit;
                }
            }
        }
    } else {
        echo 'did you really think that would work? - Abrahampo1';
        exit;
    }
}

$file = "words.txt";
$letras = 15;
$file_arr = array(
    "hostia",
    "catalan",
    "frozono",
    "furias",
    "smile",
    "pirulin",
    "bts",
    "morir",
    "emo",
    "daft punk",
    "rigan",
    "durum",
    "silver",
    "grip",
    "gate",
    "mira",
    "mi",
    "pantalla",
    "comprendo",
    "ovesewalker",
    "ultra",
    "super",
    "lapiz",
    "boligrafo",
    "almendra",
    "archmelacome",
    "flexeo",
    "drip",
    "roguemaballs",
    "vdeviolencia",
    "valencia",
    "pontevedra",
    "tumama",
    "yourmom",
    "ym",
    "free grip",
    "haseldan",
    "rigan",
    "monky shield",
    "casa",
    "flor",
    "mariposa",
    "azul",
    "verde",
    "welcum to dark lineage",
    "mana plse",
    "drop silver",
    "the mine is mine",
    "nerf"
);
$num_lines = count($file_arr);
$last_arr_index = $num_lines - 1;
$rand_text = "";
// random text from a line. The line will be a random number within the indexes of the array
for ($i = 0; $i < $letras; $i++) {
    $rand_index = rand(0, $last_arr_index);
    if ($i == 0) {
        $rand_text .= $file_arr[$rand_index];
    } else {
        $rand_text .= " " . $file_arr[$rand_index];
    }
}
$textorandom = $rand_text;
?>

<style>
    html {
        background-color: #a1978e;
    }

    .wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
        grid-auto-rows: minmax(100px, auto);
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
    }

    .borde {
        border-color: #503e28;
        border-style: double;
    }
</style>
<style>
    .dropbtn {
        background-color: #fad6ad;
        color: black;
        font-size: 16px;
        border: none;
        cursor: pointer;
        display: flex;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #503e28;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fad6ad;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fad6ad;
        margin: auto;
        padding: 20px;
        border-color: #503e28;
        border-style: double;
        width: 40%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .close2 {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close2:hover,
    .close2:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<html>
<meta charset="UTF-8" />

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W7LGVHH');
    </script>
    <!-- End Google Tag Manager -->
    <title>Roguemarket - Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VB7YV12RJQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VB7YV12RJQ');
    </script>
</head>
<!--<a href="https://discord.gg/eUsMqTrbfb"><img src="anuncios/anunciogrips.png" alt="Abrahampo1" class="borde" style="
position: absolute;
top: 50px;
left: 50px;
width: 15%;"></a>
<a href=""><img src="" alt="" class="borde" style="
  position: absolute;
  top: 50px;
  right: 50px;
  width: 15%;"></a>-->
<?php
include("navbar.php");
?>
<br>
<br /><br />

<br />
<footer>
    <p style="text-align: center">
        This page was developed by Abraham (Abrahampo1) member of Frozono.
    </p>
</footer>
<div id="myModal" class="modal borde">
    <div class="modal-content borde">
        <span class="close">&times;</span>
        <div class="center" style="display:inline;">
            <h1>Login</h1>
            <h3>Type your roblox username</h3>
            <form action="" method="post">
                <input style="width: 100%;" type="text" name="user" required><br>
                <h4>Type your password (not your roblox password)</h4>
                <input type="password" style="width: 100%;" name="pass" required><br><br>
                <button type="submit" style="margin-left: 10px; font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px">Login</button>
                <button id="register" type="button" style="font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px">Register</button>
            </form>
        </div>

    </div>

</div>
<div id="registermodal" class="modal borde">
    <div class="modal-content borde">
        <span class="close2">&times;</span>
        <div class="center" style="display:inline;">
            <h1>Register</h1>
            <h3>Put this on your roblox description to verify your user:</h3>
            <?php

            echo '<div id="" class="borde" style="padding: 10px; background-color: white">' . $textorandom . '</div>';
            echo '<input type="hidden" id="random_words" value="' . $textorandom . '">';

            ?>

            <h3>Paste your roblox profile ID</h3>
            <form action="" method="POST">
                <input style="width: 100%;" autocomplete="off" onchange="loaddata()" type="number" id="robloxuserregister" name="robloxuserregister">
                <div id="display_info">
                    <input type="hidden" id="descripcion_cuenta" value="">
                </div>
                <div id="finish_register" style="display: none;">
                    <br><br>
                    <hr>
                    <label for="password">Password</label><br>
                    <input type="password" style="width: 100%;" id="password" name="password"><br><br>
                    <label for="password_repeat">Repeat Password</label><br>
                    <input type="password" onkeyup="verify_pass()" style="width: 100%;" id="password_repeat" name="password_repeat"><br>
                </div>
                <div class="" style="text-align:center; top: 53px; left: 20px; display:flex; margin-top: 40px">
                    <button id="" onclick="loaddata()" type="button" style="font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px">Refresh</button>
                    <button id="btnregister" type="submit" disabled style="margin-left: 10px; font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px">Register</button>
                </div>
            </form>
        </div>

    </div>

</div>
</html>