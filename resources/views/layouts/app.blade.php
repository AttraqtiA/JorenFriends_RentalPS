<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $TabTitle ?? 'AlexanderPS' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <link rel="icon" href="/images/logo_sprigatito.jpg">

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src='resources/js/script.js' defer></script>
</head>

<body style="font-family: 'Poppins', sans-serif;">

    <div id="app">

        @include('layouts.topbar')

        @yield('content')


    </div>
    <script>
        function showConfirmation(deleteUrl) {
            document.getElementById('confirmDeleteLink').setAttribute('href', deleteUrl);
            document.getElementById('confirmationModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('confirmationModal').classList.add('hidden');
        }

        function showConfirmationonEdit(EditURL) {
            document.getElementById('confirmEditLink').setAttribute('href', EditURL);
            document.getElementById('confirmationModalEdit').classList.remove('hidden');
        }

        function closeModalEdit() {
            document.getElementById('confirmationModalEdit').classList.add('hidden');
        }
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>
