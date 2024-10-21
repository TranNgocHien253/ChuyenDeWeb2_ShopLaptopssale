<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Slide</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <style>
        .preview-image {
            width: 100px;
            /* Đặt kích thước cho hình ảnh */
            height: auto;
            border: 1px solid #ccc;
            /* Viền cho hình ảnh */
            border-radius: 5px;
            /* Bo góc */
        }
    </style>
</head>

<body>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold">Edit Slide</h1>

        @if (session('success'))
        <div class="bg-green-500 text-white p-2 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="bg-red-500 text-white p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.slides.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="link" class="block text-gray-700">Link</label>
                <input type="text" name="link" id="link" class="border rounded w-full py-2 px-3" required value="{{ old('link', $slide->link) }}">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700">Current Image</label>
                <div class="mb-2">
                    <img src="{{ asset($slide->image) }}" alt="Current Slide Image" class="preview-image" id="current-image">
                </div>
                <label for="image" class="block text-gray-700">New Image (Leave blank to keep current image)</label>
                <input type="file" name="image" id="image" class="border rounded w-full py-2 px-3" accept="image/*" onchange="previewImage(event)">
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update Slide</button>
            <a href="{{ route('admin.slides.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded ml-2">Cancel</a>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0]; // Lấy tệp hình ảnh được chọn
            const reader = new FileReader(); // Tạo một đối tượng FileReader

            reader.onload = function(e) {
                const image = document.getElementById('current-image'); // Lấy thẻ img
                image.src = e.target.result; // Cập nhật thuộc tính src của img với đường dẫn tạm thời
            }

            if (file) {
                reader.readAsDataURL(file); // Đọc tệp hình ảnh và chuyển đổi thành URL tạm thời
            }
        }
    </script>
</body>

</html>