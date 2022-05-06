<?php
?>

<html>

<head>
    <meta charset="utf-8">
    <title>Documento sin titulo</title>

    <style>
        table {
            margin: auto;
            width: 450px;
            border: 2px dotted #FF0000;
        }
    </style>

</head>

<body>
    <table>
        <form action="DatosImagen.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>ingrese una imagen</td>
                <td><input type="file" name="imagen"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center ;">
                    <input type="submit" value="subir fotito">
                </td>
            </tr>
        </form>
    </table>



</body>

</html>