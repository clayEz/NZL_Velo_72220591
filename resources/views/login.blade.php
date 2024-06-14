<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title> Form Login </title>
  </head>
  <body>
    <div class="container-fluid" style="margin-top: 15%">
        <div class="row justify-content-center">
            <div class="col-md-3 bg-dark">
                <div class="card">
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <img class="img mx-auto d-block" src="https://cdn.discordapp.com/attachments/779217463363239956/1249339513453416569/NZLVELO.jpg?ex=6666f197&is=6665a017&hm=bb895cf7f83ff36405a135f4a5ff3f28c2326f690c3edbef90ba69836c615f51&" width="150" alt="">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Masukkan Email" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Masukkan Password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>