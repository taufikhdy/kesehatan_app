<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no shrink-to-fit=no">
    <title>Aplikasi Kesehatan | Data Data Pasien Siswa/siswi</title>
    <meta name="description"
        content="Website yang menyediakan konten konten islami seperti Al-quran, Sunnah Nabi, Doa Sehari Hari, dll. Dengan desain yang sederhana dan mudah dinavigasi, website ini bertujuan untuk memberikan akses yang lebih luas kepada umat Islam dalam mempelajari, memahami, dan mengamalkan ajaran Islam." />
    <meta name="keywords" content="majmu syarif, Irsyadut Thulab, web islami, doa doa, doa sehari hari, alquran">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <img src="{{ asset('klinik.gif') }}" alt="Loading...">
    <script>
        setTimeout(function () {
            window.location.href = "{{ route('login') }}";
        }, 3001);
    </script>
</body>

</html>

<style>

</style>


