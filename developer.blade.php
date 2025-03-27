<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Developer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <a class="btn btn-primary p-2" href="/index"> Back</a>
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-user-tie"></i> Add Developer</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('developer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Developer Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Developer Name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Developer Photo</label>
                        <input type="file" class="form-control" name="photo" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Icon 1 Text</label>
                        <input type="text" class="form-control" name="icon_1_text" placeholder="Enter Icon 1 Text">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Icon 2 Text</label>
                        <input type="text" class="form-control" name="icon_2_text" placeholder="Enter Icon 2 Text">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Icon 3 Text</label>
                        <input type="text" class="form-control" name="icon_3_text" placeholder="Enter Icon 3 Text">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Copyright Text</label>
                        <input type="text" class="form-control" name="copyright_text" placeholder="Enter Copyright Text">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sort Order</label>
                        <input type="number" class="form-control" name="sort_order" placeholder="Enter Sort Order">
                    </div>

                    <button type="submit" class="btn btn-success w-100">Submit Developer</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
