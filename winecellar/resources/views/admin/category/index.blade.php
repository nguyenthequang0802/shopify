@extends('Layout.adminPage')
@section('content')
    <div class="w-full p-4 text-left bg-white border border-gray-200 rounded-lg shadow sm:p-3 dark:bg-gray-800 dark:border-gray-700">
        <div class="header-card flex justify-between mb-2.5 mx-2.5">
            <h1 class="text-md font-bold text-left">Category Table</h1>
            <div>
                <span class="table-add float-right mr-2">
                    <a href="{{route('admin.category.add', $model_type)}}">
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
                                Icon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('admin.category.row_table', ['categories'=>$categories, 'level'=>0])
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=" fixed top-[115px] right-[26px]">
        @include('admin.common.alert_success')
        @include('admin.common.alert_error')
    </div>
    @include('admin.common.javascript')
@endsection
