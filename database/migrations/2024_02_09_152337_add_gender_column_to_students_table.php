<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //kalau merasa migration udah selesai masuk ke terminal ketik perintah: php artisan migrate agar table masuk kedalam database phpmyadmin

    
    //update column menggunakan migration misalnya mengubah gender yang tadinya 10, jadi 1 karakter dan 2 pilihan untuk laki"=l untuk perempuan=p dan gender itu boleh null
    //caranya bikin lagi migration dengan perintah: php artisan make:migration change_gender_attributes_in_students_table
    //untuk nentukan urutan table di database phpmyadmin tambahkan ->after('name'), kalau kita nambah kolom baru di function up maka di function  down harus dihapus dengan menambahkan $table->dropColumn('gender');
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('gender', 10)->required()->after('name'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('gender');
        });
    }
};
