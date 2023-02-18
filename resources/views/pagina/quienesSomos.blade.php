@extends('layouts/plantilla')

@section('title', 'Home')

@section('content')
<div class="flex flex-col h-screen">
        <nav class="bg-gray-800">
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                        </div>
                        <div class="md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{route('home')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
                                <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                                <a href="{{route('quienesSomos')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Quienes Somos</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="text-white" type="submit">LogOut</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div>    
            <h1>Quienes somos</h1>
            <h2>
                @if (auth()->check())
                    <p>{{auth()->user()->name}}</p>
                    <p>{{auth()->user()->email}}</p>
                @else
                    <p>No hay usuario logeado</p>
                @endif
            </h2>
        </div>

</div>



@endsection