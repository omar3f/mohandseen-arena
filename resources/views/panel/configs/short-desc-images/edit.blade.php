@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Configure your Short Description Images</h1>
            <hr>
            {!! Form::model($image, ['method' => 'put', 'action' => ['Panel\Configs\ShortDescriptionImagesController@update', $image->id], 'files' => true]) !!}


            <div class="form-group">
                <label for="sort">Sort:</label>
                {!! Form::input('number', 'sort', null, ["placeholder" => "Sort", "class" => "form-control", "min" => "1"]) !!}
            </div>
            <div class="form-group">
                <label for="flash">Flash:</label>
                {!! Form::select('flash', ["1" => "Yes", "0" => "No"] , null, ["class" => "form-control", "max" => "1"]) !!}
            </div>

            <div class="form-group">
                {!! Form::file('image') !!}
            </div>




            <div class="form-group">
                {!! Form::submit('Edit Image', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
            @include('panel.includes.validation-errors')

        </div>





    </div>
@endsection
