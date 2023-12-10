<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Nilai Akhir</title>
</head>
<body>

<div class="container mt-5">
  <h2>Form Nilai Akhir</h2>
  <form>
    <div class="form-group">
      <label for="uas">Nilai UAS:</label>
      <input type="number" class="form-control" id="uas" placeholder="Masukkan nilai UAS">
    </div>
    <div class="form-group">
      <label for="tugas">Nilai Tugas:</label>
      <input type="number" class="form-control" id="tugas" placeholder="Masukkan nilai Tugas">
    </div>
    <div class="form-group">
      <label for="uts">Nilai UTS:</label>
      <input type="number" class="form-control" id="uts" placeholder="Masukkan nilai UTS">
    </div>
    <button type="button" class="btn btn-primary" onclick="hitungNilai()">Hitung Nilai Akhir</button>
  </form>

  <div class="mt-3">
    <h4>Hasil Perhitungan:</h4>
    <p id="hasilNilai">-</p>
  </div>
</div>

<script>
  function hitungNilai() {
    var nilaiUAS = parseFloat(document.getElementById('uas').value) || 0;
    var nilaiTugas = parseFloat(document.getElementById('tugas').value) || 0;
    var nilaiUTS = parseFloat(document.getElementById('uts').value) || 0;

    var nilaiAkhir = (nilaiUAS + nilaiTugas + nilaiUTS) / 3;

    document.getElementById('hasilNilai').innerText = 'Nilai Akhir: ' + nilaiAkhir.toFixed(2);
  }
</script>

</body>
</html>