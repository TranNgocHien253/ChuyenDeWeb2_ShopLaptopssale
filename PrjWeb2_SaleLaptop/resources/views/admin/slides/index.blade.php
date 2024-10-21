<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Slide</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <script>
        function confirmDelete(event) {
            // Hiển thị hộp thoại xác nhận
            if (!confirm('Are you sure you want to delete this slide?')) {
                event.preventDefault(); // Nếu người dùng nhấn "Cancel", ngăn không cho form được gửi
            }
        }
    </script>
    <style>
        .table-row {
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #8888;
            border-radius: 15px;
        }

        .table-row:hover {
            background-color: #8888;
        }

        .table-header {
            padding: 0 10px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body class="mt-4">
    <div class="container">
        <!-- Hiển thị thông báo thành công nếu có -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- Dropdown and Add User Button -->
        <div class="d-flex justify-content-between mb-4">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Giảm dần
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Giảm dần</a></li>
                    <li><a class="dropdown-item" href="#">Tăng dần</a></li>
                </ul>
            </div>
            <a href="{{ route('admin.slides.create') }}"><button class="btn btn-primary">+ Thêm User</button></a>
        </div>

        <!-- Data Table Structure with divs -->
        <div class="row table-header">
            <div class="col-sm-2 d-flex justify-content-center align-items-center">STT</div>
            <div class="col-sm-3 d-flex justify-content-center align-items-center">Ảnh</div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center">Link</div>
            <div class="col-sm-3 d-flex justify-content-center align-items-center">Thao tác</div>
        </div>
        @foreach($slides as $slide)
        <div class="row table-row">
            <div class="col-sm-2 d-flex justify-content-center align-items-center">{{ $slide->id }}</div>
            <div class="col-sm-3 d-flex justify-content-center align-items-center">
                <img src="{{ asset($slide->image) }}" alt="Image" class="img-fluid" style="height: 80px; width: 120px; object-fit: cover;">
            </div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center"><a href="{{ $slide->link }}">{{ $slide->link }}</a></div>
            <div class="col-sm-3 d-flex justify-content-center align-items-center">
                <!-- Edit button -->
                <a href="{{ route('admin.slides.edit', $slide->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>

                <!-- Delete form -->
                <form action="{{ route('admin.slides.destroy', $slide->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="confirmDelete(event);">Delete</button>
                </form>
            </div>


        </div>
        @endforeach
        <!-- Pagination -->
        <div class="d-flex gap-5 justify-content-end mt-4">
            <button class="btn btn-light">← Previous</button>
            <span class="align-self-center">1</span>
            <button class="btn btn-light">Next →</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>