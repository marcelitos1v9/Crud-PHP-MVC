<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>

<?php
$varIda = $_GET["ida"];
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE codigo = $varIda");
while ($exibe = mysqli_fetch_array($query)) {
?>
    <div class="container bg-white p-3 mt-5 rounded-3">
        <form action="../controllers/atualizarAluno.php" method="post">
            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
                    <label for="alunoNome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="alunoNome" name="alunoNome" value="<?php echo $exibe[1] ?>">
                </div>
                <div class="col-sm-6">
                    <label for="alunoCidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="alunoCidade" name="alunoCidade" value="<?php echo $exibe[2] ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="alunoSexo" class="form-label">Sexo:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" value="M" name="alunoSexo" id="sexoMasculino" <?php echo ($exibe[3] == "M") ? "checked" : "" ?>>
                    <label class="form-check-label" for="sexoMasculino">Masculino</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" value="F" name="alunoSexo" id="sexoFeminino" <?php echo ($exibe[3] == "F") ? "checked" : "" ?>>
                    <label class="form-check-label" for="sexoFeminino">Feminino</label>
                </div>
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-warning d-flex col-6 justify-content-center">Atualizar</button>
            </div>
        </form>
    </div>
<?php } ?>

<?php include("blades/footer.php") ?>
