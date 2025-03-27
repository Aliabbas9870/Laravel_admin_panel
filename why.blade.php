<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Why Section</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a class="btn btn-primary p-2" href="/index"> Back</a>
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-question-circle"></i> Add Why Section</h4>
            </div>
            <div class="card-body">
                <!-- Form Submission to Laravel Controller -->
                <form action="{{ url("/why-section/store") }}" method="POST" enctype="multipart/form-data">
                    @csrf  <!-- CSRF Token Required in Laravel -->

                    <!-- Developer ID -->
                    <div class="mb-3">
                        <label class="form-label">Developer ID</label>
                        <input type="number" class="form-control" name="developer_id" placeholder="Enter Developer ID" required>
                    </div>

                    <!-- Why Section 1 & Image -->
                    <div class="mb-3">
                        <label class="form-label">Why Section 1</label>
                        <textarea class="form-control" name="why_section1" rows="2" placeholder="Enter Why Section 1"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Why Section 1 Image</label>
                        <input type="file" class="form-control" name="why_1_image" accept="image/*">
                    </div>

                    <!-- Why Section 2 & Image -->
                    <div class="mb-3">
                        <label class="form-label">Why Section 2</label>
                        <textarea class="form-control" name="why_section2" rows="2" placeholder="Enter Why Section 2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Why Section 2 Image</label>
                        <input type="file" class="form-control" name="why_2_image" accept="image/*">
                    </div>

                    <!-- Why Section 3 -->
                    <div class="mb-3">
                        <label class="form-label">Why Section 3</label>
                        <textarea class="form-control" name="why_section3" rows="2" placeholder="Enter Why Section 3"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">Submit Why Section</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
