<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
<main class="container">
    <h2>Cadastro Cliente</h2>

    <form action="{{ route('cliente.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-3">
                <label for="cpf" class="form-label " >CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control rounded  @error('cpf') is-invalid @enderror" value="{{old('cpf')}}">
                @error('cpf')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="col-sm-3">
                <label for="nome" class="form-label ">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control rounded @error('nome') is-invalid @enderror" value="{{old('nome')}}">
                @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-sm-3">
                <label for="nascimento" class="form-label ">Data nascimento:</label>
                <input type="date" name="nascimento" id="nascimento" class="form-control rounded @error('nascimento') is-invalid @enderror" value="{{old('nascimento')}}">
                @error('nascimento')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-sm-3 form-check">
                Sexo:
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" checked>
                    <label class="form-check-label" for="male">
                        Masculino
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
                    <label class="form-check-label" for="female">
                        Feminino
                    </label>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <label for="endereco"  class="form-label ">Endereço:</label>
                <input type="text" name="endereco" id="endereco" class="form-control rounded  @error('endereco') is-invalid @enderror" value="{{old('endereco')}}">
                @error('endereco')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-sm-3">
                <label for="estado" class="form-label  @error('name') is-invalid @enderror">Estado:</label>
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
                <input type="text" name="cidade" id="cidade" class="form-control rounded  @error('cidade') is-invalid @enderror" value="{{old('cidade')}}">
                @error('cidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a type="" class="btn btn-secondary">Limpar</a>
        <a href="{{ route('cliente.show') }}" class="btn btn-dark">Consultar Cliente</a>
    </form>

</main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
