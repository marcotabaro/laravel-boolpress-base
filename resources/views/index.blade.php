@extends('layouts.main')
@section('content')

<table>
    <thead>
        <tr>
            <th>Post Title</th>
            <th>Post Category</th>
            <th>Post Information</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th>{{ $post->title }}</th>
            <th>{{ $post->category->title }}</th>
            <th>{{ $post->info->description }}</th>
            <td>
                <a href="{{ route('posts.show', $post->id) }}">Details</a>
            </td>
            <td><a href="{{ route('posts.edit', $post->id) }}">Aggiorna</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection