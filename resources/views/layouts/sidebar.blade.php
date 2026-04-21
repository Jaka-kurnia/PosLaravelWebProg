<aside class="w-64 bg-white border-r border-slate-200 flex flex-col shrink-0 transition-all duration-300">
    <div class="h-20 flex items-center px-6 gap-3">
        <div
            class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-bold shadow-lg shadow-indigo-100">
            <i data-lucide="bird" class="w-5 h-5"></i>
        </div>
        <span class="font-bold text-lg tracking-tight text-slate-800">Q CHICKEN</span>
    </div>

    <div class="flex-1 overflow-y-auto px-4 py-4 space-y-6">

        <div>
            <a href="{{ route('dashboard') }}" id="nav-dashboard" onclick="switchTab('dashboard')"
                class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium transition-all {{ request()->is('dashboard*') ? 'bg-indigo-50 text-indigo-600 shadow-sm' : 'text-slate-500 hover:bg-slate-50 hover:text-slate-900' }}">
                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                Dashboard
            </a>
        </div>

        <div>
            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 px-3">
                Master Data
            </div>

            <ul class="space-y-1 text-sm">
                <li class="relative">
                    <button onclick="toggleDropdown('master-menu')"
                        class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl transition-all group {{ request()->is('product*', 'categories*', 'suplier*') ? 'text-slate-900 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                        <div class="flex items-center gap-3">
                            <i data-lucide="database"
                                class="w-5 h-5 {{ request()->is('product*', 'categories*', 'suplier*') ? 'text-indigo-600' : 'text-slate-400 group-hover:text-slate-600' }}"></i>
                            <span>Kelola Data</span>
                        </div>
                        <i data-lucide="chevron-down" id="arrow-master"
                            class="w-4 h-4 transition-transform duration-300 {{ request()->is('product*', 'categories*', 'suplier*') ? 'rotate-180' : '' }}"></i>
                    </button>

                    <ul id="master-menu"
                        class="{{ request()->is('product*', 'categories*', 'suplier*') ? '' : 'hidden' }} mt-1 ml-4 border-l-2 border-slate-100 pl-2 space-y-1">
                        <li>
                            <a href="{{ route('categories.index') }}"
                                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-all {{ request()->routeIs('categories.index') ? 'bg-indigo-50 text-indigo-600 font-semibold' : 'text-slate-500 hover:bg-slate-50' }}">
                                <i data-lucide="layout-grid" class="w-4 h-4"></i>
                                Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product.index') }}"
                                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-all {{ request()->routeIs('product.index') ? 'bg-indigo-50 text-indigo-600 font-semibold' : 'text-slate-500 hover:bg-slate-50' }}">
                                <i data-lucide="package" class="w-4 h-4"></i>
                                Produk
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('suplier.index') }}"
                                class="flex items-center gap-3 px-3 py-2 rounded-lg transition-all {{ request()->routeIs('suplier.index') ? 'bg-indigo-50 text-indigo-600 font-semibold' : 'text-slate-500 hover:bg-slate-50' }}">
                                <i data-lucide="truck" class="w-4 h-4"></i>
                                Supplier
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div>
            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 px-3">Transaksi</div>
            <ul class="space-y-1 text-slate-500 font-medium text-sm">
                <li>
                    <a href="#"
                        class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-50 hover:text-slate-900 transition-all">
                        <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                        Pesanan Baru
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-50 hover:text-slate-900 transition-all">
                        <i data-lucide="megaphone" class="w-5 h-5"></i>
                        Promosi Aktif
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 px-3">Pengaturan</div>
            <ul class="space-y-1 text-slate-500 font-medium text-sm">
                <li>
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-50 transition-all">
                        <i data-lucide="user-cog" class="w-5 h-5 text-slate-400"></i>
                        Akun Saya
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="p-4 border-t border-slate-100 bg-white">
        <div class="flex items-center justify-between px-3 py-2 text-sm font-medium text-slate-500 mb-4">
            <div class="flex items-center gap-3">
                <i data-lucide="moon" class="w-5 h-5"></i>
                Dark Mode
            </div>
            <button class="w-9 h-5 bg-slate-200 rounded-full relative flex items-center px-0.5">
                <div class="w-4 h-4 bg-white rounded-full shadow-sm"></div>
            </button>
        </div>

        <div
            class="flex items-center justify-between px-2 py-2 rounded-xl hover:bg-slate-50 cursor-pointer transition-colors border border-transparent hover:border-slate-100">
            <div class="flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Admin+Q&background=6366f1&color=fff" alt="User"
                    class="w-9 h-9 rounded-full">
                <div class="text-sm">
                    <p class="font-bold text-slate-900 leading-none">Admin Q</p>
                    <p class="text-[11px] text-slate-500 mt-1">admin@qchicken.id</p>
                </div>
            </div>

            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="p-2 text-slate-400 hover:text-rose-600 transition-colors" title="Logout">
                <i data-lucide="log-out" class="w-4 h-4"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>
    </div>
</aside>
