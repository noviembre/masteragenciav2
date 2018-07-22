@extends('admin.layouts.template')


@section('content')

    <!-- Top starts-->
    <div class="row page-titles">
        <div class="col-md-3 align-self-center">
            <h4 class="theme-cl">Todas las Categorias</h4>
        </div>

        <div class="col-md-9 text-right">

            <div class="btn-group mr-lg-2">
                <a href="#" class="btn btn-warning">
                    Tours
                </a>
            </div>
            <div class="btn-group">
                <a href="{{ route('categories.create') }}" class="btn gredient-btn">
                    Crear Categoria
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
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($categories as $category)
                                <tr>
                                    <td> {{ $category->title }}</td>
                                    <td><a href="{{ route('categories.edit', ['id' => $category->id ]) }}" class="btn btn-info">Editar</a>  </td>

                                    <td><a href="{{ route('categories.destroy', ['id' => $category->id ]) }}" class="btn btn-danger">Eliminar</a>
                                    </td>
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