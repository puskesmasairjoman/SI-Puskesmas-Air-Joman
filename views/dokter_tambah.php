<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data dokter</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="nama_dokter" class="col-sm-3 control-label">Nama dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_dokter" class="form-control" id="inputEmail3" placeholder="Nama dokter">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="spesialis" class="col-sm-3 control-label">Spesialis</label>
                            <div class="col-sm-9">
                                <input type="text" name="spesialis" class="form-control" id="inputEmail3" placeholder="Spesialis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat"  class="form-control" id="inputPassword3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label"> No Telp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp"  class="form-control" id="inputPassword3" placeholder="No Telp">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="hari_kerja" class="col-sm-3 control-label"> Hari Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" name="hari_kerja"  class="form-control" id="inputPassword3" placeholder="Hari Kerja">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="jam_kerja" class="col-sm-3 control-label">Jam Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" name="jam_kerja"class="form-control" id="inputEmail3" placeholder="Jam Kerja">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Dokter</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=dokter&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Dokter
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama_dokter=$_POST['nama_dokter'];
    $spesialis=$_POST['spesialis'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    $hari_kerja=$_POST['hari_kerja'];
    $jam_kerja=$_POST['jam_kerja'];
    //buat sql
    $sql="INSERT INTO dokter VALUES ('','$nama_dokter','$spesialis','$alamat','$no_telp','$hari_kerja','$jam_kerja')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Dokter Error");
    if ($query){
        echo "<script>window.location.assign('?page=dokter&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
