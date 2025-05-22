<?php
// Configurações de cabeçalho para evitar problemas de caracteres
header('Content-Type: text/html; charset=utf-8');

// Função para limpar e validar dados de entrada
function limparDados($dados) {
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados, ENT_QUOTES, 'UTF-8');
    return $dados;
}

// Inicializa variáveis para mensagens
$mensagemSucesso = "";
$mensagemErro = "";

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Verifica campos obrigatórios
    $camposObrigatorios = [
        'nome', 'empresa', 'email', 'telefone', 'cargo', 
        'objetivo-principal', 'decisoes', 
        'pergunta1', 'pergunta2', 'pergunta3', 'pergunta4', 'pergunta5',
        'metricas', 'prazo-entrega', 'urgencia'
    ];
    
    $faltaCampos = false;
    foreach ($camposObrigatorios as $campo) {
        if (empty($_POST[$campo])) {
            $faltaCampos = true;
            break;
        }
    }
    
    if ($faltaCampos) {
        $mensagemErro = "Por favor, preencha todos os campos obrigatórios.";
    } else {
        // Validação de e-mail
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $mensagemErro = "Por favor, forneça um endereço de e-mail válido.";
        } else {
            // Processa os dados do formulário
            
            // Informações do Cliente
            $nome = limparDados($_POST['nome']);
            $empresa = limparDados($_POST['empresa']);
            $email = limparDados($_POST['email']);
            $telefone = limparDados($_POST['telefone']);
            $cargo = limparDados($_POST['cargo']);
            
            // Objetivos e Expectativas
            $objetivoPrincipal = limparDados($_POST['objetivo-principal']);
            $decisoes = limparDados($_POST['decisoes']);
            
            // Perguntas para Geração de Insights
            $pergunta1 = limparDados($_POST['pergunta1']);
            $pergunta2 = limparDados($_POST['pergunta2']);
            $pergunta3 = limparDados($_POST['pergunta3']);
            $pergunta4 = limparDados($_POST['pergunta4']);
            $pergunta5 = limparDados($_POST['pergunta5']);
            $perguntasAdicionais = isset($_POST['perguntas-adicionais']) ? limparDados($_POST['perguntas-adicionais']) : "Não informado";
            
            // Métricas e Variáveis
            $metricas = limparDados($_POST['metricas']);
            $segmentos = isset($_POST['segmentos']) ? limparDados($_POST['segmentos']) : "Não informado";
            $regioes = isset($_POST['regioes']) ? limparDados($_POST['regioes']) : "Não informado";
            
            // Frequência e Formato
            $frequencia = isset($_POST['frequencia']) ? limparDados($_POST['frequencia']) : "Não selecionado";
            
            // Formatos de relatório (checkboxes)
            $formatoDashboard = isset($_POST['formato-dashboard']) ? "Sim" : "Não";
            $formatoPdf = isset($_POST['formato-pdf']) ? "Sim" : "Não";
            $formatoExcel = isset($_POST['formato-excel']) ? "Sim" : "Não";
            $formatoApi = isset($_POST['formato-api']) ? "Sim" : "Não";
            $formatoOutro = isset($_POST['formato-outro']) ? "Sim" : "Não";
            $formatoOutroTexto = isset($_POST['formato-outro-texto']) ? limparDados($_POST['formato-outro-texto']) : "Não especificado";
            
            // Prazos e Implementação
            $prazoEntrega = limparDados($_POST['prazo-entrega']);
            $urgencia = limparDados($_POST['urgencia']);
            
            // Integrações e Tecnologias (checkboxes)
            $integracaoBi = isset($_POST['integracao-bi']) ? "Sim" : "Não";
            $integracaoCrm = isset($_POST['integracao-crm']) ? "Sim" : "Não";
            $integracaoErp = isset($_POST['integracao-erp']) ? "Sim" : "Não";
            $integracaoOutro = isset($_POST['integracao-outro']) ? "Sim" : "Não";
            $integracaoOutroTexto = isset($_POST['integracao-outro-texto']) ? limparDados($_POST['integracao-outro-texto']) : "Não especificado";
            
            // Informações Adicionais
            $comentarios = isset($_POST['comentarios']) ? limparDados($_POST['comentarios']) : "Não informado";
            
            // Prepara o corpo do e-mail
            $assunto = "Novo formulário de Integração LLM-Postgres de $nome";
            
            $corpo = "FORMULÁRIO DE INTEGRAÇÃO LLM-POSTGRES\n\n";
            $corpo .= "INFORMAÇÕES DO CLIENTE\n";
            $corpo .= "Nome: $nome\n";
            $corpo .= "Empresa: $empresa\n";
            $corpo .= "E-mail: $email\n";
            $corpo .= "Telefone: $telefone\n";
            $corpo .= "Cargo/Função: $cargo\n\n";
            
            $corpo .= "OBJETIVOS E EXPECTATIVAS\n";
            $corpo .= "Objetivo Principal: $objetivoPrincipal\n";
            $corpo .= "Decisões de Negócio: $decisoes\n\n";
            
            $corpo .= "PERGUNTAS PARA GERAÇÃO DE INSIGHTS\n";
            $corpo .= "Pergunta 1: $pergunta1\n";
            $corpo .= "Pergunta 2: $pergunta2\n";
            $corpo .= "Pergunta 3: $pergunta3\n";
            $corpo .= "Pergunta 4: $pergunta4\n";
            $corpo .= "Pergunta 5: $pergunta5\n";
            $corpo .= "Perguntas Adicionais: $perguntasAdicionais\n\n";
            
            $corpo .= "MÉTRICAS E VARIÁVEIS\n";
            $corpo .= "Métricas Essenciais: $metricas\n";
            $corpo .= "Segmentos de Interesse: $segmentos\n";
            $corpo .= "Regiões Geográficas: $regioes\n\n";
            
            $corpo .= "FREQUÊNCIA E FORMATO\n";
            $corpo .= "Frequência dos Relatórios: $frequencia\n";
            $corpo .= "Formatos de Relatório:\n";
            $corpo .= "- Dashboard Interativo: $formatoDashboard\n";
            $corpo .= "- Relatório em PDF: $formatoPdf\n";
            $corpo .= "- Planilha Excel: $formatoExcel\n";
            $corpo .= "- API para Integração: $formatoApi\n";
            $corpo .= "- Outro Formato: $formatoOutro\n";
            $corpo .= "  Especificação: $formatoOutroTexto\n\n";
            
            $corpo .= "PRAZOS E IMPLEMENTAÇÃO\n";
            $corpo .= "Prazo de Entrega: $prazoEntrega\n";
            $corpo .= "Nível de Urgência: $urgencia\n\n";
            
            $corpo .= "INTEGRAÇÕES E TECNOLOGIAS\n";
            $corpo .= "Integrações Desejadas:\n";
            $corpo .= "- Ferramentas de BI: $integracaoBi\n";
            $corpo .= "- CRM: $integracaoCrm\n";
            $corpo .= "- ERP: $integracaoErp\n";
            $corpo .= "- Outras Integrações: $integracaoOutro\n";
            $corpo .= "  Especificação: $integracaoOutroTexto\n\n";
            
            $corpo .= "INFORMAÇÕES ADICIONAIS\n";
            $corpo .= "Comentários: $comentarios\n\n";
            
            $corpo .= "Formulário enviado em: " . date("d/m/Y H:i:s") . "\n";
            
            // Cabeçalhos do e-mail
            $destinatario = "brunocastro@eadoo.com.br";
            $headers = "From: $email" . "\r\n" .
                       "Reply-To: $email" . "\r\n" .
                       "X-Mailer: PHP/" . phpversion() . "\r\n" .
                       "Content-Type: text/plain; charset=UTF-8";
            
            // Envia o e-mail
            if (mail($destinatario, $assunto, $corpo, $headers)) {
                $mensagemSucesso = "Formulário enviado com sucesso! Obrigado pelo seu interesse.";
            } else {
                $mensagemErro = "Ocorreu um erro ao enviar o formulário. Por favor, tente novamente mais tarde.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resposta do Formulário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 50px 0;
    }
    .response-container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
    }
    .success-message {
      color: #198754;
      font-weight: 600;
      margin-bottom: 20px;
    }
    .error-message {
      color: #dc3545;
      font-weight: 600;
      margin-bottom: 20px;
    }
    .btn-primary {
      background-color: #0d6efd;
      border: none;
      padding: 10px 30px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="response-container">
      <?php if (!empty($mensagemSucesso)): ?>
        <h2 class="success-message">Sucesso!</h2>
        <p><?php echo $mensagemSucesso; ?></p>
        <p>Entraremos em contato em breve para discutir sua solicitação.</p>
      <?php elseif (!empty($mensagemErro)): ?>
        <h2 class="error-message">Erro</h2>
        <p><?php echo $mensagemErro; ?></p>
        <p>Por favor, tente novamente ou entre em contato diretamente pelo e-mail: brunocastro@eadoo.com.br</p>
      <?php else: ?>
        <h2 class="error-message">Acesso Direto</h2>
        <p>Este arquivo deve ser acessado através do formulário.</p>
      <?php endif; ?>
      
      <a href="formulario.html" class="btn btn-primary">Voltar ao Formulário</a>
    </div>
  </div>
</body>
</html>
