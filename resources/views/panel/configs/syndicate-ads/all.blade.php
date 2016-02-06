@extends('panel.template')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Your Syndicate Ads</h1>
            {!!  Html::link(action('Panel\Configs\SyndicateAdsController@create'), 'Add an Ad', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Date</td>
            <td>Action</td>
        </tr>

        @foreach($ads as $ad)
            <tr>
                <td>{{ $ad->id }}</td>
                <td>{{ $ad->title }}</td>
                <td>{{ (new Carbon\Carbon($ad->date))->toFormattedDateString() }}</td>


                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\Configs\SyndicateAdsController@edit', $ad->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ['Panel\Configs\SyndicateAdsController@destroy', $ad->id], "class" => "form-inline"])  !!}
                            <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            {!! Form::close() !!}
                        </div>

                    </div>



                </td>
            </tr>
        @endforeach



        </tbody>
    </table>

@endsection