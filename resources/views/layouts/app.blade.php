<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Q CHICKEN - Admin Dashboard</title>

    @include('layouts.styles')
    @stack('styles')
</head>

<body class="bg-gradient-to-br from-orange-50 via-rose-50 to-orange-100 min-h-screen flex items-center justify-center p-0 md:p-8 font-sans text-slate-800">

    <div class="w-full max-w-[1440px] h-screen md:h-[90vh] bg-white/80 backdrop-blur-md md:rounded-[2rem] shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] flex overflow-hidden border border-white/50">

        @include('layouts.sidebar')

        <main class="flex-1 flex flex-col min-w-0 bg-[#fafafa]/50">
            
            @include('layouts.header')

            <div class="flex-1 overflow-y-auto p-4 md:p-8 custom-scrollbar">
                
                <div id="view-dashboard" class="view-section animate-in fade-in duration-300">
                    {{-- 
                        Pastikan @yield('content') hanya berisi konten utama. 
                        Header dan pembungkus besar sudah ada di file layout ini. 
                    --}}
                    @yield('content')
                </div>

            </div>
        </main>
    </div>

    @include('layouts.script')
    @stack('scripts')
</body>

</html>