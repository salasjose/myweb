function onBtn1_click(){
    
    $('#div-show').html('<center>กำลังโหลดข้อมูล....</center>')
    
    $.ajax({
        url: 'index.php?r=Ajax/LoadGrid',
        //dataType:'json',
        success: function(data) {
            $('#div-show').html(data);
           
        },
       
    });

    return false;
    
}

