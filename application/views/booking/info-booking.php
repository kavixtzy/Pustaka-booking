<div class="container">
	<center>
		<table>
			<?php
			foreach ($useraktif as $u) {
			?>
				<tr>
					<td nowrap>Terima Kasih <b><?= $u->nama; ?></b>
					</td>
				</tr>
				<tr>
					<td>Buku Yang Ingin Anda Pinjam Adalah Sebagai Berikut:</td>
				</tr>
			<?php } ?>
			<tr>
				<td>
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover" id="table-datatable">
							<tr>
								<th>No.</th>
								<th>Buku</th>
								<th>Penulis</th>
								<th>Penerbit</th>
								<th>Tahun</th>
								<th>Tanggal Booking</th>
								<th>Batas Ambil</th>
							</tr>
							<?php
							$no = 1;
							foreach ($items as $i) {
							?>
								<tr>
									<td><?= $no; ?></td>
									<td>
										<img src="<?= base_url('assets/img/upload/' . $i['image']); ?>" class="rounded" alt="No Picture" width="10%">
									</td>
									<td nowrap><?= $i['pengarang']; ?></td>
									<td nowrap><?= $i['penerbit']; ?></td>
									<td nowrap><?= $i['tahun_terbit']; ?></td>
									<td nowrap><?= $i['tgl_booking']; ?></td>
									<td nowrap><?= $i['batas_ambil']; ?></td>
								</tr>
							<?php $no++;
							} ?>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<hr>
				</td>
			</tr>
			<tr>
				<td>
					<!-- <a class="btn btn-sm btn-outline-success" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking!!!')" href="<?php echo base_url() . 'booking/exportToExcel/' . $this->session->userdata('id_user'); ?>"><span class="far fa-lg fa-fw fa-file-excel"></span> Excel</a> -->
					<a class="btn btn-sm btn-outline-danger" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking!!!')" href="<?php echo base_url() . 'booking/exportToPdf/' . $this->session->userdata('id_user'); ?>"><span class="far fa-lg fa-fw fa-file-pdf"></span> Pdf</a>
					<!-- <a class="btn btn-sm btn-outline-secondary" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking!!!')" href="#"><span class="fas fa-lg fa-fw fa-print"></span> Print</a> -->
				</td>
			</tr>
		</table>
	</center>
</div>