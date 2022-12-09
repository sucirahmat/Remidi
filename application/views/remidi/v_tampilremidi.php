<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-md">
        <h2 class="alert alert-info">Remidi Mahasiswa</h2>

        <a href="<?= site_url('Controller03/tambah'); ?>" class="btn btn-success">Tambah</a><br><br>

        <table class="table table-bordered">
            <thead>
                <th>Id</th>
                <th>Nama aset</th>
                <th>Jenis aset</th>
                <th>Kondisi</th>
                <th>Jumlah</th>
            </thead>
            <tbody>
                <?php $id_03 = 1; ?>
                <?php foreach($data as $item) :?>
                <tr>
                    <td><?php echo $id_03++; ?></td>
                    <td><?php echo $item->nama_aset; ?></td>
                    <td><?php echo $item->jenis_aset; ?></td>
                    <td><?php echo $item->kondisi; ?></td>
                    <td><?php echo $item->jumlah; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>