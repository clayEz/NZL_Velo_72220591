<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      html, body {
        height: 100%;
      }
      .container-fluid {
        flex: 1;
      }
      .content {
        flex: 1 0 auto;
      }
      footer {
        flex-shrink: 0;
      }
    </style>
    <title>. :NzlVelo - @yield('title'): .</title>
  </head>
  <body class="d-flex flex-column">
    <div class="container-fluid d-flex flex-column">
        <div class="row">
            <div class="col-md-12 bg-secondary py-4">
              <div class="dropdown float-right">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-person-fill"></i> User
                </button>
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> {{ Auth::user()->name ?? "" }}</a>
                  <a class="dropdown-item" href="/user">Change Password</a>
                  <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-left"></i> Logout</a>
                </div>
              </div>
            </div>
        </div>

        <div class="row flex-grow-1">
            <div class="col-md-2 vh-100">
                <div class="row mt-4">
                    <div class="col-3">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{ ($key == "Home") ? "active":"" }}" id="v-pills-home-tab" href="/">Home</a>
                        <a class="nav-link {{ ($key == "sepeda") ? "active":"" }}" id="v-pills-profile-tab" href="/sepeda">Bikes</a>
                        <a class="nav-link" id="v-pills-messages-tab" href="#">About</a>
                        <a class="nav-link" id="v-pills-settings-tab" href="#">FAQ</a>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col-md-10 bg-dark content">
                <div class="card mt-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @yield('artikel')
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-secondary py-3">
        <p class="text-center mb-0">
            template by
            <a href="#" class="footer-link">Novaldi Hasiholan</a>
        </p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
      new DataTable('#example');
    </script>
  </body>
</html>
