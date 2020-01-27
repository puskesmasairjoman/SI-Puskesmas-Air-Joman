<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Pasien</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                 <th>No.</th><th>No.Pasien</th><th width="30%">Nama </th><th>Jenis Kelamin</th><th>Umur</th><th>Tanggal Kunjungan</th><th>alamat</th><th>pekerjaan</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pasien";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['id_pasien'] ?></td>
                                    <td><?= $data['nama_pasien'] ?></td>
                                    <td><?= $data['jk'] ?></td>
                                    <td><?= $data['umur'] ?></td>
                                    <td><?= $data['tgl_kunjungan'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['pekerjaan'] ?></td>
                                    <td>
                                        <a href="?page=pasien&actions=detail&id=<?= $data['id_pasien'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=pasien&actions=edit&id=<?= $data['id_pasien'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
										<a href="?page=rekammedis&actions=tambah&np=<?= $data['id_pasien'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-arrow-right"></span>
                                        </a>
                                        <a href="?page=pasien&actions=delete&id=<?= $data['id_pasien'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=pasien&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Pasien

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

