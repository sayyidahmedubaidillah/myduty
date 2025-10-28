<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh list dengan menggunakan php</title>
</head>
<body>
    <h2>daftar absensi mahasiswa</h2>
    <ol>
        <?php 
        for ($i= 1; $i <= 1000; $i++)
            {
                echo "<li> daftar absensi mahasiswa ke-$i</li.";
            }
    </ol>    
</body>
</html>>