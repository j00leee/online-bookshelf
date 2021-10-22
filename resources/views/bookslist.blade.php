<div class="card mb-3">
  <img height="550vh" src="https://cdn.lifestyleasia.com/wp-content/uploads/sites/2/2020/02/25145253/Photo-by-Alfons-Morales-on-Unsplash-scaled-1535x900.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of books</h5>
    <p class="card-text">This is a list to keep track of books you've read, books you're reading now, and books you want to read in the future.</p>
    <nav class="navbar navbar-light" style="background-color: #87CEEB">
        <form style="margin-left: 1vw;" class="d-flex bd-highlight mb-3" action="{{ url('/search') }}" method="post">
            {{csrf_field()}}
            <input class="form-control p-2 bd-highlight" type="text" name="title" placeholder="Search by title">
            <button style="margin-left: 2vw;" class="btn btn-outline-success p-2 bd-highlight" value= "Search" type="submit">Search</button>
        </form>
    </nav>
    <br><br>
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
                    <a href="{{ url('/delete/'.$book->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>