@php
    // Data untuk gambar fasilitas (tidak berubah)
    $facilities = [
        ['image' => 'fasilitas-1.jpg', 'text_key' => 'facilities.items.0'],
        ['image' => 'fasilitas-2.jpg', 'text_key' => 'facilities.items.1'],
        ['image' => 'fasilitas-3.jpg', 'text_key' => 'facilities.items.2'],
        ['image' => 'fasilitas-4.jpg', 'text_key' => 'facilities.items.3'],
        ['image' => 'fasilitas-5.jpg', 'text_key' => 'facilities.items.4'],
        ['image' => 'fasilitas-6.jpg', 'text_key' => 'facilities.items.5'],
        ['image' => 'fasilitas-7.jpg', 'text_key' => 'facilities.items.6'],
        ['image' => 'fasilitas-8.jpg', 'text_key' => 'facilities.items.7'],
        ['image' => 'fasilitas-9.jpg', 'text_key' => 'facilities.items.8'],
    ];
@endphp

<section class="bg-customwhite: '#FCFEFE', py-16 md:py-24">
    <div class="container mx-auto px-6">
        {{-- Judul Seksi --}}
        <div class="flex items-center mb-12">
            <span class="w-10 h-1 bg-black rounded-full"></span>
            <h2 class="ml-4 text-3xl font-bold text-black">{{ __('db.facilities.section_title') }}</h2>
        </div>

        {{-- Grid untuk Fasilitas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            
            @foreach ($facilities as $facility)
            <div class="relative rounded-lg overflow-hidden group shadow-lg">
                {{-- Gambar Latar --}}
                <img src="{{ asset('images/' . $facility['image']) }}" alt="{{ __($facility['text_key']) }}" class="w-full h-64 object-cover">
                
                {{-- Overlay Gelap --}}
                <div class="absolute inset-0 bg-black opacity-30 group-hover:opacity-50 transition-opacity duration-300"></div>

                {{-- ========================================================== --}}
                {{-- Teks Overlay yang Sudah Diperbaiki --}}
                {{-- ========================================================== --}}
                <div class="absolute top-4 left-0">
                    <div class="bg-black backdrop-blur-sm text-white px-5 py-2" style="clip-path: polygon(0 0, 100% 0, 93% 50%, 100% 100%, 0 100%);">
                        <h3 class="font-bold text-xl">{{ __($facility['text_key']) }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>