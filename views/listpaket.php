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
    <td>Tgl_datang</td>
   <td>Sasaran</td>
   <td>Penerima</td>
   <td>Isi_paket</td>
   <!-- <td>Tgl_ambil</td> -->
   </tr>
   <?php foreach ($isi as $data){?>
   <tr>
   <td><?=$data->Tgl_datang;?></td>
   <td><?=$data->Sasaran;?></td>
   <td><?=$data->Penerima;?></td>
   <td><?=$data->Isi_paket;?></td>
   <!-- <td><?=$data->Tgl_ambil;?></td> -->
   </tr>
   <?php }?>
   </table>
</body>
</html>