<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banners List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <a class="btn btn-primary p-2" href="/index"> Back</a>
    <h2 class="mb-4">Banners List</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page ID</th>
                <th>Tag Line</th>
                <th>Heading</th>
                <th>Description</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
            <tr>
                <td>{{ $banner->id }}</td>
                <td>{{ $banner->page_id }}</td>
                <td>{{ $banner->tag_line }}</td>
                <td>{{ $banner->heading }}</td>
                <td>{{ $banner->banner_desc }}</td>
                <td>{{ $banner->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>
                    @if ($banner->banner_image)
                        <img src="{{ asset('storage/' . $banner->banner_image) }}" width="50">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary btn-sm">Edit</a>

                    <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
