@extends('layouts.public-layout')
@section('title','home')
@section('content')

<div class="lg:max-w-6xl w-11/12 mx-auto p-5">
    <h1 class="text-3xl font-bold text-center mb-6 text-blue-400">Conceptos Web</h1>
    
    <!-- Paso 3: Conceptos Web -->
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-blue-900">Hosting</h2>
            <p class="text-gray-600 mt-2">Servicio que permite almacenar archivos y datos de una página web.</p>
            <p class="text-gray-600 mt-2 font-semibold">Adquisición:</p>
            <p class="text-gray-600">Se contrata a un proveedor con servidores compartidos, VPS o dedicados.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-blue-900">Dominio</h2>
            <p class="text-gray-600 mt-2">Nombre único que identifica una página web en Internet.</p>
            <p class="text-gray-600 mt-2 font-semibold">Adquisición:</p>
            <p class="text-gray-600">Se compra a través de registradores como Namecheap o GoDaddy.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-blue-900">Diseño Responsive</h2>
            <p class="text-gray-600 mt-2">Técnica que adapta la interfaz a diferentes dispositivos.</p>
            <p class="text-gray-600 mt-2 font-semibold">Aplicación:</p>
            <p class="text-gray-600">Se logra con HTML, CSS (media queries) y frameworks como Bootstrap.</p>
        </div>
    </div>
    
    <!-- Paso 4: Análisis del Problema -->
    <h2 class="text-2xl font-bold mt-10 text-blue-400">Requerimientos de la Solución Web</h2>
    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <ul class="list-disc pl-5 text-gray-600">
            <li>Sección de información corporativa: historia, servicios, noticias.</li>
            <li>Portal de postulaciones con validación de perfiles.</li>
            <li>Gestión de procesos legales y acceso restringido.</li>
            <li>Seguridad y respaldo de datos con SSL y backups automáticos.</li>
        </ul>
    </div>
    
    <!-- Paso 5: Frameworks y Herramientas -->
    <h2 class="text-2xl font-bold mt-10 text-blue-400">Frameworks y Herramientas</h2>
    <div class="grid md:grid-cols-3 gap-6 mt-4">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-blue-800">Frontend</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Bootstrap</li>
                <li>Tailwind CSS</li>
                <li>Vue.js / React</li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-blue-800">Backend</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Laravel</li>
                <li>Django</li>
                <li>Node.js con Express</li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-blue-800">Bases de Datos</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>MySQL / PostgreSQL</li>
                <li>MongoDB</li>
            </ul>
        </div>
    </div>

    <!-- Paso 6: Análisis del Problema -->
    <h2 class="text-2xl font-bold mt-10 text-blue-400">Reconocimiento y Análisis del Problema</h2>
    <div class="bg-white p-6 rounded-lg shadow-md mt-4">
        <h3 class="text-lg font-semibold text-blue-800">Descripción del Problema</h3>
        <p class="text-gray-600">La firma de abogados “Te Apoyamos SAS” busca expandir su presencia en el mercado global mediante una aplicación web que le permita dar a conocer sus servicios, gestionar la contratación de nuevos profesionales y administrar los procesos legales en curso. Además, la firma requiere altos estándares de seguridad y respaldo de datos.</p>
        
        <h3 class="text-lg font-semibold text-blue-800 mt-4">Requerimientos del Sistema</h3>
        <ul class="list-disc pl-5 text-gray-600">
            <li>Sección informativa sobre la firma: trayectoria, servicios, noticias, profesionales y ubicación.</li>
            <li>Portal para el registro y evaluación de profesionales interesados en vincularse a la firma.</li>
            <li>Gestión de procesos legales con registro de clientes, tipo de procesos y avances.</li>
            <li>Implementación de seguridad y respaldo de datos con protección SSL y copias de seguridad.</li>
        </ul>
        
        <h3 class="text-lg font-semibold text-blue-800 mt-4">Consideraciones Tecnológicas</h3>
        <p class="text-gray-600">Para el desarrollo del sistema se recomienda utilizar:</p>
        <ul class="list-disc pl-5 text-gray-600">
            <li><strong>Frontend:</strong> HTML, CSS, JavaScript (React, Vue.js).</li>
            <li><strong>Backend:</strong> PHP (Laravel), Node.js o Python (Django/Flask).</li>
            <li><strong>Base de Datos:</strong> MySQL, PostgreSQL o MongoDB.</li>
            <li><strong>Seguridad:</strong> Implementación de JWT, OAuth y encriptación SSL/TLS.</li>
            <li><strong>Infraestructura:</strong> Despliegue en servidores en la nube como AWS o DigitalOcean.</li>
        </ul>
    </div>
</div>

@endsection
