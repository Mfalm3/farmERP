/*Initialize you plugins here*/
$(document).ready(function() {
    $(".select2_single").select2({
        placeholder: "Select an Option",
        allowClear: true
    });

    $(".select2_multiple").select2({
        placeholder: "Select Options",
        allowClear: true
    });

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });

    if ($(window).width() < 992) {
        $('body').switchClass('nav-md', 'nav-sm');
    }
    $(window).resize(()=>{
        console.log($(window).width());
    if ($(window).width() < 992){
        $('body').switchClass('nav-md','nav-sm');
        }else{
        $('body').switchClass('nav-sm','nav-md');
    }
    });

});
