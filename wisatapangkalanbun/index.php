<?php
    require 'function.php';
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style2.css">

    <title>Wisata Pangkalan Bun</title>
  </head>
  <body id="home">
    
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sw fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Wisata Pangkalan Bun</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#wisata">Wisata</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#about">About Me</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>

    <!-- Jumbotro -->
    <section class="jumbotron text-center text-dark">
        <h1 class="display-4">Selamat datang di Kota Pangkalan Bun</h1>
        <p class="lead">Hi semuanya!, pada Website Wisata Pangkalan Bun ini menyediakan informasi tempat wisata di beberapa tempat yang ada di Kota Pangkalan Bun. 
            Sekarang anda tidak perlu khawatir lagi, karena sudah disediakan informasi-informasi yang anda perlukan, jadi Tunggu apa lagi?
            Ayo segera cari tempat liburan yang ingin kamu kunjungi! Have a nice Trip!</p>
        
    </section>
    

    <!-- Batik -->
    <section id="batik">
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

     <!-- Wisata-->
     <section id="wisata">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Tempat Wisata</h2>
                </div>
            </div>

                <div class="row row-cols-1 row-cols-md-3 g-3 mt-3 ">
                <?php
                $tampilkan = mysqli_query($conn, "SELECT * FROM wisata order by id_wisata");
                while ($data =mysqli_fetch_array($tampilkan)) :
                    
                ?>
                    <div class="col">
                        <div class="card">
                        <img src="img/<?php echo $data['gambar'] ;?>" alt="<?php echo $data['gambar']; ?>" height="250" width="100" class="card-img-top">
                        <div class="card-body">
                        <div class="row text-center">
                            <h5 class="card-title"><?php echo $data['judul']; ?></h5>
                        </div>
                            <p class="card-text">Buka Setiap Hari : <?php echo $data["hari"]; ?></p>
                            <p class="card-text">Jam Buka : <?php echo $data["waktu"]; ?></p>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $data["id_wisata"]; ?>">
                            Lihat Informasi
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo $data["id_wisata"]; ?>" tabindex="-1" >
                                <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="modal-header">
                                    <h4 class="modal-title"><?php echo $data["judul"]; ?></h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    
                                    <!-- Modal body -->   
                                        
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md "><img src="img/<?php echo $data["gambar"];?>" alt="<?php echo $data["gambar"]; ?>" ></div>
                                            <div class="col-md-8 "><?php echo $data["informasi"]; ?></div>
                                        </div>

                                        </div>
                                        
                                       
                                        <br>
                                        <input type="hidden" name="idw" value="<?php echo $data["id_wisata"]; ?>">

                                        <div class="container">
                                            <div class="row mb-2">
                                                <div class="col-md text-center">
                                                    <h3>Peta <?php echo $data["judul"]; ?> </h3>
                                                    <hr>
                                                </div>
                                                <div class="row text-center">
                                                <div class="embed-responsive embed-responsive-21by9 mb-5">
                                                    <iframe src="https://maps.google.com/maps?width=600&amp;height=800&amp;hl=en&amp;q=Pangkalan Bun to <?php echo $data["judul"]; ?>&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                                     
                                        
                                        </form> 

                                </div>
                                </div>
                            </div>

                        </div>
                        
                        </div>
                    </div>

                    <?php
                    endwhile;
                    ?>
              
                </div> 

            
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    </section>

    <!-- Batik -->
    <section id="batik">
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

    <!-- Galeri -->
    <section id="galeri">
        <div class="container">
            <div class="row text-center">   
                <div class="col">
                    <h2>Galeri</h2>
                </div>
            </div>

                

                <div class="row row-cols-1 row-cols-md-3 g-3 mt-3 ">
                <?php
                $tampilkan = mysqli_query($conn, "SELECT * FROM galeri GROUP BY nama_foto");
                while ($data =mysqli_fetch_array($tampilkan)) :
                    
                ?>
                    <div class="col">
                        <div class="card">
                        <img src="img/<?php echo $data['foto'] ;?>" alt="<?php echo $data['foto']; ?>" height="250" width="100" class="card-img-top">
                        <div class="card-body">
                        <div class="row text-center">
                            <h5 class="card-title"><?php echo $data['nama_foto']; ?></h5>
                        </div>
                        <a href="isi_galeri.php?nama_foto='<?php echo $data['nama_foto']; ?>'" class="btn btn-primary">Buka</a>

                            
                        </div>
                        </div>
                    </div>

                    <?php
                    endwhile;
                    ?>
              
                </div>               

            
        </div>
        <br>
        <br>
        <br>      
        
    </section>

    <!-- Batik -->
    <section id="batik">
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Contact</h2>
                </div>

                <!--maps alamat-->
        
            <div class="container">
                <div class="row mb-2">
                    <div class="col-md text-center">
                        
                        <hr>
                    </div>
                    <div class="embed-responsive embed-responsive-21by9 mb-5">
                        <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q= -2.234650, 113.913270&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        



                <!--alamat-->
            <div class="container">
                
                <div class="row mb-5">

                <?php
                    $tampilkontak= mysqli_query($conn, "SELECT * FROM contact");
                    while ($kontak =mysqli_fetch_array($tampilkontak)):
                ?>

                <div class="col-md-5 contactalamat">
                    <h4 class="text-center">Alamat</h4>
                    <hr>
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                        <h5 class="card-title text-center">Pembuat Website</h5>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item"><?php echo $kontak['alamat']; ?></li>
                        </ul>
                    </div>
                    
                </div>

                <!--formkontak-->
                <div class="col-md-7 contactform">
                    <h4 class="text-center">Form Kontak</h4>
                    <hr>
                    <center>
                    <img src="https://w7.pngwing.com/pngs/672/164/png-transparent-whatsapp-icon-whatsapp-logo-computer-icons-zubees-halal-foods-whatsapp-text-circle-unified-payments-interface.png" width="30">
                    <a target="_blank"><?php echo $kontak['no_hp']; ?></a>
                    <img src="https://statik.tempo.co/data/2020/08/17/id_960229/960229_720.jpg" width="30">
                    <?php echo $kontak['email']; ?>  
                    </center>
                    
                </div>
                <?php
                    endwhile;
                    ?>
                </div>
                
            </div>
            </div>
                
            </div>
    
    </section>

    <!-- Batik -->
    <section id="batik">
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>


                <div class="container text-center">
                <?php
                    $tampilabout= mysqli_query($conn, "SELECT * FROM about");
                    while ($about =mysqli_fetch_array($tampilabout)):
                ?>
                <img src="img/<?php echo $about['foto_about']; ?>" alt="<?php echo $about['foto_about'];?>" width="300" class="rounded-circle" >
                <h1 class="display-4"><?php echo $about['nama_about']; ?></h1>
                <P class="lead"><?php echo $about['profil_about']; ?></p>
                <?php
                    endwhile;
                    ?>
                </div>
            </div>

       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L40,181.3C80,203,160,245,240,229.3C320,213,400,139,480,138.7C560,139,640,213,720,240C800,267,880,245,960,240C1040,235,1120,245,1200,234.7C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

    </section>


    <!-- Footer -->
    <footer class="bg-primary text-white text-center p-2">
        <p>
            Created by <a class="text-white fw-bold"> Stevan Stenlly Sinaga</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                <label>Foto Wisata</label>
                <input type="file" name="gambar" class="form-control-file" required>
                <small id="fileHelpId" class="form-text text-muted">Upload file image (jpg,jpeg,png)</small>
                <br>
                <input type="text" name="judul" placeholder="Nama Wisata" class="form-control" required>
                <br>
                <label>Infromasi Wisata</label>
                <textarea type="text" name="informasi" rows="3" class="form-control ckeditor" id="ckeditor" required></textarea>
                <br>
                <input type="text" name="hari" placeholder="Hari Buka" class="form-control" required>
                <br>
                <input type="text" name="waktu" placeholder="Waktu Buka Hingga Tutup" class="form-control" required>
                <br>
                <button type="sumbit" class="btn btn-primary" name="addnewdata">Submit</button>
                </div>
                </form>                   

            </div>
            </div>
    </div>

</html>