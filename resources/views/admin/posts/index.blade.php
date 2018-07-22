
@extends('layouts.template')


@section('content')

    <!-- Top starts-->
    <div class="row page-titles">
        <div class="col-md-4 align-self-center">
            <h4 class="theme-cl">Lista de los tours</h4>
        </div>

        <div class="col-md-8 text-right">

            <div class="btn-group">
                <a href="{{ route('post.create') }}" class="btn gredient-btn" title="Crear Tour">
                    Crear Tour
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
                            <th>Imagen</th>
                            <th>Tour</th>
                            <th>Duracion</th>
                            <th>Galeria</th>
                            <th>Editar</th>
                            <th>Desactivar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($posts->count()> 0)

                            @foreach($posts as $post)
                                <tr>
                                    <td><img src="{{ $post->featured }}" alt="{{ $post->titulo }}" width="80px"> </td>
                                    <td>{{ $post->titulo }}</td>
                                    <td>{{ $post->duracion1 .' '. $post->duracion2 }}</td>
                                    <td>
                                        <a href="{{ route('picture.show', ['id' => $post->id]) }}" class="btn btn-rounded btn-primary">Galeria</a>

                                    </td>

                                    <td>
                                        <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-rounded btn-info">Editar</a>

                                    </td>
                                    <td>
                                        <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-rounded btn-danger">Desactivar</a>
                                    </td>


                                </tr>
                            @endforeach

                        @else

                            <tr >
                                <th colspan="5" class="text-center"> No tiene ningun post</th>
                            </tr>


                        @endif

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!-- ============     Project List ends     ============ -->

    </div>
    <!-- ./row -->


@stop

@section('styles')
    <link href="{{ asset('assets/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "url": " {{asset('assets/plugins/datatables/js/Spanish.json')}}"
                }
            });


        } );

    </script>
@endsection