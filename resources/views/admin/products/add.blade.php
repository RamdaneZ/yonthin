@extends('admin.layouts')
@section('content')
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Nouveau produit</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="mt-3" method="POST" action="{{ url('admin/products/store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="row gx-3">
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Catégorie</label>
                                        <select name="category_id" class="form-control" id="category-select" required>
                                            <option value="" disabled selected>Veuillez choisir une catégorie</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" data-name="{{ $category->name_fr }}">{{ $category->name_fr }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Nom du produit (عربية)</label>
                                        <input name="name_ar" class="form-control" type="text" placeholder="Entrer nom ici" required>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Nom du produit (FR)</label>
                                        <input name="name_fr" class="form-control" type="text" placeholder="Entrer nom ici" required>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Nom du produit (EN)</label>
                                        <input name="name_en" class="form-control" type="text" placeholder="Entrer nom ici" required>
                                    </div>
                                <hr>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Description du produit (عربية)</label>
                                        <textarea name="description_ar" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Description du produit (FR)</label>
                                        <textarea name="description_fr" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Description du produit (EN)</label>
                                        <textarea name="description_en" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                <hr>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Liste d'avantages (عربية)</label>
                                    <input name="adv_ar" class="form-control" type="text" placeholder="Entrer ici">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Liste d'avantages (FR)</label>
                                    <input name="adv_fr" class="form-control" type="text" placeholder="Entrer ici">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Liste d'avantages (EN)</label>
                                    <input name="adv_en" class="form-control" type="text" placeholder="Entrer ici">
                                </div>
                                <hr>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image</label>
                                        <div class="input-upload">
                                            <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            <input name="image" class="form-control" type="file" accept="image/*" required>
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image2</label>
                                        <div class="input-upload">
                                            <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
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
                                            <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            <input name="image3" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Image4</label>
                                        <div class="input-upload">
                                            <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
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
                                            <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
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
                                            <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            <input name="image6" class="form-control" type="file" accept="image/*">
                                            <div class="progress">
                                                <div class="bar" style="background:#75a8d6"></div><br>
                                                <div class="percent" style="position:absolute;left: 50%;color: white;">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Video</label>
                                    <div class="input-upload">
                                        <input name="video" class="form-control" type="file">
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
                                        <textarea name="whatCanDoSection_ar" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Description (FR)</label>
                                        <textarea name="whatCanDoSection_fr" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Description (EN)</label>
                                        <textarea name="whatCanDoSection_en" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Image</label>
                                        <div class="input-upload">
                                            <img src="{{ asset('app/imgs/theme/upload.svg') }}" alt="Image">
                                            <input name="whatCanDoSection_image" class="form-control" type="file" accept="image/*" required>
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
                                    <div class="input-group mb-2">
                                       <div class="form-group">
                                          <label for="product_features_en">Feature in English</label>
                                          <input type="text" class="form-control" name="product_features_en[]" id="product_features_en" placeholder="Enter a feature" required>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="product_features_fr">Feature in French</label>
                                          <input type="text" class="form-control" name="product_features_fr[]" id="product_features_fr" placeholder="Entrez une caractéristique" required>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="product_features_ar">Feature in Arabic</label>
                                          <input type="text" class="form-control" name="product_features_ar[]" id="product_features_ar" placeholder="أدخل ميزة  " required>
                                        </div>

                                        <button type="button" class="btn btn-danger remove-feature">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Add Feature Button -->
                                <button id="add-feature" class="btn btn-info text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">-->
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>-->
                                    </svg> Ajouter
                                </button>
                                <hr>
                                <div id="tables-container">
                                    <div class="table-section mb-4 border p-3 rounded" id="table-1">
                                        <h4 class="mb-3">Tableau 1
                                            <button type="button" class="btn btn-danger btn-sm float-right" onclick="deleteTable(0)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                                </svg>
                                            </button>
                                        </h4>
                                        <!-- Champs de nom du tableau -->
                                        <div class="row mb-2">
                                            <div class="form-group col-md-4">
                                                <label for="name_en_1">Nom du tableau (Anglais)</label>
                                                <input type="text" id="name_en_1" name="tables[0][name_en]" class="form-control" placeholder="Nom du tableau (Anglais)" required>
                                            </div>
                                
                                            <div class="form-group col-md-4">
                                                <label for="name_fr_1">Nom du tableau (Français)</label>
                                                <input type="text" id="name_fr_1" name="tables[0][name_fr]" class="form-control" placeholder="Nom du tableau (Français)" required>
                                            </div>
                                
                                            <div class="form-group col-md-4">
                                                <label for="name_ar_1">Nom du tableau (Arabe)</label>
                                                <input type="text" id="name_ar_1" name="tables[0][name_ar]" class="form-control" placeholder="Nom du tableau (Arabe)" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- Ajouter les colonnes -->
                                        <div class="form-group">
                                            <h5 class="mb-2">Colonnes pour le tableau 1</h5>
                                            <div id="columns_1">
                                                <div class="column-section mb-3">
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <label for="tables[0][columns][0][name]">Nom de la colonne (Anglais)</label>
                                                            <input type="text" name="tables[0][columns][0][name_en]" class="form-control" placeholder="Nom de la colonne" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="tables[0][columns][0][name_fr]">Nom de la colonne (Français)</label>
                                                            <input type="text" name="tables[0][columns][0][name_fr]" class="form-control" placeholder="Nom de la colonne (Français)" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="tables[0][columns][0][name_ar]">Nom de la colonne (Arabe)</label>
                                                            <input type="text" name="tables[0][columns][0][name_ar]" class="form-control" placeholder="Nom de la colonne (Arabe)" required>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Champs pour les lignes de cette colonne -->
                                                    <div id="rows_1_0" class="mb-2">
                                                        <div class="row mb-2">
                                                            <div class="col-md-4">
                                                                <input type="text" name="tables[0][columns][0][values_en][0]" class="form-control" placeholder="Valeur de la ligne (Anglais)" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="tables[0][columns][0][values_fr][0]" class="form-control" placeholder="Valeur de la ligne (Français)" required>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="tables[0][columns][0][values_ar][0]" class="form-control" placeholder="Valeur de la ligne (Arabe)" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary btn-sm" onclick="addRow(0, 0)">
                                                        <i class="fas fa-plus"></i> Ajouter une ligne
                                                    </button>
                                                </div>
                                                <hr>
                                            </div>
                                            <button type="button" class="btn btn-warning text-white btn-sm" onclick="addColumn(0)">
                                                <i class="fas fa-plus"></i> Ajouter une colonne
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="button" class="btn btn-info text-white mb-3" onclick="addTable()">
                                    <i class="fas fa-plus-circle"></i> Ajouter un tableau
                                </button>
                                
                                <script>
                                    function addRow(tableIndex, columnIndex) {
                                        const rowsContainerId = `rows_${tableIndex + 1}_${columnIndex}`;
                                        const container = document.getElementById(rowsContainerId);
                                
                                        // Count existing rows to determine the new index
                                        const rowCount = container.querySelectorAll('.row').length;
                                
                                        const rowHtml = `
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
                                            </div>
                                        `;
                                
                                        container.insertAdjacentHTML('beforeend', rowHtml);
                                    }
                                </script>
                                
                                
                                
                                                                 
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
@section('script')
<script>
    $(document).ready(function(){
        let bar = $(".bar");
        let percent  = $(".percent");

        // $('form').ajaxForm({
        //     beforeSend:function(){
        //         let percentVal = '0%';
        //         bar.width(percentVal);
        //         percent.html(percentVal);
        //     },
        //     uploadProgress:function(event, position, total, percentComplete){
        //         var percentVal = percentComplete+'%';
        //         bar.width(percentVal);
        //         percent.html(percentVal);
        //     },
        //     complete:function(){
        //         window.location.replace("/admin/products");
        //     }
        // });

       $('#add-feature').click(function(e) {
            e.preventDefault();
            $('#features-wrapper').append(`
                <div class="input-group mb-2">
                    <div class="form-group">
                        <label for="product_features_en[]">Feature in English</label>
                        <input type="text" class="form-control" name="product_features_en[]" placeholder="Enter a feature in English" required>
                    </div>
                    <div class="form-group">
                        <label for="product_features_fr[]">Feature in French</label>
                        <input type="text" class="form-control" name="product_features_fr[]" placeholder="Enter a feature in French" required>
                    </div>
                    <div class="form-group">
                        <label for="product_features_ar[]">Feature in Arabic</label>
                        <input type="text" class="form-control" name="product_features_ar[]" placeholder="Enter a feature in Arabic" required>
                    </div>
                    <button type="button" class="btn btn-danger remove-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                        </svg>
                    </button>
                </div>
            `);
        });
        
        // Remove feature inputs when the trash button is clicked
        $(document).on('click', '.remove-feature', function() {
            $(this).closest('.input-group').remove();
        });
            
        $('#category-select').on('change', function() {
            // Get the selected category name using the data-name attribute
            var categoryName = $(this).find('option:selected').data('name');
            
            // Update the title with the selected category name
            $('#features-title').text('What can I do with YONTHIN ' + categoryName);
        });

    });
</script>
@endsection