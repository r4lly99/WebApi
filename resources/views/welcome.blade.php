@extends('layouts.app')

@section('content')
<style>
   #mapid { height: 180px; }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">DKI Saluran Air</div>
                <div class="panel-body">
                    <div id="mapid" style="width: 920px; height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>

    var mymap = L.map('mapid').setView([-6.1690,106.8232], 13);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'mapbox.streets'
    }).addTo(mymap);

    L.marker([-6.1690,106.8232]).addTo(mymap)
    .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

    L.circle([-6.1690,106.8242], 500, {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5
    }).addTo(mymap).bindPopup("I am a circle.");


    var popup = L.popup();

</script>
@stop
