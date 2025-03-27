<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Banner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <a class="btn btn-primary" href="{{ route('banner.index') }}">Back</a>
    <div class="form-container">
        <h4 class="text-center mb-4">Edit Banner</h4>
        <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Page ID</label>
                <input type="number" class="form-control" name="page_id" value="{{ $banner->page_id }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tag Line</label>
                <input type="text" class="form-control" name="tag_line" value="{{ $banner->tag_line }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Heading</label>
                <input type="text" class="form-control" name="heading" value="{{ $banner->heading }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Banner Description</label>
                <textarea class="form-control" name="banner_desc" rows="3" required>{{ $banner->banner_desc }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" name="status">
                    <option value="1" {{ $banner->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $banner->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100">Update</button>
        </form>
    </div>
</div>

</body>
</html>
