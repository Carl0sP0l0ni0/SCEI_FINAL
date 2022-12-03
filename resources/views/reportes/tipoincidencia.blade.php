@extends('layouts.main', ['activePage' => 'reportes', 'titlePage' => 'Reporte Tipo Incidencia'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Incidencias</div>
                            <p class="card-category">Vista detallada del incidencias </p>
                        </div>

                        <!--body-->
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                            @endif

                          {{--  BUSCADOR--}}

                                <form>
                                    <input type="text" name="buscar" id="buscarregistro">
                                    <button type="submit">buscar</button>






                                </form>


                                <!--Start third-->
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped">


                                                <tr>

                                                        <th>ID</th>
                                                        <th>Tipo Incidencia</th>
                                                        <th>Ubicacion</th>
                                                        <th>Referencia</th>
                                                        <th>Descripcion</th>

                                                </tr>
                                                <tbody>
                                                @foreach($registro as $registros)
                                                    <tr>



                                                    <td>{{ $registros->id }}    </td>

                                                    <td>{{ $registros->tipoincidencia }}</td>

                                                    <td><span class="badge badge-primary">{{ $registros->ubicacion }}</span></td>



                                                    <td>{!! $registros->referencia !!}</td>




                                                    <td><span class="badge badge-primary">{{ $registros->descripcion }}</span></td>

                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                </div>
                                <!--end third-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
