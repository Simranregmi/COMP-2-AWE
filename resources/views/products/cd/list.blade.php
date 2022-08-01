@include('products.navbar')
<!-- Table -->
<div class="container">
    <h1> Cds Details</h1>
    <a href="/cds/create" type="button" class="btn btn-success mb-4">Add New</a>

    <table class="table table-info">
        <thead>
            <tr>
                <!-- Tables Name -->
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Price</th>
                <th scope="col">Playlength</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Displayiing all the datas -->
            @foreach($cds as $cd)
            <tr>
                <td>{{$cd->id}}</td>
                <td>{{$cd->title}}</td>
                <td>{{$cd->firstname}}</td>
                <td>{{$cd->lastname}}</td>
                <td>{{$cd->price}}</td>
                <td>{{$cd->playlength}}</td>
                <td>
                    <div class="d-flex">
                        <a href="/cds/{{$cd->id}}/edit" class="btn btn-warning"> Edit </a>
                        <form action="/cds/{{$cd->id}}" method="POST">
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
{{$cds->links()}}
@include('layout.footer')
