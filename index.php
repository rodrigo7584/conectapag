<?php include './header.php'?>
<main>
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-left">
          <h2 class="subtitle">BEM VINDO A CONECTA PAG</h2>
          <h1 class="title"><span>ConectaPAG</span> financeira para potencializar negócios</h1>
          <p>
            Oferecemos uma infraestrutura completa e pioneira para conectar empresas de todos os
            segmentos a oportunidades do mercado financeiro, com soluções incorporadas às
            necessidades de seus clientes. A partir de um novo conceito de Embedded Finance,
            tudo é feito de uma forma simples, rápida e sem burocracias, deixando toda a parte
            regulatória com a gente.
          </p>
          <a href="#" class="btn btn-gradient"> Conheça mais </a>
        </div>
        <div class="col-right">
          <div class="box-image">
            <img src="./img/illustration-1.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sub-hero">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="box-img">
            <img src="./img/cellphones.png" alt="" />
          </div>
          <div class="middle"></div>
          <h3>
            <span>Infraestrutura modularizada</span> com soluções para alavancar seu negócio
          </h3>
        </div>
      </div>
    </div>
  </section>
  <?php 
    $spotlightBlocks = [
      "block1" => [
        "title" => "cel_banking", 
        "listItems" => [
          "Contas vinculadas",
          "Pagamento de contas",
          "Saques, depósitos e recargas",
          "Pix Indireto e DDA"
        ]
      ],
      "block2" => [
        "title" => "cel_credit", 
        "listItems" => [
          "Emissão de CCBs",
          "Esteira de concessão de crédito",
          "Consignado privado",
          "Gestão de cobranças"
        ]
      ],
      "block3" => [
        "title" => "cel_banking", 
        "listItems" => [
          "Cobrança recorrente",
          "Links de pagamentos",
          "Gateway de pagamentos",
          "Conciliação bancária"
        ]
      ],
      "block4" => [
        "title" => "cel_retail", 
        "listItems" => [
          "Corban as a service",
          "PDV app",
          "Pix saque e Pix troco",
        ]
      ],
      "block5" => [
        "title" => "cel_open", 
        "listItems" => [
          "Open Keys",
          "Brick Bank",
        ]
      ],
      "block6" => [
        "title" => "cel_onboarding", 
        "listItems" => [
          "KYC",
          "Consulta de dados",
        ]
      ],
    ];
    foreach ($spotlightBlocks as $block) {
        echo "titulo: " . $block["title"] . "<br>";
        foreach($block["listItems"] as $listItem){
          echo "<br>" . $listItem;
        }
    }
  ?>
  <section class="spotlight-blocks">
    <div class="container">
      <div class="row">
        <div class="block">
          <img src="./img/icon-block.png" alt="" />
          <h4>Cel_banking</h4>
          <ul class="dot-list">
            <li>item</li>
            <li>item</li>
            <li>item</li>
            <li>item</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="spotlight">
    <div class="container">
      <div class="row">
        <div class="col-left">
          <h2 class="subtitle">Uma empresa que Conecta!</h2>
          <h1 class="title">
            Experiência financeira mais integrada aos seus clientes e novos fluxos de receita
          </h1>
          <a href="btn btn-white">Conheça mais</a>
        </div>
        <div class="col-right">
          <ul class="list-arrow">
            <li>
              Integração completa a diferentes plataformas de sua empresa e suas
              características.
            </li>
            <li>
              Iniciador e detentor de contas de Open Finance e Participante Direto do Pix.
            </li>
            <li>Licença do BC para atuar como Instituição de Pagamento.</li>
            <li>Infraestrutura de KYC, compliance e regulatório.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="solutions" id="solutions">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="box-title">
            <h2 class="subtitle">BEM VINDO A CONECTA PAG</h2>
            <h1><span></span></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section></section>
</main>