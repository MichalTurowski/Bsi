<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                {{-- This is the new code block to be added to the file --}}
                @if(Session::has('message'))
                    <div class="bg-green-100 border-t-4 border-green-500 px-4 py-3">
                        <p class="text-sm">{{ Session::get('message') }}</p>
                    </div>
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/users/">
                        @method('PATCH')
                        <div class="mt-4 max-w-xs">
                            <x-input value="{{ auth()->user()->name }}" id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Your name here" required />
                        </div>
                        <button type="submit" class="custom-button">{{ __('Update Name') }}</button>
                    </form>
                </div>
                {{-- End of the new code block --}}
            </div>
        </div>
    </div>
</x-app-layout>