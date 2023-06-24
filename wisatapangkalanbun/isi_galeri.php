<?php
    require 'function.php';
    $isi = $_GET["nama_foto"];
    $tampilkan = mysqli_query($conn, "SELECT * FROM galeri WHERE nama_foto=$isi");
    $tampilkan_galeri = ($tampilkan);
    
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Wisata</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Galeri</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php">About Me</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>


    <section id="isi">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>GALERI</h2>
                    </div>
                </div>
            </div>
        <br>
        <br>
        <br>
        <br>
        <br>
       
    </section>

    <main>
    <div class="container">
                
                <div class="row row-cols-1 row-cols-md-3 g-3 mt-3">
                <?php foreach ($tampilkan_galeri as $row) : ?>
                    <div class="col">
                    <div class="card border-dark">
                    <img src="img/<?php echo $row['foto'] ;?>" alt="<?php echo $row['foto']; ?>" height="250" width="100" class="card-img-top">
                        <div class="card-body">
                        <div class="row text-center">
                            <h5 class="card-title"><?php echo $row["nama_foto"]; ?></5>
                        </div>
                        </div>
                    
                    </div>
                    </div>              
                <?php endforeach; ?>
                </div> 
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L40,181.3C80,203,160,245,240,250.7C320,256,400,224,480,224C560,224,640,256,720,245.3C800,235,880,181,960,144C1040,107,1120,85,1200,85.3C1280,85,1360,107,1400,117.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

    </main>


</body>
    
    <!-- Footer -->
    <footer class="bg-primary text-white text-center p-2">
        <p>
            Created by <a class="text-white fw-bold"> Stevan Stenlly Sinaga</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</html>