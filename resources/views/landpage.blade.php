<x-app-layout>

    <!-- Primeira parte da landpage -->
    <section class="first-section">
        <div class="box-img-main">
            <img class="img-landpage" src="images/studying.png" alt="studying"> 
        </div>

        <div>
            <h1 class="fontum"><strong>O melhor ambiente para auxiliar <br> seus estudos de programação<strong></h1>
            <a class="btn-action" href="{{ route('login') }}">Comece agora</a>
        </div>
    </section> 
    <!-- Segunda parte da landpage -->
    <section class="second-section">
        <div>
            <h1 class="fontum"><strong>Você sabia que a <u>técnica pomodoro</u> promete ajudar quem tem <br>dificuldade em terminar as suas tarefas no prazo?<br>
Essa metodologia garante o fim desse ciclo vicioso e ainda <br><u>aumenta sua produtividade.</u><br>
Trata-se de uma ferramenta simples e eficaz para que você <br>
gerencie o seu tempo.<strong></h1>
            <a class="btn-action" href="{{ url('/pomodoro') }}">Ferramenta Pomodoro</a>
        </div>

        <div class="box-img-main">
            <img class="img-landpage" src="images/clocklandpage.png" alt="clock"> 
        </div>
    </section>
    <!-- Terceira parte da landpage -->
    <section class="third-section">
        <div class="box-img-main">
            <img class="img-landpage" src="images/computerlandpage.png" alt="computer"> 
        </div>

        <div>
            <h1 class="fontum"><strong>Salve parte dos seus códigos para não <br> precisar codificar tudo novamente!<strong></h1>
            <a class="btn-action" href="{{ url('/blococodigo') }}">Salvar Blocos</a>
        </div>
    </section> 
    <!-- Quarta parte da landpage -->
    <section class="fourth-section">
        <div>
            <h1 class="fontum"><strong>Encontre a clareza mental que você tanto busca. <br>
Foque no que é importânte anotando tudo o que 
você precisa fazer!<strong></h1>
            <a class="btn-action" href="{{ url('/tarefa') }}">Lista de Tarefas</a>
        </div>

        <div class="box-img-main">
            <img class="img-landpage" src="images/listalandpage.png" alt="clock"> 
        </div>
    </section>
    <!-- Quinta parte da landpage -->
    <section class="fifth-section">
        <div class="box-img-main">
            <img class="img-landpage" src="images/salvarmateriais.png" alt="computer"> 
        </div>

        <div>
            <h1 class="fontum"><strong>Precisa de um lugar para armazenar seus links e arquivos?<br>
O Code Assist é a solução!  <strong></h1>
            <a class="btn-action" href="{{ url('/materiais') }}">Guardar Materiais</a>
        </div>
    </section> 


</x-app-layout>