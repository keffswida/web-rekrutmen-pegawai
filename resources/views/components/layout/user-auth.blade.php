<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Recruitment - RSI Jemursari</title>

    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link rel="icon" type="image/svg" href="/assets/images/logo_rsi.png" />

    <script src="/assets/js/perfect-scrollbar.min.js"></script>
    <script defer src="/assets/js/popper.min.js"></script>
    <script defer src="/assets/js/tippy-bundle.umd.min.js"></script>
    <script defer src="/assets/js/sweetalert.min.js"></script>
    @vite(['resources/css/app.css'])

    <style>
        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 1s;
        }

        .loader-wrapper.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .islamic-loader {
            width: 100px;
            height: 100px;
            position: relative;
            animation: rotate 2s linear infinite;
        }

        .islamic-loader svg {
            width: 100%;
            height: 100%;
        }

        .islamic-loader .outer {
            fill: none;
            stroke: #4CAF50;
            stroke-width: 4;
            stroke-dasharray: 280;
            stroke-dashoffset: 280;
            animation: dash 3s ease-in-out infinite;
        }

        .islamic-loader .inner {
            fill: none;
            stroke: #FFD700;
            stroke-width: 4;
            stroke-dasharray: 200;
            stroke-dashoffset: 200;
            animation: dash 2s ease-in-out infinite 0.3s;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: 280;
            }

            50% {
                stroke-dashoffset: 0;
            }

            100% {
                stroke-dashoffset: -280;
            }
        }
    </style>

</head>

<body class="h-full font-light font-inter">

    <!-- Loader -->
    <div x-data="{ loading: true }" x-init="setTimeout(() => loading = false, 500)" x-show="loading" class="loader-wrapper"
        x-transition:leave="transition ease-in duration-700" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <div class="islamic-loader">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <path class="outer" d="M50 10 L90 50 L50 90 L10 50 Z" />
                <path class="inner" d="M50 30 L70 50 L50 70 L30 50 Z" />
            </svg>
        </div>
    </div>

    {{ $slot }}

    <script src="/assets/js/alpine-collaspe.min.js"></script>
    <script src="/assets/js/alpine-persist.min.js"></script>
    <script defer src="/assets/js/alpine-ui.min.js"></script>
    <script defer src="/assets/js/alpine-focus.min.js"></script>
    <script defer src="/assets/js/alpine.min.js"></script>
    <script src="/assets/js/custom.js"></script>
</body>

</html>
