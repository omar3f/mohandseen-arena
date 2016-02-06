@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Configure your Syndicate Ads</h1>
            <hr>
            {!! Form::open(['method' => 'post', 'action' => 'Panel\Configs\SyndicateAdsController@store', 'files' => true]) !!}


            <div class="form-group">
                {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('description', null, ["placeholder" => "Description", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::input('date', 'date' , date('Y-m-d'), ['class' => 'form-control']) !!}
            </div>




            <div class="form-group">
                {!! Form::submit('Add Ad', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
            @include('panel.includes.validation-errors')

        </div>





    </div>
@endsection
