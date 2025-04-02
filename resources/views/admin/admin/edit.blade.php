@extends('admin.layouts')
@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Modifier administrateur N°{{$admin->id}}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="mt-3" method="POST" action="{{ url('admin/admin/update/'.$admin->id) }}">
                            @csrf
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="row gx-3">
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Nom d'utilisateur</label>
                                        <input name="username" class="form-control" type="text" placeholder="Entrer nom d'utilisateur ici" value="{{$admin->username}}" required>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Mot de passe</label>
                                        <input name="password" class="form-control" type="text" placeholder="Entrer mot de passe ici" value="{{$admin->password}}" required>
                                    </div>
                                  <hr>
                                </div>
                              </div>
                            </div><br>
                            <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg> Confirmer
                            </button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
