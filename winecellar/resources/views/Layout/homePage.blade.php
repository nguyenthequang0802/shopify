<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hầm Rượu Vang WINECELLAR.vn | Nhập Khẩu Phân Phối Chính Hãng</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <style>
        body {
            padding: 0!important;
            margin: 0!important;
        }
    </style>
</head>
<body>
    @include('partial.user.header')

    <main class="content">
        @yield('content')
    </main>
    <div class="bottom-nav">
        <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
            <div class="grid grid-cols-3 h-full justify-center font-medium">
                <a href="" class="flex justify-center">
                    <button type="button" class="inline-flex flex h-full items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                        <p>
                            <i class="fa-solid fa-location-dot text-[#b4975a]"></i>
                        </p>
                        <span class="text-sm pl-4 text-gray-500 dark:text-gray-400 uppercase">Tìm cửa hàng</span>
                    </button>
                </a>
                <a href="" class="flex justify-center border-x border-[#D5D5D5]">
                    <button type="button" class="inline-flex flex h-full items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                        <p>
                            <i class="fa-solid fa-gift text-[#b4975a]"></i>
                        </p>
                        <span class="text-sm pl-4 text-gray-500 dark:text-gray-400 uppercase">Nhận ưu đãi</span>
                    </button>
                </a>
                <a href="" class="flex justify-center">
                    <button type="button" class="inline-flex flex h-full items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                        <p>
                            <i class="fa-solid fa-gift text-[#b4975a]"></i>
                        </p>
                        <span class="text-sm pl-4 text-gray-500 dark:text-gray-400 uppercase">Tư vẫn quà tặng rượu vang</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
    @include('partial.user.footer')
</body>
</html>
