<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Developers List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <a class="btn btn-primary p-2" href="/index"> Back</a>
    <h2 class="mb-4">Developers List</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th> Developer ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Icon 1</th>
                <th>Icon 2</th>
                <th>Icon 3</th>
                <th>Copyright</th>
                <th>Sort Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($developers as $developer)
            <tr>
                <td>{{ $developer->id }}</td>
                <td>{{ $developer->developer_id }}</td>
                <td>{{ $developer->name }}</td>
                <td>{{ $developer->title }}</td>
                <td>{{ $developer->description }}</td>
                <td>
                    @if ($developer->photo)
                        <img src="{{ asset('storage/' . $developer->photo) }}" width="50">
                    @else
                        No Photo
                    @endif
                </td>
                <td>{{ $developer->icon_1_text }}</td>
                <td>{{ $developer->icon_2_text }}</td>
                <td>{{ $developer->icon_3_text }}</td>
                <td>{{ $developer->copyright_text }}</td>
                <td>{{ $developer->sort_order }}</td>

                <td>
                    <a href="{{ route('developer.edit', ['id' => $developer->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('developer.destroy', ['id' => $developer->id]) }}" method="POST" style="display:inline;">
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
