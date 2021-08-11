<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashoard') }}
            <a href="{{asset('/')}}" class="shop">shop</a>
        </h2>
    </x-slot>

    <div class="container">
        <ul class="list_dashboard">
            <li> <a href="{{route('product.create')}}">Add Product</a> </li>
            @auth
                @if (Auth::user()->product->count() > 0)
                    <li> <a href="{{route('product.index')}}">My Product </a> </li>
                @endif

            @endauth
        </ul>
    </div>
</x-app-layout>
