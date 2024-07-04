@extends('header')
@section('content')
<div>
  <form action="{{route('store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title">Название</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Введите название...">
      @error('title')
      <p class="text-danger">Введите название</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="author">Автор</label>
      <input type="text" name="author" class="form-control" id="author" placeholder="Введите автора..."></input>
      @error('author')
      <p class="text-danger">Введите автора</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Добавить</button>
  </form>
</div>
@endsection