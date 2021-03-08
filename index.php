<?php
include("database.php");
if (isset($_POST["robloxuserregister"]))
{
    $userid = $_POST["robloxuserregister"];
    if(isset($_POST["ok"]))
    {
        if(isset($_POST["password"]))
        {
            if(isset($_POST["password_repeat"]))
            {
                if($_POST["password"] == $_POST["password_repeat"])
                {
                    $password = $_POST["password"];
                    $rbxid = $_POST["rbxid"];
                    if($userid != $rbxid)
                    {
                        echo "c'mon dude... you can try it better... - Abrahampo1";
                        exit;
                    }
                    $username = $_POST["username"];
                    $hashpass = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `users` (`id`, `rbxid`, `user`, `pass`) VALUES (NULL, '$rbxid', '$username', '$hashpass');";
                    if(mysqli_query($link, $sql))
                    {
                        header("location: index.php");
                    }else
                    {
                        echo 'Its seems like there are an error amongus... - Abrahampo1';
                        exit;
                    }
                }else
                {
                    echo "dude, stop trying to break my shit :( - Abrahampo1";
                    exit;
                }
            }
        }
    }else
    {
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
<nav>
    <div style="background-color:#fad6ad; border-radius: 10px; display:ruby">
        <div style="padding: 10px;" class="borde">
            <h1 style="text-align: center; margin-top: 10px;" style="font-family: 'EB Garamond', serif; ">RogueMarket</h1>
            <div class="dropdown borde" style="position: absolute; text-align: right; top: 20px; right: 20px; display:flex">
                <button onclick="myFunction()" class="dropbtn">

                    <h3 style="margin: 10px; margin-right: 50px">Shawty like a melody</h3>
                    <img src="https://i.imgur.com/QnDBR9p.png" alt="" height="50px" width="50px">
                    <div style="margin-top: 50px;" id="myDropdown" class="dropdown-content">
                        <a class="borde" href="index.php">Home</a>
                        <a id="myBtn">Login</a>
                    </div>
                </button>
            </div>

            <div class="" style="position: absolute; text-align: right; top: 23px; left: 20px; display:flex">
                <button onclick="minerales()" style="font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px">Minerales</button>
                <button onclick="" style="font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px; margin-left: 10px">Houses</button>
            </div>
        </div>
    </div>
</nav>
<br>
<br /><br />

<br />
<footer>
    <p style="text-align: center">
        Esta mierda ha sido programada por Abraham (abrahampo1) de la house Frozono
    </p>
</footer>
<div id="myModal" class="modal borde">
    <div class="modal-content borde">
        <span class="close">&times;</span>
        <div class="center" style="display:inline;">
            <h1>Login</h1>
            <h3>Type your roblox username</h3>
            <form action="verificar.php" method="post">
                <input style="width: 100%;" type="text" name="url">
            </form>
            <button id="register" style="font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px">Register</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function loaddata() {
        var name = document.getElementById("robloxuserregister").value;
        if (name) {
            $.ajax({
                type: 'POST',
                url: 'verificar.php',
                data: {
                    url: name,
                },
                success: function(response) {
                    $('#display_info').html(response);
                    $('#btnverify').prop('disabled', false)
                    $('#btnregister').prop('disabled', true)
                    verifyuser();
                }
            });
        } else {
            alert("error");
        }
    }
</script>
<script type="text/javascript">
    var verified = false;

    function verifyuser() {
        var textorandom = document.getElementById('random_words').value;
        var descripcionusuario = document.getElementById('descripcion_cuenta').value;
        if (descripcionusuario == textorandom) {
            $('#verificado').html("Verified!");
            verified = true;
            document.getElementById("finish_register").style.display = "";
        } else {
            verified = false;
            $('#verificado').html("The Bot cant Verify you, make sure you copy all the text on your description!");
            $('#btnregister').prop('disabled', true)
            document.getElementById("finish_register").style.display = "none";
        }
    }

    function verify_pass() {
        var pass1 = document.getElementById('password').value;
        var pass2 = document.getElementById('password_repeat').value;
        if (pass1 == pass2) {
            if (verified == true) {
                $('#btnregister').prop('disabled', false)
            }
        } else {
            $('#btnregister').prop('disabled', true)
        }
    }
</script>

</html>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7LGVHH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
    function minerales() {
        window.location.href = "https://abrahampo1.github.io/roguelineage";
    }
</script>
<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
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
<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    var modal2 = document.getElementById("registermodal");
    var btn2 = document.getElementById("register");
    var span = document.getElementsByClassName("close2")[0];
    btn2.onclick = function() {
        modal2.style.display = "block";
    }
    span.onclick = function() {
        modal2.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
</script>