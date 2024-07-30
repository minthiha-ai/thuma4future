<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/dist/image-uploader.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Montserrat:300,400,500,600,700|Source+Code+Pro&display=swap"
    rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-weight: normal;
        }

        body {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            font-weight: 300;
            color: rgba(0, 0, 0, 0.9);
            line-height: 1.5;
        }

        header {
            background-color: rgba(0, 0, 0, 0.9);
            color: rgb(255, 255, 255);
            padding: 1rem;
        }

        header p {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2em;
            font-weight: 200;
            margin-bottom: 4rem;
        }

        main {
            text-align: justify;
            position: relative;
            margin: 4rem 0;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.9);
            color: rgb(255, 255, 255);
            padding: 1rem 0;
            margin-top: 4rem;
        }

        footer p {
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 1em;
            font-weight: 200;
            margin: 0;
        }

        a {
            color: #50ce7d;
            text-decoration: none;
        }

        h1,
        h4,
        h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        h1 {
            font-size: 3.6em;
            margin: 4rem 0 1rem 0;
        }

        h4 {
            font-size: 2em;
            margin: 3rem 0 1rem 0;
        }

        h6 {
            font-size: 1.2em;
            margin: 1rem 0;
        }

        h4 small {
            font-size: 70%;
            font-weight: 300;
        }

        p {
            margin: 1rem 0;
        }

        nav {
            position: absolute;
            margin-left: -12em;
        }

        nav ul {
            margin-left: 0;
            list-style: none;
        }

        nav ul li {
            padding: .2rem 0;
        }

        nav ul li a {
            font-size: 1.2em;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
            color: #2196f3;
        }

        pre {
            font-family: 'Source Code Pro', monospace;
            margin: 1rem 0;
            padding: 1rem 1rem;
            background: #f3f3f3;
            font-size: .9em;
            overflow-x: auto;
        }

        table code,
        p code {
            font-family: 'Source Code Pro', monospace;
            background: #f3f3f3;
            font-size: .9em;
            padding: .1rem .3rem;
        }

        strong {
            font-weight: 600;
        }

        form > button {
            -webkit-appearance: none;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            padding: 1rem 2rem;
            border: none;
            background-color: #50ce7d;
            color: #fff;
            text-transform: uppercase;
            display: block;
            margin: 2rem 0 2rem auto;
            font-size: 1em;
        }

        ul {
            margin-left: 2rem;
        }

        input {
            background-color: transparent;
            border: none;
            border-radius: 0;
            outline: none;
            width: 100%;
            line-height: normal;
            font-size: 1em;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            margin: 0;
            color: rgba(0, 0, 0, 0.72);
            background-position: center bottom, center calc(100% - 1px);
            background-repeat: no-repeat;
            background-size: 0 2px, 100% 1px;
            -webkit-transition: background 0s ease-out 0s;
            -o-transition: background 0s ease-out 0s;
            transition: background 0s ease-out 0s;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#2196f3), to(#2196f3)), -webkit-gradient(linear, left top, left bottom, from(#d9d9d9), to(#d9d9d9));
            background-image: -webkit-linear-gradient(#2196f3, #2196f3), -webkit-linear-gradient(#d9d9d9, #d9d9d9);
            background-image: -o-linear-gradient(#2196f3, #2196f3), -o-linear-gradient(#d9d9d9, #d9d9d9);
            background-image: linear-gradient(#2196f3, #2196f3), linear-gradient(#d9d9d9, #d9d9d9);
            height: 2.4em;
        }

        input:focus {
            background-size: 100% 2px, 100% 1px;
            outline: 0 none;
            -webkit-transition-duration: 0.3s;
            -o-transition-duration: 0.3s;
            transition-duration: 0.3s;
            border-bottom: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .input-field label {
            width: 100%;
            color: #9e9e9e;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            font-size: 1em;
            cursor: text;
            -webkit-transition: -webkit-transform .2s ease-out;
            transition: -webkit-transform .2s ease-out;
            -webkit-transform-origin: 0 100%;
            transform-origin: 0 100%;
            text-align: initial;
            -webkit-transform: translateY(7px);
            transform: translateY(7px);
            pointer-events: none;
        }

        input:focus + label {
            color: #2196f3;
        }

        .input-field {
            position: relative;
            margin-top: 2.2rem;
        }

        .input-field label.active {
            -webkit-transform: translateY(-15px) scale(0.8);
            transform: translateY(-15px) scale(0.8);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
        }

        .container {
            width: 60%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .step {
            font-size: 1.6em;
            font-weight: 600;
            margin-right: .5rem;
        }

        .option {
            margin-top: 2rem;
            border-bottom: 1px solid #d9d9d9;
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, .5);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal .content {
            background: #fff;
            display: inline-block;
            padding: 2rem;
            position: relative;
        }

        .modal .content h4 {
            margin-top: 0;
        }

        .modal .content a.close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            color: inherit;
            font-size: 1.4rem;
            line-height: 1;
            font-family: 'Montserrat', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        @media screen and (max-width: 1366px) {
            body {
                font-size: 15px;
            }

            nav ul li a {
                font-size: 1.1em;

            }
        }

        @media screen and (max-width: 992px) {
            main {
                margin: 2rem 0;
            }

            nav {
                margin-left: -10em;
            }
        }

        @media screen and (max-width: 786px) {
            body {
                font-size: 14px;
            }

            nav {
                display: none;
            }

            .container {
                width: 80%;
            }
        }

        @media screen and (max-width: 450px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <form action="url" enctype="multipart/form-data">
        <div class="inputPic"></div>
      </form>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/file-input/src/image-uploader.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/dist/image-uploader.min.js') }}"></script>
    <script>
        $('.inputPic').imageUploader({
            imagesInputName: 'image',
            label:'Drag & Drop files here or click to browse',
            extensions: ['.jpg','.jpeg','.png'],
            mimes: ['image/jpeg','image/png'],
            maxFiles: 1,
        });
    </script>
</body>
</html>