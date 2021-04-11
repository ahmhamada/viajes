$(function () {
    // datepicker
    $('#sandbox-container input').datepicker({
      keyboardNavigation: false,
      forceParse: false,
      autoclose: true,
      todayHighlight: true
    });

    var values = {};
    $('#myForm').submit(function (e) {
      if(checkErrors()) {
        e.preventDefault()
        $('#username, #email, #phone, #nationality').blur()
      }
      // console.log($('myForm'))
      // $('input.timepicker').timepicker();
      // $("#getdate").on('click', function () {
      //   $("#time").text($("#timepicker").val())
      // })
    });

    var adultsValue = parseInt($('#adultsValue').text());
    var kidsValue = parseInt($('#kidsValue').text());
    $('#adultsMinus').click(function () {
      if (adultsValue == 0) return;
      adultsValue--;
      $('#adultsValue').text(adultsValue);
    })

    $('#adultsPlus').click(function () {
      adultsValue++;
      $('#adultsValue').text(adultsValue);
    })

    $('#kidsMinus').click(function () {
      if (kidsValue == 0) return;
      kidsValue--;
      $('#kidsValue').text(kidsValue);
    })

    $('#kidsPlus').click(function () {
      kidsValue++;
      $('#kidsValue').text(kidsValue);
    })


    var userError = true,
        emailError = true
        phoneError = true
        nationalityError = true
        // startError = true
        // endError = true

    function checkErrors() {
      // if(userError === true || emailError === true || phoneError === true|| nationalityError === true || startError === true || endError === true) {
      if(userError === true || emailError === true || phoneError === true|| nationalityError === true) {
        return true
      } else {
        return false
      }
    }

    checkErrors()

    $('#username').blur(function () {
      if($(this).val() === '') {
        $(this).parent().find('.custom-alert').fadeIn(200) 
        userError = true
      } else {
        $(this).parent().find('.custom-alert').fadeOut(200) 
        userError = false
      }
      checkErrors()
    })

    $('#email').blur(function () {
      if($(this).val() === '') {
        $(this).parent().find('.custom-alert').fadeIn(200) 
        emailError = true
      } else {
        $(this).parent().find('.custom-alert').fadeOut(200) 
        emailError = false
      }
      checkErrors()
    })

    $('#phone').blur(function () {
      if($(this).val() === '') {
        $(this).parent().find('.custom-alert').fadeIn(200) 
        phoneError = true
      } else {
        $(this).parent().find('.custom-alert').fadeOut(200) 
        phoneError = false
      }
      checkErrors()
    })

    $('#nationality').blur(function () {
      if($(this).val() === '') {
        $(this).parent().find('.custom-alert').fadeIn(200) 
        nationalityError = true
      } else {
        $(this).parent().find('.custom-alert').fadeOut(200) 
        nationalityError = false
      }
      checkErrors()
    })

    // $('#start').blur(function () {
    //   if($(this).val() === '') {
    //     $(this).parent().find('.custom-alert').fadeIn(200) 
    //     startError = true
    //   } else {
    //     $(this).parent().find('.custom-alert').fadeOut(200) 
    //     startError = false
    //   }
    //   checkErrors()
    // })

    // $('#end').blur(function () {
    //   if($(this).val() === '') {
    //     $(this).parent().find('.custom-alert').fadeIn(200) 
    //     endError = true
    //   } else {
    //     $(this).parent().find('.custom-alert').fadeOut(200) 
    //     endError = false
    //   }
    //   checkErrors()
    // })

})
