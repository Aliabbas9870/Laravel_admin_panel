<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Content</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <a class="btn btn-primary p-2" href="/index"> Back</a>
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-file-alt"></i> Add New Content</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('content.store') }}" method="POST">
                    @csrf

                    <!-- Page ID & Page Type ID -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Page ID</label>
                            <input type="number" class="form-control" name="page_id" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Page Type ID</label>
                            <input type="number" class="form-control" name="page_type_id" required>
                        </div>
                    </div>

                    <!-- Title & Meta -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Meta Description</label>
                            <input type="text" class="form-control" name="meta">
                        </div>
                    </div>

                    <!-- Headings -->
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">H1</label>
                            <input type="text" class="form-control" name="h1">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">H2</label>
                            <input type="text" class="form-control" name="h2">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">H3</label>
                            <input type="text" class="form-control" name="h3">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">H4</label>
                            <input type="text" class="form-control" name="h4">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">H5</label>
                            <input type="text" class="form-control" name="h5">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">H6</label>
                            <input type="text" class="form-control" name="h6">
                        </div>
                    </div>

                    <!-- Paragraphs -->
                    <div class="mb-3">
                        <label class="form-label">Paragraph 1</label>
                        <textarea class="form-control" name="para1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paragraph 2</label>
                        <textarea class="form-control" name="para2" rows="3"></textarea>
                    </div>

                    <!-- Created At & Updated At -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Created At</label>
                            <input type="datetime-local" class="form-control" name="created_at">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Updated At</label>
                            <input type="datetime-local" class="form-control" name="updated_at">
                        </div>
                    </div>

                    <!-- Updated By & Status -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Updated By</label>
                            <input type="text" class="form-control" name="updated_by">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status" required>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">Submit Content</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
