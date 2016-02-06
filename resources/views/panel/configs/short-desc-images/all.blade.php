@extends('panel.template')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Your Short Description Images</h1>
            {!!  Html::link(action('Panel\Configs\ShortDescriptionImagesController@create'), 'Add a New Image', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Image</td>
            <td>Sort</td>
            <td>Flash</td>
            <td>Action</td>
        </tr>

        @foreach($images as $image)
            <tr>
                <td>{{ $image->id }}</td>
                <td><img src="{!! asset($image->image) !!}" alt=""></td>
                <td>{{ $image->sort }}</td>
                <td>{!! $image->flash ? 'Yes' : 'No' !!}</td>

                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\Configs\ShortDescriptionImagesController@edit', $image->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ['Panel\Configs\ShortDescriptionImagesController@destroy', $image->id], "class" => "form-inline"])  !!}
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