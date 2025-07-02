@php
    // Data statis untuk program studi
    $programs = [
        'magister' => [
            ['key' => 's2_tafsir', 'accreditation_key' => 'very_good'],
            ['key' => 's2_islamic_studies', 'accreditation_key' => 'b'],
            ['key' => 's2_islamic_education', 'accreditation_key' => 'very_good'],
            ['key' => 's2_family_law', 'accreditation_key' => 'very_good'],
            ['key' => 's2_islamic_economics', 'accreditation_key' => 'b'],
            ['key' => 's2_communication', 'accreditation_key' => 'b'],
            ['key' => 's2_arabic_education', 'accreditation_key' => 'excellent'],
        ],
        'doktor' => [
            ['key' => 's3_islamic_economics', 'accreditation_key' => 'a'],
            ['key' => 's3_islamic_studies', 'accreditation_key' => 'a'],
            ['key' => 's3_islamic_education', 'accreditation_key' => 'very_good'],
            ['key' => 's3_fiqh', 'accreditation_key' => 'b'],
        ]
    ];
@endphp

<section class="bg-white py-16 md:py-20">
    <div class="container mx-auto px-6">
        {{-- Bagian Studi Doktor --}}
        <div class="mb-16">
            <div class="flex items-center mb-6">
                <div class="w-12 h-0.5 bg-gray-800 mr-4"></div>
                <h3 class="text-2xl font-medium text-gray-800">
                    {{ __('db.study_programs.doctor_title') }}
                </h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($programs['doktor'] as $program)
                    <button onclick="" class="bg-gray-800 text-white p-6 rounded-lg">
                        <h4 class="text-lg font-medium mb-2">
                            {{ __('db.study_programs.programs.' . $program['key']) }}
                        </h4>
                        <p class="text-yellow-400 text-sm font-medium">
                            Akreditasi: {{ __('db.accreditation_levels.' . $program['accreditation_key']) }}
                        </p>
                    </button>
                @endforeach
            </div>
        </div>

        {{-- Bagian Studi Magister --}}
        <div>
            <div class="flex items-center mb-6">
                <div class="w-12 h-0.5 bg-gray-800 mr-4"></div>
                <h3 class="text-2xl font-medium text-gray-800">
                    {{ __('db.study_programs.master_title') }}
                </h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($programs['magister'] as $program)
                    <button class="bg-gray-800 text-white p-6 rounded-lg">
                        <h4 class="text-lg font-medium mb-2">
                            {{ __('db.study_programs.programs.' . $program['key']) }}
                        </h4>
                        <p class="text-yellow-400 text-sm font-medium">
                            Akreditasi: {{ __('db.accreditation_levels.' . $program['accreditation_key']) }}
                        </p>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</section>