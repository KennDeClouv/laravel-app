</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" />
</head>
<body>
    <script src="{{ asset('js/initTheme.js') }}"></script>
    <div id="app">
        <x-sidebar></x-sidebar>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h1>{{ $title }}</h1>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url()->previous() }}">{{ $title }}</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $breadcrumb }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    {{ $slot }}
                </section>
            </div>

            <footer></footer>
        </div>
    </div>
    <script src="{{ asset('js/dark.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    </script>
</body>

</html>
