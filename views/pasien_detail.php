<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pasien</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT * FROM pasien WHERE id_pasien ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID pasien</td> <td><?= $data['id_pasien'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pasien</td> <td><?= $data['nama_pasien'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jk'] ?></td>
                        </tr>
						<tr>
                            <td>Umur</td> <td><?= $data['umur'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Kunjungan</td> <td><?= $data['tgl_kunjungan'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Pekerjaan</td> <td><?= $data['pekerjaan'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pasien&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pasien </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

