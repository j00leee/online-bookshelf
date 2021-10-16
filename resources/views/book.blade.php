<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Book Data</title>
  </head>
  <body>
    @include("navbar")  

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1 style="text-align:center;">Book Data</h1>
        </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include("bookslist")
                    </section>
                </div>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("bookslist")
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://img.jakpost.net/c/2019/03/02/2019_03_02_66706_1551461528._large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter the information of the book</h5>
                            <form action="{{ url('/store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label><br>
                                    <input name="title" type="text" class="form-control" placeholder="Enter Title">
                                </div><br>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input name="author" type="text" class="form-control" placeholder="Enter the author">
                                </div><br>
                                <div class="form-group">
                                    <label>Genre</label>
                                    <input name="genre" type="text" class="form-control" placeholder="Enter the genre">
                                </div><br>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input name="description" type="text" class="form-control" placeholder="Enter the description">
                                </div><br>  
                                <div class="form-group">
                                    <label>Status</label>
                                    <input name="status" type="text" class="form-control" placeholder="Enter status">
                                </div><br>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">                   
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("bookslist")
                </section>
                <section class="col"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("bookslist")
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://img.jakpost.net/c/2019/03/02/2019_03_02_66706_1551461528._large.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Edit information of the book</h5>
                            <form action="{{ url('/update/'.$book->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input value="{{ $book->title }}" name="title" type="text" class="form-control" placeholder="Enter Title">
                                </div><br>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input value="{{ $book->author }}" name="author" type="text" class="form-control" placeholder="Enter the author">
                                </div><br>
                                <div class="form-group">
                                    <label>Genre</label>
                                    <input value="{{ $book->genre }}" name="genre" type="text" class="form-control" placeholder="Enter the genre">
                                </div><br>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input value="{{ $book->description }}" name="description" type="text" class="form-control" placeholder="Enter the description">
                                </div><br>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input value="{{ $book->status }}" name="status" type="text" class="form-control" placeholder="Enter status">
                                </div><br>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">                   
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endif

    <footer></footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>