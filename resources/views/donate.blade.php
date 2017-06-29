@extends ('layouts.master')

@section ('content')
    <h3 class="download-title">Doação</h3>
              <hr>
              <div class="form-inline">
                <div class="form-group">
                  <select class="form-control">
                    <option>Paypal (Cartão de Crédito)</option>
                    <option>PagSeguro (Boleto Bancário)</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option>5 BRL</option>
                    <option>10 BRL</option>
                    <option>15 BRL</option>
                    <option>20 BRL</option>
                    <option>25 BRL</option>
                    <option>30 BRL</option>
                    <option>35 BRL</option>
                    <option>40 BRL</option>
                    <option>50 BRL</option>
                    <option>100 BRL</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="user" placeholder="Usuário do Forum">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">Ir para o Pagamento</button>
                </div>
              </div>
              <div class="well">
                <div align="center" class="title-termo">
                  <h3>Termos de Doação</h3>
                </div>
                <ol>
                  <li><b>Escopo do Termo</b></li>
                  <p>Este termo trata sobre a concessão de moedas virtuais (Maple Points) através da doação feita pelo usuário ao GarageStory</p>
                  <li>
                    <b>Aquisição da moeda virtual (Maple Points)</b>
                    <ol>
                      <li>
                        O usuário receberá uma quantia de Maple Points como bônus ao efetuar uma doação ao GarageStory, que pode ser feita das seguintes formas :
                        <ol>
                          <li>Cartão de Crédito (PagSeguro)</li>
                          <li>Boleto Bancário (PagSeguro)</li>
                          <li>Crédito PagSeguro (PagSeguro)</li>
                        </ol>
                        <li>Ao optar pelo pagamento através da plataforma oferecida na página, o usuário estará expressando sua decisão em ceder seu dinheiro ao GarageStory como doação.</li>
                        <li>Sendo o doador menor de 18 anos, o pagamento deve ser realizado com autorização dos pais ou responsáveis, sob responsabilidade dos mesmos.</li>
                        <li><p>A quantia da moeda(IDM Points) adquirida será disponibilizada ao usuário assim que confirmado o pagamento pela staff do GarageStory.</p></li>
                      </li>
                    </ol>
                  </li>
                  <li>
                    <b>O usuário declara ter ciência de que:</b>
                    <ol>
                      <li>A troca e/ou comercialização de Maple Points entre usuários envolvendo moedas ou bens virtuais ou fisicos é proibida.</li>
                      <li>O GarageStory não se responsabiliza pela negociação da moeda (Maple Points) com terceiros</li>
                      <li>Ao executar qualquer tentativa de burlar o sistema de doações, o usuário será bloqueada permanentemente.</li>
                      <li>Doar para o GarageStory não torna o usuário isento de punições relacionadas ao jogo.</li>
                      <li>Por se tratar de uma DOAÇÃO, não é possível restituir o valor doado.</li>
                    </ol>
                  </li>
                </ol>
              </div>
              <hr>
@endsection