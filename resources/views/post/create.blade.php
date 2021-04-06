@extends('base')


@section('content')

    @dump($authors)

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="author_id">Autori</label>
            <select class="form-control" name="author_id" id="author_id">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }} {{ $author->last_name }}</option>

                @endforeach
            </select>
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
            </div>


            <div class="form-group">
                <label for="body">body</label>
                <textarea class="form-control" id="body" name="body" rows="6"></textarea>
            </div>

            <div class="form-group">
                <label for="tags[]">Tags</label>
                <select class="custom-select" name="tags[]" id="tags" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">invia</button>
    </form>

@endsection
