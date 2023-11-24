<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-3xl font-bold underline">
      Halaman Gunakan Tailwincss
    </h1>
@include('includes._header')
<form action="/cari" method="get" class="my-4  mx-5">
    <label for="cari" class="mr-2">Cari Data:</label>
    <input type="text" id="cari" name="cari" class="border border-gray-300 px-2 py-1  mx-5">
    <button type="submit"  class="bg-blue-500 text-white px-4 py-1">Search</button>
</form>
<a href="/kelas/create" class="bg-green-500 text-white px-4 py-2 rounded-md inline-block mb-4 mx-5">Tambah</a>
<table class="table-auto w-full border border-gray-300">
    <tr>
        <td class="border border-gray-300 bg-gray-200 p-2">Id Kelas</td>
        <td  class="border border-gray-300 bg-gray-200 p-2">Nama Kelas</td>
        <td  class="border border-gray-300 bg-gray-200 p-2">Wali Kelas</td>
        <td  class="border border-gray-300 bg-gray-200 p-2">Ketua Kelas</td>
        <td  class="border border-gray-300 bg-gray-200 p-2">Kursi</td>
        <td  class="border border-gray-300 bg-gray-200 p-2">Meja</td>
        <td  class="border border-gray-300 bg-gray-200 p-2" >gambar</td>
        <td  class="border border-gray-300 bg-gray-200 p-2">Aksi</td>
    </tr>
    <?php foreach($kelas as $gr) : ?>
    <tr>
        <td class="border border-gray-300 p-2"><?php echo $gr['id_kelas']; ?></td>
        <td class="border border-gray-300 p-2"><?php echo $gr['walikelas']; ?></td>
        <td class="border border-gray-300 p-2"><?php echo $gr['ketuakelas']; ?></td>
        <td class="border border-gray-300 p-2"><?php echo $gr['namakelas']; ?></td>
        <td class="border border-gray-300 p-2"><?php echo $gr['kursi']; ?></td>
        <td class="border border-gray-300 p-2"><?php echo $gr['meja']; ?></td>
        <td class="border border-gray-300 p-2">
            <a href="{{ asset('upload_gambar/' . $gr->gambar_kelas) }}" target="_blank">
                <img src="{{ asset('upload_gambar/' . $gr->gambar_kelas) }}" alt="{{ $gr->namakelas }}" width="100" height="100">
            </a>
        </td>
        <td class="border border-gray-300 p-2">
            <a href="/kelas/<?php echo $gr['id_kelas']; ?>/edit" class="text-blue-500 mr-2">Edit</a>
            <form action="/kelas/{{ $gr->id_kelas }}" method="post"  class="inline">
                @csrf
                @method("delete")
                <input type="submit" value="Delete" class="text-red-500 cursor-pointer">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

