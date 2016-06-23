<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>contato</title>
        <link rel="stylesheet" href="css/style_form.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <h1>Formulatio de contato</h1>
        <hr>
        <section class="main">
            <form action="validation/validar_form_contato.php" name="form_contato" method="post">
                <label for="frmNome">Nome:</label>
                <input id="frmNome" type="text" name="nome" placeholder="João das Couve"/>
               
                <label for="tel">Tel:</label>
                <input type="tel" name="telefone" id="tel" value="" maxlength="12" min="11" placeholder="021 99123-4567">
                
                
                <label for="Email">E-mail:</label>
                    <input type="email" name="email" placeholder="joao_couve@email.com"/>
                
                
                <label>Opções:</label>
                    <select name="escolhas" class="campo_input">
                        <option value="null">Selecione</option>
                        <option value="seg_auto">seguro automovel</option>
                        <option value="saude_pet">saude pet</option>
                        <option value="seg_residencial">seguro residencial</option>
                        <option value="seg_p_eletro">seguro para eletronicos</option>
                        <option value="seg_vida">seguro vida</option>
                        <option value="seg_empresa">seguro empresarial</option>
                        <option value="seg_viag">seguro viagem</option>
                        <option value="seg_moto">seguro moto</option>
                        <option value="seg_frot">seguro frota</option>
                        <option value="consor_imove">consocio imovel</option>
                        <option value="consor_auto">consocio automovel</option>
                    </select>
                <label>Mensagem:</label>
                <textarea name="msg" cols="16" rows="5"></textarea>
                
                <input type="submit" class="btCont" value="Enviar"/>
            </form>
        </section>
        <!--https://developers.google.com/web/fundamentals/design-and-ui/input/forms/?hl=en-->
    </body>
</html>