$(function () {
    // datepicker
    $('#sandbox-container input').datepicker({
      keyboardNavigation: false,
      forceParse: false,
      autoclose: true,
      todayHighlight: true
    });

    $('#myForm').submit(function (e) {
      if(checkErrors()) {
        e.preventDefault()
        $('#username, #email, #phone, #nationality').blur()
      } 
    });


    var start = new Date();
    // set end date to max one year period:
    var end = new Date(new Date().setYear(start.getFullYear()+1));

    $('#start').datepicker({
      startDate : start,
      endDate   : end
  // update "toDate" defaults whenever "fromDate" changes
  }).on('changeDate', function(){
      // set the "toDate" start to not be later than "fromDate" ends:
      $('#end').datepicker('setStartDate', new Date($(this).val()));
  }); 
  
  $('#end').datepicker({
      startDate : start,
      endDate   : end
  // update "fromDate" defaults whenever "toDate" changes
  }).on('changeDate', function(){
      // set the "fromDate" end to not be later than "toDate" starts:
      $('#start').datepicker('setEndDate', new Date($(this).val()));
  });
  

    var adultsValue = parseInt($('#adultsValue').val());
    var kidsValue = parseInt($('#kidsValue').val());
    $('#adultsMinus').click(function () {
      if (adultsValue == 0) return;
      adultsValue--;
      $('#adultsValue').val(adultsValue);
    })

    $('#adultsPlus').click(function () {
      adultsValue++;
      $('#adultsValue').val(adultsValue);
    })

    $('#kidsMinus').click(function () {
      if (kidsValue == 0) return;
      kidsValue--;
      $('#kidsValue').val(kidsValue);
    })

    $('#kidsPlus').click(function () {
      kidsValue++;
      $('#kidsValue').val(kidsValue);
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
