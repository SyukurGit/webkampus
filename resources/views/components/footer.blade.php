{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-gray-900 text-gray-400 pt-16 pb-6 relative overflow-hidden">
    {{-- Elemen dekoratif lingkaran --}}
    <div class="absolute -bottom-1/4 -right-16 w-80 h-80 bg-gray-800/50 rounded-full"></div>
    <div class="absolute -bottom-10 -left-24 w-96 h-96 bg-gray-800/50 rounded-full"></div>

    <div class="container mx-auto px-6 relative">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8">

            {{-- Kolom 1: Logo dan Slogan --}}
            <div class="col-span-2 md:col-span-2 lg:col-span-1">
                {{-- Placeholder untuk Logo Anda --}}
                <div class="w-20 h-20 bg-gray-700 rounded-md mb-4 flex items-center justify-center">
                    <span class="text-xs text-gray-500">Logo</span>
                </div>
                <h3 class="text-white font-bold text-lg">Fakultas Sains dan Teknologi UIN Ar-Raniry</h3>
                <p class="mt-2 text-sm">{{ __('db.footer.slogan') }}</p>
            </div>

            {{-- Kolom 2: Profil --}}
            <div>
                <h4 class="font-semibold text-white tracking-wider uppercase mb-4">{{ __('db.footer.profile_title') }}</h4>
                <ul class="space-y-2">
                    @foreach(__('db.footer.profile_links') as $link)
                        <li><a href="#" class="hover:text-white transition-colors">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Kolom 3: Pendidikan --}}
            <div>
                <h4 class="font-semibold text-white tracking-wider uppercase mb-4">{{ __('db.footer.education_title') }}</h4>
                <ul class="space-y-2">
                    @foreach(__('db.footer.education_links') as $link)
                        <li><a href="#" class="hover:text-white transition-colors">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Kolom 4: Informasi --}}
            <div>
                <h4 class="font-semibold text-white tracking-wider uppercase mb-4">{{ __('db.footer.info_title') }}</h4>
                <ul class="space-y-2">
                    @foreach(__('db.footer.info_links') as $link)
                        <li><a href="#" class="hover:text-white transition-colors">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Kolom 5: Link Cepat --}}
            <div>
                <h4 class="font-semibold text-white tracking-wider uppercase mb-4">{{ __('db.footer.quick_links_title') }}</h4>
                <ul class="space-y-2">
                    @foreach(__('db.footer.quick_links') as $link)
                        <li><a href="#" class="hover:text-white transition-colors">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>

        </div>

        {{-- Garis Pemisah & Bagian Copyright --}}
        <div class="mt-12 pt-6 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center text-sm">
            <p>&copy; {{ date('Y') }} {{ __('db.footer.copyright') }}</p>
            <div class="flex mt-4 md:mt-0 space-x-4">
                {{-- Anda bisa menambahkan ikon sosial media di sini jika perlu --}}
                <span>Tim Pengembang Web FST</span>
            </div>
        </div>
    </div>
</footer>