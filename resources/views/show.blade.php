<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Consultar Cliente</title>
</head>
<body>
<main class="container">
    <h2>Consultar Cliente</h2>
    <form action="{{route('cliente.resultado')}}" >
        @csrf
        <div class="row">
            <div class="col-sm-3">
                <label for="" class="form-label " >CPF:</label>
                <input type="text" class="form-control rounded">
            </div>
            <div class="col-sm-3">
                <label for="" class="form-label">Nome:</label>
                <input type="text" class="form-control rounded">
            </div>
            <div class="col-sm-3">
                <label for="" class="form-label">Data nascimento:</label>
                <input type="date" class="form-control rounded">
            </div>
            <div class="col-sm-3 form-check">
                Sexo:
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">
                        Masculino
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">
                        Feminino
                    </label>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <label for="estado" class="form-label">Estado:</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="">Todos</option>
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
                </select>
            </div>

            <div class="col-sm-3">
                <label for="cidade" class="form-label">Cidade:</label>
                <select name="cidade" id="idade" class="form-control">
                    <option value="">Todas</option>
                    @foreach($cliente as $client)
                        <option value="{{$client->id}}">{{$client->cidade}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="text-left mt-3">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
            <a type="submit" class="btn btn-secondary">Limpar</a>
        </div>

    </form>

</main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
