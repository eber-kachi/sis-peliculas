@extends('layouts.app')
{{--{{$usuarios}}--}}
@section('content')
    <div class="container">
{{--        <div class="row">--}}
{{--            <div class="col-md-12"></div>--}}
{{--            <h1>lista de usuarios</h1>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4"></div>--}}
            <div class="row">
                <div class="col-md-3">
                    <form action="{{route('usuario.buscar')}}" class="mb-3" novalidate method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" placeholder="Nombre...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
{{--                <<div class="list-group">--}}
{{--                    <a href="#" class="list-group-item list-group-item-action active"> Dashboard </a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">--}}
{{--                        Inbox--}}
{{--                        <span class="badge badge-primary badge-pill ml-auto">14</span>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action">Orders</a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action">Products</a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action">Customers</a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action">Reports</a>--}}
{{--                </div>--}}
                <div class="card">
            <div class="card-header">

                <h4 class="card-title float-left">Lista de Usuarios </h4>
                <a href="{{route('usuarios.create')}}" class="btn btn-sm btn-success float-right"><i
                            class="fa fa-plus-circle"></i> Nuevo Usuario</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuarios as $usuario)
                        <tr class="table-primary">
                            <th scope="row">1</th>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td><a href="{{route('usuarios.edit',$usuario->id)}}"
                                   class="btn btn-warning">Editar</a></td>
                            <td>
                                <form action="{{route('usuarios.destroy',$usuario->id)}}"
                                      method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger " type="submit"
                                            onclick="return confirm('¿Seguro que desea eliminar?')">
                                        Eliminar
                                    </button>

                                </form>

                            </td>
                        </tr>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
    {{$usuarios->links()}}
            </div>
        </div>
    </div>
@endsection