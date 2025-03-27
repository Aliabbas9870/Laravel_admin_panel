<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="container-fluid p-4">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a class="btn btn-primary p-2" href="/index">Back</a>
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4><i class="fas fa-edit"></i> Edit Content</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('content.update', ['id' => $content->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Page ID -->
                        <div class="mb-3">
                            <label class="form-label">Page ID</label>
                            <input type="number" class="form-control" name="page_id" value="{{ $content->page_id }}" required>
                        </div>

                        <!-- Page Type ID -->
                        <div class="mb-3">
                            <label class="form-label">Page Type ID</label>
                            <input type="number" class="form-control" name="page_type_id" value="{{ $content->page_type_id }}" required>
                        </div>

                        <!-- Title -->
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $content->title }}" required>
                        </div>

                        <!-- Meta -->
                        <div class="mb-3">
                            <label class="form-label">Meta</label>
                            <input type="text" class="form-control" name="meta" value="{{ $content->meta }}">
                        </div>

                        <!-- Headings -->
                        @for ($i = 1; $i <= 6; $i++)
                            <div class="mb-3">
                                <label class="form-label">H{{ $i }}</label>
                                <input type="text" class="form-control" name="h{{ $i }}" value="{{ $content['h'.$i] }}">
                            </div>
                        @endfor

                        <!-- Paragraphs -->
                        <div class="mb-3">
                            <label class="form-label">Paragraph 1</label>
                            <textarea class="form-control" name="para1">{{ $content->para1 }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Paragraph 2</label>
                            <textarea class="form-control" name="para2">{{ $content->para2 }}</textarea>
                        </div>

                        <!-- Updated By -->
                        <div class="mb-3">
                            <label class="form-label">Updated By</label>
                            <input type="text" class="form-control" name="updated_by" value="{{ $content->updated_by }}">
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="1" {{ $content->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $content->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success w-100">Update Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
