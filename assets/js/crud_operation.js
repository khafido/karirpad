$(document).ready(function(){
	listBarang();
	function getBaseUrl(url){
		return '/karirpad/'+url;
	}
	var table = $('#tblbarang').dataTable({
		"bInfo": false,
		"bPaginate": false,
		"bFilter": false,
		"bLengthChange": false,
		"pageLength": 5
	});

	function listBarang(){
		$.ajax({
			type  : 'ajax',
			url   : getBaseUrl('barang/show'),
			async : false,
			dataType : 'json',
			success : function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += '<tr id="'+data[i].id+'">'+
					'<td>'+(i+1)+'</td>'+
					'<td>'+data[i].nama_barang+'</td>'+
					'<td>'+data[i].kategori+'</td>'+
					'<td>'+data[i].harga+'</td>'+
					'<td style="text-align:right;">'+
					'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="'+data[i].id+'" data-nama_barang="'+data[i].nama_barang+'" data-kategori="'+data[i].kategori+'" data-harga="'+data[i].harga+'">Ubah</a>'+' '+
					'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="'+data[i].id+'">Hapus</a>'+
					'</td>'+
					'</tr>';
				}
				$('#listbarang').html(html);
			}
		});
	}

	$('#saveBarang').submit('click',function(){
		var nama_barang = $('#nama_barang').val();
		var kategori = $('#kategori').val();
		var harga = $('#harga').val();
		$.ajax({
			type : "POST",
			url  : getBaseUrl('barang/save'),
			dataType : "JSON",
			data : {nama_barang:nama_barang, kategori:kategori, harga:harga},
			success: function(data){
				$('#nama_barang').val("");
				$('#harga').val("");
				$('#modalBarang').modal('hide');
				listBarang();
			},
			error: function(xhr, ajaxOptions, thrownError){
        console.log(xhr);
      },
		});
		return false;
	});

	$('#listbarang').on('click','.editRecord',function(){
		$('#editModal').modal('show');

		$("#updateId").val($(this).data('id'));
		$("#edit_nama_barang").val($(this).data('nama_barang'));
		$("#edit_kategori").val($(this).data('kategori'));
		$("#edit_harga").val($(this).data('harga'));
	});

	$('#editForm').on('submit',function(){
		var updateId = $('#updateId').val();
		var nama_barang = $('#edit_nama_barang').val();
		var kategori = $('#edit_kategori').val();
		var harga = $('#edit_harga').val();
		$.ajax({
			type : "POST",
			url  : getBaseUrl('barang/update'),
			dataType : "JSON",
			data : {id:updateId, nama_barang:nama_barang, kategori:kategori, harga:harga},
			success: function(data){
				$("#updateId").val("");
				$('#nama_barang').val("");
				$('#harga').val("");
				$('#editModal').modal('hide');
				listBarang();
			}
		});
		return false;
	});

	$('#listbarang').on('click','.deleteRecord',function(){
		var id = $(this).data('id');
		$('#deleteModal').modal('show');
		$('#deleteId').val(id);
	});

	$('#deleteForm').on('submit',function(){
		var id_barang = $('#deleteId').val();
		$.ajax({
			type : "POST",
			url  : getBaseUrl('barang/delete'),
			dataType : "JSON",
			data : {id:id_barang},
			success: function(data){
				// $("#"+empId).remove();
				$('#deleteId').val("");
				$('#deleteModal').modal('hide');
				listBarang();
			}
		});
		return false;
	});
});
