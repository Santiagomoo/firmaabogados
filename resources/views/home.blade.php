@extends('layouts.public-layout')
@section('title','home')
@section('content')

<header class="w-full h-[500px] bg-blue-100">
    <div class="h-full flex flex-col justify-center items-center">
    <h1 class="text-5xl text-center font-extrabold text-blue-950/60">Bienvenido a [nombre de la empresa]</h1>
    <p class="text-lg text-blue-950/60">Este es un sitio web de ejemplo</p>
    </div>
    </div>
    
    <div id="servicios"></div>
</header>


<article class="grid grid-cols-12 md:w-9/12 w-11/12 mx-auto gap-4 my-10">

    <!--Cuadro especialidades-->
    <div class="xl:col-span-6 col-span-12 flex border-x-2 shadow-lg shadow-slate-400 rounded-2xl p-10">
        <div class="flex flex-row flex-wrap gap-y-4">
            <h1 class="text-xl font-extrabold text-blue-400">Especialidades</h1>
            <p class="text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quia adipisci placeat illo, sint beatae mollitia delectus iusto sit reprehenderit reiciendis natus repellat optio. Quaerat rerum voluptates consequatur culpa soluta?
            </p>
            <ul class="text-md text-blue-950 grid xl:grid-cols-2 lg:grid-cols-4 grid-cols-2 flex-wrap gap-3">

                <!--Derecho penal-->
                <li class="flex items-center gap-x-3 px-5 rounded-md border-2 border-green-700 py-1 bg-green-700">
                    <div class="rounded-md p-1 border-2 border-green-200 w-auto h-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#" viewBox="0 0 16 16">
                            <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5 5 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334"/>
                        </svg>
                    </div>
                    <span class="flex items-center font-bold">Derecho penal</span>
                </li>

                <!--Civil-->
                <li class="flex items-center gap-x-3 px-5 rounded-md border-2 border-blue-400 bg-blue-400 py-1">
                    <div class="rounded-md p-1 border-2 border-blue-200 w-auto h-auto flex items-center justify-center">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#" viewBox="0 0 16 16">
                        <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5 5 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334"/>
                        </svg>
                    </div>
                    <span class="flex items-center font-bold">Civil</span>
                </li>

                <!--Laboral-->
                <li class="flex items-center gap-x-3 px-5 rounded-md border-2 border-yellow-400 bg-yellow-400 py-1">
                    <div class="rounded-md p-1 border-2 border-yellow-200 w-auto h-auto flex items-center justify-center">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#" viewBox="0 0 16 16">
                        <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5 5 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334"/>
                        </svg>
                    </div>
                    <span class="flex items-center font-bold">Laboral</span>
                </li>

                <!--Coorporativo-->
                <li class="flex items-center gap-x-3 px-5 rounded-md border-2 border-orange-600 bg-orange-600 py-1">
                    <div class="rounded-md p-1 border-2 border-orange-100 w-auto h-auto flex items-center justify-center">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#" viewBox="0 0 16 16">
                        <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5 5 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334"/>
                        </svg>
                    </div>
                    <span class="flex items-center font-bold">Coorporativo</span>
                </li>
            </ul>
        </div>                
    </div>

    <!--Derecho penal-->
    <div class="md:col-span-6 col-span-12 flex border-x-2 shadow-sm bg-gradient-to-r from-green-900 via-green-800 to-green-900 shadow-green-400 rounded-2xl p-10">
        <div class="flex flex-row flex-wrap gap-y-4 place-content-start">
            <h1 class="text-xl font-extrabold text-green-600">Derecho penal</h1>
            <p class="text-lg text-green-300">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quia adipisci placeat illo, sint beatae mollitia delectus iusto sit reprehenderit reiciendis natus repellat optio. Quaerat rerum voluptates consequatur culpa soluta?
            </p>
        </div>                
    </div>

    <!--Civil-->
    <div class="xl:col-span-4 md:col-span-6 col-span-12 flex border-x-2 shadow-sm bg-gradient-to-r from-blue-600 via-blue-500 to-blue-600 shadow-blue-600 rounded-2xl p-10">
        <div class="flex flex-row flex-wrap gap-y-4 place-content-start">
            <h1 class="text-xl font-extrabold text-blue-300">Civil</h1>
            <p class="text-lg text-blue-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quia adipisci placeat illo, sint beatae mollitia delectus iusto sit reprehenderit reiciendis natus repellat optio. Quaerat rerum voluptates consequatur culpa soluta?
            </p>
        </div>                
    </div>
   
    <!--Laboral-->
    <div class="xl:col-span-4 md:col-span-6 col-span-12 flex border-x-2 shadow-sm bg-gradient-to-r from-yellow-600 via-yellow-500 to-yellow-600 shadow-yellow-600 rounded-2xl p-10">
        <div class="flex flex-row flex-wrap gap-y-4 place-content-start">
            <h1 class="text-xl font-extrabold text-yellow-950">Laboral</h1>
            <p class="text-lg text-yellow-800">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quia adipisci placeat illo, sint beatae mollitia delectus iusto sit reprehenderit reiciendis natus repellat optio. Quaerat rerum voluptates consequatur culpa soluta?
            </p>
        </div>                
    </div>

    <!--Coorporativo-->
    <div class="xl:col-span-4 md:col-span-6 col-span-12 flex border-x-2 shadow-sm bg-gradient-to-r from-orange-600 via-orange-500 to-orange-600 shadow-orange-600 rounded-2xl p-10">
        <div class="flex flex-row flex-wrap gap-y-4 place-content-start">
            <h1 class="text-xl font-extrabold text-orange-950">Coorporativo</h1>
            <p class="text-lg text-orange-100">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quia adipisci placeat illo, sint beatae mollitia delectus iusto sit reprehenderit reiciendis natus repellat optio. Quaerat rerum voluptates consequatur culpa soluta?
            </p>
        </div>                
    </div>

    <!--FUNDADORES-->
    <div class="col-span-12 my-10">
        <h1 class="text-2xl font-extrabold">Equipo de abogados</h1>
        <p class="mt-3 text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quia adipisci placeat illo, sint beatae mollitia delectus iusto sit reprehenderit reiciendis natus repellat optio. Quaerat rerum voluptates consequatur culpa soluta?</p>
    </div>
    <!--Equipo 1-->
    <div class="2xl:col-span-3 lg:col-span-6 col-span-12 flex flex-col gap-y-3 border-0 border-b-2 p-5 border-blue-200 shadow-md shadow-blue-300 rounded-2xl">
        <div class="rounded-2xl overflow-hidden">
            <!--Foto tomada de https://help.fiverr.com/hc/es/articles/4416325224977-Perfecciona-tu-foto-de-perfil, es solo usada para eventos practicos de diseno-->
            <img src="{{asset('img/EquipoEjemplo1.jpg')}}" alt="imagen" class="w-full h-60 object-cover">
        </div>
        <h2 class="text-xl font-extrabold">Luisa Martinez</h2>
        <div class="flex justify-between text-gray-500/80 w-full">
            <span>Abogada</span>
            <span>5 años de experiencia</span>
        </div>
    </div>

    <!--Equipo 2-->
    <div class="2xl:col-span-3 lg:col-span-6 col-span-12 flex flex-col gap-y-3 border-0 border-b-2 p-5 border-pink-200 shadow-md shadow-pink-300 rounded-2xl">
        <div class="rounded-2xl overflow-hidden">
            <!--Foto tomada de https://help.fiverr.com/hc/es/articles/4416325224977-Perfecciona-tu-foto-de-perfil, es solo usada para eventos practicos de diseno-->
            <img src="{{asset('img/EquipoEjemplo1.jpg')}}" alt="imagen" class="w-full h-60 object-cover">
        </div>
        <h2 class="text-xl font-extrabold">Luisa Martinez</h2>
        <div class="flex justify-between text-gray-500/80 w-full">
            <span>Abogada</span>
            <span>5 años de experiencia</span>
        </div>
    </div>

    <!--Equipo 3-->
    <div class="2xl:col-span-3 lg:col-span-6 col-span-12 flex flex-col gap-y-3 border-0 border-b-2 p-5 border-cyan-200 shadow-md shadow-blue-300 rounded-2xl">
        <div class="rounded-2xl overflow-hidden">
            <!--Foto tomada de https://help.fiverr.com/hc/es/articles/4416325224977-Perfecciona-tu-foto-de-perfil, es solo usada para eventos practicos de diseno-->
            <img src="{{asset('img/EquipoEjemplo1.jpg')}}" alt="imagen" class="w-full h-60 object-cover">
        </div>
        <h2 class="text-xl font-extrabold">Luisa Martinez</h2>
        <div class="flex justify-between text-gray-500/80 w-full">
            <span>Abogada</span>
            <span>5 años de experiencia</span>
        </div>
    </div>

    <!--Equipo 4-->
    <div class="2xl:col-span-3 lg:col-span-6 col-span-12 flex flex-col gap-y-3 border-0 border-b-2 p-5 border-violet-200 shadow-md shadow-violet-300 rounded-2xl">
        <div class="rounded-2xl overflow-hidden">
            <!--Foto tomada de https://help.fiverr.com/hc/es/articles/4416325224977-Perfecciona-tu-foto-de-perfil, es solo usada para eventos practicos de diseno-->
            <img src="{{asset('img/EquipoEjemplo1.jpg')}}" alt="imagen" class="w-full h-60 object-cover">
        </div>
        <h2 class="text-xl font-extrabold">Luisa Martinez</h2>
        <div class="flex justify-between text-gray-500/80 w-full">
            <span>Abogada</span>
            <span>5 años de experiencia</span>
        </div>
    </div>

    <!--Ubicacion-->
    <section class="md:col-span-6 col-span-12 flex flex-col gap-y-3 border-l-2 border-blue-600 rounded-xl shadow-md shadow-gray-100 p-10 my-10">
        <h1 class="text-2xl font-extrabold text-cyan-600">Nos ubicados cerca tuyo</h1>
        <p class="text-lg text-gray-800">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quia adipisci placeat illo, sint beatae mollitia delectus iusto sit reprehenderit reiciendis natus repellat optio. Quaerat rerum voluptates consequatur culpa soluta?</p>
    </section>

    <section class="md:col-span-6 col-span-12 flex flex-col place-content-center gap-y-3 border-r-2 border-blue-600 rounded-xl shadow-md shadow-gray-100 p-10 md:my-10">
        <img src="{{ asset('img/map.png')}}" width='30%'class='self-center align-start' alt="mapa de ubicacion">
    </section>

    <div id="trayectoria"></div>

    <!--Historia empresa-->
    <div class="col-span-12 grid grid-cols-12 border-2 border-blue-100/50 my-10 p-10 rounded-2xl md:gap-10 gap-4">

        <!--Historia-->
        <div class="xl:col-span-4 md:col-span-6 col-span-12 border-t-2 border-green-600">
            <h1 class="text-xl font-bold my-5">Historia</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis in nemo perspiciatis veniam ratione architecto cum atque. Debitis praesentium saepe eum mollitia impedit magni unde explicabo, nihil pariatur ex exercitationem.</p>
        </div>

        <!--Vision-->
        <div class="xl:col-span-4 md:col-span-6 col-span-12 border-t-2 border-cyan-600">
            <h1 class="text-xl font-bold my-5">Vision</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis in nemo perspiciatis veniam ratione architecto cum atque. Debitis praesentium saepe eum mollitia impedit magni unde explicabo, nihil pariatur ex exercitationem.</p>
        </div>

        <!--Mision-->
        <div class="xl:col-span-4 col-span-12 border-t-2 border-pink-600">
            <h1 class="text-xl font-bold my-5">Mision</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis in nemo perspiciatis veniam ratione architecto cum atque. Debitis praesentium saepe eum mollitia impedit magni unde explicabo, nihil pariatur ex exercitationem.</p>
        </div>

        <!--Reconocimientos-->
        <div class="col-span-12">
            <h1 class="text-2xl font-extrabold mb-5">Reconocimientos Internacionales</h1>
            
            <!--Premios-->
            <div class="grid grid-cols-12 gap-4">
                
                <!--Premio derecho Chambers and Partners-->
                <div class="flex items-center lg:col-span-3 md:col-span-6 col-span-12 gap-x-3 px-5 rounded-md border-2 border-green-600 py-1">
                    <div class="rounded-md p-1 border-2 border-green-600 w-auto h-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z"/>
                          </svg>
                    </div>
                    <span class="flex items-center">Chambers and Partners</span>
                </div>
                
                <!--Premio The Legal 500-->
                <div class="flex items-center lg:col-span-3 md:col-span-6 col-span-12 gap-x-3 px-5 rounded-md border-2 border-violet-300 py-1">
                    <div class="rounded-md p-1 border-2 border-violet-300 w-auto h-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z"/>
                          </svg>
                    </div>
                    <span class="flex items-center">The Legal 500</span>
                </div>

                <!--Benchmark Litigation-->
                <div class="flex items-center lg:col-span-3 md:col-span-6 col-span-12 gap-x-3 px-5 rounded-md border-2 border-yellow-600 py-1">
                    <div class="rounded-md p-1 border-2 border-yellow-600 w-auto h-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z"/>
                          </svg>
                    </div>
                    <span class="flex items-center">Benchmark Litigation</span>
                </div>

                <!--Premio Latin Lawyer 250-->
                <div class="flex items-center lg:col-span-3 md:col-span-6 col-span-12 gap-x-3 px-5 rounded-md border-2 border-pink-400 py-1">
                    <div class="rounded-md p-1 border-2 border-pink-400 w-auto h-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z"/>
                          </svg>
                    </div>
                    <span class="flex items-center">Latin Lawyer 250</span>
                </div>

            </div>
        </div>
    </div>
    <!--Formulario-->
    <div class="col-span-12 bg-gray-100 border-2 border-gray p-10 rounded-2xl shadow-lg shadow-blue-200">
    <h1 class="text-2xl font-extrabold mb-10">Registra la hoja de vida con nosotros</h1>
    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
        <!-- Nombre -->
        <div>
            <label class="block text-gray-600 font-medium mb-1">Nombre Completo</label>
            <input type="text" name="nombre" required placeholder="Ej: Juan Pérez"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Correo -->
        <div>
            <label class="block text-gray-600 font-medium mb-1">Correo Electrónico</label>
            <input type="email" name="correo" required placeholder="Ej: correo@example.com"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Teléfono -->
        <div>
            <label class="block text-gray-600 font-medium mb-1">Teléfono</label>
            <input type="tel" name="telefono" required placeholder="Ej: +123 456 7890"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Especialidad -->
        <div>
            <label class="block text-gray-600 font-medium mb-1">Especialidad</label>
            <select name="especialidad" required
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="" disabled selected>Selecciona tu especialidad</option>
                <option value="penal">Derecho Penal</option>
                <option value="civil">Derecho Civil</option>
                <option value="laboral">Derecho Laboral</option>
                <option value="corporativo">Derecho Corporativo</option>
            </select>
        </div>

        <!-- Años de experiencia -->
        <div>
            <label class="block text-gray-600 font-medium mb-1">Años de Experiencia</label>
            <input type="number" name="experiencia" min="0" required placeholder="Ej: 5"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Subir CV -->
        <div>
            <label class="block text-gray-600 font-medium mb-1">Adjuntar Hoja de Vida (PDF/Word)</label>
            <input type="file" name="cv" accept=".pdf, .doc, .docx" required
                class="w-full border file:cursor-pointer border-gray-300 rounded-lg px-4 py-2 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-200 file:text-blue-950 hover:file:bg-blue-100">
        </div>

        <!-- Botón Enviar -->
        <div class="text-center">
            <button type="submit"
                class="bg-blue-200 text-blue-950 font-bold px-6 py-2 rounded-lg hover:bg-blue-400 transition duration-100">
                Enviar Postulación
            </button>
        </div>
    </div>

