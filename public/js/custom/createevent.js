$("input[id=target_audience]").change(function(){
        var max= 3;
        if( $("input[id=target_audience]:checked").length == max ){
            $("input[id=target_audience]").attr('disabled', 'disabled');
            $("input[id=target_audience]:checked").removeAttr('disabled');
        }else{
         $("input[id=target_audience]").removeAttr('disabled');
     }
 })

    $("input[id=event_types]").change(function(){
        var max= 3;
        if( $("input[id=event_types]:checked").length == max ){
            $("input[id=event_types]").attr('disabled', 'disabled');
            $("input[id=event_types]:checked").removeAttr('disabled');
        }else{
         $("input[id=event_types]").removeAttr('disabled');
     }
 })
    $("#no_presence").click(function () {
    if ($(this).prop('checked') === true) {
        $('.presenceTable').hide();
    } 
    if ($(this).prop('checked') === false) {
        $('.presenceTable').show();
    } 
})