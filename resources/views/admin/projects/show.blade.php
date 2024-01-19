<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Detail Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-white">
                    <div class="py-8 px-12 mx-auto max-w-full lg:py-16">
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Project Name</label>
                                    <h1 class="font-bold text-4xl">{{ $project->title }}</h1>
                                </div>
                                <div class="sm:col-span-2">
                                    <img class="rounded-lg" src="{{ asset('storage/'. $project->image )}}" alt="Banner Project" srcset="">
                                </div>
                                <div class="sm:col-span-2">
                                    <p>
                                        {{ $project->description }}
                                    </p>
                                </div>
                                <div class="w-full">
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                                    <input type="text" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"  value="Rp. {{ $project->price }}" required="">
                                </div>
                                <div>
                                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                                    <input type="text" name="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ $project->location }}" required="">
                                </div> 
                                <div class="w-full">
                                    <label for="logo" class="block mb-2 text-sm font-medium text-gray-900">Logo</label>
                                    <img class=" mx-auto" src="{{ asset('storage/' . $project->logo )}}" width="300" alt="Logo Project">
                                </div>
                                <div class="w-full">
                                    <label for="logo" class="block mb-2 text-sm font-medium text-gray-900">QR Project</label>
                                    <img class=" mx-auto" src="{{ asset('storage/' . $project->qr_code )}}" width="300" alt="QR Code Project">
                                </div>
                            </div>
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Edit project
                            </a>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
