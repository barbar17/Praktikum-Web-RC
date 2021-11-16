<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css_belanja.css">
    <title>119140151 Akbar Maulana</title>
</head>
<body>
    <fieldset>
        <legend><h2>Form Daftar Belanja</h2></legend>
        <form action="index.php" method="POST" name="daftar_belanja">
            <table>
                <tr>
                    <td><label>Mangga (15.000/kg)</label></td>
                    <td><input type="number" id="berat_mangga" name="berat_mangga" onchange="hargaSementara()"> kg</td>
                </tr>
                <tr>
                    <td><label>Jambu (13.000/kg)</label></td>
                    <td><input type="number" id="berat_jambu" name="berat_jambu" onchange="hargaSementara()"> kg</td>
                </tr>
                <tr>
                    <td><label>Salak (10.000/kg)</label></td>
                    <td><input type="number" id="berat_salak" name="berat_salak" onchange="hargaSementara()"> kg</td>
                </tr>
            </table>
            <br>
            <button type="submit" id="btn_submit">Submit</button>
            <br> <br>
            <label>Total Harga Sementara: </label>
            <input type="text" id="harga_sementara" name="harga_sementara" readonly> <br>
        </form>
    </fieldset>

    <script>
        function hargaSementara() {
            var harga_mangga = document.getElementById("berat_mangga").value * 15000;

            var harga_jambu = document.getElementById("berat_jambu").value * 13000;

            var harga_salak = document.getElementById("berat_salak").value * 10000;
            
            var total_harga = document.getElementById("harga_sementara");
            var hasil = harga_mangga + harga_jambu + harga_salak;
            total_harga.value = hasil;
        }
    </script>
</body>
</html>