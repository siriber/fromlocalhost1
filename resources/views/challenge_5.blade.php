<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col h-screen justify-center items-center">
    <label class="font-bold text-gray-700 text-sm select-none" for="Full Name">Full Name</label>
    <input id="full_name" type="text" placeholder="Enter your full name" class="text-center mt-2 shadow rounded-lg w-4/6 px-2 py-3 hover:bg-gray-200 focus:bg-gray-100 placeholder-indigo-300">

    <button class="mt-2 bg-blue-500 px-4 py-2 rounded-lg text-blue-100">Save</button>
</body>
</html>
