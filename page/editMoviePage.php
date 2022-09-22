<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
        <h4>Edit Data Film</h4>
        <hr>
        <div class="countainer card-content w-50">
            <form action="../process/editMovieProcess.php" method="post">
            <?php
            if(isset($_GET['id'])){
                include ('../db.php');
                $id = $_GET['id'];
                $sql="SELECT * FROM movies WHERE id=$id";
                $result = mysqli_query($con,$sql) or die(mysqli_error($con));
                if($result) {
                        if(mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);   
                        $id = $row['id'];
                        $name = $row['name'];
                        $genre = $row['genre'];
                        $realese = $row['realese'];
                        $season = $row['season'];
                        $synopsis = $row['synopsis'];
                        }
                    }
                }
            ?>
            <table style="width: 100%;">
                <div><input type="text" name="idFilm" hidden value="<?php echo $id?>"></div>
                <tr>
                <td>
                    <div class="mb-3">
                        <label for="addTitle" class="form-label">Judul Film</label> <input type="text" class="form-control w-100" id="judulFilm" name="judulFilm" width="100%" value="<?php echo $name ?>"/>
                    </div>
            </td>
        </tr>
                <tr>
            <td>
                    <div class="mb-3">
                        <label for="addGenre" class="form-label">Genre</label> <input type="text" class="form-control w-100" id="genreFilm" name="genreFilm" width="100%" value="<?php echo $genre ?>"/>
                    </div>
                </td>
            </tr>
                <tr>
                <td>
                    <div class="mb-3">
                        <label for="addRealese" class="form-label">Tahun Realese</label> <input type="text" class="form-control w-100" id="realeseFilm" name="realeseFilm" width="100%" value="<?php echo $realese ?>"/>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                    <label for="addSeason" class="form-label">Season</label> <input type="text" class="form-control w-100" id="seasonFilm" name="seasonFilm" width="100%" value="<?php echo $season ?>"/>
                    </div>
            </td>
        </tr>
                <tr>
                    <td>
                    <div class="mb-3">
                        <label for="addSynopsis" class="form-label">Synopsis</label> <input type="text" class="form-control w-100" id="synopsisFilm" name="synopsisFilm" width="100%" value="<?php echo $synopsis ?>"/>
                    </div>
            </td>
                </tr>
            </table>
            
            <button type="submit" class="btn btn-primary" name="editMovie">Submit</button>
            </form>	
        </div>
    </div>
    </aside>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
</script>
</body>
</html>