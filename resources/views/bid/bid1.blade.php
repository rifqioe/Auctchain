<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.2.3/milligram.min.css">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<style>
   * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
     }
     ::-webkit-scrollbar {
         width: 0 !important;
     }
 </style>

<body class="container" style="padding-top: 3%;">
  <h2><a href="index.html">AUCTCHAIN</a></h2>
  <h6 style="margin-top: -25px">Simple Auction With Blockchain</h6>

  <hr />

  <div class="row">
    <div class="column">
      <label>Beneficiary</label>
      <blockquote>
        <p><em id="beneficiary">Loading..</em><br /><br /></p>
      </blockquote>
    </div>
    <!-- <div class="column">
            <label>Raised</label>
            <blockquote>
                <p><em><span id="raised">Loading..</span><br />ETH</em></p>
            </blockquote>
        </div>
        <div class="column">
            <label>Timeleft</label>
            <blockquote>
                <p><em id="timeleft">Loading..</em><br />seconds</p>
            </blockquote>
        </div> -->
    <div class="column">
      <label>Highest Bidder</label>
      <blockquote>
        <p><em><span id="highest-bidder-show"></span><br />
            <span id="highest-bid-show"></span> ETH</em></p>
      </blockquote>
    </div>
    <div class="column">
      <label>Your Account<label>
          <blockquote>
            <p><em id="address-bidder-show">Loading..</em><br /><br /></p>
          </blockquote>
    </div>
    <div class="column">
      <label>Balance</label>
      <blockquote>
        <p><em id="balance-show">Loading..</em><br />ETH</p>
      </blockquote>
    </div>
  </div>
  <div class="row" id="auction-form" style="max-width: 400px;display: none;">
    <div class="column">
      <br><input id="nama-bidder" placeholder="Nama" type="text" />
      <br><input id="email-bidder" placeholder="Email" type="text" />
      <br><input id="telepon-bidder" placeholder="Nomor Telepon" type="text" />
      <br><input id="bid-value" placeholder="Value Bid Anda" type="text" />
      <br><button id="bid-btn" class="btn">BID</button>
    </div>
  </div>
  <script src="{{URL::asset('js/web3.min.js')}}"></script>
  <script>
    // Refresh hack
    window.onfocus = () => {
      window.location.reload();
    }
    // Membuat variable global untuk menampung account address
    let accountAddress = null;

    const addressBidder = document.querySelector('#address-bidder-show');
    const highestBidder = document.querySelector('#highest-bidder-show');
    const highestBid = document.querySelector('#highest-bid-show');
    const balanceBidder = document.querySelector('#balance-show');
    const beneficiaryAddr = document.querySelector('#beneficiary');

    window.addEventListener('load', () => {
      web3 = new Web3(window.web3.currentProvider);
      if (typeof window.web3 !== 'undefined' && typeof window.web3.currentProvider !== 'undefined') {
        web3.eth.setProvider(window.web3.currentProvider);
      } else {
        web3.eth.setProvider(provider); // set to TestRPC if not available
      }
      web3.eth.getAccounts().then(accounts => {
        addressBidder.innerHTML = accounts[0].substr(0, 16);
        // memunculkan form donasi setelah account address didapatkan
        accountAddress = accounts[0];
        // document.querySelector('#auction-form').style.display = 'inherit';

        web3.eth.getBalance(accounts[0]).then(res => {
          balanceBidder.innerHTML = web3.utils.fromWei(res, 'ether');
        });
      });

      const contractAddress = '0xc3a9731111354c253b39c7b4c2f50742dd9abe9b';
      const abiInterface = [
    {
      "constant": true,
      "inputs": [
        {
          "name": "",
          "type": "uint256"
        }
      ],
      "name": "highestBidder",
      "outputs": [
        {
          "name": "",
          "type": "address"
        }
      ],
      "payable": false,
      "stateMutability": "view",
      "type": "function"
    },
    {
      "constant": true,
      "inputs": [
        {
          "name": "",
          "type": "uint256"
        }
      ],
      "name": "beneficiary",
      "outputs": [
        {
          "name": "",
          "type": "address"
        }
      ],
      "payable": false,
      "stateMutability": "view",
      "type": "function"
    },
    {
      "constant": true,
      "inputs": [
        {
          "name": "",
          "type": "uint256"
        }
      ],
      "name": "highestBid",
      "outputs": [
        {
          "name": "",
          "type": "uint256"
        }
      ],
      "payable": false,
      "stateMutability": "view",
      "type": "function"
    },
    {
      "inputs": [],
      "payable": false,
      "stateMutability": "nonpayable",
      "type": "constructor"
    },
    {
      "anonymous": false,
      "inputs": [
        {
          "indexed": false,
          "name": "bidder",
          "type": "address"
        },
        {
          "indexed": false,
          "name": "amount",
          "type": "uint256"
        }
      ],
      "name": "HighestBidIncreased",
      "type": "event"
    },
    {
      "anonymous": false,
      "inputs": [
        {
          "indexed": false,
          "name": "winner",
          "type": "address"
        },
        {
          "indexed": false,
          "name": "amount",
          "type": "uint256"
        }
      ],
      "name": "AuctionEnded",
      "type": "event"
    },
    {
      "constant": true,
      "inputs": [
        {
          "name": "n",
          "type": "uint256"
        }
      ],
      "name": "getBeneficiary",
      "outputs": [
        {
          "name": "",
          "type": "address"
        }
      ],
      "payable": false,
      "stateMutability": "view",
      "type": "function"
    },
    {
      "constant": true,
      "inputs": [
        {
          "name": "n",
          "type": "uint256"
        }
      ],
      "name": "getHighestBidder",
      "outputs": [
        {
          "name": "",
          "type": "address"
        }
      ],
      "payable": false,
      "stateMutability": "view",
      "type": "function"
    },
    {
      "constant": true,
      "inputs": [
        {
          "name": "n",
          "type": "uint256"
        }
      ],
      "name": "getHighestBid",
      "outputs": [
        {
          "name": "",
          "type": "uint256"
        }
      ],
      "payable": false,
      "stateMutability": "view",
      "type": "function"
    },
    {
      "constant": true,
      "inputs": [
        {
          "name": "n",
          "type": "uint256"
        },
        {
          "name": "o",
          "type": "uint256"
        }
      ],
      "name": "getBidderList",
      "outputs": [
        {
          "name": "",
          "type": "string"
        },
        {
          "name": "",
          "type": "string"
        },
        {
          "name": "",
          "type": "string"
        }
      ],
      "payable": false,
      "stateMutability": "view",
      "type": "function"
    },
    {
      "constant": false,
      "inputs": [
        {
          "name": "n",
          "type": "uint256"
        },
        {
          "name": "o",
          "type": "uint256"
        },
        {
          "name": "_name",
          "type": "string"
        },
        {
          "name": "_email",
          "type": "string"
        },
        {
          "name": "_phoneNumber",
          "type": "string"
        }
      ],
      "name": "bid",
      "outputs": [],
      "payable": true,
      "stateMutability": "payable",
      "type": "function"
    },
    {
      "constant": false,
      "inputs": [
        {
          "name": "n",
          "type": "uint256"
        }
      ],
      "name": "withdraw",
      "outputs": [
        {
          "name": "",
          "type": "bool"
        }
      ],
      "payable": false,
      "stateMutability": "nonpayable",
      "type": "function"
    },
    {
      "constant": false,
      "inputs": [
        {
          "name": "n",
          "type": "uint256"
        }
      ],
      "name": "auctionEnd",
      "outputs": [],
      "payable": true,
      "stateMutability": "payable",
      "type": "function"
    }
  ];
      var next;
      const Auction = new web3.eth.Contract(abiInterface, contractAddress);
      var auctionInterval = setInterval(function updateAuctionHTML() {
        Auction.methods.getHighestBidder(0).call().then(res => {
          if (res == 0x00000000000000000000000000000000) highestBidder.innerHTML =
            'Not Yet Bidded';
          else highestBidder.innerHTML = res;
        });

        Auction.methods.getHighestBid(0).call().then(res => {
          highestBid.innerHTML = res.substr(0, 16);
        });
        var i;
        // for (i = 0; i < 20; i++) {
        Auction.methods.getBeneficiary(0).call().then(res => {
          if (res == accountAddress) {
            beneficiaryAddr.innerHTML = 'You are beneficiary';
            document.querySelector('#auction-form').style.display = 'none';
          } else {
            beneficiaryAddr.innerHTML = res.substr(0, 16);
            document.querySelector('#auction-form').style.display = 'flex';
          }
        });
        // }
      }, 1);

      // seleksi input dan button
      const bidVal = document.querySelector('#bid-value');
      const bidBtn = document.querySelector('#bid-btn');
      
      // menambahkan listener click pada button donate
      bidBtn.addEventListener('click', () => {
        // mengambil value jumlah ether yang akan didonasikan dalam string
        const nama = document.querySelector("#nama-bidder").value;
        const email = document.querySelector("#email-bidder").value;
        const telepon = document.querySelector("#telepon-bidder").value;
        const bidValue = bidVal.value;
        // menjalankan method donate dengan mengirimkan sejumlah ether
        // kita harus format satuan dari ether ke wei

        Auction.methods.bid(0,1, nama, email, telepon).send({
          value: web3.utils.toWei(bidValue, 'ether'),
          from: accountAddress,
        });
      });
    });
  </script>
</body>

</html>