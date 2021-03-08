<?php
if(isset($_POST["url"]))
{
    include("database.php");
    $userid = $_POST["url"];
    $html = file_get_contents("https://www.roblox.com/users/".$userid."/profile"); //Convierte la información de la URL en cadena
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $divs = $dom->getElementsByTagName('div');
    $imgs = $dom->getElementsByTagName('img');
    $h1s = $dom->getElementsByTagName('h1');
    $spans = $dom->getElementsByTagName('span');
    $flood = 'Not Playing';
    $titulo = '';
    $precio = '';
    $imagen = "";
    foreach ($divs as $div) {
        //si encentramos la clase mc-title nos quedamos con el titulo
        
        //si encentramos la clase mr-rating nos quedamos con la puntuacion
       
    }
    foreach ($h1s as $h1) {
        //si encentramos la clase mc-title nos quedamos con el titulo
    
        //si encentramos la clase mr-rating nos quedamos con la puntuacion
        if ($h1->getAttribute('class') === 'main-title') {
            $titulo = $h1->nodeValue;
            break;
        }
    }
    foreach ($spans as $span) {
        //si encentramos la clase mc-title nos quedamos con el titulo
    
        //si encentramos la clase mr-rating nos quedamos con la puntuacion
        if ($span->getAttribute('class') === 'avatar-status game icon-game profile-avatar-status') {
            $flood = "Jugando ahora mismo";
            break;
        }
    }
    echo '<br><div style="display: flex" class="borde">';
    $json = file_get_contents("https://thumbnails.roblox.com/v1/users/avatar-headshot?format=Png&isCircular=false&size=150x150&userIds=".$userid);
    $datos = json_decode($json, true);
    $imagen = $datos["data"][0]["imageUrl"];
    $json = file_get_contents("https://users.roblox.com/v1/users/".$userid."");
    $datos = json_decode($json, true);
    $sql = "SELECT * FROM users WHERE rbxid = '$userid'";
    $do = mysqli_query($link, $sql);
    if($do->num_rows > 0)
    {
        echo '<h4>This roblox user is already registered!</h4>';
    }else
    {
        echo '<input type="hidden" name="profilepic" value="'.$imagen.'">';
        echo '<br><input name="username" type="hidden" value="'.$datos["name"].'">';
        echo '<br><h4 id="verificado" style="margin-left: 10px"></h4><input type="hidden" id="descripcion_cuenta" value="'.$datos["description"].'">';
        echo "</div>";
        echo '';
    }
}
?>