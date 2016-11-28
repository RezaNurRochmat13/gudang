<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Gudang PT ABC Indonesia</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link  href="<?php echo base_url().'assets/'?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url().'assets/'?>dist/css/font-awesome.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="<?php echo base_url().'assets/'?>dist/css/ionicons.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="<?php echo base_url().'assets/'?>dist/css/AdminLTE.min.css" rel="stylesheet">
  <link href="<?php echo base_url().'assets/'?>dist/css/footer.css" rel="stylesheet">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link href="<?php echo base_url().'assets/'?>dist/css/skins/skin-blue.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SI Gudang</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="<?php echo base_url().'assets/'?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <!-- The message -->
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url().'assets/'?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/'?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                   <a href="<?php echo site_url('home/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assets/'?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <!-- Status -->
        </div>
      </div>

      <!-- search form (Optional) -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Navigation Menu</li>
        <li><a href="<?php echo site_url('grafiktotal/getGrafik');?>"><i class="glyphicon glyphicon-home"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Transaksi Gudang</span> <i class="fa-fa arrow"></i></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('masuk/getData');?>">Data Barang Masuk</a></li>
            <li><a href="<?php echo site_url('keluar/getData');?>">Data Barang Keluar</a></li>
            <li><a href="<?php echo site_url('stok/getData');?>">Data Stok Barang</a></li>
            <li><a href="<?php echo site_url('kategoriBarang/getKategori');?>">Tambah Kategori Barang</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Laporan Transaksi Gudang</span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('laporanmasuk/getLaporanMasuk');?>">Laporan Data Barang Masuk</a></li>
            <li><a href="<?php echo site_url('laporankeluar/getLaporanKeluar');?>">Laporan Data Barang Keluar</a></li>
            </ul>
        </li>
          <li class="treeview">
           <a href="<?php echo site_url('user/getData')?>"><i class="glyphicon glyphicon-user"></i> <span>Management User</span></a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan Data Barang Masuk
        <small>Laporan Data Laporan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i>Laporan Data Barang Masuk</a></li>
        <li class="active">Lihat Data Laporan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
        <div class="panel panel-default">
           <div class="panel-heading"><b>Laporan Data Barang Masuk</b></div>
                <div class="panel-body">
                    <p><?=$this->session->flashdata('pesan')?> </p>
                          <a class="btn btn-sm btn-default" id="btnExport" onclick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel"><i class="glyphicon glyphicon-cloud-download"></i> Export to Excel</a>
                           <table class="table table-striped" id="testTable">
                             <thead>
                                 <tr>
                                 <th>No</th>
                                 <th>Kode Barang</th>
                                 <th>Nama Barang</th>
                                 <th>Tanggal Perolehan Barang</th>
                                 <th>Harga Perolehan Barang</th>
                                 <th>Kategori Barang</th>
                                 <th>QRCode</th>
                                 </tr>
                                </thead>
                            <tbody>
                            <?php if(empty($qlaporanmasuk)){ ?>
                             <tr>
                              <td colspan="6">Data tidak ditemukan</td>
                             </tr>
                            <?php }else{
                              $no= $this->uri->segment('3') + 1;
                              foreach($qlaporanmasuk as $data){ $no;?>
                             <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $data->kode_barang?></td>
                                <td><?php echo $data->nama_barang?></td>
                                <td><?php echo date("d F Y",strtotime($data->tanggal_perolehan_barang)); ?></td>
                                <td><?php echo $rp ="Rp".number_format($data->harga_perolehan_barang,2,',','.')?></td>
                                <td><?php echo $data->nama_kategori_barang?></td>
                                <td><img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=<?php echo $data->kode_barang?>&chl=<?php echo $data->nama_barang?>" title="<?php echo $data->kode_barang?>" /></td>
                             </tr>
                            <?php }}?>
                            </tbody>
                           </table>
                              <div class="row">
                                <div class="col-md-12 text-center">
                                    <?php echo $this->pagination->create_links(); ?>
                                </div>
                            </div>
                        </div>
                    </div>    <!-- /panel -->
                </div>
                    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Developed By Life Is Coding KOMSI UGM
    </div>
    <!-- Default to the left -->
    <strong>Powered By &copy; 2016 <a href="#">Web Lanjut Programming Course</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url().'assets/'?>plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/'?>bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/'?>dist/js/app.min.js"></script>
<script src="http://www.jquery2dotnet.com"></script>
<script>
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
