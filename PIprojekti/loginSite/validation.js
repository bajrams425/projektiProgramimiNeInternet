$('document').ready(function(){
    $("#SignUpForm").validate({
      rules:{
        emri: {
          required:true,
          minlength: 2
        },
        mbiemri: {
          required: true,
          minlength: 2
        },
        telefoni: {
          required: true,
          minlength: 5
        },
        reg_mail: {
          required:true,
          email: true
        },
        username: {
          required:true,
          minlength: 1
        },
        fpass: {
          required:true,
          minlength: 5,
          alphanumeric: true
        }
      },
      messages:{
        emri: {
          required:"Shkruani Emrin!",
          minlength: "Emri duhet te kete se paku 2 karaktere!"
        },
        mbiemri: {
          required:"Shkruani Mbiemrin!",
          minlength: "Mbiemri duhet te kete se paku 2 karaktere!"
        },
        telefoni: {
          required:"Shkruani numrin e telefonit!",
          minlength: "Telefoni duhet te kete se paku 5 numra (nese nuk perfshihet 0)!"
        },
        reg_mail: {
          required:"Shkruani E-mail!",
          email: "Formati: someone@example.com!"
        },
        username: {
          required:"Shkruani Username!",
          minlength: "Username duhet te kete se paku 1 karakter!"
        },
        fpass: {
          required:"Shkruani Password-in!",
          minlength: "Password-i duhet te kete se paku 5 karaktere!",
          alphanumeric: "A-z, 0-9 per eliminim komplikimesh"
        }
      },
      errorPlacement: function(label, element){
        label.addClass("errMsg");
        label.insertAfter(element);
      }, wrapper: 'span',
    });
});
