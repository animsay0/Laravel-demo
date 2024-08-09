<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="max-w-%xl mx-auto p-10">

    <header class="mb-10">
        Laravel 11 crud
    </header>

    @yield('content')

    <footer class="mt-10">
        Copyright {{date('Y')}}
    </footer>

    <!-- @section('success') -->
    @session('success')
    <div class="toast">
        <div class="alert alert-info">
            <span>{{session('success')}}.</span>
        </div>
    </div>
    @endsession

    <script>
        let toast =document.querySelector('.toast');

        if(toast){
            setTimeout(()=> {
                toast.classList.add('hidden');
            }, 3000)
        }

    </script>

</body>

</html>