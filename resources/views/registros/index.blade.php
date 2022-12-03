@extends('layouts.main', ['activePage' => 'registros', 'titlePage' => 'Registro Incidencia'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('registros.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Tipo incidencia</h4>
                                <p class="card-category">Ingresar tipos de incidencias</p>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <label for="tipoincidencia" class="col-sm-2 col-form-label">Tipo Incidencia</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tipoincidencia" placeholder="Ingrese su tipo Incidencia" value="{{ old('Tipo Incidencia') }}" autofocus>

                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ubicacion" class="col-sm-2 col-form-label">Ubicacion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ubicacion" placeholder="Ingrese su ubicacion" value="{{ old('username') }}">

                                    </div>
                                </div>
                                <div class="row">
                                    <label for="referencia" class="col-sm-2 col-form-label">Referencia</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="referencia" placeholder="Ingrese referencia" value="{{ old('email') }}">

                                    </div>
                                </div>
                                <div class="row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">

                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <!--End footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
