<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Slider Form</title>
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
    <a class="btn btn-primary p-2" href="/index"> Back</a>
    <div class="form-container">
        <h4 class="text-center mb-4">Add Banner Slider</h4>
        <form action="{{ url('/banner/store') }}" method="POST" enctype="multipart/form-data">

@csrf
            <div class="mb-3">
                <label for="page_id" class="form-label">Page ID</label>
                <input type="number" class="form-control" name="page_id" placeholder="Enter Page ID" required>
            </div>
            <div class="mb-3">
                <label for="tag_line" class="form-label">Tag Line</label>
                <input type="text" class="form-control" name="tag_line" placeholder="Enter Tag Line" required>
            </div>
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" name="heading" placeholder="Enter Heading" required>
            </div>
            <div class="mb-3">
                <label for="banner_desc" class="form-label">Banner Description</label>
                <textarea class="form-control" name="banner_desc" rows="3" placeholder="Enter Banner Description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="banner_image" class="form-label">Upload Banner Image</label>
                <input type="file" class="form-control" name="banner_image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" required>
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
