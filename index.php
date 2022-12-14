<?php include __DIR__ . '/src/Questions.php'; ?>
<!DOCTYPE html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <title>Fut Fanatics - Quiz</title>
  <meta name="description" content="Fut Fanatics" />
  <meta name="robots" content="index,follow" />
  <meta name="author" content="Fut Fanatics" />
  <meta name="theme-color" content="#3c3c3b">
  <link rel="icon" type="image/png" sizes="16x16" href="/imgs/favicon.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link type="text/css" rel="stylesheet" href="css/select2.min.css" />
  <!-- <link type="text/css" rel="stylesheet" href="css/aos/aos.css" /> -->
  <link type="text/css" rel="stylesheet" href="css/fonts/montserrat/styles.css" />
  <link type="text/css" rel="stylesheet" href="css/estilo.css?v=<?=time()?>" />
</head>

<body>
  <main>
     <div class="loading">
        <img src="imgs/logo-fut.png">
    <span class="linha-final"></span>
    </div> 

    <!-- <section id="banner" style="background-image: url('imgs/banner.jpg');">
        <div id="scene">
            <div class="layer1" data-depth="0.2" >
                <img src="imgs/modelo.png"/>
            </div>

            <div class="layer" data-depth="0.1">
                
                <div class="box-banner">
                    <img src="imgs/frase-banner.png">
                </div>
                
            </div>
        </div>

        <div class="container">
            <div class="box-selo">
                <img src="imgs/selo.png">
            </div>
            <div class="box-logo">
                <img src="imgs/logo-fut.png">
            </div>
        </div>
    </section> -->

    <div id="bannerdesk">
       <img src="imgs/bannernovo.jpg">
    </div>
    <div id="bannermob">
       <img src="imgs/bannernovomobile.jpg">
    </div>

    <div class="errordiv"><p></p></div>

    <section id="conteudo">
        <div class="container">
            <div class="box-form">
                <form id="formCupom" type="post" action="#">
                    <div class="box-input">
                        <input type="text" name="nome" placeholder="NOME">
                    </div>
                    <div class="box-input">
                        <input type="text" name="email" placeholder="E-MAIL">
                    </div>
                    <div class="box-input">                        
                        <select class="select2-time" name="time[]" multiple="multiple" placeholder="TIME BRASILEIRO">
                            <option value="ABC de Natal">ABC de Natal</option>
                            <option value="Aimor??">Aimor??</option>
                            <option value="Altos do Piau??">Altos do Piau??</option>
                            <option value="Am??rica Mineiro">Am??rica Mineiro</option>
                            <option value="Am??rica RJ">Am??rica RJ</option>
                            <option value="Am??rica RN">Am??rica RN</option>
                            <option value="ASA de Arapiraca">ASA de Arapiraca</option>
                            <option value="Athletico Paranaense">Athletico Paranaense</option>
                            <option value="Atl??tico Goianiense">Atl??tico Goianiense</option>
                            <option value="Atl??tico Mineiro">Atl??tico Mineiro</option>
                            <option value="Audax Osasco">Audax Osasco</option>
                            <option value="Ava??">Ava??</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Bahia de Feira">Bahia de Feira</option>
                            <option value="Bangu">Bangu</option>
                            <option value="Boa Esporte">Boa Esporte</option>
                            <option value="Botafogo">Botafogo</option>
                            <option value="Botafogo da Para??ba">Botafogo da Para??ba</option>
                            <option value="Botafogo de Ribeir??o Preto">Botafogo de Ribeir??o Preto</option>
                            <option value="Bragantino">Bragantino</option>
                            <option value="Brasil de Pelotas">Brasil de Pelotas</option>
                            <option value="Bras??lia">Bras??lia</option>
                            <option value="Brasiliense">Brasiliense</option>
                            <option value="Campinense">Campinense</option>
                            <option value="Caxias do Sul">Caxias do Sul</option>
                            <option value="Cear??">Cear??</option>
                            <option value="Chapecoense">Chapecoense</option>
                            <option value="Clube do Remo">Clube do Remo</option>
                            <option value="Corinthians">Corinthians</option>
                            <option value="Coritiba">Coritiba</option>
                            <option value="CRAC">CRAC</option>
                            <option value="CRB Alagoas">CRB Alagoas</option>
                            <option value="Crici??ma">Crici??ma</option>
                            <option value="Cruzeiro">Cruzeiro</option>
                            <option value="CSA">CSA</option>
                            <option value="Cuiab??">Cuiab??</option>
                            <option value="Desportiva Ferrovi??ria ES">Desportiva Ferrovi??ria ES</option>
                            <option value="Ferrovi??ria">Ferrovi??ria</option>
                            <option value="Ferrovi??ria de Araraquara">Ferrovi??ria de Araraquara</option>
                            <option value="Ferrovi??rio CE">Ferrovi??rio CE</option>
                            <option value="Figueirense">Figueirense</option>
                            <option value="Flamengo">Flamengo</option>
                            <option value="Flamengo Piau??">Flamengo Piau??</option>
                            <option value="Fluminense">Fluminense</option>
                            <option value="Fluminense de Feira">Fluminense de Feira</option>
                            <option value="Fortaleza">Fortaleza</option>
                            <option value="Gama">Gama</option>
                            <option value="Goi??s">Goi??s</option>
                            <option value="Goytacaz">Goytacaz</option>
                            <option value="Gr??mio">Gr??mio</option>
                            <option value="Guarani">Guarani</option>
                            <option value="??bis">??bis</option>
                            <option value="Internacional">Internacional</option>
                            <option value="Itabaiana">Itabaiana</option>
                            <option value="Ituano">Ituano</option>
                            <option value="Joinville">Joinville</option>
                            <option value="Juventude">Juventude</option>
                            <option value="Juventus">Juventus</option>
                            <option value="Linense">Linense</option>
                            <option value="Londrina EC">Londrina EC</option>
                            <option value="Luverdense">Luverdense</option>
                            <option value="Madureira">Madureira</option>
                            <option value="Mar??lia">Mar??lia</option>
                            <option value="Maring??">Maring??</option>
                            <option value="Metropolitano">Metropolitano</option>
                            <option value="Mirassol">Mirassol</option>
                            <option value="Mogi Mirim">Mogi Mirim</option>
                            <option value="Moto Club">Moto Club</option>
                            <option value="N??utico">N??utico</option>
                            <option value="Nenhum">Nenhum</option>
                            <option value="Noroeste de Bauru">Noroeste de Bauru</option>
                            <option value="Novo Hamburgo">Novo Hamburgo</option>
                            <option value="Oeste Barueri">Oeste Barueri</option>
                            <option value="Oper??rio Ferrovi??rio">Oper??rio Ferrovi??rio</option>
                            <option value="Outro">Outro</option>
                            <option value="Palmeiras">Palmeiras</option>
                            <option value="Paran?? Clube">Paran?? Clube</option>
                            <option value="Parnahyba">Parnahyba</option>
                            <option value="Paysandu">Paysandu</option>
                            <option value="Pelotas">Pelotas</option>
                            <option value="Penapolense">Penapolense</option>
                            <option value="Ponte Preta">Ponte Preta</option>
                            <option value="Portuguesa">Portuguesa</option>
                            <option value="Rio Branco ES">Rio Branco ES</option>
                            <option value="River Piau??">River Piau??</option>
                            <option value="Sampaio Corr??a">Sampaio Corr??a</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                            <option value="Santo Andr??">Santo Andr??</option>
                            <option value="Santos">Santos</option>
                            <option value="S??o Bento">S??o Bento</option>
                            <option value="S??o Bernardo">S??o Bernardo</option>
                            <option value="S??o Caetano">S??o Caetano</option>
                            <option value="S??o Paulo">S??o Paulo</option>
                            <option value="Selecione">Selecione</option>
                            <option value="Sergipe">Sergipe</option>
                            <option value="Sport Recife">Sport Recife</option>
                            <option value="Todos os Clubes da Lista">Todos os Clubes da Lista</option>
                            <option value="Vasco da Gama">Vasco da Gama</option>
                            <option value="Vila Nova GO">Vila Nova GO</option>
                            <option value="Vila Nova MG">Vila Nova MG</option>
                            <option value="Vit??ria BA">Vit??ria BA</option>
                            <option value="Vit??ria ES">Vit??ria ES</option>
                            <option value="Volta Redonda">Volta Redonda</option>
                            <option value="XV de Piracicaba">XV de Piracicaba</option>
                        </select>
                    </div>                

                    <div class="box-todas-perguntas">
                        <?php                        
                        foreach($questions as $key => $question_array):
                        ?>
                            <div class="box-bloco-pergunta">
                            <div class="box-topo-pergunta">
                                <div class="box-icon">
                                    <span><?= $key; ?></span>
                                    <span class="hashtag">#</span>
                                </div>
                                <div class="box-pergunta">
                                    <h3><?= $question_array["question"] ?></h3>
                                </div>
                            </div>
                            <div class="box-body-pergunta">
                                <ul>
                                <?php
                                foreach($question_array["alternatives"] as $alternative):
                                ?>
                                    <li>
                                        <label>
                                            <div class="box-radio">
                                                <input type="radio" name="pergunta[<?= $key; ?>]" value="<?= $alternative ?>"/>
                                                <span></span>
                                            </div>
                                            <p><?= $alternative ?></p>
                                        </label>
                                    </li>
                                <?php						
                                endforeach;
                                ?>	
                                </ul>                                
                            </div>
                        </div>
                        <?php					
                        endforeach;
                        ?>
                    </div>

                    <div class="box-btn">
                        <input type="submit" name="" value="ENVIAR">
                    </div>

                </form>
            </div>
        </div>

        <div id="result" style="display: none;">
        
        </div>
    </section>
