@extends('admin.layouts.template')


@section('content')

    <!-- Top starts-->
    <div class="row page-titles">
        <div class="col-md-4 align-self-center">
            <h4 class="theme-cl">Crear Categoria</h4>
        </div>

        <div class="col-md-8 text-right">
            <div class="btn-group mr-lg-2">
                <a href="#" class="btn btn-warning" >
                    Tours
                </a>
            </div>

            <div class="btn-group mr-lg-2">
                <a href="{{ route('categories.index') }}" class="btn btn-default" >
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

                {!! Form::open(['route' => 'categories.store']) !!}


                    <div class="row">
                        <!-- col-md-6 -->

                        <div class="col-md-6 col-12">
                            <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nombre:</label>
                                    <input name="title" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Guardar" class="btn waves-effect waves-light btn-rounded btn-outline-success">
                                </div>
                            </div>
                        </div>

                        <!-- col-md-6 -->
                        <div class="col-md-6 col-12 padd-top-20">


                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                errores
                                @include('admin.errors')
                            </div>
                            <!-- col-md-12 -->


                        </div>


                    </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <!-- ./row -->
@stop

