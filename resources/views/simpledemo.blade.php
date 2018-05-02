<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Vue Demo</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
            font-size: 3rem;
            padding: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    {{-- Get Vue from the CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    {{-- Give it some place to live --}}
    <div id="app">
        {{-- The @ makes blade ignore this template tag --}}
        @{{ message }} 
    </div>

    {{-- Bind the Vue instance to its home --}}
    <script>
        var app = new Vue({
            el: '#app',
                data: {
                message: 'Hello Bozeman Laravel!'
            }
        })
    </script>
</body>
</html>