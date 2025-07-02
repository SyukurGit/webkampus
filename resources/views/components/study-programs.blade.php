{{-- resources/views/components/study-programs.blade.php --}}
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

{{-- Style custom untuk efek hover pada kartu --}}
<style>
    .program-card {
        background: linear-gradient(135deg, #B91C1C 0%, #DC2626 100%);
        transition: all 0.3s ease;
    }
    .program-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(185, 28, 28, 0.3);
    }
    .section-divider {
        background: linear-gradient(90deg, #1D4ED8 0%, #3B82F6 100%);
    }
</style>

{{-- Latar belakang keseluruhan diubah menjadi krem (bg-amber-50) --}}
<section class="bg-customwhite py-16 md:py-20">

    <div class="container mx-auto px-6 max-w-7xl">

        {{-- =============================================== --}}
        {{-- BAGIAN JUDUL UTAMA YANG BARU DITAMBAHKAN --}}
        {{-- =============================================== --}}
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
                {{ __('db.study_programs.section_title') }}
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                {{ __('db.study_programs.section_subtitle') }}
            </p>
        </div>

        <div class="mb-16">
            <div class="flex items-center mb-8">
                <div class="w-12 h-1 section-divider mr-4"></div>
                <h3 class="text-2xl md:text-3xl font-medium text-gray-800">
                    {{ __('db.study_programs.doctor_title') }}
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($programs['doktor'] as $program)
                    <a href="{{ $program['link'] }}" class="program-card text-white p-6 rounded-lg text-left group no-underline">
                        <h4 class="text-lg md:text-xl font-medium mb-3">
                            {{ __('db.study_programs.programs.' . $program['key']) }}
                        </h4>
                        <p class="text-yellow-300 text-sm font-medium">
                            {{ __('db.study_programs.accreditation') }}: {{ __('db.accreditation_levels.' . $program['accreditation_key']) }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>

        <div>
            <div class="flex items-center mb-8">
                <div class="w-12 h-1 section-divider mr-4"></div>
                <h3 class="ml-4 text-2xl md:text-3xl font-medium text-gray-800">
                    {{ __('db.study_programs.master_title') }}
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                 @foreach ($programs['magister'] as $program)
                    <a href="{{ $program['link'] }}" class="program-card text-white p-6 rounded-lg text-left group no-underline">
                        <h4 class="text-lg md:text-xl font-medium mb-3">
                            {{ __('db.study_programs.programs.' . $program['key']) }}
                        </h4>
                        <p class="text-yellow-300 text-sm font-medium">
                            {{ __('db.study_programs.accreditation') }}: {{ __('db.accreditation_levels.' . $program['accreditation_key']) }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>