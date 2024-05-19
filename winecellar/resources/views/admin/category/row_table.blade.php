@foreach($categories as $category)
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        <td class="p-4">
            {{ $category->id }}
        </td>
        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
            <img src="{{ $category->icon }}" class="w-16 md:w-32 max-w-full max-h-full" alt="{{ $category->name }}">
        </td>
        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
            {{  str_repeat('---- ', $level).$category->name }}
        </td>
        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
            {{ $category->model_type }}
        </td>
        <td class="px-6 py-4">
            <a href="{{ route('admin.category.edit', ['model_type'=>$model_type, 'id'=>$category->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                <button data-tooltip-target="tooltip-edit-{{ $category->id }}" data-tooltip-placement="bottom" type="button" class="ms-1.5 text-white bg-yellow-300 hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 py-2">
                    <i class="fa-regular fa-pen-to-square"></i>
                </button>
                <div id="tooltip-edit-{{ $category->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Edit
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </a>
            <a data-url="{{ route('admin.category.destroy', [$model_type, $category->id]) }}" class="action-delete font-medium text-blue-600 dark:text-blue-500 hover:underline">
                <button data-tooltip-target="tooltip-delete-{{ $category->id }}" data-tooltip-placement="bottom" type="button" class="ms-1.5 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-4 py-2 text-center me-2 mb-2">
                    <i class="fa-regular fa-trash-can"></i>
                </button>
                <div id="tooltip-delete-{{ $category->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Delete
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </a>
        </td>
    </tr>
    @if($category->childs)
        @include('admin.category.row_table', ['categories'=>$category->childs, 'level'=>$level+1])
    @endif
@endforeach


