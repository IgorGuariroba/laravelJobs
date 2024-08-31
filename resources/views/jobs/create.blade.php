<x-layout>
    <x-slot:heading>
        Criar um Profissão
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Criação de um novo cargo</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Precisamos de algumas informações sobre o cargo</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Titulo</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="CEO" required/>
                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salário</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="R$7.000 por mês" required/>
                            <x-form-error name="salary"/>
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Salvar</x-form-button>
        </div>
    </form>

</x-layout>
