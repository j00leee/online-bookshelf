<div class="card mb-3">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of books</h5>
    <p class="card-text">This is a list to track books you've read, you're currently reading, and books you're going to read.</p>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Genre</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->status }}</td>
                <td>

                    <a href="{{ url('/edit/'.$book->id) }}" class="btn btn-sm btn-warning">Edit</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>