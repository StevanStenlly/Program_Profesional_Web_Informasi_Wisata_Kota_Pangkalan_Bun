<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Contact</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="admin.php">Administrator</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="edit_admin.php">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Kelola Data</div>
                            <a class="nav-link" href="admin_wisata.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Wisata
                            </a>
                            <a class="nav-link" href="admin_galeri.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Galeri
                            </a>
                            <a class="nav-link" href="admin_about.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                About
                            </a>
                            <a class="nav-link" href="admin_contact.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Contact
                            </a>                                              
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Contact</h1>
                        
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Email</th>
                                                <th>Nomor Hp</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                            <?php
                                                $ambilsemuadatacontact = mysqli_query($conn,"SELECT * FROM contact");
                                                $i = 1;
                                                while($data=mysqli_fetch_array($ambilsemuadatacontact)){                                                
                                                    $email = $data['email'];
                                                    $no_hp = $data['no_hp'];
                                                    $alamat = $data['alamat'];
                                                    $idc = $data['id_contact'];

                                                ?>
                                                <tr>
                                                    <td><?=$i++;?></td>                                                   
                                                    <td><?=$email;?></td>
                                                    <td><?=$no_hp;?></td>
                                                    <td><?=$alamat;?></td>
                                                    <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#update<?=$idc;?>">
                                                        Update
                                                    </button>
                                                    <input type="hidden" nama="idcontactygmaudihapus" value="<?=$idc;?>">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idc;?>">
                                                        Delete
                                                    </button>
                                                    </td>
                                                </tr>

                                                <!-- Update Modal -->
                                                    <div class="modal fade" id="update<?=$idc;?>">
                                                        <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                        
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Update Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <form action="" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                            <input type="text" name="email" value="<?=$email;?>" placeholder="Email" class="form-control">
                                                            <br>
                                                            <input type="text" name="no_hp" value="<?=$no_hp;?>" placeholder="Nomer Hp" class="form-control">
                                                            <br>
                                                            <input type="text" name="alamat" value="<?=$alamat;?>" placeholder="Alamat" class="form-control">
                                                            <br>
                                                            <input type="hidden" name="idc" value="<?=$idc;?>">
                                                            <button type="sumbit" class="btn btn-primary" name="updatecontact">Update</button>
                                                            </div>
                                                            </form>                   

                                                        </div>
                                                        </div>
                                                    </div>
                                                
                                                <!-- Delete Modal -->
                                                    <div class="modal fade" id="delete<?=$idc;?>">
                                                                <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                
                                                                    <!-- Modal Header -->
                                                                    <div class="modal-header">
                                                                    <h4 class="modal-title">Hapus Data</h4>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    </div>
                                                                    
                                                                    <!-- Modal body -->
                                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                                    <div class="modal-body">
                                                                    Apakah Anda Ingin Menghapus Email <?=$email;?>?
                                                                    <input type="hidden" name="idc" value="<?=$idc;?>">
                                                                    <br>
                                                                    <br>
                                                                    <button type="sumbit" class="btn btn-danger" name="hapuscontact">Hapus</button>
                                                                    </div>
                                                                    </form>                   

                                                                </div>
                                                                </div>
                                                            </div>

                                                <?php
                                                };

                                                ?>
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Footer -->
                <footer class="bg-primary text-white text-center p-2">
                    <p>
                        Created by <a class="text-white fw-bold"> Stevan Stenlly Sinaga</a>
                    </p>
                </footer>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Tambah Data</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <form method="post">
            <div class="modal-body">
            <input type="text" name="email" placeholder="Email" class="form-control" required>
            <br>
            <input type="text" name="no_hp" placeholder="Nomer Hp" class="form-control" required>
            <br>
            <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
            <br>
            <button type="sumbit" class="btn btn-primary" name="addnewcontact">Submit</button>
            </div>
            </form>                   

           </div>
           </div>
     </div>

</html>
