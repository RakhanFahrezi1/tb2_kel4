
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Daftar Pengguna</h1>
    <a href="<?php echo site_url('User/menu'); ?>" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td>
                        <a href="<?php echo site_url('User/view/'.$user->id); ?>" class="btn btn-info">Lihat</a>
                        <a href="<?php echo site_url('User/edit/'.$user->id); ?>" class="btn btn-warning">Edit</a>
