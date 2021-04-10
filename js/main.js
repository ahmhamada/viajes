$(function () {
    // datepicker
    $('#sandbox-container input').datepicker({
      keyboardNavigation: false,
      forceParse: false,
      autoclose: true,
      todayHighlight: true
    });

    var values = {};
    $('#myForm').bind('submit', function () {
      console.log($('myForm'))
      $('input.timepicker').timepicker();
      $("#getdate").on('click', function () {
        $("#time").text($("#timepicker").val())
      })
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
})
