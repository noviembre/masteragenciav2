@extends('admin.layouts.template')


@section('content')

    <!-- Top starts-->
    <div class="row page-titles">
        <div class="col-md-3 align-self-center">
            <h4 class="theme-cl">Todos los Usuarios</h4>
        </div>

        <div class="col-md-9 text-right">

            <div class="btn-group mr-lg-2">
                <a href="#" class="btn btn-warning">
                    Tours
                </a>
            </div>
            <div class="btn-group">
                <a href="{{ route('users.create') }}" class="btn gredient-btn">
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
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>E-mail</th>
                            <th>Avatar</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                            <tr>
                                <td> {{ $user->id }}</td>
                                <td> {{ $user->name }}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <img src="{{$user->getImage()}}" alt="" class="img-responsive" width="150">
                                </td>

                                <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    {{Form::open(['route'=>['users.destroy', $user->id], 'method'=>'delete'])}}
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