<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Rekam Medis</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengolahan Data Pasien Puskesmas Air Joman </h2>
                        <h4>Jalan Protokol No.71, Binjai Serbangan, Air Joman<br>
                         Kabupaten Asahan, Sumatera Utara, Kode Pos : 21263</h4>
                        <hr>
                        <h3>DATA SELURUH REKAM MEDIS</h3>
                        <table  class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
                                    <th> <center>No.</center></th><th width="10%">Nama Pasien</th><th width="10%">Nama Dokter</th><th width="14%"><center>Keluhan </center></th><th width="15%"><center>Diagnosa</center></th><th width="10%">Nama Obat</th><th><center>Tanggal Periksa </center></th>
                                
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM rekam_medis";
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
                                    <td><?= $data['nama_pasien'] ?></td>
                                    <td><?= $data['nama_dokter'] ?></td>
                                    <td><?= $data['keluhan'] ?></td>
                                    <td><?= $data['diagnosa'] ?></td>
                                    <td><?= $data['nama_obat'] ?></td>
                                    <td><?= $data['tgl_periksa'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Air Joman  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Pengelola Rekam Medis<strong></u><br>
                                       
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
