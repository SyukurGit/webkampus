<?php

// ============================================
// FILE BAHASA: resources/lang/id/db.php
// Deskripsi: Semua teks statis yang dipakai di frontend
// ============================================

return [

    // =======================
    // Bagian Umum & Header
    // =======================
    'title'           => 'Dashboard',
    'navbar_brand'    => 'LOGOPASCASARJANA',
    'login_button'    => 'Login',
    'welcome_heading' => 'Selamat Datang di Pascasarjana Uin',
    'welcome_p'       => 'masih dalam tahap pengembangan.',

    'navbar' => [
    'home' => 'Home',
    'profile' => 'Profil',
    'study_programs' => 'Program Studi',
    'academics' => 'Akademik',
    'service' => 'Pengabdian',
    'research' => 'Penelitian',
    'thesis_defense_schedule' => 'Daftar Sidang',
],


    'facilities' => [
    'section_title' => 'RAGAM FASILITAS PENDUKUNG',
    'items' => [
        'Ruang Kuliah Doktor',
        'Panggung INSPIRASI',
        'PUSAT INOVASI',
        'WISMA',
        'Ruang Lab/Kreasi',
        'Perpustakaan',
        'Ruang Akademik/Umum',
        'Ruang Podcast',
        'Ruang Lab. Komputer',
    ]
],

    // =======================
    // Fitur Utama (Why Us, Campus Life, Admission)
    // =======================
    'key_features' => [
        'feature1_title' => 'Why Us?',
        'feature1_text'  => 'Pascasarjana merupakan salah satu program Unggulan yang dimiliki UIN Ar-Raniry Banda Aceh.',
        'feature2_title' => 'Campus Life',
        'feature2_text'  => 'Melaksanakan pembelajaran dengan atmosfer yang nyaman, lokasi yang strategis serta dilengkapi dengan sarana prasarana yang memadai.',
        'feature3_title' => 'Admission',
        'feature3_text'  => 'Mari menjadi bagian dari kami "Pascasarjana UIN Ar-raniry Banda Aceh".',
    ],

    // =======================
    // Level Akreditasi
    // =======================
    'accreditation_levels' => [
        'excellent'  => 'Unggul',
        'very_good'  => 'Baik Sekali',
        'good'       => 'Baik',
        'a'          => 'A',
        'b'          => 'B',
    ],

    // =======================
    // Program Studi (S2 & S3)
    // =======================
    'study_programs' => [
        'section_title'    => 'Program Studi',
        'section_subtitle' => 'Pilih Program studi yang anda minati untuk menentukan masa depan yang cemerlang.',
        'master_title'     => 'Akreditasi Studi Magister',
        'doctor_title'     => 'Akreditasi Studi Doktor',
        'accreditation'    => 'Akreditasi',
        'view_details'     => 'Lihat Detail',

        // --- List program studi ---
        'programs' => [
            // Magister (S2)
            's2_tafsir'            => 'Ilmu Al-Qur\'an dan Tafsir [S2]',
            's2_islamic_studies'   => 'Ilmu Agama Islam [S2]',
            's2_islamic_education' => 'Pendidikan Agama Islam [S2]',
            's2_family_law'        => 'Hukum Keluarga [S2]',
            's2_islamic_economics' => 'Ekonomi Syariah [S2]',
            's2_communication'     => 'Komunikasi dan Penyiaran Islam [S2]',
            's2_arabic_education'  => 'Pendidikan Bahasa Arab [S2]',
            // Doktor (S3)
            's3_islamic_economics' => 'Ekonomi Syariah [S3]',
            's3_islamic_studies'   => 'Studi Islam [S3]',
            's3_islamic_education' => 'Pendidikan Agama Islam [S3]',
            's3_fiqh'              => 'Fiqih Modern [S3]',
        ],
    ], // <<< Di sini penutup array 'study_programs'

    // =======================
    // Sambutan Direktur
    // =======================
    'director_greeting' => [
        'title'    => '---SAMBUTAN DIREKTUR---',
        'intro'    => 'Selamat datang di Pascasarjana UIN Ar-Raniry, pusat integrasi ilmu pengetahuan, nilai-nilai keislaman, dan inovasi berkelanjutan.',
        'body'     => 'Kami berkomitmen membentuk lulusan yang unggul secara akademik, berdaya saing global, dan berakar kuat pada etika serta spiritualitas. Melalui riset, kolaborasi, dan pembelajaran transformatif, Pascasarjana UIN Ar-Raniry hadir sebagai ruang tumbuhnya pemimpin masa depan yang visioner dan berintegritas.',
        'name'     => 'Prof. Eka Srimulyani, MA., Ph.D',
        'position' => 'Direktur Pascasarjana',
        'slogan'   => 'Energi Kebangsaan, Sinergi Membangun Negeri',
    ],

    // =======================
    // Sambutan Wakil Direktur
    // =======================
    'vice_director_greeting' => [
        'title'    => 'DARI WAKIL DIREKTUR',
        'intro'    => 'Mendorong Batas Pengetahuan.',
        'body'     => 'Kami berdedikasi untuk membina lingkungan di mana rasa ingin tahu berkembang dan penelitian mutakhir mendorong kemajuan. Bergabunglah dengan kami dalam perjalanan transformatif ini.',
        'name'     => 'Prof. Dr. T. Zulfikar, M.Ed',
        'position' => 'Wakil Direktur Pascasarjana',
    ],

    // =======================
    // Carousel Slide (Kata kunci)
    // =======================
    'carousel_slides' => [
        '1' => 'INOVATIF',
        '2' => 'NASIONALIS',
        '3' => 'UNGGUL',
        '4' => 'AGAMIS',
        '5' => 'RESPONSIF',
    ], // <<< Kalau mau nambah slide, masukin sebelum tanda kurung tutup ini

    // =======================
    // Footer (Bagian Bawah Halaman)
    // =======================
    'footer' => [
        'slogan'         => 'Membangun negeri bersama generasi muda',

        // --- Menu Profil ---
        'profile_title'  => 'PROFIL',
        'profile_links'  => [
            'Sejarah',
            'Visi dan Misi',
            'Dekanat',
            'Struktur Organisasi',
            'Professor',
            'Tenaga Kependidikan',
            'Kerja Sama',
        ],

        // --- Menu Pendidikan ---
        'education_title' => 'PENDIDIKAN',
        'education_links' => [
            'Fakultas',
            'Penjaminan Mutu',
            'Mahasiswa',
        ],

        // --- Menu Informasi ---
        'info_title' => 'INFORMASI',
        'info_links' => [
            'Berita',
            'Pusat Data',
            'Status Skripsi',
        ],

        // --- Link Cepat ---
        'quick_links_title' => 'LINK CEPAT',
        'quick_links' => [
            'UIN Ar-Raniry',
            'Gugus Jaminan Mutu',
            'Tim Pengembang Web FST',
        ],

        // --- Copyright ---
        'copyright' => 'Dev Team Teknologi Informasi',
    ], // <<< Di sini penutup array 'footer'

]; // <<< Jangan tulis apa-apa di bawah sini. Ini penutup utama file return[]
