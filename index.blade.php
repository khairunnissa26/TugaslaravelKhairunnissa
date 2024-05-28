<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran air PDAM PDAM </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Pembayaran air  PDAM </h1>
        @if (isset($tagih))
            <div class="alert alert-success">
                <p>Penggunaan: {{ $guna }} m<sup>3</sup></p>
                <p>Total Tagihan: Rp. {{ number_format($tagih, 0, ',', '.') }}</p>
            </div>
        @endif
        <form action="{{ route('pdam.jumlah') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="guna">Penggunaan (m<sup>3</sup>)</label>
                <input type="number" class="form-control" id="guna" name="guna" required>
            </div>
            <p>
            <button type="submit" class="btn btn-primary">Total Biaya</button></p>
        </form>
    </div>
</body>
</html>
