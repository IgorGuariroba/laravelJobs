<x-layout>
    <x-slot:heading>
        Lista de Trabalhos
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)

            <a href="jobs/{{$job['id']}}" class="houver:underline block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{$job->employer->name}}</div>
                <div>
                    <strong>{{$job['title']}}</strong>: Ganha {{$job['salary']}} por ano
                </div>
            </a>

        @endforeach

        <div>
            {{$jobs->links()}}
        </div>
    </div>

</x-layout>
