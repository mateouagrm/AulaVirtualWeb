@extends ('cliente.panelUsuario')
@section ('contenido')

    <section class="content">
        <h3>BONOS</h3>
        <hr>
        <div class="box">
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
                    <thead>
                    <tr>
                        <th style="width:10px">#</th>
                        <th>Nombre</th>
                        <th>Recomendado</th>
                        <th>Categoria</th>
                        <th>Sub-categoria</th>
                        <th>Curso</th>
                        <th>Ciudad</th>
                        <th>Bono</th>
                        <th>Bono curso</th>
                        <th>Estado</th>
                        <th>cobrar en</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1" tabindex="0">1</td>
                        <td>cesar</td>
                        <td>rodrigo</td>
                        <td>academi xpert</td>
                        <td>aplicacion movil</td>
                        <td>react native para principiante</td>
                        <td>santa cruz</td>
                        <th>40 Bs</th>
                        <th>40 Bs</th>
                        <th>expirado</th>
                        <th>30 dias</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection