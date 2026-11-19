<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Detail Jurusan - {{ $jurusan->nama }}</title>
</head>

<body>
  <h1>Detail Jurusan</h1>
  <table border="1" cellpadding="8" cellspacing="0">
    <tr>
      <td><strong>Kode Jurusan</strong></td>
      <td>{{ $jurusan->kode }}</td>
    </tr>
    <tr>
      <td><strong>Nama Jurusan</strong></td>
      <td>{{ $jurusan->nama }}</td>
    </tr>
    <tr>
      <td><strong>Waktu Dibuat</strong></td>
      <td>{{ $jurusan->created_at->format('d-m-Y H:i') }}</td>
    </tr>
  </table>
</body>

</html>