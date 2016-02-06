@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Configure your council members</h1>
            <hr>
            {!! Form::open(['method' => 'post', 'action' => 'Panel\Configs\CouncilController@store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('description', null, ["placeholder" => "Description", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::file('image') !!}
            </div>




            <div class="form-group">
                {!! Form::submit('Add Member', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
            @include('panel.includes.validation-errors')

        </div>





    </div>
@endsection
