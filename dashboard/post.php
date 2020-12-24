<?php 
require 'header.php';

?>

<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1>New Post</h1>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-7 col-md-offset-2 main">  
        <form>
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" name="Title" class="form-control" id="Title" aria-describedby="emailHelp" placeholder="new title">
                </div>
            
                <label for="categorie">Categorie</label>
                <select class="form-control" name="categorie" id="categorie"></select>
                
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" rows="3"></textarea>
            
                <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control" id="exampleInputFile" >
            </div>
            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>

    <div class="col-md-2">  
        <form action="">
            <div class="form-group">
            <label for="new_categorie">New categorie</label>
                <input type="text" name="new_categorie" class="form-control" id="new_categorie"  placeholder="new categorie">
            </div>
            <button type="submit" id="submit_categorie" class="btn btn-primary btn-block">save</button>
        </form>
    </div>
    </div>
</main>
<!-- /.container -->


    <?php
    require 'footer.php';
    ?>
    
  </body>
</html>
