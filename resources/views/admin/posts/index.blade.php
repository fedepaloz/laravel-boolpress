@extends('layouts.app')

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('type') ?? 'info' }}">
            {{ session('message') }}
        </div>
    @endif
    <header>
        <h1>Lista dei Post</h1>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.create') }}">crea un post
            <i class="fa-solid fa-magnifying-glass ml-2"></i></a>
    </header>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titolo</th>
                <th scope="col">slug</th>
                <th scope="col">creato il</th>
                <th scope="col">modificato il</th>
                <th scope="col">azioni </th>
            </tr>
        </thead>
        <tbody>
            {{-- dovrei gestire con il forelse TODO --}}
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>

                        
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.show', $post) }}">Vai al        dettaglio 
                              <i class="fa-solid fa-magnifying-glass ml-2"></i></a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-3">cancella post</button>
                                
                            </form>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-primary">modifica</a>
                            
                        </td>
                        
                    </tr>
                    @endforeach
                    
                </tbody>
                
            </table>
@endsection
