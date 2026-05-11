<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-slate-100 via-blue-50 to-indigo-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-indigo-900 via-blue-800 to-indigo-900 shadow-xl">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                <!-- Left -->
                <div class="flex items-center gap-4">

                    <!-- Avatar -->
                    <img src="{{ session('user.avatar') }}"
                         class="w-14 h-14 rounded-2xl border-2 border-white shadow-lg">

                    <!-- User -->
                    <div>

                        <h1 class="text-white text-xl sm:text-2xl font-bold leading-tight">
                            Welcome, {{ session('user.name') }}
                        </h1>

                        <p class="text-blue-100 text-sm break-all">
                            {{ session('user.email') }}
                        </p>

                    </div>

                </div>

                <!-- Right -->
                <div class="flex items-center justify-between md:justify-end gap-3">

                    <!-- Security -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-2xl">

                        <p class="text-green-300 text-xs font-medium">
                            ● Secure Session Active
                        </p>

                    </div>

                    <!-- Logout -->
                    <a href="{{ url('/logout') }}"
                       class="bg-white text-indigo-700 px-5 py-2.5 rounded-2xl font-semibold hover:bg-indigo-50 transition-all duration-300 shadow-lg text-sm">

                        Logout

                    </a>

                </div>

            </div>

        </div>

    </nav>

    <!-- Main -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-6">

        <!-- Hero Section -->
        <div class="relative overflow-hidden bg-white rounded-[30px] shadow-2xl border border-gray-100 p-6 sm:p-8 mb-8">

            <!-- Background Blur -->
            <div class="absolute top-0 right-0 w-40 h-40 bg-indigo-100 rounded-full blur-3xl opacity-40"></div>

            <div class="relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

                <!-- Left -->
                <div>

                    <p class="text-indigo-600 font-semibold text-sm uppercase tracking-wider mb-3">
                        Secure Banking Dashboard
                    </p>

                    <h2 class="text-3xl sm:text-5xl font-bold text-gray-800 leading-tight mb-4">
                        Banking Made <br class="hidden sm:block">
                        Simple & Secure
                    </h2>

                    <p class="text-gray-500 text-sm sm:text-lg max-w-2xl leading-relaxed">
                        Your account is protected with Google OAuth 2.0 authentication,
                        encrypted sessions, and multi-layer security protocols.
                    </p>

                </div>

                <!-- Balance Card -->
                <div class="bg-gradient-to-br from-indigo-600 to-blue-700 text-white rounded-3xl p-6 min-w-full sm:min-w-[280px] shadow-xl">

                    <p class="text-sm text-blue-100 mb-2">
                        Available Balance
                    </p>

                    <h2 class="text-4xl font-bold mb-4">
                        ₹2,45,000
                    </h2>

                    <div class="flex items-center justify-between text-sm">

                        <span class="bg-white/20 px-3 py-1 rounded-xl">
                            +2.5%
                        </span>

                        <span class="text-blue-100">
                            Updated Today
                        </span>

                    </div>

                </div>

            </div>

        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Transactions -->
            <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100">

                <p class="text-gray-500 text-sm uppercase tracking-wider">
                    Transactions
                </p>

                <h2 class="text-4xl font-bold text-gray-800 mt-3">
                    128
                </h2>

                <p class="text-blue-600 text-sm mt-3">
                    Last updated today
                </p>

            </div>

            <!-- Security -->
            <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100">

                <p class="text-gray-500 text-sm uppercase tracking-wider">
                    Security Status
                </p>

                <h2 class="text-3xl font-bold text-green-600 mt-3">
                    Protected
                </h2>

                <p class="text-gray-500 text-sm mt-3">
                    OAuth + Session Security Enabled
                </p>

            </div>

            <!-- User -->
            <div class="bg-gradient-to-br from-indigo-600 to-blue-700 rounded-3xl p-6 shadow-xl text-white">

                <p class="text-blue-100 text-sm uppercase tracking-wider">
                    Logged In User
                </p>

                <div class="flex items-center gap-4 mt-5">

                    <img src="{{ session('user.avatar') }}"
                         class="w-16 h-16 rounded-2xl border-2 border-white shadow-lg">

                    <div>

                        <h3 class="font-bold text-lg">
                            {{ session('user.name') }}
                        </h3>

                        <p class="text-sm text-blue-100 break-all">
                            {{ session('user.email') }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 mt-10 p-6 sm:p-8">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">

                <h2 class="text-2xl font-bold text-gray-800">
                    Recent Activity
                </h2>

                <span class="text-sm text-gray-400">
                    Today
                </span>

            </div>

            <div class="space-y-5">

                <!-- Activity -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b pb-4 gap-3">

                    <div>

                        <h3 class="font-semibold text-gray-800">
                            Google Login Successful
                        </h3>

                        <p class="text-gray-500 text-sm">
                            Secure OAuth authentication completed.
                        </p>

                    </div>

                    <span class="text-green-600 font-medium text-sm">
                        Success
                    </span>

                </div>

                <!-- Activity -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b pb-4 gap-3">

                    <div>

                        <h3 class="font-semibold text-gray-800">
                            Session Created
                        </h3>

                        <p class="text-gray-500 text-sm">
                            User session securely initialized.
                        </p>

                    </div>

                    <span class="text-blue-600 font-medium text-sm">
                        Active
                    </span>

                </div>

                <!-- Activity -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">

                    <div>

                        <h3 class="font-semibold text-gray-800">
                            Banking Security Enabled
                        </h3>

                        <p class="text-gray-500 text-sm">
                            Multi-layer authentication active.
                        </p>

                    </div>

                    <span class="text-indigo-600 font-medium text-sm">
                        Protected
                    </span>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
