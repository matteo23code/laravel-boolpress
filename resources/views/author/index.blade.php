@extends('base')

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Last_Name</th>
                <th scope="col">Email</th>
                <th scope="col">Bio</th>
                <th scope="col">Website</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{ $author->id }}</th>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->last_name }}</td>
                    <td>{{ $author->email }}</td>
                    <td>{{ !empty($author->detail) ? $author->detail->bio : '' }}</td>
                    <td>{{ !empty($author->detail) ? $author->detail->website : '' }}</td>
                    <td><img src="{{ !empty($author->detail) ? $author->detail->image : '' }}" alt=""></td>

                </tr>
            @endforeach
        </tbody>
    </table>
