<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>
            WELCOME, Mr.<?= $this->session->file; ?>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?php  echo base_url(); ?>index.php/c_paket/inppaket">Create Paket</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?php echo base_url();?>index.php/c_paket/listpaket">List Paket</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?php echo base_url();?>index.php/c_paket/listpeng">List penghuni</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?php echo base_url();?>index.php/c_paket/inppenghuni">Create Penghuni</a>
            </td>
        </tr>
    </table>    
</body>
</html>