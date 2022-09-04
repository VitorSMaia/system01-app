<div>
    <div class="flex justify-center items-center m-20">
        <div class="jv-card">
            <form class="grid grid-cols-12 gap-5" wire:submit.prevent="save">
                <h1 class="jv-title">Cargos</h1>
                <p class="jv-subtitle">Cadastrar novo cargo.</p>
{{--@dd($this->state)--}}
                <div class="col-span-12 md:col-span-3">
                    <x-inputs.input wire:model.defer="state.name" placeholder="Nome" />
                    @error('state.name') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-12 md:col-span-3">
                    <x-inputs.select wire:model.defer="state.status" icon="style" placeholder="Status">
                        <option value=""></option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </x-inputs.select>
                    @error('state.status') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="col-span-12">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
