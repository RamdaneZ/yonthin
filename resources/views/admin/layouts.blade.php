<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('app/css/style.css?v=1.0.0')}}" rel="stylesheet">
    <title>YONTHIN - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal.css" integrity="sha512-/McvCinmK3R9FGlXhgOuEF4gMqRpK5u8ais4WJEX3utoNrVIM336ftao6YuuopZKaX3K3XtnWBUI5qfrHsHioQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
      <div class="aside-top"><a class="brand-wrap" href="{{ url('admin/dashboard') }}"><img class="logo" style="min-width:unset;width:140px;margin-left: 10px;object-fit:contain" src="{{ asset('logo-dark.png') }}" alt="YONTHIN"></a>
        <div>
          <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
        </div>
      </div>
      <nav>
          <ul class="menu-aside">
            <li class="menu-item"><a class="menu-link" href="{{ url('admin/dashboard') }}"><i class="icon material-icons md-home"></i><span class="text">Tableau de bord</span></a></li>
            <li class="menu-item"><a class="menu-link" href="{{ url('admin/homepage') }}"><i class="icon material-icons md-stars"></i><span class="text">Gestion page d'acceuil</span></a></li>
            <li class="menu-item has-submenu"><a class="menu-link" href="#">
              <svg style="color: #adb5bd;margin-right: 11px;margin-left: 3px;width: 20px;height: 20px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bookmarks-fill" viewBox="0 0 16 16">
                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5z"/>
                <path d="M4.268 1A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L13 13.768V2a1 1 0 0 0-1-1z"/>
              </svg>
              <span class="text">Catégories</span></a>
              <div class="submenu">
                <a href="{{ url('admin/categories/add') }}">Nouvelle catégorie</a>
                <a href="{{ url('admin/categories') }}">Liste des catégories</a>
              </div>
            </li>
            <li class="menu-item has-submenu"><a class="menu-link" href="#">
              <svg style="color: #adb5bd;margin-right: 11px;margin-left: 3px;width: 20px;height: 20px;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"/>
              </svg>
              <span class="text">Produits</span></a>
              <div class="submenu">
                <a href="{{ url('admin/products/add') }}">Nouveau produit</a>
                <a href="{{ url('admin/products') }}">Liste des produits</a>
              </div>
            </li>
            <li class="menu-item"><a class="menu-link" disabled="" href="{{ url('admin/devis') }}"><i class="icon material-icons md-money"></i><span class="text">Devis</span></a></li>
            <li class="menu-item"><a class="menu-link" disabled="" href="{{ url('admin/messages') }}"><i class="icon material-icons md-message"></i><span class="text">Messages</span></a></li>
            <li class="menu-item has-submenu"><a class="menu-link" href="#"><i class="icon material-icons md-person"></i><span class="text">Administrateurs</span></a>
              <div class="submenu">
                <a href="{{ url('admin/admin/add') }}">Nouveau adminstrateur</a>
                <a href="{{ url('admin/admin') }}">Liste d'adminstrateur</a>
              </div>
            </li>
            <li class="menu-item">
              <a class="menu-link" href="{{ url('admin/settings') }}"><i class="material-icons md-settings" style="color: #adb5bd;margin-right: 7px;margin-left: 2px;"></i> <span class="text"> Parametres d'entreprise</span>
              </a>
            </li>
          </ul>
      </nav>
    </aside>
    <main class="main-wrap">
      <header class="main-header navbar" style="min-height: 85px">
        <div class="col-search">
        </div>
        <div class="col-nav">
          <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i class="material-icons md-apps"></i></button>
          <ul class="nav">
            <li class="nav-item"><a class="nav-link btn-icon darkmode" href="#"><i class="material-icons md-nights_stay"></i></a></li>
            <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownAccount" data-bs-toggle="dropdown" href="#" aria-expanded="false"><i class="material-icons md-perm_identity"></i></a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount"><a class="dropdown-item" href="#"><a class="dropdown-item" href="{{ url('admin/profile') }}"><i class="material-icons md-settings"></i>Paramètres</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="{{ url('admin/logout') }}"><i class="material-icons md-exit_to_app"></i>Se déconnecter</a>
              </div>
            </li>
          </ul>
        </div>
      </header>
    @yield('content')
    <footer class="main-footer font-xs">
        <div class="row pb-30 pt-15">
          <div class="col-sm-6">
            <script>document.write(new Date().getFullYear())</script> &copy;,YONTHIN .
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end">All rights reserved</div>
          </div>
        </div>
      </footer>
    </main>
    <script src="{{ asset('app/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('app/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app/js/vendors/select2.min.js') }} "></script>
    <script src="{{ asset('app/js/vendors/perfect-scrollbar.js') }} "></script>
    <script src="{{ asset('app/js/vendors/jquery.fullscreen.min.js') }} "></script>
    <script src="{{ asset('app/js/vendors/chart.js') }} "></script>
    <script src="{{ asset('app/js/main.js?v=1.0.0') }} "></script>
    <script src="{{ asset('app/js/custom-chart.js') }} " type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(document).ready(function(){
          $(".delete").click(function(){
            alert('Voulez-vous vraiment supprimer cet element ?');
          });
      });
    </script>
    @yield('script')
  </body>
</html>
@yield('print')