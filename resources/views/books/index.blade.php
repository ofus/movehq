@extends('books.layout')

@section('content')

    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>MoveHQ tech assessment</h2>
            </div>
            @if (Auth::check())
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
                </div>
            @endif
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mb-5">
        <thead>
        <tr class="table-success">
            <th>Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>ISBN</th>
            <th>ISBN13</th>
            @if (Auth::check())
                <th width="280px">Action</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $key => $value)
            <tr>
                <td>
                    <a href="{{ route('books.show',$value->id) }}">{{ $value->title }}</a>
                </td>
                <td>{{ $value->author }}</td>
                <td>{{ $value->publisher }}</td>
                <td>{{ $value->ISBN }}</td>
                <td>{{ $value->ISBN13 }}</td>
                @if (Auth::check())
                <td>
                    <form action="{{ route('books.destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('books.show',$value->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('books.edit',$value->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                @endif
            </tr>
        @endforeach

        </tbody>
    </table>

    <div class="row d-flex text-center justify-content-center">
        {!! $data->links('pagination::bootstrap-4') !!}
    </div>


@endsection
