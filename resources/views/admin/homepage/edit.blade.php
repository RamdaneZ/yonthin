@extends('admin.layouts')
@section('content')
@if($slider->image == null)
    <style>
        .image-content{
            display:none;
        }
    </style>
@else
    <style>
        .video-content{
            display:none;
        }
    </style>
@endif
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
                            <h3>Modifier slider N°{{$slider->id}}</h3>
                        </div>
                        <form class="mt-3" method="POST" action="{{ url('admin/homepage/update/'.$slider->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row gx-3">
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Titre (عربية)</label>
                                            <input name="title_ar" class="form-control" type="text" placeholder="Entrer le titre ici" value="{{ $slider->title_ar }}" required>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Titre (FR)</label>
                                            <input name="title_fr" class="form-control" type="text" placeholder="Entrer le titre ici" value="{{ $slider->title_fr }}" required>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Titre (EN)</label>
                                            <input name="title_en" class="form-control" type="text" placeholder="Entrer le titre ici" value="{{ $slider->title_en }}" required>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Sous-titre (عربية)</label>
                                            <input name="subtitle_ar" class="form-control" type="text" placeholder="Entrer le sous-titre ici" value="{{ $slider->subtitle_ar }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Sous-titre (FR)</label>
                                            <input name="subtitle_fr" class="form-control" type="text" placeholder="Entrer le sous-titre ici" value="{{ $slider->subtitle_fr }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Sous-titre (EN)</label>
                                            <input name="subtitle_en" class="form-control" type="text" placeholder="Entrer le sous-titre ici" value="{{ $slider->subtitle_en }}">
                                        </div>
                                        <hr>
                                    </div>
                        
                                    <h6>Bouton :</h6>
                                    <div class="row gx-3 mt-1">
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Text (عربية)</label>
                                            <input name="btnText_ar" class="form-control" type="text" placeholder="Entrer le texte ici" value="{{ $slider->btnText_ar }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Text (FR)</label>
                                            <input name="btnText_fr" class="form-control" type="text" placeholder="Entrer le texte ici" value="{{ $slider->btnText_fr }}">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Text (EN)</label>
                                            <input name="btnText_en" class="form-control" type="text" placeholder="Entrer le texte ici" value="{{ $slider->btnText_en }}">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Lien</label>
                                            <input name="url" class="form-control" type="url" placeholder="Entrer le lien ici" value="{{ $slider->url }}">
                                        </div>
                                    </div>
                        
                                    <div class="col-lg-8 mb-3">
                                        <label class="form-label image-content">Image</label>
                                        <div class="input-upload image-content">
                                            @if($slider->image != null)
                                                <img src="{{ asset('sliders/'.$slider->image) }}" style="display:block;width:350px;object-fit:contain;max-width:unset;border-radius:10px" alt="Image">
                                            @else
                                                <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            @endif
                                            <input name="image" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                        
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
            </div>
        </div>
    </section>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        let bar = $(".bar");
        let percent  = $(".percent");

        $('form').ajaxForm({
            beforeSend:function(){
                let percentVal = '0%';
                bar.width(percentVal);
                percent.html(percentVal);
            },
            uploadProgress:function(event, position, total, percentComplete){
                var percentVal = percentComplete+'%';
                bar.width(percentVal);
                percent.html(percentVal);
            },
            complete:function(){
                window.location.replace("/admin/homepage");
            }
        });
    });
</script>
@endsection