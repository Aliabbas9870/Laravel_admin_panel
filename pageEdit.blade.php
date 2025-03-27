<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container p-3 mt-4">
        <a class="btn btn-primary p-2" href="/index"> Back</a>
        <h2>Edit Page</h2>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <!-- Page Type ID & Developer ID -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Page Type ID</label>
                    <input type="number" class="form-control" name="page_type_id" value="{{ old('page_type_id', $page->page_type_id) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Developer ID</label>
                    <input type="number" class="form-control" name="developer_id" value="{{ old('developer_id', $page->developer_id) }}" required>
                </div>
            </div>
        
            <!-- Name & Slug -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Page Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $page->name) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ old('slug', $page->slug) }}" required>
                </div>
            </div>
        
            <!-- Images & Video -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" class="form-control" name="banner_image">
                    @if($page->banner_image)
                        <img src="{{ asset('uploads/' . $page->banner_image) }}" width="100" class="mt-2">
                    @endif
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">About Image</label>
                    <input type="file" class="form-control" name="about_image">
                    @if($page->about_image)
                        <img src="{{ asset('uploads/' . $page->about_image) }}" width="100" class="mt-2">
                    @endif
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">About Video</label>
                    <input type="file" class="form-control" name="about_video">
                </div>
            </div>
        
            <!-- Contact Info -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $page->phone) }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsapp" value="{{ old('whatsapp', $page->whatsapp) }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $page->email) }}">
                </div>
            </div>
        
            <!-- Additional Fields -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Payment Plan</label>
                    <input type="text" class="form-control" name="payment_plan" value="{{ old('payment_plan', $page->payment_plan) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Map Picture</label>
                    <input type="file" class="form-control" name="map_pic">
                    @if($page->map_pic)
                        <img src="{{ asset('uploads/' . $page->map_pic) }}" width="100" class="mt-2">
                    @endif
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nearby</label>
                    <input type="text" class="form-control" name="nearby" value="{{ old('nearby', $page->nearby) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Community Amenity</label>
                    <input type="text" class="form-control" name="community_amnity" value="{{ old('community_amnity', $page->community_amnity) }}">
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="form-label">Points</label>
                    <textarea class="form-control" name="points" rows="3">{{ old('points', $page->points) }}</textarea>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="form-label">Contact Info</label>
                    <textarea class="form-control" name="contant_info" rows="3">{{ old('contant_info', $page->contant_info) }}</textarea>
                </div>
            </div>
        
            <!-- Status & Show -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-control" name="status">
                        <option value="1" {{ old('status', $page->status) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $page->status) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Show on Frontend?</label>
                    <select class="form-control" name="Fshow">
                        <option value="1" {{ old('Fshow', $page->Fshow) == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('Fshow', $page->Fshow) == 0 ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>
        
            <button type="submit" class="btn btn-primary w-100">Update Page</button>
        </form>
        
    </div>
</body>
</html>
