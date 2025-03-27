<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <a class="btn btn-primary p-2" href="/index"> Back</a>
        <h2 class="text-center mb-4">FAQs List</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Page ID</th>
                    <th>Developer ID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($faq as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>{{ $faq->answer }}</td>
                        <td>{{ $faq->page_id }}</td>
                        <td>{{ $faq->developer_id }}</td>
                        <td>
                            @if($faq->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            {{--  <a href="" class="btn btn-warning btn-sm">Edit</a>  --}}
                            <form action="{{ route('faq.destroy', $faq->id)}}" method="POST" class="d-inline" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                            <script>
                                function confirmDelete() {
                                    return confirm("Are you sure you want to delete this FAQs?");
                                }
                            </script>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
