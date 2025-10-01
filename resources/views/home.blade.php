<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>simartukom - Dashboard</title>

        <!-- Memanggil CSS dan JS menggunakan VITE -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            .content-wrapper {
                flex: 1;
            }
        </style>
    </head>
    <body>

        @include('includes.header')

        <div class="container content-wrapper">
            <div class="text-center mt-5">
                <h1>Selamat Datang di simartukom</h1>
                <p class="lead">Sistem Informasi Manajemen Menara Telekomunikasi</p>
                <p>Silakan pilih menu di atas untuk memulai.</p>
            </div>
        </div>

        @include('includes.footer')

    </body>
</html>





