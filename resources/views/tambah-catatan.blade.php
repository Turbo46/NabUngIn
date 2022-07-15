<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<a href="">Kembali ke Catatan Pengeluaran</a>
<br>
<h3>Tambah Catatan</h3>

<div>
  <form action="/action_page.php">
    <label for="nampe">Nama Pengeluaran/Pemasukan</label>
    <input type="text" id="nampe" name="firstname" placeholder="Masukan nama Pengeluaran">
<label for="tipe">Tipe</label>
    <select id="tipe" name="tipe">
      <option value="makanan">Makanan/Minuman</option>
      <option value="fashion">Fashion</option>
      <option value="gadget">Gadget dan Accessories</option>
    </select>
  

    <label for="pengeluaran">Pengeluaran atau Pemasukan</label>
    <select id="pengeluaran" name="pengeluaran">
      <option value="pengeluaran1">Pengeluaran</option>
      <option value="pemasukan">Pemasukan</option>
    </select>
  <label for="nominal">Nominal</label>
  <br>
    <input type="number" id="nominal" name="nominal" placeholder="Input Pengeluaran">
    <input type="submit" value="Simpan">
  </form>
</div>
</html>