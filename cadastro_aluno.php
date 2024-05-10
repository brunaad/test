<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cotemig_fit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h3>Cadastro de Aluno</h3>
    <form action="inserir_dados.php" method="post">
        <div class="form-group">
            <label for="exampleInput">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Informe o email">
        </div>

        <div class="form-check">
            <label class="form-check-label" for="flexCheckDefault1">Sexo:</label>
            <label class="form-check-label" for="flexCheckDefault1">Masculino:</label>
            <input class="form-check-input" type="checkbox" name="sexo" value="m" id="masculino">
            <label class="form-check-label" for="flexCheckDefault1">Feminino:</label>
            <input class="form-check-input" type="checkbox" name="sexo" value="f" id="feminino">
            <label class="form-check-label" for="flexCheckDefault1">Outro:</label>
            <input class="form-check-input" type="checkbox" name="sexo" value="o" id="outro">
        </div>

        <label for="exampleinput">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Informe o endereço">
        <label for="exampleinput">Numero</label>
        <input type="int" class="form-control" name="numero" id="numero" placeholder="Informe o número">
        <label for="exampleinput">Complemento</label>
        <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Informe o complemento">
        <label for="exampleinput">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Informe o bairro">
        <label for="exampleinput">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Informe a cidade">

        <label name="uf" for="exampleinput">UF</label><br>
        <select id="uf" name="uf">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select> <br>

        <label for="exampleInput">Modalidade:</label>
        <select name="modalidade" id="modalidade" class="form-control">
            <option value="pilates">Pilates</option>
            <option value="musculacao">Musculação</option>
            <option value="natacao">Natação</option>
            <option value="zumba">Zumba</option>
        </select>
        <br>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>
        <button type="button" class="btn btn-primary"> <a href='index.php'  style="color:white; text-decoration:none;">Home</a></button>
    </form>
    </div>
</body>
</html>