(function($){
    $(document).ready(function(){
        $(document).on('click', '#logout_btn', function(e){
        e.preventDefault();
          $('#logout_form').submit();  
        })
    })
})(jQuery)