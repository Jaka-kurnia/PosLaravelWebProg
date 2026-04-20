<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebolt Login - Q Chicken</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    <div class="min-h-screen flex justify-center items-center p-4 sm:p-10">
        <div class="max-w-7xl w-full bg-white shadow-2xl sm:rounded-3xl flex justify-center flex-1 overflow-hidden">

            <div class="lg:w-1/2 xl:w-5/12 p-8 sm:p-16">
                <div class="flex items-center gap-2 mb-10">
                    <div
                        class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center shadow-lg shadow-green-100">
                        <svg viewBox="0 0 24 24" fill="none" class="w-6 h-6 text-white"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L14.4 9.6L22 12L14.4 14.4L12 22L9.6 14.4L2 12L9.6 9.6L12 2Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-gray-800">Ebolt</span>
                </div>

                <div class="flex flex-col">
                    <div class="mb-8">
                        <h1 class="text-2xl xl:text-3xl font-extrabold text-gray-900">Masuk ke Akun</h1>
                        <p class="text-gray-500 mt-2">Satukan kata, data, dan tim Anda secara gratis.</p>
                    </div>

                    <div class="w-full flex-1">
                        <div class="flex flex-col items-center">
                            <button
                                class="w-full max-w-xs font-bold shadow-sm rounded-2xl py-3 bg-green-50 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:bg-green-100 border border-green-200">
                                <div class="bg-white p-1.5 rounded-full">
                                    <svg class="w-4" viewBox="0 0 533.5 544.3">
                                        <path
                                            d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                            fill="#4285f4" />
                                        <path
                                            d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                            fill="#34a853" />
                                        <path
                                            d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                            fill="#fbbc04" />
                                        <path
                                            d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                            fill="#ea4335" />
                                    </svg>
                                </div>
                                <span class="ml-4">Sign In with Google</span>
                            </button>
                        </div>

                        <div class="my-10 border-b text-center relative">
                            <div
                                class="leading-none px-4 inline-block text-xs text-gray-400 tracking-wide font-medium bg-white absolute left-1/2 -translate-x-1/2 -translate-y-1/2">
                                Atau masuk dengan E-mail
                            </div>
                        </div>

                        <form id="loginForm" action="{{ route('proseslogin') }}" method="POST"
                            class="mx-auto max-w-xs space-y-4">
                            @csrf
                            <div class="relative">
                                <input id="email" name="email" type="email" placeholder="Email"
                                    value="{{ old('email') }}"
                                    class="w-full px-5 py-4 rounded-xl font-medium bg-gray-50 border border-gray-200 placeholder-gray-400 text-sm focus:outline-none focus:border-green-400 focus:bg-white transition-all" />
                            </div>

                            <div class="relative">
                                <input id="password" name="password" type="password" placeholder="Password"
                                    class="w-full px-5 py-4 rounded-xl font-medium bg-gray-50 border border-gray-200 placeholder-gray-400 text-sm focus:outline-none focus:border-green-400 focus:bg-white transition-all" />

                                <button type="button" onclick="togglePassword()"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                            </div>

                            <div class="flex justify-end">
                                <a href="#" class="text-xs text-gray-500 hover:text-green-600">Lupa kata
                                    sandi?</a>
                            </div>

                            <button type="button" onclick="validateAndSubmit()"
                                class="mt-4 tracking-wide font-semibold bg-green-500 text-white w-full py-4 rounded-xl hover:bg-green-600 shadow-lg shadow-green-100 transition-all duration-300 ease-in-out flex items-center justify-center focus:outline-none">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                </svg>
                                <span class="ml-3 text-lg">Sign In</span>
                            </button>

                            <p class="mt-6 text-xs text-gray-500 text-center leading-relaxed">
                                Dengan masuk, Anda setuju dengan
                                <a href="#"
                                    class="text-green-600 font-semibold underline decoration-dotted">Syarat Layanan</a>
                                dan
                                <a href="#"
                                    class="text-green-600 font-semibold underline decoration-dotted">Kebijakan
                                    Privasi</a> kami.
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex-1 bg-green-50 text-center hidden lg:flex items-center justify-center p-12">
                <div class="w-full h-full bg-contain bg-center bg-no-repeat transition-transform duration-700 hover:scale-105"
                    style="background-image: url('https://drive.google.com/uc?export=view&id=1KZ_Ub_2lZ0dHbKV0fAIhxVhiQA183RCz');">
                </div>
            </div>

        </div>
    </div>

    <script>
        // 1. Logic Alert Gagal (Laravel Validation)
        @if ($errors->any())
            Swal.fire({
                title: 'Akses Ditolak',
                text: '{{ $errors->first() }}',
                icon: 'error',
                confirmButtonColor: '#22c55e'
            });
        @endif

        // 2. Logic Alert Berhasil
        @if (session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                timer: 3000,
                showConfirmButton: false
            });
        @endif

        // 3. Fungsi Validasi & Submit
        function validateAndSubmit() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                Swal.fire({
                    title: 'Form Belum Lengkap',
                    text: 'Silakan isi Email dan Password Anda.',
                    icon: 'warning',
                    confirmButtonColor: '#22c55e'
                });
                return;
            }
            document.getElementById('loginForm').submit();
        }

        // 4. Fungsi Toggle Password
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
