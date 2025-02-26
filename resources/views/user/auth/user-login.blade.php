<x-layout.user-default>
    <div class="min-h-screen mt-16 py-8 px-4 sm:px-6 lg:px-8">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-20 w-auto" src="{{ asset('assets/images/logo_rsi.png') }}" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Masuk ke akun anda</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{ route('login.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" autocomplete="email" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 transform transition duration-300 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-green-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-green-600 hover:text-green-500">Lupa
                                    password?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 transform transition duration-300 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-green-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs transform transition duration-300 hover:scale-105 hover:bg-green-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Log
                            in</button>
                    </div>
                </form>

                <p class="mt-10 text-center text-sm/6 text-gray-500">
                    Belum mempunyai akun?
                    <a href="/register" class="font-semibold text-green-600 hover:text-green-500">Daftar
                        di
                        sini!</a>
                </p>
            </div>
        </div>
    </div>
</x-layout.user-default>
