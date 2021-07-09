<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Free Ads') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bonjour {{Auth::user()->name }}
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                <h1><a href ="{{ url('annonces') }}"><strong> Voir les annonces </strong></a></h1>
                </div>
                <div class="p-6 bg-red border-b border-gray-200">
                    <h1><a href ="{{ url('users/edit/'.Auth::user()->id) }}"><strong>Modifier Mon Profil</strong></a></h1>
                    </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1><a href ="{{ url('users') }}"><strong> Voir les utilisateurs</strong></a></h1>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
