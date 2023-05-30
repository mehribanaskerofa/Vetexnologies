@extends('admin.layouts.admin')
@section('content')

    <a class="btn btn-primary my-3" href="{{route('team.create')}}">Add</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Fullname</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Image</th>
                    <th>Created date</th>
                    <th style="width: 50px">Edit</th>
                    <th style="width: 50px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teams as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->fullname}}</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->text}}</td>
                        <td>
                            @isset($data->image)
                                    <img src="{{asset('storage/images/'.$data->image)}}" width="100px">
                            @endisset
                        </td>
                        <td>{{$data->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{route('team.edit',$data)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form class="delete-form" action="{{ route('team.destroy',$data) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            {{$teams->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection
