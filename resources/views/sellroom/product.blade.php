<!DOCTYPE html>
<html lang="en">
<head>
	<title>Single Product</title>
	@include('sellroom/css-shop')
</head>
<body>
	<div class="super_container">
		@include('sellroom/header-shop')
		<div class="single_product">
			<div class="container">
				<div class="col-lg-5 divProductNameDetail">
					<div class="product_name productNameDetail text-center">Item Name here</div>
					<div class="imageProductDetail">
						<img class="imageProductDetailSrc" src="" alt="">
					</div>
					<div class="text-center">		
						<h4>Item Description</h4>
						<div class="productDescriptionDetail text-center">
							<p>	
								Description Here
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-7 order-3 text-center">
					<div class="row">
						<div class="col-lg-12 product_name currentBid">Current Bid : <span class="bidValueDetail">0</span> ETH</div>
					</div>
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-4 form-group">
                            <input type="number" class="form-input bidValueBtn" name="bidValue" id="bidValue" step="0.01" min="0.01" required/>
                        </div>
                        <div class="col-lg-4 form-group">
                            <input type="button" class="bidBtn" id="btnBid" value="BID" />
                        </div>
                        <div class="col-lg-2"></div>
					</div>
					<div class="row">
						<div class="col-lg-12 product_name">Bid History</div>
					</div>
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-10 historyBid">
							<table class="col-lg-12 text-center historyBidTable">
								<thead class="thead-dark">
									<tr class="historyBidRow">
										<th>Bid Time</th>
										<th>Address Bidder</th>
										<th>Bid Value</th>
									</tr>
								</thead>
								<tbody id="table_historyBid">
									<!-- History Goes Here -->
								</tbody>
							</table>
						</div>
						<div class="col-lg-1"></div>
					</div>
				</div>							
			</div>
		</div>
	</div>
	@include('footer')
	@include('sellroom/script-shop')
	<script type="text/javascript">
		let accountAddress = null;

		var account = document.querySelector('#accountAddress');  
		
		var itemName = document.querySelector('.productNameDetail');
		var itemImage = document.querySelector('.imageProductDetailSrc');
		var itemDescription = document.querySelector('.productDescriptionDetail');
		var itemBidValue = document.querySelector('.bidValueDetail');
		var inputBidValue = document.querySelector('.bidValueBtn');
		var bidBtn = document.querySelector('#btnBid');

		web3 = new Web3(window.web3.currentProvider);
		const Auction = new web3.eth.Contract(abiInterface,contractAddress);

		window.addEventListener('load', () => {
			Auction.methods.getAuction({{$prodID - 1}}).call().then(res => {
				itemName.innerHTML = res[2];
				itemImage.src = '{{URL::asset('img/uploads')}}'+'/'+res[4];
				itemDescription.innerHTML = res[3];
				itemBidValue.innerHTML = web3.utils.fromWei(res[8],'ether');
				inputBidValue.min = web3.utils.fromWei(res[8],'ether');
				inputBidValue.value = web3.utils.fromWei(res[8],'ether');
			});
			// var auctionInterval = setInterval(function updateAuctionHTML() {
				
				web3.eth.getAccounts().then(accounts => {
				    accountAddress = accounts[0];
				    if(account != null)
				    	Auction.methods.isRegistered(String(accountAddress)).call().then(res => {
				    		if (!res){
				    			account.innerHTML = "Hi "+accountAddress;
				      		} else {
						    	Auction.methods.getRegisteredData(accountAddress).call().then(res => {
						    		account.innerHTML = "Hi "+res[0];
						    		
						    	})
				    		}
			  			});
				});

				bidBtn.addEventListener('click', () => {
					Auction.methods.isRegistered(String(accountAddress)).call().then(res => {
			    		if (!res){
							alert('Your account not Register yet\nRedirecting to Signup...');
							window.location.replace('http://localhost:8000/sellroom/account/register');
			      		} else {
					    	const numberBid = {{$prodID - 1}};
							const valueBid = web3.utils.toWei(inputBidValue.value,'ether');
							Auction.methods.placeBid(numberBid).send({
								from: accountAddress,
								value : valueBid
							}).then(function() {
								Auction.methods.getAuction({{$prodID - 1}}).call().then(res => {
									var bidAfter = web3.utils.fromWei(res[8],'ether');
									if(itemBidValue.value != bidAfter){
										alert('Bid Successfull');
										window.location.reload();
									}
								});
							});
						}
			  		});
				});

				Auction.methods.getBidCountForAuction({{$prodID - 1}}).call().then(res => {
					for (let i = res-1, j = 0; i >= 0; i--, j++) {
                    	Auction.methods.getBidForAuctionByIdx({{$prodID - 1}},i).call().then(result => {								
							let tableRef = document.getElementById('table_historyBid');
							let newRow = tableRef.insertRow(j);
							let newCell0 = newRow.insertCell(0);
							let newCell1 = newRow.insertCell(1);
							let newCell2 = newRow.insertCell(2);
							let addr = result[0].substr(0,16);
							if(result[0] == accountAddress)
								newRow.style['background'] = '#fafafa';
							const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
							date = new Date(result[2] *1000);
							dateValue = String(date.getDate()) + " " + String(monthNames[date.getMonth()]) + " " + String(date.getFullYear());
							newCell0.appendChild(document.createTextNode(dateValue));
							newCell1.appendChild(document.createTextNode(addr));
							newCell2.appendChild(document.createTextNode(String(web3.utils.fromWei(result[1]),'ether') + " ETH"));
						});
                	}
				});
			// }, 2000);
			// var BidTable = $('.historyBidTable');
			// var temp = $('.historyBidRow');
			// temp.find('.historyBidTime').text('01/11/2018 08:00:00');
			// temp.find('.historyBidAddress').text('accountAddress');
			// temp.find('.historyBidValue').text('50 ETH');
			// BidTable.append("<tr>"+temp.html()+"</tr>");
			// temp.find('.historyBidTime').text('01/11/2012 08:00:00');
			// temp.find('.historyBidAddress').text('accouAddress');
			// temp.find('.historyBidValue').text('50 ETH');
			// BidTable.append("<tr>"+temp.html()+"</tr>");
			// temp.find('.historyBidTime').text('01/11/2028 08:00:00');
			// temp.find('.historyBidAddress').text('accatAddress');
			// temp.find('.historyBidValue').text('50 ETH');
			// BidTable.append("<tr>"+temp.html()+"</tr>");
	  	});
	</script>
</body>
</html>