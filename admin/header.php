
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN PANEL</title>
    <link rel="icon" href="../img/logo.png"  >
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
    


</head>

<body>
    <!-- Left Panel -->
<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("location: login.php");
    exit;
}

?>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Quisin</a>
                <a class="navbar-brand hidden" href=""><i class="bi bi-person-workspace"></i></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        <a href="data_peserta.php"> <i class="menu-icon fa fa-users"></i></i>Data Peserta </a>
                        
                        <a href="soal.php"> <i class="menu-icon fa fa-question"></i>Soal Soal</a>
                        <a href="jawaban.php"> <i class="menu-icon fa fa-book"></i>Jawaban</a>
                    </li>
                    <li>
                        <a href="logout.php" onclick="return confirm('Apakah Kamu Yakin Akan Keluar?'); "> <i class="menu-icon fa fa-close"></i>logout </a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header ">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    
                    <div class="form-inline">
                        
                    </div>

                    
                </div>
            </div>
            <?php 
            require "../connection.php";
            $id_admin = $_SESSION['login']['id'];
            $sql = "SELECT * FROM adm WHERE id = '$id_admin'";
            $query = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($query)){
                $gambar_profile = $data['gambar'];
            }
            ?>
            <div class="col-sm-5 ">
                <div class="user-area dropdown float-right ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="../assets/img/<?= $gambar_profile; ?>" alt="User Avatar">
                        
                    </a>

                    <div class="user-menu dropdown-menu ">
                        <a class="nav-link" href="profil_admin.php" ><i class="fa fa-user"></i> Profile</a>
                        <a class="nav-link" href="logout.php" onclick="return confirm('Apakah Kamu Yakin Akan Keluar?'); "><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>

              

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    