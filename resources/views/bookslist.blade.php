<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->genre }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ url('/edit/'.$book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>