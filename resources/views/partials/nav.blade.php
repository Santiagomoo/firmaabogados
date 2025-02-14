<div id="inicio">
<nav class="w-screen py-5 px-10 bg-slate-100 shadow-slate-400 shadow-md fixed top-0 left-0 z-50">
    <div class="grid grid-cols-12 md:w-10/12 w-screen max-w-full mx-auto gap-y-2">
        <div class="xl:col-span-8 lg:col-span-6 col-span-12">
            <ul class="flex flex-row gap-x-4 place-content-start">
                <a href="#inicio" class="cursor-pointer rounded-xl border-b-2 py-2 px-4 text-blue-950/60 hover:bg-white transition duration-100">
                    <li>Inicio</li>
                </a>
                <a href="#servicios" class="cursor-pointer rounded-xl border-b-2 py-2 px-4 text-blue-950/60 hover:bg-white transition duration-100">
                    <li>Servicios</li>
                </a>
                <a href="#trayectoria" class="cursor-pointer rounded-xl border-b-2 py-2 px-4 text-blue-950/60 hover:bg-white transition duration-100">
                    <li>Trayectoria</li>
                </a>
                <a href="#noticias" class="cursor-pointer rounded-xl border-b-2 py-2 px-4 text-blue-950/60 hover:bg-white transition duration-100">
                    <li>Noticias</li>
                </a>
            </ul>
        </div>

        <div class="xl:col-span-4 lg:col-span-6 lg:flex hidden flex-row gap-x-4 lg:place-content-end place-content-center">
            <a href="{{ route('login') }}" class="cursor-pointer rounded-xl border-b-2 py-2 px-4 font-bold bg-blue-200 text-blue-950/60">
                Iniciar sesión
            </a>
            <a href="{{ route('register') }}" class="cursor-pointer rounded-xl border-2 py-2 px-4 font-bold text-blue-950/60">
                Registrarse
            </a>
        </div>
    </div>

</nav>
