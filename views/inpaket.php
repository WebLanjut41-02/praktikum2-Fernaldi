<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url(); ?>index.php/c_paket/input" method="post">
    
    <table>
        <tr>
            <td>Isi paket</td>
            <td><input type="text" name="paket"></td>
        </tr>
        <tr>
            <td>Sasaran</td>
            <td>
                <select name="sasaran" id="">
                    <?php   foreach ($isi as $data) {?>
                        <option value="<?php echo $data->Nama;?>"><?php echo $data->Nama;?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        
        <tr>
                        <td><input type="submit" name="submit"></td>
        </tr>
    </table>
    
    </form>
</body>
</html>