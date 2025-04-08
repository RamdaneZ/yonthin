@extends('admin.layouts')
@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Modifier produit N {{$id->id}}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="mt-3" method="POST" action="{{ url('admin/products/update/'.$id->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row gx-3">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">Catégorie</label>
                                            <select name="category_id" class="form-control" required>
                                                <option value="" disabled>Veuillez choisir une catégorie</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" @if($category->id == $id->category_id) selected @endif>{{$category->name_fr}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Nom du produit (عربية)</label>
                                            <input name="name_ar" class="form-control" type="text" placeholder="Entrer nom ici" value="{{$id->name_ar}}" required>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Nom du produit (FR)</label>
                                            <input name="name_fr" class="form-control" type="text" placeholder="Entrer nom ici" value="{{$id->name_fr}}" required>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Nom du produit (EN)</label>
                                            <input name="name_en" class="form-control" type="text" placeholder="Entrer nom ici" value="{{$id->name_en}}" required>
                                        </div>
                                        <hr>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Description du produit (عربية)</label>
                                            <textarea name="description_ar" class="form-control" cols="30" rows="10">{{ $id->description_ar ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Description du produit (FR)</label>
                                            <textarea name="description_fr" class="form-control" cols="30" rows="10">{{ $id->description_fr ?? '' }}</textarea>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label">Description du produit (EN)</label>
                                            <textarea name="description_en" class="form-control" cols="30" rows="10">{{ $id->description_en ?? '' }}</textarea>
                                        </div>
                                    </div> <!-- Closing row -->
                                  <div class="row gx-3">
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image</label>
                                        <div class="input-upload">
                                            <img src="{{ asset('storage/products/' . $id->image) }}" alt="Image 1" class="img-thumbnail" style="max-width: 250px;">
                                            <input name="image" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image2</label>
                                        <div class="input-upload">
                                            @if($id->image2)
                                                <img src="{{ asset('storage/products/' . $id->image2) }}" alt="Image 2" class="img-thumbnail" style="max-width: 250px;">
                                            @else
                                                <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            @endif
                                            <input name="image2" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image3</label>
                                        <div class="input-upload">
                                            @if($id->image3)
                                                <img src="{{ asset('storage/products/' . $id->image3) }}" alt="Image 3" class="img-thumbnail" style="max-width: 250px;">
                                            @else
                                                <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            @endif
                                            <input name="image3" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Added Inputs for Image4, Image5, Image6 -->
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image4</label>
                                        <div class="input-upload">
                                            @if($id->image4)
                                                <img src="{{ asset('storage/products/' . $id->image4) }}" alt="Image 4" class="img-thumbnail" style="max-width: 250px;">
                                            @else
                                                <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            @endif
                                            <input name="image4" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image5</label>
                                        <div class="input-upload">
                                            @if($id->image5)
                                                <img src="{{ asset('storage/products/' . $id->image5) }}" alt="Image 4" class="img-thumbnail" style="max-width: 250px;">
                                            @else
                                                <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            @endif
                                            <input name="image5" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image6</label>
                                        <div class="input-upload">
                                            @if($id->image6)
                                                <img src="{{ asset('storage/products/' . $id->image6) }}" alt="Image 6" class="img-thumbnail" style="max-width: 250px;">
                                            @else
                                                <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            @endif
                                            <input name="image6" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Closing row -->
                                 <hr>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Video</label>
                                    <div class="input-upload">
                                        @if($id->video)
                                            <video src="{{ asset('storage/products/videos/' . $id->video) }}" class="img-thumbnail d-block" style="max-width: 250px;" controls></video>
                                        @endif
                                        <input name="video" class="form-control" type="file" accept="video/*">
                                        <div class="progress">
                                            <div class="bar" style="background:#75a8d6"></div><br>
                                            <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="mb-2" id="features-title">What can I do with YONTHIN {category_name}</h4>
                                <div class="row gx-3">
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Description (عربية)</label>
                                        <textarea name="whatCanDoSection_ar" class="form-control" cols="30" rows="10">{{ $id->whatCanDoSection_ar }}</textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Description (FR)</label>
                                        <textarea name="whatCanDoSection_fr" class="form-control" cols="30" rows="10">{{ $id->whatCanDoSection_fr }}</textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Description (EN)</label>
                                        <textarea name="whatCanDoSection_en" class="form-control" cols="30" rows="10">{{ $id->whatCanDoSection_en }}</textarea>
                                    </div>
                                
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Image</label>
                                        <div class="input-upload">
                                            @if($id->whatCanDoSection_image)
                                                <img src="{{ asset('storage/products/whatWeCanDoSection/' . $id->whatCanDoSection_image) }}" alt="what can do" class="img-thumbnail" style="max-width: 250px;">
                                            @else
                                                <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            @endif
                                            <input name="whatCanDoSection_image" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h4 class="mb-2" id="features-title">Product Features</h4>
                                <!-- Language Inputs Wrapper -->
                                <div id="features-wrapper">
                                    @if(!empty($id->product_features_en) && !empty($id->product_features_fr) && !empty($id->product_features_ar))
                                        @php
                                            $features_en = json_decode($id->product_features_en);
                                            $features_fr = json_decode($id->product_features_fr);
                                            $features_ar = json_decode($id->product_features_ar);
                                        @endphp
                                        @foreach($features_en as $index => $feature)
                                            <div class="input-group mb-2">
                                                <div class="form-group">
                                                    <label for="product_features_en">Feature in English</label>
                                                    <input type="text" class="form-control" name="product_features_en[]" id="product_features_en" value="{{ $feature }}" placeholder="Enter a feature" required>
                                                </div>
                                        
                                                <div class="form-group">
                                                    <label for="product_features_fr">Feature in French</label>
                                                    <input type="text" class="form-control" name="product_features_fr[]" id="product_features_fr" value="{{ $features_fr[$index] ?? '' }}" placeholder="Entrez une caractéristique" required>
                                                </div>
                                        
                                                <div class="form-group">
                                                    <label for="product_features_ar">Feature in Arabic</label>
                                                    <input type="text" class="form-control" name="product_features_ar[]" id="product_features_ar" value="{{ $features_ar[$index] ?? '' }}" placeholder="أدخل ميزة" required>
                                                </div>
                                        
                                                <button type="button" class="btn btn-danger remove-feature">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <!-- Add Feature Button -->
                                <button id="add-feature" class="btn btn-info text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">-->
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>-->
                                    </svg> Ajouter
                                </button>
                                <hr>
                                <div id="tables-container">
                                    @foreach ($tables as $index => $table) <!-- Loop through existing tables -->
                                        <div class="table-section mb-4 border p-3 rounded" id="table-{{ $index + 1 }}">
                                            <h4 class="mb-3">{{ $table->name_en }}
                                                <button type="button" class="btn btn-danger btn-sm float-right" onclick="deleteTable({{ $index }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                    </svg>
                                                </button>
                                            </h4>
                                            <!-- Champs de nom du tableau -->
                                            <div class="row mb-2">
                                                <div class="form-group col-md-4">
                                                    <label for="name_en_{{ $index + 1 }}">Nom du tableau (Anglais)</label>
                                                    <input type="text" id="name_en_{{ $index + 1 }}" name="tables[{{ $index }}][name_en]" class="form-control" value="{{ $table->name_en }}" placeholder="Nom du tableau (Anglais)" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name_fr_{{ $index + 1 }}">Nom du tableau (Français)</label>
                                                    <input type="text" id="name_fr_{{ $index + 1 }}" name="tables[{{ $index }}][name_fr]" class="form-control" value="{{ $table->name_fr }}" placeholder="Nom du tableau (Français)" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name_ar_{{ $index + 1 }}">Nom du tableau (Arabe)</label>
                                                    <input type="text" id="name_ar_{{ $index + 1 }}" name="tables[{{ $index }}][name_ar]" class="form-control" value="{{ $table->name_ar }}" placeholder="Nom du tableau (Arabe)" required>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- Ajouter les colonnes -->
                                            <div class="form-group">
                                                <div id="columns_{{ $index + 1 }}">
                                                    @foreach ($table->columns as $colIndex => $column) <!-- Loop through columns of the current table -->
                                                        <div class="column-section mb-3">
                                                            <h6 class="mb-3 text-primary">🧾 Nom de la colonne</h6>
                                                            <div class="row mb-2">
                                                                <div class="col-md-4">
                                                                    <label for="tables[{{ $index }}][columns][{{ $colIndex }}][name_en]">Nom de la colonne (Anglais)</label>
                                                                    <input type="text" name="tables[{{ $index }}][columns][{{ $colIndex }}][name_en]" class="form-control" value="{{ $column->name_en }}" placeholder="Nom de la colonne" required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="tables[{{ $index }}][columns][{{ $colIndex }}][name_fr]">Nom de la colonne (Français)</label>
                                                                    <input type="text" name="tables[{{ $index }}][columns][{{ $colIndex }}][name_fr]" class="form-control" value="{{ $column->name_fr }}" placeholder="Nom de la colonne (Français)" required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="tables[{{ $index }}][columns][{{ $colIndex }}][name_ar]">Nom de la colonne (Arabe)</label>
                                                                    <input type="text" name="tables[{{ $index }}][columns][{{ $colIndex }}][name_ar]" class="form-control" value="{{ $column->name_ar }}" placeholder="Nom de la colonne (Arabe)" required>
                                                                </div>
                                                            </div>
                                                            <h6 class="mb-3 text-success">📋 Lignes de la colonne</h6>
                                                            <!-- Champs pour les lignes de cette colonne -->
                                                            <div id="rows_{{ $index + 1 }}_{{ $colIndex }}" class="mb-2">
                                                                @foreach ($column->columnValues as $valIndex => $value) <!-- Loop through column values -->
                                                                    <div class="row mb-2">
                                                                        <div class="col-md-4">
                                                                            <input type="text" name="tables[{{ $index }}][columns][{{ $colIndex }}][values_en][{{ $valIndex }}]" class="form-control" value="{{ $value->value_en }}" placeholder="Valeur de la ligne (Anglais)" required>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="text" name="tables[{{ $index }}][columns][{{ $colIndex }}][values_fr][{{ $valIndex }}]" class="form-control" value="{{ $value->value_fr }}" placeholder="Valeur de la ligne (Français)" required>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input type="text" name="tables[{{ $index }}][columns][{{ $colIndex }}][values_ar][{{ $valIndex }}]" class="form-control" value="{{ $value->value_ar }}" placeholder="Valeur de la ligne (Arabe)" required>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <button type="button" class="btn btn-secondary btn-sm" onclick="addRow({{ $index }}, {{ $colIndex }})">
                                                                <i class="fas fa-plus"></i> Ajouter une ligne
                                                            </button>
                                                        </div>
                                                        <hr>
                                                    @endforeach
                                                    <button type="button" class="btn btn-warning text-white btn-sm" onclick="addColumn({{ $index }})">
                                                        <i class="fas fa-plus"></i> Ajouter une colonne
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <button type="button" class="btn btn-info text-white mb-3" onclick="addTable()">
                                    <i class="fas fa-plus-circle"></i> Ajouter un tableau
                                </button>
                                
                                <script>
                                    let tableCount = document.querySelectorAll('.table-section').length;
                                
                                    // Ajouter un nouveau tableau avec les champs de langues et colonnes
                                    function addTable() {
                                                                        tableCount++;
                                                                
                                                                        let newTable = `
                                                                            <div class="table-section mb-4 border p-3 rounded" id="table-${tableCount}">
                                                                                <h4 class="mb-3">Tableau ${tableCount}
                                                                                    <button type="button" class="btn btn-danger btn-sm float-right" onclick="deleteTable(${tableCount - 1})">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                                                        </svg>
                                                                                    </button>
                                                                                </h4>
                                                                
                                                                                <div class="row mb-2">
                                                                                    <!-- Champs de nom du tableau -->
                                                                                    <div class="form-group col-md-4">
                                                                                        <label for="name_en_${tableCount}">Nom du tableau (Anglais)</label>
                                                                                        <input type="text" id="name_en_${tableCount}" name="tables[${tableCount - 1}][name_en]" class="form-control" placeholder="Nom du tableau (Anglais)" required>
                                                                                    </div>
                                                                    
                                                                                    <div class="form-group col-md-4">
                                                                                        <label for="name_fr_${tableCount}">Nom du tableau (Français)</label>
                                                                                        <input type="text" id="name_fr_${tableCount}" name="tables[${tableCount - 1}][name_fr]" class="form-control" placeholder="Nom du tableau (Français)" required>
                                                                                    </div>
                                                                    
                                                                                    <div class="form-group col-md-4">
                                                                                        <label for="name_ar_${tableCount}">Nom du tableau (Arabe)</label>
                                                                                        <input type="text" id="name_ar_${tableCount}" name="tables[${tableCount - 1}][name_ar]" class="form-control" placeholder="Nom du tableau (Arabe)" required>
                                                                                    </div>
                                                                                </div>
                                                                
                                                                                <!-- Ajouter des colonnes -->
                                                                                <hr>
                                                                                <div class="form-group">
                                                                                    <h6 class="mb-3 text-primary">🧾 Nom de la colonne</h6>
                                                                                    <div id="columns_${tableCount}">
                                                                                        <div class="column-section mb-3">
                                                                                            <div class="row mb-2">
                                                                                                <div class="col-md-4">
                                                                                                    <label for="tables[${tableCount - 1}][columns][0][name_en]">Nom de la colonne (Anglais)</label>
                                                                                                    <input type="text" name="tables[${tableCount - 1}][columns][0][name_en]" class="form-control" placeholder="Nom de la colonne" required>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label for="tables[${tableCount - 1}][columns][0][name_fr]">Nom de la colonne (Français)</label>
                                                                                                    <input type="text" name="tables[${tableCount - 1}][columns][0][name_fr]" class="form-control" placeholder="Nom de la colonne (Français)" required>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <label for="tables[${tableCount - 1}][columns][0][name_ar]">Nom de la colonne (Arabe)</label>
                                                                                                    <input type="text" name="tables[${tableCount - 1}][columns][0][name_ar]" class="form-control" placeholder="Nom de la colonne (Arabe)" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <h6 class="mb-3 text-success">📋 Lignes de la colonne</h6>
                                                                                            <!-- Champs pour les lignes de cette colonne -->
                                                                                            <div id="rows_${tableCount}_${0}" class="mb-2">
                                                                                                <div class="row mb-2">
                                                                                                    <div class="col-md-4">
                                                                                                        <input type="text" name="tables[${tableCount - 1}][columns][0][values_en][0]" class="form-control" placeholder="Valeur de la ligne (Anglais)" required>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <input type="text" name="tables[${tableCount - 1}][columns][0][values_fr][0]" class="form-control" placeholder="Valeur de la ligne (Français)" required>
                                                                                                    </div>
                                                                                                    <div class="col-md-4">
                                                                                                        <input type="text" name="tables[${tableCount - 1}][columns][0][values_ar][0]" class="form-control" placeholder="Valeur de la ligne (Arabe)" required>
                                                                                                    </div>
                                                                                                    <button type="button" class="btn btn-danger btn-sm mt-1" style="width:fit-content;margin:auto" onclick="deleteRow(this)">
                                                                                                        <i class="fas fa-trash"></i> Supprimer la ligne
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button type="button" class="btn btn-secondary btn-sm" onclick="addRow(${tableCount - 1}, 0)">
                                                                                                <i class="fas fa-plus"></i> Ajouter une ligne
                                                                                            </button>
                                                                                            <hr>
                                                                                        </div>
                                                                                    </div>
                                                                                    <button type="button" class="btn btn-warning text-white btn-sm" onclick="addColumn(${tableCount - 1})">
                                                                                        Ajouter une colonne
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        `;
                                                                        document.getElementById('tables-container').insertAdjacentHTML('beforeend', newTable);
                                                                    }
                                
                                    // Supprimer un tableau spécifique
                                    function deleteTable(tableIndex) {
                                        let table = document.getElementById(`table-${tableIndex + 1}`);
                                        table.remove();
                                    }
                                
                                    // Supprimer une ligne
                                    function deleteRow(button) {
                                        const rowGroup = button.closest('.row.mb-2');
                                        if (rowGroup) {
                                            rowGroup.remove();
                                        }
                                    }
                                
                                    // Supprimer une colonne
                                    function deleteColumn(button) {
                                        const columnSection = button.closest('.column-section');
                                        if (columnSection) {
                                            columnSection.remove();
                                        }
                                    }
                                
                                    // Ajouter une ligne
                                    function addRow(tableIndex, columnIndex) {
                                        const rowsContainer = document.getElementById(`rows_${tableIndex + 1}_${columnIndex}`);
                                        const rowCount = rowsContainer.querySelectorAll('.row.mb-2').length;
                                
                                        const rowHTML = `
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <input type="text" name="tables[${tableIndex}][columns][${columnIndex}][values_en][${rowCount}]" class="form-control" placeholder="Valeur de la ligne (Anglais)" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="tables[${tableIndex}][columns][${columnIndex}][values_fr][${rowCount}]" class="form-control" placeholder="Valeur de la ligne (Français)" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="tables[${tableIndex}][columns][${columnIndex}][values_ar][${rowCount}]" class="form-control" placeholder="Valeur de la ligne (Arabe)" required>
                                                </div>
                                                <button type="button" class="btn btn-danger btn-sm mt-1" style="width:fit-content;margin:auto" onclick="deleteRow(this)">
                                                    <i class="fas fa-trash"></i> Supprimer la ligne
                                                </button>
                                            </div>
                                        `;
                                
                                        rowsContainer.insertAdjacentHTML('beforeend', rowHTML);
                                    }
                                
                                    // Ajouter une colonne
                                    function addColumn(tableIndex) {
                                        const columnsContainer = document.getElementById(`columns_${tableIndex + 1}`);
                                        const columnCount = columnsContainer.querySelectorAll('.column-section').length;
                                
                                        const columnHTML = `
                                            <div class="column-section mb-3">
                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                        <label for="tables[${tableIndex}][columns][${columnCount}][name_en]">Nom de la colonne (Anglais)</label>
                                                        <input type="text" name="tables[${tableIndex}][columns][${columnCount}][name_en]" class="form-control" placeholder="Nom de la colonne (Anglais)" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="tables[${tableIndex}][columns][${columnCount}][name_fr]">Nom de la colonne (Français)</label>
                                                        <input type="text" name="tables[${tableIndex}][columns][${columnCount}][name_fr]" class="form-control" placeholder="Nom de la colonne (Français)" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="tables[${tableIndex}][columns][${columnCount}][name_ar]">Nom de la colonne (Arabe)</label>
                                                        <input type="text" name="tables[${tableIndex}][columns][${columnCount}][name_ar]" class="form-control" placeholder="Nom de la colonne (Arabe)" required>
                                                    </div>
                                                </div>
                                                <h6 class="mb-3 text-success">📋 Lignes de la colonne</h6>
                                                <div id="rows_${tableIndex + 1}_${columnCount}">
                                                    <!-- Lignes ajoutées ici -->
                                                </div>
                                                <button type="button" class="btn btn-secondary btn-sm" onclick="addRow(${tableIndex}, ${columnCount})">
                                                    Ajouter une ligne
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm mt-2" onclick="deleteColumn(this)">
                                                    Supprimer la colonne
                                                </button>
                                            </div>
                                        `;
                                
                                        columnsContainer.insertAdjacentHTML('beforeend', columnHTML);
                                    }
                                
                                </script>

                                </div> <!-- Closing col-lg-12 -->
                            </div> <!-- Closing row -->
                            <br>
                            <button class="btn btn-primary" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
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
