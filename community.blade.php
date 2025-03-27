<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Community</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-city"></i> Add Community</h4>
            </div>
            <div class="card-body">
                <form action="save_community.php" method="POST" enctype="multipart/form-data">
                    
                    <!-- Community ID -->
                    <div class="mb-3">
                        <label class="form-label">Community ID</label>
                        <input type="number" class="form-control" name="community_id" placeholder="Enter Community ID" required>
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

                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label">Community Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Community Name" required>
                    </div>

                    <!-- Slug -->
                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Enter Slug">
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
                    </div>

                    <!-- About Community -->
                    <div class="mb-3">
                        <label class="form-label">About Community</label>
                        <textarea class="form-control" name="about_community" rows="3" placeholder="Enter About Community"></textarea>
                    </div>

                    <!-- Map -->
                    <div class="mb-3">
                        <label class="form-label">Map URL</label>
                        <input type="text" class="form-control" name="map" placeholder="Enter Map URL">
                    </div>

                    <!-- Photo Upload -->
                    <div class="mb-3">
                        <label class="form-label">Upload Photo</label>
                        <input type="file" class="form-control" name="photo">
                    </div>

                    <!-- Sort Order -->
                    <div class="mb-3">
                        <label class="form-label">Sort Order</label>
                        <input type="number" class="form-control" name="sort_order" placeholder="Enter Sort Order">
                    </div>

                    <!-- Created At -->
                    <div class="mb-3">
                        <label class="form-label">Created At</label>
                        <input type="date" class="form-control" name="created_at">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">Submit Community</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
