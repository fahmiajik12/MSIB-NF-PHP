<?php
require_once 'lingkaran.php';
require_once 'persegipnjg.php';
require_once 'segitiga.php';

$p1 = new Lingkaran(10);
$l1 = new PersegiPanjang(2, 4);
$s1 = new Segitiga(9, 12);

$bidang = [
    $l1,
    $p1,
    $s1
];

$arrJudul = ['Nomer', 'Nama Bidang', 'Luas Bidang', 'Keliling Bidang','keterangan'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container p-4">
        <h1 class="text-center">Data Bidang</h1>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-hover table-sm table-bordered border-dark text-center">
                    <thead class="bg-dark text-light">
                        <tr>
                            <?php
                            foreach ($arrJudul as $jdl) {
                            ?>
                                <th><?= $jdl ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($bidang as $bdg) {
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $bdg->namaBidang() ?></td>
                                <td><?= $bdg->luasBidang() ?></td>
                                <td><?= $bdg->kelilingbidang() ?></td>
                                <td></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>