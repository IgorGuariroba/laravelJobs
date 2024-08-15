<x-layout>
    <x-slot:heading>
        Lista de Trabalhos
    </x-slot:heading>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="jobs/{{$job['id']}}" class="text-blue-500 houver:underline">
                    <strong>{{$job['title']}}</strong>: Ganha {{$job['salary']}} por ano
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
