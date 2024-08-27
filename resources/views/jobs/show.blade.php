<x-layout>
    <x-slot:heading>
        Trabalho
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>Este trabalho paga {{$job->salary}} por ano.</p>

    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">
            Editar o cargo
        </x-button>
    </p>

</x-layout>
