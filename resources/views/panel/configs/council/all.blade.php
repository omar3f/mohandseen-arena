@extends('panel.template')
@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Your Council Members</h1>
            {!!  Html::link(action('Panel\Configs\CouncilController@create'), 'Add a Council Member', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Title</td>
            <td>Image</td>
            <td>Action</td>
        </tr>

        @foreach($members as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->title }}</td>

                <td><img src="{!! asset($member->image) !!}" alt="" width="20%"></td>

                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\Configs\CouncilController@edit', $member->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ['Panel\Configs\CouncilController@destroy', $member->id], "class" => "form-inline"])  !!}
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