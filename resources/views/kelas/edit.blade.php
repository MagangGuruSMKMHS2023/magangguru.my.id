<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Data</title>
</head>
<body class="font-sans bg-gray-100 p-8 flex flex-col items-center justify-start">
    <form action="/kelas/{{ $kelas->id_kelas}}" method="post" enctype="multipart/form-data" class="max-w-full bg-white p-6 rounded-md shadow-md ">
        @method("put")
        <h1 class="text-3xl font-bold mb-6">Update Data Kelas</h1>
        @csrf
        <table class="table">
            <tr  class="mb-4">
                <td class="block text-sm  font-semibold text-blue-600"><label for="id_kelas">Id Kelas </label></td>
                <td><input type="text" name="id_kelas" class="form-input block w-full rounded-md border-0 py-1.5 pl-2 pr-7
                     text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                     focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-red-600 pl-2 pr-7 " value="{{$kelas->id_kelas}}" readonly></td>
            </tr>
            <tr  class="mb-4">
                <td class="block text-sm font-semibold text-blue-600"><label for="namakelas">Nama Kelas </label></td>
                <td><input type="text" name="namakelas" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1 ring-inset
                     ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$kelas->namakelas}}"></td>
            </tr>
            <tr  class="mb-4">
                <td class="block text-sm font-semibold text-blue-600 w-32"><label for="walikelas">Nama Wali Kelas </label></td>
                <td><input type="text" name="walikelas" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1 ring-inset
                     ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$kelas->walikelas}}"></td>
            </tr>
            <tr  class="mb-4">
                <td class="block text-sm font-semibold text-blue-600"><label for="ketuakelas">Ketua Kelas </label></td>
                <td><input type="text" name="ketuakelas" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1 ring-inset
                     ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$kelas->ketuakelas}}"></td>
            </tr>
            <tr  class="mb-4">
                <td class="block text-sm font-semibold text-blue-600"><label for="kursi">Jumlah Kursi </label></td>
                <td><input type="number" name="kursi" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1 ring-inset
                     ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$kelas->kursi}}"></td>
            </tr>
            <tr  class="mb-4">
                <td class="block text-sm font-semibold text-blue-600"><label for="meja">Jumlah Meja </label></td>
                <td><input type="number" name="meja" class="block w-full rounded-md border-0 py-1.5 pl-2 pr-7 text-gray-900 shadow-sm ring-1 ring-inset
                     ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$kelas->meja}}"></td>
            </tr>
            <tr  class="mb-4">
                <td class="block text-sm font-semibold text-blue-600"><label for="gambar_kelas">Gambar Kelas </label></td>
                <td >   @if($kelas->gambar_kelas)
                       <img src="{{ asset('upload_gambar/' . $kelas->gambar_kelas) }}" alt="{{ $kelas->namakelas }}" width="150" heigt="150">
                    @else
                        <p>Tidak ada gambar saat ini.</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="block text-sm font-semibold text-blue-600"><label for="gambar_kelas">Ganti Gambar </label></td>
                <td><input type="file" name="gambar_kelas" class="form-control" accept="image/*"></td>
            </tr>
        </table>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md mt-4 ">Submit</button>
        <form action="/kelas">
            @csrf
            <button type="submit" class="bg-gray-500 py-2 px-4 rounded-md text-gray-900 inline mt-4">Back</button>
        </form>
    </form>
</body>
</html>
