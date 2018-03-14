@extends('layouts.app')

@section('content')
  @include('layouts.errors')
  <div class="panel panel-default">
    <div class="panel-heading"> Adauga o stire noua </div>
    <div class="panel-body">
      <form action="{{ route('news.update', ['id' => $news->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Titlu</label>
          <input class="form-control" name="title" value="{{ $news->title }}">
        </div>
        <div class="form-group">
          <label for="thumbnial">Imagine</label>
          <input type="file" class="form-control" name="thumbnail">
        </div>
        <div class="form-group">
          <label for="content">Continut</label>
          <textarea type="file" class="form-control" name="content" rows="5" id="content">{{ $news->content }}</textarea>
        </div>
        <div class="form-group text-center">
          <button class="btn btn-success">Salveaza</button>
        </div>
      </form>
    </div>
  </div>
@endsection
