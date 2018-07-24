@extends('admin.layouts.template')


@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Editar Post</h4>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="row">
                    @include('admin.errors')
                </div>

                {{Form::open([
            'route'	=>	['posts.update', $post->id],
            'files'	=>	true,
            'method'	=>	'put'
        ])}}
                <div class="row">



                    <!-- col-md-6 -->
                    <div class="col-md-6 col-12">

                        <div class="form-group">
                            <div class="contact-img">
                                <img src="{{$post->getImage()}}" class="img-circle img-responsive" alt="">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Titulo</label>
                                <input name="title" value="{{$post->title}}" type="text" class="form-control" placeholder="Titulo">
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Duracion 1:</label>
                                        <input name="duracion1" value="{{$post->duracion1}}" type="text" class="form-control" placeholder="Full">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Duracion 2</label>
                                        <input name="duracion2" value="{{$post->duracion2}}" type="text" class="form-control" placeholder="Day">
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
                                <textarea name="description" class="form-control" id="exampleTextarea" rows="3">{{ $post->description }}</textarea>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group">
                                <label>Category:</label>

                                {{Form::select('category_id',
                                $categories,
                              $post->getCategoryID(),
                                ['class' => 'form-control select2'])
                            }}

                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nation</label>
                                <input type="text" class="form-control" placeholder="Canada">
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
                                                {{Form::checkbox('is_featured', '1', $post->is_featured, ['class'=>'minimal'])}}
                                            </label>
                                            <label>visible</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6 col-12">

                                    <div class="form-group">
                                        <label>
                                            {{Form::checkbox('status', '1', $post->status, ['class'=>'minimal'])}}
                                        </label>
                                        <label>Activo</label>

                                    </div>


                                </div>
                            </div>

                        </div>
                        <!-- col-md-12 -->

                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Fake Date</label>
                                <input  value="{{old('date')}}" type="date" class="form-control" >
                            </div>
                        </div>
                        <!-- col-md-12 -->

                        <!-- col-md-12 -->
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Precio</label>
                                        <input value="{{$post->price}}" name="price" type="text" class="form-control" placeholder="S/.">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" placeholder="https://twitter.com/daniel">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- col-md-12 -->



                        <!-- col-md-12 -->

                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <div class="form-group">

                                <label>Etiquetas</label>

                                {{Form::select('tags[]',
                                $tags,
                                $selectedTags,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Etiquetas'])
                            }}


                            </div>
                        </div>
                        <!-- col-md-12 -->


                        <!-- col-md-12 -->

                        <!-- col-md-12 -->
                        <div class="col-md-12">
                            <div class="form-group">

                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit">Guardar</button>
                            </div>


                        </div>
                        <!-- col-md-12 -->

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



@stop