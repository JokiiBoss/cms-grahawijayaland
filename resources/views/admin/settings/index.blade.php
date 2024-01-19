<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Setting Landing Page') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-white">
                    <div class="py-8 px-12 mx-auto max-w-full lg:py-16">
                        <form action="{{ $settings ? route('admin.settings.update', $settings->id) : route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($settings)
                                @method('PUT')
                            @endif
                        
                            @if(session('success'))
                                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                        
                            @if(session('error'))
                                <div class="bg-green-100 border-l-4 font-semibold border-red-500 text-red-700 p-4 mb-4" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                        
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="no_whatsapp" class="block mb-2 text-sm font-medium text-gray-900">Whatsapp Number</label>
                                    <input type="text" name="no_whatsapp" id="no_whatsapp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ old('no_whatsapp', $settings ? $settings->no_whatsapp : '') }}" required>
                                    @error('no_whatsapp')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                    <textarea id="description" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500">{{ old('description', $settings ? $settings->description : '') }}</textarea>
                                    @error('description')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full">
                                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Thumbnail Landing Page</label>
                                    <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full">
                                    @error('image')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                @if($settings && $settings->image)
                                    <div class="w-full">
                                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Preview Image</label>
                                        <img src="{{ asset('storage/' . $settings->image)}}" alt="Jumbotron Image" class="mt-2 mb-4 w-full rounded-lg">
                                    </div>
                                @endif
                                <div class="w-full">
                                    <label for="status_settings" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                                    <div class="flex items-center">
                                        <input type="hidden" name="status_settings" value="0">
                                        <input type="checkbox" name="status_settings" id="status_settings" class="mr-2" {{ $settings->status_settings ? 'checked' : '' }} value="1">
                                        <span>Show Cooming Soon at Landing Page?</span>
                                    </div>
                                </div>                                
                            </div>
                            
                            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                {{ $settings ? 'Update Setting' : 'Create Setting' }}
                            </button>
                        </form>
                        
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
