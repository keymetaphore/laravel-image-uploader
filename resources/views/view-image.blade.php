<x-app-layout>
    <style>
        .image {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
        .tooltip {
            position: relative;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 240px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 45%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        .greenbg {
            background-color: green !important;
            transition: background-color 2s;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Attēls') }}
        </h2>
    </x-slot>
    <div class="container mx-auto max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="grid grid-cols-4 gap-3">
            <div class="mt-10 text-gray-100 bg-gray-700 col-span-3">
                <div class="grid grid-cols-2">
                    <div>
                        <p class="text-gray-400 ml-10">0 {{ __('messages.views') }} • 12d</p>
                    </div>
                    <div>
                        <p class="text-gray-400 text-right mr-10">{{ __('messages.uploaded') }} kevins</p>
                    </div>
                </div>

                <div class="image bg-black">
                    <img src="{{ $imageLink }}" alt=":(">
                </div>
            </div>
            <div class="mt-10 text-gray-100 bg-gray-700 p-3" height="300px;">
                <label>{{ __('messages.direct_url') }}:</label>
                <div class="tooltip">
                    <input type="text" id="directlink" readonly class="text-xs w-full bg-gray-800 text-blue-100 te" value="{{ $imageLink }}" onclick="copyToClipboard(this)">
                    <p class="tooltiptext" id="text_toolt">{{ __('messages.click_to_copy') }}</p>
                </div>

                <div class="mt-10"></div>
                <label>{{ __('messages.bb_code') }}:</label>
                <div class="tooltip">
                    <input type="text" id="directlink" readonly class="text-xs w-full bg-gray-800 text-blue-100 te" value="[img]{{ $imageLink }}[/img]" onclick="copyToClipboard(this)">
                    <p class="tooltiptext" id="text_toolt">{{ __('messages.click_to_copy') }}</p>
                </div>
                <div class="mt-10"></div>
                <label>{{ __('messages.reddit_code') }}:</label>
                <div class="tooltip">
                    <input type="text" id="directlink" readonly class="text-xs w-full bg-gray-800 text-blue-100 te" value="[image]({{ $imageLink }})" onclick="copyToClipboard(this)">
                    <p class="tooltiptext" id="text_toolt">{{ __('messages.click_to_copy') }}</p>
                </div>
            </div>
        </div>
    </div>

    <script type="application/javascript">
        function copyToClipboard (copyText) {
            copyText.select();
            copyText.setSelectionRange(0, 99999); /*For mobile devices*/

            /* Copy the text inside the text field */
            document.execCommand("copy");
            var tooltip = document.getElementById("text_toolt");
            tooltip.innerHTML = "{{ __('messages.copied') }}";
            $("#text_toolt").addClass('greenbg');
            setTimeout(function() {
                $("#text_toolt").removeClass('greenbg')
                $("#text_toolt").html("Klikšķini, lai kopētu")
            }, 2000, 1)
        }
    </script>
</x-app-layout>
