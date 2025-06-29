<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Berita Baru - Admin Panel</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #555;
        }
        .form-control, .form-control-file {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Penting agar padding tidak menambah lebar */
        }
        textarea.form-control {
            min-height: 200px;
            resize: vertical;
        }
        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            margin-right: 10px;
        }
        .btn-primary {
            background-color: #3498db;
            color: white;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }
        .btn-secondary {
            background-color: #7f8c8d;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #6c7a7b;
        }
        .action-buttons {
            margin-top: 30px;
            text-align: right;
        }
        /* Styling untuk Tab */
        .tab-nav {
            border-bottom: 2px solid #dee2e6;
            margin-bottom: 20px;
        }
        .tab-link {
            border: none;
            background: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            margin-bottom: -2px;
        }
        .tab-link.active {
            border-bottom-color: #3498db;
            font-weight: 600;
        }
        .tab-pane {
            display: none;
        }
        .tab-pane.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto max-w-4xl py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Input Berita Baru</h1>

        {{-- Menampilkan pesan sukses jika ada --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Sukses!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        {{-- Menampilkan error validasi jika ada --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar Utama (Opsional)</label>
                <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-6 p-4 border rounded">
                <h3 class="text-xl font-semibold mb-2">Bahasa Indonesia</h3>
                <div class="mb-4">
                    <label for="title_id" class="block text-gray-700 text-sm font-bold mb-2">Judul (ID)</label>
                    <input type="text" name="title_id" id="title_id" value="{{ old('title_id') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div>
                    <label for="content_id" class="block text-gray-700 text-sm font-bold mb-2">Konten (ID)</label>
                    <textarea name="content_id" id="content_id" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('content_id') }}</textarea>
                </div>
            </div>

            <div class="mb-6 p-4 border rounded">
                <h3 class="text-xl font-semibold mb-2">English</h3>
                <div class="mb-4">
                    <label for="title_en" class="block text-gray-700 text-sm font-bold mb-2">Title (EN)</label>
                    <input type="text" name="title_en" id="title_en" value="{{ old('title_en') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div>
                    <label for="content_en" class="block text-gray-700 text-sm font-bold mb-2">Content (EN)</label>
                    <textarea name="content_en" id="content_en" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('content_en') }}</textarea>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan Berita
                </button>
                <a href="{{ route('dashboard') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Kembali ke Dashboard
                </a>
            </div>
        </form>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabLinks = document.querySelectorAll('.tab-link');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');

                    // Non-aktifkan semua tab
                    tabLinks.forEach(item => item.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    // Aktifkan tab yang diklik
                    this.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        });
    </script>

</body>
</html>