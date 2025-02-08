<!DOCTYPE html>
<html>

<head>
    <title>Yeni Karyera Müraciəti</title>
</head>

<body>
    <h1>Məlumatlar</h1>
    <p><strong>Ad Soyad:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Telefon:</strong> {{ $data['phone'] }}</p>
    <p><strong>Qeyd:</strong> {{ $data['note'] }}</p>
    <p><strong>Fayl:</strong> <a href="{{ asset('storage/' . $filePath) }}">Download</a></p>
</body>

</html>
