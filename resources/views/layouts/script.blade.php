<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                },
                colors: {
                    brand: {
                        50: '#fff7ed',
                        100: '#ffedd5',
                        500: '#f97316',
                        600: '#ea580c',
                    }
                }
            }
        }
    }
</script>
<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Scripts -->
<script>
    // Initialize Lucide Icons
    lucide.createIcons();

    // ----------------------------------------------------
    // Chart Configuration
    // ----------------------------------------------------
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
            datasets: [{
                label: 'Omzet',
                data: [12, 19, 15, 25, 32, 45, 50],
                borderColor: '#f97316',
                backgroundColor: 'rgba(249, 115, 22, 0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    const donutCtx = document.getElementById('donutChart').getContext('2d');
    new Chart(donutCtx, {
        type: 'doughnut',
        data: {
            labels: ['Dine-in', 'Takeaway', 'Delivery'],
            datasets: [{
                data: [300, 50, 100],
                backgroundColor: ['#f97316', '#fbbf24', '#f87171']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%'
        }
    });

    // ----------------------------------------------------
    // Logic Sidebar & Navigation
    // ----------------------------------------------------
    function switchTab(tabId) {
        // Sembunyikan semua view
        document.querySelectorAll('.view-section').forEach(view => {
            view.classList.add('hidden');
            view.classList.remove('block');
        });

        // Tampilkan view target
        const targetView = document.getElementById('view-' + tabId);
        if (targetView) {
            targetView.classList.remove('hidden');
            targetView.classList.add('block');
        }

        // Update Judul Header
        const pageTitle = document.getElementById('page-title');
        pageTitle.innerText = tabId.replace('-', ' ');

        // Update Status Active Sidebar
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
            link.classList.add('hover:bg-slate-100', 'text-slate-500');
        });

        const activeLink = document.getElementById('nav-' + tabId);
        if (activeLink) {
            activeLink.classList.add('active');
            activeLink.classList.remove('hover:bg-slate-100', 'text-slate-500');
        }

        // Re-init icons for dynamic content
        lucide.createIcons();
    }

    function generateCode() {
        const code = 'QC-' + Math.random().toString(36).substring(2, 8).toUpperCase();
        document.getElementById('coupon-code').value = code;
    }

    function toggleDropdown(menuId) {
        const menu = document.getElementById(menuId);
        const arrow = document.getElementById('arrow-master'); // Sesuaikan ID jika banyak dropdown

        // Toggle class hidden
        menu.classList.toggle('hidden');

        // Rotate arrow
        arrow.classList.toggle('rotate-180');
    }

    function toggleDropdown(id) {
        const element = document.getElementById(id);
        const arrow = document.getElementById('arrow-master');

        element.classList.toggle('hidden');
        arrow.classList.toggle('rotate-180');
    }

    // Inisialisasi Ikon Lucide
    document.addEventListener("DOMContentLoaded", function() {
        lucide.createIcons();
    });
    // Pastikan untuk menjalankan lucide.createIcons() setelah manipulasi DOM jika perlu
</script>
