@extends('panel.template')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Your Council Members</h1>
            {!!  Html::link(action('Panel\Pages\PagesController@create'), 'Add a Page', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>URL</td>

            <td>Parent</td>

            <td>Image</td>
            <td>Action</td>
        </tr>

        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td>{{ $page->url }}</td>
                <td>{{ $page->parent()->first() ? $page->parent()->first()->title : 'No Parent' }}</td>
                <td><img src="{!! asset($page->image) !!}" alt="" width="20%"></td>

                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\Pages\PagesController@edit', $page->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ['Panel\Pages\PagesController@destroy', $page->id], "class" => "form-inline"])  !!}
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