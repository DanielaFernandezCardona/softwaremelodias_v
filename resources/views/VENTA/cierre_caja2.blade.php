@extends('layout.panel')
@section('title', 'Cierre caja')

@Section('contenido')


<!--agrego codigo del formulario dentro de las etiquetas body -->

<div class="container" style="margin-left:21%; ">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Cierre caja</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="saldoVentas" name="saldoVentas" type="text" placeholder="Saldo Ventas" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="sobranteFaltante" name="sobranteFaltante" type="text" placeholder="Saldo sobrante/faltante" class="form-control">
                            </div>
                        </div>

                        <label for="listaProductos">Lista de productos vendidos</label>


                       <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg">Siguiente</button>
                            
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection