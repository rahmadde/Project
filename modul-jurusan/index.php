<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    <?php
        include_once('../navbar.php');
    ?>
    <div class="card col-7 mt-5 m-auto row">
        <div class="card-header">
            <h3 class="float-start">Data Jurusan</h3>
            <span class="float-end">
                <a href="" class="btn btn-warning">
                    <i class="fa-solid fa-circle-plus"></i>
                    <font class="">Tambah Data</font>
                </a>
            </span>
        </div>
        <div class="card_body mt-2 mb-2">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Jurusan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">
                            <a href="" class="btn btn-success btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>