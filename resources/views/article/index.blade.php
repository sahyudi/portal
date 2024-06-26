<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <a href="{{ route('add-article') }}"
                    class="inline-block mb-4 rounded-md px-4 py-2 bg-blue-500 text-white font-semibold transition hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Create
                    Article</a>
                <table class="min-w-full bg-white border border-gray-300" style="width: 100%">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">No</th>
                            <th class="py-3 px-6 text-center">Judul</th>
                            <th class="py-3 px-6 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light w-10">
                        @foreach ($articles as $key => $article)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $key + 1 }}</td>
                                <td class="py-3 px-6 text-left">{{ $article->title }}</td>
                                <td class="py-3 px-6 text-right">
                                    <a href="{{ route('edit-article', $article->id) }}"
                                        class="inline-block mr-2 rounded-md px-4 py-2 bg-yellow-500 text-white font-semibold transition hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-75">Edit</a>
                                    <form action="{{ route('delete-article', $article->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-block rounded-md px-4 py-2 bg-red-500 text-white font-semibold transition hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
