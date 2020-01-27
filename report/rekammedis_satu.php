<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Rekam Medis</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM rekam_medis WHERE id_rm='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
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
                        <h3>Data Rekam Medis</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nama Pasien</td> <td><?= $data['nama_pasien'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Dokter</td> <td><?= $data['nama_dokter'] ?></td>
                                </tr>
                                <tr>
                                    <td>Keluhan</td> <td><?= $data['keluhan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Diagnosa</td> <td><?= $data['diagnosa'] ?></td>
                                </tr>
								<tr>
                                    <td>Obat</td> <td><?= $data['nama_obat'] ?> </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Periksa</td> <td><?= $data['tgl_periksa'] ?> hari</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
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
