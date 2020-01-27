<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: black">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?page=utama">Sistem Informasi  Puskesmas Air Joman</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php"><i class="fa fa-home fa-fw"></i>Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file fa-fw"></i> Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="?page=pasien&actions=tampil"><i class="fa fa-users fa-fw"></i> Data Pasien</a></li>
                        <li><a href="?page=dokter&actions=tampil"> <i class="fa fa-users fa-fw"></i>Data Dokter</a></li>
                        <li><a href="?page=obat&actions=tampil"><i class="fa fa-flask  fa-fw"></i>Data Obat</a></li>
                        <li><a href="?page=rekammedis&actions=tampil"> <i class="fa fa-file fa-fw"></i> Data Rekam Medis</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-file fa-fw"></i> Reports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=rekammedis&actions=report"> <i class="fa fa-file fa-fw"></i>Laporan  Rekam Medis</a></li>
						            
                    </ul>
                </li>
                <li><a href="?page=user&actions=tampil"><i class="fa fa-user fa-fw"></i>User</a></li>


                <?php } ?>


                <li><a href="?page=about&actions=tampil"> <i class="fa fa-info fa-fw"></i> About</a></li>
                <li><a href="?page=kontak&actions=tampil"><i class="fa fa-phone fa-fw"></i> Contact</a></li>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
