<body>
    <div style="overflow-x:auto;">
    <a href="/export" class="btn btn-success my-2">Export Exel</a>
        <p>Cari buku :</p>
        <form action="/cari" method="GET">
        <input type="text" name="lihat" placeholder="Cari berdasarkan judul.." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </br>
        </br>
        <table border="3">
        <style>
            table {
            border-collapse: collapse;
            border-spacing: 3;
            width: 50%;
            border: 3px solid #FF0000;
            background-color: #E0FFFF;
            }
        </style>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Judul Buku</th>
                    <th>Jenis</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->judul}}</td>
                    <td>{{$b->jenis}}</td>
                    <td>{{$b->tahun_terbit}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>