<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    @include('sellroom/css-shop')
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="margin-top: 20px">
                <a href="{{ Route('sellroom') }}">
                    <span class="glyphicon glyphicon-arrow-left" id="back"></span>Back to Sellroom              
                </a>
            </div>
        </div>  
    </div>
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container-form">
                <div class="signup-content">
                    <h2 class="form-title">Register Item</h2>
                    <div class="form-group">
                        <h4>Item ID</h4>
                        <input type="text" class="form-input" name="itemID" id="itemID" disabled />
                    </div>
                    <div class="form-group">
                        <h4>Item Name</h4>
                        <input type="text" class="form-input" name="itemName" id="itemName" placeholder="Item Name"/>
                    </div>
                    <div class="form-group">
                        <h4>Item Desc</h4>
                        <input type="text" class="form-input" name="itemDesc" id="itemDesc" placeholder="Item Description"/>
                    </div>
                    <div class="form-group">
                        <h4>Item Image</h4>
                        <input type="file" name="files[]" accept="image/*" class="form-input" id="itemImage"/>
                    </div>
                    <div class="form-group">
                        <h4>Item Start Bid in ETH (Min 0.01 - Max 2.00)</h4>
                        <input type="number" min="0.01" max="2.00" step="0.02" class="form-input" name="itemStartPrice" id="itemStartPrice" value="0.01"/>
                    </div>
                    <div class="form-group">
                        <h4>End Auction</h4>
                        <input type="date" class="form-input" name="itemEndAuction" id="itemEndAuction"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="register" class="form-submit" value="Register Item"/>
                    </div>
                </div>
            </div>
        </section>

    </div>

    @include('sellroom/script-shop')
    <script src="{{URL::asset('js/upload.js')}}"></script>
    <script type="text/javascript">
        
        var itemID = document.querySelector('#itemID');
        var itemName = document.querySelector('#itemName');
        var itemDesc = document.querySelector('#itemDesc');
        var itemImage = document.querySelector('#itemImage');
        var itemStartPrice = document.querySelector('#itemStartPrice');
        var itemEndAuction = document.querySelector('#itemEndAuction');
        var register = document.querySelector('#register');
        let accountAddress = null;
        web3 = new Web3(window.web3.currentProvider);
        const Auction = new web3.eth.Contract(abiInterface,contractAddress);

        window.addEventListener('load', () => {
            web3.eth.getAccounts().then(accounts => {
                accountAddress = accounts[0];
                Auction.methods.isRegistered(String(accountAddress)).call().then(res => {
                    if (!res){
                        alert('Your account not Register yet\nRedirecting to Signup...');
                        window.location.replace('http://localhost:8000/sellroom/account/register');
                    }
                });
            });

            Auction.methods.getAuctionCount().call().then(res => {
                itemID.value = res;
            });

            register.addEventListener('click', () => {
                if(itemName.value == ''){
                    itemName.focus();
                    itemName.style.transition = 'all 1s';
                    itemName.style.background = 'rgb(255,100,100)';

                    setTimeout( function(){
                        itemName.style.background = 'white';
                    }, 1000 );
                }else if(itemDesc.value == ''){
                    itemDesc.focus();
                    itemDesc.style.transition = 'all 1s';
                    itemDesc.style.background = 'rgb(255,100,100)';

                    setTimeout( function(){
                        itemDesc.style.background = 'white';
                    }, 1000 );
                }else if(itemImage.value == ''){
                    itemImage.focus();
                    itemImage.style.transition = 'all 1s';
                    itemImage.style.background = 'rgb(255,100,100)';

                    setTimeout( function(){
                        itemImage.style.background = 'white';
                    }, 1000 );
                }else if(itemEndAuction.value == ''){
                    itemEndAuction.focus();
                    itemEndAuction.style.transition = 'all 1s';
                    itemEndAuction.style.background = 'rgb(255,100,100)';

                    setTimeout( function(){
                        itemEndAuction.style.background = 'white';
                    }, 1000 );
                }else{
                    var a = itemImage.value.split("\\");
                    var itemImageName = a[2];
                    var deadLineTS = new Date(itemEndAuction.value) / 1000;
                    var val = web3.utils.toWei(itemStartPrice.value, 'ether');
                    Auction.methods.createAuction(itemName.value,itemDesc.value,itemImageName,deadLineTS,val).send({
                        from : accountAddress,
                        gas : 0,
                        gasPrice : 1
                    }).then(function (){
                        Auction.methods.getAuctionCount().call().then(res => {
                            if(res != itemID.value){
                                alert('Your item has been registered \nRedirecting to Sellroom...');
                                window.location.replace('http://localhost:8000/sellroom/product');
                            }
                        });
                    })

                }
            });
        });
    </script>
</body>
</html>