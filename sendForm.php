<?php
header('Content-Type: application/json; charset=utf-8');

include __DIR__ . '/src/Questions.php';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($data['nome']) && isset($data['email']) && count($data['time']) > 0 && count($data['pergunta']) > 0){
    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'status' => false,
            'error' => 'E-mail inválido.'
        ]);
        exit;      
    }

    $acertos = 0;

    foreach ($data['pergunta'] as $key => $resposta) {
        if ($questions[$key]['alternatives']['correct'] == $resposta) {
            $acertos++;
        }
    }

    //DINAMIZE
    $path_dinamize = 'https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0/?cmp12_action=replacement&cmp12='.urlencode(implode('|', $data['time'])).'&cmp1='.urlencode($data['email']).'&cmp2='.urlencode($data['nome']).'&phase-change=off&ignore-fields=on&cmp4=%C3%81rea%20Vip%20Anivers%C3%A1rio%202022&text-alert=&text-error=&text-confirmation=VmFsZXUsIGZhbiZhYWN1dGU7dGljbyEgU2V1IGUtbWFpbCBmb2kgY2FkYXN0cmFkbyBjb20gc3VjZXNzby4%3D&isMsg=true&form-code=86&update_mode=AS&a=' . (floor(rand() * 99999) + 1);
    
    $ch = curl_init($path_dinamize);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)");
    $response = curl_exec($ch);
    curl_close($ch);

    // ACERTOS:
    // 0 a 5 - cupom de 10%
    // 6 a 9 - cupom de 20%
    // 10 - cupom de 30%
    if ($acertos >= 10) {
        echo json_encode([
            'status' => true,
            'result' => '
                <div class="box-cupom cupom3 active">
                    <div class="box-icon-cupom">
                        <img src="imgs/selo-cupom3.png"/>
                    </div>
                    <h3>Seu nível de fanatismo é</h3>
                    <h2>"jogador caro"</h2>
                    <div class="box-selo-bolas">
                        <img src="imgs/bola.png"/>
                        <img src="imgs/bola.png"/>
                        <img src="imgs/bola.png"/>
                    </div>
                    <div class="box-frase caro">
                        <p>Parabéns por garantir seu <br>lugar em nossa área vip!<br> <span>Seu cupom especial é de 12%</span></p>
                    </div>
                    <div class="box-frase-cupom">
                        <span>NIVERFUT12</span>
                    </div>
                    <a href="https://www.futfanatics.com.br/" class="btn">IR PARA O SITE</a>
                </div>
            '
        ]);
        exit;
    } else if ($acertos >= 6 && $acertos <= 9) {
        echo json_encode([
            'status' => true,
            'result' => '
                <div class="box-cupom cupom2 active">
                    <div class="box-icon-cupom">
                        <img src="imgs/selo-cupom2.png"/>
                    </div>
                    <h3>Seu nível de fanatismo é</h3>
                    <h2>"bom taticamente"</h2>
                    <div class="box-selo-bolas">
                        <img src="imgs/bola.png"/>
                        <img src="imgs/bola.png"/>
                    </div>
                    <div class="box-frase">
                        <p>Parabéns por garantir seu <br>lugar em nossa área vip!<br> <span>Gabarite e garanta cupom de 12%</span></p>
                    </div>
                    
                    <a href="https://fut10anos.futfanatics.com.br/" class="btn">TENTAR NOVAMENTE</a>
                </div>
            '
        ]);
        exit;
    }else{
        echo json_encode([
            'status' => true,
            'result' => '
                <div class="box-cupom cupom1 active">
                    <div class="box-icon-cupom">
                        <img src="imgs/selo-cupom1.png"/>
                    </div>
                    <h3>Seu nível de fanatismo é</h3>
                    <h2>"pé duro"</h2>
                    <div class="box-selo-bolas">
                        <img src="imgs/bola.png"/>
                    </div>
                    <div class="box-frase">
                        <p>Parabéns por garantir seu <br>lugar em nossa área vip!<br> <span>Gabarite e garanta cupom de 12%</span></p>
                    </div>
                    
                    <a href="https://fut10anos.futfanatics.com.br/" class="btn">TENTAR NOVAMENTE</a>
                </div>
            '
        ]);
        exit;     
    }
}else{    
    echo json_encode([
        'status' => false,
        'error' => 'Preencha todos os campos.'    
    ]);
    exit;
}