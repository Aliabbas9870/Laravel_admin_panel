<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <a class="btn btn-primary p-2" href="/index"> Back</a>
    <h2 class="mb-4">Gallery List</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page ID</th>
                <th>Image</th>
                <th>Status</th>
                <th>Sort Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->page_id }}</td>
                <td><img src="{{ asset('storage/' . $page->image_path) }}" width="50"></td>
                <td>{{ ucfirst($page->status) }}</td>
                <td>{{ $page->sort_order }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('gallery.edit', $page->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <!-- Delete Button -->
                    <form action="{{ route('gallery.destroy', $page->id) }}" method="POST" style="display:inline;">
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
