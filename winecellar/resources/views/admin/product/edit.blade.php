@extends('Layout.adminPage')
@section('content')
    <div>
        <div class="mb-2.5">
            <a class="" href=" {{ route('admin.product.index') }}">
                <span class="text-blue-500"> < <span class="underline">Quay lại</span></span>
            </a>
        </div>
        <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-2.5">
            <div class="header-card flex justify-between">
                <h1 class="text-md font-bold text-left">Thêm mới sản phẩm</h1>
            </div>
        </div>
        <form action="{{ route('admin.product.update', $item->id) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <div class="min-h-16 flex justify-between items-center border-b border-b-gray-400">
                        <div>
                            <h4>Thông tin cơ bản sản phẩm:</h4>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="col-span-1">
                            <div class="mb-2">
                                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản phẩm <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <input type="text" id="product_name" name="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item->name }}" required />
                            </div>
                            <div class="mb-2">
                                <label for="product_slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug(url) của sản phẩm:</label>
                                <input type="text" id="product_slug" name="product_slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item->slug }}"/>
                            </div>
                            <div class="mb-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả sản phẩm:</label>
                                <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item->description }}" required />
                            </div>
                            <div class="mb-2">
                                <label for="product_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục sản phẩm <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <select id="product_category" name="product_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Danh mục sản phẩm</option>
                                    @include('admin.product.category_selected', ['categories' => $categories, 'level' => 0])
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="product_brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nhãn hiệu<p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <select id="product_brand" name="product_brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Nhãn hiệu sản phẩm</option>
                                    @foreach($brands as $brand)
                                        @if( $item->brand_id == $brand->id )
                                            <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                        @else
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Giá bán <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <input type="text" id="price" name="price" class="price_format bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item->price }}" required />
                            </div>
                            <div class="mb-2">
                                <label for="product_qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Số lượng <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <input type="number" id="product_qty" name="product_qty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item->quantity }}" required />
                            </div>
                            <div class="mb-2">
                                <label for="promotion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Khuyến mãi sản phẩm <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <input type="number" id="promotion" name="promotion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item->promotion }}" required />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                    <div class="w-full">
                        <div class="min-h-16 flex justify-between items-center border-b border-b-gray-300">
                            <div>
                                <h4>Thông số sản phẩm</h4>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="">
                                <textarea id="content" name="info_product" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $item->detail_product }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full p-4 pb-0 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-2.5">
                <div class="header-card flex justify-end">
                    <button type="submit" class="text-gray-900 bg-gradient-to-r from-lime-300 via-lime-500 to-lime-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Lưu</button>
                </div>
            </div>
        </form>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('button-image').addEventListener('click', (event) => {

                event.preventDefault();
                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });
        // set file link
        function fmSetLink($url) {
            // cấu hình link
            document.getElementById('image_label').value = $url;
        }
    </script>
@endsection
