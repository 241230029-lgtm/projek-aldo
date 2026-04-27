<div>

<tbody>
@foreach($kurir as $data)
<tr>
    <td class="border p-2">{{ $data->id }}</td>
    <td class="border p-2">{{ $data->nama }}</td>
    <td class="border p-2">{{ $data->nomor_hp }}</td>
    <td class="border p-2">{{ $data->alamat }}</td>
    <td class="border p-2">
        <button class="bg-red-600 text-white px-4 py-1 rounded">Hapus</button>
        <button class="bg-green-600 text-white px-4 py-1 rounded">Edit</button>
    </td>
</tr>
@endforeach
</tbody>

</div>
