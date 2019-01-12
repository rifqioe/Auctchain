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
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
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
                            <input type="file" class="form-input" name="itemImage" id="itemImage"/>
                        </div>
                        <div class="form-group">
                            <h4>Item Start Bid (Min 0.01 - Max 2.00)</h4>
                            <input type="number" min="0.01" max="2.00" step="0.02" class="form-input" name="itemStartPrice" id="itemStartPrice" placeholder="0.01"/>
                        </div>
                        <div class="form-group">
                            <h4>End Auction</h4>
                            <input type="date" class="form-input" name="itemEndAuction" id="itemEndAuction"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="register" class="form-submit" value="Register Item"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>