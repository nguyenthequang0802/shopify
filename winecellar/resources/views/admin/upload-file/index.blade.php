@extends('Layout.adminPage')
@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
        <div class="px-4">
            <a href="{{ route('admin.product.index') }}" style="color: #3b82f6">
                <span class="font-normal">< <p class="inline underline">Quay Lại bảng sản phẩm</p></span>
            </a>
            <div class="bg-white mt-2.5 dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-4">
                <div>
                    <h2 class="font-bold text-lg mb-2.5">Thêm ảnh cho sản phẩm</h2>
                    <h3>Tên sản phẩm: <strong class="uppercase">{{ $product->name }}</strong></h3>
                </div>
                <div class="mt-2.5">
                    @if($errors->any())
                        <ul class="p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800 list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('admin.product.upload.store', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Tải ảnh lên</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" name="images[]" type="file" multiple>
                        <div class="my-1.5">
                            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Tải lên
                            </button>
                        </div>
                    </form>
                </div>
                <div class="mt-2.5 flex items-center relative">
                    @foreach($images as $image)
                        <div class="relative m-3 border border-gray-300 rounded">
                            <img class="h-[100px] w-[100px] rounded" src="{{ asset($image->path_image) }}" alt="">
                            <a href="{{ route('admin.product.upload.destroy', $image->id) }}" class="flex justify-center items-center absolute top-0 right-0 transform -translate-y-1/2 translate-x-1/2 w-5 h-5 bg-red-700 border-2 border-white dark:border-gray-800 rounded-full">
                                <button class="text-white"><i class="fa-solid fa-xmark"></i></button>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class=" fixed top-[115px] right-[26px]">
        @include('admin.common.alert_success')
    </div>
    @include('admin.common.javascript')
@endsection
