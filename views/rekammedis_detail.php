<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail rekam medis </h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM rekam_medis WHERE id_rm='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama Pasien</td> <td><?= $data['nama_pasien'] ?></td>
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
                            <td>Nama Obat</td> <td><?= $data['nama_obat'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Periksa</td> <td><?= $data['tgl_periksa'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=rekammedis&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data rekam medis </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

