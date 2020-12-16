<x-app-layout>
    <style>

    </style>
    <header class="bg-gray-600 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                {{ __('Trešo partiju integrācija') }}
            </h2>
        </div>
    </header>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attēls') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-gray-600 text-white">
            <div class="py-6">
                <div>
                    <label for="price" class="block text-sm font-medium text-white">Tava API atslēga</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="password" id="key" readonly class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm text-black border-gray-300 rounded-md" placeholder="0.00">
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <button class="block uppercase mx-auto shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Parādīt API atslēgu</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="application/javascript">
        function toggleKeyVisibility () {
            $("#key")
        }
    </script>
</x-app-layout>
