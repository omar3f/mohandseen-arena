@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-center">Edit {!! $link->title !!}</h1>
            <hr>
            {!! Form::model($link, ['method' => 'put', 'action' => ['Panel\Configs\LinksController@update', $link->id]]) !!}

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
                <input type="hidden" value="{{ $link->id }}" name="id_hidden">
            </div>
            <div class="form-group">
                {!! Form::input('number', 'sort', null, ["class" => "form-control", "placeholder" => "Sort"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('icon', null, ["class" => "form-control", "placeholder" => "Icon"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edit Link', ["class" => "btn btn-primary edit-btn form-control"]) !!}
            </div>



            @include('panel.includes.validation-errors')

        </div>

        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script>
        $('.edit-btn').on("click", function (e) {
            var parent_id = "select[name=parent_id]";
            var parent_id_hidden = "input[name=id_hidden]";
            if($(parent_id).val() == $(parent_id_hidden).val()) {
                e.preventDefault();
                alert('The link cannot be nested inside itself');
            }
        });

    </script>

@endsection