<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
        <p>Movie</p>
        <a href="{{ route('movie.add') }}" role="button" class="btn btn-success">Add movie</a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>link</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
            @foreach($movies as $movie)

            <tr>
                <td>{{ $movie->name }}</td>
                <td> {{ $movie->type}}</td>
                <td> <img style="width:200px; height=200px" src='{{ $movie->img_src}}'></td>
                <td> {{ $movie->link }}</td>
                <td><span style="font-size: 24px; color: red;">
                    <i class="fas fa-trash"></i>
                </span>
                <span style="font-size: 24px; color: grey;">
                    <i class="fas fa-edit"></i>
                </span></td>
            </tr>
            @endforeach
            </tbody>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>