<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <a class="btn btn-primary p-2" href="{{ route('gallery.index') }}">Back</a>
    <div class="card p-4">
        <h4 class="text-center">Edit Galery</h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="page_id" class="form-label">Page ID</label>
                <input type="number" class="form-control" name="page_id" value="{{ $gallery->page_id }}" required>
            </div>

            <div class="mb-3">
                <label for="image_path" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="image_path">
                <small>Current: <img src="{{ asset($gallery->image_path) }}" width="100"></small>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status">
                    <option value="active" {{ $gallery->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $gallery->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="sort_order" class="form-label">Sort Order</label>
                <input type="number" class="form-control" name="sort_order" value="{{ $gallery->sort_order }}">
            </div>

            <button type="submit" class="btn btn-primary w-100">Update</button>
        </form>
    </div>
</div>

</body>
</html>
