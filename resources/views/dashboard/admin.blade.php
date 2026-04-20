
@extends('layouts.app')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div
                            class="bg-linear-to-br from-brand-500 to-orange-600 p-5 rounded-2xl border border-white/20 shadow-lg shadow-orange-100 relative overflow-hidden group hover:shadow-xl transition-all">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-sm font-medium text-white/80">Total Pesanan</span>
                                <span
                                    class="flex items-center gap-1 text-xs font-semibold text-white bg-white/20 px-2 py-1 rounded-full">
                                    <i data-lucide="trending-up" class="w-3 h-3"></i> +12.5%
                                </span>
                            </div>
                            <h3 class="text-3xl font-bold text-white mb-4">1,234</h3>
                            <p class="text-xs font-medium text-white/70">Meningkat bulan ini</p>
                        </div>

                        <div
                            class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-sm font-medium text-slate-500">Pendapatan</span>
                                <span
                                    class="flex items-center gap-1 text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">
                                    <i data-lucide="trending-up" class="w-3 h-3"></i> +8.2%
                                </span>
                            </div>
                            <h3 class="text-3xl font-bold text-slate-900 mb-4">Rp 45.2M</h3>
                            <p class="text-xs text-slate-500">Berdasarkan data harian</p>
                        </div>

                        <div
                            class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-sm font-medium text-slate-500">Pelanggan Baru</span>
                                <span
                                    class="flex items-center gap-1 text-xs font-semibold text-emerald-500 bg-emerald-50 px-2 py-1 rounded-full">
                                    <i data-lucide="trending-up" class="w-3 h-3"></i> +15%
                                </span>
                            </div>
                            <h3 class="text-3xl font-bold text-slate-900 mb-4">456</h3>
                            <p class="text-xs text-slate-500">Registrasi minggu ini</p>
                        </div>

                        <div
                            class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-sm font-medium text-slate-500">Rating Outlet</span>
                                <span
                                    class="flex items-center gap-1 text-xs font-semibold text-orange-500 bg-orange-50 px-2 py-1 rounded-full">
                                    <i data-lucide="star" class="w-3 h-3"></i> 4.8/5
                                </span>
                            </div>
                            <h3 class="text-3xl font-bold text-slate-900 mb-4">4.8</h3>
                            <p class="text-xs text-slate-500">Kepuasan pelanggan sangat baik</p>
                        </div>
                    </div>

                    <!-- Charts Section -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                        <div class="lg:col-span-2 bg-white border border-slate-100 p-6 rounded-2xl shadow-sm">
                            <h3 class="font-semibold text-slate-900 mb-6">Analisis Penjualan Mingguan</h3>
                            <div class="h-64 w-full">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                        <div class="lg:col-span-1 bg-white border border-slate-100 p-6 rounded-2xl shadow-sm">
                            <h3 class="font-semibold text-slate-900 mb-6">Metode Pemesanan</h3>
                            <div class="h-64 w-full flex items-center justify-center">
                                <canvas id="donutChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Food Menu View -->
                <div id="view-food-menu" class="view-section hidden animate-in slide-in-from-bottom-4 duration-300">
                    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-8 max-w-3xl">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="p-3 bg-brand-50 rounded-xl">
                                <i data-lucide="utensils-crosses" class="w-6 h-6 text-brand-500"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-slate-900">Input Master Menu</h2>
                                <p class="text-sm text-slate-500">Tambahkan produk makanan atau minuman baru ke sistem
                                </p>
                            </div>
                        </div>
                        <form class="space-y-6">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2">
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Produk</label>
                                    <input type="text"
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none transition-all"
                                        placeholder="Cth: Ayam Bakar Madu">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Kategori</label>
                                    <select
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none bg-white">
                                        <option>Ayam Goreng</option>
                                        <option>Paket Hemat</option>
                                        <option>Minuman Dingin</option>
                                        <option>Side Dish</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Harga Jual
                                        (Rp)</label>
                                    <input type="number"
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none"
                                        placeholder="0">
                                </div>
                                <div class="col-span-2">
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi
                                        Produk</label>
                                    <textarea rows="4"
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none resize-none"
                                        placeholder="Tuliskan detail produk..."></textarea>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 pt-6 border-t border-slate-100">
                                <button type="button"
                                    class="flex-1 py-3 px-4 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition-all">Batal</button>
                                <button type="submit"
                                    class="flex-1 py-3 px-4 bg-brand-500 hover:bg-brand-600 text-white font-semibold rounded-xl shadow-lg shadow-brand-500/20 transition-all">Simpan
                                    Data Menu</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Branch View -->
                <div id="view-branch" class="view-section hidden animate-in slide-in-from-bottom-4 duration-300">
                    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-8 max-w-3xl">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="p-3 bg-brand-50 rounded-xl">
                                <i data-lucide="store" class="w-6 h-6 text-brand-500"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-slate-900">Registrasi Cabang Baru</h2>
                                <p class="text-sm text-slate-500">Daftarkan outlet Q Chicken baru ke dalam jaringan</p>
                            </div>
                        </div>
                        <form class="space-y-6">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2">
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Cabang /
                                        Outlet</label>
                                    <input type="text"
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none"
                                        placeholder="Cth: Q Chicken - Bandung Timur">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Manager
                                        Cabang</label>
                                    <input type="text"
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none"
                                        placeholder="Nama Manager">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Kontak
                                        Outlet</label>
                                    <input type="tel"
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none"
                                        placeholder="0812...">
                                </div>
                                <div class="col-span-2">
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Alamat
                                        Lengkap</label>
                                    <textarea rows="3"
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none"
                                        placeholder="Lokasi outlet..."></textarea>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 pt-6 border-t border-slate-100">
                                <button type="button"
                                    class="flex-1 py-3 px-4 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl transition-all">Batal</button>
                                <button type="submit"
                                    class="flex-1 py-3 px-4 bg-brand-500 hover:bg-brand-600 text-white font-semibold rounded-xl shadow-lg shadow-brand-500/20 transition-all">Simpan
                                    Cabang</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Orders View -->
                <div id="view-orders" class="view-section hidden animate-in slide-in-from-bottom-4 duration-300">
                    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-8 max-w-3xl">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="p-3 bg-brand-50 rounded-xl">
                                <i data-lucide="shopping-cart" class="w-6 h-6 text-brand-500"></i>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-slate-900">Form Transaksi Baru</h2>
                                <p class="text-sm text-slate-500">Input pesanan pelanggan secara manual</p>
                            </div>
                        </div>
                        <form class="space-y-6">
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Nama
                                        Pelanggan</label>
                                    <input type="text"
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none"
                                        placeholder="Cth: Budi">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tipe Order</label>
                                    <select
                                        class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-brand-500/20 focus:border-brand-500 outline-none bg-white">
                                        <option>Makan di Tempat</option>
                                        <option>Bawa Pulang</option>
                                        <option>Delivery Online</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Pilih Menu</label>
                                    <div class="p-4 border border-slate-100 bg-slate-50 rounded-xl space-y-3">
                                        <div class="flex items-center justify-between text-sm">
                                            <span>Ayam Bakar Madu (x1)</span>
                                            <span class="font-bold">Rp 25.000</span>
                                        </div>
                                        <div class="flex items-center justify-between text-sm">
                                            <span>Es Teh Manis (x1)</span>
                                            <span class="font-bold">Rp 5.000</span>
                                        </div>
                                        <div
                                            class="pt-2 border-t border-slate-200 flex justify-between font-bold text-brand-600">
                                            <span>Total Bayar</span>
                                            <span>Rp 30.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 pt-6 border-t border-slate-100">
                                <button type="submit"
                                    class="w-full py-4 px-4 bg-brand-500 hover:bg-brand-600 text-white font-bold rounded-xl shadow-lg shadow-brand-500/20 transition-all">PROSES
                                    PEMBAYARAN</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Customers View -->
                <div id="view-customers" class="view-section hidden animate-in slide-in-from-bottom-4 duration-300">
                    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-8 max-w-3xl">
                        <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                            <i data-lucide="users" class="w-6 h-6 text-brand-500"></i> Input Data Pelanggan
                        </h2>
                        <form class="space-y-4">
                            <input type="text" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm"
                                placeholder="Nama Lengkap">
                            <input type="email" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm"
                                placeholder="Email (Opsional)">
                            <input type="tel" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm"
                                placeholder="Nomor WhatsApp">
                            <button type="submit"
                                class="w-full py-3 bg-brand-500 text-white font-semibold rounded-xl mt-4">Simpan
                                Member</button>
                        </form>
                    </div>
                </div>

                <!-- Promotions View -->
                <div id="view-promotions" class="view-section hidden animate-in slide-in-from-bottom-4 duration-300">
                    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-8 max-w-3xl">
                        <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                            <i data-lucide="megaphone" class="w-6 h-6 text-brand-500"></i> Buat Promosi Baru
                        </h2>
                        <form class="space-y-4">
                            <input type="text" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm"
                                placeholder="Nama Event Promosi">
                            <div class="grid grid-cols-2 gap-4">
                                <input type="date"
                                    class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm"
                                    title="Mulai">
                                <input type="date"
                                    class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm"
                                    title="Berakhir">
                            </div>
                            <button type="submit"
                                class="w-full py-3 bg-brand-500 text-white font-semibold rounded-xl mt-4">Aktifkan
                                Promo</button>
                        </form>
                    </div>
                </div>

                <!-- Coupon View -->
                <div id="view-coupon" class="view-section hidden animate-in slide-in-from-bottom-4 duration-300">
                    <div class="bg-white border border-slate-100 rounded-2xl shadow-sm p-8 max-w-3xl">
                        <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                            <i data-lucide="ticket" class="w-6 h-6 text-brand-500"></i> Generate Kode Kupon
                        </h2>
                        <form class="space-y-4">
                            <div class="flex gap-2">
                                <input type="text" id="coupon-code"
                                    class="flex-1 px-4 py-3 border border-slate-200 rounded-xl text-sm font-mono font-bold uppercase"
                                    placeholder="KODE-KUPON">
                                <button type="button" onclick="generateCode()"
                                    class="px-4 py-3 bg-slate-100 text-slate-600 rounded-xl hover:bg-slate-200 transition-all font-semibold">Acak</button>
                            </div>
                            <input type="number" class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm"
                                placeholder="Nominal Diskon (%)">
                            <button type="submit"
                                class="w-full py-3 bg-brand-500 text-white font-semibold rounded-xl mt-4">Simpan
                                Kupon</button>
                        </form>
                    </div>
                </div>
@endsection
