<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title>
</head>

<body>
    @if (count($produk)==1)
    <p>Jumlah Produk adalah satu</p>
    @elseif(count($produk)>1)
    <p><b>Perulangan dengan FOR</b></p>
    @for ($i = 0; $i < count($produk); $i++) <p>{{ 'No :'.$i.' Nama Produk :'.$produk[$i] }}</p>
        @endfor
        <hr>
        <p><b>Perulangan dengan FOREACH</b></p>
        @foreach ($produk as $x => $v)
        <p>{{ 'No :'.$x.' Nama Produk :'.$v }}</p>
        @endforeach
        <hr>
        <p><b>Perulangan dengan WHILE</b></p>
        @php
        $no = 1;
        @endphp
        @while ($no<=5) <p>ini adalah perulangan ke {{ $no }}</p>
            @php
            $no++;
            @endphp
            Jika halaman pada link localhost:8000/produk/show di refresh atau dimuat ulang maka
            halamanya akan nampak seperti pada gambar dibawah;
            KEGIATAN PRAKTIKUM 4 LAYOUT DENGAN BLADE TEMPLATE
            Untuk membuat layout pada template aplikasi, Laravel menggunakan cara yang mudah
            menggunakan blade template. Untuk mempraktekannya buatlah satu folder baru yang bernama
            layout pada folder resourcess/views, lalu bautlah file dengan nama layout.blade.php di dalamnya
            dan isikan script sebagai berikut:
            @endwhile
            @else
            <p>Tidak Ada Data Produk</p>
            @endif
</body>

</html>