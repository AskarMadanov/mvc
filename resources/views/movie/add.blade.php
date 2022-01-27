<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label >Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Enter a Name"/>
                </div>
                <div class="form-group">
                    <label >Type</label>
                    <input class="form-control" type="text" name="type" placeholder="Enter a Name"/>
                </div>
                <div class="form-group">
                    <label >Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image_src" placeholder="upload a file">
                        </div>
                    </div>
                    <!-- <input class="form-control" type="text" name="image" placeholder="Enter a Name"/> -->
                </div>
                <div class="form-group">
                    <label >Link</label>
                    <input class="form-control" type="text" name="link" placeholder="Enter a Name"/>
                </div>
            </div>
            
            
            <button type="Submit">Submit</button>
        </form>
</body>
</html>