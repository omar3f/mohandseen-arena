@extends('panel.template')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Your News</h1>
            {!!  Html::link(action('Panel\News\NewsController@create'), 'Add News', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Image</td>

            <td>Date</td>
            <td>Action</td>
        </tr>

        @foreach($news as $new)
            <tr>
                <td>{{ $new->id }}</td>
                <td>{{ $new->title }}</td>
                <td><img src="{!! asset($new->image) !!}" alt="" width="20%"></td>
                <td>{{ (new Carbon\Carbon($new->date))->toFormattedDateString() }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\News\NewsController@edit', $new->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ['Panel\News\NewsController@destroy', $new->id], "class" => "form-inline"])  !!}
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