<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>
    <body>
        @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
        @endif

        @if (isset($sucesso) && $sucesso)
        Filme cadastrado com sucesso!
        @endif

        @if (isset($ocorreuErro) && $ocorreuErro)
        Ops, ocorreu um erro, tente novamente!
        @endif

        <br>
        <br>
        @endif
        <h1 align="center">Formulário</h1>
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="filme/add">
        {{csrf_field()}}
            <div class="form-group col-6 m-auto">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="title" id="titulo" value="{{old('title')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="rating" id="classificacao" value="{{old('rating')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="premios">Prêmios</label>
                <input type="text" class="form-control" name="awards" id="premios" value="{{old('awards')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="duracao">Duração</label>
                <input type="text" class="form-control" name="length" id="duracao" value="{{old('length')}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" class="form-control" name="release_date">
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
