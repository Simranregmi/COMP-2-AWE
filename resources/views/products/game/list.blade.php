@include('products.navbar')
<!-- Table -->
<div class="container">
    <h1> Game Details</h1>
    <a href="/games/create" type="button" class="btn btn-success mb-4">Add New</a>

    <table class="table table-info">
        <thead>
            <tr>
                <!-- Tables Name -->
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Price</th>
                <th scope="col">Pegi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Displayiing all the datas -->
            @foreach($games as $game)
            <tr>
                <td>{{$game->id}}</td>
                <td>{{$game->title}}</td>
                <td>{{$game->firstname}}</td>
                <td>{{$game->lastname}}</td>
                <td>{{$game->price}}</td>
                <td>{{$game->pegi}}</td>
                <td>
                    <div class="d-flex">
                        <a href="/games/{{$game->id}}/edit" class="btn btn-warning"> Edit </a>
                        <form action="/game/{{$game->id}}" method="POST">
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
{{$games->links()}}
@include('layout.footer')
