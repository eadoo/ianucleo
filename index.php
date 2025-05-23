<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Integração LLM-Postgres</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .form-container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-top: 30px;
      margin-bottom: 30px;
    }
    .header {
      background-color: #0d6efd;
      color: white;
      padding: 20px;
      border-radius: 10px 10px 0 0;
      margin: -30px -30px 30px -30px;
    }
    .form-label {
      font-weight: 600;
    }
    .section-title {
      border-bottom: 2px solid #0d6efd;
      padding-bottom: 10px;
      margin-top: 30px;
      margin-bottom: 20px;
    }
    .btn-primary {
      background-color: #0d6efd;
      border: none;
      padding: 10px 30px;
    }
    .form-text {
      color: #6c757d;
    }
    .example-box {
      background-color: #f8f9fa;
      border-left: 4px solid #0d6efd;
      padding: 15px;
      margin-bottom: 20px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 form-container">
        <div class="header">
          <h2 class="text-center mb-0">Formulário de Coleta de Informações</h2>
          <p class="text-center mb-0">Integração LLM-Postgres para Análise de Dados Empresariais</p>
        </div>
        
        <p class="lead">Obrigado pelo seu interesse em nossa solução de integração entre Linguagem de Modelagem de Aprendizado (LLM) e banco de dados Postgres. Este formulário nos ajudará a entender suas necessidades específicas para gerar insights valiosos a partir dos dados de 70 milhões de empresas.</p>
        
        <form>
          <!-- Informações Básicas -->
          <h4 class="section-title">Informações do Cliente</h4>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="nome" required>
            </div>
            <div class="col-md-6">
              <label for="empresa" class="form-label">Empresa</label>
              <input type="text" class="form-control" id="empresa" required>
            </div>
          </div>
          
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="col-md-6">
              <label for="telefone" class="form-label">Telefone</label>
              <input type="tel" class="form-control" id="telefone" required>
            </div>
          </div>
          
          <div class="mb-3">
            <label for="cargo" class="form-label">Cargo/Função</label>
            <input type="text" class="form-control" id="cargo" required>
          </div>
          
          <!-- Objetivos -->
          <h4 class="section-title">Objetivos e Expectativas</h4>
          <div class="mb-3">
            <label for="objetivo-principal" class="form-label">Qual é o principal objetivo que você espera alcançar com esta integração?</label>
            <textarea class="form-control" id="objetivo-principal" rows="3" required></textarea>
          </div>
          
          <div class="mb-3">
            <label for="decisoes" class="form-label">Quais decisões de negócio você espera tomar com base nos insights gerados?</label>
            <textarea class="form-control" id="decisoes" rows="3" required></textarea>
          </div>
          
          <!-- Perguntas Principais -->
          <h4 class="section-title">Perguntas para Geração de Insights</h4>
          <p class="form-text mb-3">Informe as cinco perguntas principais que você gostaria que a I.A. respondesse para gerar relatórios e insights valiosos sobre os dados empresariais.</p>
          
          <div class="example-box">
            <p class="mb-1"><strong>Exemplos de perguntas:</strong></p>
            <ul class="mb-0">
              <li>Quais empresas abriram e fecharam durante um determinado período?</li>
              <li>Quais empresas mostraram crescimento significativo nos últimos anos?</li>
              <li>Quais empresas aumentaram o número de sócios?</li>
              <li>Quais empresas tiveram o maior faturamento entre os anos X e Y?</li>
            </ul>
          </div>
          
          <div class="mb-3">
            <label for="pergunta1" class="form-label">Pergunta 1</label>
            <input type="text" class="form-control" id="pergunta1" required>
          </div>
          
          <div class="mb-3">
            <label for="pergunta2" class="form-label">Pergunta 2</label>
            <input type="text" class="form-control" id="pergunta2" required>
          </div>
          
          <div class="mb-3">
            <label for="pergunta3" class="form-label">Pergunta 3</label>
            <input type="text" class="form-control" id="pergunta3" required>
          </div>
          
          <div class="mb-3">
            <label for="pergunta4" class="form-label">Pergunta 4</label>
            <input type="text" class="form-control" id="pergunta4" required>
          </div>
          
          <div class="mb-3">
            <label for="pergunta5" class="form-label">Pergunta 5</label>
            <input type="text" class="form-control" id="pergunta5" required>
          </div>
          
          <div class="mb-3">
            <label for="perguntas-adicionais" class="form-label">Perguntas adicionais (opcional)</label>
            <textarea class="form-control" id="perguntas-adicionais" rows="3"></textarea>
          </div>
          
          <!-- Métricas e Variáveis -->
          <h4 class="section-title">Métricas e Variáveis Importantes</h4>
          <div class="mb-3">
            <label for="metricas" class="form-label">Quais métricas ou variáveis você considera essenciais para os insights?</label>
            <textarea class="form-control" id="metricas" rows="3" required></textarea>
            <div class="form-text">Ex.: faturamento, número de funcionários, localização geográfica, setor de atuação, etc.</div>
          </div>
          
          <div class="mb-3">
            <label for="segmentos" class="form-label">Há segmentos específicos de empresas que são de seu interesse prioritário?</label>
            <textarea class="form-control" id="segmentos" rows="2"></textarea>
            <div class="form-text">Ex.: empresas de tecnologia, varejo, indústria, etc.</div>
          </div>
          
          <div class="mb-3">
            <label for="regioes" class="form-label">Existem regiões geográficas específicas que deseja focar?</label>
            <textarea class="form-control" id="regioes" rows="2"></textarea>
          </div>
          
          <!-- Frequência e Formato -->
          <h4 class="section-title">Frequência e Formato dos Relatórios</h4>
          <div class="mb-3">
            <label class="form-label">Com que frequência você gostaria de receber os relatórios de insights?</label>
            <select class="form-select" required>
              <option value="" selected disabled>Selecione uma opção</option>
              <option value="diario">Diariamente</option>
              <option value="semanal">Semanalmente</option>
              <option value="quinzenal">Quinzenalmente</option>
              <option value="mensal">Mensalmente</option>
              <option value="trimestral">Trimestralmente</option>
              <option value="sob-demanda">Sob demanda</option>
            </select>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Qual formato de relatório você prefere?</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="formato-dashboard">
              <label class="form-check-label" for="formato-dashboard">Dashboard interativo</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="formato-pdf">
              <label class="form-check-label" for="formato-pdf">Relatório em PDF</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="formato-excel">
              <label class="form-check-label" for="formato-excel">Planilha Excel</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="formato-api">
              <label class="form-check-label" for="formato-api">API para integração com sistemas próprios</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="formato-outro">
              <label class="form-check-label" for="formato-outro">Outro formato</label>
              <input type="text" class="form-control mt-2" id="formato-outro-texto" placeholder="Especifique o formato desejado">
            </div>
          </div>
          
          <!-- Prazos -->
          <h4 class="section-title">Prazos e Implementação</h4>
          <div class="mb-3">
            <label for="prazo-entrega" class="form-label">Qual é o prazo desejado para a entrega inicial dos insights?</label>
            <input type="date" class="form-control" id="prazo-entrega" required>
          </div>
          
          <div class="mb-3">
            <label for="urgencia" class="form-label">Qual é o nível de urgência deste projeto?</label>
            <select class="form-select" id="urgencia" required>
              <option value="" selected disabled>Selecione uma opção</option>
              <option value="baixa">Baixa - Sem pressa, estamos planejando para o futuro</option>
              <option value="media">Média - Importante, mas temos alguma flexibilidade</option>
              <option value="alta">Alta - Precisamos implementar o quanto antes</option>
              <option value="critica">Crítica - Extremamente urgente, prioridade máxima</option>
            </select>
          </div>
          
          <!-- Integrações -->
          <h4 class="section-title">Integrações e Tecnologias</h4>
          <div class="mb-3">
            <label class="form-label">Com quais sistemas você gostaria que a solução se integrasse?</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="integracao-bi">
              <label class="form-check-label" for="integracao-bi">Ferramentas de BI existentes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="integracao-crm">
              <label class="form-check-label" for="integracao-crm">CRM</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="integracao-erp">
              <label class="form-check-label" for="integracao-erp">ERP</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="integracao-outro">
              <label class="form-check-label" for="integracao-outro">Outros</label>
              <input type="text" class="form-control mt-2" id="integracao-outro-texto" placeholder="Especifique os sistemas">
            </div>
          </div>
          
          <!-- Comentários Adicionais -->
          <h4 class="section-title">Informações Adicionais</h4>
          <div class="mb-4">
            <label for="comentarios" class="form-label">Há alguma informação adicional ou requisito específico que devemos considerar?</label>
            <textarea class="form-control" id="comentarios" rows="4"></textarea>
          </div>
          
          <!-- Botão de Envio -->
          <div class="text-center mt-4 mb-3">
            <button type="submit" class="btn btn-primary btn-lg">Enviar Formulário</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
