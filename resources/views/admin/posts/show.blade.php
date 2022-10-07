@extends('layouts.app')
{{-- titolo, content, immagine --}}
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <h4>
                        {{$post->category->label}}
                       {{--  @if ($post->category)
                            {{ $post->category->label }}
                        @else
                            nessuna
                        @endif --}}
                    </h4>
                    <p class="card-text">{{ $post->content }}</p>
                    <div class="col mb-5"><img src="{{ $post->image }}" alt=""></div>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Torna alla lista</a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">modifica</a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-3">cancella post</button>

                    </form>
                    
                    


                </div>
            </div>
        </div>

    </div>
@endsection
