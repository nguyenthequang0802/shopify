@extends('Layout.adminPage')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div>
            <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700">
                <div class="header-card flex justify-between mb-2.5 mx-2.5">
                    <h1 class="text-md font-bold text-left">Thêm mới nhãn Hàng</h1>
                </div>
                <div>

                    <form action="{{route('admin.brand.store')}}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-6">
                            <div>
                                <label for="brand_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand name</label>
                                <input type="text" id="brand_name" name="brand_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Brand name..." required />
                            </div>
                            <div>
                                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                                <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Brand-name..." />
                            </div>
                            <div class="">
                                <div class="grid grid-cols-7">
                                    <input type="text" id="image_label" class="col-span-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="icon"
                                           aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append col-span-2">
                                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" id="button-image">Select</button>
                                    </div>
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
                            </div>
                            <div>
                                <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                <input type="tel" id="country" name="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Country..." required />
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <a href=" {{ route('admin.brand.index') }}">
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</button>
                            </a>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
