@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Configure {{$new->title}}</h1>
            <hr>
            {!! Form::model($new, ['method' => 'put', 'action' => ['Panel\News\NewsController@update', $new->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::textarea('content', null, ["placeholder" => "Content", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::input('date', 'date', null, ["placeholder" => "Content", "class" => "form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::file('image') !!}
            </div>






            <div class="form-group">
                {!! Form::submit('Edit News', ["class" => "form-control btn btn-primary"]) !!}
            </div>


            {!! Form::close() !!}
            @include('panel.includes.validation-errors')

        </div>





    </div>
@endsection
