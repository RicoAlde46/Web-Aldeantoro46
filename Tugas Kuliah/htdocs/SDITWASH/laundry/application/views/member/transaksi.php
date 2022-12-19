<div class="row" ng-app="app" ng-controller="trxController">
	<div class="col-md-12">
		<div class="card card-warning">
			<div class="card-header">
				<h3 class="card-title">Data Transaksi</h3>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="konten" width="100%">
					<thead>
						<tr>
							<td style="width: 10px">No</td>
							<td class="text-center">Kode Pemesanan</td>
							<td class="text-center">Nama</td>
							<td class="text-center">Alamat</td>
							<td class="text-center">Tanggal Ambil</td>
							<td class="text-center">Tanggal Antar</td>
							<td class="text-center">Jenis</td>
							<td class="text-center">Berat (Kg)</td>
							<td class="text-center">Jumlah</td>
							<td class="text-center">Bayar</td>
							<td class="text-center">Total Bayar</td>
						</tr>
					</thead>
					<tbody ng-repeat="trx in datas">
						<tr>
							<td>{{$index+1}}</td>
							<td>{{trx.kd_pemesanan}}</td>
							<td>{{trx.nama}}</td>
							<td>{{trx.alamat}}</td>
							<td>{{trx.tgl_pemesanan}}</td>
							<td>{{trx.tgl_ambil}}</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>{{trx.total}}</td>
						</tr>
						<tr ng-repeat="detail in trx.detail">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>{{detail.jenis}}</td>
							<td>{{detail.berat}}</td>
							<td>{{detail.jumlah}}</td>
							<td>{{detail.bayar}}</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	angular.module('app', [])
		.directive('format', ['$filter', function($filter) {
			return {
				require: '?ngModel',
				link: function(scope, elem, attrs, ctrl) {
					if (!ctrl) return;

					ctrl.$formatters.unshift(function(a) {
						return $filter(attrs.format)(ctrl.$modelValue, attrs.format == 'currency' ? '' : null)
					});

					elem.bind('blur', function(event) {
						var plainNumber = elem.val().replace(/[^\d|\-+|\.+]/g, '');
						elem.val($filter(attrs.format)(plainNumber));
					});
				}
			};
		}])
		.controller('trxController', function($scope, $http) {
			$scope.datas = [];
			$scope.model = {};
			$scope.model.jenis = [];
			$scope.model.tgl_ambil = new Date();
			$scope.model.total = 0;
			$scope.tombol = "Simpan"
			$scope.cetak = false;
			$scope.dataprint = {};
			$http({
				method: 'get',
				url: '<?= base_url() ?>member/transaksi/gettransaksi',
			}).then(response => {
				$scope.datas = response.data;
				angular.forEach($scope.datas.transaksi, value => {
					var tgl = value.tgl_ambil.split('-');
					value.tanggal = new Date(tgl[0], tgl[1] - 1, tgl[2]);
					value.tanggal = convertanggal(value.tanggal)
				})
				console.log($scope.datas);
			})
		})
</script>
