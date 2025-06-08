<x-app-layout>
<slot name="header">
<h2 class="font-semibold text-xl text-gray-900 dark:text-gray-200 leading-tight">
    {{ __('Crear vino') }}
</h2>

  </slot>

  @include('product.form')
    

</x-app-layout>