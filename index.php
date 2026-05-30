<!DOCTYPE html>
<html>
<head>
    <title>Data Kelompok Blacky</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#eaf4ff;
            padding:30px;
        }

        .container{
            max-width:1000px;
            margin:auto;
        }

        .judul{
            text-align:center;
            margin-bottom:30px;
        }

        .judul h1{
            color:#0d47a1;
            margin-bottom:10px;
        }

        .judul p{
            color:#555;
        }

        .anggota-container{
            display:flex;
            justify-content:center;
            gap:20px;
            flex-wrap:wrap;
        }

        .card{
            background:white;
            width:280px;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 4px 15px rgba(0,0,0,0.15);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            width:100%;
            height:300px;
            object-fit:cover;
        }

        .info{
            padding:15px;
        }

        .info h2{
            color:#1565c0;
            margin-bottom:10px;
        }

        .info p{
            margin:8px 0;
        }

        .label{
            font-weight:bold;
            color:#0d47a1;
        }
    </style>

</head>
<body>

<div class="container">

    <div class="judul">
        <h1>Kelompok Blacky</h1>
        <p>Praktikum Web Server Dinamis Menggunakan PHP</p>
    </div>

    <div class="anggota-container">

        <div class="card">
            <img src="images/Anggota 1.jpeg">
            <div class="info">
                <h2>Anggota 1</h2>
                <p><span class="label">Nama :</span> Chyla Dafinah Amalia</p>
                <p><span class="label">No Absen :</span> 10</p>
                <p><span class="label">Kelas :</span> XI RPL 8</p>
            </div>
        </div>

        <div class="card">
            <img src="images/Anggota 2.jpeg">
            <div class="info">
                <h2>Anggota 2</h2>
                <p><span class="label">Nama :</span> Ulil Naumi Putri</p>
                <p><span class="label">No Absen :</span> 31</p>
                <p><span class="label">Kelas :</span> XI RPL 8</p>
            </div>
        </div>

        <div class="card">
            <img src="images/Anggota 3.jpeg">
            <div class="info">
                <h2>Anggota 3</h2>
                <p><span class="label">Nama :</span> Ummu Zahro</p>
                <p><span class="label">No Absen :</span> 32</p>
                <p><span class="label">Kelas :</span> XI RPL 8</p>
            </div>
        </div>

    </div>

</div>

</body>
</html>