</html>
<!DOCTYPE html>
<html lang="th" class="{{ $theme === 'dark' ? 'dark' : '' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ada Information Management (AIM)</title>
    <link rel="stylesheet" href="{{ asset('assets/app/css/app.css') }}">
    @include('include.styles')
    @include('include.header-script')
</head>

<body>
    <div className="flex h-screen overflow-hidden">
        @include('include.sidebar')
        {{-- Header --}}
        <div className="flex flex-col flex-1 overflow-hidden">
            @include('include.header')
            <main className="flex-1 overflow-auto p-4 md:p-6 bg-background dark:bg-gray-900">
                <div class="container">
                    {!! $content ?? '' !!}
                </div>
            </main>
        </div>
        <footer>&copy; {{ date('Y') }}</footer>
    </div>
    @include('include.script')
</body>

</html>
