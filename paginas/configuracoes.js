    function enableSpinnion() {
        $('#delete-yes-button').hide();
        $('#delete-no-button').hide();
        $('.spinnion').show();
    }
    
    function disableSpinnion() {
        $('.spinnion').show();
        $('#delete-yes-button').show();
        $('#delete-no-button').show();
    }
    
    $('#delete-yes-button').click(function(e) {
        e.preventDefault();
        enableSpinnion();
    })