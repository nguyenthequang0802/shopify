@extends('Layout.homePage')
@section('content')
    <section class="section-banner relative z-0">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-40 overflow-hidden rounded-lg lg:h-96 xl:h-[43rem]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://winecellar.vn/wp-content/uploads/2022/04/whisky-coming-soon.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="https://winecellar.vn/wp-content/uploads/2022/04/banner-huong-mua-he-scaled.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://winecellar.vn/wp-content/uploads/2022/04/banner-combo-louis-latour-scaled.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://winecellar.vn/wp-content/uploads/2022/04/banner-vang-trang-louis-latour-scaled.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://winecellar.vn/wp-content/uploads/2022/04/louis-latour-mua-1-tang-1-banner-scaled.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://winecellar.vn/wp-content/uploads/2022/04/banner-ctkm-vang-hong.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://winecellar.vn/wp-content/uploads/2022/04/Champagne-banner-2024.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://winecellar.vn/wp-content/uploads/2023/12/dauzac-promo-banner-new.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://winecellar.vn/wp-content/uploads/2023/09/Banner-6-Torbreck-The-Struie-1-Insoglio-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
            </button>
        </div>
    </section>
    <section class="section-intro flex flex-row items-center py-[25px] relative bg-[#990d23]">
        <div class="relative z-10 w-full">
            <div class="text-white text-sm">
                <h1 class="text-center uppercase text-white">
                    <span class="text-lg">
                        <strong>Winecellar.vn – We are master of wine</strong>
                    </span>
                </h1>
                <div class="text-center">Nơi trải nghiệm rượu vang trọn vẹn và thăng hoa</div>
            </div>
        </div>
    </section>
    <section class="section-intro flex flex-row items-center py-[50px] relative bg-[#f9f5f0]">
        <div class="relative w-full container mx-auto">
            <div class="grid grid-cols-2 lg:grid-cols-4 ">
                <div>
                    <div class="relative w-full">
                        <div class="flex justify-center items-center h-auto overflow-hidden relative ">
                            <img height="80" width="80" src="https://winecellar.vn/wp-content/uploads/2022/03/champagne-1.png" class="w-auto max-h-[40px]">
                        </div>
                        <div class="text-center pt-[5px] py-2.5 relative w-full ">
                            <h4>
                                <span class="text-[#800000] text-sm uppercase font-semibold">2000 sản phẩm</span>
                            </h4>
                            <p>
                                <span class="text-xs text-center">Nhập khẩu & phân phối chính hãng</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative w-full">
                        <div class="flex justify-center items-center h-auto overflow-hidden relative ">
                            <img height="80" width="80" src="https://winecellar.vn/wp-content/uploads/2023/06/gh-toan-quoc.png" class="w-auto max-h-[40px]">
                        </div>
                        <div class="text-center pt-[5px] py-2.5 relative w-full ">
                            <h4>
                                <span class="text-[#800000] text-sm uppercase font-semibold">Giao hàng toàn quốc</span>
                            </h4>
                            <p>
                                <span class="text-xs text-center">Linh hoạt giao hàng theo yêu cầu từ khách hàng</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative w-full">
                        <div class="flex justify-center items-center h-auto overflow-hidden relative ">
                            <img height="80" width="80" src="https://winecellar.vn/wp-content/uploads/2022/03/delivery-1.png" class="w-auto max-h-[40px]">
                        </div>
                        <div class="text-center pt-[5px] py-2.5 relative w-full ">
                            <h4>
                                <span class="text-[#800000] text-sm uppercase font-semibold">Giao hàng nhanh (2h)</span>
                            </h4>
                            <p>
                                <span class="text-xs text-center">Miễn phí giao hàng tại <br> Hà Nội, Đà Nãng, Hồ Chí Minh, Phú Quốc</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="relative w-full">
                        <div class="flex justify-center items-center h-auto overflow-hidden relative ">
                            <img height="80" width="80" src="https://winecellar.vn/wp-content/uploads/2023/06/check-correct.png" class="w-auto max-h-[40px]">
                        </div>
                        <div class="text-center pt-[5px] py-2.5 relative w-full ">
                            <h4>
                                <span class="text-[#800000] text-sm uppercase font-semibold">Cam kết chất lượng</span>
                            </h4>
                            <p>
                                <span class="text-xs text-center">Sản Phẩm nhập nguyên chai, chính hãng, <br> từ thương hiệu uy tín.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-home-product py-10">
        <div class="section-content relative">
            <div class="container mx-auto title-container lg:px-[3.5]">
                <h2 class="uppercase text-center font-semibold text-[#990d23] text-2xl">Sản phẩm bán chạy</h2>
            </div>
            <div class="container mx-auto mt-8">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                    @for($i = 0; $i < 5; $i++)
                        <div class="w-full relative before:border-l before:border-l-[#ddd] before:h-full before:absolute before:left-[-1px] before:top-0 after:border-b after:border-[#ddd] after:bottom-[-1px] after:content-[''] after:absolute after:left-0 after:h-0">
                            <div class="p-4">
                                <div class="relative w-full overflow-hidden">
                                    <div class="h-auto relative overflow-hidden">
                                        <div>
                                            <a href="">
                                                <img class="w-full max-w-full" width="300" height="400" src="https://winecellar.vn/wp-content/uploads/2024/03/cf-collefrisio-montepulciano-dabruzzo-300x400.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="w-full relative pt-3 pb-6 text-center text-sm">
                                        <div class="title-wrapper">
                                            <p class="">
                                                <a class="font-normal text-base" href="">Rượu Vang Ý CF Collefrisio Montepulciano D'abruzzo 2022</a>
                                            </p>
                                        </div>
                                        <div class="price-wrapper mx-auto text-center mt-6">
                                        <span class="price font-normal text-sm text-center">
                                            <span class="text-[#990d23]">
                                                <strong>532.000đ</strong>
                                            </span>
                                        </span>
                                        </div>
                                        <div class="btn-add-to-cart w-full mt-2.5">
                                            <a href="" class="w-full">
                                                <button type="button" class="focus:outline-none w-full text-white bg-[#990d23] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Thêm vào giỏ hàng</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
