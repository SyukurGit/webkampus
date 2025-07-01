<?php
// resources/lang/id/db.php

return [
    'title'         => 'Dashboard',
    'navbar_brand'    => 'LOGOPASCASARJANA',
    'login_button'    => 'Login',
    'welcome_heading' => 'Selamat Datang di Pascasarjana Uin',
    'welcome_p'       => 'masih dalam tahap pengembangan.',

    'study_programs' => [
        'section_title'    => 'Program Studi',
        'section_subtitle' => 'Pilih Program studi yang anda minati untuk menentukan masa depan yang cemerlang.',
        'master_title'     => 'Akreditasi Studi Magister',
        'doctor_title'     => 'Akreditasi Studi Doktor',
        'accreditation'    => 'Akreditasi',
        'view_details'     => 'Lihat Detail',
        'programs'         => [
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
    ], // <-- PERBAIKAN 1: Kurung siku penutup untuk 'study_programs' seharusnya di sini.

    'director_greeting' => [
        'title'    => 'SAMBUTAN DIREKTUR',
        'intro'    => 'Selamat datang di Pascasarjana UIN Ar-Raniry, tempat di mana inovasi bertemu dengan pengetahuan.',
        'body'     => 'Dengan komitmen pada riset, pembelajaran berbasis praktik, dan kolaborasi industri, kami mempersiapkan mahasiswa untuk menghadapi tantangan global dengan solusi inovatif dan berkelanjutan.',
        'name'     => 'Prof. Eka Srimulyani, MA., Ph.D',
        'position' => 'Direktur Pascasarjana',
    ],

    'vice_director_greeting' => [
        'title'    => 'DARI WAKIL DIREKTUR',
        'intro'    => 'Mendorong Batas Pengetahuan.',
        'body'     => 'Kami berdedikasi untuk membina lingkungan di mana rasa ingin tahu berkembang dan penelitian mutakhir mendorong kemajuan. Bergabunglah dengan kami dalam perjalanan transformatif ini.',
        'name'     => 'Prof. Dr. T. Zulfikar, M.Ed',
        'position' => 'Wakil Direktur Pascasarjana',
    ],

    'carousel_slides' => [
        '1' => 'INOVATIF',
        '2' => 'NASIONALIS',
        '3' => 'UNGGUL',
        '4' => 'AGAMIS', // <-- PERBAIKAN 2: Kunci ini sepertinya salah ketik, seharusnya '4' bukan '4.'
        '5' => 'RESPONSIF',
    ]
];