<html>
    
<head>
    <title>Recibo de Aluguel</title>
</head>

<body>
    <div id="container" class="bordaRecibo">
        <h1 id="titulo">Recibo de Aluguel</h1>
        <div id="conteudoRecibo">
            <div id="valor">
                Valor:<br/>
                <input type="float" id="valorInput" placeholder="00,00">
            </div><br/>
            <div id="mesAnoRecibo">
                <div id="MesReferente" class="displayDiv">
                    Mês:<br/>
                    <input type="text" id="mesRef">
                </div>
                    <div id="ano" class="displayDiv">
                        Ano:<br/>
                        <input type="number" id="anoInput">
                    </div>
            </div><br />

            <div id="dadosInquilino" >
                <div id="pagador" class="displayDiv">
                    Inquilino(a):<br/>
                    <input type="text" id="inquilino" placeholder="Nome">
                </div>
                <div id="cpfCnpj" class="displayDiv">
                    CPF/CNPJ Inquilino (opcional):<br/>
                    <input type="text" id="cpfCnpj">
                </div>
            </div><br/>
            <div id="dadosProprietario">
                <div id="proprietario" class="displayDiv">
                    Proprietário(a):<br />
                    <input type="text" id="propi" placeholder="Nome">
                </div>
                <div id="cpfCnpjPro" class="displayDiv">
                    CPF/CNPJ Proprietário (opcional):<br />
                    <input type="text" id="cpfCnpjPro">
                </div>
            </div><br/>

            <h3 id="titulo">Endereço do Imovél:</h3>
            <div id="enderecoImovel">
                <div id="rua" class="displayDiv">
                    Rua:<br/>
                    <input type="text" id="ruaImovel">
                </div>
                <div id="complemento" class="displayDiv">
                    Complemento (opcional):<br/>
                    <input type="text" id="complementoInput">
                </div><br/><br/>
                <div id="numeroImovel" class="displayDiv">
                    Numero:<br/>
                    <input type="number" id="numeroImovel">
                </div>
                <div id="bairroImovel" class="displayDiv">
                    Bairro:<br/>
                    <input type="text" id="bairro">
                </div><br/><br/>
                <div id="cidade" class="displayDiv">
                    Cidade:<br/>
                    <input type="text" id="cidadeImovel">
                </div>
                <div id="estado" class="displayDiv">
                    Estado:<br/>
                    <input type="text" id="estadoImovel">
                </div>
            </div><br/><br>
            <div id="formasPagamento">
                <h3>Formas de Pagamento:</h3>
                <label class="radio">
                    <input type="radio" name="pagamento" value="dinheiro" checked>
                    Dinheiro
                </label>
                <label class="radio">
                    <input type="radio" name="pagamento" value="pix">
                    Pix
                </label>
                <label class="radio">
                    <input type="radio" name="pagamento" value="cheque">
                    Cheque
                </label>
                <label class="radio">
                    <input type="radio" name="pagamento" value="trasferencia">
                    Trâsferencia/Depósito
                </label>
                <label class="radio">
                    <input type="radio" name="pagamento" value="cartao">
                    Cartão crédito/Débito
                </label>
            </div>
            <br>
            <div id="duasVias">
                <h3>Duas vias?</h3>
                <input type="checkbox">
                Sim
            </div>
            <button onclick="gerarRecibo()">Gerar Recibo</button>
            <div class="print">
                <h1>Recibo de- <span id="nome_inquilino"></span></h1>
                <p>Recebemos de <span id="inquilinoImovel"></span></p>
                Valor R$ <h2 id="valor_recibo"></h2>
                <p>Pago Referente ao mes de <span id="mesAno_Recibo"></span></p>
                <p>Ano: <span id="mesAno"></span></p>
                <p>O Imovel localizado na cidade de <span id="cidade_imovel"></span></p>
                <p>Estado: <span id="estado_imovel"></span></p>
                <p>Data<br/><span id="dataRecibo"></span></p>
            </div>
    <h1>
        <?php
        echo "Recibo";
        ?>
    </h1>
</body>

</html>