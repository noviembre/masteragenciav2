

@extends('admin.layouts.template')


@section('content')

    <!-- Top starts-->
    <div class="row page-titles">

        <div class="col-md-4 align-self-center">
            <h4 class="theme-cl">Editar Usurario</h4>
        </div>

        <div class="col-md-8 text-right">


            <div class="btn-group mr-lg-2">
                <a href="{{ route('users.index') }}" class="btn btn-default">
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

                {{Form::open([
            'route'	=>	['users.update', $user->id],
            'method'	=>	'put',
            'files'	=>	true
        ])}}

                <div class="col-md-12 col-lg-12 col-sm-12">

                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input value="{{ $user->name }}"  name="name" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input value="{{$user->email}}"  name="email" type="text" class="form-control">
                                    </div>

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="form-group">


                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label>Avatar</label>
                                    <img src="{{$user->getImage()}}" alt="" width="200" class="img-responsive">
                                    <input type="file" name="avatar" id="exampleInputFile">

                                </div>

                                <div class="col-lg-4 col-md-6">

                                    <button class="btn btn-success pull-right">Guardar</button>


                                </div>

                            </div>
                        </form>
                    </div>

                </div>


                {{Form::close()}}

            </div>
        </div>
    </div>
    <!-- ./row -->
@stop
