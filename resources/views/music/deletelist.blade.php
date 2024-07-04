@extends('header')
@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Название</th>
            <th scope="col">Автор</th>
            <th scope="col">Действие</th>
        </tr>
    </thead>
    <tbody>        
        @foreach($musics as $music)
        <tr>
            <th scope="row"></th>
            <td>{{$music->title}}</td>            
            <td>{{$music->author}}</td>
            <td>
                <form action="{{route('delete', $music->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Удалить">    
                </form>       
            </td>            
        </tr>
        @endforeach

    </tbody>
</table>

@endsection