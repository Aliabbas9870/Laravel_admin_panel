<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet"


        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-dark text-white sidebar">
                <h3 class="text-center py-4">Admin Panel</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-dark">
                        <a href="/index" class="text-white"><i class="fas fa-home"></i> Dashboard</a>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#pagesMenu" aria-expanded="false">
                            <i class="fas fa-file-alt"></i> Pages
                        </a>
                        <ul class="collapse list-group list-group-flush" id="pagesMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/pages/create">Add Page</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/pages/show">view Pages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#propertiesMenu" aria-expanded="false">
                            <i class="fas fa-building"></i> Properties
                        </a>
                        <ul class="collapse list-group list-group-flush" id="propertiesMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/properties/create">Add New Property</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/properties/view">View Properties</a>
                            </li>
                        </ul>
                    </li>

                    {{--  <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#communitiesMenu" aria-expanded="false">
                            <i class="fas fa-city"></i> Communities
                        </a>
                        <ul class="collapse list-group list-group-flush" id="communitiesMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/community/create">Add Community</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/community/view">View Communities</a>
                            </li>
                        </ul>
                    </li>  --}}
                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#galleryMenu" aria-expanded="false">
                            <i class="fas fa-images"></i> Gallery
                        </a>
                        <ul class="collapse list-group list-group-flush" id="galleryMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/gallery/create">Add Gallery</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/gallery/show">View Gallery</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#amenitiesMenu" aria-expanded="false">
                            <i class="fas fa-list"></i> Add Amenities
                        </a>
                        <ul class="collapse list-group list-group-flush" id="amenitiesMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/amenities/create">Add Amenity</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/amenities/show">View Amenities</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#bannerMenu" aria-expanded="false">
                            <i class="fas fa-sliders-h"></i> Add Banner Slider
                        </a>
                        <ul class="collapse list-group list-group-flush" id="bannerMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/banner/create">Add Banner</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/banner/show">View Banners</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#developerMenu" aria-expanded="false">
                            <i class="fas fa-user"></i> Developer
                        </a>
                        <ul class="collapse list-group list-group-flush" id="developerMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/developer/create">Add Developer</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/developer/show">View Developers</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#faqMenu" aria-expanded="false">
                            <i class="fas fa-question-circle"></i> Add FAQ
                        </a>
                        <ul class="collapse list-group list-group-flush" id="faqMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/faq/create">Add New FAQ</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/faq/view">View FAQs</a>
                            </li>
                        </ul>
                    </li>





                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#contentMenu" aria-expanded="false">
                            <i class="fas fa-file"></i> Add Content
                        </a>
                        <ul class="collapse list-group list-group-flush" id="contentMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/content/create">Add New Content</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/content/view">View Content</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item bg-dark">
                        <a href="#" class="text-white" data-bs-toggle="collapse" data-bs-target="#whyMenu" aria-expanded="false">
                            <i class="fas fa-check"></i> Why
                        </a>
                        <ul class="collapse list-group list-group-flush" id="whyMenu">
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/why/create">Add New Why</a>
                            </li>
                            <li class="list-group-item bg-dark">
                                <a class="text-white" href="/why/show">View Why</a>
                            </li>
                        </ul>
                    </li>

                    <li class="list-group-item bg-dark">
                        <a href="/login" class="text-white"><i class="fas fa-user-shield"></i> Logout</a>
                    </li>
                </ul>
            </div>

      <!-- Page Content -->
                <div id="page-content-wrapper">

                    <div class="container-fluid p-4">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                        <h3 class="mb-4">Dashboard</h3>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Admin</h5>
                                        <p class="card-text">{{$adminC}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-success mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total
                                            Properties</h5>
                                        <p class="card-text">{{$propertyCount}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total
                                            Content</h5>
                                        <p class="card-text">{{$content}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-danger mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Banner</h5>
                                        <p class="card-text">{{$bannerCount}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Calls
                                            Scheduled</h5>
                                        <p class="card-text">{{$schedule}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-success mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total
                                  Why</h5>
                                        <p class="card-text">{{$whyCount}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total
                                            Enquiries</h5>
                                        <p class="card-text">{{$enquiry}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-danger mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Gallery
                                            </h5>
                                        <p class="card-text">{{$galleryCount}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Ammenity</h5>
                                        <p class="card-text">{{$amenityCount}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-success mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total
                                            FAQs</h5>
                                        <p class="card-text">{{$faqCount}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total
                                            Developer</h5>
                                        <p class="card-text">{{$developer}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-danger mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Pages Field
                                            </h5>
                                        <p class="card-text">{{$pages}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

<h4>Pages</h4>
                        <table class="table table-bordered">
                            <tr>
                                {{--  <th>ID</th>  --}}
                                <th>Name</th>
                                <th>Developer Id</th>
                                <th>Slug</th>
                                <th>Whatsapp</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($page as $page)
                            <tr>
                                {{--  <td>{{ $page->id }}</td>  --}}
                                <td>{{ $page->name }}</td>
                                <td>{{ $page->developer_id }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>{{ $page->whatsapp }}</td>
                                <td>{{ $page->phone }}</td>
                                <td>{{ $page->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <!-- Delete Form -->
                                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                    <script>
                                        function confirmDelete() {
                                            return confirm("Are you sure you want to delete this page?");
                                        }
                                    </script>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        <h4>FAQs</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Page Id</th>
                                <th>Developer Id</th>
                                <th>Question</th>
                                <th>Answer</th>

                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($faq as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->page_id }}</td>
                                <td>{{ $page->developer_id }}</td>
                                <td>{{ $page->question }}</td>
                                <td>{{ $page->answer }}</td>

                                <td>{{ $page->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    {{--  <a href="" class="btn btn-warning btn-sm">Edit</a>  --}}
                                    <form action="{{ route('faq.destroy', $page->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                    <script>
                                        function confirmDelete() {
                                            return confirm("Are you sure you want to delete this FAQs?");
                                        }
                                    </script>

                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>






            </div>
        </div>
        <footer>
<h5 >&COPY;copyright reserved</h5>
        </footer>
    </body>
</html>
