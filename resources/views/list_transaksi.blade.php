@extends('layouts.app')

@section('content')
<section class="pt-24 pl-8 md:pl-64 px-8 w-full min-h-full bg-white">
    <div class="container py-5">
        <div class="flex">
            <h1>Transaction List</h1>
        <h3 class="text-success">Add</h3>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Durasi Bermain
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Orang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_transaksi as $data)
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$data->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$data->tanggal}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->durasiBermain}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->jumlahOrang}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-danger dark:text-danger hover:underline">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
