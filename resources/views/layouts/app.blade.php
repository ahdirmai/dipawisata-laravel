<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $app_name ?? '' }} - {{ $title ?? '' }}</title>

    @include('layouts.includes.meta')
    @include('layouts.includes.styles')
</head>

<body>
    <div id="app">
        @include('layouts.includes.sidebar')
        <div id="main" class='layout-navbar'>
            @include('layouts.includes.header')
            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>{{ $headingTitle }}</h3>
                                <p class="text-subtitle text-muted">{{ $headingSubTitle }}</p>
                            </div>
                            @include('layouts.includes.breadcrumb')
                        </div>
                    </div>
                    {{ $slot }}

                    @include('layouts.includes.footer')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.includes.scripts')
</body>

</html>