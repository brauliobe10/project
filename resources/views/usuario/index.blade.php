@extends('plantilla.app')
@section('contenido')
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div>
                            <form action="" method="get">
                                <div class="input-group">
                                    <input name="texto" type="text" class="form-control" value=""
                                        placeholder="Ingrese el texto a buscar">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fas fa-search">Buscar</i>
                                        </button>
                                        <a href="" class="btn btn-primary"> Nuevo </a>
                                    </div>
                                </div>
                            </form>
                            </div">
                            <div class="table-responsive mt-3"></div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 100px">Opciones</th>
                                        <th style="width: 20px">ID</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Activo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($registros)<=0) 
                                        <tr>
                                            <td colspan="5">No hay registros que coincidan con la busqueda</td>
                                        </tr>
                                        @else
                                            @foreach($registros as $reg)
                                                <tr class="align-middle">
                                                    <td>
                                                        <a href="#" class="btn btn-warning btn-sm"><i
                                                                class="bi bi-pencil-fill"></i></a>&nbsp;
                                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#modal-eliminar-01"><i
                                                                class="bi bi-trash-fill"></i></button>
                                                    </td>
                                                    <td>{{$reg->id}}</td>
                                                    <td>{{$reg->name}}</td>
                                                    <td>{{$reg->email}}</td>
                                                    <td>{{$reg->activo}}</td>
                                                </tr>
                                                @include('usuario.delete')
                                            @endforeach()
                                        @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-end">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    @endsection
    @push('scripts')
    <script>
    document.getElementById('menuSeguridad').classList.add('menu-open');
    document.getElementById('itemUsuario').classList.add('activo');
    </script>
    @endpush