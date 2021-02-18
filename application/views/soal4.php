<div class="col-md-12">
  <br><br>
  <pre>
    SELECT s.kode_barang, s.stok_akhir FROM tbl_stok s
    INNER JOIN (
    SELECT kode_barang, MAX(id) latest FROM tbl_stok GROUP BY kode_barang
    ) l ON s.id = l.latest AND s.kode_barang = l.kode_barang
    ORDER BY kode_barang ASC
  </pre>
</div>
