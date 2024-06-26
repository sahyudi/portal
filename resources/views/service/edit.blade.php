p<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Service') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form method="POST" action="{{ route('update-service') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" id="id" value="{{ $service->id }}">
                    <div>
                        <x-input-label for="judul" :value="__('Judul')" />
                        <input id="judul" name="judul" type="text" class="mt-1 block w-full"
                            value="{{ old('judul', $service->judul) }}" required autofocus autocomplete="judul" />
                        <x-input-error class="mt-2" :messages="$errors->get('judul')" />
                    </div>

                    <div>
                        <x-input-label for="deskripsi" :value="__('Deksripsi')" />
                        <textarea class="mt-1 block w-full" id="deskripsi" name="deskripsi" rows="10">{{ old('deskripsi', $service->deskripsi) }}</textarea>

                    </div>
                    <div>
                        <x-input-label for="syarat" :value="__('Syarat')" />
                        <textarea class="mt-1 block w-full" id="syarat" name="syarat" rows="10">{{ old('syarat', $service->syarat) }}</textarea>

                    </div>

                    <div class="flex items-center gap-4">
                        <a href="{{ url('/service') }}"
                            class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Kembali</a>

                        <x-primary-button>{{ __('Save') }}</x-primary-button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
    CKEDITOR.replace('syarat');
</script>
