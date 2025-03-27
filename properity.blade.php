<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Property</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <a class="btn btn-primary p-2" href="/index"> Back</a>
        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h4><i class="fas fa-building"></i> Add New Property</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Title & Developer ID -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Property Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Property Title" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Developer ID</label>
                            <input type="number" class="form-control" name="developer_id" placeholder="Enter Developer ID" required>
                        </div>
                    </div>

                    <!-- Location & Community -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Location" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Community</label>
                            <input type="text" class="form-control" name="community" placeholder="Enter Community Name">
                        </div>
                    </div>

                    <!-- Bought Today, View Currently, Booked Meet -->
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Bought Today</label>
                            <input type="number" class="form-control" name="bought_today" placeholder="Enter Number">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">View Currently</label>
                            <input type="number" class="form-control" name="view_currently" placeholder="Enter Number">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Booked Meet</label>
                            <input type="number" class="form-control" name="bookedMeet" placeholder="Enter Number">
                        </div>
                    </div>

                    <!-- Detail List & Payment Plan -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Detail List</label>
                            <textarea class="form-control" name="detailList" placeholder="Enter Property Details" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Payment Plan</label>
                            <input type="text" class="form-control" name="payment_plan" placeholder="Enter Payment Plan">
                        </div>
                    </div>

                    <!-- Price in Different Currencies -->
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Price (AED)</label>
                            <input type="text" class="form-control" name="aed_price" placeholder="Enter AED Price">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Price (USD)</label>
                            <input type="text" class="form-control" name="usd_price" placeholder="Enter USD Price">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Price (GBP)</label>
                            <input type="text" class="form-control" name="gbp_price" placeholder="Enter GBP Price">
                        </div>
                    </div>

                    <!-- Rooms & Bathrooms -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Rooms</label>
                            <input type="number" class="form-control" name="rooms" placeholder="Enter Number of Rooms">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Bathrooms</label>
                            <input type="number" class="form-control" name="bathrooms" placeholder="Enter Number of Bathrooms">
                        </div>
                    </div>

                    <!-- Video & Images -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Property Video</label>
                            <input type="file" class="form-control" name="video_url">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Property Images</label>
                            <input type="file" class="form-control" name="images" multiple>
                        </div>
                    </div>

                    <!-- Community ID -->
                    <div class="mb-3">
                        <label class="form-label">Community ID</label>
                        <input type="number" class="form-control" name="community_id" placeholder="Enter Community ID">
                    </div>

                    <!-- Status & Sort Order -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Sort Order</label>
                            <input type="number" class="form-control" name="sort_order" placeholder="Enter Sort Order">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">Submit Property</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
