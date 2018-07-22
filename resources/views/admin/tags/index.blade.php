@extends('admin.layouts.template')


@section('content')

    <!-- Top starts-->
    <div class="row page-titles">
        <div class="col-md-3 align-self-center">
            <h4 class="theme-cl">Todas las Etiquetas</h4>
        </div>

        <div class="col-md-9 text-right">

            <div class="btn-group mr-lg-2">
                <a href="#" class="btn btn-warning">
                    Tours
                </a>
            </div>
            <div class="btn-group">
                <a href="{{ route('tags.create') }}" class="btn gredient-btn">
                    Crear Etiqueta
                </a>
            </div>
        </div>
    </div>
    <!-- Top ends-->


    <!-- Row -->
    <div class="row">

        <!-- ============     Project List starts     ============ -->
        <div class="col-md-12 col-sm-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($tags as $tag)
                            <tr>
                                <td> {{ $tag->id }}</td>
                                <td> {{ $tag->title }}</td>

                                <td>
                                    <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-info"> Editar</a></td>


                                <td>
                                    {{Form::open(['route'=>['tags.destroy', $tag->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('are you sure?')" type="submit" class="btn btn-danger">
                                        Eliminar
                                    </button>

                                    {{Form::close()}}
                                </td>

                                <td></td>
                            </tr>
                        @endforeach



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!-- ============     Project List ends     ============ -->

    </div>
    <!-- ./row -->

@stop