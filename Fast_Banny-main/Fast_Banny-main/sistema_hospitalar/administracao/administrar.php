<?php
// Incluir os arquivos de cabeçalho e configurações
include_once('include/header-medico.php');
include_once('include/includes.php');

// Verificar se o usuário está autenticado
// Se não estiver, redirecionar para a página de login ou exibir uma mensagem de erro

// Processar as operações de adição, exclusão e criação de dados de médicos e pacientes
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar o tipo de operação e executar as ações correspondentes
    if ($_POST['operacao'] === 'adicionar_medico') {
        // Obter os dados do formulário e adicionar um novo médico no banco de dados
    } elseif ($_POST['operacao'] === 'adicionar_paciente') {
        // Obter os dados do formulário e adicionar um novo paciente no banco de dados
    } elseif ($_POST['operacao'] === 'excluir_medico') {
        // Obter o ID do médico a ser excluído e remover do banco de dados
    } elseif ($_POST['operacao'] === 'excluir_paciente') {
        // Obter o ID do paciente a ser excluído e remover do banco de dados
    }
}

// Obter a lista de médicos e pacientes do banco de dados
$medicos = Medico::getMedicos();
$pacientes = Paciente::getPacientes();

// Exibir os dados de médicos
echo '<h2>Médicos</h2>';
echo '<ul>';
foreach ($medicos as $medico) {
    echo '<li>' . $medico->nome . ' - <a href="#" class="excluir-medico" data-id="' . $medico->id . '">Excluir</a></li>';
}
echo '</ul>';

// Exibir os dados de pacientes
echo '<h2>Pacientes</h2>';
echo '<ul>';
foreach ($pacientes as $paciente) {
    echo '<li>' . $paciente->nome . ' - <a href="#" class="excluir-paciente" data-id="' . $paciente->id . '">Excluir</a></li>';
}
echo '</ul>';
?>

<!-- Formulário para adicionar médicos -->
<h2>Adicionar Médico</h2>
<form action="" method="post">
    <input type="hidden" name="operacao" value="adicionar_medico">
    <label for="nome-medico">Nome do Médico:</label>
    <input type="text" id="nome-medico" name="nome_medico" required>
    <button type="submit">Adicionar Médico</button>
</form>

<!-- Formulário para adicionar pacientes -->
<h2>Adicionar Paciente</h2>
<form action="" method="post">
    <input type="hidden" name="operacao" value="adicionar_paciente">
    <label for="nome-paciente">Nome do Paciente:</label>
    <input type="text" id="nome-paciente" name="nome_paciente" required>
    <button type="submit">Adicionar Paciente</button>
</form>

<!-- Script para lidar com a exclusão de médicos e pacientes -->
<script>
    // Função para lidar com a exclusão de médicos
    function excluirMedico(event) {
        event.preventDefault();
        var id = event.target.dataset.id;
        if (confirm('Deseja excluir o médico?')) {
            // Enviar uma solicitação para excluir o médico com o ID fornecido
            // Você pode usar AJAX para enviar a solicitação para um arquivo PHP que irá lidar com a exclusão
        }
    }

    // Função para lidar com a exclusão de pacientes
    function excluirPaciente(event) {
        event.preventDefault();
        var id = event.target.dataset.id;
        if (confirm('Deseja excluir o paciente?')) {
            // Enviar uma solicitação para excluir o paciente com o ID fornecido
            // Você pode usar AJAX para enviar a solicitação para um arquivo PHP que irá lidar com a exclusão
        }
    }

    // Adicionar os manipuladores de eventos para os links de exclusão
    var linksExcluirMedico = document.querySelectorAll('.excluir-medico');
    var linksExcluirPaciente = document.querySelectorAll('.excluir-paciente');
    linksExcluirMedico.forEach(function(link) {
        link.addEventListener('click', excluirMedico);
    });
    linksExcluirPaciente.forEach(function(link) {
        link.addEventListener('click', excluirPaciente);
    });
</script>

<?php include_once('include/footer.php'); ?>
