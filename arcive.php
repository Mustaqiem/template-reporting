<div class="middle">

<form class="form-inline" action="/action_page.php">
<div class="form-group">
  <select class="form-control col-md-12" name="month" >
      <option value="" selected>Select bulan...</option>
      <option value="all">Semua bulan</option>
      <option value="1">Januari</option>
      <option value="2">Februari</option>
      <option value="3">Maret</option>
      <option value="4">April</option>
      <option value="5">Mei</option>
      <option value="6">Juni</option>
      <option value="7">Juli</option>
      <option value="8">Agustus</option>
      <option value="9">September</option>
      <option value="10">Oktober</option>
      <option value="11">November</option>
      <option value="12">Desember</option>
  </select>

</div>
<div class="form-group">
  <select class="form-control" name="year">
      <option value="" selected>Select tahun...</option>
      <?php for ($i=2017; $i < 3000; $i++) {
          ?>
              <option value="<?=$i?>"><?=$i?></option>
          <?php
      }
      ?>
  </select>
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Pengulangan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
      </tr>
    </tbody>
  </table>
  </div>

</div>
<div class="right">
sasa
</div>
