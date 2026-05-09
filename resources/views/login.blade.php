<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Banking Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-slate-100 via-blue-50 to-indigo-100 flex items-center justify-center px-4 overflow-hidden">

    <!-- Top Background -->
    <div class="absolute top-0 left-0 w-full h-80 bg-gradient-to-r from-indigo-900 to-blue-800 rounded-b-[70px]"></div>

    <!-- Login Card -->
    <div class="relative w-full max-w-md">

        <div class="bg-white rounded-[32px] shadow-2xl overflow-hidden border border-gray-100">

            <!-- Header -->
            <div class="px-8 pt-10 pb-8 text-center bg-gradient-to-r from-indigo-900 to-blue-800 text-white">

                <div class="w-20 h-20 mx-auto rounded-3xl bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20 shadow-lg">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-10 h-10"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 8c-3.314 0-6 2.686-6 6v4h12v-4c0-3.314-2.686-6-6-6zm0-6a3 3 0 100 6 3 3 0 000-6z" />
                    </svg>

                </div>

                <h1 class="text-4xl font-bold mt-5 tracking-wide">
                    Secure Banking
                </h1>

                <p class="text-blue-100 text-sm mt-3 leading-relaxed">
                    Access your account securely with Google authentication.
                </p>

            </div>

            <!-- Content -->
            <div class="px-8 py-8">

                <!-- Error -->
                @if(session('error'))
                    <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-2xl text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Security Box -->
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-5 mb-8">

                    <div class="flex items-center justify-between mb-4">

                        <div>
                            <p class="text-xs text-gray-500 uppercase tracking-wider">
                                Protected By
                            </p>

                            <h3 class="font-semibold text-gray-800 text-xl">
                                Multi-Layer Security
                            </h3>
                        </div>

                        <div class="w-12 h-12 rounded-2xl bg-green-100 flex items-center justify-center">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="w-6 h-6 text-green-600"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 11c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1zm-1 7c-4.418 0-8-1.79-8-4V7l8-4 8 4v7c0 2.21-3.582 4-8 4z" />
                            </svg>

                        </div>

                    </div>

                    <div class="space-y-3 text-sm text-gray-600">

                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                            End-to-End Encryption
                        </div>

                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                            OAuth 2.0 Authentication
                        </div>

                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                            Secure Session Management
                        </div>

                    </div>

                </div>

                <!-- Google Login Button -->
                <a href="{{ url('/auth/google') }}"
                   class="w-full flex items-center justify-center gap-4 bg-white border border-gray-300 hover:border-indigo-600 hover:bg-indigo-50 text-gray-700 hover:text-indigo-700 font-semibold py-4 rounded-2xl transition-all duration-300 shadow-sm hover:shadow-xl">

                    <svg class="w-6 h-6" viewBox="0 0 48 48">

                        <path fill="#FFC107"
                              d="M43.611 20.083H42V20H24v8h11.303C33.651 32.657 29.215 36 24 36c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 12.955 4 4 12.955 4 24s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/>

                        <path fill="#FF3D00"
                              d="M6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4 16.318 4 9.656 8.337 6.306 14.691z"/>

                        <path fill="#4CAF50"
                              d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238C29.211 35.091 26.715 36 24 36c-5.193 0-9.618-3.317-11.083-7.946l-6.522 5.025C9.71 39.556 16.318 44 24 44z"/>

                        <path fill="#1976D2"
                              d="M43.611 20.083H42V20H24v8h11.303c-1.06 3.292-3.552 5.756-6.084 7.57l.003-.002 6.19 5.238C33.971 39.87 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/>

                    </svg>

                    Continue with Google

                </a>

                <!-- Footer -->
                <p class="text-center text-xs text-gray-400 mt-6 leading-relaxed">
                    By continuing, you agree to our Terms & Conditions and Privacy Policy.
                </p>

            </div>

        </div>

    </div>

</body>
</html>