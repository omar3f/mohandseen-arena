@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Configure your pages</h1>
            <hr>
            {!! Form::model($page, ['method' => 'put', 'action' => 'Panel\Pages\PagesController@store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::text('url', null, ['placeholder' => 'URL', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('content', null, ["placeholder" => "Content", "class" => "form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::file('image') !!}
            </div>
            <div class="form-group">
                {!! Form::select('parent_id', $dropdown_pages, null, ["class" => "form-control"]) !!}
            </div>





            <div class="form-group">
                {!! Form::submit('Edit Page', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
            @include('panel.includes.validation-errors')

        </div>





    </div>
@endsection
