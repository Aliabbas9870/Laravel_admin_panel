<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <a class="btn btn-primary p-2" href="/index"> Back</a>
        <h2 class="text-center mb-4">Properties List</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Developer</th>
                    <th>Location</th>
                    <th>Community</th>
                    <th>Bought Today</th>
                    <th>Viewing</th>
                    <th>Booked Meet</th>
                    <th>Details</th>
                    <th>Payment Plan</th>
                    <th>AED Price</th>
                    <th>USD Price</th>
                    <th>GBP Price</th>
                    <th>Rooms</th>
                    <th>Bathrooms</th>
                    <th>Video</th>
                    <th>Images</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($properity as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>{{ $property->title }}</td>
                        <td>{{ $property->developer_id }}</td>
                        <td>{{ $property->location }}</td>
                        <td>{{ $property->community }}</td>
                        <td>{{ $property->bought_today }}</td>
                        <td>{{ $property->view_currently }}</td>
                        <td>{{ $property->booked_meet }}</td>
                        <td>{{ $property->detail_list }}</td>
                        <td>{{ $property->payment_plan }}</td>
                        <td>{{ $property->aed_price }}</td>
                        <td>{{ $property->usd_price }}</td>
                        <td>{{ $property->gbp_price }}</td>
                        <td>{{ $property->rooms }}</td>
                        <td>{{ $property->bathrooms }}</td>
                        <td>
                            @if($property->video_url)
                                <a href="{{ asset('storage/' . $property->video_url) }}" target="_blank">View Video</a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($property->images)
                                <img src="{{ asset('storage/' . $property->images) }}" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            @if($property->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('properties.destroy', $property->id) }}" method="POST" class="d-inline delete-form">
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
