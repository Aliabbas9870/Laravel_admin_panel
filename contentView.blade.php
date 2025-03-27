<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <a class="btn btn-primary p-2" href="/index"> Back</a>
        <h2 class="text-center mb-4">Pages List</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Meta</th>
                    <th>H1</th>
                    <th>H2</th>
                    <th>H3</th>
                    <th>H4</th>
                    <th>H5</th>
                    <th>H6</th>
                    <th>Para 1</th>
                    <th>Para 2</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Updated By</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($content as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->meta }}</td>
                        <td>{{ $page->h1 }}</td>
                        <td>{{ $page->h2 }}</td>
                        <td>{{ $page->h3 }}</td>
                        <td>{{ $page->h4 }}</td>
                        <td>{{ $page->h5 }}</td>
                        <td>{{ $page->h6 }}</td>
                        <td>{{ $page->para1 }}</td>
                        <td>{{ $page->para2 }}</td>
                        <td>{{ $page->created_at }}</td>
                        <td>{{ $page->updated_at }}</td>
                        <td>{{ $page->updated_by }}</td>
                        <td>
                            @if($page->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('content.edit', ['id' => $page->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('content.destroy', $page->id) }}" method="POST" class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm delete-btn">Delete</button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    let form = this.closest("form");

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>

</body>
</html>
