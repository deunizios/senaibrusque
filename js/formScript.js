/* Construindo um formulario de contato usando Bootstrap e AJAX
 * http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 *
 **/

$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // Formulario inválido
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // Tudo parece certo!
        event.preventDefault();
        submitForm();
    }
});

function submitForm() {
    // Inicializa variáveis com o conteúdo do formulario
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "formProcess.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text == "success") {
                formSuccess();
            }
        }
    });
}
function formSuccess() {
    $("#contactForm")[0].reset();
    submitMSG(true, "Mensagem Enviada!")
}

function submitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center slideInUp animated text-success";
    } else {
        msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}