@extends('admin.layouts')
@section('content')
<style>
    .video-content{
        display:none;
    }
</style>
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Gestion Page d'acceuil</h2>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-header" style="padding-left: 0;">
                        <h3>Creér un slider</h3>
                    </div>
                    <form class="mt-3" method="POST" action="{{ url('admin/homepage/store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row gx-3">
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Titre (عربية)</label>
                                        <input name="title_ar" class="form-control" type="text" placeholder="Entrer le titre ici">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Titre (FR)</label>
                                        <input name="title_fr" class="form-control" type="text" placeholder="Entrer le titre ici">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Titre (EN)</label>
                                        <input name="title_en" class="form-control" type="text" placeholder="Entrer le titre ici">
                                    </div>
                                </div>
                                <hr>
                                <div class="row gx-3">
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Sous-titre (عربية)</label>
                                        <input name="subtitle_ar" class="form-control" type="text" placeholder="Entrer le sous-titre ici">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Sous-titre (FR)</label>
                                        <input name="subtitle_fr" class="form-control" type="text" placeholder="Entrer le sous-titre ici">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Sous-titre (EN)</label>
                                        <input name="subtitle_en" class="form-control" type="text" placeholder="Entrer le sous-titre ici">
                                    </div>
                                </div>
                                <hr>
                                <h6>Bouton :</h6>
                                <div class="row gx-3 mt-1">
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Text (عربية)</label>
                                        <input name="btnText_ar" class="form-control" type="text" placeholder="Entrer le text ici">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Text (FR)</label>
                                        <input name="btnText_fr" class="form-control" type="text" placeholder="Entrer le text ici">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Text (EN)</label>
                                        <input name="btnText_en" class="form-control" type="text" placeholder="Entrer le text ici">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Lien</label>
                                        <input name="url" class="form-control" type="url" placeholder="Entrer le lien ici">
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-8 mb-3">
                                    <label class="form-label image-content">Image</label>
                                    <div class="input-upload image-content">
                                        <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                        <input id="img-input" name="image" class="form-control" type="file" accept="image/*" required>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-primary" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg> Confirmer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Titre</th>
                                            <th>Sous-titre</th>
                                            <th>Date</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $slider)
                                            <tr>
                                                <td><img width="100px" height="50px" style="object-fit:cover;border-radius:10px;margin-bottom: -20px;" src="{{ asset('storage/sliders/'.$slider->image) }}"></td> 
                                                <td><b>{{$slider->title_fr}}</b></td>
                                                <td><b>{{$slider->subtitle_fr}}</b></td>
                                                <td>{{$slider->created_at}}</td>
                                                <td class="text-end">
                                                    <a href="{{ url('admin/homepage/edit/'.$slider->id) }}" class="btn btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                        </svg> Éditer
                                                    </a>
                                                    <button onclick="deleteItem({{ $slider->id }})" class="btn btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5V2h-11V1zm1 2h8v11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V3zM4 3v11h8V3H4z"/>
                                                        </svg> Supprimer
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function deleteItem(id) {
        if (confirm("Êtes-vous sûr de vouloir supprimer cet élément ?")) {
            window.location.href = "{{ url('admin/homepage/delete/') }}/" + id;
        }
    }
</script>

@endsection