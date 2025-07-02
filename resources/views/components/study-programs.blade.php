{{-- resources/views/components/study-programs.blade.php --}}
@php
    // Data untuk program studi. Kunci akreditasi akan kita gunakan untuk terjemahan.
    $programs = [
        'doktor' => [
            ['key' => 's3_islamic_economics', 'accreditation_key' => 'a', 'link' => '#'],
            ['key' => 's3_islamic_studies', 'accreditation_key' => 'a', 'link' => '#'],
            ['key' => 's3_islamic_education', 'accreditation_key' => 'very_good', 'link' => '#'],
            ['key' => 's3_fiqh', 'accreditation_key' => 'b', 'link' => '#'],
        ],
        'magister' => [
            ['key' => 's2_tafsir', 'accreditation_key' => 'very_good', 'link' => '#'],
            ['key' => 's2_islamic_studies', 'accreditation_key' => 'b', 'link' => 'https://pps.ar-raniry.ac.id/program-studi/pendidikan-agama-islam-s3/'],
            ['key' => 's2_islamic_education', 'accreditation_key' => 'very_good', 'link' => '#'],
            ['key' => 's2_family_law', 'accreditation_key' => 'very_good', 'link' => '#'],
            ['key' => 's2_islamic_economics', 'accreditation_key' => 'b', 'link' => '#'],
            ['key' => 's2_communication', 'accreditation_key' => 'b', 'link' => '#'],
            ['key' => 's2_arabic_education', 'accreditation_key' => 'excellent', 'link' => '#'],
        ],
    ];
@endphp

{{-- Style custom untuk efek hover pada kartu --}}
<style>
    .program-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .program-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
</style>

<section class="bg-white py-16 md:py-20">
    <div class="container mx-auto px-6 max-w-7xl">

        {{-- Doktor --}}
        <div class="mb-16">
            <div class="flex items-center mb-8">
                <span class="w-12 h-1 bg-blue-600 rounded-full"></span>
                <h3 class="ml-4 text-2xl md:text-3xl font-medium text-gray-800">
                    {{ __('db.study_programs.doctor_title') }}
                </h3>
            </div>

            {{-- Mengubah gap-6 menjadi gap-4 dan properti di dalam kartu --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($programs['doktor'] as $program)
                    {{-- Mengubah p-6 menjadi p-4 untuk padding yang lebih kecil --}}
                    <a href="{{ $program['link'] }}" class="program-card bg-red-700 text-white p-4 rounded-lg shadow-md no-underline flex flex-col justify-between">
                        <div>
                            {{-- Mengubah ukuran font menjadi lebih kecil --}}
                            <h4 class="text-base md:text-lg font-semibold mb-2">
                                {{ __('db.study_programs.programs.' . $program['key']) }}
                            </h4>
                        </div>
                        {{-- Mengubah margin-top menjadi mt-2 dan ukuran font tetap kecil --}}
                        <p class="text-yellow-300 text-sm font-medium mt-2">
                            {{ __('db.study_programs.accreditation') }}: {{ __('db.accreditation_levels.' . $program['accreditation_key']) }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Magister --}}
        <div>
            <div class="flex items-center mb-8">
                <span class="w-12 h-1 bg-blue-600 rounded-full"></span>
                <h3 class="ml-4 text-2xl md:text-3xl font-medium text-gray-800">
                    {{ __('db.study_programs.master_title') }}
                </h3>
            </div>

            {{-- Mengubah gap-6 menjadi gap-4 dan properti di dalam kartu --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($programs['magister'] as $program)
                     {{-- Mengubah p-6 menjadi p-4 untuk padding yang lebih kecil --}}
                    <a href="{{ $program['link'] }}" class="program-card bg-red-700 text-white p-4 rounded-lg shadow-md no-underline flex flex-col justify-between">
                        <div>
                            {{-- Mengubah ukuran font menjadi lebih kecil --}}
                            <h4 class="text-base md:text-lg font-semibold mb-2">
                                {{ __('db.study_programs.programs.' . $program['key']) }}
                            </h4>
                        </div>
                        {{-- Mengubah margin-top menjadi mt-2 dan ukuran font tetap kecil --}}
                        <p class="text-yellow-300 text-sm font-medium mt-2">
                            {{ __('db.study_programs.accreditation') }}: {{ __('db.accreditation_levels.' . $program['accreditation_key']) }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</section>