@extends('Layout.adminPage')
@section('content')
    <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700 mt-20">
        <div class="header-card flex justify-between mb-2.5 mx-2.5">
            <h1 class="text-md font-bold text-left">Brand Table</h1>
            <div>
                <span class="table-add float-right mr-2">
                    <a href="{{route('admin.brand.add')}}">
                        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                <i class="fa-solid fa-plus"></i>
                                Thêm mới
                            </span>
                        </button>
                        </a>
                </span>
            </div>
        </div>
        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Icon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Country
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($brands as $brand)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$brand->id}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$brand->name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$brand->country}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$brand->icon}}
                                </td>
                                <td class="px-3 py-4 flex justify-start">
                                    <a href="{{ route('admin.brand.edit', $brand->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <button data-tooltip-target="tooltip-edit" data-tooltip-placement="bottom" type="button" class="ms-1.5 text-white bg-yellow-300 hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 py-2">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <div id="tooltip-edit" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Edit
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </a>
                                    <a href="{{ route('admin.brand.destroy', $brand->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <button data-tooltip-target="tooltip-delete" data-tooltip-placement="bottom" type="button" class="ms-1.5 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-4 py-2 text-center me-2 mb-2">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                        <div id="tooltip-delete" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Delete
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
