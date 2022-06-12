@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">image</th>
                <th scope="col">slug</th>
                <th scope="col">operations</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
            <tr>
                <th>{{ $post->title }}</th>
                <td>{{ $post->content }}</td>
                <td>{{ $post->image }}</td>
                <td>{{ $post->slug }}</td>
            </tr>
            @empty

            @endforelse

        </tbody>
    </table>
</div>
@endsection
