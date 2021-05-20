
@if(Session::has('success'))
<script type="text/javascript">
$(window).on('load',function(){
    //Welcome Message (not for login page)
    function notify(message, type){
        $.growl({
            message: message
        },{
            type: type,
            allow_dismiss: true,
            label: 'Cancel',
            className: 'btn-xs btn-inverse',
            placement: {
                from: 'top',
                align: 'right'
            },
            delay: 3500,
            animate: {
                    enter: 'animated fadeInRight',
                    exit: 'animated fadeOutRight'
            },
            offset: {
                x: 50,
                y: 30
            }
        });
    };

   
        notify('{{Session::get('success')}}', 'success');
   
});

</script>
@endif