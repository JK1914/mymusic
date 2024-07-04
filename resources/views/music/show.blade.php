@extends('header')
@section('content')
<div>
  <form action="{{route('update', $music->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title">Название</label>
      <input type="text" name="title" class="form-control" id="title" value="{{$music->title}}">
    </div>
    <div class="mb-3">
      <label for="author">Автор</label>
      <input type="text" name="author" class="form-control" id="author" value="{{$music->author}}"></input> 
    </div>
    <button type="submit" class="btn btn-primary">Изменить</button>
  </form>
</div>
@endsection