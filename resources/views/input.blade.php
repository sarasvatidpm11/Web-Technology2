<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequences</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex w-full h-screen">
        <div class="w-full flex items-center justify-center ls:w-1/2">
            <div class="bg-white px-10 py-20 rounded-sm border-2 border-3 border-violet-300">
                <center>
                    <h1 class="text-5xl font-semibold ">ARITHMETIC AND GEOMETRY SEQUENCES</h1>
                    <p class="text-lg font-medium text-gray-500 mt-1">Arithmetic and Geometry Sequences</p>
                </center>
                <form action="/output" method="get">
                    <div class="mt-10">
                        <label class="text-lg font-medium pl-2">Operation</label>
                        <select class="w-full text-xl border-2 border-gray-300 rounded-sm p-4 mt-1 mb-5 bg-transparent" name="option" id="op">
                            <option value="arit">Arithmetic Sequence</option>
                            <option value="geo">Geometry Sequence</option>
                        </select>
                        <label class="text-lg font-medium pl-2">nth</label>
                        <input type="number" name="n" class="text-xl mb-5 w-full border-2 border-gray-300 rounded-sm p-4 mt-1 bg-transparent" placeholder="Enter nth" required>
                        <label class="text-lg font-medium pl-2">First value (a)</label>
                        <input type="number" name="a" class="text-xl mb-5 w-full border-2 border-gray-300 rounded-sm p-4 mt-1 bg-transparent" placeholder="Enter the first value" required>
                        <br>
                        <div class="mb-3 border-2 py-2 border-violet-500">
                            <p class="text-lg font-medium w-full text-center">If choose <span class="font-bold">Arithmetic Sequence</span> enter different value (b)</p>
                            <p class="text-lg font-medium w-full text-center">If choose <span class="font-bold">GeometrySequence</span> enter rasio value (r)</p>
                        </div>
                        <input type="number" name="b" id="b" class="text-xl mb-5 w-full border-2 border-gray-300 rounded-sm p-4 mt-1 bg-transparent" placeholder="Enter different value (b) or rasio value (r)" required>
                    </div>
                    <div class="mt-8 flex flex-col gap-y-4">
                        <input type="submit" value="Result" class="bg-violet-500 py-4 rounded-sm text-lg mt-5 text-white font-semibold">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

