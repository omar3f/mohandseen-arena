@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-center">Create a new link</h1>
            <hr>
            {!! Form::open(['method' => 'post', 'action' => 'Panel\Configs\LinksController@store']) !!}

            <div class="form-group">
                {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Title"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('url', null, ["class" => "form-control", "placeholder" => "URL"]) !!}
            </div>
            <div class="form-group">
                {!! Form::select('visibility', ['1' => 'Visible', '0' => 'Not Visible'], null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::select('parent_id', $dropdown_links, null ,["class" => "form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::input('number', 'sort', null, ["class" => "form-control", "placeholder" => "Sort"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('icon', null, ["class" => "form-control", "placeholder" => "Icon"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Link', ["class" => "btn btn-primary form-control"]) !!}

            </div>



            @include('panel.includes.validation-errors')
        </div>

        {!! Form::close() !!}

    </div>
@endsection