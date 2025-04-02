<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('app/css/style.css?v=1.0.0')}}" rel="stylesheet">
    <title>YONTHIN - Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('animation.css') }}" />
  </head>
  <body>
    <main style="margin-left:0!important" class="main-wrap pt-4">
      <section class="content-main">
        <img class="mx-auto d-block" src="{{ asset('logo-dark.png') }}" width="300px" alt="Yonthin">
        <div class="card mt-35 mx-auto card-login">
          <div class="card-body">
            <h3 class="card-title mb-4 text-center">Admin</h3>
            <form action="{{ url('admin/login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input name="username" class="form-control" placeholder="Nom d'utilisateur" type="text" required>
                    @error('username')
                        <strong class="d-block text-danger mt-2">{{ $message }}</strong>
                    @enderror 
                </div>
                <div class="mb-3">
                    <input name="password" class="form-control" placeholder="Mot de passe" type="password" required>
                    @error('password')
                    <strong class="d-block text-danger mt-2">{{ $message }}</strong>
                    @enderror 
                </div>
                <div class="mb-2">
                <button class="btn btn-primary w-100" type="submit"> Se connecter</button>
                </div>
            </form>
          </div>
        </div>
      </section>
      <footer class="main-footer font-xs">
        <div class="row pb-30 pt-15">
          <div class="col-sm-6">
            <script>document.write(new Date().getFullYear())</script> &copy;, YONTHIN
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end">Tous les droits sont réservés</div>
          </div>
        </div>
      </footer>
    </main>
    <script>
        const myTimeout = setTimeout(fadeout, 7000);
        
        function fadeout() {
          document.getElementById("scene").remove();
        }
    </script>
    <script src="{{ asset('app/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('app/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app/js/vendors/select2.min.js') }} "></script>
    <script src="{{ asset('app/js/vendors/perfect-scrollbar.js') }} "></script>
    <script src="{{ asset('app/js/vendors/jquery.fullscreen.min.js') }} "></script>
    <script src="{{ asset('app/js/vendors/chart.js') }} "></script>
    <script src="{{ asset('app/js/main.js?v=1.0.0') }} "></script>
    <script src="{{ asset('app/js/custom-chart.js') }} " type="text/javascript"></script>
  </body>
</html>