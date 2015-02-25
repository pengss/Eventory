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



  $('.next').on('click', function () {
    var current = $(this).data('currentBlock'),
    next = $(this).data('nextBlock');

    // only validate going forward. If current group is invalid, do not go further
    // .parsley().validate() returns validation result AND show errors
    if (next > current)
      if (false === $('#clickable-wizard').parsley().validate('block' + current))
        return;

    // validation was ok. We can go on next step.
    $('.block' + current)
    .removeClass('show')
    .addClass('hidden');

    $('.block' + next)
    .removeClass('hidden')
    .addClass('show');

})