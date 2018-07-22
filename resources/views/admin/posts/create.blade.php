

@extends('layouts.template')

@section('content')

    <!-- Top starts-->
    <div class="row page-titles">
        <div class="col-md-4 align-self-center">
            <h4 class="theme-cl">Crear un Nuevo Tour</h4>
        </div>

        <div class="col-md-8 text-right">

            <div class="btn-group mr-lg-2">
                <a href="{{ route('posts') }}" class="btn btn-default">
                    Volver
                </a>
            </div>

        </div>
    </div>
    <!-- Top ends-->


    <!-- Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="row">
                        <!-- col-md-6 -->


                        <div class="col-md-6 col-12">
                            <br>
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label><b>Nombre:</b></label>
                                            <input name="titulo" type="text" class="form-control" placeholder="Cusco Magico" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label><b>Duracion 1:</b></label>
                                            <input name="duracion1" type="text" class="form-control" placeholder="8 Dias" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <div class="form-group">
                                            <label><b>Duracion 2:</b></label>
                                            <input name="duracion2" type="text" class="form-control" placeholder="7 Noches" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><b>Categoria:</b></label>
                                    <select name="category_id" id="category" class="custom-select mb-2 form-control" required>
                                        @foreach($categories as $category)

                                            <option value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>

                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><b>Descripcion:</b></label>

                                    <textarea name="contenido" rows="5" class="form-control" placeholder="Breve Descripcion del tour" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><b>Imagen:</b></label>
                                    <input name="featured" type="file" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label><b>Soles:</b></label>
                                            <input name="soles" type="number" class="form-control" min="1" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label><b>Dolares:</b></label>
                                            <input name="dolares" type="number" class="form-control" min="1" required>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <!-- col-md-6 -->
                        <div class="col-md-6 col-12 padd-top-20">

                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><b>Etiquetas:</b></label>
                                    @foreach($tags as $tag)
                                        <p>
                                    <span class="custom-checkbox">
                                        <input value="{{ $tag->id }}" name="tags[]" type="checkbox" id="checkbox1">
                                        <label for=""></label> {{ $tag->tag }}
                                    </span>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                            <!-- col-md-12 -->

                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                @include('admin.includes.errors')
                            </div>
                            <!-- col-md-12 -->

                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Guardar" class="btn waves-effect waves-light btn-rounded btn-outline-success">
                                </div>
                            </div>
                            <!-- col-md-12 -->

                        </div>


                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- ./row -->
@stop

