<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form action="<?= base_url('/add');?>" method="post">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Penulis</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama anda" name='nama'>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='content'></textarea>
    </div>
    <div class="mb-3">
    <input type="submit" class="btn btn-primary" id="exampleFormControlInput1"  name='submit'>
    </div>
    </form>
    
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>