<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <a class="btn btn-primary p-2" href="/index"> Back</a>
    <h4>Pages</h4>
                        <table class="table table-bordered">
                            <tr>
                                {{--  <th>ID</th>  --}}
                                <th>Name</th>
                                <th>Developer Id</th>
                                <th>Slug</th>
                                <th>Whatsapp</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($page as $page)
                            <tr>
                                {{--  <td>{{ $page->id }}</td>  --}}
                                <td>{{ $page->name }}</td>
                                <td>{{ $page->developer_id }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>{{ $page->whatsapp }}</td>
                                <td>{{ $page->phone }}</td>
                                <td>{{ $page->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <!-- Delete Form -->
                                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                    <script>
                                        function confirmDelete() {
                                            return confirm("Are you sure you want to delete this page?");
                                        }
                                    </script>
                                </td>

                            </tr>
                            @endforeach
                        </table>

</body>
</html>
