<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Relation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">CRUD Relation MUSIC</a>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
      
      <div class="d-grid gap-2">
        <a href="add-music" class="btn btn-primary" type="button">Add Music</a>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Cover</th>
            <th scope="col">Music Title</th>
            <th scope="col">Artist Name</th>
            <th scope="col">Year</th>
            <th scope="col">Link</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($list_music as $index => $music)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>
              <img src="{{asset('storage/' . $music->image_path)}}" style="width: 200px; height: 200px;" alt="{{ $music->title }}">
            </td>
            <td>{{ $music -> title }}</td>
            <td>{{ $music -> artist -> artist_name }}</td>
            <td>{{ $music -> year }}</td>
            <td><a href="{{ $music -> link }}" target="_blank" rel="noopener noreferrer">
            Visit Link</a></td>
            <th>
              <form action="" method="post">
                @csrf
                <a type="submit" class="btn btn-danger" href="/delete-music/{{ $music -> id }}">Delete</a>
              </form>
            </th>
            <th>
              <a type="button" class="btn btn-warning" href="/update-music-page/{{ $music -> id }}">Update</a>
            </th>
          </tr>
          @empty
            <p>Maaf musik tidak ada</p>
          @endforelse
        </tbody>
      </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
