var slideIndex = 1;

var $ = jQuery.noConflict();
$(function() {
    var localeLang = $('html').attr('lang');

    if(localeLang == "ar") {
        if($('.latest-ads').length > 0 && $(".slick-initialized").length == 0) {
            $('.latest-ads').slick({
                centerMode: true,
                centerPadding: '80px',
                slidesToShow: 2,
                rtl: true,
                prevArrow: $("#prev"),
                nextArrow: $("#next"),
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }
    }
    else {
        if($('.latest-ads').length > 0 && $(".slick-initialized").length == 0) {
            $('.latest-ads').slick({
                centerMode: true,
                centerPadding: '80px',
                slidesToShow: 2,
                prevArrow: $("#prev"),
                nextArrow: $("#next"),
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        }
    }    
})

$(function () {
    $(".alert").slideDown(300).delay(5000).slideUp(300);

    $("#file-temp-btn").on('click', function () {
        $('.step3 #files').trigger('click');
    });

    $("#file-temp-btn-2").on('click', function () {
        $('.step3-files #second_file').trigger('click');
    });
    
    $("#place-ads-form input[name='locations']").on('click', function(){
        if($("#place-ads-form #location_all:checked").val() == 'on') {
            $("#place-ads-form #city-select").val("all").attr('disabled',true);
            $("#place-ads-form #city").val("all");
        }

        if($("#place-ads-form #location:checked").val() == 'on') {
            $("#place-ads-form #city-select").attr('disabled',false);
            let citySelected = ($("#city-selected").val()) ? $("#city-selected").val() : "all";
        
            $("#place-ads-form #city").val(citySelected);

        }
    });

    $("#arrow-select").on('click', function(elem){
        let field = $(this).attr('data-target');
        $("#" + field).trigger('click');
    })
    
   

    $('.otp-input').each(function() {
        $(this).on('keyup', function(e) {
            id = $(this).attr('data-order');
            if(e.keyCode >= 48 && e.keyCode <= 57 && id < 4 ) {
                order = parseInt(id) + 1;
                $('#digit-'+ order).focus();
                return 
            }

            if((e.keyCode === 8 || e.keyCode === 37) && id > 1) {
                order = id - 1;
                var field = $('#digit-'+ order);
                var fieldLength = field.val().length * 2;
                field.focus();
                field[0].setSelectionRange(fieldLength, fieldLength);
                return;
            }  
            
            return e.preventDefault();
            
        });

        $(this).on('keydown', function(e) {
            if (48 > e.which || e.which > 57)
                if (e.key.length === 1)
                e.preventDefault();
        });
    });

    $("#profile_pic_upload").on("click",(e)=>{
        $("#profile_pic").click();
    });

    $("#view-profile-btn").on('click', function(){
        let target = $(this).attr('data-href');
        window.location.href = target;
    });
    
    $("#verify-email-btn, #verify-mobile-btn").on('click',function(){
        var type = "email";
        var mobile = "";
        var field = document.getElementById('email');
        var receiver = field.value;
        
        if(this.id == "verify-mobile-btn") {
            type = 'mobile';
            field = document.getElementById('mobile');
            mobile = $(field).val();
            phoneNumber = $(field).val().substring(1)
            receiver = "966" + phoneNumber;
        }

        let valid = field.checkValidity();
        if(!valid) return field.focus();

        $.ajax({
            url :  base_url + "/register-verification",
            data : {
                '_token' : $('meta[name="csrf-token"]').attr('content'),
                'type' : type,
                'email' : receiver,
                'mobile' : mobile,
            },
            type : 'GET',
            dataType : 'json',
            beforeSend: function(){
                $("#loading_spinner").modal("show");
            },
        }).done(function(response) {
            if(response.success == true){
                $("#loading_spinner").modal("hide");
                $("#code-verify").val(response.code);
                $("#otp_alert_success").removeClass("d-none").show();
                setTimeout(() => {
                    $("#otp_alert_success").alert("close");
                }, 5000);
            } 

            if(response.success == false) {
                setTimeout(() => {
                    $("#loading_spinner").modal("hide");
                    $("#otp_error_message").text(response.message);
                    $("#otp_alert_fail").removeClass("d-none").show();
                    setTimeout(() => {
                        $("#otp_alert_fail").alert("close");
                    }, 5000);
                }, 1000);
            }
        });
    });

    $("#mobile_verification,#email_verification").on("keyup", elem => {
        let value = elem.target.value;
        let code = document.getElementById('code-verify').value;
        if(value.length != 4) {
            $("#otp-validation-text").addClass("d-none");
            return;
        }
        if(value != code) {
            $("#otp-validation-text").removeClass("d-none");
            return;
        }
        $("#otp-validation-text").addClass("d-none");
        let field = document.getElementById("email_verification");
        if(elem.target.id == "mobile_verification") field= document.getElementById("mobile_verification");
        if(elem.target.id == "mobile_verification") {
            $("#verify-mobile-btn").addClass("d-none");
            $("#mobile").attr("readonly", "true");
        }
        if(elem.target.id == "email_verification") {
            $("#verify-email-btn").addClass("d-none"); 
            $("#email").attr("readonly", "true");
        }

        field.classList.add("d-none");
        $("#user_information_registration").removeClass("hide__information").addClass("show__information");

    });

  
});

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("src", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var src = document.getElementById(ev.dataTransfer.getData ("src"));
    var srcParent = src.parentNode;
    var tgt = ev.currentTarget.firstElementChild;
    ev.currentTarget.replaceChild(src, tgt);
    srcParent.prepend(tgt);
}


// Spinner
var spinner = function () {
setTimeout(function () {
    if ($('#spinner').length > 0) {
    $('#spinner').removeClass('show');
    $('#header').css('position', 'fixed')
    }
}, 1);
};
spinner();

