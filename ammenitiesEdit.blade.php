<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Amenity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Amenity</h2>
    <a href="{{ route('amenities.show') }}" class="btn btn-secondary mb-3">Back</a>

    <form action="{{ route('amenities.update', $amenity->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="page_id" class="form-label">Page ID</label>
            <input type="number" class="form-control" name="page_id" id="page_id" value="{{ $amenity->page_id }}" required>
        </div>

        <div class="mb-3">
            <label for="developer_id" class="form-label">Developer ID</label>
            <input type="number" class="form-control" name="developer_id" id="developer_id" value="{{ $amenity->developer_id }}" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $amenity->title }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status" required>
                <option value="1" {{ $amenity->status == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $amenity->status == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="img1" class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="img1" id="img1">
            @if($amenity->img1)
                <img src="{{ asset('storage/'.$amenity->img1) }}" class="img-thumbnail mt-2" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
