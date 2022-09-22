<?php
    if(isset($_POST['editMovie'])){

        include('../db.php');
        
        $id = $_POST['idFilm'];
        $judul = $_POST['judulFilm'];
        $genre = $_POST['genreFilm'];
        $realese = $_POST['realeseFilm'];
        $season = $_POST['seasonFilm'];
        $synopsis = $_POST['synopsisFilm'];

        $query = mysqli_query($con,
            "UPDATE movies
            SET name='$judul', genre='$genre', realese='$realese', season='$season', synopsis='$synopsis'
            WHERE id='$id'") or die(mysqli_error($con)); 
            
        if($query){
            echo
                '<script>
                alert("Edit Movie Success");
                window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Film Failed");
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>
