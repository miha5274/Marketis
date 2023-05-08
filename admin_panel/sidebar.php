<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <h3>Marketis</h3>
</div>
<script>
    function showLogo(){  
    $.ajax({
        url:"./adminView/viewAllLogo.php",
        method:"post",
        data:{record:1},
        async: true,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });    
}
    function showEmails(){  
    $.ajax({
        url:"./adminView/viewAllEmails.php",
        method:"post",
        data:{record:1},
        async: true,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
</script>
<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="#products"   onclick="showProductItems()" ><i class="fa fa-th-list"></i> Products</a>
    <a href="#orders" onclick="showOrders()"><i class="fa fa-th-list"></i> Orders</a>
    <a href="#logo"   onclick="showLogo()" ><i class="fa fa-th-list"></i> Logo</a>
    <a href="#emails"   onclick="showEmails()" ><i class="fa fa-th-list"></i> Emails</a>        
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>
