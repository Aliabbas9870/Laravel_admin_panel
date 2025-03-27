<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amenities List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <a class="btn btn-primary p-2" href="/index"> Back</a>
    <h2 class="mb-4">Amenities List</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page ID</th>
                <th>Developer ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($amenities as $amenity)
            <tr>
                <td>{{ $amenity->id }}</td>
                <td>{{ $amenity->page_id }}</td>
                <td>{{ $amenity->developer_id }}</td>
                <td>{{ $amenity->title }}</td>
                <td>{{ $amenity->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>
                    @if ($amenity->img1)
                        <img src="{{ asset('storage/' . $amenity->img1) }}" width="50">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <a href="{{ route('amenities.edit', $amenity->id) }}" class="btn btn-warning btn-sm">Edit</a>
    
                    <form action="{{ route('amenities.destroy', $amenity->id) }}" method="POST" style="display:inline;">
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
