<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no shrink-to-fit=no">
    <title>Aplikasi Kesehatan | Data Data Pasien Siswa/siswi</title>
    <meta name="description"
        content="" />
    <meta name="keywords" content="">
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
            height: 100vh;
        }
    </style>
</head>

<body>
    <img src="{{ asset('klinik.gif') }}" alt="Loading...">
    <script>
        setTimeout(function () {
            window.location.href = "{{ route('landing') }}";
        }, 3001);
    </script>
</body>

</html>

<style>

</style>



