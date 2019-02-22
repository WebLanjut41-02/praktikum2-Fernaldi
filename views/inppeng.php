<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url(); ?>index.php/c_paket/inputpeng" method="post">
        <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Unit</td>
            <td><input type="text" name="unit"></td>
        </tr>
        <tr>
            <td>No Ktp</td>
            <td><input type="number" name="noktp"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        
        </tr>
        </table>
    </form>
</body>
</html>