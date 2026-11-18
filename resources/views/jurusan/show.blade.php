<h1>Detal Jurusan</h1>

<table border="1" cellpadding="6">
    <tr>
        <th>kode</th>
            <td>.{{ $jurusan->kode}}</td>
</tr>
<tr>
    <th>Nama Jurusan</th>
    <td>{{ $jurusan->nama}}</td>
</tr>
<tr>
    <th>Waktu Dibuat</th>
    <td>{{ $jurusan->created_at->format('d-m-Y H:i')}}</td>
</tr>
</table>

<br>

<a href="/jurusan">Kembali ke Daftar Jurusan</a>
