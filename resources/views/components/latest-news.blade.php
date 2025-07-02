{{-- resources/views/components/latest-news.blade.php --}}
@props(['newsItems']) {{-- Menerima data berita dari controller --}}

<section class="bg-white py-16">
    <div class="container mx-auto px-6">
        <div class="flex items-center mb-8">
            <span class="w-10 h-1 bg-blue-500 rounded-full"></span>
            <h2 class="ml-4 text-3xl font-bold text-gray-800">Berita Terbaru</h2>
        </div>

        @if($newsItems->isNotEmpty())
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-8">
                
                <div class="col-span-1">
                    @php $firstNews = $newsItems->first(); @endphp
                    <a href="{{ route('news.show', $firstNews) }}" class="block group">
                        <div class="relative">
                            <img src="{{ asset('storage/' . $firstNews->image) }}" alt="{{ $firstNews->title_id }}" class="w-full h-96 object-cover rounded-lg shadow-lg">
                            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black to-transparent rounded-b-lg"></div>
                            <div class="absolute bottom-0 left-0 p-6">
                                <h3 class="text-2xl font-bold text-white leading-tight transition-all duration-300 group-hover:underline underline-offset-2">
                                    @if(app()->getLocale() == 'id') {{ $firstNews->title_id }} @else {{ $firstNews->title_en }} @endif
                                </h3>
                                <p class="text-gray-300 mt-2">Admin | {{ $firstNews->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-span-1 mt-8 lg:mt-0">
                    <div class="space-y-6">
                        @foreach($newsItems->skip(1) as $news)
                            <a href="{{ route('news.show', $news) }}" class="flex items-center gap-4 group">
                                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title_id }}" class="w-24 h-24 object-cover rounded-lg flex-shrink-0">
                                <div>
                                    <h4 class="font-bold text-gray-800 transition-all duration-300 group-hover:text-blue-600 group-hover:underline underline-offset-2">
                                        @if(app()->getLocale() == 'id') {{ $news->title_id }} @else {{ $news->title_en }} @endif
                                    </h4>
                                    <p class="text-sm text-gray-500 mt-1">Admin | {{ $news->created_at->format('d/m/Y') }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <<div class="text-center mt-12">
    {{-- Tambahkan kelas "no-underline" di sini --}}
    <a href="#" class="inline-block bg-gray-800 text-white font-semibold px-8 py-3 rounded-lg hover:bg-gray-700 transition-colors no-underline">
        Lihat Semua Berita
    </a>
</div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">Belum ada berita yang dipublikasikan.</p>
            </div>
        @endif
    </div>
</section>