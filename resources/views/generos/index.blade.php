@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="card-title float-left">Lista de Generos</h5>
                                <button type="button" class="float-right btn-transition btn btn-outline-primary"> Nuevo
                                 Genero
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="mb-0 table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>

                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($capitulos as  $capitulo)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$capitulo->nombre}}</td>

                                    <td>
                                        <button type="button" class="btn btn-outline-danger"> eliminar</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

