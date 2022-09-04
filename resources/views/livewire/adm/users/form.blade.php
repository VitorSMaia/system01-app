<div>
    <div class="flex justify-center items-center m-20">
        <div class="jv-card">
            <form class="grid grid-cols-12 gap-5" wire:submit.prevent="save">
                <h1 class="jv-title">Usuário</h1>
                <p class="jv-subtitle">Cadastrar novo usuário.</p>

                <div class="col-span-12 md:col-span-3">
                    <x-inputs.input wire:model="state.first_name" placeholder="Nome" />
                    @error('state.first_name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-12 md:col-span-3">
                    <x-inputs.input wire:model.defer="state.last_name" placeholder="Sobrenome" />
                    @error('state.last_name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-12 md:col-span-3">
                    <x-inputs.input wire:model.defer="state.cpf" icon="123" placeholder="CPF"/>
                    @error('state.cpf') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-12 md:col-span-3">
                    <x-inputs.select wire:model.defer="state.position_id" icon="style" placeholder="Cargo">
                            <option value=""></option>
                        @foreach($response->positions as $itemPosition)
                            <option value="{{ $itemPosition['id'] }}">{{ $itemPosition['name'] }}</option>
                        @endforeach
                    </x-inputs.select>
                    @error('state.position_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-12 md:col-span-3">
                    <x-inputs.input wire:model.defer="state.email" icon="person" placeholder="E-mail" />
                    @error('state.email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-span-12 md:col-span-3">
                    <x-inputs.input wire:model.defer="state.password" icon="key" placeholder="Senha"/>
                    @error('state.password') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="col-span-12">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
