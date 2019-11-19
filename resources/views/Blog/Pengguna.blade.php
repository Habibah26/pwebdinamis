<!DOCTYPE html>
<!--

-->
<html lang="en">
<head>
  <title>Pengguna</title>
  @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper" id="app">

  <!-- Navbar -->
   @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar-left')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Hello :)</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <h3 class="card-title">Halaman Pengguna</h3>
              <div class="container-fluid">
              <div class="row">
              <div class="col-md-12">
              <div class="card">
              <div class="card-header"> 
              <h3 class="card-title">Data Table</h3>               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>NAMA</th>
                      <th style="width: 25%">
                          <center> AKSI</center>
                      </th>
                    </tr>
                      @foreach ($varAngka as $isinya)
                    <tr>
                      <td>{{$isinya}}</td>
                      <td>
                        <a href="{{$isinya}}">
                        <i class="fas fa-eye">Read</i>
                        |
                        <a href="{{$isinya}}">
                        <i class="fas fa-edit purple">Edit</i>
                        |
                        <a href="{{$isinya}}">
                        <i class="fas fa-trash-alt red">Hapus</i>
                        </a>
                      </td>
                    </tr>
                      @endforeach
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
@include('Template.script')
</body>

</html>