@extends('layouts.app')

@section('content')
  @if ($news->count() == 0)
    <h1 class="text-center">Nu ati creat nicio stire.</h1>
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
        <a href="{{ route('news.dump', ['id' => $n->id]) }}" class="btn btn-danger btn-xs">Adauga in cos</a>
        <a href="{{ route('news.edit', ['id' => $n->id]) }}" class="btn btn-primary btn-xs">Editeaza</a>
      </div>
    </div>
    @endforeach
    <div class="text-center">
      {{ $news->links() }}
    </div>
  @endif
@endsection()
