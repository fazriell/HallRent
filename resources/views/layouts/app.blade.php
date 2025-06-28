<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>HallRent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md p-4">
            <h1 class="text-xl font-bold text-purple-800 mb-8">HallRent!</h1>
            <nav class="space-y-4">
                <a href="{{ route('beranda') }}" class="block text-gray-700 hover:text-purple-600">Beranda</a>
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="mt-4">
                        @csrf
                        <button type="submit" class="w-full text-left text-red-600 hover:text-red-800 px-2 py-1 rounded">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block text-purple-700 hover:underline mt-4">Login</a>
                @endauth
            </nav>
        </aside>

        <!-- Main -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
