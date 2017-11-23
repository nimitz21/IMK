$$(document).ready(function(){
    //Listen for a click on any of the dropdown items
    $(".category li").click(function(){
        //Get the value
        var value = $(this).attr("value");
        //Put the retrieved value into the hidden input
        $("input[name='category']").val(value);
    });
});