</main>

<footer>
	<img src="imgs/logo-fut.png">
</footer>

<script src="js/jquery/jquery-3.2.1.min.js"></script>
<script src="js/jquery/jquery.validate.js"></script>
<script src="js/select2.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script> -->
<!-- <script type="text/javascript" src="js/aos/aos.js"></script> -->
<script type="text/javascript">
    function copiarcupom(){
    navigator.clipboard.writeText("NIVERFUT12");
}


    var rules_questions = {
      "nome": "required",
      "email": {
        required: !0,
        email: !0
      },
      "time[]": "required",
      <?php foreach($questions as $key => $question): ?>
      "pergunta[<?= $key ?>]": "required",
      <?php endforeach; ?>
    };
</script>
<script src="js/script.js?v=<?=time()?>"></script>

<style>
#box-lgpd {    
    position: fixed;
    bottom: 10px;
    width: 100%;
    background: #fff;
    max-width: 1000px;
    left: calc(50% - 1000px/2);
    padding: 10px;
    box-shadow: 0 5px 30px -5px rgba(0, 0, 0, .7);
    border-radius: 5px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    z-index: 16000004
}

#box-lgpd .box-info {
    width: calc(100% - 200px)
}

#box-lgpd .box-info p {
    font-size: 14px;
    margin-bottom: 5px;
    padding-right: 20px;    
    margin-top: 0;
}

