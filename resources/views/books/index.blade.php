<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <a href="{{ route('books.create') }}">Add Book</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Author</th>
                <th scope="col">categories</th>

                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td scope="row">{{ $book->title }}</td>
                    <td scope="row">{{ $book->description }}</td>
                    <td scope="row">{{ $book->author->name }}</td>
                    <td>
                        @foreach ($book->categories as $category)
                            <p> {{ $category->name }}</p>
                        @endforeach

                    </td>
                    <td>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">edit</a>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-primary">show</a>
                    </td>
                    <td>
                        <form action="{{ route('books.forcedelete', $book) }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger">Force Delete</button>
                        </form>
                    </td>
                    @if (!$book->deleted_at)
                        <td>
                            <form action="{{ route('books.destroy', $book) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    @endif
                    @if ($book->deleted_at)
                        <td>
                            <form action="{{ route('books.restore', $book->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">restore</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
