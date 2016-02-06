@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Edit {{ $member->name }}</h1>
            <hr>
            {!! Form::model($member, ['method' => 'put', 'action' => ['Panel\Configs\CouncilController@update', $member->id], 'files' => true]) !!}
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
                {!! Form::submit('Edit Member', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
            @include('panel.includes.validation-errors')

        </div>





    </div>
@endsection
