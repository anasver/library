<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Create Book</title>
</head>

<body>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">title</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="title">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">description</label>
            <input type="text" name="description" class="form-control" id="formGroupExampleInput"
                placeholder="title">
        </div>

        <div class="form-group">
            <label for="author">Authors</label>
            <select name="author_id" id="author" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <label for="formGroupExampleInput">categories</label>
        @foreach ($categories as $category)
            <div class="form-check">
                <input class="form-check-input" name="categories_ids[]" type="checkbox" value="{{ $category->id }}"
                    id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    {{ $category->name }}
                </label>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary mb-2">Add</button>

    </form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
