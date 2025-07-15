<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-header')</title>

    <link rel="stylesheet" href="{{asset ('assets')}}/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset ('assets')}}/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{asset ('assets')}}/css/app.css">
    <link rel="shortcut icon" href="{{asset ('assets')}}/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets')}}/css/form.scss">

    {{-- Datatables --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
</head>
<body>

        {{-- sidebar --}}
        @include('layouts.sidebar')
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            {{-- navbar --}}
            @include('layouts.navbar')

            {{-- Main Content --}}
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>@yield('title')</h3>
                </div>

                <div class>
                    <div class="section-body">
                        @yield('content')
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Voler</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset ('assets')}}/js/feather-icons/feather.min.js"></script>
    <script src="{{asset ('assets')}}/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset ('assets')}}/js/app.js"></script>
    <script src="{{asset ('assets')}}/js/main.js"></script>
    @yield('script')




</body>
</html>
