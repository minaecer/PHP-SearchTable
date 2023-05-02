jQuery.expr[':'].contains = function(a, i, m) {
    return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
};

$(document).ready(function () {
    $("#searchTags").keyup(function(){
        var value = $("#searchTags").val();
        if(value.length==0){
	
            $("#menuFull tr").show();

        }else{
            $("#menuFull tr").hide();
            $("#menuFull tr:contains("+value+")").show();

        }

    });

});