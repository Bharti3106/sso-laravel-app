<!-- Navbar -->
<nav class="bg-gradient-to-r from-indigo-900 to-blue-800 px-4 sm:px-8 py-4 shadow-xl">

    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">

        <!-- Logo -->
        <div class="text-center sm:text-left">

            <h1 class="text-xl sm:text-2xl font-bold text-white tracking-wide">
                Secure Banking
            </h1>

            <p class="text-blue-100 text-xs sm:text-sm">
                Customer Dashboard
            </p>

        </div>

        <!-- User Info -->
        <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">

            <div class="flex items-center gap-3">

                <img src="{{ session('user.avatar') }}"
                     class="w-12 h-12 rounded-full border-2 border-white shadow-lg">

                <div class="text-center sm:text-right">

                    <h3 class="text-white font-semibold text-sm sm:text-base">
                        {{ session('user.name') }}
                    </h3>

                    <p class="text-blue-100 text-xs sm:text-sm break-all">
                        {{ session('user.email') }}
                    </p>

                </div>

            </div>

            <!-- Logout -->
            <a href="{{ url('/logout') }}"
               class="bg-white text-indigo-700 px-4 py-2 rounded-xl font-semibold hover:bg-indigo-50 transition duration-300 shadow-md text-sm">

                Logout

            </a>

        </div>

    </div>

</nav>

<!-- Main -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 py-6 sm:py-10">

    <!-- Welcome -->
    <div class="bg-white rounded-3xl shadow-2xl p-5 sm:p-8 border border-gray-100 mb-8">

        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">

            <div>

                <h2 class="text-2xl sm:text-4xl font-bold text-gray-800 mb-3 leading-tight">
                    Welcome, {{ session('user.name') }} 👋
                </h2>

                <p class="text-gray-500 text-sm sm:text-lg">
                    Your banking dashboard is secured with Google OAuth 2.0 authentication.
                </p>

            </div>

            <div class="bg-green-100 text-green-700 px-4 py-3 rounded-2xl font-semibold text-sm sm:text-base whitespace-nowrap">
                Account Secured
            </div>

        </div>

    </div>
