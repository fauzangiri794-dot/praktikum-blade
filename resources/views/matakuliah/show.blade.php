
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mata Kuliah</title>
</head>
<body>

    <h1>Detail Mata Kuliah</h1>

    <p>
        <strong>Kode Mata Kuliah:</strong>
        {{ $matakuliah->kode_matakuliah }}
    </p>

    <p>
        <strong>Nama Mata Kuliah:</strong>
        {{ $matakuliah->nama_matakuliah }}
    </p>

    <p>
        <strong>Jumlah SKS:</strong>
        {{ $matakuliah->sks }}
    </p>

    <p>
        <strong>Tanggal Dibuat:</strong>
        {{ $matakuliah->created_at }}
    </p>

    <p>
        <strong>Tanggal Diperbarui:</strong>
        {{ $matakuliah->updated_at }}
    </p>

    <a href="{{ route('matakuliah.index') }}">Kembali</a>

</body>
</html>
