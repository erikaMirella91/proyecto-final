@extends('layout.template')

@section('content')
 <div class="container">
     <br><br><br>
     <div class="row">
         <div class="col-md-4">
             {!! Form::open(['url'=>'guardarCarrera']) !!}
                <div class="form-group">
                    {!! Form::label('Carrera', 'Nombre de la Carrera') !!}
                    {!! Form::textarea('Carrera', '', ['class'=>'form-control', 'required' => 'required']) !!}
                </div>
                {!! Form::submit('Guardar', ['class'=>'btn btn-warning']) !!}
            {!! Form::close() !!}
         </div>
     </div>
 </div>
@endsection