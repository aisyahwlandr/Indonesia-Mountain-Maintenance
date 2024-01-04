<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>

<body style="background-color: #D0E7D2" ;>
    <nav class="navbar navbar-expand-lg px-4 sticky-top" style="background-color: #186F65;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="index.php">Indonesia Mountain Maintenance</a>
            <div>
                <form>
                    <a class="btn" style="background-color: #D0E7D2;" href="index.php">Sign out</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container table-responsive">
        <?php if (!isset($_GET['view'])) { ?>

            <a class="btn btn-success my-3" href="?page=index&view=insert">Create Data</a>
            <table class="table table-hover text-center">
                <tr class="table-dark">
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Asal Daerah</th>
                    <th>Jenis Kelamin</th>
                    <th>No Kerabat</th>
                    <th>Nama Gunung</th>
                    <th>Tanggal Naik</th>
                    <th>Tanggal Turun</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 0;
                $hasil = mysqli_query($db, "SELECT * FROM pengunjung");

                while ($row = mysqli_fetch_object($hasil)) {
                    $no++;
                ?>
                    <tr>
                        <td><img style="width: 80px; height: 80px;" src="<?= $row->photo ?>"></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->asaldaerah ?></td>
                        <td><?= $row->jeniskelamin ?></td>
                        <td><?= $row->nokerabat ?></td>
                        <td><?= $row->namagunung ?></td>
                        <td><?= $row->tglnaik ?></td>
                        <td><?= $row->tglturun ?></td>
                        <td><a class="btn btn-warning" href="?page=index&view=update&id=<?= $row->id ?>">Update</a>
                            <a class="btn btn-danger" href="dataeditor-process.php?action=delete&id=<?= $row->id ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        <?php } else if ($_GET['view'] == 'insert') { ?>

            <form method="post" action="dataeditor-process.php?action=insert" enctype="multipart/form-data" class="py-3">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Asal Daerah</label>
                    <input type="text" name="asaldaerah" class="form-control" placeholder="Masukkan Asal Daerah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jeniskelamin" class="form-control" placeholder="Masukkan Jenis Kelamin">
                </div>
                <div class="mb-3">
                    <label class="form-label">No Kerabat</label>
                    <input type="text" name="nokerabat" class="form-control" placeholder="Masukkan Nomor Kerabat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Gunung</label>
                    <input type="text" name="namagunung" class="form-control" placeholder="Masukkan Nama Gunung">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Naik</label>
                    <input type="date" name="tglnaik" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Turun</label>
                    <input type="date" name="tglturun" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="d-flex gap-5">
                    <a href="admin.php" class="btn w-50 py-2" style="background-color: #EE9322;"><button class="btn  text-white">Cancel</button></a>
                    <button class="btn w-50 py-2 text-white" style="background-color: #0C356A;" type="submit">Save</button>
                </div>

            </form>

        <?php } else if ($_GET['view'] == 'update') { ?>
            <?php
            $hasil = mysqli_query($db, "SELECT * FROM pengunjung WHERE id='$_GET[id]'");
            while ($row = mysqli_fetch_object($hasil)) {
            ?>
                <form method="post" action="dataeditor-process.php?action=update&id=<?= $_GET['id'] ?>" enctype="multipart/form-data" class="py-3">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= $row->nama ?>" placeholder="Masukkan Namat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Asal Daerah</label>
                        <input type="text" name="asaldaerah" class="form-control" value="<?= $row->asaldaerah ?>" placeholder="Masukkan Asal Daerah">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <input type="text" name="jeniskelamin" class="form-control" value="<?= $row->jeniskelamin ?>" placeholder="Masukkan Jenis Kelamin">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Kerabat</label>
                        <input type="text" name="nokerabat" class="form-control" value="<?= $row->nokerabat ?>" placeholder="Masukkan Nomor Kerabat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Gunung</label>
                        <input type="text" name="namagunung" class="form-control" value="<?= $row->namagunung ?>" placeholder="Masukkan Nama Gunung">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Naik</label>
                        <input type="date" name="tglnaik" class="form-control" value="<?= $row->tglnaik ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Turun</label>
                        <input type="date" name="tglturun" class="form-control" value="<?= $row->tglturun ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="d-flex gap-5">
                        <a href="admin.php" class="btn w-50 py-2" style="background-color: #EE9322;"><button class="btn  text-white">Cancel</button></a>
                        <button class="btn w-50 py-2 text-white" style="background-color: #0C356A;" type="submit">Save</button>
                    </div>

                </form>
        <?php }
        } ?>

    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>