</article>

<div id="noticias"></div>
<!--Noticias-->
<section class="w-full p-5">
    <div class="bg-gradient-to-r from-blue-200 via-green-100 to-pink-100 grid grid-cols-12 rounded-3xl p-10 gap-5">
        <div class="text-blue-950 font-extrabold text-3xl col-span-12 py-5 pb-10">
        <h1 class="text-center">Noticias de ultima hora</h1>
        </div>

    <!-- Noticia 1 -->
    <div class="xl:col-span-4 md:col-span-6 col-span-12 border-2 border-gray-100 overflow-hidden rounded-2xl">
        <div class="w-full h-[300px] relative">
            <img src="{{asset('img/noticia1.jpg')}}" alt="noticia1" class="w-full h-full object-cover brightness-25">
            <h3 class="bg-white text-dark xl:w-10/12 w-full absolute bottom-0 left-0 rounded-tr-md z-10 pl-10">
                Noticia número 1
            </h3>
        </div>
    </div>

    <!-- Noticia 2 -->
    <div class="xl:col-span-3 md:col-span-6 col-span-12 border-2 border-gray-100 overflow-hidden rounded-2xl">
        <div class="w-full h-[300px] relative">
            <img src="{{asset('img/noticia2.webp')}}" alt="noticia2" class="w-full h-full object-cover brightness-25">
            <h3 class="bg-white text-dark xl:w-10/12 w-full absolute bottom-0 left-0 rounded-tr-md z-10 pl-10">
                Noticia número 2
            </h3>
        </div>
    </div>

    <!--Clima-->
    <div class="xl:col-span-5 col-span-12 border-2 border-gray-100 overflow-hidden rounded-2xl">
        <div class="w-full h-[300px] relative">
            <img src="{{asset('img/weather.jpg')}}" alt="noticia2" class="w-full h-full object-cover brightness-25">
            <h3 class="bg-white text-dark xl:w-10/12 w-full absolute bottom-0 left-0 rounded-tr-md z-10 pl-10">
                Noticia número 3
            </h3>
        </div>
    </div>

</section>
@endsection