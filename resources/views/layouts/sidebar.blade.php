<aside class="w-64 bg-slate-50/50 border-r border-slate-100 flex flex-col shrink-0 transition-all duration-300">
            <!-- Logo -->
            <div class="h-20 flex items-center px-6 gap-3">
                <div class="w-8 h-8 bg-brand-500 rounded-lg flex items-center justify-center text-white font-bold">
                    <i data-lucide="bird" class="w-5 h-5"></i>
                </div>
                <span class="font-bold text-lg tracking-tight">Q CHICKEN</span>
            </div>

            <div class="flex-1 overflow-y-auto px-4 py-2 space-y-6">
                <!-- Main Nav -->
                <div>
                    <a href="#" id="nav-dashboard" onclick="switchTab('dashboard')" class="nav-link active flex items-center gap-3 px-3 py-2.5 rounded-xl font-medium transition-colors">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        Dashboard
                    </a>
                </div>

                <!-- Master Data Section -->
                <div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 px-3">Master Data</div>
                    <ul class="space-y-1 text-slate-500 font-medium text-sm">
                        <li>
                            <a href="#" id="nav-food-menu" onclick="switchTab('food-menu')" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-colors">
                                <i data-lucide="utensils-crosses" class="w-5 h-5"></i>
                                Menu Makanan
                            </a>
                        </li>
                        <li>
                            <a href="#" id="nav-branch" onclick="switchTab('branch')" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-colors">
                                <i data-lucide="store" class="w-5 h-5"></i>
                                Cabang / Outlet
                            </a>
                        </li>
                        <li>
                            <a href="#" id="nav-customers" onclick="switchTab('customers')" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-colors">
                                <i data-lucide="users" class="w-5 h-5"></i>
                                Data Pelanggan
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Transaction Section -->
                <div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 px-3">Transaksi</div>
                    <ul class="space-y-1 text-slate-500 font-medium text-sm">
                        <li>
                            <a href="#" id="nav-orders" onclick="switchTab('orders')" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-colors">
                                <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                                Pesanan Baru
                            </a>
                        </li>
                        <li>
                            <a href="#" id="nav-promotions" onclick="switchTab('promotions')" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-colors">
                                <i data-lucide="megaphone" class="w-5 h-5"></i>
                                Promosi Aktif
                            </a>
                        </li>
                        <li>
                            <a href="#" id="nav-coupon" onclick="switchTab('coupon')" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-colors">
                                <i data-lucide="ticket" class="w-5 h-5"></i>
                                Kelola Kupon
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Settings -->
                <div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 px-3">Pengaturan</div>
                    <ul class="space-y-1 text-slate-500 font-medium text-sm">
                        <li>
                            <a href="#" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-colors">
                                <i data-lucide="user-cog" class="w-5 h-5"></i>
                                Akun Saya
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-colors">
                                <i data-lucide="settings" class="w-5 h-5"></i>
                                Konfigurasi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Footer Sidebar -->
            <div class="p-4 border-t border-slate-100">
                <div class="flex items-center justify-between px-3 py-2 text-sm font-medium text-slate-500 mb-4">
                    <div class="flex items-center gap-3">
                        <i data-lucide="moon" class="w-5 h-5"></i>
                        Dark Mode
                    </div>
                    <button class="w-9 h-5 bg-slate-200 rounded-full relative flex items-center px-0.5">
                        <div class="w-4 h-4 bg-white rounded-full shadow-sm"></div>
                    </button>
                </div>
                
                <div class="flex items-center justify-between px-2 py-2 rounded-xl hover:bg-slate-100 cursor-pointer">
                    <div class="flex items-center gap-3">
                        <img src="https://ui-avatars.com/api/?name=Admin+Q&background=f97316&color=fff" alt="User" class="w-9 h-9 rounded-full object-cover">
                        <div class="text-sm">
                            <p class="font-semibold text-slate-900 leading-none">Admin Q</p>
                            <p class="text-xs text-slate-500 mt-1">admin@qchicken.id</p>
                        </div>
                    </div>
                    <i data-lucide="log-out" class="w-4 h-4 text-slate-400"></i>
                </div>
            </div>
        </aside>