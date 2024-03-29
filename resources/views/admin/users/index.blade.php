<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lists Users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border-l-4 font-semibold border-green-500 text-green-700 p-4 mb-4" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-white p-3 sm:p-5">
                    <div class="mx-auto max-w-screen-xl">
                        <div class="bg-white relative sm:rounded-lg overflow-hidden">
                            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="w-full md:w-1/2">
                                </div>
                                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                    <a href="{{ route('admin.users.create')}}" class="flex items-center justify-center text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none dark:focus:ring-green-800">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Add Users
                                    </a>
                                </div>
                            </div>
                            <div class="overflow-x-auto pb-20">
                                <table class="w-full text-sm text-left text-gray-500">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-4 py-3">No</th>
                                            <th scope="col" class="px-4 py-3">Name</th>
                                            <th scope="col" class="px-4 py-3">Email</th>
                                            <th scope="col" class="px-4 py-3">Created at</th>
                                            <th scope="col" class="px-4 py-3">
                                                <span class="sr-only">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="pb-24">
                                        @php $rowNumber = 1; @endphp
                                        @foreach ($users as $user)                                        
                                        <tr class="border-b">
                                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">{{ $rowNumber }}</th>
                                            <td class="px-4 py-3">{{ $user -> name }}</td>
                                            <td class="px-4 py-3">{{ $user -> email }}</td>
                                            <td class="px-4 py-3">{{ $user -> created_at }}</td>
                                            <td class="px-4 py-3 flex items-center justify-end">
                                                <button id="dropdown-button-{{ $user->id }}" data-dropdown-toggle="dropdown-{{ $user->id }}" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none" type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="dropdown-{{ $user->id }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                                                    <div class="py-1">
                                                        <form id="delete-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('admin.users.destroy', $user->id) }}" class="block py-2 px-4 text-sm font-bold text-red-700 hover:bg-red-200" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                                                Delete
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @php $rowNumber++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
