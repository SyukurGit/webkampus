{{-- resources/views/components/hero-carousel.blade.php --}}

@php
    // Mendefinisikan nama file gambar dari folder public/images
    $images = [
        'carousel-1.jpg',
        'carousel-2.jpg',
        'carousel-3.jpg',
        'carousel-4.jpg',
        'carousel-5.jpg',
    ];
@endphp

<div 
    x-data="{ activeSlide: 1, totalSlides: {{ count($images) }} }" 
    x-init="setInterval(() => { activeSlide = (activeSlide % totalSlides) + 1 }, 3000)"
    class="relative w-full h-115 bg-gray-800"
>
    @foreach ($images as $index => $image)
        <div 
            x-show="activeSlide === {{ $index + 1 }}"
            x-transition:enter="transition ease-in-out duration-1000"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-1000"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0"
        >
            {{-- ========================================================== --}}
            {{-- INI ADALAH PERBAIKANNYA --}}
            {{-- Path gambar sekarang diperbaiki untuk menunjuk ke file yang benar di folder public/images --}}
            <img src="{{ asset('images/' . $image) }}" alt="Carousel Image {{ $index + 1 }}" class="w-full h-full object-cover">
            {{-- ========================================================== --}}

            {{-- Overlay Gelap untuk Kontras --}}
            <div class="absolute inset-0 bg-black opacity-40"></div>
            
            {{-- Teks di Tengah (Ini sudah benar, mengambil dari file bahasa) --}}
            <div class="absolute inset-0 flex items-center justify-center p-4">
                <h2 class="text-white text-4xl md:text-6xl font-bold text-center drop-shadow-lg">
                    {{-- Mengambil teks secara dinamis berdasarkan urutan gambar --}}
                    {{ __('db.carousel_slides.' . ($index + 1)) }}
                </h2>
            </div>
        </div>
    @endforeach

    {{-- Tombol Navigasi Slide (Bullets) --}}
    <div class="absolute bottom-5 left-1/2 -translate-x-1/2 flex space-x-3 z-10">
        @foreach ($images as $index => $image)
            <button 
                @click="activeSlide = {{ $index + 1 }}"
                :class="{ 'bg-white': activeSlide === {{ $index + 1 }}, 'bg-white/50': activeSlide !== {{ $index + 1 }} }"
                class="w-3 h-3 rounded-full hover:bg-white transition"></button>
        @endforeach
    </div>
</div>