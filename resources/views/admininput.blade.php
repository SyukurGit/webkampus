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
<body>

    <div class="container">
        <h1>Input Berita Baru</h1>

        {{-- Ganti 'admin.berita.store' dengan nama rute Anda nanti --}}
        <form action="#" method="Post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="featured_image">Gambar Utama (Featured Image)</label>
                <input type="file" id="featured_image" name="featured_image" class="form-control-file" accept="image/*" required>
            </div>

            <hr>

            <div class="tab-nav">
                <button type="button" class="tab-link active" data-tab="indonesia">Bahasa Indonesia</button>
                <button type="button" class="tab-link" data-tab="english">English</button>
            </div>

            <div class="tab-content">
                <div id="indonesia" class="tab-pane active">
                    <div class="form-group">
                        <label for="title_id">Judul Berita (Indonesia)</label>
                        <input type="text" id="title_id" name="title_id" class="form-control" placeholder="Masukkan judul dalam Bahasa Indonesia" required>
                    </div>
                    <div class="form-group">
                        <label for="content_id">Isi Berita (Indonesia)</label>
                        <textarea id="content_id" name="content_id" class="form-control" placeholder="Tuliskan isi berita lengkap di sini..." required></textarea>
                    </div>
                </div>

                <div id="english" class="tab-pane">
                    <div class="form-group">
                        <label for="title_en">News Title (English)</label>
                        <input type="text" id="title_en" name="title_en" class="form-control" placeholder="Enter title in English" required>
                    </div>
                    <div class="form-group">
                        <label for="content_en">News Content (English)</label>
                        <textarea id="content_en" name="content_en" class="form-control" placeholder="Write the full news content here..." required></textarea>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <button type="submit" name="status" value="draft" class="btn btn-secondary">Simpan sebagai Draft</button>
                <button type="submit" name="status" value="published" class="btn btn-primary">Luncurkan Berita</button>
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