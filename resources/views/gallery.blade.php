<x-app-layout>
    <style>
        .gallery {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-width: 33%;
            -moz-column-width: 33%;
            column-width: 33%; }
        .gallery .pics {
            -webkit-transition: all 350ms ease;
            transition: all 350ms ease; }
        .gallery .animation {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1); }

        @media (max-width: 450px) {
            .gallery {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
                -webkit-column-width: 100%;
                -moz-column-width: 100%;
                column-width: 100%;
            }
        }

        @media (max-width: 400px) {
            .btn.filter {
                padding-left: 1.1rem;
                padding-right: 1.1rem;
            }
        }

        img:not([src]) {
            visibility: hidden;
        }

        /* Fixes Firefox anomaly during image load */
        @-moz-document url-prefix() {
            img:-moz-loading {
                visibility: hidden;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>

    <header class="bg-gray-600 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                {{ __('messages.your_photos') }}
            </h2>
        </div>
    </header>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>
    <div class="py-12">
        <div class="container mx-auto max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="gallery" id="gallery">
                @foreach ($images as $image)
                    <div class="mb-3 pics animation all 2">
                        <a href="{{ $image->path }}">
                            <img alt=":(" class="object-fit w-full" src="{{ $image->path }}" data-src="lazy.jpg">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script type="application/javascript">
            function logElementEvent(eventName, element) {
                console.log(Date.now(), eventName, element.getAttribute("data-src"));
            }
            var callback_error = function (element) {
                element.src = "https://via.placeholder.com/440x560/?text=Error+Placeholder";
            };

            var ll = new LazyLoad({
                class_applied: "lz-applied",
                class_loading: "lz-loading",
                class_loaded: "lz-loaded",
                class_error: "lz-error",
                class_entered: "lz-entered",
                class_exited: "lz-exited",
                // Assign the callbacks defined above
                callback_enter: callback_enter,
                callback_exit: callback_exit,
                callback_cancel: callback_cancel,
                callback_loading: callback_loading,
                callback_loaded: callback_loaded,
                callback_error: callback_error,
                callback_finish: callback_finish
            });
    </script>
</x-app-layout>
