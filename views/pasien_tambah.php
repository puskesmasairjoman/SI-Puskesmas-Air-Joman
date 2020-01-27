<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pasien</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="nama_pasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pasien" class="form-control" id="inputEmail3" placeholder="Nama Pasien">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jk" class="form-control">
                                    <option value="Laki Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="umur" class="col-sm-3 control-label">Umur</label>
                            <div class="col-sm-9">
                                <input type="text" name="umur"class="form-control" id="inputEmail3" placeholder="Umur">
                            </div>
                        </div>  

                        <div class="form-group">
                            <label for="tgl_kunjungan" class="col-sm-3 control-label">Tanggal Kunjungan</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_kunjungan"  class="form-control" id="inputPassword3" placeholder="Tanggal Kunjungan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat"  class="form-control" id="inputPassword3" placeholder="Alamat">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan"  class="form-control" id="inputPassword3" placeholder="Pekerjaan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pasien</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pasien&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pasien
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama_pasien=$_POST['nama_pasien'];
    $jk=$_POST['jk'];
    $umur=$_POST['umur'];
    $tgl_kunjungan=$_POST['tgl_kunjungan'];
    $alamat=$_POST['alamat'];
    $pekerjaan=$_POST['pekerjaan'];
    //buat sql
    $sql="INSERT INTO pasien VALUES ('','$nama_pasien','$jk','$umur','$tgl_kunjungan','$alamat','$pekerjaan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Pasien Error");
    if ($query){
        echo "<script>window.location.assign('?page=pasien&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
