@include('products.navbar')
<!-- sidebar -->
@include('products.sidebar')
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <h1 class="mt-2">Books</h1>
            <form method="POST" action="/books">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror"
                        name="title" value="{{ old('title') }}" required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label class="form-label">First Name</label>
                    <input class="form-control  @error('firstname') is-invalid @enderror" type="text" name="firstname"
                        value="{{ old('firstname') }}" autocomplete="firstname" required>
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input class="form-control  @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}"
                        type="text" name="lastname" autocomplete="lastname" required>
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
                        type="text" name="price" autocomplete="price" required>
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">No Of Pages</label>
                    <input class="form-control @error('page') is-invalid @enderror" value="{{ old('page') }}"
                        type="text" name="page" autocomplete="page" required>
                    @error('page')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>
</div>
@include('layout.footer')
