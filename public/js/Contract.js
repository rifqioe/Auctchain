let accountAddress = null;

var addressBidder = document.querySelector('#accountAddress');
var addressInfo = document.querySelector('#accAddr');

window.addEventListener('load', () => {

    var addressBidder = document.querySelector('#accountAddress');
    var addressInfo = document.querySelector('#accAddr');
    var addressBalance = document.querySelector('#accBalance');

    web3 = new Web3(window.web3.currentProvider);
    web3.eth.getAccounts().then(accounts => {
    if(addressBidder != null)
        addressBidder.innerHTML = 'Hello ' + accounts[0];
    if(addressInfo != null)
        accountAddress = accounts[0];
    addressInfo.innerHTML = accountAddress;
    web3.eth.getBalance(accounts[0]).then(res => {
        addressBalance.innerHTML = web3.utils.fromWei(res, 'ether');
    });
  });

web3 = new Web3(window.web3.currentProvider);
web3.eth.getAccounts().then(accounts => {
    if(addressBidder != null)
        addressBidder.innerHTML = 'Hello ' + accounts[0];
    if(addressInfo != null)
        accountAddress = accounts[0];
    addressInfo.innerHTML = accountAddress;
});  

const Barang = new web3.eth.Contract(abiInterface,contractAddress);

  // const Barang = new web3.eth.Contract(abiInterface, contractAddress);
    //     const regist = document.querySelector('#regist-btn');
    //     const gets = document.querySelector('#get-btn');
        
    //     Barang.methods.getCurrentIndex().call().then(res => {
    //         addressBidder.innerHTML = res;
    //         // var itemName = document.querySelector('#itemListName');
    //         // var itemRow = document.querySelector('#itemListRow');
    //         for (i = 0; i < res; i ++) {
    //             Barang.methods.getInfo(i).call().then(rest => {
    //                 date = new Date(rest[4] * 1000);
    //                 datevalues = [
    //                     date.getFullYear(),
    //                     date.getMonth()+1,
    //                     date.getDate()
    //                 ];
    //               var btn = document.createElement("div");        // Create a <button> element
    //                 var t = document.createTextNode(rest[0] + " " + rest[1] + " " + rest[2] + " " + rest[3] + " " + "(" + rest[4] + ") " + datevalues + " " + rest[5] );       // Create a text node
    //                 btn.appendChild(t);                                // Append the text to <button>
    //                 document.body.appendChild(btn);
    //             });
    //         }
    //     });

    //     // console.log(i);

    //     // const item = document.querySelector('#itemList');

    //     // for(var a = 0; a < i; a++){
    //     //     // item.append("<b>a</b><br>");
    //     //     console.log("A");
    //     // }


    // regist.addEventListener('click', () => {
    //     // mengambil value jumlah ether yang akan didonasikan dalam string
    //     const nama = document.querySelector("#nama-barang").value;
    //     const desc = document.querySelector("#deskripsi-barang").value;
    //     const url = document.querySelector("#url-barang").value;
    //     var startBid = document.querySelector("#start-bid-barang").value;
    //     var endTime = document.querySelector("#end-time-barang").value;
        
    //     date = new Date(endTime) / 1000;

    //     Barang.methods.getCurrentIndex().call().then(res =>{
    //         Barang.methods.addItem(res,nama,desc,url,startBid,date).send({
    //             from : accountAddress,
    //             gas : 99999999
    //         });
    //     })

    //     // Barang.methods.getInfo(i).call().then(res => {
    //     //     console.log(res);
    //     // });

    //     Barang.methods.increment().send({
    //       from: accountAddress,
    //       gas : 99999999
    //     });

    // });
        
    // gets.addEventListener('click', () => {
    //     // mengambil value jumlah ether yang akan didonasikan dalam string
    //     const nama = document.querySelector("#nama-barang").value;
    //     const desc = document.querySelector("#deskripsi-barang").value;
    //     const url = document.querySelector("#url-barang").value;
    //     var startBid = document.querySelector("#start-bid-barang").value;
    //     var endTime = document.querySelector("#end-time-barang").value;
    //     // var i = 0;

    //     // window.location.reload();
        
    //     // Barang.methods.getInfo(0).call(function(error, result) {
    //     // console.log(result);
    // // });

    //     Barang.methods.getInfo(desc).call().then(res => {
    //         console.log(res);
    //     });    
        
    //     Barang.methods.getCurrentIndex().call().then(res => {
    //         console.log(res);
    //     });

        // window.location.reload();

    //     // Barang.methods.increment().send({
    //     //   from: accountAddress
    //     // });
        
    // });
// });