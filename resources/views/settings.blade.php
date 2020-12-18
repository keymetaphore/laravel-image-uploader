<x-app-layout>
    <style>

    </style>
    <header class="bg-gray-600 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                {{ __('options.header') }}
            </h2>
        </div>
    </header>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-gray-600 text-white">
            <div class="py-6">
                <div>
                    <label for="price" class="block text-sm font-medium text-white">{{ __('options.api_key') }}</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="password" value="{{ $api_key }}" id="key_masked" readonly class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm text-black border-gray-300 rounded-md" placeholder="No API key (?)">
                        <input type="text" value="{{ $api_key}}" style="display: none;" id="key" readonly class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm text-black border-gray-300 rounded-md" placeholder="No API key (?)">
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <button class="block uppercase mx-auto shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded" onclick="toggleKeyVisibility()">{{ __('options.api_key_toggle') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="py-6 font-bold">{{ __('options.sharex_instructions') }}</p>
            <img src="https://i.imgur.com/haAKMQB.png" alt="Install instructions">
            <p class="py-3">{{ __('options.sharex_install') }}</p>

        </div>
    </div>

    <script type="application/javascript">
        keyVisible = false
        function toggleKeyVisibility () {
            if (!keyVisible) {
                $("#key").css('display', 'block')
                $("#key_masked").css('display', 'none')
                keyVisible = true
            } else {
                $("#key").css('display', 'none')
                $("#key_masked").css('display', 'block')
                keyVisible = false
            }
        }
    </script>
</x-app-layout>
