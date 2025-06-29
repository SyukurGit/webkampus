<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_xxxxxx_create_news_table.php

public function up(): void
{
    Schema::create('news', function (Blueprint $table) {
        $table->id();
        $table->string('image')->nullable(); // Path ke file gambar, boleh kosong
        $table->string('title_id');           // Judul dalam Bahasa Indonesia
        $table->string('title_en');           // Judul dalam Bahasa Inggris
        $table->text('content_id');           // Konten dalam Bahasa Indonesia
        $table->text('content_en');           // Konten dalam Bahasa Inggris
        $table->timestamps();                 // Otomatis membuat kolom created_at dan updated_at
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
