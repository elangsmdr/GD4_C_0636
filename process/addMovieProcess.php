<?php
    if(isset($_POST['addMovie'])){
        include('../db.php');

            $judul = $_POST['judulFilm'];
            $genre = $_POST['genreFilm'];
            $realese = $_POST['realeseFilm'];
            $season = $_POST['seasonFilm'];
            $synopsis = $_POST['synopsisFilm'];

        $query = mysqli_query($con,
            "INSERT INTO movies(name, genre, realese, season, synopsis)
            VALUES
            ('$judul', '$genre', '$realese', '$season', '$synopsis')") or die(mysqli_error($con));
        if($query){
            echo
                '<script>
                alert("Tambah Film Sukses");
                window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Tambah Film Gagal");
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>