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
          <div class="box-image">
            <img src="./img/cellphones.png" alt="" />
          </div>
          <div class="middle"></div>
          <h3 class="title-secondary">
            <span>Infraestrutura modularizada</span> <br> com soluções para alavancar seu negócio
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
  ?>
  <section class="spotlight-blocks">
    <div class="container">
      <div class="row">
        <div class="blocks">
          <?php
            foreach ($spotlightBlocks as $block) {
          ?>
          <div class="block">
            <img src="./img/icon-block.png" alt="" />
            <h4 class="title-small"><?php echo $block['title'];?></h4>
            <ul class="dot-list">
              <?php
                foreach($block['listItems'] as $listItem){
                  echo '<li>' . $listItem . '</li>';
                  };
              ?>
            </ul>
          </div>
          <?php } ;?>
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
          <a href="#" class="btn btn-white">Conheça mais</a>
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
  <?php 
    $solutionBlocks = [
      'block1' => [
        'icon' => 'retail',
        'title' => 'Retail',
        'text' => 'Soluções que ajudam os varejistas a acelerar a inovação e atrair mais clientes com a nossa solução de correspondente bancário.'
      ],
      'block2' => [
        'icon' => 'erp',
        'title' => 'ERP',
        'text' => 'Acelere a inovação, escale com confiança e proporcione agilidade com soluções para ERP.'
      ],
      'block3' => [
        'icon' => 'credit-card',
        'title' => 'Utilities',
        'text' => 'Oferecemos um portfólio completo de serviços que abrangem contas a pagar, contas a receber, otimização de fluxo de caixa e conciliação bancária.'
      ],
      'block4' => [
        'icon' => 'bank',
        'title' => 'Banking',
        'text' => 'Um portfólio completo de soluções para ajudar a indústria financeira a desenvolver novas soluçlões , garantindo uma gama de serviços aos seus clientes'
      ],
      'block5' => [
        'icon' => 'chart',
        'title' => 'E-commerce',
        'text' => 'Soluções financeiras para atender todas as etapas do comércio eletrônico com uma abordagem ponta a ponta que é adaptável a qualquer segmento.'
      ],
      'block6' => [
        'icon' => 'shield',
        'title' => 'Insurance',
        'text' => 'Crie soluções para seguros, permitindo que os consumidores fechem suas apólices e paguem diretamente pelo canal de sua operadora. '
      ],
    ]
  ?>
  <section class="solutions" id="solutions">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="box-title">
            <h2 class="subtitle">BEM VINDO A CONECTA PAG</h2>
            <h1 class="title">A <span>solução</span> perfeita para o segmento da sua empresa está aqui.</h1>
          </div>
          <div class="blocks">
            <?php 
                foreach ($solutionBlocks as $block){
                  echo "<div class='block'>";
                  echo "<img src='./img/rounded-icon-". $block['icon'] .".png' alt=''>";
                  echo "<h4 class='title-small'>". $block['title'] ."</h4>";
                  echo "<p>". $block['text'] ."</p>";
                  echo "</div>";
                };
              ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="clients">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h2 class="subtitle">clientes</h2>
          <h1 class="title">Um<span> mercado mais completo, <br> </span>sem complicações</h1>
          <p>A infraestrutura de tecnologia da Celcoin leva a revolução do Embedded Finance para escalar o seu negócio.
            Seja qual for o segmento em que atua, agora é simples oferecer serviços bancários e financeiros aos seus
            clientes.</p>
          <div class="slider">
            <div class="slide-track">
              <div class="slide">
                <img src="./img/bank-1.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-2.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-3.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-4.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-5.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-1.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-2.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-3.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-4.png" alt="">
              </div>
              <div class="slide">
                <img src="./img/bank-5.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="developers" id="developers">
    <div class="container">
      <div class="row">
        <div class="col-left">
          <div class="box-image">
            <img src="./img/prompt.png" alt="">
          </div>
        </div>
        <div class="col-right">
          <h2 class="subtitle">Developer Hub</h2>
          <h1 class="title">De DEVs para DEVs</h1>
          <p>
            APIs simples de serem aplicadas, que trazem consigo toda a infraestrutura da Celcoin de forma integrada à
            experiência do usuário.
          </p>
          <ul class="dot-list">
            <li>Guias rápidos de aplicação.</li>
            <li>Exemplos e amostras de código.</li>
            <li>Webhooks em tempo real.</li>
            <li>Equipe de assistência especializada.</li>
            <li>Documentações completas.</li>
          </ul>
          <a href="#" class="btn btn-white">Leia a documentação</a>
        </div>
      </div>
    </div>
  </section>
  <?php 
    $aboutBlocks = [
      'block1' => [
        'icon' => 'people',
        'title' => '+ 5 mil',
        'text' => 'Clientes entre bancos digitais, fintechs e demais empresas.'
      ],
      'block2' => [
        'icon' => 'coins',
        'title' => 'R$ 8 Bi',
        'text' => 'Movimentados mensalmente.'
      ],
      'block3' => [
        'icon' => 'recycle',
        'title' => '20 MM',
        'text' => 'de transações mensais.'
      ],
    ]
  ?>
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="title">A ConectaPag<span></span> no mercado </h1>
          <div class="blocks">
            <?php 
              foreach ($aboutBlocks as $block){
                echo "<div class='block'>";
                echo "<img src='./img/rounded-icon-". $block['icon'] .".png' alt=''>";
                echo "<h4>". $block['title'] ."</h4>";
                echo "<p>". $block['text'] ."</p>";
                echo "</div>";
              };
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sub-about">
    <div class="container">
      <div class="row">
        <div class="col-left">
          <h2 class="subtitle">Pronto para começar?</h2>
          <h1 class="title">Aumente o potencial
            do seu negócio com
            nossa infraestrutura</h1>
          <a href="#" class="btn btn-gradient">Solicitar teste</a>
        </div>
        <div class="col-right">
          <div class="box-image">
            <img src="./img/illustration-computer.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include './footer.php'?>