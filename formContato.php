<section id="contato" class="container-fluid">
    <h1>Contato</h1>
    <div class="row>">
        <p> Entre em contato, responderemos em até 24 horas.</p>
        <div class="col-lg-4">
            <p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Brusque</p>
            <p><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>+55(47) 3251-8900</p>
            <p><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>brusque@fiesc.com.br</p>
        </div>
    </div>
    <div class="col-md-8">
        <form role="form" id="contactForm">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="name" class="h4">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite seu nome" required >
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="email" class="h4">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="Entre com e-mail" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="h4 ">Mensagem</label>
                <textarea id="message" class="form-control" rows="5" placeholder="Digite a sua mensagem" required></textarea>
                <div class="help-block with-errors"></div>
            </div>
            <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Enviar</button>
            <div id="msgSubmit" class="h4 text-center hidden"></div>
        </form>
    </div>
</section>