<?php
include("protect.php");
/* ADMIN pass: 1234qwerty */

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
<br />
<style>
    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        padding: 10px;
    }

    .grid-item {
        background-color: fad6ad;
        margin: 10px;
        text-align: center;
    }
</style>
<div class="grid-container" style="">
    <div class="borde grid-item" style="">
        <br>
        PD
        <br>
            <img style="margin-top: 5px; margin-bottom: 10px" class="borde" src="https://static.wikia.nocookie.net/rogue-lineage/images/5/57/BALD.PNG/revision/latest/scale-to-width-down/340?cb=20201228181411" width="150px" height="150px" alt="">
        <div class="borde" style="margin: auto; text-align: left; margin: 5px">
            <p style="margin: 5px;">
                <i style="margin: 2px;" class="fas fa-coins" title="Silver"> 10</i>
                <br>
                <i style="margin: 2px;" class="fas fa-user" title="User"> Abrahampo1</i>
                <br>
                <i style="margin: 2px;" class="fas fa-chess-rook" title="House"> Frozono</i>
                <br>
                <i style="margin: 2px;" class="fas fa-plus" title="House"> 100</i>
            </p>
        </div>

    </div>
</div>

<br />
<footer>
    <p style="text-align: center">
        This page was developed by Abraham (Abrahampo1) member of Frozono.
    </p>
</footer>
</html>