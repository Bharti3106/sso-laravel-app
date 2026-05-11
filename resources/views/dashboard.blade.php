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
    <nav class="bg-gradient-to-r from-indigo-900 to-blue-800 px-8 py-5 shadow-xl">

        <div class="max-w-7xl mx-auto flex items-center justify-between">

            <!-- Logo -->
            <div>
                <h1 class="text-2xl font-bold text-white tracking-wide">
                    Secure Banking
                </h1>

                <p class="text-blue-100 text-sm">
                    Customer Dashboard
                </p>
            </div>

            <!-- User Info -->
            <div class="flex items-center gap-4">

                <img src="{{ session('user.avatar') }}"
                     class="w-12 h-12 rounded-full border-2 border-white shadow-lg">

                <div class="text-right">

                    <h3 class="text-white font-semibold">
                        {{ session('user.name') }}
                    </h3>

                    <p class="text-blue-100 text-sm">
                        {{ session('user.email') }}
                    </p>

                </div>

                <!-- Logout -->
                <a href="{{ url('/logout') }}"
                   class="bg-white text-indigo-700 px-4 py-2 rounded-xl font-semibold hover:bg-indigo-50 transition duration-300 shadow-md">

                    Logout

                </a>

            </div>

        </div>

    </nav>

    <!-- Main -->
    <div class="max-w-7xl mx-auto px-6 py-10">

        <!-- Welcome -->
        <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100 mb-8">

            <div class="flex items-center justify-between flex-wrap gap-6">

                <div>

                    <h2 class="text-4xl font-bold text-gray-800 mb-3">
                        Welcome, {{ session('user.name') }} 👋
                    </h2>

                    <p class="text-gray-500 text-lg">
                        Your banking dashboard is secured with Google OAuth 2.0 authentication.
                    </p>

                </div>

                <div class="bg-green-100 text-green-700 px-5 py-3 rounded-2xl font-semibold">
                    Account Secured
                </div>

            </div>

        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Balance -->
            <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100">

                <p class="text-gray-500 text-sm uppercase tracking-wider">
                    Available Balance
                </p>

                <h2 class="text-4xl font-bold text-indigo-700 mt-3">
                    ₹2,45,000
                </h2>

                <p class="text-green-600 text-sm mt-3">
                    +2.5% from last month
                </p>

            </div>

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

        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 mt-10 p-8">

            <div class="flex items-center justify-between mb-6">

                <h2 class="text-2xl font-bold text-gray-800">
                    Recent Activity
                </h2>

                <span class="text-sm text-gray-400">
                    Today
                </span>

            </div>

            <div class="space-y-5">

                <div class="flex items-center justify-between border-b pb-4">

                    <div>

                        <h3 class="font-semibold text-gray-800">
                            Google Login Successful
                        </h3>

                        <p class="text-gray-500 text-sm">
                            Secure OAuth authentication completed.
                        </p>

                    </div>

                    <span class="text-green-600 font-medium">
                        Success
                    </span>

                </div>

                <div class="flex items-center justify-between border-b pb-4">

                    <div>

                        <h3 class="font-semibold text-gray-800">
                            Session Created
                        </h3>

                        <p class="text-gray-500 text-sm">
                            User session securely initialized.
                        </p>

                    </div>

                    <span class="text-blue-600 font-medium">
                        Active
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <div>

                        <h3 class="font-semibold text-gray-800">
                            Banking Security Enabled
                        </h3>

                        <p class="text-gray-500 text-sm">
                            Multi-layer authentication active.
                        </p>

                    </div>

                    <span class="text-indigo-600 font-medium">
                        Protected
                    </span>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
