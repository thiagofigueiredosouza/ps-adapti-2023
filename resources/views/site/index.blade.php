{{-- Front-end começa aqui! --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('site/CSS/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{asset('site/JS/script.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <header id="cabecalho">
        <img src="./logo.png" alt="logo do site tal">
        <nav id="nav">
            <ul>
                <li><a href="#">Todos</a></li>
                <li><a href="#">Contratados</a></li>
                <li><a href="#">Contratar</a></li>
            </ul>
        </nav>
        <a class="botao" href="{{asset('/login')}}">Cadastrar</a>
    </header>
    <main id="principal">

    @foreach ($alunos as $aluno)
    <p>{{$aluno->nome}}</p>
    @if ($aluno->contratado)
      <p>contratado</p>
    @endif
    @endforeach


        <aside>
            <div id="titulo-filtro">
                <i class='bx bx-filter-alt'></i>
                <span>Filtrar</span>
            </div>
            <div class="topic" onclick="toggleSubtopics(this)">Nomes
            @foreach ($alunos as $aluno)
                <div class="subtopics">
                    <a href="#">{{$aluno->nome}}</a>
                </div>
            @endforeach
            </div>
            <div class="topic" onclick="toggleSubtopics(this)">Graduação
            @foreach ($cursos as $curso)
                <div class="subtopics">
                    <a href="#">{{$curso->curso}}</a>
                </div>
            @endforeach
            </div>
        </aside>

        <div id="container">
            <h1>Todos</h1>
            <div id="container-cards">
            @foreach ($alunos as $aluno)
            @if($aluno->nome == )
                <div class="card">
                    <img src="{{$aluno->imagem}}" alt="foto do aluno">
                    <div class="sobre-aluno">
                        <div class="nome-aluno">{{$aluno->nome}}</div>
                        @foreach ($cursos as $curso)
                        <p class="curso-aluno">{{$aluno->curso->curso}}</p>
                        @endforeach
                        @if($aluno->contratado)
                        <div class="ultimo">
                          @if($aluno->formado)
                          <a href="#">Contratado</a>
                          @else
                          <a href="#">Contratar</a>
                          @endif
                          <p class="situacao-aluno">formado</p>
                        </div>
                        @else
                        <div class="ultimo">
                        @if($aluno->formado)
                          <a href="#">Contratado
                          </a>
                          @else
                          <a href="/">Contratar</a>
                          @endif
                          <p class="situacao-aluno">em formação</p>
                        </div>
                        @endif
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </main>

</body>
</html>
