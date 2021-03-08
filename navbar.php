<?php
include("database.php");
if (isset($_SESSION["user_id"])) {
    $user = $_SESSION["user_id"];
    $sql = "SELECT * FROM users WHERE id = '$user'";
    $do = mysqli_query($link, $sql);
    $user_data = mysqli_fetch_assoc($do);
    $json = file_get_contents("https://thumbnails.roblox.com/v1/users/avatar-headshot?format=Png&isCircular=false&size=150x150&userIds=".$user_data["rbxid"]);
    $datos = json_decode($json, true);
    $imagen_perfil = $datos["data"][0]["imageUrl"];
}
?>


<nav>
    <div style="background-color:#fad6ad; border-radius: 10px; display:ruby">
        <div style="padding: 10px;" class="borde">
            <h1 style="text-align: center; margin-top: 10px;" style="font-family: 'EB Garamond', serif; ">RogueMarket</h1>
            <div class="dropdown borde" style="position: absolute; text-align: right; top: 20px; right: 20px; display:flex">
                <button onclick="myFunction()" class="dropbtn">

                    <h3 style="margin: 10px; margin-right: 50px">
                        <?php
                        if (isset($_SESSION["user_id"])) {
                            echo $user_data["user"];
                        } else {
                            echo "Log in...";
                        }
                        ?></h3>
                    <img src="<?php
                    if(isset($_SESSION["user_id"]))
                    {
                        echo $imagen_perfil;
                    }else
                    {
                        echo "https://i.imgur.com/QnDBR9p.png";
                    }
                    ?>" alt="" height="50px" width="50px">
                    <div style="margin-top: 50px;" id="myDropdown" class="dropdown-content">
                        <a class="borde" href="index.php">Home</a>
                        <?php
                        if(!isset($_SESSION["user_id"]))
                        {
                            echo '<a id="myBtn">Login</a>';
                        }else
                        {
                            echo '<a href="logout.php">Log Out</a>';
                        }
                        ?>
                    </div>
                </button>
            </div>

            <div class="" style="position: absolute; text-align: right; top: 23px; left: 20px; display:flex">
                <button onclick="minerales()" style="font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px">Minerales</button>
                <button onclick="houses()" style="font-size: 18; font-family: 'EB Garamond', serif; background-color:#fad6ad; height: 50px; width: 100px; margin-left: 10px">Houses</button>
            </div>
        </div>
    </div>
</nav>

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


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7LGVHH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
    function minerales() {
        window.location.href = "https://abrahampo1.github.io/roguelineage";
    }
</script>
<script>
    function houses() {
        window.location.href = "houses.php";
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