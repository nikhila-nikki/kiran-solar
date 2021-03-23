

$(document).ready(function () {
    //  hide some elements
     $('#thank-you').hide();
     $('.loader-spinner').hide();
     $('.text-error').hide();
      $('.download-form').hide();
     $('form').submit(function (e) { 
         e.preventDefault();
          
         var name=$('#name').val();
         var email=$('#email').val();
         var phone_number=$('#phone_number').val();
         var alternative_phone_number=$('#alternative_phone_number').val();
         var address=$('#address').val();
         var avg_bill=$('#avg_bill').val();
         var avg_consumption=$('#avg_consumption').val();
         var load=$('#load').val();


         if(name=='' || email=='' || phone_number=='' || alternative_phone_number=='' || address=='' || avg_bill=='' || load=='' || avg_consumption==''){
              return;
         }else{
              
             $('.form-submit').hide();
              $('.loader-spinner').show();
              $.ajax({
                type: "POST",
                url: "server/mail.php",
                data: {test_name:name,test_email:email,test_phonenumber:phone_number,test_alternative_phonenumber:alternative_phone_number,test_address:address,test_avg_bill:avg_bill,test_load:load,test_avg_consuption:avg_consumption},
                success: function (response) {
                console.log(response);
                   if(response=='success'){
                            $('.loader-spinner').hide();
                            $('.form-submit').hide();
                            $('.text-thankyou').show();
                            $('.download-form').show();
                   }
                   if(response=='error'){
                    $('.loader-spinner').hide();
                   $('.form-submit').show();
                    $('.text-error').show();
                    }
                }
              });
         } 
     });
});