@extends('Layout.adminPage')
@section('content')
    <div>
        <div class="mb-2.5">
            <a class="" href=" {{ route('admin.post.index') }}">
                <span class="text-blue-500"> < <span class="underline">Quay lại</span></span>
            </a>
        </div>
        <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-2.5">
            <div class="header-card flex justify-between">
                <h1 class="text-md font-bold text-left">Thêm mới bài viết</h1>
            </div>
        </div>
        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="col-span-1">
                            <div class="">
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Danh mục bài viết <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Review sản phẩm</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link ảnh preview <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                <div class="grid grid-cols-7">
                                    <input type="text" id="image_label" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="preview_image[]"
                                           aria-label="Image" aria-describedby="button-image" multiple="multiple">
                                    <div class="input-group-append col-span-1">
                                        <button
                                            data-input="images" data-preview="holder"
                                            class="h-full w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-r-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" id="button-image">Chọn ảnh</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="images-preview">
                        <img id="holder" class="mt-3 max-h-[100px]">
                    </div>
                </div>
            </div>

            <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                <div class="w-full">
                    <div class="">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="">
                                    <label for="post_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên bài viết <p class="inline-block text-red-400 text-sm">*</p>:</label>
                                    <input type="text" id="post_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>
                                <div class="">
                                    <label for="seo_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SEO Title:</label>
                                    <input type="text" id="seo_title" name="seo_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>
                                <div class="">
                                    <label for="slug_post" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SLUG bài viết:</label>
                                    <input type="text" id="slug_post" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                </div>
                                <div class="">
                                    <label for="seo_key" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SEO Keywords:</label>
                                    <input type="text" id="seo_key" name="seo_keywords" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>
                                <div class="">
                                    <label for="post_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mô tả ngắn</label>
                                    <textarea id="post_description" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                                <div class="">
                                    <label for="seo_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SEO Description</label>
                                    <textarea id="seo_description" name="seo_description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-4">
                <div class="w-full">
                    <div class="">
                            <div class="">
                                <label for="content" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Nội dung bài viết</label>
                                <textarea id="content" name="content" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>

                    </div>
                </div>
            </div>

            <div class="w-full p-4 pb-0 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mb-2.5">
                <div class="header-card flex justify-end">
                    <button type="submit" class="text-gray-900 bg-gradient-to-r from-lime-300 via-lime-500 to-lime-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Thêm mới bài viết</button>
                </div>
            </div>
        </form>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('button-image').addEventListener('click', (event) => {

                event.preventDefault();
                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
                // let input_id = this.getAttribute('data-input');
                // let preview_id = this.getAttribute('data-preview');
                // window.SetUrl = function (items) {
                //     let filePaths = items.map(function (item) {
                //         return item.url;
                //     }).join(',');
                //
                //     // Set the value of the input field
                //     document.getElementById(input_id).value = filePaths;
                //
                //     // Clear the preview
                //     let holder = document.getElementById(preview_id);
                //     holder.innerHTML = '';
                //
                //     // Add the selected images to the preview
                //     items.forEach(function (item) {
                //         let img = document.createElement('img');
                //         img.setAttribute('src', item.thumb_url);
                //         img.style.marginRight = '10px';
                //         holder.appendChild(img);
                //     });
                // };
            });
        });
        // set file link
        function fmSetLink($url) {
            // cấu hình link
            document.getElementById('image_label').value = $url;
        }
    </script>
@endsection
