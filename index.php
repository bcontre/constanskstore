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
        <form method="post" action="DatosImagen.php" enctype="multipart/form-data">

            <tr>
                <td>ingrese COD articulo</td>
                <td><input type="text" name="COD_archivo" required></td>
            </tr>

            <tr>
                <td>ingrese una imagen</td>
                <td><input type="file" name="archivo[]" id="archivo[]" multiple=""></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="subir fotito">
                </td>
            </tr>
        </form>
    </table>



</body>

</html>