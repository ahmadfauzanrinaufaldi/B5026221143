!DOCTYPE html>
<html lang="en">

<head>
    <title>Javascript</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="bil1">
        </div>
        <div class="container-fluid">
            <label for="usr">Name:</label>
            <input type="text" class="form-control" id="bil2">
        </div>
        <h1>Hasil Operasi :<div id="hasil"></div>
        </h1>
        <input type="button" value="Penjumlahan" class="btn btn-success" onclick="tambah();">
        <input typer="button" value="Perkalian" class="btn btn-warning"> onclick ="kali();">
    </div>

</body>
