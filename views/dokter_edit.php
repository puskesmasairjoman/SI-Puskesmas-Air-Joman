<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM dokter WHERE id_dokter ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data dokter</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="nama_dokter" class="col-sm-3 control-label">Nama dokter</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_dokter" value="<?=$data['nama_dokter']?>" class="form-control" id="inputEmail3" placeholder="Nama dokter">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="spesialis" class="col-sm-3 control-label">Spesialis</label>
                            <div class="col-sm-9">
                                <input type="text" name="spesialis" value="<?=$data['spesialis']?>" class="form-control" id="inputEmail3" placeholder="Spesialis">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"  class="form-control" id="inputPassword3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp" class="col-sm-3 control-label"> No Telp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_telp" value="<?=$data['no_telp']?>"  class="form-control" id="inputPassword3" placeholder="No Telp">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="hari_kerja" class="col-sm-3 control-label"> Hari Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" name="hari_kerja" value="<?=$data['hari_kerja']?>" class="form-control" id="inputPassword3" placeholder="Hari Kerja">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="jam_kerja" class="col-sm-3 control-label">Jam Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" name="jam_kerja" value="<?=$data['jam_kerja']?>" class="form-control" id="inputEmail3" placeholder="Jam Kerja">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data dokter</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=dokter&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data dokter
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
    $sql="UPDATE dokter SET nama_dokter='$nama_dokter',spesialis='$spesialis',alamat='$alamat',no_telp='$no_telp',hari_kerja='$hari_kerja',	jam_kerja='$jam_kerja' WHERE id_dokter ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=dokter&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



