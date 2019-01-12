<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
    @include('sellroom/css-shop')
</head>
<body>
	<div class="jumbotron">
		<div class="row">
			<div class="col-md-4">
				<a href="{{ Route('sellroom') }}">
					<span class="glyphicon glyphicon-arrow-left" id="back"></span>Back to Sellroom				
				</a>
			</div>
		</div>
		<h2 class="text-center">Account Info</h2>
		<hr/>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table>
					<tr>
						<td><h4>Account Address</h4></td>
						<td><h4>&nbsp;: <span id="accAddr">loading...</span></h4></td>
					</tr>
					<tr>
						<td><h4>Name</h4></td>
						<td><h4>&nbsp;: <span id="accName">loading...</span></h4></td>
					</tr>
					<tr>
						<td><h4>E-mail</h4></td>
						<td><h4>&nbsp;: <span id="accEmail">loading...</span></h4></td>
					</tr>
					<tr>
						<td><h4>Home Address</h4></td>
						<td><h4>&nbsp;: <span id="accHome">loading...</span></h4></td>
					</tr>
				</table>
			</div>
		</div>
		<h2 class="text-center margin-top-added">Bid History</h2>
		<hr/>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table id="bidHistory" class="col-md-12">
					<tr>
						<th class="col-md-2">Bid Date</th>
						<th class="col-md-2">Item Code</th>
						<th class="col-md-2">Item Name</th>
						<th class="col-md-2">Bid Value</th>
						<th class="col-md-2">Status</th>
						<th class="col-md-2">Action</th>
					</tr>
					<tr id="bidHistoryTemplate">
						<th id="bidDate"></th>
						<th id="itemCode"></th>
						<th id="itemName"></th>
						<th id="bidValue"></th>
						<th id="status"></th>
						<th id="action"></th>
					</tr>
				</table>
			</div>
		</div>
		<h2 class="text-center margin-top-added">Sell History</h2>
		<hr/>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table id="sellHistory" class="col-md-12">
					<tr>
						<th class="col-md-2">Registered Date</th>
						<th class="col-md-2">Item Code</th>
						<th class="col-md-2">Item Name</th>
						<th class="col-md-2">Highest Bid</th>
						<th class="col-md-2">Status</th>
						<th class="col-md-2">Action</th>
					</tr>
					<tr id="sellHistoryTemplate">
						<th id="registeredDate"></th>
						<th id="itemCode"></th>
						<th id="itemName"></th>
						<th id="highestBid"></th>
						<th id="status"></th>
						<th id="action"></th>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!-- <table cellspacing='0'>
		<thead>
			<tr>
                <th>Tanggal Registrasi</th>
				<th>Kode Barang</th>
				<th>Bid Terbesar</th>
				<th>Address Bid Terbesar</th>
                <th>Status Barang Lelang</th>
			</tr>
        </thead>
		<tbody>
			<tr>
				<td>15/07/18</td>
				<td>B7771</td>
				<td>3 ETH</td>
				<td>1HB5XMLmzFVj8ALj6mfBsbifRoD4miY36v</td>
                <td>In Process</td>
			</tr>
			<tr>
				<td>07/07/18</td>
				<td>R1143</td>
				<td>2 ETH</td>
				<td>1DN7OPQmzFVj8ALj6mfBsbifRoD4miY36v</td>
                <td>The Process Has Finished</td>
			</tr>
			<tr>
				<td>07/07/18</td>
				<td>Q1093</td>
				<td>2 ETH</td>
				<td>1HJ7OKLmyFVj8ALj6mfBsbifRoD4miY36v</td>
                <td>The Process Has Finished</td>
			</tr>
			<tr>
				<td>15/07/18</td>
				<td>B7771</td>
				<td>5 ETH</td>
				<td>1CV9ERTmzFVj8ALj6mfBsbifRoD4miY36v</td>
                <td>In Process</td>
			</tr>
		</tbody>
	</table> -->
</body>
	@include('footer')
	@include('sellroom/script-shop')
</body>
</html>