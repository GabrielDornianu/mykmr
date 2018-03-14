@extends('layouts.app')

@section('content')
  @if ($news->count() == 0)
    <h1 class="text-center">Nu aveti stiri sterse.</h1>
  @else
    @foreach($news as $n)
    <div class="panel panel-default">
      <div class="panel-heading text-center">
        <h4>{{ $n->title }}</h4>
      </div>
      <div class="panel-body text-center">
        <img src="{{ asset($n->thumbnail) }}" width="200">
        </br>
        <p>{{ str_limit(strip_tags($n->content), 300) }} ...</p>
      </div>
      <div class="panel-footer">
        <a href="{{ route('news.destroy', ['id' => $n->id]) }}" class="btn btn-danger btn-xs">Sterge complet</a>
        <a href="{{ route('news.restore', ['id' => $n->id]) }}" class="btn btn-success btn-xs">Restaureaza</a>
      </div>
    </div>
    @endforeach
    <div class="text-center">
      {{ $news->links() }}
    </div>
  @endif
@endsection()
