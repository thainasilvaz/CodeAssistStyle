<x-app-layout>
  <div class="h-screen w-screen bg-darkfundo">
    <div class="container w-screen h-[86vh] bg-darkfundo">
      <div class="w-screen h-1/4 grid grid-cols-3 justify-items-center">
        <div class="w-1/3 h-full flex flex-col justify-content-center place-items-center pt-12 text-branco text-[20px]">
          <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="bg-maincolor-100 w-52 h-auto m-2 px-4 py-1  rounded-[15px]">Criar</button>
        </div>
        <div class="w-2/3 h-full flex text-[57px] justify-center bg-darkfundo  text-branco pt-5">
          <a>Listas de&nbsp<a class="text-maincolor-100">Tarefas</a></a>
        </div>
      </div>
      <div class="grid grid-cols-3 auto-rows-max  w-screen h-3/4  justify-items-center content-evenly  bg-darkfundo">
        <div class="flex flex-col text-darkfundo bg-branco    justify-center rounded-xl">
          <div class="flex w-full h-1/5 justify-center ">
            <a class="uppercase text-[25px] font-bold m-3">Título</a>
          </div>
          <div class="w-full h-4/5 mx-3 space-y-2">
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <input type="text" class=" align-middle underline underline-offset-2 capitalize whitespace-pre border-none font-medium text-sm pl-1 h-1 " placeholder="tarefa1">
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 2 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 3 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 4 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 5 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 6 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 7 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 8 </a>
            </div>
          </div>

        </div>
        <div class="flex flex-col text-darkfundo bg-branco h-1/2 w-1/2  justify-center rounded-xl">
          <div class="flex w-full h-1/5 justify-center ">
            <a class="uppercase text-[25px] font-bold m-3">Título</a>
          </div>
          <div class="w-full h-4/5 mx-3 space-y-2">
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <input type="text" class=" align-middle underline underline-offset-2 capitalize whitespace-pre border-none font-medium text-sm pl-1 h-1 " placeholder="tarefa1">
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 2 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 3 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 4 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 5 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 6 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 7 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 8 </a>
            </div>
          </div>

        </div>
        <div class="flex flex-col text-darkfundo bg-branco h-1/2 w-1/2  justify-center rounded-xl">
          <div class="flex w-full h-1/5 justify-center ">
            <a class="uppercase text-[25px] font-bold m-3">Título</a>
          </div>
          <div class="w-full h-4/5 mx-3 space-y-2">
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <input type="text" class=" align-middle underline underline-offset-2 capitalize whitespace-pre border-none font-medium text-sm pl-1 h-1 " placeholder="tarefa1">
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 2 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 3 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 4 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 5 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 6 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 7 </a>
            </div>
            <div>
              <input type="checkbox" class="rounded bg-checkbox border-none focus:ring-maincolor-200 checked:bg-maincolor-100 hover:bg-maincolor-100 checked:hover:bg-maincolor-100 focus:bg-maincolor-100 checked:focus:bg-maincolor-100 ">
              <a class="align-middle underline underline-offset-2 capitalize whitespace-pre">tarefa 8 </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    

    <div id="defaultModal"  tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <form action="{{route('criar_modulo')}}" method="post" >
            @csrf
            <input type="text" name="nome" placeholder="Nome do módulo">
            <select name="linguagem">
                <option value="java">Java</option>
                <option value="php">PHP</option>
                <option value="html">HTML</option>
                <!-- Adicione as outras opções de linguagem aqui -->
            </select>
            <button type="submit">Criar Módulo</button>         
        </form>
    </div>
    </div>

    
 </x-app-layout>