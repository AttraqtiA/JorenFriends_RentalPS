@extends('layouts.app')

@section('content')
    <section class="pt-24 pl-8 md:pl-64 px-8 w-full min-h-full bg-white">
        <div class="container py-5">
            <div class="flex items-center justify-between w-full pb-3">
                <h1 class="font-bold text-2xl text-center pb-0 mb-0">Transaction List</h1>
                <a href="{{ route('create_transaksi') }}" class="no-underline">
                    <button type="button"
                        class="text-white bg-green-600 hover:bg-green-700 rounded-md text-lg px-5 py-1">Add Transaction</button>
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-lg text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-md text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Playing Duration
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Players
                            </th>
                            <th scope="col" class="px-6 py-3" colspan="2">
                                Action
                            </th>
                            {{-- <th scope="col" class="px-6 py-3"></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_transaksi as $data)
                            <tr class="text-gray-800">
                                <td scope="col"
                                    class="px-6 py-4">
                                    {{ $data->pengguna->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->tanggal }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->durasiBermain }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->jumlahOrang }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('edit_transaksi', $data->id)}}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    {{-- <section class="w-full min-h-full">
        <div class="container pt-3">
            <div class="flex items-center justify-center w-full justify-between pb-3">
                <h1 class="font-bold text-center pb-0 mb-0">Transaction List</h1>
                <form class="flex w-50 mx-auto">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <input type="search" name="search" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full ps-10 p-2.5"
                            placeholder="Search ID/Name" required />
                    </div>
                    <button type="submit"
                        class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-600 rounded-lg border border-blue-600 hover:bg-blue-700">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
                <a href="#" class="no-underline">
                    <button type="button"
                        class="text-white bg-green-600 hover:bg-green-700 rounded-md text-lg px-5 py-1">Add</button>
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-center">
                    <thead class="text-lg uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="font-bold px-6 py-3">
                                id
                            </th>
                            <th scope="col" class="font-bold px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="font-bold px-6 py-3">
                                Durasi Bermain
                            </th>
                            <th scope="col" class="font-bold px-6 py-3">
                                Jumlah Orang
                            </th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_transaksi as $data)
                            <tr>
                                <td class="px-6 py-4 text-lg">
                                    {{ $data->id }}
                                </td>
                                <td class="px-6 py-4 text-lg">
                                    {{ $data->tanggal }}
                                </td>
                                <td class="px-6 py-4 text-lg">
                                    {{ $data->durasiBermain }}
                                </td>
                                <td class="px-6 py-4 text-lg">
                                    {{ $data->jumlahOrang }}
                                </td>
                                <td class="px-1 py-4">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <button type="button"
                                            class="text-white bg-blue-600 hover:bg-blue-700 rounded-md text-lg px-3 py-1">Edit</button>
                                    </a>
                                </td>
                                <td class="px-1 py-4">
                                    <a href="#" class="font-medium text-danger dark:text-danger hover:underline">
                                        <button type="button"
                                            class="text-white bg-red-600 hover:bg-red-700 rounded-md text-lg px-3 py-1">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center mt-4">
                <nav aria-label="Page navigation">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 px-3 py-2 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </section> --}}
@endsection
