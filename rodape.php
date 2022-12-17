<?php 

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body class="fundofixo">
    <div class="row panel-footer fundo-rodape" >
        <!-- Area de localização -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: nome;">
                <img src="images/logotipo.webp" alt="">
                <br>
                <i>O melhor churrasco da Zona Leste</i>
                <address>
                    <i>Avenida Itaquera, 8266 - Itaquera - São Paulo - SP - CEP 08925000</i>
                    <br>
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    &nbsp; (11) 2185-9200
                    <a href="mailto:contato@chuleta.com.br?subject=Contato Site&ccedusilvabuchecha727@gmail.com">
                        contato@chuleta.com.br
                    </a>
                </address>
                <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7944237820734!2d-46.458731884428474!3d-23.539895266686298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf22458913%3A0xecdac462b58a9475!2sSenac%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1669646657271!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>as
                </div>
            </div>
        </div> <!-- fecha area de localização -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer">
                <h4>Links</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="index.php#home" class="text-danger">
                            <span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp; Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#detaques"  class="text-danger">
                            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true">&nbsp; Destaques</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#produtos"  class="text-danger">
                            <span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp; Produtos</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#contato"  class="text-danger">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp; Contato</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin/index.php"  class="text-danger">
                            <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp; Administração</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Àrea de contato -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: none;">
                <h4>Contato</h4>
                <form action="rodape_contato_envia.php" name="form_contato" id="form_contato" method="post">
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-user"></span>
                               </span>         <input
                                    type="text" 
                                    name="nome_contato" 
                                    placeholder="digite seu nome" 
                                    class="form-control"
                                    aria-describedby="basic-addon1" 
                                    required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon2">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  
                            </span>
                            <input
                                    type="text" 
                                    name="email_contato" 
                                    placeholder="digite seu email"
                                    class="form-control"
                                    aria-describedby="basic-addon2"
                                    required>
                        </span>
                        
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon3">
                                <span class="glyphicon glyphicon-pencil"></span>
                                
                                
                            </span>
                            <textarea 
                                name="comentarios_contato" 
                                id="comentarios_contato" 
                                cols="30" 
                                rows="5" 
                                placeholder="Escreva aqui seus comentários, dúvidas e/ou sugestões."
                                class="form-control"
                                aria-describedby="basic-addon3"
                                required>
                            </textarea>
                        </span>
                    </p>
                    <p>
                        <button class="btn btn-danger btn-block" aria-label="Enviar" role="button">
                            Enviar
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                        </button>
                    </p>
                </form>

            </div>
        </div><!-- Fim área de contato -->
        <!-- abre área de navegação -->

        <!-- Abre área do desemvolvedor -->
        <div class="col-sm-12">
            <div class="panel-footer" style="background: none;">
                 <h6 class="text-danger text-center">
                    Desenvolvido por dudu&trade; 2022
                    <br>
                    <a href="https://github.com/buchecha727" target="blank">
                        dudu
                    </a>
                 </h6>   
            </div>
        </div>
    </div>
    
</body>
</html>