<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add FAQ</title>
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
                <h4><i class="fas fa-question-circle"></i> Add FAQ</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('faq/store') }}" method="POST">
                    @csrf
                    <!-- FAQ ID -->


                    <!-- Question -->
                    <div class="mb-3">
                        <label class="form-label">Question</label>
                        <input type="text" class="form-control" name="question" placeholder="Enter Question" required>
                    </div>

                    <!-- Answer -->
                    <div class="mb-3">
                        <label class="form-label">Answer</label>
                        <textarea class="form-control" name="answer" rows="3" placeholder="Enter Answer" required></textarea>
                    </div>

                    <!-- Page ID -->
                    <div class="mb-3">
                        <label class="form-label">Page ID</label>
                        <input type="number" class="form-control" name="page_id" placeholder="Enter Page ID">
                    </div>

                    <!-- Developer ID -->
                    <div class="mb-3">
                        <label class="form-label">Developer ID</label>
                        <input type="number" class="form-control" name="developer_id" placeholder="Enter Developer ID">
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">Submit FAQ</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
