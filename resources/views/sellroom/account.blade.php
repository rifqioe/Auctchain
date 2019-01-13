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
						<td><h4>Balance</h4></td>
						<td><h4>&nbsp;: <span id="accBalance">loading...</span></h4></td>
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
						<td><h4>Phone Number</h4></td>
						<td><h4>&nbsp;: <span id="accPhone">loading...</span></h4></td>
					</tr>
					<tr>
						<td><h4>Home Address</h4></td>
						<td><h4>&nbsp;: <span id="accHome">loading...</span></h4></td>
					</tr>
				</table>
			</div>
		</div>
		<h2 class="text-center margin-top-added">Your Refund Value</h2>
		<hr/>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="productDetail">
					<span id="bidRefund">0</span> ETH
					<button class="mybutton" id="getRefund">Get Funds</button>
				</div>
			</div>
		</div>
		<!-- <h2 class="text-center margin-top-added">Bid History</h2>
		<hr/>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table class="bidHistory" class="col-md-12">
					<tr>
						<th class="col-md-2">Bid Date</th>
						<th class="col-md-2">Item Code</th>
						<th class="col-md-2">Item Name</th>
						<th class="col-md-2">Bid Value</th>
						<th class="col-md-2">Status</th>
						<th class="col-md-2">Action</th>
					</tr>
					<tr class="bidHistoryTemplate">
						<th class="bidDate"></th>
						<th class="itemCode"></th>
						<th class="itemName"></th>
						<th class="bidValue"></th>
						<th class="status"></th>
						<th class="action"></th>
					</tr>
				</table>
			</div>
		</div> -->
		<h2 class="text-center margin-top-added">Sell History</h2>
		<hr/>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table class="sellHistory" class="col-md-12">
					<tr>
						<th class="col-md-2">Registered Date</th>
						<th class="col-md-2">Item Code</th>
						<th class="col-md-2">Item Name</th>
						<th class="col-md-2">Highest Bid</th>
						<th class="col-md-2">Status</th>
						<th class="col-md-2">Action</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!-- @include('footer') -->
	@include('sellroom/script-shop')

	<script type="text/javascript">
		let accountAddress = null;
		// window.onreset = () => {
        // window.location.reload();
        // }
		var addressInfo = document.querySelector('#accAddr');
		var addressBalance = document.querySelector('#accBalance');  
		var addressName = document.querySelector('#accName');  
		var addressEmail = document.querySelector('#accEmail');  
		var addressPhone = document.querySelector('#accPhone');  
		var addressHome = document.querySelector('#accHome');  
		
		var sellHistory = document.querySelector('.sellHistory');
		var sellHistoryTemplate = document.querySelector('.sellHistoryTemplate');
		
		var refundBtn = document.querySelector('#getRefund');
		var bidRefund = document.querySelector('#bidRefund');
		var withdrawBtn = document.querySelector('#btn_withdrawal');
		
		web3 = new Web3(window.web3.currentProvider);
		const Auction = new web3.eth.Contract(abiInterface,contractAddress);
		var bidDone = false;
		var auctionDone = false;
		window.addEventListener('load', () => {
			var auctionInterval = setInterval(function updateAuctionHTML() {
				web3.eth.getAccounts().then(accounts => {
				    accountAddress = accounts[0];
				    if(addressInfo != null)
				    	Auction.methods.isRegistered(String(accountAddress)).call().then(res => {
				    		if (!res){
				      			alert('Your account not Register yet\nRedirecting to Signup...');
				      			window.location.replace('http://localhost:8000/sellroom/account/register');
				    		} else {
				    			addressInfo.innerHTML = accountAddress;
				    			web3.eth.getBalance(String(accountAddress)).then(res => {
						       		addressBalance.innerHTML = web3.utils.fromWei(res, 'ether');
						    	});
						    	Auction.methods.getRegisteredData(accountAddress).call().then(res => {
						    		addressName.innerHTML = res[0];
						    		addressEmail.innerHTML = res[1];
						    		addressPhone.innerHTML = res[2];
						    		addressHome.innerHTML = res[3];
						    	});
						    	Auction.methods.getAuctionsCountForUser(String(accountAddress)).call().then(res => {
						    		if(!auctionDone){
							  			for (var i = 0; i < res; i++) {
								  			Auction.methods.getAuctionIdForUserAndIdx(String(accountAddress), i).call().then(res2 => {
								  				Auction.methods.getAuction(res2).call().then(result => {
													
								  					var temp = document.createElement('tr');
								  					var registeredDate = document.createElement('td');
								  					registeredDate.innerHTML = result[5];
								  					temp.appendChild(registeredDate);
								  					var itemCode = document.createElement('td');
								  					itemCode.innerHTML = '#' + result[0];
								  					temp.appendChild(itemCode);
								  					var itemName =document.createElement('td');
								  					itemName.innerHTML = result[2];
								  					temp.appendChild(itemName);
								  					var highestBid = document.createElement('td');
								  					highestBid.innerHTML = web3.utils.fromWei(result[8],'ether')+' ETH';
								  					temp.appendChild(highestBid);
													  var status = document.createElement('td');
													  temp.appendChild(status);
													  	if(result[9] == 0)
														status.innerHTML = 'Pending';
														else if(result[9] == 1)
														status.innerHTML = 'Active';
														else if(result[9] == 2)
														status.innerHTML = 'Inactive';
													var action = document.createElement('td');
													var ac = document.createElement('button');
													ac.innerHTML = 'End Auction ' + '#' +result[0];
													// ac.setAttribute("id", "btn_withdrawal");
													ac.setAttribute("onclick", "withdraw("+(result[0]-1)+")");
													ac.setAttribute("style", "width:170px;");
													ac.setAttribute('itemCode',result[0]);
													action.appendChild(ac);	
								  					temp.appendChild(action);
								  					sellHistory.appendChild(temp);
								  				});
								  			});
								  		}
						    		}
						    		auctionDone = true;
								  })
								//   alert(accountAddress);
								Auction.methods.getRefundValue().call({from : accountAddress}).then( res=> {
									bidRefund.innerHTML = web3.utils.fromWei(res,'ether');
								});
								
				    		}
			  			});
					});
			  	}, 1000);
			  	refundBtn.addEventListener('click', () => {
					if(!(bidRefund.innerHTML == '0'))
					Auction.methods.withdrawRefund().send({from : accountAddress});
				});

				withdrawBtn.addEventListener('click', () => {
					// var valueWithdraw = withdrawBtn.value;
					alert(valueWithdraw);
					// Auction.methods.endAuction(valueWithdraw).send({from : accountAddress});
				});

				

		});
	</script>
	<script>
		function withdraw(val){
			Auction.methods.endAuction(val).send({from : accountAddress}).then(res => {
				if(res)
					alert("success");
				else
					alert("Failed");
			})
			window.location.reload();
		}
	</script>
</body>
</html>