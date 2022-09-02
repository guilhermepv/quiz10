// if($(window).width() > 978){
//   var scene = document.getElementById('scene');
//   var parallaxInstance = new Parallax(scene); 
// }

$(document).ready(function () {

  setTimeout(() => {        
    $('body').addClass('active');   
    $('.loading').fadeOut();
     //AOS.init();
  },1);
  
  $('.select2-time').select2({
    placeholder: "TIME BRASILEIRO",
    allowClear: true
  });

  $("#formCupom").validate({
    rules: rules_questions,
    invalidHandler: function(event, validator) {
      var errors = validator.numberOfInvalids();
      if (errors) {
        var message = errors == 1
          ? 'Ficou faltando apenas 1 campo. Todos os campos devem ser preenchidos.'
          : 'Verifique se todas as perguntas foram respondidas.';
        $("div.errordiv p").html(message);
        $("div.errordiv").show();

        setTimeout(() => {        
          $('div.errordiv').fadeOut('active');   
        },8000);
      } else {
        $("div.errordiv").hide();
      }
    },
    submitHandler: function(form) {
      $.ajax({
          url: "sendForm.php",
          type: "POST",
          data: $(form).serialize(),
          dataType: 'json',
          beforeSend: function(){
            $('.loading').fadeIn('fast');
          },
          success: function(data) {            
            $('.box-form').fadeOut('fast', function(){
              $('#result').html(data.result);
              $('#result').fadeIn('fast', function(){
                $('html,body').animate({scrollTop: $("#result").offset().top},'slow');
              });
            });
            $('.loading').fadeOut('fast');         
          }
      });
      return false;
    }
});
 


});