#box-lgpd .box-info p:last-child {
    margin-bottom: 0
}

#box-lgpd .box-info p a {
    color: #0066b3
}

#box-lgpd > a {
    display: block;
    width: 200px;
    text-align: center;
    background: #c1913e;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    font-size: 18px;
    transition: .2s;
}

#box-lgpd > a:hover {
    background: #c1913e;
}

@media(max-width:1000px) {
    #box-lgpd {
        width: 97%;
        left: 1.5%;
    }
}

@media(max-width:500px) {
    #box-lgpd {
        width: 97%;
        left: 1.5%;
    }
    #box-lgpd .box-info {
        width: 100%
    }
    #box-lgpd>a {
        width: 100%;
        margin-top: 20px
    }
}
</style>
<section id="box-lgpd" style="display: none;"><div class="box-info"><p>Usamos cookies para personalizar an??ncios e melhorar a sua experi??ncia no site. Ao continuar navegando, voc?? concorda com a nossa <a target="_blank" href="https://www.futfanatics.com.br/politica-de-privacidade">Pol??tica de Privacidade</a>.</p></div><a href="javascript:;" id="lgpd-consent-button">continuar e fechar</a></section>
<script>
jQuery(document).ready(function(){
     var lgpdConsent = localStorage.getItem('lgpd-consent');
     var lgpd = jQuery('#box-lgpd');
     var btnConsent = lgpd.find('#lgpd-consent-button');
     
     if(lgpd && lgpd.length) {    
        if(!lgpdConsent){
            lgpd.show();
        }
     }

     btnConsent.click(function(){
        localStorage.setItem('lgpd-consent', true);    
        lgpd.fadeOut();
        return false;
     });
});
</script>
</body>
</html>