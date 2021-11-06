<form method="POST" action="{{ route('admin.categories.update', $category['uuid']) }}">
    @csrf @method('PUT')
    <div class="row gutters">
        <div class="col-12 col-md-12">
            <label for="firstname" class="col-form-label">Category Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $category['name'] }}" required>
            @error('name')
                <x-alert :message="$message" />
            @enderror
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
