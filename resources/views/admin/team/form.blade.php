@extends('admin.layouts.admin')


@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ isset($team) ? route('team.update',$team) :  route('team.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @isset($team)
            @method('PUT')
            @endisset
            <div class="form-group">
                <label>Fullname</label>
                <input type="text" placeholder="Fullname" name="fullname" value="{{old('fullname',$team->fullname ?? '')}}" class="form-control">
                @error('fullname')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" placeholder="Title" name="title" value="{{old('title',$team->title ?? '')}}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" placeholder="description" name="text" value="{{old('text',$team->text ?? '')}}" class="form-control">
                @error('text')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            @isset($team->image)
            <div class="form-group">
                <img src="{{asset('storage/images/'.$team->image)}}" width="100px">
            </div>
            @endisset
            <div class="form-group">
                <label>Image</label>
                <input type="file"  name="image" class="form-control">
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            <button class="btn btn-success">Save</button>
        </form>
    </div>
</div>
@endsection



