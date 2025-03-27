<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <a class="btn btn-primary" href="/index"> Back</a>
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-file-alt"></i> Add New Page</h4>

            </div>

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <div class="card-body">
                <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Page Type ID & Developer ID -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Page Type ID</label>
                            <input type="number" class="form-control" name="page_type_id" placeholder="Enter Page Type ID" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Developer ID</label>
                            <input type="number" class="form-control" name="developer_id" placeholder="Enter Developer ID" required>
                        </div>
                    </div>

                    <!-- Name & Slug -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Page Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Page Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" placeholder="Enter Slug" required>
                        </div>
                    </div>

                    <!-- Images & Video -->
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Banner Image</label>
                            <input type="file" class="form-control" name="banner_image" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">About Image</label>
                            <input type="file" class="form-control" name="about_image">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">About Video</label>
                            <input type="file" class="form-control" name="about_video">
                        </div>
                    </div>

                    <!-- Contact Details -->
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">WhatsApp</label>
                            <input type="text" class="form-control" name="whatsapp" placeholder="Enter WhatsApp">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                    </div>

                    <!-- Payment Plan & Map -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Payment Plan</label>
                            <input type="text" class="form-control" name="payment_plan" placeholder="Enter Payment Plan">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Map Image</label>
                            <input type="file" class="form-control" name="map_pic">
                        </div>
                    </div>


                    <!-- Additional Info -->
                    <div class="mb-3">
                        <label class="form-label">Nearby</label>
                        <input type="text" class="form-control" name="nearby" placeholder="Enter Nearby Places">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Community Amenities</label>
                        <input type="text" class="form-control" name="community_amnity" placeholder="Enter Community Amenities">
                    </div>

                    <!-- Content Info -->
                    <div class="mb-3">
                        <label class="form-label">Points</label>
                        <textarea class="form-control" name="points" placeholder="Enter Points" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content Info</label>
                        <textarea class="form-control" name="contant_info" placeholder="Enter Content Info" rows="3"></textarea>
                    </div>

                    <!-- Status & Show -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Show on Frontend?</label>
                            <select class="form-control" name="Fshow">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success w-100">Submit Page</button>
                </form>
            </div>



        </div>
    </div>

</body>
</html>
