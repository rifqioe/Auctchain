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
                    <!-- <form method="POST" id="signup-form" class="signup-form"> -->
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Address" disabled/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="personName" placeholder="Name" minlength="2" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="handphone" id="handphone" placeholder="Phone Number" maxlength="13" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="homeAddress" id="homeAddress" placeholder="Home Address" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="input" style="display: inline;" name="agree" id="agree" required><span style="font-size: 12px">You will agree our term and condition (It will charge a little bit of Ether)</span></input>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="registerUser" class="form-submit" value="Sign up"/>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </section>
    </div>
    @include('sellroom/script-shop')
    <script type="text/javascript">
        var address = document.querySelector('#address');
        var registerUser = document.querySelector('#registerUser');

        var personName = document.querySelector('#personName');
        var email = document.querySelector('#email');
        var handphone = document.querySelector('#handphone');
        var homeAddress = document.querySelector('#homeAddress');
        var agree = document.querySelector('#agree');
        web3 = new Web3(window.web3.currentProvider);
        const Auction = new web3.eth.Contract(abiInterface,contractAddress);

        window.addEventListener('load', () => {
            web3.eth.getAccounts().then(accounts => {
                accountAddress = accounts[0];
                if(address != null)
                    Auction.methods.isRegistered(String(accountAddress)).call().then(res => {
                        if (res){
                            alert('Your account already registered\nRedirecting to Account Info...');
                            window.location.replace('http://localhost:8000/sellroom/account');
                        } else {
                            address.value = accountAddress;
                        }
                });
            });
            registerUser.addEventListener('click', () => {
                if(personName.value == ''){
                    personName.focus();
                    personName.style.transition = 'all 1s';
                    personName.style.background = 'rgb(255,100,100)';

                    setTimeout( function(){
                        personName.style.background = 'white';
                    }, 1000 );

                }else if(email.value == ''){
                    email.focus();
                    email.style.transition = 'all 1s';
                    email.style.background = 'rgb(255,100,100)';

                    setTimeout( function(){
                        email.style.background = 'white';
                    }, 1000 );
                }else if(handphone.value == ''){
                    handphone.focus();
                    handphone.style.transition = 'all 1s';
                    handphone.style.background = 'rgb(255,100,100)';

                    setTimeout( function(){
                        handphone.style.background = 'white';
                    }, 1000 );
                }else if(homeAddress.value == ''){
                    homeAddress.focus();
                    homeAddress.style.transition = 'all 1s';
                    homeAddress.style.background = 'rgb(255,100,100)';

                    setTimeout( function(){
                        homeAddress.style.background = 'white';
                    }, 1000 );
                }else if(!agree.checked){
                    alert("You must check the term and condition!");
                }else{
                    Auction.methods.register(personName.value, email.value, handphone.value, homeAddress.value).send({
                        from : address.value,
                        gas : 0,
                        gasPrice : 1
                    }).then(function (){
                        Auction.methods.isRegistered(String(accountAddress)).call().then(res => {
                            if (res){
                                alert('Your account has been registered \nRedirecting to Account...');
                                window.location.replace('http://localhost:8000/sellroom/account');
                            }
                        });
                    })
                }
            });
        });
    </script>
</body>

</html>