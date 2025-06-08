<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Recargar Saldo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold">Añadir Saldo</h3>

                    @if(session('error'))
                        <div class="text-red-500">{{ session('error') }}</div>
                    @endif

                    @if(session('success'))
                        <div class="text-green-500">{{ session('success') }}</div>
                    @endif

                    <!-- ✅ Mostrar saldo correctamente en COP -->
                    <p>Saldo disponible: ${{ number_format(auth()->user()->balance, 0, ',', '.') }}</p>

                    <form action="{{ route('balance.add') }}" method="POST">
                        @csrf
                        <label class="block">
                            <span class="text-gray-700 dark:text-gray-300">Monto a añadir:</span>
                            <input type="number" name="amount" min="1000" step="100" 
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </label>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                            Recargar Saldo
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
