<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-600 flex flex-col h-screen justify-center items-center">
   <div class="w-2/3 flex flex-col bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-gray-200 text-gray-700 text-lg px-6 py-4">The title of the card here.</div>

        <div class="flex px-6 py-4 justify-between items-center">
            <div class="bg-orange-600 text-small uppercase px-2 py-1 rounded-full border border-gray-200 text-gray-200 font-bold">Under Review</div>
            <div>May, 14 1988</div>
        </div>

        <div class="px-6 py-4 border-t border-gray-200">
            <div class="border rounded-lg p-4 bg-gray-200">
                Here is a short comment about this employee
            </div>
        </div>

        <div class="bg-gray-200 px-6 py-4">
            <div class="uppercase text-gray-600 text-xs font-bold">
                Empoyee
            </div>

            <div class="flex items-center pt-3">
                <div class="bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full uppercase font-bold text-gray-100">
                    VG
                </div>

                <div class="ml-4">
                    <p class="font-bold">Victor Gozale</p>
                    <p class="text-sm text-gray-700 mt-1">Instructor</p>
                </div>
            </div>

            <div class="bg-purple-900 mt-4 flex w-64 h-64 justify-center items-center rounded-full font-bold uppercase text-gray-100 text-9xl float-right">
                S.A
            </div>
        </div>
   </div>
</body>
</html>
