function showProductItems(){  
    $.ajax({
        url:"./adminView/viewAllProducts.php",
        method:"post",
        data:{record:1},
        async: true,
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
    console.log($('form'));
}
function addItems(){
        var p_name=$('#name').val();
        var p_price=$('#price').val();
        var p_brand=$('#brand').val();
        var category=$('#category').val();
        var upload=$('#upload').val();
        var file=$('#image')[0].files[0];

        var fd = new FormData();
        fd.append('p_name', p_name);
        fd.append('p_price', p_price);
        fd.append('p_brand', p_brand);
        fd.append('category', category);
        fd.append('file', file);
        fd.append('upload', upload);
        console.log(fd);
        console.log("Submitting form");
        $.ajax({
            url:"./controller/addItemController.php",
            method:"post",
            data:fd,
            processData: false,
            contentType: false,
            success: function(data){
                console.log("Form submitted successfully");
                alert('Product Added successfully.');
                $('form').trigger('reset');
                showProductItems();
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log("Error submitting form: " + textStatus + " " + errorThrown);
            }
        });
}

function itemDelete(id){
    $.ajax({
        url:"./controller/deleteItemController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Items Successfully deleted');
            $('form').trigger('reset');
            showProductItems();
        }
    });
}

function showOrders(){
    $.ajax({
        url:"./adminView/viewAllOrders.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function ChangeOrderStatus(id){
    $.ajax({
       url:"./controller/updateOrderStatus.php",
       method:"post",
       data:{record:id},
       success:function(data){
           alert('Order Status updated successfully');
           $('form').trigger('reset');
           showOrders();
       }
   });
}

function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";  
    document.getElementById("main-content").style.marginLeft = "250px";
    document.getElementById("main").style.display="none";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";  
    document.getElementById("main").style.display="block";  
  }