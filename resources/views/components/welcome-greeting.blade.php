{{-- resources/views/components/welcome-greeting.blade.php --}}
<section class="bg-white py-12 md:py-20 relative">
    {{-- Definisikan state dengan Alpine.js: 'showDirector' bernilai true secara default --}}
    <div x-data="{ showDirector: true }" class="container mx-auto px-6">

        {{-- Tombol Panah untuk Beralih --}}
        <button @click="showDirector = !showDirector" class="absolute top-1/2 right-4 md:right-8 transform -translate-y-1/2 z-10 bg-white rounded-full h-12 w-12 flex items-center justify-center shadow-lg hover:bg-gray-100 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        {{-- Bagian Sambutan Direktur --}}
        <div x-show="showDirector" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-x-0" x-transition:leave-end="opacity-0 transform -translate-x-4" class="flex flex-wrap -mx-4 items-center">
            <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                <div class="relative mx-auto max-w-sm">
                    <img src="{{ asset('images/direktur.png') }}" alt="Foto Direktur" class="w-full rounded-lg shadow-xl">
                    <div class="absolute bottom-4 left-4 bg-gray-900 bg-opacity-75 text-white px-4 py-2 rounded-md">
                        <h3 class="font-bold text-lg">{{ __('db.director_greeting.name') }}</h3>
                        <p class="text-sm">{{ __('db.director_greeting.position') }}</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-2/3 px-4">
                <p class="text-sm font-semibold uppercase tracking-wider text-blue-600 mb-2">{{ __('db.director_greeting.title') }}</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ __('db.director_greeting.intro') }}</h2>
                <p class="text-gray-600 leading-relaxed text-lg">{{ __('db.director_greeting.body') }}</p>
            </div>
        </div>

        {{-- Bagian Sambutan Wakil Direktur --}}
        <div x-show="!showDirector" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-4" x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform translate-x-0" x-transition:leave-end="opacity-0 transform translate-x-4" class="flex flex-wrap -mx-4 items-center" style="display: none;">
            <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                <div class="relative mx-auto max-w-sm">
                    <img src="{{ asset('images/wakil-direktur.png') }}" alt="Foto Wakil Direktur" class="w-full rounded-lg shadow-xl">
                    <div class="absolute bottom-4 left-4 bg-gray-900 bg-opacity-75 text-white px-4 py-2 rounded-md">
                        <h3 class="font-bold text-lg">{{ __('db.vice_director_greeting.name') }}</h3>
                        <p class="text-sm">{{ __('db.vice_director_greeting.position') }}</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-2/3 px-4">
                <p class="text-sm font-semibold uppercase tracking-wider text-blue-600 mb-2">{{ __('db.vice_director_greeting.title') }}</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ __('db.vice_director_greeting.intro') }}</h2>
                <p class="text-gray-600 leading-relaxed text-lg">{{ __('db.vice_director_greeting.body') }}</p>
            </div>
        </div>

    </div>
</section>