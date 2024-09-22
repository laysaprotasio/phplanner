@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="/css/index.css">
@endpush

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-normal mb-6">Cadastrar Nova Categoria</h1>

        <form id="Form" action="{{ route('category.store') }}" method="POST">
            @csrf   
            <div class="mb-6">
                <div class="mb-4">
                    <label for="name" class="text-sm mb-1 block">Nome da Categoria</label>
                    <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md @error('name') border-red-500 @enderror" required>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="color" class="text-sm mb-1 block">Cor</label>
                    <select 
                        name="color" 
                        id="color" 
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-md w-full @error('color') border-red-500 @enderror" 
                        required
                    >
                    <option value="" disabled selected>Selecione a Cor</option>
                    <option value="#CC0000" style="color:#CC0000;">Vermelho</option>
                    <option value="#CC6600" style="color:#CC6600;">Laranja</option>
                    <option value="#CCCC00" style="color:#CCCC00;">Amarelo</option>
                    <option value="#66CC00" style="color:#66CC00;">Lima</option>
                    <option value="#00CC00" style="color:#00CC00;">Verde</option>
                    <option value="#00CC66" style="color:#00CC66;">Menta</option>
                    <option value="#00CCCC" style="color:#00CCCC;">Ciano</option>
                    <option value="#0066CC" style="color:#0066CC;">Azul 1</option>
                    <option value="#0000CC" style="color:#0000CC;">Azul</option>
                    <option value="#6600CC" style="color:#6600CC;">Roxo</option>
                    <option value="#CC00CC" style="color:#CC00CC;">Magenta</option>
                    <option value="#CC0066" style="color:#CC0066;">Rosa</option>
                    </select>
                    @error('color')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('category.index') }}" class="cancel-button">Cancelar</a>
                <button type="submit" class="add-button">Cadastrar</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('color').addEventListener('change', function() {
            var selectedColor = this.value;
            this.style.color = selectedColor;
        });
    </script>
@endsection
