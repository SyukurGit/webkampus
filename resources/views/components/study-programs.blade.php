@php
    // Data untuk program studi (tidak berubah)
    $programs = [
        'doktor' => [
            ['key' => 's3_islamic_economics', 'accreditation_key' => 'a', 'link' => '#'],
            ['key' => 's3_islamic_studies', 'accreditation_key' => 'a', 'link' => '#'],
            ['key' => 's3_islamic_education', 'accreditation_key' => 'very_good', 'link' => '#'],
            ['key' => 's3_fiqh', 'accreditation_key' => 'b', 'link' => '#'],
        ],
        'magister' => [
            ['key' => 's2_tafsir', 'accreditation_key' => 'very_good', 'link' => '#'],
            ['key' => 's2_islamic_studies', 'accreditation_key' => 'b', 'link' => '#'],
            ['key' => 's2_islamic_education', 'accreditation_key' => 'very_good', 'link' => '#'],
            ['key' => 's2_family_law', 'accreditation_key' => 'very_good', 'link' => '#'],
            ['key' => 's2_islamic_economics', 'accreditation_key' => 'b', 'link' => '#'],
            ['key' => 's2_communication', 'accreditation_key' => 'b', 'link' => '#'],
            ['key' => 's2_arabic_education', 'accreditation_key' => 'excellent', 'link' => '#'],
        ],
    ];
@endphp

<style>
    .program-card {
        /* background: linear-gradient(135deg, rgb(185, 28, 28) 0%, #DC2626 100%); */
        background: linear-gradient(135deg, #35455a 0%, #1F2937 100%); 
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .program-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
</style>


<section class="py-16 md:py-20">
    <div class="container mx-auto px-6 max-w-7xl">

        <div class="text-center mb-12 -mt-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
                {{ __('db.study_programs.section_header') }}
            </h2>
        </div>
        
        {{-- Bagian Studi Doktor --}}
        <div class="mb-16">
            <div class="flex items-center mb-8">
                <span class="w-12 h-1 bg-blue-600 rounded-full"></span>
                <h3 class="ml-4 text-2xl md:text-3xl font-medium text-gray-800">
                    {{ __('db.study_programs.doctor_title') }}
                </h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($programs['doktor'] as $program)
                    <a href="{{ $program['link'] }}" class="program-card text-white p-6 rounded-lg shadow-md no-underline flex flex-col justify-between">
                        <div>
                            <h4 class="text-lg md:text-xl font-semibold mb-2">
                                {{ __('db.study_programs.programs.' . $program['key']) }}
                            </h4>
                        </div>
                        <p class="text-yellow-300 text-sm font-medium mt-3">
                            {{ __('db.study_programs.accreditation') }}: {{ __('db.accreditation_levels.' . $program['accreditation_key']) }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
        
        {{-- Bagian Studi Magister --}}
        <div>
            <div class="flex items-center mb-8">
                <span class="w-12 h-1 bg-blue-600 rounded-full"></span>
                <h3 class="ml-4 text-2xl md:text-3xl font-medium text-gray-800">
                    {{ __('db.study_programs.master_title') }}
                </h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                 @foreach ($programs['magister'] as $program)
                    <a href="{{ $program['link'] }}" class="program-card text-white p-6 rounded-lg shadow-md no-underline flex flex-col justify-between">
                        <div>
                            <h4 class="text-lg md:text-xl font-semibold mb-2">
                                {{ __('db.study_programs.programs.' . $program['key']) }}
                            </h4>
                        </div>
                        <p class="text-yellow-300 text-sm font-medium mt-3">
                            {{ __('db.study_programs.accreditation') }}: {{ __('db.accreditation_levels.' . $program['accreditation_key']) }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>