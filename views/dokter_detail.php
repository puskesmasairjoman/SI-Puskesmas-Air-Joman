<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Dokter</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT * FROM dokter WHERE id_dokter ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID dokter</td> <td><?= $data['id_dokter'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama dokter</td> <td><?= $data['nama_dokter'] ?></td>
                        </tr>
                        <tr>
                            <td>Spesialis</td> <td><?= $data['spesialis'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>No Telp</td> <td><?= $data['no_telp'] ?></td>
                        </tr>
                        <tr>
                            <td>Hari Kerja</td> <td><?= $data['hari_kerja'] ?></td>
                        </tr>
						<tr>
                            <td>Jam Kerja</td> <td><?= $data['jam_kerja'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=dokter&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Dokter </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

