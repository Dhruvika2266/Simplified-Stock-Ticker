$(document).ready(function() {

    //Login via ajax
    $('#login').click(function(e){
        e.preventDefault();
        //get the values
        var username = $('#loginusername').val();
        var password = $('#loginpassword').val();
   
        //validate the form
        if(username == '' || password == ''){
            $('.msg').text('Please fill the form');
        }else{
            $('.msg').html("loading");      
            //jQuery ajax post method with 
            $.post('checklogin.php', {username:username, password:password}, function(resp){
                if(resp == "done"){
                    location.href = 'homepage.php';
                }else{
                    $('.msg').html('Invalid Email or Password');      
                }
            });  
        }
    });
    //register via ajax
    $('#register').click(function(e){
        e.preventDefault();
        //get the values
        var username = $('#regusername').val();
        var password = $('#regpassword').val();
   
        //validate the form
        if(username == '' || password == ''){
            $('.msg').text('Please fill the form');
        }else{
            $('.msg').html("loading");      
            //jQuery ajax post method with 
            $.post('register.php', {username:username, password:password}, function(resp){
                if(resp == "done"){
                    location.href = 'homepage.php';
                }else{
                    $('.msg').html(resp);      
                }
            });  
        }
    });

    // live stock

    if($('.load-new-updates').length) {
        let last_id;
        $.get("stock_api.php", function(data, status){
            if(status != 'success') {
                alert('AN ERROR OCCURED');
                return;
            }
            data = JSON.parse(data)
            last_id = data[0]['StockId'];
            data.map(function(item) {
                let genData = "<tr>";
                genData += "<td>"+item['StockId']+"</td>"
                genData += "<td>"+item['StockName']+"</td>"
                genData += "<td>"+item['CurrentPrice']+"</td>"
                genData += "<td>"+item['UpdateDateTime']+"</td>"
                genData += "</tr>"
                $('.load-new-updates').append(genData);
            })
        });
        $('.update-list').click(function(e) {
            e.preventDefault();
            $.get("stock_api.php?last_id="+last_id, function(data, status){
                if(status != 'success') {
                    alert('AN ERROR OCCURED');
                    return;
                }
                data = JSON.parse(data)
                last_id = data[data.length-1]['StockId'];
                data.map(function(item) {
                    let genData = "<tr>";
                    genData += "<td>"+item['StockId']+"</td>"
                    genData += "<td>"+item['StockName']+"</td>"
                    genData += "<td>"+item['CurrentPrice']+"</td>"
                    genData += "<td>"+item['UpdateDateTime']+"</td>"
                    genData += "</tr>"
                    $('.load-new-updates').prepend(genData);
                    $('.update-list-msg').hide();
                })
            });
        });
        setInterval(() => {
            if(last_id) {
                $.get("check_stock_updates.php?last_id="+last_id, function(data, status){
                    if(status != 'success') {
                        alert('AN ERROR OCCURED');
                        return;
                    }
                    if(data == 'available') {
                        $('.update-list-msg').fadeIn();
                    }else {
                        $('.update-list-msg').hide();
                    }
                });
            }
        }, 4000);
    }

    $('.btn-gen').click(function(e) {
        e.preventDefault();
        $.get('add_records.php');
        $('.btn-gen').hide();
    });
});