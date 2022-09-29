<?php

$m1 = ['npm'=>'2005040059','nama'=>'Fahmi','nilai'=>98];
$m2 = ['npm'=>'2005040060','nama'=>'Jay','nilai'=>95];
$m3 = ['npm'=>'2005040061','nama'=>'Boden','nilai'=>80];
$m4 = ['npm'=>'2005040062','nama'=>'Bonglay','nilai'=>50];
$m5 = ['npm'=>'2005040063','nama'=>'Edel & Pikri','nilai'=>99];
$m6 = ['npm'=>'2005040064','nama'=>'Nopal','nilai'=>67];
$m7 = ['npm'=>'2005040065','nama'=>'Daus','nilai'=>65];
$m8 = ['npm'=>'2005040066','nama'=>'Adi','nilai'=>88];
$m9 = ['npm'=>'2005040067','nama'=>'Alam','nilai'=>90];
$m10 =['npm'=>'2005040068','nama'=>'Dani','nilai'=>87];
$m11 =['npm'=>'2005040069','nama'=>'Ipan','nilai'=>59];


$ar_judul = ['No','Npm','Nama','Nilai','Keterangan',
'Grade','Predikat'];


$mhs = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10,$m11];

$jumlah_mhs = count($mhs);
$jml_nilai = array_column($mhs,'nilai');
$total_nilai= array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$rata2= $total_nilai / $jumlah_mhs ;

$keterangan=[
            'Jumlah Mahasiswa'=>$jumlah_mhs,
            'Nilai Tertinggi'=>$max_nilai,
            'Nilai Terendah'=>$min_nilai,
            'Nilai Rata-Rata'=>$rata2
]

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUGAS 2 PHP Fahmi Aji Kurnia UMMAGELANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <br>
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <br />
    <table class="table table-bordered table-striped" bgcolor="white">
        <thead bgcolor="#2E90E8" align="center">
            <tr>
                <?php
                    foreach($ar_judul as $jdl){                  
                    ?>
                <th><?=$jdl ?></th>
                <?php } ?>
            </tr>
        </thead>

        <tbody>
            <?php
                $no=1;
                foreach($mhs as $mhs){

                    $kete = ( $mhs['nilai'] >= 60) ? "Lulus" : "Gagal";



                    if ( $mhs['nilai'] >=85 && $mhs['nilai'] <=100) $grade='A';
                        else if ( $mhs['nilai'] >=75 && $mhs['nilai'] <85) $grade='B';
                        else if ( $mhs['nilai']>=60 && $mhs['nilai'] <75) $grade='C';
                        else if ( $mhs['nilai'] >=45 && $mhs['nilai'] <60) $grade='D';
                        else if ( $mhs['nilai'] >=0 && $mhs['nilai'] <45) $grade='E';
                        else $grade="";     
                    

                    switch ($grade) {
                        case 'A': $predikat = 'Memuaskan'; 
                            break;
                        case 'B': $predikat = 'Bagus'; 
                            break;
                        case 'C': $predikat = 'Cukup'; 
                            break;
                        case 'D': $predikat = 'Kurang'; 
                            break;
                        case 'E': $predikat = 'Buruk'; 
                            break;
                        default:$predikat='';
                    }
            ?>
            <tr>
                <td><?= $no?></td>
                <td><?= $mhs['npm']?></td>
                <td><?= $mhs['nama']?></td>
                <td><?= $mhs['nilai']?></td>
                <td><?= $kete?></td>
                <td><?= $grade?></td>
                <td><?= $predikat?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $ket => $hasil){
            ?>
            <tr>
                <th colspan="6"><?= $ket ?></th>
                <th><?= $hasil ?></th>

            </tr>
            <?php }?>
        </tfoot>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <footer class="main-footer" align="center">
        <div class="pull-right hidden-xs">
            <b>Tugas PHP 2</b>
        </div>
        <strong>Copyright &copy; 2022 <a href="#">Fahmi Aji Kurnia</a>.</strong> All rights reserved.
    </footer>
    </div>

    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
</body>

</html>