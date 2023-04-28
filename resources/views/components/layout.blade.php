<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- GOOGLE FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/107ab030c1.js" crossorigin="anonymous" defer></script>

    {{-- ANIMATE CSS --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> --}}


    {{-- ALPINE --}}
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

    {{-- TAILWIND --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        aven: "#ef3b2d",
                        accent: "#6F4A9E"
                    },
                },
                container: {
                    center: true,
                },
            },
        };
    </script>

    <style>
        * {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
    <link rel="shortcut icon" href="images/aven.png" type="image/x-icon">
    <title>Aven</title>
</head>

<body>

    {{-- HEADER --}}
    <x-nav />

    <main>
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <x-footer />

</body>
</html>
