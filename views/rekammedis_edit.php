<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM rekam_medis WHERE id_rm='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data rekam medis </h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_pasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pasien" value="<?=$data['nama_pasien']?>" class="form-control" id="inputEmail3" placeholder="Nama Pasien" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dokter" class="col-sm-3 control-label">Nama Dokter</label>
                            <div class="col-sm-9">
                                      <select class="form-control" name="nama_dokter">

                                            <?php
                                            $dokter= mysqli_query($koneksi, "SELECT * FROM dokter");
                                            while ($data1 = mysqli_fetch_array($dokter)) {
                                                ?>
                                                <option value="<?=$data1['nama_dokter']?>">
                                                    <?=$data1['nama_dokter']?>
                                                  </option>

                                            <?php
                                                }
                                            ?>
                                        </select>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="keluhan" class="col-sm-3 control-label">Keluhan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keluhan" class="form-control" value="<?=$data['keluhan']?>" id="inputEmail3" placeholder="Keluhan">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="diagnosa" class="col-sm-3 control-label">Diagnosa</label>
                            <div class="col-sm-9">
                                <input type="text" name="diagnosa" class="form-control" value="<?=$data['diagnosa']?>" id="inputEmail3" placeholder="Diagnosa">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                      <select class="form-control" name="nama_obat">

                                            <?php
                                            $obat= mysqli_query($koneksi, "SELECT * FROM obat");
                                            while ($dataobat = mysqli_fetch_array($obat)) {
                                                ?>
                                                <option value="<?=$dataobat['nama_obat']?>">
                                                    <?=$dataobat['nama_obat']?>
                                                  </option>

                                            <?php
                                                }
                                            ?>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_periksa" class="col-sm-3 control-label">Tanggal Periksa</label>
                            <div class="col-sm-4">
                                <input type="date" name="tgl_periksa" class="form-control" value="<?=$data['tgl_periksa']?>" id="inputEmail3" placeholder="Tanggal Periksa">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Rekam Medis</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=rekammedis&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Rekam Medis
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
    $nama_dokter=$_POST['nama_dokter'];
    $keluhan=$_POST['keluhan'];
    $diagnosa=$_POST['diagnosa'];
    $nama_obat=$_POST['nama_obat'];
    $tgl_periksa=$_POST['tgl_periksa'];
    //buat sql
    $sql="UPDATE rekam_medis SET nama_pasien = '$nama_pasien', nama_dokter='$nama_dokter', keluhan='$keluhan', diagnosa='$diagnosa', nama_obat='$nama_obat',
	tgl_periksa='$tgl_periksa' WHERE id_rm='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=rekammedis&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



