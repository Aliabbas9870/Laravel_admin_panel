





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Why Section</title>
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
                <h4><i class="fas fa-edit"></i> Edit Why Section</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('why.update', $why->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Developer ID</label>
                        <input type="number" class="form-control" name="developer_id" value="{{ $why->developer_id }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Why Section 1</label>
                        <textarea class="form-control" name="why_section1" rows="2">{{ $why->why_section1 }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Why Section 1 Image</label>
                        <input type="file" class="form-control" name="why_1_image" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Why Section 2</label>
                        <textarea class="form-control" name="why_section2" rows="2">{{ $why->why_section2 }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Why Section 2 Image</label>
                        <input type="file" class="form-control" name="why_2_image" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Why Section 3</label>
                        <textarea class="form-control" name="why_section3" rows="2">{{ $why->why_section3 }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Update Why Section</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
