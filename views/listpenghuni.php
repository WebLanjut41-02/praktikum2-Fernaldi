<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <table border="3">
   <tr>
    <td>Nama</td>
   <td>Unit</td>
   <td>No_ktp</td>
   </tr>
   <?php foreach ($isi as $data){?>
   <tr>
   <td><?=$data->Nama;?></td>
   <td><?=$data->Unit;?></td>
   <td><?=$data->No_Ktp;?></td>
   </tr>
   <?php }?>
   </table>
</body>
</html>