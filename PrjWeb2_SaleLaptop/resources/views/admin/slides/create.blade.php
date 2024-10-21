<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold mb-5">Add New Slide</h1>

    <!-- Nút quay lại -->
    <a href="{{ route('admin.slides.index') }}" class="inline-block bg-red-500 text-white py-2 px-4 rounded mb-5 hover:bg-gray-600 transition">Quay lại</a>

    <!-- Thông báo thành công -->
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <!-- Thông báo lỗi -->
    @if ($errors->any())
    <div class="bg-red-500 text-white p-4 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Form tạo slide -->
    <form action="{{ route('admin.slides.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="link" class="block text-gray-700 font-semibold mb-2">Link</label>
            <input type="text" name="link" id="link" class="border border-gray-300 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required value="{{ old('link') }}">
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-semibold mb-2">Image</label>
            <input type="file" name="image" id="image" class="border border-gray-300 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
        </div>

        <!-- Nút thêm slide -->
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 w-full rounded hover:bg-blue-600 transition">Add Slide</button>
    </form>
</div>

<!-- Nếu cần thêm thư viện JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>