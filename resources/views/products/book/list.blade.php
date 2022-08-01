@include('products.navbar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Table -->
<div class="container">
    <h1> Book Details</h1>
    <a href="/books/create" type="button" class="btn btn-success mb-4">Add New</a>

    <table class="table table-info">
        <thead>
            <tr>
                <!-- Tables Name -->
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Price</th>
                <th scope="col">Page No</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Displayiing all the datas -->
            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->firstname}}</td>
                <td>{{$book->lastname}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->page}}</td>
                <td>
                    <div class="d-flex">
                        <a href="/books/{{$book->id}}/edit" class="btn btn-warning"> Edit </a>
                        <form action="/books/{{$book->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ms-2">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
</div>
@endforeach
</tbody>
</table>
{{$books->links()}}
@include('layout.footer')
