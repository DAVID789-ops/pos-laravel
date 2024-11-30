@extends('welcome')

@section('contenido')
<div class="content-wrapper">
    <section class="content-header">
      <h1>Sucursales</h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSucursal">Agregar Sucursal</button>
            </div>
        <div class="box-body">
            <table class="table table-bordered table-striped table-hover dt-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sucursal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sucursales as $sucursal)
                    <tr>
                        <td>{{$sucursal->id}}</td>
                        <td>{{$sucursal->nombre}}</td>
                        <td> <!-- Aquí agregas la celda para las acciones -->
                            <button class="btn btn-warning btnEditarSucursal" data-toggle="modal" data-target="#modalEditarSucursal" idSucursal="{{$sucursal->id}}"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
      </div>
    </section>

</div>
<div class="modal fade" id="modalAgregarSucursal">
        <div class="modal-dialog">
            <div class="modal-content">

                <form  method="post" action="">
                @csrf

                    <div class="modal-header" style="background: #3c8dbc; color: white">
                        <button type="button" class="close" data-dismiss="modal" >
                            &times;
                        </button>
                        <h4 class="modal-title">Agregar Sucursal</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-building"></i>
                                    </span>
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingresar Sucursal" required>

                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar SucursaL</button>
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
          <!-- /.modal-dialog -->
    </div>
</div>




<div class="modal fade" id="modalEditarSucursal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form  method="post" action="{{url('Actualizar-Sucursal')}}">
            @csrf
            @method('put')

                <div class="modal-header" style="background: #cdc201e2; color: black">
                    <button type="button" class="close" data-dismiss="modal" >
                        &times;
                    </button>
                    <h4 class="modal-title">Agregar Sucursal</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-building"></i>
                                </span>
                                <input type="text" class="form-control input-lg" name="nombre"  id="nombreEditar" required>
                                <input type="hidden" class="form-control input-lg" name="id"  id="idEditar" required>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
      <!-- /.modal-dialog -->
</div>
</div>
@endsection

