$("#open").click(function(){
    //alert("!!");
    $.ajax({url:"open.php",success:function(result){
        alert(result);
    }});
});