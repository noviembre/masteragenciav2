@extends('admin.layouts.template')


@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Crear Post</h4>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="row">
                    <div class="col-12">
                            @include('admin.errors')
                    </div>
                </div>


                {{Form::open([
                    'route'	=> 'posts.store',
                    'files'	=>	true ])}}
                <div class="row">



                    <!-- col-md-6 -->
                    <div class="col-md-6 col-12">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Titulo</label>
                                <input name="title" value="{{old('title')}}" type="text" class="form-control" placeholder="City Tour">
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Duracion 1:</label>
                                        <input name="duracion1" value="{{old('duracion1')}}" type="text" class="form-control" placeholder="Medio">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Duracion 2</label>
                                        <input name="duracion2" value="{{old('duracion2')}}" type="text" class="form-control" placeholder="Dia">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputFile">Imagen:</label>
                                <input name="image" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">
                                    Sube una Imagen (Opcional)
                                </small>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleTextarea">Descripcion</label>
                                <textarea name="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                        </div>

                    </div>




                    <!-- col-md-6 -->
                    <div class="col-md-6 col-12 padd-top-20">

                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 col-12">

                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input name="is_featured" type="checkbox" class="form-check-input">
                                               Visible
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">

                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input name="status" type="checkbox" class="form-check-input"> Activo
                                            </label>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>

                        <!-- col-md-12 -->
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-5 col-12">

                                    <label>Precio</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">$.</span>
                                        <input name="price" value="{{old('price')}}" type="text" class="form-control" aria-label="Dolares">
                                        <span class="input-group-addon">.00</span>
                                    </div>

                                </div>

                                <div class="col-md-7 col-12">

                                    <div class="form-group">
                                        <label>Categoria:</label>
                                        {{Form::select('category_id',
                                $categories,
                                null,
                                ['class' => 'form-control select2'])
                            }}
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <div class="form-group">

                                <label>Etiquetas</label>

                                {{Form::select('tags[]',
    $tags,
    null,
    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Elige una etiqueta'])
}}



                            </div>
                        </div>

                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <div class="form-group">

                                <button class="btn btn-primary pull-right" type="submit">Guardar</button>
                            </div>


                        </div>
                        <!-- col-md-12 -->

                    </div>


                </div>












                <div class="row">



                    <!-- col-md-6 -->
                    <div class="col-md-6 col-12">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label><b>Itinerario:</b></label>
                                <input name="title" value="{{old('title')}}" type="text" class="form-control" placeholder="City Tour">
                            </div>
                        </div>

                    </div>



                </div>

                {{Form::close()}}

            </div>
        </div>
    </div>
@stop

@section('styles')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.min.css') }}">


@stop

@section('scripts')

    <!-- Select2 -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- Advance Form Element -->
    <script src="{{ asset('assets/dist/js/custom/form-element.js') }}"></script>

@stop