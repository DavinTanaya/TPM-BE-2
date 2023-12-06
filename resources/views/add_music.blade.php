<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">CR MUSIC</a>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
  </nav>
      
    <form method="POST" action="/post-add-music">
        @csrf
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputTitle">
        </div>
        <div class="mb-3">
            <label for="exampleInputArtist" class="form-label">Artist</label>
            <input type="text" name="artist" class="form-control" id="exampleInputArtist">
        </div>
        <div class="mb-3">
            <label for="exampleInputYear" class="form-label">Release Year</label>
            <input type="number" name="year" class="form-control" id="exampleInputYear">
        </div>  
        <div class="mb-3">
            <label for="exampleInputLink" class="form-label">Link</label>
            <input type="text" name="link" class="form-control" id="exampleInputLink">
        </div>     
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
