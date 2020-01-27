<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM obat WHERE id_obat ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" value="<?=$data['nama_obat']?>" class="form-control" id="inputEmail3" placeholder="Nama obat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jns" class="col-sm-3 control-label">Jenis Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="jns_obat" value="<?=$data['jns_obat']?>" class="form-control" id="inputEmail3" placeholder="Jenis Obat">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Obat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=obat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Obat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nama_obat=$_POST['nama_obat'];
    $jns_obat=$_POST['jns_obat'];
    
    //buat sql
    $sql="UPDATE obat SET nama_obat='$nama_obat',jns_obat='$jns_obat' WHERE id_obat ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=obat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



