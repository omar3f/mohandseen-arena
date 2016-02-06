@extends('panel.template')

@section('content')

<div class="row">
    <div class="col-sm-6">
        <h1>Configure Your Short Description</h1>
        <hr>
        {!! Form::open(['method' => 'post', 'action' => 'Panel\Configs\ShortDescriptionWordController@store']) !!}
        <div class="form-group">
            {!! Form::text('title-before-flash', array_key_exists('title-before-flash', $configs) ? $configs['title-before-flash'] : '', ['class' => 'form-control', 'placeholder' => 'Title before flash']) !!}
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    {!! Form::text('flash-word-1',  array_key_exists('flash-word-1', $configs) ? $configs['flash-word-1'] : '', ['class' => 'form-control', 'placeholder' => 'Flash word 1']) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::text('flash-word-2',  array_key_exists('flash-word-2', $configs) ? $configs['flash-word-2'] : '', ['class' => 'form-control', 'placeholder' => 'Flash word 2']) !!}

                </div>
                <div class="col-sm-4">
                    {!! Form::text('flash-word-3', array_key_exists('flash-word-3', $configs) ? $configs['flash-word-3'] : '', ['class' => 'form-control', 'placeholder' => 'Flash word 3']) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::text('title-after-flash', array_key_exists('title-after-flash', $configs) ? $configs['title-after-flash'] : '', ['class' => 'form-control', 'placeholder' => 'Title after flash']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('description', array_key_exists('description', $configs) ? $configs['description'] : '', ['class' => 'form-control', 'placeholder' => 'Description']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Change Description', ['class' => 'form-control btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
</div>

@endsection