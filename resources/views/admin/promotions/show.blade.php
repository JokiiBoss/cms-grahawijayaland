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
                        <div class="w-3/4 md:w-1/2 p-2 md:p-6 mx-auto rounded-b-xl bg-gradient-to-r from-main to-[#001629]">
                            <h1 class="text-lg font-bold text-center text-white md:text-6xl font-montserrat">EVENT & PROMO</h1>
                        </div>
                                    <div class="flex justify-center gap-8 p-8 md:gap-12 md:p-12">
                                <img src="{{ asset('storage/'.$promotion->image) }}" alt="event-poster" class="h-60 md:h-96">
                                <div class="w-[30%] flex flex-col items-center my-auto">
                                    <h1 class="text-sm font-bold md:text-4xl font-montserrat">{{ $promotion-> title }}</h1>
                                    
                                </div>
                            </div>
                            <a href="{{ route('admin.promotions.edit', $promotion->id) }}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Edit Event and Promo
                            </a>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
