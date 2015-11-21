/* Construindo um formulario de contato usando Bootstrap e AJAX
 * http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 *
 **/

$("#contactForm").submit(function (event) {
    // cancela o envio padrão
    event.preventDefault();
    // Chama uma função que fará o envio do formuário
        submitForm();
});

function submitForm(){
    // Inicializa variáveis com o conteúdo do formulario
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
 
    $.ajax({
        type: "POST",
        url: "formProcess.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}