<?php
session_start();

//Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","pariwisata");

//Menambah data baru
if(isset($_POST['addnewdata'])){
    $gambar = $_FILES['gambar']['name'];

    $file_extension = array('png','jpg','jpeg','gif');
    $extension = pathinfo($gambar, PATHINFO_EXTENSION);
    $size_gambar =$_FILES['gambar']['size'];
    $rand = rand();

    $judul = $_POST['judul'];
    $informasi = $_POST['informasi'];
    $hari = $_POST['hari'];
    $waktu = $_POST['waktu']; 

    if(!in_array($extension, $file_extension)){
        echo "<script>alert('File Tidak Didukung!'); location = 'admin_wisata.php'</script>";
    } else {
        if ($size_gambar < 409600) {
            $nama_gambar = $rand.'_'.$gambar;

            move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$nama_gambar);

            mysqli_query($conn,"INSERT into wisata (gambar, judul, informasi, hari, waktu) VALUES ('$gambar','$judul','$informasi',' $hari',' $waktu')");

            echo "<script>alert('Data Berhasil di Tambahkan'); location = 'admin_wisata.php'</script>";
        } else {
            echo "<script>alert('Ukuran Gambar Terlalu Besar!'); location = 'admin_wisata.php'</script>";
        }
    }

}

//Menambah galeri baru
if(isset($_POST['addnewgaleri'])){
    $nama_foto = $_POST['nama_foto'];
    $foto = $_FILES['foto']['name'];

    $file_extension = array('png','jpg','jpeg','gif');
    $extension = pathinfo($foto, PATHINFO_EXTENSION);
    $size_gambar =$_FILES['foto']['size'];
    $rand = rand();  

    if(!in_array($extension, $file_extension)){
        echo "<script>alert('File Tidak Didukung!'); location = 'admin_galeri.php'</script>";
    } else {
        if ($size_gambar < 409600) {
            $nama_gambar = $rand.'_'.$foto;

            move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$nama_gambar);

            mysqli_query($conn,"INSERT into galeri (nama_foto, foto) VALUES ('$nama_foto','$foto')");

            echo "<script>alert('Data Berhasil di Tambahkan'); location = 'admin_galeri.php'</script>";
        } else {
            echo "<script>alert('Ukuran Gambar Terlalu Besar!'); location = 'admin_galeri.php'</script>";
        }
    }
}

//Menambah about baru
if(isset($_POST['addnewabout'])){
    $foto_about = $_FILES['foto_about']['name'];

    $file_extension = array('png','jpg','jpeg','gif');
    $extension = pathinfo($foto_about, PATHINFO_EXTENSION);
    $size_gambar =$_FILES['foto_about']['size'];
    $rand = rand(); 

    $nama_about = $_POST['nama_about'];
    $profil_about = $_POST['profil_about']; 

    if(!in_array($extension, $file_extension)){
        echo "<script>alert('File Tidak Didukung!'); location = 'admin_about.php'</script>";
    } else {
        if ($size_gambar < 409600) {
            $nama_gambar = $rand.'_'.$foto_about;

            move_uploaded_file($_FILES['foto_about']['tmp_name'], 'img/'.$nama_gambar);

            mysqli_query($conn,"INSERT into about (foto_about, nama_about, profil_about) VALUES ('$foto_about','$nama_about','$profil_about')");

            echo "<script>alert('Data Berhasil di Tambahkan'); location = 'admin_about.php'</script>";
        } else {
            echo "<script>alert('Ukuran Gambar Terlalu Besar!'); location = 'admin_abouti.php'</script>";
        }
    }
}

//Menambah contact baru
if(isset($_POST['addnewcontact'])){
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat']; 

    $addtotacontact = mysqli_query($conn,"insert into contact (email, no_hp, alamat) values('$email','$no_hp','$alamat')");
    if($addtocontact){
        header('location:admin_contact.php');
    } else {
        echo 'Gagal';
        header('location:admin_contact.php');
    }
}

//Update Admin
$ambilsemuadataadmin = mysqli_query($conn,"SELECT * FROM admin");

$dataadmin=mysqli_fetch_array($ambilsemuadataadmin);

if(isset($_POST['updateadmin'])){
    $idad = $_POST['idad'];
    $foto_admin = $_FILES['foto_admin']['name'];
    $path_gambar = "img/".$dataadmin['foto_admin'];

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($foto_admin)){

        mysqli_query($conn,"UPDATE admin SET username='$username', password='$password' WHERE id_admin='$idad'");

        echo "<script>alert('Data Berhasil Diubah'); location = 'edit_admin.php' </script>";
    } else {
        unlink($path_gambar);
        
        move_uploaded_file($_FILES['foto_admin']['tmp_name'], 'img/'.$foto_admin);

        mysqli_query($conn,"UPDATE admin SET username='$username', password='$password', foto_admin='$foto_admin'  WHERE id_admin='$idad'");

        echo "<script>alert('Data Berhasil  Diubah'); location = 'edit_admin.php'</script>";

    }
}

//Update Wisata
$ambilsemuadatawisata = mysqli_query($conn,"SELECT * FROM wisata");

