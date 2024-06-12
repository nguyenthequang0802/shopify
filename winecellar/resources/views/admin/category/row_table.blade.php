{{--@foreach($categories as $category)--}}
{{--    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">--}}
{{--        <td class="p-4">--}}
{{--            {{ $category->id }}--}}
{{--        </td>--}}
{{--        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">--}}
{{--            <img src="{{ $category->icon }}" class="w-16 md:w-32 max-w-full max-h-full" alt="{{ $category->name }}">--}}
{{--        </td>--}}
{{--        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">--}}
{{--            {{  str_repeat('---- ', $level).$category->name }}--}}
{{--        </td>--}}
{{--        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">--}}
{{--            {{ $category->model_type }}--}}
{{--        </td>--}}
{{--        <td class="px-6 py-4">--}}
{{--            <a href="{{ route('admin.category.edit', ['model_type'=>$model_type, 'id'=>$category->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">--}}
{{--                <button data-tooltip-target="tooltip-edit-{{ $category->id }}" data-tooltip-placement="bottom" type="button" class="ms-1.5 text-white bg-yellow-300 hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 py-2">--}}
{{--                    <i class="fa-regular fa-pen-to-square"></i>--}}
{{--                </button>--}}
{{--                <div id="tooltip-edit-{{ $category->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">--}}
{{--                    Edit--}}
{{--                    <div class="tooltip-arrow" data-popper-arrow></div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <a data-url="{{ route('admin.category.destroy', [$model_type, $category->id]) }}" class="action-delete font-medium text-blue-600 dark:text-blue-500 hover:underline">--}}
{{--                <button data-tooltip-target="tooltip-delete-{{ $category->id }}" data-tooltip-placement="bottom" type="button" class="ms-1.5 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-4 py-2 text-center me-2 mb-2">--}}
{{--                    <i class="fa-regular fa-trash-can"></i>--}}
{{--                </button>--}}
{{--                <div id="tooltip-delete-{{ $category->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">--}}
{{--                    Delete--}}
{{--                    <div class="tooltip-arrow" data-popper-arrow></div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </td>--}}
{{--    </tr>--}}
{{--    @if($category->childs)--}}
{{--        @include('admin.category.row_table', ['categories'=>$category->childs, 'level'=>$level+1])--}}
{{--    @endif--}}
{{--@endforeach--}}

@foreach($categories as $category)
    <tr class="border-b dark:border-gray-700">
        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->index+1 }}</th>
        <td class="px-4 py-3">{{  str_repeat('---- ', $level).$category->name }}</td>
        <td class="px-4 py-3">
            <img src="{{ $category->icon }}" class="w-16 md:w-32 max-w-full max-h-full" alt="{{ $category->name }}">
        </td>
        <td class="px-4 py-3">{{ $category->model_type }}</td>
        <td class="px-4 py-3 flex items-center justify-end">
            <button id="dropdown-button-menu-{{ $category->id }}" data-dropdown-toggle="dropdown-menu-{{ $category->id }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                </svg>
            </button>
            <div id="dropdown-menu-{{ $category->id }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button-menu-{{ $category->id }}">
                    <li>
                        <a href="{{ route('admin.category.edit', [$model_type, $category->id]) }}" class="flex text-md py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <p class="text-[#F7BE38] mr-2"><i class="fa-solid fa-pen-to-square"></i></p>
                            Sửa
                        </a>
                    </li>
                </ul>
                <div class="py-1">
                    <a href="{{ route('admin.category.destroy', [$model_type, $category->id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="action-delete text-md flex py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                        <p class="text-red-700 mr-2"><i class="fa-regular fa-trash-can"></i></p>
                        Xóa
                    </a>
                </div>
            </div>
        </td>
    </tr>
    @if($category->childs)
        @include('admin.category.row_table', ['categories'=>$category->childs, 'level'=>$level+1])
    @endif
@endforeach

