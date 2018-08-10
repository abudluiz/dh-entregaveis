<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>
    <body>
    
<!-- Tela Erro de Resultado-->
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

<!-- Confirmação de Alteração-->
        @if (isset($sucesso) && $sucesso)
        Filme cadastrado com sucesso!
        @endif

        @if (isset($ocorreuErro) && $ocorreuErro)
        Ops, ocorreu um erro, tente novamente!
        @endif




        <h1 align="center">Formulário</h1>
        <form id="adicionarFilme" name="/filmes/edit/{{$filme->id}" method="POST" action="filme/add">
        {{csrf_field()}}
        {{ method_field('PUT') }}
            <div class="form-group col-6 m-auto">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="title" id="titulo" value="{{$filme->title}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="rating" id="classificacao" value="{{$filme->rating}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="premios">Prêmios</label>
                <input type="text" class="form-control" name="awards" id="premios" value="{{$filme->awards}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="duracao">Duração</label>
                <input type="text" class="form-control" name="length" id="duracao" value="{{$filme->length}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" class="form-control" name="release_date" value="{{ $filme->release_date }}">
                </div> 
                </div>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
