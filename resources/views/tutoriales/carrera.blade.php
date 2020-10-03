@extends('layout.template')

@section('content')
    <div align="center" style="margin-top: 50px">
        <h1>Tutoriales</h1>
        <div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h5>Crear carrera</h5>
                <iframe width="560" height="315" src="assets\videos\Crear_carrera.mp4" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                {{-- <img class="d-block w-100" src="..." alt="First slide"> --}}
            </div>
            <div class="carousel-item">
                <h5>Editar carrera</h5>
                <iframe width="560" height="315" src="assets\videos\Editar_carrera.mp4" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="carousel-item">
              <h5>Eliminar carrera</h5>
                <iframe width="560" height="315" src="assets\videos\Eliminar_Carrera.mp4" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"  data-slide="prev">
              <span class="carousel-control-prev-icon" style="background-color: rgb(75, 71, 71); margin-left: 100px" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" style="background-color: rgb(75, 71, 71); margin-right: 100px"  aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
       
       
    </div>
@endsection
