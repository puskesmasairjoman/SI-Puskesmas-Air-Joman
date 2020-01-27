<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" class="form-control" id="inputEmail3" placeholder="Nama Obat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jns" class="col-sm-3 control-label">Jenis Obat</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jns_obat" class="form-control">
                                    <option value="Tablet">Tablet</option>
                                    <option value="Kaplet">Kaplet</option>
                                    <option value="Kapsul">Kapsul</option>
                                    <option value="Suspensi">Suspensi</option>
                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data obat</button>
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
    $sql="INSERT INTO obat VALUES ('','$nama_obat','$jns_obat')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data obat Error");
    if ($query){
        echo "<script>window.location.assign('?page=obat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
