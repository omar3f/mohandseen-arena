@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1>Edit {{ $ad->title }}</h1>
            <hr>
            {!! Form::model($ad, ['method' => 'put', 'action' => ['Panel\Configs\SyndicateAdsController@update', $ad->id], 'files' => true]) !!}


            <div class="form-group">
                {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('description', null, ["placeholder" => "Description", "class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::input('date', 'date', $ad->date , ['class' => 'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit('Edit Ad', ["class" => "form-control btn btn-primary"]) !!}
            </div>

            {!! Form::close() !!}
            @include('panel.includes.validation-errors')

        </div>





    </div>
@endsection
