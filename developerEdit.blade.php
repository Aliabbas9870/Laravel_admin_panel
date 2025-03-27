
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Developers List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <a class="btn btn-primary p-2" href="/index"> Back</a><br>
    <h4>Edit Developer</h4>
    <form action="{{ route('developer.update', $developer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Developer Id</label>
            <input type="text" class="form-control" name="name" value="{{ $developer->developer_id }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Developer Name</label>
            <input type="text" class="form-control" name="name" value="{{ $developer->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $developer->title }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3">{{ $developer->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Photo</label><br>
            @if($developer->photo)
                <img src="{{ asset('storage/'.$developer->photo) }}" width="100">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Change Photo</label>
            <input type="file" class="form-control" name="photo" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">Update Developer</button>
    </form>
</div>

