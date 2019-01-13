pragma solidity ^0.4.24;

contract AuctchainHouse {
    
    struct Bid {
        address bidder;
        uint amount;
        uint timestamp;
    }
    
    struct PersonInfo{
        string  name;
        string  email;
        string  contact;
        string  homeAddress;
        bool status;
    }
    
    enum AuctionStatus {Pending, Active, Inactive}
    
    struct Auction {
        // Location and ownership information of the item for sale
        uint id;
        address seller;
        
        // Auction metadata
        string title;
        string description;
        string link;
        // uint blockNumberOfDeadline;
        // Pricing
        uint256 startingPrice;
        uint256 currentBid;
        uint registeredDate;
        AuctionStatus status;
        
        Bid[] bids;
    }
    
    Auction[] public auctions; // All created auctions
    
    mapping(address => PersonInfo) registeredUser;
    mapping(address => uint[]) public auctionsRunByUser; // Pointer to auctions index for auctions run by this user
    mapping(address => uint[]) public auctionsBidOnByUser; // Pointer to auctions index for auctions this user has bid on
    mapping(address => uint) refunds;
    
    // Events
    event AccountRegistered(string name, string email, string contact);
    event AuctionCreated(uint id, string title, uint256 startingPrice);
    event BidPlaced(uint auctionId, address bidder, uint256 amount);
    event AuctionEndedWithWinner(uint auctionId, address winningBidder, uint256 amount);
    event AuctionEndedWithoutWinner(uint auctionId, uint256 topBid);
    
    function register(
        address _addresses,
        string  _name,
        string  _email,
        string  _contact,
        string  _homeAddress) public {
            
        registeredUser[_addresses] = PersonInfo(_name,_email,_contact,_homeAddress,true);
        emit AccountRegistered(_name, _email, _contact);
    }

    function isRegistered(address addr) public view returns (bool) {
        return registeredUser[addr].status;
    }

    function getRegisteredData(address addressVal) public view returns (string , string , string , string){
        require(registeredUser[addressVal].status);
        return (
            registeredUser[addressVal].name,
            registeredUser[addressVal].email,
            registeredUser[addressVal].contact,
            registeredUser[addressVal].homeAddress);
    }
    
    function createAuction(
        string  _title,
        string  _description,
        string  _link,
        // uint _deadline,
        uint256 _startingPrice) public returns (uint auctionId) {
        
        require(registeredUser[msg.sender].status);
    
        auctionId = auctions.length++;
        Auction storage a = auctions[auctionId];
        a.id = auctions.length;
        a.seller = msg.sender;
        a.title = _title;
        a.description = _description;
        a.link = _link;
        a.registeredDate = now;
        // a.blockNumberOfDeadline = _deadline;
        a.status = AuctionStatus.Active;
        a.startingPrice = _startingPrice;
        a.currentBid = _startingPrice;
        
        auctionsRunByUser[a.seller].push(auctionId);
        
        emit AuctionCreated(auctionId, a.title, a.startingPrice);
    }
    
    function getAuction(uint idx) public view returns (
        uint,
        address,
        string ,
        string ,
        string ,
        // uint,
        uint256,
        uint256,
        uint) {
        
        Auction storage a = auctions[idx];
        require(a.seller != address(0));
        
        return (
            a.id,
            a.seller,
            a.title,
            a.description,
            a.link,
            // a.blockNumberOfDeadline,
            a.startingPrice,
            a.currentBid,
            a.bids.length);
    }
    
    function getAuctionCount() public view returns (uint) {
        return auctions.length;
    }

    function isRegisterAuction(uint idx) public view returns (bool) {
        return (idx <= auctions.length);
    }
    
    function getStatus(uint idx) public view returns (uint) {
        Auction storage a = auctions[idx];
        return uint(a.status);
    }

    function getAuctionsCountForUser(address addr) public view returns (uint) {
        return auctionsRunByUser[addr].length;
    }

    function getAuctionIdForUserAndIdx(address addr, uint idx) public view returns (uint) {
        return auctionsRunByUser[addr][idx];
    }
    
    function getBidCountForUser(address addr) public view returns (uint) {
        return auctionsBidOnByUser[addr].length;
    }

    function getBidCountForAuction(uint auctionId) public view returns (uint) {
        Auction storage a = auctions[auctionId];
        return a.bids.length;
    }
    
    function getBidForAuctionByIdx(uint auctionId, uint idx) public view returns (address bidder, uint256 amount, uint timestamp) {
        Auction storage a = auctions[auctionId];
        require(idx <= a.bids.length - 1);

        Bid storage b = a.bids[idx];
        return (b.bidder, b.amount, b.timestamp);
    }
    
    function placeBid(uint auctionId) public payable returns (bool success) {
        require(registeredUser[msg.sender].status);
        uint256 amount = msg.value;
        Auction storage a = auctions[auctionId];

        // require(now < a.blockNumberOfDeadline);
        require(a.currentBid < amount);

        uint bidIdx = a.bids.length;
        Bid storage b = a.bids[bidIdx];
        b.bidder = msg.sender;
        b.amount = amount;
        b.timestamp = now;
        a.currentBid = amount;

        auctionsBidOnByUser[b.bidder].push(auctionId);

        // Log refunds for the previous bidder
        if (bidIdx > 1) {
            Bid storage previousBid = a.bids[bidIdx - 1];
            refunds[previousBid.bidder] += previousBid.amount;
        }

        emit BidPlaced(auctionId, b.bidder, b.amount);
        return true;
    }
    
    function getRefundValue() public view returns (uint) {
        return refunds[msg.sender];
    }

    function withdrawRefund() public {
        uint refund = refunds[msg.sender];
        refunds[msg.sender] = 0;
        if (!msg.sender.send(refund))
            refunds[msg.sender] = refund;
    }
    
    function endAuction(uint auctionId) public returns (bool success) {
        Auction storage a = auctions[auctionId];

        // Make sure auction hasn't already been ended
        require(a.status == AuctionStatus.Active);
        
        //require(block.number >= a.blockNumberOfDeadline); // Still learn more about this

        // No bids, make the auction inactive
        if (a.bids.length == 0) {
            a.status = AuctionStatus.Inactive;
            return true;
        }

        Bid storage topBid = a.bids[a.bids.length - 1];

        // If the auction hit its reserve price
        // if (a.currentBid >= a.reservePrice) {
            // emit AuctionEndedWithWinner(auctionId, topBid.bidder, a.currentBid);
        // } else {
            // Return the item to the owner and the money to the top bidder
            refunds[topBid.bidder] += a.currentBid;
            // emit AuctionEndedWithoutWinner(auctionId, a.currentBid, a.reservePrice);
        // }

        a.status = AuctionStatus.Inactive;
        return true;
    }
    
    function getTopBidder(uint auctionId) public returns(address){
        Auction storage a = auctions[auctionId];

        // Make sure auction hasn't already been ended
        require(a.status == AuctionStatus.Active);
        require(a.bids.length > 0);
        return a.bids[a.bids.length].bidder;
    }

    // function strConcat(string  _a, string  _b) internal pure returns (string ) {
    //     bytes storage _ba = bytes(_a);
    //     bytes storage _bb = bytes(_b);
    //     bytes storage ab = new bytes (_ba.length + _bb.length);
    //     uint i = 0;
    //     uint k = 0;
    //     for (i = 0; i < _ba.length; i++) ab[k++] = _ba[i];
    //     for (i = 0; i < _bb.length; i++) ab[k++] = _bb[i];
    //     return string (ab);
    // }

    // function addrToString(address x) public pure returns (string ) {
    //     bytes storage b = new bytes(20);
    //     for (uint i = 0; i < 20; i++)
    //         b[i] = byte(uint8(uint(x) / (2**(8*(19 - i)))));
    //     return string(b);
    // }
    
}