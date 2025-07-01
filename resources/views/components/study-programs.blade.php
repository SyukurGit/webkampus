{{-- resources/views/components/study-programs.blade.php --}}
@php
    // Data statis untuk akreditasi, bisa dihubungkan ke database nanti
    $programs = [
        'magister' => [
            ['key' => 's2_tafsir', 'accreditation' => 'Baik Sekali'],
            ['key' => 's2_islamic_studies', 'accreditation' => 'B'],
            ['key' => 's2_islamic_education', 'accreditation' => 'Baik Sekali'],
            ['key' => 's2_family_law', 'accreditation' => 'Baik Sekali'],
            ['key' => 's2_islamic_economics', 'accreditation' => 'B'],
            ['key' => 's2_communication', 'accreditation' => 'B'],
            ['key' => 's2_arabic_education', 'accreditation' => 'Unggul'],
        ],
        'doktor' => [
            ['key' => 's3_islamic_economics', 'accreditation' => 'A'],
            ['key' => 's3_islamic_studies', 'accreditation' => 'A'],
            ['key' => 's3_islamic_education', 'accreditation' => 'Baik Sekali'],
            ['key' => 's3_fiqh', 'accreditation' => 'B'],
        ]
    ];
@endphp

<section class="bg-gray-800 text-white py-16 md:py-24">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-3">{{ __('db.study_programs.section_title') }}</h2>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto">{{ __('db.study_programs.section_subtitle') }}</p>
    </div>

    <div class="container mx-auto px-6 mt-12">
        {{-- Bagian Studi Doktor --}}
        <div class="mb-12">
            <div class="flex items-center mb-6">
                <span class="w-10 h-1 bg-blue-500 rounded-full"></span>
                <h3 class="ml-4 text-2xl font-semibold">{{ __('db.study_programs.doctor_title') }}</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($programs['doktor'] as $program)
                    <a href="#" class="bg-gray-900/50 p-6 rounded-lg shadow-lg hover:bg-gray-700/70 hover:-translate-y-2 transition-all duration-300 group no-underline text-white">
                        <div class="flex justify-between items-start">
                            <h4 class="text-xl font-bold mb-2">{{ __('db.study_programs.programs.' . $program['key']) }}</h4>
                            <span class="bg-gray-700 text-xs font-semibold px-3 py-1 rounded-full">{{ $program['accreditation'] }}</span>
                        </div>
                        <span class="text-blue-400 group-hover:text-blue-300 transition-colors duration-300">
                            {{ __('db.study_programs.view_details') }} &rarr;
                        </span>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Bagian Studi Magister --}}
        <div>
            <div class="flex items-center mb-6">
                <span class="w-10 h-1 bg-blue-500 rounded-full"></span>
                <h3 class="ml-4 text-2xl font-semibold">{{ __('db.study_programs.master_title') }}</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($programs['magister'] as $program)
                    <a href="#" class="bg-gray-900/50 p-6 rounded-lg shadow-lg hover:bg-gray-700/70 hover:-translate-y-2 transition-all duration-300 group no-underline text-white">
                        <div class="flex justify-between items-start">
                            <h4 class="text-xl font-bold mb-2">{{ __('db.study_programs.programs.' . $program['key']) }}</h4>
                            <span class="bg-gray-700 text-xs font-semibold px-3 py-1 rounded-full">{{ $program['accreditation'] }}</span>
                        </div>
                        <span class="text-blue-400 group-hover:text-blue-300 transition-colors duration-300">
                            {{ __('db.study_programs.view_details') }} &rarr;
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>