$data=mysqli_fetch_array($ambilsemuadatawisata);

if(isset($_POST['updatedata'])){
    $idw = $_POST['idw'];
    $gambar = $_FILES['gambar']['name'];
    $path_gambar = "img/".$data['gambar'];

    $judul = $_POST['judul'];
    $informasi = $_POST['informasi'];
    $hari = $_POST['hari'];
    $waktu = $_POST['waktu'];
    
    if (empty($gambar)){

        mysqli_query($conn,"UPDATE wisata SET judul='$judul', informasi='$informasi', hari='$hari', waktu='$waktu' WHERE id_wisata='$idw'");

        echo "<script>alert('Data Berhasil Diubah'); location = 'admin_wisata.php' </script>";
    } else {
        unlink($path_gambar);
        
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$gambar);

        mysqli_query($conn,"UPDATE wisata SET gambar='$gambar', judul='$judul', informasi='$informasi', hari='$hari', waktu='$waktu' WHERE id_wisata='$idw'");

        echo "<script>alert('Data Berhasil  Diubah'); location = 'admin_wisata.php'</script>";

    }
}

//Update Galeri
$ambilsemuadatagaleri = mysqli_query($conn,"SELECT * FROM galeri");

$datagaleri=mysqli_fetch_array($ambilsemuadatagaleri);

if(isset($_POST['updategaleri'])){
    $idg = $_POST['idg'];
    $nama_foto = $_POST['nama_foto'];

    $foto = $_FILES['foto']['name'];
    $path_gambar = "img/".$datagaleri['foto'];
    
    if (empty($foto)){

        mysqli_query($conn,"UPDATE galeri SET nama_foto='$nama_foto' WHERE id_galeri='$idg'");

        echo "<script>alert('Data Berhasil Diubah'); location = 'admin_galeri.php' </script>";
    } else {
        unlink($path_gambar);
        
        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$foto);

        mysqli_query($conn,"UPDATE galeri SET nama_foto='$nama_foto', foto='$foto' WHERE id_galeri='$idg'");

        echo "<script>alert('Data Berhasil  Diubah'); location = 'admin_galeri.php'</script>";

    }
}

//Update About
$ambilsemuadataabout = mysqli_query($conn,"SELECT * FROM about");

$dataabout=mysqli_fetch_array($ambilsemuadataabout);

if(isset($_POST['updateabout'])){
    $ida = $_POST['ida'];

    $foto_about = $_FILES['foto_about']['name'];
    $path_gambar = "img/".$dataabout['foto_about'];

    $nama_about = $_POST['nama_about'];
    $profil_about = $_POST['profil_about'];
    
    if (empty($foto_about)){

        mysqli_query($conn,"UPDATE about SET nama_about='$nama_about', profil_about='$profil_about' WHERE id_about='$ida'");

        echo "<script>alert('Data Berhasil Diubah'); location = 'admin_about.php' </script>";
    } else {
        unlink($path_gambar);
        
        move_uploaded_file($_FILES['foto_about']['tmp_name'], 'img/'.$foto_about);

        mysqli_query($conn,"UPDATE about SET foto_about='$foto_about', nama_about='$nama_about', profil_about='$profil_about' WHERE id_about='$ida'");

        echo "<script>alert('Data Berhasil  Diubah'); location = 'admin_about.php'</script>";

    }
}

//Update Contact
if(isset($_POST['updatecontact'])){
    $idc = $_POST['idc'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat']; 
    
    $update = mysqli_query($conn,"UPDATE contact SET email='$email', no_hp='$no_hp', alamat='$alamat' WHERE id_contact='$idc'") ;
    if($update){
        header('location:admin_contact.php');
    } else {
        echo 'Gagal';
        header('location:admin_contact.php');
    }
}


//Delete Wisata
if(isset($_POST['hapusdata'])){
    $idw = $_POST['idw'];

    $hapus = mysqli_query($conn, "DELETE FROM wisata where id_wisata='$idw'");
    if($hapus){
        header('location:admin_wisata.php');
    } else {
        echo 'Gagal';
        header('location:admin_wisata.php');
    }
}

//Delete Galeri
if(isset($_POST['hapusgaleri'])){
    $idg = $_POST['idg'];

    $hapus = mysqli_query($conn, "DELETE FROM galeri where id_galeri='$idg'");
    if($hapus){
        header('location:admin_galeri.php');
    } else {
        echo 'Gagal';
        header('location:admin_galeri.php');
    }
}

//Delete About
if(isset($_POST['hapusabout'])){
    $ida = $_POST['ida'];

    $hapus = mysqli_query($conn, "DELETE FROM about where id_about='$ida'");
    if($hapus){
        header('location:admin_about.php');
    } else {
        echo 'Gagal';
        header('location:admin_about.php');
    }
}

//Delete Contact
if(isset($_POST['hapuscontact'])){
    $idc = $_POST['idc'];

    $hapus = mysqli_query($conn, "DELETE FROM contact where id_contact='$idc'");
    if($hapus){
        header('location:admin_contact.php');
    } else {
        echo 'Gagal';
        header('location:admin_contact.php');
    }
}

?>