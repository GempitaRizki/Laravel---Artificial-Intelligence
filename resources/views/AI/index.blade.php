<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artificial Intelligence | Fake Generator </title>
</head>
<body>
    <h1>Fake Generator</h1>
    <form method="POST" action="{{ route ('result') }} ">
        @csrf
        <label>Membuat Kalimat Palsu dari Sepenggal Kata</label>
        <br>
        <br>
        <input type="text" name="isi" placeholder="kalimat palsu">
        <br><br>
        <button>GENERATE</button>
        <br>

    </form>


    @if (isset($result))
        <h3>Hasil</h3>
        <div>{{ $result }}</div>
        
    @endif
</body>
</html>