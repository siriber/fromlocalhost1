<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="flex h-screen justify-center items-center flex-col">
    <div class="shadow-md">

    </div>
    <input class="m-2 bg-gray-200 px-4 py-2 w-1/4 rounded-lg focus:bg-blue-200" type="email" placeholder="@example.com">

    <input class="m-2 bg-gray-200 px-4 py-2 w-1/4 rounded-lg focus:bg-blue-200" type="password" placeholder="********">

     <button
        class="m-2 bg-green-400 font-bold text-sm px-4 py-2 w-1/4 rounded hover:text-white focus:bg-blue-400 hover:bg-red-400 block border focus:border-green-900">Submit
    </button>

    <div class="w-1/4 h-1/3 shadow-2xl flex justify-center items-center cursor-pointer">
        shadow
    </div>
</body>

</html>
