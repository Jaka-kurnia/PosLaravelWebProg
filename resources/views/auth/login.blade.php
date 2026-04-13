<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebolt Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    borderRadius: {
                        '4xl': '2rem'
                    }
                }
            }
        }
    </script>
</head>

<body class="antialiased">
    <div class="min-h-screen bg-[#f5f6f8] p-4 md:p-8 flex items-center justify-center font-sans">
        <div
            class="relative w-full max-w-6xl h-[80vh] min-h-[700px] rounded-4xl overflow-hidden shadow-2xl bg-blue-100 flex items-center justify-center">

            <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1601297183305-6df142704ea2?q=80&w=2574&auto=format&fit=crop');">
                <div
                    class="absolute inset-0 bg-linear-to-b from-blue-300/60 via-blue-100/40 to-white/90 backdrop-blur-[2px]">
                </div>
            </div>

            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-white/30 rounded-full z-0">
            </div>

            <div class="absolute top-8 left-8 z-20 flex items-center gap-2">
                <div class="w-8 h-8 bg-[#1a1a1a] rounded-lg flex items-center justify-center shadow-md">
                    <svg viewBox="0 0 24 24" fill="none" class="w-5 h-5 text-white"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L14.4 9.6L22 12L14.4 14.4L12 22L9.6 14.4L2 12L9.6 9.6L12 2Z"
                            fill="currentColor" />
                        <circle cx="12" cy="12" r="3" fill="#1a1a1a" />
                    </svg>
                </div>
                <span class="font-bold text-gray-900 text-xl tracking-tight">Ebolt</span>
            </div>

            <div
                class="relative z-10 w-full max-w-[420px] bg-white/70 backdrop-blur-2xl p-8 rounded-4xl shadow-[0_8px_32px_rgba(0,0,0,0.08)] border border-white/50">

                <div
                    class="mx-auto w-14 h-14 bg-white/90 rounded-2xl flex items-center justify-center shadow-sm mb-6 border border-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="w-6 h-6 text-gray-800">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" y1="12" x2="3" y2="12"></line>
                    </svg>
                </div>

                <div class="text-center mb-8">
                    <h1 class="text-[26px] font-bold text-gray-900 mb-2">Masuk dengan email</h1>
                    <p class="text-sm text-gray-500 px-4">Satukan kata, data, dan tim Anda secara gratis.</p>
                </div>

                <form id="loginForm" action="{{ route('proseslogin') }}" method="POST" class="space-y-4">
                    @csrf

                    <div class="relative flex items-center">
                        <div class="absolute left-4 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5">
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                        </div>
                        <input id="email" name="email" type="email" placeholder="Email"
                            value="{{ old('email') }}"
                            class="w-full bg-[#f4f4f5]/80 hover:bg-[#f4f4f5] transition-colors text-gray-900 rounded-xl py-3.5 pl-12 pr-4 outline-none focus:ring-2 focus:ring-gray-200" />
                    </div>

                    <div class="relative flex items-center">
                        <div class="absolute left-4 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </div>
                        <input id="password" name="password" type="password" placeholder="Kata Sandi"
                            class="w-full bg-[#f4f4f5]/80 hover:bg-[#f4f4f5] transition-colors text-gray-900 rounded-xl py-3.5 pl-12 pr-12 outline-none focus:ring-2 focus:ring-gray-200" />

                        <button type="button" onclick="togglePassword()"
                            class="absolute right-4 text-gray-400 hover:text-gray-600">
                            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                    </div>

                    <div class="flex justify-end mt-2 mb-6">
                        <a href="#"
                            class="text-sm font-medium text-gray-700 hover:text-black transition-colors">Lupa kata
                            sandi?</a>
                    </div>

                    <button type="button" onclick="validateAndSubmit()"
                        class="w-full bg-linear-to-b from-[#2a2a2a] to-[#121212] text-white font-medium py-3.5 rounded-xl shadow-md hover:-translate-y-px transition-all duration-200">
                        Mulai
                    </button>
                </form>

                <div class="flex items-center gap-4 my-8">
                    <div class="flex-1 border-t border-dotted border-gray-300"></div>
                    <span class="text-xs font-medium text-gray-400">Atau masuk dengan</span>
                    <div class="flex-1 border-t border-dotted border-gray-300"></div>
                </div>

                <div class="flex items-center justify-between gap-3">
                    <button
                        class="flex-1 bg-white border border-gray-200 py-3 rounded-xl flex justify-center shadow-sm hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="#4285F4" />
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                fill="#34A853" />
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                fill="#FBBC05" />
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                fill="#EA4335" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // 1. Alert Gagal (Error Validation dari Controller)
        @if ($errors->any())
            Swal.fire({
                title: 'Login Gagal',
                text: '{{ $errors->first() }}',
                icon: 'error',
                confirmButtonColor: '#1a1a1a',
                borderRadius: '20px'
            });
        @endif

        // 2. Alert Berhasil (Pesan Sukses dari Controller)
        @if (session('success'))
            <
            script src = "https://cdn.jsdelivr.net/npm/sweetalert2@11" >
    </>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            icon: 'success',
            timer: 3000,
            showConfirmButton: false,
            borderRadius: '20px'
        });
    </script>
    @endif

    // Fungsi Validasi Client-side & Submit
    function validateAndSubmit() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (!email || !password) {
    Swal.fire({
    title: 'Wajib Diisi!',
    text: 'Silakan masukkan email dan kata sandi Anda.',
    icon: 'warning',
    confirmButtonColor: '#1a1a1a',
    borderRadius: '20px'
    });
    return;
    }

    // Jalankan form submit ke Laravel
    document.getElementById('loginForm').submit();
    }

    // Fungsi Toggle Show/Hide Password
    function togglePassword() {
    const passInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (passInput.type === 'password') {
    passInput.type = 'text';
    eyeIcon.innerHTML =
                    '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line>';
    } else {
    passInput.type = 'password';
    eyeIcon.innerHTML =
                    '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>';
    }
    }
    </script>
</body>

</html>
