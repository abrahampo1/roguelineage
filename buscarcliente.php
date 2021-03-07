<?php
if (isset($_POST["cliente"])) {
    include('database.php');
    $cliente = $_POST["cliente"];
    $sql = "SELECT * FROM clientes WHERE nombre LIKE '%$cliente%' OR telefono LIKE '%$cliente%' OR DNI LIKE '%$cliente%' OR CIF LIKE '%$cliente%'";
    if ($do = mysqli_query($link, $sql)) {
    } else {
        echo mysqli_error($link);
        exit;
    }

    if ($do->num_rows > 0) {
        $result = mysqli_fetch_assoc($do);
        echo "<p>Nombre: " . ucfirst($result['nombre']) . "</p>";
        echo "<p>Telefono: " . $result['telefono'] . "</p>";
        if($result["DNI"] != '')
        {
            echo "<p>DNI: " . $result['DNI'] . "</p>";
        }
        if($result["CIF"] != '')
        {
            echo "<p>CIF: " . $result['CIF'] . "</p>";
        }
        echo '<input type="hidden" name="id_cliente" value="'.$result["id"].'">';
    } else {
        echo 'no hay resulltados<br><a class="btn btn-primary" onclick="crearcliente();">Crear Cliente</a>';
    }
}
