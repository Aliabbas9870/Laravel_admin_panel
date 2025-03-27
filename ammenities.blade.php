<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amenities Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

    <div class="form-container">

  <a class="btn btn-primary p-2" href="/index"> Back</a>
        <h4 class="text-center mb-4">Add New Amenity</h4>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{--  <form action="{{ url('/amenities/store') }}" method="POST" enctype="multipart/form-data">
              --}}

              <form action="{{ route('amenities.store') }}" method="POST" enctype="multipart/form-data">

              @csrf
            <div class="mb-3">
                <label for="page_id" class="form-label">Page ID</label>
                <input type="number" class="form-control" name="page_id" id="page_id" placeholder="Enter Page ID" required>
            </div>
            <div class="mb-3">
                <label for="developer_id" class="form-label">Developer ID</label>
                <input type="number" class="form-control" name="developer_id" id="developer_id" placeholder="Enter Developer ID" required>
            </div>
            <div class="mb-3">
                <label for="img1" class="form-label">Upload Image</label>
                <input type="file" class="form-control" name="img1" id="img1">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id="status" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
