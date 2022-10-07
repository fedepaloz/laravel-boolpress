@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">titolo</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}">

            <div class="form-group mt-3 ">
                <label for="category_id">seleziona categoria</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">nessuna selezione</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->label }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">contenuto</label>
                <input type="text" class="form-control" name="content" value="{{ $post->content }}">

            </div>
            {{-- TODO mettere anteprima immagine --}}
            <div class="form-group">
                <label for="image">immagine</label>
                <input type="url" class="form-control" name="image" id="image" value="{{ $post->image }}">
            </div>
            <a href="{{ route('admin.posts.index') }}"><button type="button" class="btn btn-primary">torna alla
                    lista</button></a>

            <button type="submit" class="btn btn-primary">modifica post</button>


    </form>
@endsection
