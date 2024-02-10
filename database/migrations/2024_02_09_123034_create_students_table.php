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
    //best practice membuat file migration dengan perintah: php artisan make:migration create_students_table
    //function up artinya ketika kalian jalanin perintah artisan untuk menjalankan migration contoh dibawah ini
    //untuk membuat database, masuk ke phpmyadmin, kemudian klik baru buat nama database sesuai kebutuhan, kemudian balik ke file .env ganti DB_DATABASE sesuai dengan nama di phpmyadmin
    //untuk menjalankan perintah artisan untuk membuat tabel  migrations di database phpmyadmin kita adalah dengan cara masuk ke terminal jalankan komen: php artisan migrate
    //membuat table dan column di migration, 
    //untuk isi table tambahkan $table di function up
    //kalau merasa migration udah selesai masuk ke terminal ketik perintah: php artisan migrate agar table masuk kedalam database phpmyadmin
    //update table dengan migration misalnya di database phpmyadmin kalian mau menambahkan kolom baru, setelah itu masuk ke terminal jalankan perintah: php artisan make:migration add_gender_column_to_students_table
    //setelah file baru jadi masuk kedalam file baru tersebut.
    //required artinya wajib di isi ditable
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->required(); 
            $table->string('nis', 10)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //function down artinya akan dilakukan ketika menyuruh artisan melakukan rollback migration
    //rollback migration artinya mengembalikan ke sebelumnya, cara kerja rollback adalah di database kan ada batch di file migration, terakhir dibuat jadi ketika dijalanin rollback maka batch terakhir itu akan terhapus dari table migration dan di table student juga akan terhapus kolom gendernya. 
    //perintah untuk rollback: php artisan migrate:rollback
    //perintah untuk rolback semua atau beberapa column: php artisan migrate:rollback --step=5
    //untuk mengembalikan lagi yang udah ri rollback: php artisan migrate
    //apabila di file migration database batch nya berubah jadi 2, itu karna mereka tergabung dalam 1 komen artisan migrate diterminal
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
