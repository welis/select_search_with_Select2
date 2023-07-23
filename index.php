<!-- Este código é uma página HTML com um formulário de seleção (select) que utiliza o plugin Select2 para melhorar a experiência do usuário.
O plugin Select2 é uma biblioteca JavaScript que transforma um simples elemento de seleção em um componente de seleção avançado,
com recursos como pesquisa, filtragem, paginação, carregamento dinâmico de dados e muito mais. O código também inclui um script 
jQuery que captura o evento de mudança do Select2 e exibe o valor selecionado no console do navegador. -->

<html>
<head>
<title>My First PHP Page</title>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <h1>teste</h1>
    <select class="js-select2">
        <option value="1">Opção 1</option>
        <option value="2">Opção 2</option>
        <option value="3">Opção 3</option>
        <!-- Adicione mais opções aqui, se necessário -->
    </select>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script>

    // Espera o documento estar pronto para executar o código
    $(document).ready(function() {
        // Seleciona o elemento com a classe 'js-select2' e aplica o plugin Select2
        $('.js-select2').select2();

        // Captura o evento de mudança do Select2
        $('.js-select2').on('change', function() {
            // Obtém o valor selecionado no Select2
            var selectedValue = $(this).val();
            // Exibe o valor selecionado no console do navegador
            console.log('Valor selecionado:', selectedValue);
        });
    });

</script>
    
