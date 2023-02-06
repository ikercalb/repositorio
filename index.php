<?php
// Aldagaiak
$hostDB = 'db';
$nombreDB = 'usuarios';
$usuarioDB = 'root';
$contrasenyaDB = 'admin1234';
// Datu basera konektatu
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// SELECT prestatu
$miConsulta = $miPDO->prepare('SELECT * FROM usuarios;');
// Kontsulta exekutatu
$miConsulta->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iker caballero </title>
</head>
<body>
<table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
    <?php foreach ($miConsulta as $clave => $valor): ?> 
        <tr>
           <td><?= $valor['Nombre']; ?></td>
           <td><?= $valor['Apellido']; ?></td>
           <td><?= $valor['Edad']; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>