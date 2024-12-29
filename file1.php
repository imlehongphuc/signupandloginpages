<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <div role="navigation" aria-label="Navbar" class="navbar topbar-wrapper z-10 border-b border-base-200 px-3">
                <div class="gap-3 navbar-start">
                    <label for="my-drawer-2" class="btn btn-sm btn-square btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </label>
                    <button aria-label="Search button" class="btn hidden h-9 w-48 items-center justify-start gap-3 border-base-content/20 hover:border-transparent hover:bg-base-content/20 sm:flex btn-sm btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <span class="text-base-content/60">Search</span>
                    </button>
                    <button aria-label="Search button" class="btn flex border-base-content/20 hover:border-transparent hover:bg-base-content/20 sm:hidden btn-sm btn-circle btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </button>
                   <div class="flex-none">
                    <button id="openModalButton" class="btn btn-primary">Login / Register</button>
                </div>
                </div>
                <div class="navbar-center"></div>
                <div class="gap-1.5 navbar-end">
                    <button id="theme-toggle" aria-label="Theme toggler" class="btn btn-sm btn-circle btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    </button>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost rounded-btn px-1.5 hover:bg-base-content/20">
                            <div class="flex items-center gap-2">
                                <div aria-label="Avatar photo" class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" alt="Avatar" />
                                    </div>
                                </div>
                                <div class="flex flex-col items-start">
                                    <p class="text-sm/none">Deep</p>
                                    <p class="mt-1 text-xs/none text-primary">Edit</p>
                                </div>
                            </div>
                        </label>
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box mt-4 w-52" role="menu">
                            <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> My Profile</a></li>
                            <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notification</a></li>
                            <hr class="-mx-2 my-1 border-base-content/10" />
                            <li><a class="text-error"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Page content -->
            <main class="flex-1 overflow-y-auto p-4">
                <h1 class="text-2xl font-bold mb-4">Welcome to the Dashboard</h1>
                <p>This is the main content area of your dashboard. Add your components and content here.</p>
            </main>
        </div>
        
        <!-- Sidebar -->
        <div class="drawer-side">
            <label for="my-drawer-2" class="drawer-overlay"></label>
            <div class="leftmenu-wrapper w-80 min-h-full bg-base-200 text-base-content">
                <a class="flex h-16 items-center justify-center" href="/dashboards/ecommerce">
                    <div class="inline">
                        <img src="https://daisyui.com/images/logo.svg" height="24" alt="logo" />
                    </div>
                </a>
                <div class="h-[calc(100vh-64px)] lg:h-[calc(100vh-230px)] overflow-y-auto">
                    <ul class="menu mb-6">
                        <li class="mb-0.5">
                            <a class="active" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                Dashboard
                            </a>
                        </li>
                        <li class="menu-title font-semibold">Apps</li>
                        <li class="mb-0.5">
                            <details>
                                <summary>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                    Ecommerce
                                    <div class="pro-badge">Pro</div>
                                </summary>
                                <ul>
                                    <li class="mb-0.5"><a href="#">Orders</a></li>
                                    <li class="mb-0.5"><a href="#">Products</a></li>
                                    <li class="mb-0.5"><a href="#">Sellers</a></li>
                                    <li class="mb-0.5"><a href="#">Customers</a></li>
                                    <li class="mb-0.5"><a href="#">Shops</a></li>
                                </ul>
                            </details>
                        </li>
                        <li class="mb-0.5">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                File Manager
                                <div class="pro-badge">Pro</div>
                            </a>
                        </li>
                        <li class="mb-0.5">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                Chat
                                <div class="pro-badge">Pro</div>
                            </a>
                        </li>
                    </ul>
                </div>
                
                
                
                
                
                
                
            </div>
        </div>
    </div>
      <!-- Login/Register Modal -->
    <dialog id="loginWindow" class="modal">
        <div class="modal-box">
            <div class="form-slider-container">
                <div class="form-slider">
                    <!-- Login Form -->
                    <div class="form-content">
                        <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                        </form>
                        <h3 class="font-bold text-lg mb-4">Login</h3>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email Address</span>
                            </label>
                            <input type="email" placeholder="Email" class="input input-bordered" />
                        </div>
                        <div class="form-control mt-4">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input type="password" placeholder="Password" class="input input-bordered" />
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Login</button>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-link toggle-form">New user? Register here</button>
                        </div>
                    </div>

                    <!-- Register Form -->
                    <div class="form-content">
                        <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                        </form>
                        <h3 class="font-bold text-lg mb-4">Register</h3>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Full Name</span>
                            </label>
                            <input type="text" placeholder="Full Name" class="input input-bordered" />
                        </div>
                        <div class="form-control mt-4">
                            <label class="label">
                                <span class="label-text">Email Address</span>
                            </label>
                            <input type="email" placeholder="Email" class="input input-bordered" />
                        </div>
                        <div class="form-control mt-4">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input type="password" placeholder="Password" class="input input-bordered" />
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Register</button>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-link toggle-form">Already have an account? Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </dialog>

    <style>
        .form-slider-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .form-slider {
            display: flex;
            width: 200%;
            transition: transform 0.5s ease;
        }

        .form-content {
            width: 50%;
            padding: 20px;
            box-sizing: border-box;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const formSlider = document.querySelector('.form-slider');
            const toggleForms = document.querySelectorAll('.toggle-form');
            const loginWindow = document.getElementById('loginWindow');
            const openModalButton = document.getElementById('openModalButton');

            toggleForms.forEach(toggle => {
                toggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    formSlider.style.transform = formSlider.style.transform === 'translateX(-50%)'
                        ? 'translateX(0)'
                        : 'translateX(-50%)';
                });
            });

            openModalButton.addEventListener('click', () => {
                loginWindow.showModal();
            });

            // Chart.js
            const ctx1 = document.getElementById('salesChart').getContext('2d');
            new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Sales',
                        data: [12, 19, 3, 5, 2, 3],
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                }
            });

            const ctx2 = document.getElementById('userActivityChart').getContext('2d');
            new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Active Users',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: 'rgba(153, 102, 255, 0.6)'
                    }]
                }
            });
        });
    </script>
    <style>
        .pro-badge {
    background-color: #3b82f6;
    color: white;
    font-size: 0.7rem;
    padding: 2px 6px;
    border-radius: 9999px;
    margin-left: 0.5rem;
}

