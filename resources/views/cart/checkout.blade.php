<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Proceso de Pago') }}
        </h2>
    </x-slot>

    @inject('cart', 'App\Services\Cart')
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="text-lg font-bold">Saldo disponible: ${{ number_format(auth()->user()->balance, 0, ',', '.') }}</p> 
                    <p class="text-lg font-bold">Total a pagar: ${{ number_format($cart->getTotalCost(false), 0, ',', '.') }}</p> 

                    <h3 class="text-lg font-semibold">Resumen del Carrito</h3>
                    <ul>
                        @foreach ($cart->getCart() as $item)
                            <li>{{ data_get($item, 'product.name') }} - ${{ number_format($cart->getTotalCostForProduct(data_get($item, 'product'), false), 0, ',', '.') }}</li>
                        @endforeach
                    </ul>

                    <h3 class="text-lg font-semibold mt-6">Seleccionar método de pago:</h3>
                    <form action="{{ route('cart.processPayment') }}" method="POST">
                        @csrf

                        <!-- Selección de método de pago -->
                        <select id="payment_method" name="payment_method" class="border rounded px-4 py-2 w-full bg-white text-gray-900 dark:bg-gray-700 dark:text-white" onchange="togglePaymentOptions()">
                            <option value="">-- Seleccionar método --</option>
                            <option value="credit_card">Tarjeta de crédito</option>
                            <option value="cash">Pago en efectivo</option>
                            <option value="transfer">Transferencia bancaria</option>
                        </select>

                        <!-- Opciones de Tarjeta de Crédito -->
                        <div id="credit_card_options" class="hidden mt-4">
                            <label class="block text-gray-700 dark:text-gray-100">Selecciona tu tarjeta:</label>
                            <select name="credit_card_type" class="border rounded px-4 py-2 w-full bg-white text-gray-900 dark:bg-gray-700 dark:text-white">
                                <option value="visa">Visa</option>
                                <option value="mastercard">MasterCard</option>
                                <option value="amex">American Express</option>
                                <option value="diners">Diners Club</option>
                            </select>
                        </div>

                        <!-- Opciones de Transferencia Bancaria -->
                        <div id="transfer_options" class="hidden mt-4">
                            <label class="block text-gray-700 dark:text-gray-100">Selecciona tu banco:</label>
                            <select name="bank_transfer_type" class="border rounded px-4 py-2 w-full bg-white text-gray-900 dark:bg-gray-700 dark:text-white">
                                <option value="bancolombia">Bancolombia</option>
                                <option value="davivienda">Davivienda</option>
                                <option value="bbva">BBVA</option>
                                <option value="nequi">Nequi</option>
                            </select>
                        </div>

                        <!-- Pago en efectivo -->
                        <div id="cash_option" class="hidden mt-4">
                            <p class="text-gray-700 dark:text-gray-100">Puedes pagar en efectivo en la tienda física.</p>
                        </div>

                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">
                            Confirmar Pago
                        </button>
                    </form>

                    <!-- JavaScript para mostrar las opciones dinámicamente -->
                    <script>
                        function togglePaymentOptions() {
                            let paymentMethod = document.getElementById("payment_method").value;
                            
                            document.getElementById("credit_card_options").classList.add("hidden");
                            document.getElementById("cash_option").classList.add("hidden");
                            document.getElementById("transfer_options").classList.add("hidden");

                            if (paymentMethod === "credit_card") {
                                document.getElementById("credit_card_options").classList.remove("hidden");
                            } else if (paymentMethod === "cash") {
                                document.getElementById("cash_option").classList.remove("hidden");
                            } else if (paymentMethod === "transfer") {
                                document.getElementById("transfer_options").classList.remove("hidden");
                            }
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
