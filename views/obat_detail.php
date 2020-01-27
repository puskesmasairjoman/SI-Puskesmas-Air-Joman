<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail obat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT * FROM obat WHERE id_obat ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID obat</td> <td><?= $data['id_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama obat</td> <td><?= $data['nama_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Obat</td> <td><?= $data['jns_obat'] ?></td>
                        </tr>
						
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=obat&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data obat </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

