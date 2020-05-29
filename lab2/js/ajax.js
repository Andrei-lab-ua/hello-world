function getPo(){
    $.ajax({
        converters: {
            "text xml": function(data){return data}
        },
        type: "GET",
        url: "po.php",
        data: {
            po: $('[name="po"]').val(),
        },
        success: function(result){
            $('#result2').html('');
            $(result).find('name').each(function(){
                $('#result2').append('<li>'+ $(this).text() + '</li>');
            });
        }
    });
}
function getProc(){
    $.ajax({
        converters: {
            "text json": jQuery.parseJSON
        },
        type: "GET",
        url: "proc.php",
        data: {proc: $('[name="proc"]').val()},
        success: function(result){
            $('#result1').html('<li>'+ result + '</li>');
        }
    });
}
function getNo(){
    $.ajax({
        type: "GET",
        url: "no.php",
        success: function(result){
            $('#result3').html(result);
        }
    });
}