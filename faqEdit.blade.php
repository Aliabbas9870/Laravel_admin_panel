<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit FAQ</title>
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
            <a class="btn btn-primary p-2" href="/index"> Back</a>
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4><i class="fas fa-edit"></i> Edit FAQ</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('faq.update', ['id' => $faq->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Question -->
                        <div class="mb-3">
                            <label class="form-label">Question</label>
                            <input type="text" class="form-control" name="question" value="{{ $faq->question }}" required>
                        </div>

                        <!-- Answer -->
                        <div class="mb-3">
                            <label class="form-label">Answer</label>
                            <textarea class="form-control" name="answer" rows="3" required>{{ $faq->answer }}</textarea>
                        </div>

                        <!-- Page ID -->
                        <div class="mb-3">
                            <label class="form-label">Page ID</label>
                            <input type="number" class="form-control" name="page_id" value="{{ $faq->page_id }}">
                        </div>

                        <!-- Developer ID -->
                        <div class="mb-3">
                            <label class="form-label">Developer ID</label>
                            <input type="number" class="form-control" name="developer_id" value="{{ $faq->developer_id }}">
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="1" {{ $faq->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $faq->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success w-100">Update FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
