@extends('admin.layouts')
@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Cotation N°{{$id->id}}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row gx-3">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Nom</label>
                                <h5>{{$id->name}}</h5>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Nom de société</label>
                                <h5>{{$id->societe_name}}</h5>
                            </div>
                          <hr>
                        </div>
                        <div class="row gx-3">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">N°téléphone</label>
                                <h5>{{$id->phone}}</h5>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Email</label>
                                <h5><a href="mailto:{{$id->email}}">{{$id->email}}</a></h5>
                            </div>
                          <hr>
                        </div>
                        <div class="row gx-3">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">De : </label>
                                <h5>{{$id->from}}</h5>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">A :</label>
                                <h5>{{$id->to}}</h5>
                            </div>
                          <hr>
                        </div>
                        <div class="row gx-3">
                            <div class="col-lg-4 mb-3">
                                <label class="form-label">Conditionement : </label>
                                <h5>{{$id->conditionement}}</h5>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label class="form-label">Type :</label>
                                <h5>{{$id->type ?? " - "}}</h5>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label class="form-label">Incoterm :</label>
                                <h5>{{$id->incoterm ?? " - "}}</h5>
                            </div>
                          <hr>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Description de la marchandise</label>
                            <h6>{{$id->description ?? " - "}}</h6>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Commentaire</label>
                            <h6>{{$id->comment ?? ' - '}}</h6>
                        </div>
                        <a href="{{ url('admin/cotations/delete/'.$id->id) }}" class="btn btn-danger font-sm hover-up mt-3 w-50"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg> Supprimer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
