{{-- Front-end começa aqui! --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('site/CSS/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{asset('site/JS/script.js')}}"></script>
    <title>Connect Colab</title>
</head>
<body id="corpo">
    <header id="cabecalho">
        <img src="{{asset('site/IMAGEM/logo.png')}}" alt="logo do site">
        <nav id="nav">
            <ul>
                <li><a href="#" onclick="todos()">Todos</a></li>
                <li><a href="#" onclick="formados()">Formados</a></li>
                <li><a href="#" onclick="emFormacao()">Em formação</a></li>
            </ul>
        </nav>
        <div id="div-dark">
          <a class="botao" href="{{asset('/login')}}">Cadastrar</a>
          <a id="lua" href="#" onclick="trocaPreto()"><i class='bx bxs-moon'></i></a>
          <a id="sol" href="#" onclick="trocaBranco()"><i class='bx bxs-sun'></i></a>
        </div>
    </header>
    <main id="principal">
        <aside>
            <div id="titulo-filtro">
                <i class='bx bx-filter-alt'></i>
                <span>Filtrar</span>
            </div>
            <div class="topic" onclick="toggleSubtopics(this)">Nomes
            
                <div class="subtopics">
                @foreach ($alunos as $aluno)
                    <p><a href="#">{{$aluno->nome}}</a></p>
                    @endforeach
                </div>
            
            </div>
            <div class="topic" onclick="toggleSubtopics(this)">Graduação
            
                <div class="subtopics">
                @foreach ($cursos as $curso)
                    <p><a href="#">{{$curso->curso}}</a></p>
                    @endforeach
                </div>
            
            </div>
        </aside>

        <div id="container" class="containers">
            <h1>Todos</h1>
            <div id="container-cards">
            @foreach ($alunos as $aluno)
                <div class="card">
                    <img src="{{$aluno->imagem}}" alt="foto do aluno">
                    <div class="sobre-aluno">
                        <div class="nome-aluno">{{$aluno->nome}}</div>
                        <p class="curso-aluno">{{$aluno->curso->curso}}</p></p>
                        <p class="descricao-aluno">{{$aluno->descricao}}</p></p>
                        <div class="ultimo">
                          <a href="#">Contratar</a>
                          @if($aluno->contratado)
                          <p class="situacao-aluno">formado</p>
                          @else
                          <p class="situacao-aluno">em formação</p>
                          @endif
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

        <div id="container2" class="containers">
            <h1>Formados</h1>
            <div id="container-cards">
            @foreach ($alunos as $aluno)
            @if($aluno->contratado)
                <div class="card">
                    <img src="{{$aluno->imagem}}" alt="foto do aluno">
                    <div class="sobre-aluno">
                        <div class="nome-aluno">{{$aluno->nome}}</div>
                        <p class="curso-aluno">{{$aluno->curso->curso}}</p></p>
                        <p class="descricao-aluno">{{$aluno->descricao}}</p></p>
                        <div class="ultimo">
                          <a href="#">Contratar</a>
                          <p class="situacao-aluno">formado</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div>


        <div id="container3" class="containers">
            <h1>Em formação</h1>
            <div id="container-cards">
            @foreach ($alunos as $aluno)
            @if(!$aluno->contratado)
                <div class="card">
                    <img src="{{$aluno->imagem}}" alt="foto do aluno">
                    <div class="sobre-aluno">
                        <div class="nome-aluno">{{$aluno->nome}}</div>
                        <p class="curso-aluno">{{$aluno->curso->curso}}</p></p>
                        <p class="descricao-aluno">{{$aluno->descricao}}</p></p>
                        <div class="ultimo">
                          <a href="#">Contratar</a>
                          <p class="situacao-aluno">formado</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div>

    </main>

    <script>
      function toggleSubtopics(topic) {
  const subtopics = topic.querySelector('.subtopics');
  subtopics.style.display = subtopics.style.display === 'block' ? 'none' : 'block';
}
    </script>

</body>
</html>
