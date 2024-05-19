@extends('Layout.adminPage')
@section('content')
    <div class="mb-2.5">
        <a class="" href=" {{ route('admin.category.index', $model_type) }}">
            <span class="text-blue-500"> < <span class="underline">Quay lại</span></span>
        </a>
    </div>
    <div class="">
        <div class="">
            <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700">
                <div class="header-card flex justify-between mb-2.5 mx-2.5">
                    <h1 class="text-md font-bold text-left">Update category</h1>
                </div>
                <div>
                    <form action="{{route('admin.category.update', ['model_type'=>$model_type, 'id'=>$item->id])}}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-6">
                            <div>
                                <label for="cate_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category name</label>
                                <input type="text" id="cate_name" name="cate_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item->name }}" required />
                            </div>
                            <div class="">
                                <label for="category_parent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parent category</label>
                                <select id="category_parent" name="category_parent" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Select category</option>
                                   @include('admin.category.category_option', ['categories' => $categories, 'level' => 0])
                                </select>
                            </div>
                            <div>
                                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                                <input type="text" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $item->slug }}" />
                            </div>
                            <div class="">
                                <label for="icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Icon</label>
                                <div class="grid grid-cols-7">
                                    <input type="text" id="image_label" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="icon"
                                           aria-label="Image" aria-describedby="button-image" value="{{ $item->icon }}">
                                    <div class="input-group-append col-span-1">
                                        <button class="h-full w-full text-gray-900 bg-gray-50 border border-gray-300 focus:ring-4 focus:ring-gray-50 font-medium rounded-r-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" id="button-image">Select</button>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <label for="model_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Model type</label>
                                <input type="text" id="model_type" name="model_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Category name..." readonly value="{{ $model_type }}" />
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="text-gray-900 bg-gradient-to-r from-lime-300 via-lime-500 to-lime-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full p-2.5 mt-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700">

            </div>
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
@endsection
