<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.min.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        @font-face {
            font-family: Kollektif;
            font-style: normal;
            font-weight: 400;
            src: url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif.eot);
            src: local("kollektif"),local("kollektif"),url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif.eot?#iefix) format("embedded-opentype"),url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif.woff) format("woff"),url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif.ttf) format("truetype"),url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif.svg#kollektif) format("svg")
        }

        @font-face {
            font-family: Kollektif;
            font-style: normal;
            font-weight: 700;
            src: url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif-bold.eot);
            src: local("kollektif"),local("kollektif"),url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif-bold.eot?#iefix) format("embedded-opentype"),url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif-bold.woff) format("woff"),url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif-bold.ttf) format("truetype"),url(https://sloppy.io/en/wp-content/themes/understrap-child/fonts/kollektif-bold.svg#kollektif) format("svg")
        }

        html, body {
            background: linear-gradient(to bottom,#fcb33c,#fcd952);
            color: white;
            font-family: sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: Kollektif, sans-serif;
        }
        .title {
            font-size: 3em;
            text-shadow: 0 0 .5em #0002;
        }


        .form-container {
            background: white;
            color: #222;
        }
        input[type='checkbox'] {
            color: black;
        }
        input[type='submit'] {
            background: #1b2663;
            color: white;
        }
        input[type='submit'].link {
            background: none;
            color: #1b2663;
            text-decoration:underline;
        }



    </style>
</head>
<body>
<div class="flex-center position-ref full-height w-full p-8">


    <div class="text-center">

        <div class="flex flex-row items-center justify-center mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" class="logo-icon mr-2">
                <g fill="none" fill-rule="evenodd">
                    <circle cx="24" cy="24" r="24" fill="#FFF"></circle>
                    <path fill="black" d="M24.255 11.496c1.58.032 3.597-1.904 7.774.511-3.774-4.03-10.693-4.526-15.322-.48 4.887-2.063 6.097-.063 7.548-.031zm11.564 3.15c6.226 6.879 2.871 16.892-.983 20.124-4.952 4.526-9.033 4.75-12.436 4.383-8.08-.96-11.677-6.335-13.177-11.326-1.742-4.878 1.049-17.115 9.274-14.668.323.096.226.384.194.496-1.549 5.887-8.661 6.27-7.79 12.173 1.241 8.366 8.193 13.468 13.16 12.349 10.323-2.32 12.903-6.575 13.452-12.669.935-7.278-8.597-6.446-8.08-11.693.177-1.92 5.273-.4 6.386.832zm-5.016-.431c-.338 1.232 1.371 1.631 1.694.832.064-.384-1.597-1.088-1.694-.832zm-13.596.192c-.13-.624-1.936.08-1.823.832.113.591 1.952 0 1.823-.832zm-.63 8.206c0-.448 2.646.784 7.017 1.071 1.597.112 10.87-1.295 11.677-1.007 1.274.464-1.92-.912-11.306 2.175l-7.387-2.24zM27.24 16.55c.29.304-1.387.304-1.694.816-.113.576 0 1.04-.435 1.264a4.777 4.777 0 0 1-1.177.208c-.355-.016-.871-.096-1.178-.208-.42-.208-.322-.672-.435-1.264-.307-.512-1.984-.512-1.694-.816.92-.64 2.13-.927 3.307-.927 1.177-.016 2.387.287 3.306.927z"></path>
                </g>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="88" height="19" viewBox="0 0 88 19" class="logo-text" role="img" aria-label="sloppy.io">
                <title>sloppy.io</title>
                <path fill="currentColor" fill-rule="nonzero" d="M82.915 6.925a4.558 4.558 0 0 1 4.55 4.594c0 2.54-2.035 4.593-4.55 4.593-2.514 0-4.548-2.054-4.548-4.593 0-2.54 2.034-4.594 4.548-4.594zm0 7.489c1.586 0 2.867-1.326 2.867-2.912 0-1.6-1.265-2.911-2.867-2.911-1.601 0-2.867 1.31-2.867 2.911 0 1.586 1.282 2.912 2.867 2.912zm-5.766 1.52h-1.73v-6h1.73v6zm.08-8.039c0 .534-.432.987-.96.987-.53 0-.962-.453-.962-.987 0-.517.433-.954.961-.954.529 0 .961.437.961.954zm-5.365-5.03l-5.43 12.228c-.545 1.036-1.666 2.022-3.684 2.993-.24-.518-1.153-2.443-1.25-2.67 3.316-1.503 2.211-3.234 1.186-5.434-.4-.874-3.332-7.117-3.332-7.117h3.22s3.06 6.858 3.155 7.068l2.851-7.068h3.284zm-18.356-.291c3.524 0 6.455 2.943 6.455 6.615 0 3.656-2.931 6.568-6.455 6.568-1.858 0-2.899-.81-3.523-1.456v3.753h-2.932V2.864h2.932v.89c1.009-.792 2.226-1.18 3.523-1.18zm0 10.239c2.002 0 3.604-1.666 3.604-3.688 0-2.006-1.586-3.672-3.604-3.672-1.746 0-3.171 1.245-3.523 2.895v1.553c.352 1.65 1.793 2.912 3.523 2.912zM39.542 2.573c3.523 0 6.454 2.944 6.438 6.616 0 3.656-2.93 6.568-6.455 6.568-1.857 0-2.899-.81-3.523-1.456v3.753H33.07V2.864h2.947v.89c1.009-.792 2.226-1.18 3.524-1.18zm0 10.24c2.002 0 3.603-1.666 3.603-3.688 0-2.006-1.585-3.672-3.603-3.672-1.746 0-3.172 1.245-3.524 2.895v1.553c.352 1.65 1.794 2.912 3.524 2.912zM25.462 2.557c3.636 0 6.584 2.977 6.584 6.649 0 3.671-2.948 6.648-6.583 6.648-3.636 0-6.583-2.977-6.583-6.648 0-3.672 2.947-6.649 6.583-6.649zm0 10.256c1.987 0 3.572-1.683 3.572-3.705 0-2.021-1.57-3.704-3.571-3.704-2.003 0-3.572 1.666-3.572 3.704 0 2.022 1.602 3.705 3.572 3.705zm-6.935-.065c0 .243 0 2.378-.016 2.944-6.31 0-6.278-3.3-6.278-7.101V1.846L15.148.455v7.877c0 2.443-.24 4.48 3.38 4.416zM6.05 15.74c-2.819 0-5.414-1.908-5.414-1.908l1.826-2.087s1.57 1.068 3.284 1.262c.8.097 2.098.29 2.466-.76.177-.502-.032-1.036-.56-1.246a67.777 67.777 0 0 0-2.339-.841C4.16 9.755 3.12 9.513 2.286 8.914 1.79 8.542 1.197 7.717 1.15 6.666c-.032-1.035.288-1.909.945-2.604C3.199 2.913 4.64 2.574 5.73 2.574c2.226 0 4.244 1.083 4.244 1.083L8.79 6.051s-3.508-1.488-4.58-.29c-.37.42-.305.986-.193 1.18.384.68 1.153.857 2.435 1.197 2.066.55 4.436.97 4.564 3.284.096 2.313-1.217 3.364-2.354 3.85-.737.323-1.666.468-2.61.468z"></path>
            </svg>
        </div>

        <div class="mb-16">
            <h1 class="text-4xl">We are sorry to see you go</h1>
        </div>
    </div>
</div>
</body>
</html>
