@include('products.navbar')
<!-- sidebar -->
@include('products.sidebar')


<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <h1 class="mt-2">CDs</h1>
            <form method="POST" action="/cds">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}" name="title" required>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}" type="
                        text" name="firstname" required>
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input class="form-control @error('lastname') is-invalid @enderror"
                        value="{{ old('lastname') }}" type="text" name="lastname" required>
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input class="form-control @error('price') is-invalid @enderror"
                        value="{{ old('price') }}" type="text" name="price" required>
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Play Length</label>
                    <input class="form-control @error('playlength') is-invalid @enderror"
                        value="{{ old('playlength') }}" type="text" name="playlength" required>
                    @error('playlength')
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
