{{-- resources/views/components/director-greeting.blade.php --}}
<section class="bg-white py-12 md:py-20">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap -mx-4 items-center">

            <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                <div class="relative mx-auto max-w-sm">
                    <div class="bg-gray-200 p-2 rounded-lg shadow-lg">
                        <img src="{{ asset('images/direktur.png') }}" alt="Foto Direktur" class="w-full rounded-md">
                    </div>
                    <div class="absolute bottom-4 left-4 bg-gray-900 bg-opacity-75 text-white px-4 py-2 rounded-md">
                        <h3 class="font-bold text-lg">{{ __('db.director_greeting.name') }}</h3>
                        <p class="text-sm">{{ __('db.director_greeting.position') }}</p>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-2/3 px-4">
                <div class="text-left">
                    <p class="text-sm font-semibold uppercase tracking-wider text-blue-600 mb-2">{{ __('db.director_greeting.title') }}</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ __('db.director_greeting.intro') }}</h2>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        {{ __('db.director_greeting.body') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>