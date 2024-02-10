@extends('layouts.mainlayout')

@section('title', 'Home')

{{-- @section ditutup dengan @endsction artinya isi lebih dari 1 baris --}}
@section('content')
        <h1>Ini Halaman Home</h1>
        <h2>Selamat Datang, {{ $name }}. Anda adalah {{ $role }}</h2>

        {{-- loop directive untuk melooping data dari nomor 0 menggunakan $loop->index--}}
        {{-- loop directive untuk melooping data dari nomor 1 menggunakan $loop->iteration--}}
         <table class="table">
            <tr>
                <th>NO.</th>
                <th>Nama</th>
            </tr>
            @foreach($buah as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data }}</td>
            </tr>
            @endforeach
         </table>
@endsection
{{-- layout template inheritance artinya --}}