<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Data</title>
</head>
<body class="font-sans bg-gray-100 p-8 flex flex-col items-center justify-start h-screen">
    @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
    <form action="/kelas/store" method="post" enctype="multipart/form-data"  class=" max-w-full bg-white p-6 rounded-md shadow-md">
        @csrf
        <h1 class="text-3xl font-bold mb-6">Create Kelas</h1>
        <table class="table">
            <tr>
                <td class="block text-sm font-semibold text-blue-600"><label for="namakelas">Nama Kelas </label></td>
                <td><input type="text" name="namakelas" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1
                    ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required></td>
            </tr>
            <tr>
                <td class="block text-sm font-semibold text-blue-600" ><label for="walikelas">Nama Wali Kelas </label></td>
                <td><input type="text" name="walikelas"  class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1
                    ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required></td>
            </tr>
            <tr>
                <td class="block text-sm font-semibold text-blue-600"><label for="ketuakelas">Ketua Kelas </label></td>
                <td><input type="text" name="ketuakelas" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1
                    ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required></td>
            </tr>
            <tr>
                <td class="block text-sm font-semibold text-blue-600"><label for="kursi">Jumlah Kursi </label></td>
                <td><input type="number" name="kursi"  class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1
                    ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required></td>
            </tr>
            <tr>
                <td class="block text-sm font-semibold text-blue-600"><label for="meja">Jumlah Meja </label></td>
                <td><input type="number" name="meja"  class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1
                    ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"required></td>
            </tr>
            <tr>
                <td class="block text-sm font-semibold text-blue-600"><label for="gambar_kelas">Gambar Kelas </label></td>
                <td class="bg-green-500 px-4 py-1 rounded-md "><input type="file" name="gambar_kelas"  accept="image/*"required></td>
            </tr>
        </table>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md mt-4 " >Submit</button>
        <a href="/kelas" class="bg-gray-500 text-white py-2 px-4 rounded-md inline-block mt-4">Back</a>
    </form>
</body>
</html>