.leftmenu-wrapper {
    display: flex;
    flex-direction: column;
}

@media (max-width: 1023px) {
    .leftmenu-wrapper {
        padding-bottom: 5rem;
    }
}

.drawer-side {
    max-height: 100vh;
    overflow-y: auto;
}

.menu-title {
    padding: 0.5rem 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 0.05em;
}

.menu li > details > summary {
    padding-left: 1rem;
}

.menu li > details > ul {
    padding-left: 1rem;
}


    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.documentElement;

    themeToggle.addEventListener('click', function() {
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        html.setAttribute('data-theme', newTheme);
    });

    // Dropdown functionality
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('[tabindex="0"]');
        const content = dropdown.querySelector('.dropdown-content');

        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            content.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target)) {
                content.classList.add('hidden');
            }
        });
    });

    // Collapsible sidebar menu functionality
    const collapsibles = document.querySelectorAll('details');
    s
    collapsibles.forEach(collapsible => {
        const summary = collapsible.querySelector('summary');
        summary.addEventListener('click', (e) => {
            e.preventDefault();
            collapsible.toggleAttribute('open');
        });
    });

    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('label[for="my-drawer-2"]');
    const drawer = document.getElementById('my-drawer-2');

    mobileMenuToggle.addEventListener('click', () => {
        drawer.checked = !drawer.checked;
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (window.innerWidth < 1024 && !e.target.closest('.drawer-side') && !e.target.closest('label[for="my-drawer-2"]')) {
            drawer.checked = false;
        }
    });
});


    </script>
</body>
</html>

