<div>
    <div class="flex justify-center items-center m-20">
        <div class="jv-card">
            <form class="grid grid-cols-12 gap-5" wire:submit.prevent="save">
                <h1 class="jv-title">Usuário</h1>
                <p class="jv-subtitle">Cadastrar novo usuário.</p>

                <x-inputs.input wire:model="state.first_name" placeholder="Nome" class="col-span-12 md:col-span-3"/>
                @error('state.first_name') <span class="error">{{ $message }}</span> @enderror
                <x-inputs.input wire:model.defer="state.last_name" placeholder="Sobrenome" class="col-span-12 md:col-span-3"/>
                @error('state.last_name') <span class="error">{{ $message }}</span> @enderror
                <x-inputs.input wire:model.defer="state.cpf" icon="123" placeholder="CPF" class="col-span-12 md:col-span-3"/>
                @error('state.cpf') <span class="error">{{ $message }}</span> @enderror
                <x-inputs.select wire:model.defer="state.office" icon="style" placeholder="Cargo" class="col-span-12 md:col-span-3">
                    <option value="Analista">Analista</option>
                    <option value="Desenvolvedor Jr">Desenvolvedor Jr</option>
                    <option value="Desenvolvedor Pl">Desenvolvedor Pl</option>
                    <option value="Desenvolvedor Sr">Desenvolvedor Sr</option>
                </x-inputs.select>
                @error('state.office') <span class="error">{{ $message }}</span> @enderror
                <x-inputs.input wire:model.defer="state.email" icon="person" placeholder="E-mail" class="col-span-12 md:col-span-3"/>
                @error('state.email') <span class="error">{{ $message }}</span> @enderror
                <x-inputs.input wire:model.defer="state.password" icon="key" placeholder="Senha" class="col-span-12 md:col-span-3"/>
                @error('state.password') <span class="error">{{ $message }}</span> @enderror

                <button class="col-span-12">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
