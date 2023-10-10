<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1,0">
    <meta http-equiv="X-UA-Compatible" conten="ie=edge">
    <title>Document</title>
</head>
<link href="{{asset ('lending/css/style.css') }}" rel="stylesheet" />
<header class="masthead">
    <body>
        @foreach($mahasiswa as $mhs)
    <form action="/home/update" method="post">
    {{ csrf_field()}}
    <input type="hidden"name="id" value="{{ $mhs->id}}"> <br/>
    nama<input type="text" require="required" name="nama" value="{{ $mhs->nama }}" > <br/>>
    umur<input type="text" require="required" name="nama" value="{{ $mhs->umur }}" > <br/>>
    kota<input type="text" require="required" name="nama" value="{{ $mhs->kota }}" > <br/>>
    <input type="submit" value="Simpan Data">
    </form>
    @endforeach
    </body>
    </html>