var app_key = "Sua App_Key";
var app_secret = "Sua App_Secret";

(function initMask(){
    $('#telefoneVisitante').mask('(00) 0000-0000');
    $('#celularVisitante').mask('(00) 0000-0000');
    $('#dataNascVisitante').mask('00/00/0000');
    $('#cepVisitante').mask('00000-000');
}());

(function initValidation(){
    $.validator.addMethod("maxDate", function(value, element){
        let curDate = new Date();
        let splitDate = value.split('/');
        let inputDate = new Date(splitDate[2],splitDate[1]-1,splitDate[0]);
        if (inputDate < curDate)
            return true;
        return false;
    }, "Data Inválida");

    $.validator.addMethod("dateFormat",
    function(value, element) {
        let dateRegex = /^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/;        
        return dateRegex.test(value);
    },
    "Data Inválida.");

    $('#visitanteForm').validate({
      errorElement:'div',
      rules:{
        Nome: "required",
        Email: {
          required: true,
          email:true
        },
        Telefone: "required",
        Dt_Nascimento: {
            required: true,
            dateFormat: true,
            maxDate: true
        }
      },
      messages:{
        Nome: "Por favor, preencha o seu Nome.",
        Email: {
          required: "Por favor, preencha o e-mail.",
          email: "Por favor, entre um e-mail válido."
        },
        Telefone: "Por favor, preencha o Telefone.",
        Dt_Nascimento: {
            required: "Por favor, preencha a Data de Nascimento.",
            maxDate: "Data Inválida"
        }
      },
      submitHandler: function(form) {
            $(form).ajaxSubmit();
        }
    });

})();

$(document).ajaxStart(function () {
    $("#loading").attr("style", "visibility: visible");
}).ajaxStop(function () {
    $("#loading").attr("style", "visibility: hidden");
});

$(document).on('blur','#cepVisitante', function(){     
    $.ajax({
        type:'post',
        url:'https://webmaniabr.com/api/1/cep/'+$('#cepVisitante').val()+'/?app_key='+app_key+'&app_secret='+app_secret,
        success: function(data){
            $('#bairroVisitante').val(data.bairro);
            $('#cidadeVisitante').val(data.cidade);
            $('#ufVisitante').val(data.uf);
            $('#enderecoVisitante').val(data.endereco);

            $('#bairroVisitante').attr('disabled','disabled');
            $('#cidadeVisitante').attr('disabled','disabled');
            $('#ufVisitante').attr('disabled','disabled');
            $('#enderecoVisitante').attr('disabled','disabled');
        }
    });
});
        
$(document).on('click','#submitCadastro', function(e){
    e.preventDefault();

    let disabled = $("#visitanteForm").find(":input:disabled").removeAttr('disabled');
    var formData = $('#visitanteForm').serialize();
    disabled.attr('disabled','disabled');

    $("#visitanteForm").hide();

    $.ajax({
        type:'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:'/visitante/',
        data: formData,
        dataType: "json",
        success: function(response){

            console.log(response);
  
            if(response.success){
                $('.sucessoVisita').show();
                document.getElementById('cadastroVisita').scrollIntoView({behavior:"smooth", block:"start"});
            } else{
                $("#visitanteForm").show();

                if(response.code === "23000"){
                    $("#emailVisitante").focus();
                    let errors = {Email: "E-mail existente"};
                    $('#visitanteForm').validate().showErrors(errors);
                }
            }
        }
    });
});    