$(document).ready(function () {

    $('#forgotPass').click(function (e) {
        e.preventDefault();
        $('#alert_forgot_password').slideDown();
    });//slide down recovery alert

    $('.reg').click(function () {
        var href = $(this).attr('href');
        $('#loadContent').load(href);
        return false;
    });//load content with ajax

    $('#dob').datepicker({maxDate:'-15y', showButtonPanel:true, showAnim:''});//date picker using jquery-ui

    //$('#loadContent').load($('.reg:first')).attr('href');//load the first page (add_new.php)
});