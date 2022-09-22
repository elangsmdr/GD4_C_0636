<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
    solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
    0.19);" >
        <h4 >Tambah Data Film</h4>
        <hr>
        <div class="countainer card-content w-50">
            <form action="../process/addMovieProcess.php" method="post">
            <table style="width: 100%;">
                <tr>
                <td>
                    <div class="mb-3">
                        <label for="addTitle" class="form-label">Judul Film</label> <input type="text" class="form-control w-100" id="judulFilm" name="judulFilm" width="100%"/>
                    </div>
            </td>
                </tr>
    <tr>
            <td>
                    <div class="mb-3">
                        <label for="addGenre" class="form-label">Genre</label> <input type="text" class="form-control w-100" id="genreFilm" name="genreFilm" width="100%"/>
                    </div>
                </td>
        </tr>
           <tr>
                <td>
                    <div class="mb-3">
                        <label for="addGenre" class="form-label">Tahun Realese</label> <input type="text" class="form-control w-100" id="realeseFilm" name="realeseFilm" width="100%"/>
                    </div>
                </td>
           </tr>
                <tr>
                <td>
                    <div class="mb-3">
                        <label for="addSeason" class="form-label">Season Film</label> <input type="text" class="form-control w-100" id="seasonFilm" name="seasonFilm" width="100%"/>
                    </div>
                </td>
                </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label for="addSynopsis" class="form-label">Synopsis</label> <input type="text" class="form-control w-100" id="synopsisFilm" name="synopsisFilm" width="100%"/>
                    </div>
                </td>
            </tr>
            </table>
            
            <button type="submit" class="btn btn-primary" name="addMovie">Submit</button>
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