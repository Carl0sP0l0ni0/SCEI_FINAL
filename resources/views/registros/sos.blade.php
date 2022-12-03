@extends('layouts.main', ['activePage' => 'registros', 'titlePage' => 'ENVIAR SOS'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('registrosos.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">ENVIAR SOS</h4>
                                <p class="card-category">Ingrese</p>
                            </div>
                            <div class="card-header-text">


                                <div class="row">
                                    <label for="ubicacion" class="col-sm-2 col-form-label">Ingrese Ubicacion</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ubicacion" placeholder="..." value="{{ old('ubicacion') }}" autofocus>

                                    </div>
                                </div>
                                <div class="row">
                                    <label for="referencia" class="col-sm-2 col-form-label">Referencia</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="referencia" placeholder="..." value="{{ old('referencia') }}">

                                    </div>
                                </div>
                                <br>
                                <div>
                                    <div class="mapform" >
                                        <div class="row">
                                            <div class="col-5">
                                                <input type="text" class="form-control" placeholder="lat" name="lat" id="lat">
                                            </div>
                                            <div class="col-5">
                                                <input type="text" class="form-control" placeholder="lng" name="lng" id="lng">
                                            </div>
                                        </div>
                        
                                        <div id="map" style="height:400px; width: 800px;" class="my-3"></div>
                        
                                        <script>
                                            let map;
                                            function initMap() {
                                                map = new google.maps.Map(document.getElementById("map"), {
                                                    center: { lat: -9.298652719883803, lng: -76.00081367641602 },
                                                    zoom: 15,
                                                    scrollwheel: true,
                                                });
                        
                                                const uluru = { lat: -9.298652719883803, lng: -76.00081367641602 };
                                                let marker = new google.maps.Marker({
                                                    position: uluru,
                                                    map: map,
                                                    draggable: true
                                                });
                        
                                                google.maps.event.addListener(marker,'position_changed',
                                                    function (){
                                                        let lat = marker.position.lat()
                                                        let lng = marker.position.lng()
                                                        $('#lat').val(lat)
                                                        $('#lng').val(lng)
                                                    })
                        
                                                google.maps.event.addListener(map,'click',
                                                function (event){
                                                    pos = event.latLng
                                                    marker.setPosition(pos)
                                                })
                                            }
                                        </script>
                                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
                                                type="text/javascript"></script>
                                    </div>
                                </div>

                                </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn-danger btn-outline-danger">ENVIAR SOS</button>
                            </div>
                            <!--End footer-->
                        </div>
                       <!--MODELO HTML PARA S.O.S-->
                        <html>
	    <head>
	        
                      
	
	    </head>
 
	    <body onLoad="localize()">
	        
	    </body>
 

        
	</html>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
