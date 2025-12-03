@extends('web.app')
@section('header')
@endsection
@section('contenido')
    <form method="GET" action="{{route('web.index')}}">
        <div id="container">
            <div class="tailwind">
                <div id="node-0_7_container" style="height: 100%;">
                    <div class="min-h-screen bg-white">
                        <div
                            class="bg-gradient-to-r from-blue-600 via-blue-700 to-blue-800 text-white py-4 overflow-hidden relative">
                            <div class="absolute inset-0 opacity-20">
                                <div
                                    class="absolute top-0 left-1/4 w-64 h-64 bg-white rounded-full mix-blend-overlay filter blur-3xl animate-pulse">
                                </div>
                                <div
                                    class="absolute bottom-0 right-1/4 w-64 h-64 bg-white rounded-full mix-blend-overlay filter blur-3xl animate-pulse delay-700">
                                </div>
                            </div>
                            <div class="container mx-auto px-4 relative z-10">
                                <div class="flex flex-col md:flex-row items-center justify-center gap-6 text-center md:text-left"
                                    style="opacity: 1; transform: none;">
                                    <div class="flex items-center gap-3" style="transform: none;">
                                        <div class="bg-white/20 backdrop-blur-sm p-3 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-sparkles w-6 h-6 text-yellow-300" aria-hidden="true">
                                                <path
                                                    d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                </path>
                                                <path d="M20 2v4"></path>
                                                <path d="M22 4h-4"></path>
                                                <circle cx="4" cy="20" r="2"></circle>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-2"><span
                                                    class="text-sm md:text-base">¡Bienvenido a Medical Supplies!</span>
                                            </div>
                                            <p class="text-xs md:text-sm text-blue-100">Tu socio confiable en equipamiento
                                                médico</p>
                                        </div>
                                    </div>
                                    <div class="hidden md:block w-px h-12 bg-white/30"></div>
                                    <div class="flex flex-wrap items-center justify-center gap-6"
                                        style="opacity: 1; transform: none;">
                                        <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-trending-up w-5 h-5 text-green-300" aria-hidden="true">
                                                <path d="M16 7h6v6"></path>
                                                <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                                            </svg><span class="text-sm">Envío GRATIS en compras +$500</span></div>
                                        <div class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-award w-5 h-5 text-yellow-300" aria-hidden="true">
                                                <path
                                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                </path>
                                                <circle cx="12" cy="8" r="6"></circle>
                                            </svg><span class="text-sm">Productos 100% Certificados</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
                            <div class="container mx-auto px-4 py-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <div class="bg-blue-600 p-2 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-activity w-6 h-6 text-white" aria-hidden="true">
                                                <path
                                                    d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                                </path>
                                            </svg></div><span class="text-blue-900">Medical Supplies</span>
                                    </div>
                                    <nav class="hidden md:flex items-center gap-8"><a href="#inicio"
                                            class="text-gray-700 hover:text-blue-600 transition-colors">Inicio</a><a
                                            href="#productos"
                                            class="text-gray-700 hover:text-blue-600 transition-colors">Productos</a><a
                                            href="#categorias"
                                            class="text-gray-700 hover:text-blue-600 transition-colors">Categorías</a><a
                                            href="#sobre-nosotros"
                                            class="text-gray-700 hover:text-blue-600 transition-colors">Sobre Nosotros</a><a
                                            href="#contacto"
                                            class="text-gray-700 hover:text-blue-600 transition-colors">Contacto</a></nav>
                                    <div class="flex items-center gap-4"><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:hover:bg-accent/50 size-9 rounded-md text-blue-600 hover:text-blue-700 hover:bg-blue-50"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-user w-5 h-5" aria-hidden="true">
                                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg></button><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9 rounded-md relative"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-shopping-cart w-5 h-5" aria-hidden="true">
                                                <circle cx="8" cy="21" r="1"></circle>
                                                <circle cx="19" cy="21" r="1"></circle>
                                                <path
                                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                </path>
                                            </svg></button><button data-slot="button"
                                            class="items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-9 px-4 py-2 has-[&gt;svg]:px-3 hidden md:flex bg-blue-600 hover:bg-blue-700">Cotizar</button><button
                                            data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9 rounded-md md:hidden"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-menu w-5 h-5" aria-hidden="true">
                                                <path d="M4 5h16"></path>
                                                <path d="M4 12h16"></path>
                                                <path d="M4 19h16"></path>
                                            </svg></button></div>
                                </div>
                            </div>
                        </header>
                        <main>
                            <section class="relative bg-gradient-to-br from-blue-50 via-white to-gray-50 overflow-hidden">
                                <div class="container mx-auto px-4 py-20 lg:py-32">
                                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                                        <div class="space-y-8">
                                            <div class="inline-block"><span
                                                    class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm">✨
                                                    Calidad y Confianza en Equipos Médicos</span></div>
                                            <h1 class="text-gray-900">Equipos Médicos de <span class="text-blue-600">Alta
                                                    Calidad</span> para Profesionales de la Salud</h1>
                                            <p class="text-gray-600 text-lg">Suministramos los mejores equipos y productos
                                                médicos con certificaciones internacionales. Innovación, precisión y
                                                confiabilidad para tu práctica médica.</p>
                                            <div class="space-y-3">
                                                <div class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-circle-check-big w-5 h-5 text-blue-600 flex-shrink-0"
                                                        aria-hidden="true">
                                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                        <path d="m9 11 3 3L22 4"></path>
                                                    </svg><span class="text-gray-700">Productos certificados y
                                                        garantizados</span></div>
                                                <div class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-circle-check-big w-5 h-5 text-blue-600 flex-shrink-0"
                                                        aria-hidden="true">
                                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                        <path d="m9 11 3 3L22 4"></path>
                                                    </svg><span class="text-gray-700">Envío rápido a todo el país</span>
                                                </div>
                                                <div class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-circle-check-big w-5 h-5 text-blue-600 flex-shrink-0"
                                                        aria-hidden="true">
                                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                        <path d="m9 11 3 3L22 4"></path>
                                                    </svg><span class="text-gray-700">Asesoría técnica especializada</span>
                                                </div>
                                            </div>
                                            <div class="flex flex-col sm:flex-row gap-4"><button data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-10 rounded-md px-6 has-[&gt;svg]:px-4 bg-blue-600 hover:bg-blue-700 text-white group">Ver
                                                    Catálogo<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                        aria-hidden="true">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg></button><button data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4 border-blue-600 text-blue-600 hover:bg-blue-50">Contactar
                                                    Asesor</button></div>
                                        </div>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 rounded-3xl transform rotate-3">
                                            </div>
                                            <div class="relative rounded-3xl overflow-hidden shadow-2xl"><img
                                                    src="https://images.unsplash.com/photo-1758691463626-0ab959babe00?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpY2FsJTIwdGVjaG5vbG9neSUyMGRvY3RvcnxlbnwxfHx8fDE3NjI2Mzk5OTR8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                    alt="Equipos médicos de alta calidad"
                                                    class="w-full h-full object-cover"></div>
                                            <div
                                                class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-6 hidden lg:block">
                                                <div class="text-blue-600 text-3xl">500+</div>
                                                <div class="text-gray-600 text-sm">Productos Disponibles</div>
                                            </div>
                                            <div
                                                class="absolute -top-6 -right-6 bg-white rounded-2xl shadow-xl p-6 hidden lg:block">
                                                <div class="text-blue-600 text-3xl">15+</div>
                                                <div class="text-gray-600 text-sm">Años de Experiencia</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="absolute top-20 right-10 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse">
                                </div>
                                <div
                                    class="absolute bottom-20 left-10 w-72 h-72 bg-gray-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse">
                                </div>
                            </section>
                            <section class="relative w-full bg-gray-50 py-16">
                                <div class="container mx-auto px-4">
                                    <div class="text-center mb-12">
                                        <h2 class="text-blue-600 mb-2">Nuestras Instalaciones y Productos</h2>
                                        <p class="text-gray-600">Tecnología médica de vanguardia a tu alcance</p>
                                    </div>
                                    <div class="relative w-full max-w-5xl mx-auto">
                                        <div class="relative h-[500px] overflow-hidden rounded-2xl shadow-2xl">
                                            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                                                <div class="relative w-full h-full"><img
                                                        src="https://images.unsplash.com/photo-1595464144526-5fb181b74625?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpY2FsJTIwZXF1aXBtZW50JTIwaG9zcGl0YWx8ZW58MXx8fHwxNzYyODE1NjI0fDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                        alt="Equipos Médicos de Alta Tecnología"
                                                        class="w-full h-full object-cover">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                                    </div>
                                                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                                        <h3 class="mb-2 text-white">Equipos Médicos de Alta Tecnología</h3>
                                                        <p class="text-gray-200">Soluciones innovadoras para el cuidado de
                                                            la salud</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                                                <div class="relative w-full h-full"><img
                                                        src="https://images.unsplash.com/photo-1757152962882-6bf8495b324d?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzdXJnZXJ5JTIwb3BlcmF0aW9uJTIwcm9vbXxlbnwxfHx8fDE3NjI5MTU5Nzh8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                        alt="Equipamiento Quirúrgico Profesional"
                                                        class="w-full h-full object-cover">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                                    </div>
                                                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                                        <h3 class="mb-2 text-white">Equipamiento Quirúrgico Profesional</h3>
                                                        <p class="text-gray-200">Instrumental de última generación para
                                                            cirugías</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="absolute inset-0 transition-opacity duration-1000 opacity-100">
                                                <div class="relative w-full h-full"><img
                                                        src="https://images.unsplash.com/photo-1682663947127-ac9d59d7f312?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpY2FsJTIwdGVjaG5vbG9neSUyMGRldmljZXN8ZW58MXx8fHwxNzYyOTE1OTc5fDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                        alt="Tecnología Médica Avanzada" class="w-full h-full object-cover">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                                    </div>
                                                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                                        <h3 class="mb-2 text-white">Tecnología Médica Avanzada</h3>
                                                        <p class="text-gray-200">Dispositivos de diagnóstico y monitoreo</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                                                <div class="relative w-full h-full"><img
                                                        src="https://images.unsplash.com/photo-1666886573681-a8fbe983a3fd?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxkb2N0b3IlMjBoZWFsdGhjYXJlJTIwcHJvZmVzc2lvbmFsfGVufDF8fHx8MTc2MjgwNTc4Nnww&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                        alt="Soporte al Profesional de la Salud"
                                                        class="w-full h-full object-cover">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                                    </div>
                                                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                                        <h3 class="mb-2 text-white">Soporte al Profesional de la Salud</h3>
                                                        <p class="text-gray-200">Equipos confiables para tu práctica médica
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                                                <div class="relative w-full h-full"><img
                                                        src="https://images.unsplash.com/photo-1599557835468-29bb0b3155cd?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpY2FsJTIwbGFib3JhdG9yeSUyMHRlc3Rpbmd8ZW58MXx8fHwxNzYyOTE1OTc5fDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                        alt="Equipos de Laboratorio" class="w-full h-full object-cover">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                                                    </div>
                                                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                                        <h3 class="mb-2 text-white">Equipos de Laboratorio</h3>
                                                        <p class="text-gray-200">Precisión y exactitud en cada análisis</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border text-foreground hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-9 rounded-md absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white border-gray-200"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-chevron-left h-6 w-6" aria-hidden="true">
                                                <path d="m15 18-6-6 6-6"></path>
                                            </svg></button><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border text-foreground hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-9 rounded-md absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white border-gray-200"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-chevron-right h-6 w-6" aria-hidden="true">
                                                <path d="m9 18 6-6-6-6"></path>
                                            </svg></button>
                                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2"><button
                                                class="w-3 h-3 rounded-full transition-all bg-white/60 hover:bg-white/80"
                                                aria-label="Go to slide 1"></button><button
                                                class="w-3 h-3 rounded-full transition-all bg-white/60 hover:bg-white/80"
                                                aria-label="Go to slide 2"></button><button
                                                class="w-3 h-3 rounded-full transition-all bg-blue-600 w-8"
                                                aria-label="Go to slide 3"></button><button
                                                class="w-3 h-3 rounded-full transition-all bg-white/60 hover:bg-white/80"
                                                aria-label="Go to slide 4"></button><button
                                                class="w-3 h-3 rounded-full transition-all bg-white/60 hover:bg-white/80"
                                                aria-label="Go to slide 5"></button></div>
                                    </div>
                                </div>
                            </section>
                            <section class="py-16 bg-gray-50">
                                <div class="container mx-auto px-4">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                                        <div class="text-center">
                                            <div
                                                class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 rounded-xl mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-users w-6 h-6 text-blue-600" aria-hidden="true">
                                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                    <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                </svg></div>
                                            <div class="text-gray-900 text-3xl mb-2">5,000+</div>
                                            <div class="text-gray-600 text-sm">Clientes Satisfechos</div>
                                        </div>
                                        <div class="text-center">
                                            <div
                                                class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 rounded-xl mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-package w-6 h-6 text-blue-600" aria-hidden="true">
                                                    <path
                                                        d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z">
                                                    </path>
                                                    <path d="M12 22V12"></path>
                                                    <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                                    <path d="m7.5 4.27 9 5.15"></path>
                                                </svg></div>
                                            <div class="text-gray-900 text-3xl mb-2">500+</div>
                                            <div class="text-gray-600 text-sm">Productos Disponibles</div>
                                        </div>
                                        <div class="text-center">
                                            <div
                                                class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 rounded-xl mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-building2 lucide-building-2 w-6 h-6 text-blue-600"
                                                    aria-hidden="true">
                                                    <path d="M10 12h4"></path>
                                                    <path d="M10 8h4"></path>
                                                    <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
                                                    <path
                                                        d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2">
                                                    </path>
                                                    <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>
                                                </svg></div>
                                            <div class="text-gray-900 text-3xl mb-2">200+</div>
                                            <div class="text-gray-600 text-sm">Hospitales y Clínicas</div>
                                        </div>
                                        <div class="text-center">
                                            <div
                                                class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 rounded-xl mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-globe w-6 h-6 text-blue-600" aria-hidden="true">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                                    <path d="M2 12h20"></path>
                                                </svg></div>
                                            <div class="text-gray-900 text-3xl mb-2">15+</div>
                                            <div class="text-gray-600 text-sm">Años de Experiencia</div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="categorias" class="py-20 bg-gray-50">
                                <div class="container mx-auto px-4">
                                    <div class="text-center mb-16"><span
                                            class="text-blue-600 uppercase tracking-wider text-sm">Categorías</span>
                                        <h2 class="text-gray-900 mt-2">Explora Nuestras <span
                                                class="text-blue-600">Categorías</span></h2>
                                        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Encuentra exactamente lo que
                                            necesitas en nuestra amplia gama de productos médicos organizados por categoría
                                        </p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                        <div data-slot="card"
                                            class="text-card-foreground flex flex-col gap-6 rounded-xl border p-6 hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300 bg-white">
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="bg-blue-500 p-3 rounded-xl group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-stethoscope w-6 h-6 text-white"
                                                        aria-hidden="true">
                                                        <path d="M11 2v2"></path>
                                                        <path d="M5 2v2"></path>
                                                        <path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1">
                                                        </path>
                                                        <path d="M8 15a6 6 0 0 0 12 0v-3"></path>
                                                        <circle cx="20" cy="10" r="2"></circle>
                                                    </svg></div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between mb-1">
                                                        <h3 class="text-gray-900">Diagnóstico</h3><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">4</span>
                                                    </div>
                                                    <p class="text-gray-600 text-sm mb-3">Estetoscopios, tensiómetros y más
                                                    </p>
                                                    <div
                                                        class="flex items-center text-blue-600 text-sm group-hover:gap-2 transition-all">
                                                        <span>Ver productos</span><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="m9 18 6-6-6-6"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="text-card-foreground flex flex-col gap-6 rounded-xl border p-6 hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300 bg-white">
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="bg-cyan-500 p-3 rounded-xl group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-syringe w-6 h-6 text-white" aria-hidden="true">
                                                        <path d="m18 2 4 4"></path>
                                                        <path d="m17 7 3-3"></path>
                                                        <path
                                                            d="M19 9 8.7 19.3c-1 1-2.5 1-3.4 0l-.6-.6c-1-1-1-2.5 0-3.4L15 5">
                                                        </path>
                                                        <path d="m9 11 4 4"></path>
                                                        <path d="m5 19-3 3"></path>
                                                        <path d="m14 4 6 6"></path>
                                                    </svg></div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between mb-1">
                                                        <h3 class="text-gray-900">Instrumental</h3><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">4</span>
                                                    </div>
                                                    <p class="text-gray-600 text-sm mb-3">Jeringas, agujas y material
                                                        quirúrgico</p>
                                                    <div
                                                        class="flex items-center text-blue-600 text-sm group-hover:gap-2 transition-all">
                                                        <span>Ver productos</span><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="m9 18 6-6-6-6"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="text-card-foreground flex flex-col gap-6 rounded-xl border p-6 hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300 bg-white">
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="bg-indigo-500 p-3 rounded-xl group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-microscope w-6 h-6 text-white"
                                                        aria-hidden="true">
                                                        <path d="M6 18h8"></path>
                                                        <path d="M3 22h18"></path>
                                                        <path d="M14 22a7 7 0 1 0 0-14h-1"></path>
                                                        <path d="M9 14h2"></path>
                                                        <path d="M9 12a2 2 0 0 1-2-2V6h6v4a2 2 0 0 1-2 2Z"></path>
                                                        <path d="M12 6V3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3"></path>
                                                    </svg></div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between mb-1">
                                                        <h3 class="text-gray-900">Laboratorio</h3><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">4</span>
                                                    </div>
                                                    <p class="text-gray-600 text-sm mb-3">Equipos de análisis y microscopía
                                                    </p>
                                                    <div
                                                        class="flex items-center text-blue-600 text-sm group-hover:gap-2 transition-all">
                                                        <span>Ver productos</span><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="m9 18 6-6-6-6"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="text-card-foreground flex flex-col gap-6 rounded-xl border p-6 hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300 bg-white">
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="bg-blue-600 p-3 rounded-xl group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-heart w-6 h-6 text-white" aria-hidden="true">
                                                        <path
                                                            d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
                                                        </path>
                                                    </svg></div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between mb-1">
                                                        <h3 class="text-gray-900">Cardiología</h3><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">3</span>
                                                    </div>
                                                    <p class="text-gray-600 text-sm mb-3">Equipos cardíacos especializados
                                                    </p>
                                                    <div
                                                        class="flex items-center text-blue-600 text-sm group-hover:gap-2 transition-all">
                                                        <span>Ver productos</span><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="m9 18 6-6-6-6"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="text-card-foreground flex flex-col gap-6 rounded-xl border p-6 hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300 bg-white">
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="bg-sky-500 p-3 rounded-xl group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-activity w-6 h-6 text-white"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                                        </path>
                                                    </svg></div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between mb-1">
                                                        <h3 class="text-gray-900">Monitoreo</h3><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">4</span>
                                                    </div>
                                                    <p class="text-gray-600 text-sm mb-3">Monitores de signos vitales</p>
                                                    <div
                                                        class="flex items-center text-blue-600 text-sm group-hover:gap-2 transition-all">
                                                        <span>Ver productos</span><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="m9 18 6-6-6-6"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="text-card-foreground flex flex-col gap-6 rounded-xl border p-6 hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300 bg-white">
                                            <div class="flex items-start gap-4">
                                                <div
                                                    class="bg-blue-400 p-3 rounded-xl group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-thermometer w-6 h-6 text-white"
                                                        aria-hidden="true">
                                                        <path d="M14 4v10.54a4 4 0 1 1-4 0V4a2 2 0 0 1 4 0Z"></path>
                                                    </svg></div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between mb-1">
                                                        <h3 class="text-gray-900">Emergencia</h3><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">4</span>
                                                    </div>
                                                    <p class="text-gray-600 text-sm mb-3">Equipos para atención de urgencias
                                                    </p>
                                                    <div
                                                        class="flex items-center text-blue-600 text-sm group-hover:gap-2 transition-all">
                                                        <span>Ver productos</span><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-right w-4 h-4 group-hover:translate-x-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="m9 18 6-6-6-6"></path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="catalogo" class="py-20 bg-white">
                                <div class="container mx-auto px-4">
                                    <div class="text-center mb-12"><span
                                            class="text-blue-600 uppercase tracking-wider text-sm">Catálogo</span>
                                        <h2 class="text-gray-900 mt-2">Catálogo de <span
                                                class="text-blue-600">Productos</span></h2>
                                        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Explora nuestro catálogo completo de
                                            equipos y productos médicos certificados</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-2xl p-6 mb-8 border border-gray-200">
                                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                            <div class="md:col-span-2"><label
                                                    class="block text-gray-700 mb-2 text-sm">Buscar por nombre</label>
                                                <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-search absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"
                                                        aria-hidden="true">
                                                        <path d="m21 21-4.34-4.34"></path>
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                    </svg><input type="text" data-slot="input"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10"
                                                        placeholder="Ej: Estetoscopio, Termómetro..." value=""></div>
                                            </div>
                                            <div><label class="block text-gray-700 mb-2 text-sm">Marca</label><button
                                                    type="button" role="combobox" aria-controls="radix-:rc:"
                                                    aria-expanded="false" aria-autocomplete="none" dir="ltr"
                                                    data-state="closed" data-slot="select-trigger" data-size="default"
                                                    class="border-input data-[placeholder]:text-muted-foreground [&amp;_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex w-full items-center justify-between gap-2 rounded-md border bg-input-background px-3 py-2 text-sm whitespace-nowrap transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4"><span
                                                        data-slot="select-value" style="pointer-events: none;">Todas las
                                                        marcas</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chevron-down size-4 opacity-50"
                                                        aria-hidden="true">
                                                        <path d="m6 9 6 6 6-6"></path>
                                                    </svg></button></div>
                                            <div><label class="block text-gray-700 mb-2 text-sm">Zona de
                                                    aplicación</label><button type="button" role="combobox"
                                                    aria-controls="radix-:rd:" aria-expanded="false"
                                                    aria-autocomplete="none" dir="ltr" data-state="closed"
                                                    data-slot="select-trigger" data-size="default"
                                                    class="border-input data-[placeholder]:text-muted-foreground [&amp;_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex w-full items-center justify-between gap-2 rounded-md border bg-input-background px-3 py-2 text-sm whitespace-nowrap transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4"><span
                                                        data-slot="select-value" style="pointer-events: none;">Todas las
                                                        zonas</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chevron-down size-4 opacity-50"
                                                        aria-hidden="true">
                                                        <path d="m6 9 6 6 6-6"></path>
                                                    </svg></button></div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1584467735815-f778f274e296?w=400"
                                                    alt="Estetoscopio Cardiology IV"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Diagnóstico</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Estetoscopio Cardiology IV</h3>
                                                <p class="text-gray-500 text-sm mb-3">3M Littmann</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Tórax</span><span
                                                        class="text-blue-600">$299.99</span></div><button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden">
                                                <div
                                                    class="inline-block bg-gray-100 text-center align-middle w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                    <div class="flex items-center justify-center w-full h-full"><img
                                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODgiIGhlaWdodD0iODgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgc3Ryb2tlPSIjMDAwIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBvcGFjaXR5PSIuMyIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjciPjxyZWN0IHg9IjE2IiB5PSIxNiIgd2lkdGg9IjU2IiBoZWlnaHQ9IjU2IiByeD0iNiIvPjxwYXRoIGQ9Im0xNiA1OCAxNi0xOCAzMiAzMiIvPjxjaXJjbGUgY3g9IjUzIiBjeT0iMzUiIHI9IjciLz48L3N2Zz4KCg=="
                                                            alt="Error loading image"
                                                            data-original-url="https://images.unsplash.com/photo-1615486511262-2b18b25d161d?w=400">
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Diagnóstico</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Tensiómetro Digital Automático</h3>
                                                <p class="text-gray-500 text-sm mb-3">Omron</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Brazo</span><span
                                                        class="text-blue-600">$89.99</span></div><button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1584362917165-526a968579e8?w=400"
                                                    alt="Oxímetro de Pulso"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Monitoreo</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Oxímetro de Pulso</h3>
                                                <p class="text-gray-500 text-sm mb-3">Medtronic</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Dedo</span><span
                                                        class="text-blue-600">$45.99</span></div><button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1590479773265-7464e5d48118?w=400"
                                                    alt="Termómetro Infrarrojo"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Diagnóstico</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Termómetro Infrarrojo</h3>
                                                <p class="text-gray-500 text-sm mb-3">Braun</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Frente</span><span
                                                        class="text-blue-600">$59.99</span></div><button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden">
                                                <div
                                                    class="inline-block bg-gray-100 text-center align-middle w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                    <div class="flex items-center justify-center w-full h-full"><img
                                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODgiIGhlaWdodD0iODgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgc3Ryb2tlPSIjMDAwIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBvcGFjaXR5PSIuMyIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjciPjxyZWN0IHg9IjE2IiB5PSIxNiIgd2lkdGg9IjU2IiBoZWlnaHQ9IjU2IiByeD0iNiIvPjxwYXRoIGQ9Im0xNiA1OCAxNi0xOCAzMiAzMiIvPjxjaXJjbGUgY3g9IjUzIiBjeT0iMzUiIHI9IjciLz48L3N2Zz4KCg=="
                                                            alt="Error loading image"
                                                            data-original-url="https://images.unsplash.com/photo-1579154341006-e4c0b6c06dfb?w=400">
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Instrumental</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Jeringa Hipodérmica 10ml</h3>
                                                <p class="text-gray-500 text-sm mb-3">BD</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Múltiples</span><span
                                                        class="text-blue-600">$0.89</span></div><button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1603398938378-e54eab446dde?w=400"
                                                    alt="Guantes de Nitrilo"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Protección</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Guantes de Nitrilo</h3>
                                                <p class="text-gray-500 text-sm mb-3">Medline</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Manos</span><span
                                                        class="text-blue-600">$12.99</span></div><button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=400"
                                                    alt="Desfibrilador Automático DEA"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Emergencia</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Desfibrilador Automático DEA</h3>
                                                <p class="text-gray-500 text-sm mb-3">Philips</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Tórax</span><span
                                                        class="text-blue-600">$1499.99</span></div><button
                                                    data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden">
                                                <div
                                                    class="inline-block bg-gray-100 text-center align-middle w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                    <div class="flex items-center justify-center w-full h-full"><img
                                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODgiIGhlaWdodD0iODgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgc3Ryb2tlPSIjMDAwIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBvcGFjaXR5PSIuMyIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjciPjxyZWN0IHg9IjE2IiB5PSIxNiIgd2lkdGg9IjU2IiBoZWlnaHQ9IjU2IiByeD0iNiIvPjxwYXRoIGQ9Im0xNiA1OCAxNi0xOCAzMiAzMiIvPjxjaXJjbGUgY3g9IjUzIiBjeT0iMzUiIHI9IjciLz48L3N2Zz4KCg=="
                                                            alt="Error loading image"
                                                            data-original-url="https://images.unsplash.com/photo-1579154341006-e4c0b6c06dfb?w=400">
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Instrumental</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Bisturí Quirúrgico Desechable</h3>
                                                <p class="text-gray-500 text-sm mb-3">Swann-Morton</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Múltiples</span><span
                                                        class="text-blue-600">$1.5</span></div><button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1631815589968-fdb09a223b1e?w=400"
                                                    alt="Monitor de Signos Vitales"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Monitoreo</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Monitor de Signos Vitales</h3>
                                                <p class="text-gray-500 text-sm mb-3">GE Healthcare</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Múltiples</span><span
                                                        class="text-blue-600">$3299.99</span></div><button
                                                    data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=400"
                                                    alt="Nebulizador Ultrasónico"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Terapia</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Nebulizador Ultrasónico</h3>
                                                <p class="text-gray-500 text-sm mb-3">Omron</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Vías
                                                        respiratorias</span><span class="text-blue-600">$79.99</span></div>
                                                <button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1516549655169-df83a0774514?w=400"
                                                    alt="Camilla Plegable de Emergencia"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Emergencia</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Camilla Plegable de Emergencia</h3>
                                                <p class="text-gray-500 text-sm mb-3">Ferno</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Cuerpo
                                                        completo</span><span class="text-blue-600">$899.99</span></div>
                                                <button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 cursor-pointer group border-gray-200 hover:border-blue-300">
                                            <div class="relative h-48 bg-gray-100 overflow-hidden"><img
                                                    src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?w=400"
                                                    alt="Lámpara de Examen LED"
                                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                                <div class="absolute top-3 right-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-blue-600 text-white">Diagnóstico</span>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h3 class="text-gray-800 mb-1 group-hover:text-blue-600 transition-colors">
                                                    Lámpara de Examen LED</h3>
                                                <p class="text-gray-500 text-sm mb-3">Welch Allyn</p>
                                                <div class="flex items-center justify-between mb-3"><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs">Múltiples</span><span
                                                        class="text-blue-600">$449.99</span></div><button data-slot="button"
                                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 w-full bg-blue-600 hover:bg-blue-700">Ver
                                                    detalles</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="productos" class="py-20 bg-white">
                                <div class="container mx-auto px-4">
                                    <div class="text-center mb-16"><span
                                            class="text-blue-600 uppercase tracking-wider text-sm">Productos
                                            Destacados</span>
                                        <h2 class="text-gray-900 mt-2">Nuestros <span class="text-blue-600">Mejores
                                                Productos</span></h2>
                                        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Descubre nuestra selección de
                                            equipos médicos más populares y mejor valorados por profesionales</p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 group border-gray-200">
                                            <div class="relative overflow-hidden bg-gray-100"><img
                                                    src="https://images.unsplash.com/photo-1655313719493-16ebe4906441?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzdGV0aG9zY29wZSUyMG1lZGljYWwlMjBkZXZpY2V8ZW58MXx8fHwxNzYyNjM5OTkyfDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                    alt="Estetoscopio Profesional"
                                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"><span
                                                    data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent text-primary-foreground [a&amp;]:hover:bg-primary/90 absolute top-4 right-4 bg-blue-600 hover:bg-blue-600">Más
                                                    Vendido</span></div>
                                            <div class="p-6"><span class="text-blue-600 text-sm">Diagnóstico</span>
                                                <h3 class="text-gray-900 mt-2 mb-3">Estetoscopio Profesional</h3>
                                                <div class="flex items-center gap-1 mb-4"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star w-4 h-4 fill-yellow-400 text-yellow-400"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><span class="text-gray-900">4.9</span><span
                                                        class="text-gray-500 text-sm ml-1">(50+ reviews)</span></div>
                                                <div class="flex items-center justify-between"><span
                                                        class="text-blue-600 text-2xl">$89.99</span><button
                                                        data-slot="button"
                                                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 bg-blue-600 hover:bg-blue-700"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-shopping-cart w-4 h-4 mr-2"
                                                            aria-hidden="true">
                                                            <circle cx="8" cy="21" r="1"></circle>
                                                            <circle cx="19" cy="21" r="1"></circle>
                                                            <path
                                                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                            </path>
                                                        </svg>Añadir</button></div>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 group border-gray-200">
                                            <div class="relative overflow-hidden bg-gray-100"><img
                                                    src="https://images.unsplash.com/photo-1606206848010-83949917a080?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsYWJvcmF0b3J5JTIwZXF1aXBtZW50JTIwc2NpZW5jZXxlbnwxfHx8fDE3NjI1OTg0Mzd8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                    alt="Equipo de Laboratorio"
                                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"><span
                                                    data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent text-primary-foreground [a&amp;]:hover:bg-primary/90 absolute top-4 right-4 bg-blue-600 hover:bg-blue-600">Nuevo</span>
                                            </div>
                                            <div class="p-6"><span class="text-blue-600 text-sm">Laboratorio</span>
                                                <h3 class="text-gray-900 mt-2 mb-3">Equipo de Laboratorio</h3>
                                                <div class="flex items-center gap-1 mb-4"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star w-4 h-4 fill-yellow-400 text-yellow-400"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><span class="text-gray-900">4.8</span><span
                                                        class="text-gray-500 text-sm ml-1">(50+ reviews)</span></div>
                                                <div class="flex items-center justify-between"><span
                                                        class="text-blue-600 text-2xl">$459.99</span><button
                                                        data-slot="button"
                                                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 bg-blue-600 hover:bg-blue-700"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-shopping-cart w-4 h-4 mr-2"
                                                            aria-hidden="true">
                                                            <circle cx="8" cy="21" r="1"></circle>
                                                            <circle cx="19" cy="21" r="1"></circle>
                                                            <path
                                                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                            </path>
                                                        </svg>Añadir</button></div>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 group border-gray-200">
                                            <div class="relative overflow-hidden bg-gray-100"><img
                                                    src="https://images.unsplash.com/photo-1630531207753-f7a2f475f809?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpY2FsJTIwZXF1aXBtZW50JTIwaG9zcGl0YWx8ZW58MXx8fHwxNzYyNjE1MTg2fDA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                    alt="Monitor de Signos Vitales"
                                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"><span
                                                    data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent text-primary-foreground [a&amp;]:hover:bg-primary/90 absolute top-4 right-4 bg-blue-600 hover:bg-blue-600">Premium</span>
                                            </div>
                                            <div class="p-6"><span class="text-blue-600 text-sm">Monitoreo</span>
                                                <h3 class="text-gray-900 mt-2 mb-3">Monitor de Signos Vitales</h3>
                                                <div class="flex items-center gap-1 mb-4"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star w-4 h-4 fill-yellow-400 text-yellow-400"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><span class="text-gray-900">5</span><span
                                                        class="text-gray-500 text-sm ml-1">(50+ reviews)</span></div>
                                                <div class="flex items-center justify-between"><span
                                                        class="text-blue-600 text-2xl">$799.99</span><button
                                                        data-slot="button"
                                                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 bg-blue-600 hover:bg-blue-700"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-shopping-cart w-4 h-4 mr-2"
                                                            aria-hidden="true">
                                                            <circle cx="8" cy="21" r="1"></circle>
                                                            <circle cx="19" cy="21" r="1"></circle>
                                                            <path
                                                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                            </path>
                                                        </svg>Añadir</button></div>
                                            </div>
                                        </div>
                                        <div data-slot="card"
                                            class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-all duration-300 group border-gray-200">
                                            <div class="relative overflow-hidden bg-gray-100"><img
                                                    src="https://images.unsplash.com/photo-1759411364526-43d37be9708d?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtZWRpY2FsJTIwc3VwcGxpZXMlMjBoZWFsdGhjYXJlfGVufDF8fHx8MTc2MjYzOTk5M3ww&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080&amp;utm_source=figma&amp;utm_medium=referral"
                                                    alt="Kit de Suministros Médicos"
                                                    class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"><span
                                                    data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent text-primary-foreground [a&amp;]:hover:bg-primary/90 absolute top-4 right-4 bg-blue-600 hover:bg-blue-600">Oferta</span>
                                            </div>
                                            <div class="p-6"><span class="text-blue-600 text-sm">Suministros</span>
                                                <h3 class="text-gray-900 mt-2 mb-3">Kit de Suministros Médicos</h3>
                                                <div class="flex items-center gap-1 mb-4"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-star w-4 h-4 fill-yellow-400 text-yellow-400"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                        </path>
                                                    </svg><span class="text-gray-900">4.7</span><span
                                                        class="text-gray-500 text-sm ml-1">(50+ reviews)</span></div>
                                                <div class="flex items-center justify-between"><span
                                                        class="text-blue-600 text-2xl">$149.99</span><button
                                                        data-slot="button"
                                                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 bg-blue-600 hover:bg-blue-700"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="lucide lucide-shopping-cart w-4 h-4 mr-2"
                                                            aria-hidden="true">
                                                            <circle cx="8" cy="21" r="1"></circle>
                                                            <circle cx="19" cy="21" r="1"></circle>
                                                            <path
                                                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                                            </path>
                                                        </svg>Añadir</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-12"><button data-slot="button"
                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4 border-blue-600 text-blue-600 hover:bg-blue-50">Ver
                                            Todos los Productos</button></div>
                                </div>
                            </section>
                            <section
                                class="py-20 bg-gradient-to-br from-blue-600 to-blue-800 text-white relative overflow-hidden">
                                <div class="absolute inset-0 opacity-10">
                                    <div
                                        class="absolute top-0 left-1/4 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-3xl">
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-1/4 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-3xl">
                                    </div>
                                </div>
                                <div class="container mx-auto px-4 relative z-10">
                                    <div class="text-center mb-16"><span
                                            class="text-blue-200 uppercase tracking-wider text-sm">¿Por qué
                                            elegirnos?</span>
                                        <h2 class="text-white mt-2">Comprometidos con la <span
                                                class="text-blue-200">Excelencia</span></h2>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                                        <div
                                            class="text-center group hover:transform hover:-translate-y-2 transition-all duration-300">
                                            <div
                                                class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl mb-6 group-hover:bg-white/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-shield w-8 h-8 text-white" aria-hidden="true">
                                                    <path
                                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                    </path>
                                                </svg></div>
                                            <h3 class="text-white mb-3">Productos Certificados</h3>
                                            <p class="text-blue-100 text-sm leading-relaxed">Todos nuestros equipos cuentan
                                                con certificaciones internacionales y garantía de calidad.</p>
                                        </div>
                                        <div
                                            class="text-center group hover:transform hover:-translate-y-2 transition-all duration-300">
                                            <div
                                                class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl mb-6 group-hover:bg-white/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-truck w-8 h-8 text-white" aria-hidden="true">
                                                    <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2">
                                                    </path>
                                                    <path d="M15 18H9"></path>
                                                    <path
                                                        d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14">
                                                    </path>
                                                    <circle cx="17" cy="18" r="2"></circle>
                                                    <circle cx="7" cy="18" r="2"></circle>
                                                </svg></div>
                                            <h3 class="text-white mb-3">Envío Rápido</h3>
                                            <p class="text-blue-100 text-sm leading-relaxed">Entrega a todo el país en 24-48
                                                horas. Envío gratuito en compras superiores a $500.</p>
                                        </div>
                                        <div
                                            class="text-center group hover:transform hover:-translate-y-2 transition-all duration-300">
                                            <div
                                                class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl mb-6 group-hover:bg-white/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-headphones w-8 h-8 text-white" aria-hidden="true">
                                                    <path
                                                        d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3">
                                                    </path>
                                                </svg></div>
                                            <h3 class="text-white mb-3">Soporte Técnico</h3>
                                            <p class="text-blue-100 text-sm leading-relaxed">Asesoría especializada antes y
                                                después de tu compra. Estamos aquí para ayudarte.</p>
                                        </div>
                                        <div
                                            class="text-center group hover:transform hover:-translate-y-2 transition-all duration-300">
                                            <div
                                                class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl mb-6 group-hover:bg-white/20 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-award w-8 h-8 text-white" aria-hidden="true">
                                                    <path
                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                    </path>
                                                    <circle cx="12" cy="8" r="6"></circle>
                                                </svg></div>
                                            <h3 class="text-white mb-3">Garantía Extendida</h3>
                                            <p class="text-blue-100 text-sm leading-relaxed">Todos los productos incluyen
                                                garantía del fabricante y opción de extensión.</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="bg-gradient-to-b from-gray-50 to-white py-16">
                                <div class="container mx-auto px-4">
                                    <div class="text-center mb-12">
                                        <h2 class="text-blue-600 mb-2">Certificaciones y Calidad</h2>
                                        <p class="text-gray-600 max-w-2xl mx-auto">Todos nuestros productos cumplen con las
                                            más altas normas internacionales de calidad y seguridad</p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                                        <div
                                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-gray-100 group hover:-translate-y-1 transition-transform duration-300">
                                            <div
                                                class="inline-flex items-center justify-center w-14 h-14 bg-blue-100 text-blue-600 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-shield w-7 h-7" aria-hidden="true">
                                                    <path
                                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                    </path>
                                                </svg></div>
                                            <h3 class="text-gray-800 mb-2">ISO 13485</h3>
                                            <p class="text-gray-600 text-sm">Certificación de Sistema de Gestión de Calidad
                                                para dispositivos médicos</p>
                                        </div>
                                        <div
                                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-gray-100 group hover:-translate-y-1 transition-transform duration-300">
                                            <div
                                                class="inline-flex items-center justify-center w-14 h-14 bg-green-100 text-green-600 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-award w-7 h-7" aria-hidden="true">
                                                    <path
                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                    </path>
                                                    <circle cx="12" cy="8" r="6"></circle>
                                                </svg></div>
                                            <h3 class="text-gray-800 mb-2">FDA Aprobado</h3>
                                            <p class="text-gray-600 text-sm">Productos aprobados por la Administración de
                                                Alimentos y Medicamentos</p>
                                        </div>
                                        <div
                                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-gray-100 group hover:-translate-y-1 transition-transform duration-300">
                                            <div
                                                class="inline-flex items-center justify-center w-14 h-14 bg-purple-100 text-purple-600 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-check-big w-7 h-7" aria-hidden="true">
                                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                                    <path d="m9 11 3 3L22 4"></path>
                                                </svg></div>
                                            <h3 class="text-gray-800 mb-2">CE Marking</h3>
                                            <p class="text-gray-600 text-sm">Conformidad con estándares europeos de
                                                dispositivos médicos</p>
                                        </div>
                                        <div
                                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow border border-gray-100 group hover:-translate-y-1 transition-transform duration-300">
                                            <div
                                                class="inline-flex items-center justify-center w-14 h-14 bg-orange-100 text-orange-600 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-star w-7 h-7" aria-hidden="true">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg></div>
                                            <h3 class="text-gray-800 mb-2">ISO 9001</h3>
                                            <p class="text-gray-600 text-sm">Certificación de Sistema de Gestión de Calidad
                                                internacional</p>
                                        </div>
                                    </div>
                                    <div class="mt-12 text-center">
                                        <div class="inline-block bg-blue-50 rounded-xl p-6 border-2 border-blue-100">
                                            <p class="text-gray-700"><span class="text-blue-600">100%</span> de nuestros
                                                productos cuentan con garantía y certificados de autenticidad</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="py-20 bg-white relative overflow-hidden">
                                <div
                                    class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-40">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 w-96 h-96 bg-gray-100 rounded-full mix-blend-multiply filter blur-3xl opacity-40">
                                </div>
                                <div class="container mx-auto px-4 relative z-10">
                                    <div class="text-center mb-16"><span
                                            class="text-blue-600 uppercase tracking-wider text-sm">Testimonios</span>
                                        <h2 class="text-gray-900 mt-2">Lo Que Dicen Nuestros <span
                                                class="text-blue-600">Clientes</span></h2>
                                        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">La confianza de miles de
                                            profesionales de la salud nos respalda</p>
                                    </div>
                                    <div class="max-w-6xl mx-auto">
                                        <div class="relative w-full" role="region" aria-roledescription="carousel"
                                            data-slot="carousel">
                                            <div class="overflow-hidden" data-slot="carousel-content">
                                                <div class="flex -ml-4"
                                                    style="transform: translate3d(-1007.97px, 0px, 0px);">
                                                    <div role="group" aria-roledescription="slide" data-slot="carousel-item"
                                                        class="min-w-0 shrink-0 grow-0 basis-full pl-4 md:basis-1/2 lg:basis-1/2"
                                                        style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="p-1">
                                                            <div data-slot="card"
                                                                class="text-card-foreground flex flex-col gap-6 rounded-xl border p-8 hover:shadow-2xl transition-shadow duration-300 border-gray-200 bg-white relative">
                                                                <div class="absolute top-6 right-6 opacity-10"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-quote w-16 h-16 text-blue-600"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                                        </path>
                                                                        <path
                                                                            d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="flex gap-1 mb-6"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg></div>
                                                                <p class="text-gray-700 mb-8 italic leading-relaxed">
                                                                    "Excelente servicio y productos de primera calidad.
                                                                    Hemos equipado toda nuestra clínica con Medical Supplies
                                                                    y no podríamos estar más satisfechos. La atención al
                                                                    cliente es excepcional."</p>
                                                                <div class="flex items-center gap-4"><span
                                                                        data-slot="avatar"
                                                                        class="relative flex size-10 shrink-0 overflow-hidden rounded-full w-14 h-14 border-2 border-blue-200"><img
                                                                            data-slot="avatar-image"
                                                                            class="aspect-square size-full"
                                                                            alt="Dr. María González"
                                                                            src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200&amp;h=200&amp;fit=crop"></span>
                                                                    <div>
                                                                        <div class="text-gray-900">Dr. María González</div>
                                                                        <div class="text-blue-600 text-sm">Directora Médica
                                                                        </div>
                                                                        <div class="text-gray-500 text-sm">Hospital Central
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="group" aria-roledescription="slide" data-slot="carousel-item"
                                                        class="min-w-0 shrink-0 grow-0 basis-full pl-4 md:basis-1/2 lg:basis-1/2"
                                                        style="transform: translate3d(0px, 0px, 0px);">
                                                        <div class="p-1">
                                                            <div data-slot="card"
                                                                class="text-card-foreground flex flex-col gap-6 rounded-xl border p-8 hover:shadow-2xl transition-shadow duration-300 border-gray-200 bg-white relative">
                                                                <div class="absolute top-6 right-6 opacity-10"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-quote w-16 h-16 text-blue-600"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                                        </path>
                                                                        <path
                                                                            d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="flex gap-1 mb-6"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg></div>
                                                                <p class="text-gray-700 mb-8 italic leading-relaxed">"Los
                                                                    equipos de monitoreo que adquirimos superaron nuestras
                                                                    expectativas. La precisión y confiabilidad son
                                                                    excepcionales. Definitivamente nuestro proveedor de
                                                                    confianza."</p>
                                                                <div class="flex items-center gap-4"><span
                                                                        data-slot="avatar"
                                                                        class="relative flex size-10 shrink-0 overflow-hidden rounded-full w-14 h-14 border-2 border-blue-200"><img
                                                                            data-slot="avatar-image"
                                                                            class="aspect-square size-full"
                                                                            alt="Dr. Carlos Rodríguez"
                                                                            src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=200&amp;h=200&amp;fit=crop"></span>
                                                                    <div>
                                                                        <div class="text-gray-900">Dr. Carlos Rodríguez
                                                                        </div>
                                                                        <div class="text-blue-600 text-sm">Jefe de
                                                                            Cardiología</div>
                                                                        <div class="text-gray-500 text-sm">Clínica San
                                                                            Rafael</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="group" aria-roledescription="slide" data-slot="carousel-item"
                                                        class="min-w-0 shrink-0 grow-0 basis-full pl-4 md:basis-1/2 lg:basis-1/2">
                                                        <div class="p-1">
                                                            <div data-slot="card"
                                                                class="text-card-foreground flex flex-col gap-6 rounded-xl border p-8 hover:shadow-2xl transition-shadow duration-300 border-gray-200 bg-white relative">
                                                                <div class="absolute top-6 right-6 opacity-10"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-quote w-16 h-16 text-blue-600"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                                        </path>
                                                                        <path
                                                                            d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="flex gap-1 mb-6"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg></div>
                                                                <p class="text-gray-700 mb-8 italic leading-relaxed">"La
                                                                    variedad de productos y la rapidez en las entregas nos
                                                                    han ayudado a mantener nuestro laboratorio siempre
                                                                    operativo. El soporte técnico es inmejorable."</p>
                                                                <div class="flex items-center gap-4"><span
                                                                        data-slot="avatar"
                                                                        class="relative flex size-10 shrink-0 overflow-hidden rounded-full w-14 h-14 border-2 border-blue-200"><img
                                                                            data-slot="avatar-image"
                                                                            class="aspect-square size-full"
                                                                            alt="Dra. Ana Martínez"
                                                                            src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=200&amp;h=200&amp;fit=crop"></span>
                                                                    <div>
                                                                        <div class="text-gray-900">Dra. Ana Martínez</div>
                                                                        <div class="text-blue-600 text-sm">Especialista en
                                                                            Laboratorio</div>
                                                                        <div class="text-gray-500 text-sm">Laboratorios
                                                                            Médicos del Norte</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="group" aria-roledescription="slide" data-slot="carousel-item"
                                                        class="min-w-0 shrink-0 grow-0 basis-full pl-4 md:basis-1/2 lg:basis-1/2">
                                                        <div class="p-1">
                                                            <div data-slot="card"
                                                                class="text-card-foreground flex flex-col gap-6 rounded-xl border p-8 hover:shadow-2xl transition-shadow duration-300 border-gray-200 bg-white relative">
                                                                <div class="absolute top-6 right-6 opacity-10"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-quote w-16 h-16 text-blue-600"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                                        </path>
                                                                        <path
                                                                            d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="flex gap-1 mb-6"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-star w-5 h-5 fill-yellow-400 text-yellow-400"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                        </path>
                                                                    </svg></div>
                                                                <p class="text-gray-700 mb-8 italic leading-relaxed">"En
                                                                    situaciones de emergencia, contar con equipos confiables
                                                                    es vital. Medical Supplies siempre ha estado a la
                                                                    altura, proporcionando equipamiento de calidad
                                                                    superior."</p>
                                                                <div class="flex items-center gap-4"><span
                                                                        data-slot="avatar"
                                                                        class="relative flex size-10 shrink-0 overflow-hidden rounded-full w-14 h-14 border-2 border-blue-200"><img
                                                                            data-slot="avatar-image"
                                                                            class="aspect-square size-full"
                                                                            alt="Dr. Luis Fernández"
                                                                            src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200&amp;h=200&amp;fit=crop"></span>
                                                                    <div>
                                                                        <div class="text-gray-900">Dr. Luis Fernández</div>
                                                                        <div class="text-blue-600 text-sm">Director de
                                                                            Urgencias</div>
                                                                        <div class="text-gray-500 text-sm">Hospital de
                                                                            Emergencias</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><button data-slot="carousel-previous"
                                                class="items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 absolute size-8 rounded-full top-1/2 -translate-y-1/2 hidden md:flex -left-12 bg-blue-600 text-white hover:bg-blue-700 border-0"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-left">
                                                    <path d="m12 19-7-7 7-7"></path>
                                                    <path d="M19 12H5"></path>
                                                </svg><span class="sr-only">Previous slide</span></button><button
                                                data-slot="carousel-next"
                                                class="items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 absolute size-8 rounded-full top-1/2 -translate-y-1/2 hidden md:flex -right-12 bg-blue-600 text-white hover:bg-blue-700 border-0"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-right">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg><span class="sr-only">Next slide</span></button>
                                        </div>
                                        <div class="flex justify-center gap-2 mt-8 md:hidden">
                                            <div class="w-2 h-2 rounded-full bg-blue-200"></div>
                                            <div class="w-2 h-2 rounded-full bg-blue-200"></div>
                                            <div class="w-2 h-2 rounded-full bg-blue-200"></div>
                                            <div class="w-2 h-2 rounded-full bg-blue-200"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="bg-white py-16">
                                <div class="container mx-auto px-4">
                                    <div class="text-center mb-12">
                                        <div
                                            class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-award w-8 h-8 text-blue-600" aria-hidden="true">
                                                <path
                                                    d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                </path>
                                                <circle cx="12" cy="8" r="6"></circle>
                                            </svg></div>
                                        <h2 class="text-blue-600 mb-2">Marcas Confiables</h2>
                                        <p class="text-gray-600 max-w-2xl mx-auto">Trabajamos con las marcas líderes
                                            mundiales en equipos y productos médicos</p>
                                    </div>
                                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                                        <div
                                            class="group bg-gray-50 rounded-xl p-6 hover:bg-blue-50 hover:shadow-lg transition-all duration-300 cursor-pointer border border-gray-100">
                                            <div class="text-center">
                                                <div
                                                    class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-400 rounded-lg mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition-transform">
                                                    <span class="text-white">3</span></div>
                                                <h3 class="text-gray-800 mb-1 text-sm">3M Health Care</h3>
                                                <p class="text-gray-500 text-xs">Equipos de Protección</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group bg-gray-50 rounded-xl p-6 hover:bg-blue-50 hover:shadow-lg transition-all duration-300 cursor-pointer border border-gray-100">
                                            <div class="text-center">
                                                <div
                                                    class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-400 rounded-lg mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition-transform">
                                                    <span class="text-white">M</span></div>
                                                <h3 class="text-gray-800 mb-1 text-sm">Medtronic</h3>
                                                <p class="text-gray-500 text-xs">Dispositivos Médicos</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group bg-gray-50 rounded-xl p-6 hover:bg-blue-50 hover:shadow-lg transition-all duration-300 cursor-pointer border border-gray-100">
                                            <div class="text-center">
                                                <div
                                                    class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-400 rounded-lg mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition-transform">
                                                    <span class="text-white">P</span></div>
                                                <h3 class="text-gray-800 mb-1 text-sm">Philips Healthcare</h3>
                                                <p class="text-gray-500 text-xs">Tecnología Médica</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group bg-gray-50 rounded-xl p-6 hover:bg-blue-50 hover:shadow-lg transition-all duration-300 cursor-pointer border border-gray-100">
                                            <div class="text-center">
                                                <div
                                                    class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-400 rounded-lg mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition-transform">
                                                    <span class="text-white">G</span></div>
                                                <h3 class="text-gray-800 mb-1 text-sm">GE Healthcare</h3>
                                                <p class="text-gray-500 text-xs">Imagen Diagnóstica</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group bg-gray-50 rounded-xl p-6 hover:bg-blue-50 hover:shadow-lg transition-all duration-300 cursor-pointer border border-gray-100">
                                            <div class="text-center">
                                                <div
                                                    class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-400 rounded-lg mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition-transform">
                                                    <span class="text-white">S</span></div>
                                                <h3 class="text-gray-800 mb-1 text-sm">Siemens Healthineers</h3>
                                                <p class="text-gray-500 text-xs">Sistemas de Salud</p>
                                            </div>
                                        </div>
                                        <div
                                            class="group bg-gray-50 rounded-xl p-6 hover:bg-blue-50 hover:shadow-lg transition-all duration-300 cursor-pointer border border-gray-100">
                                            <div class="text-center">
                                                <div
                                                    class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-400 rounded-lg mx-auto mb-3 flex items-center justify-center group-hover:scale-110 transition-transform">
                                                    <span class="text-white">J</span></div>
                                                <h3 class="text-gray-800 mb-1 text-sm">Johnson &amp; Johnson</h3>
                                                <p class="text-gray-500 text-xs">Productos Médicos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 py-20 overflow-hidden">
                                <div
                                    class="absolute top-0 left-0 w-64 h-64 bg-blue-500 rounded-full opacity-20 blur-3xl -translate-x-1/2 -translate-y-1/2">
                                </div>
                                <div
                                    class="absolute bottom-0 right-0 w-96 h-96 bg-blue-400 rounded-full opacity-20 blur-3xl translate-x-1/2 translate-y-1/2">
                                </div>
                                <div class="container mx-auto px-4 relative z-10">
                                    <div class="max-w-4xl mx-auto text-center">
                                        <h2 class="text-white mb-4">¿Listo para Equipar tu Centro Médico?</h2>
                                        <p class="text-blue-100 mb-10 max-w-2xl mx-auto">Descarga nuestro catálogo completo
                                            o contacta a nuestro equipo de ventas para recibir una cotización personalizada
                                            y asesoramiento experto</p>
                                        <div class="flex flex-wrap gap-4 justify-center items-center"><button
                                                data-slot="button"
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-10 rounded-md px-6 has-[&gt;svg]:px-4 bg-white text-blue-600 hover:bg-gray-100 shadow-xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-download w-5 h-5 mr-2" aria-hidden="true">
                                                    <path d="M12 15V3"></path>
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <path d="m7 10 5 5 5-5"></path>
                                                </svg>Descargar Catálogo</button><button data-slot="button"
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-background dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4 border-2 border-white text-white hover:bg-white hover:text-blue-600 shadow-xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-phone w-5 h-5 mr-2" aria-hidden="true">
                                                    <path
                                                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                    </path>
                                                </svg>Llamar Ahora</button><button data-slot="button"
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive h-10 rounded-md px-6 has-[&gt;svg]:px-4 bg-green-500 hover:bg-green-600 text-white shadow-xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-message-circle w-5 h-5 mr-2" aria-hidden="true">
                                                    <path
                                                        d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719">
                                                    </path>
                                                </svg>Chat por WhatsApp</button></div>
                                        <div class="mt-12 pt-8 border-t border-blue-400/30">
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-white">
                                                <div>
                                                    <div class="text-blue-100 mb-1">Envío</div>
                                                    <div>Nacional e Internacional</div>
                                                </div>
                                                <div>
                                                    <div class="text-blue-100 mb-1">Garantía</div>
                                                    <div>Productos Certificados</div>
                                                </div>
                                                <div>
                                                    <div class="text-blue-100 mb-1">Soporte</div>
                                                    <div>Atención 24/7</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="contact" class="bg-white py-16">
                                <div class="container mx-auto px-4">
                                    <div class="text-center mb-12">
                                        <h2 class="text-blue-600 mb-2">Contáctanos</h2>
                                        <p class="text-gray-600 max-w-2xl mx-auto">¿Tienes preguntas sobre nuestros
                                            productos? Estamos aquí para ayudarte</p>
                                    </div>
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                                        <div class="space-y-8">
                                            <div>
                                                <h3 class="text-gray-800 mb-6">Información de Contacto</h3>
                                                <div class="space-y-6">
                                                    <div class="flex items-start gap-4">
                                                        <div
                                                            class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="lucide lucide-phone w-6 h-6 text-blue-600"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                                </path>
                                                            </svg></div>
                                                        <div>
                                                            <h4 class="text-gray-800 mb-1">Teléfono</h4>
                                                            <p class="text-gray-600">+57 (300) 123-4567</p>
                                                            <p class="text-gray-600">+57 (310) 987-6543</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-start gap-4">
                                                        <div
                                                            class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="lucide lucide-mail w-6 h-6 text-blue-600"
                                                                aria-hidden="true">
                                                                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                            </svg></div>
                                                        <div>
                                                            <h4 class="text-gray-800 mb-1">Correo</h4>
                                                            <p class="text-gray-600">contacto@medicalsupplies.com</p>
                                                            <p class="text-gray-600">ventas@medicalsupplies.com</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-start gap-4">
                                                        <div
                                                            class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="lucide lucide-map-pin w-6 h-6 text-blue-600"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                                </path>
                                                                <circle cx="12" cy="10" r="3"></circle>
                                                            </svg></div>
                                                        <div>
                                                            <h4 class="text-gray-800 mb-1">Dirección</h4>
                                                            <p class="text-gray-600">Calle 123 #45-67<br>Centro Médico,
                                                                Edificio A<br>Bogotá, Colombia</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-gradient-to-br from-blue-600 to-blue-500 rounded-2xl p-8 text-white">
                                                <h4 class="text-white mb-3">Horario de Atención</h4>
                                                <div class="space-y-2">
                                                    <div class="flex justify-between"><span>Lunes -
                                                            Viernes:</span><span>8:00 AM - 6:00 PM</span></div>
                                                    <div class="flex justify-between"><span>Sábados:</span><span>9:00 AM -
                                                            2:00 PM</span></div>
                                                    <div class="flex justify-between">
                                                        <span>Domingos:</span><span>Cerrado</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                                            <h3 class="text-gray-800 mb-6">Envíanos un Mensaje</h3>
                                            <form class="space-y-4">
                                                <div><label for="name" class="block text-gray-700 mb-2 text-sm">Nombre
                                                        Completo *</label><input type="text" data-slot="input"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive w-full"
                                                        id="name" name="name" required="" placeholder="Juan Pérez" value="">
                                                </div>
                                                <div><label for="email" class="block text-gray-700 mb-2 text-sm">Email
                                                        *</label><input type="email" data-slot="input"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive w-full"
                                                        id="email" name="email" required="" placeholder="juan@ejemplo.com"
                                                        value=""></div>
                                                <div><label for="phone"
                                                        class="block text-gray-700 mb-2 text-sm">Teléfono</label><input
                                                        type="tel" data-slot="input"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive w-full"
                                                        id="phone" name="phone" placeholder="+1 (555) 123-4567" value="">
                                                </div>
                                                <div><label for="company"
                                                        class="block text-gray-700 mb-2 text-sm">Empresa/Institución</label><input
                                                        type="text" data-slot="input"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive w-full"
                                                        id="company" name="company" placeholder="Hospital General" value="">
                                                </div>
                                                <div><label for="message" class="block text-gray-700 mb-2 text-sm">Mensaje
                                                        *</label><textarea data-slot="textarea"
                                                        class="resize-none border-input placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 flex field-sizing-content rounded-md border bg-input-background px-3 py-2 text-base transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 md:text-sm w-full min-h-[120px]"
                                                        id="message" name="message" required=""
                                                        placeholder="¿En qué podemos ayudarte?"></textarea></div><button
                                                    data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground h-9 px-4 py-2 has-[&gt;svg]:px-3 w-full bg-blue-600 hover:bg-blue-700"
                                                    type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-send w-4 h-4 mr-2" aria-hidden="true">
                                                        <path
                                                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                                        </path>
                                                        <path d="m21.854 2.147-10.94 10.939"></path>
                                                    </svg>Enviar Mensaje</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </main>
                        <footer class="bg-gray-900 text-gray-300">
                            <div class="container mx-auto px-4 py-16">
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                                    <div>
                                        <div class="flex items-center gap-2 mb-6">
                                            <div class="bg-blue-600 p-2 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-activity w-6 h-6 text-white" aria-hidden="true">
                                                    <path
                                                        d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                                    </path>
                                                </svg></div><span class="text-white">Medical Supplies</span>
                                        </div>
                                        <p class="text-gray-400 text-sm mb-6">Tu proveedor de confianza en equipos y
                                            productos médicos de alta calidad. Comprometidos con la excelencia en el cuidado
                                            de la salud.</p>
                                        <div class="flex gap-4"><a href="#"
                                                class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-facebook w-5 h-5" aria-hidden="true">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a><a href="#"
                                                class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-twitter w-5 h-5" aria-hidden="true">
                                                    <path
                                                        d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                                    </path>
                                                </svg></a><a href="#"
                                                class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-instagram w-5 h-5" aria-hidden="true">
                                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                                </svg></a><a href="#"
                                                class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition-colors"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-linkedin w-5 h-5" aria-hidden="true">
                                                    <path
                                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                    </path>
                                                    <rect width="4" height="12" x="2" y="9"></rect>
                                                    <circle cx="4" cy="4" r="2"></circle>
                                                </svg></a></div>
                                    </div>
                                    <div>
                                        <h3 class="text-white mb-6">Enlaces Rápidos</h3>
                                        <ul class="space-y-3">
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Inicio</a>
                                            </li>
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Productos</a>
                                            </li>
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Categorías</a>
                                            </li>
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Sobre
                                                    Nosotros</a></li>
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Blog</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="text-white mb-6">Atención al Cliente</h3>
                                        <ul class="space-y-3">
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Ayuda
                                                    y Soporte</a></li>
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Políticas
                                                    de Envío</a></li>
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Devoluciones</a>
                                            </li>
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Garantías</a>
                                            </li>
                                            <li><a href="#"
                                                    class="text-gray-400 hover:text-blue-400 transition-colors text-sm">FAQ</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="text-white mb-6">Contacto</h3>
                                        <ul class="space-y-4">
                                            <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-map-pin w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                    </path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg><span class="text-gray-400 text-sm">Av. Principal 123, Ciudad,
                                                    País</span></li>
                                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-phone w-5 h-5 text-blue-400 flex-shrink-0"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                    </path>
                                                </svg><span class="text-gray-400 text-sm">+1 (555) 123-4567</span></li>
                                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-mail w-5 h-5 text-blue-400 flex-shrink-0"
                                                    aria-hidden="true">
                                                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                    <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                </svg><span class="text-gray-400 text-sm">info@medicalsupplies.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="border-t border-gray-800 mt-12 pt-8">
                                    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                                        <p class="text-gray-400 text-sm">© 2025 Medical Supplies. Todos los derechos
                                            reservados.</p>
                                        <div class="flex gap-6"><a href="#"
                                                class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Términos
                                                y Condiciones</a><a href="#"
                                                class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Privacidad</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <div class="fixed bottom-6 right-6 z-50"><button data-slot="button"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive text-primary-foreground px-6 has-[&gt;svg]:px-4 w-16 h-16 rounded-full bg-green-500 hover:bg-green-600 shadow-2xl hover:shadow-green-500/50 transition-all duration-300 hover:scale-110"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-message-circle w-7 h-7 text-white"
                                    aria-hidden="true">
                                    <path
                                        d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719">
                                    </path>
                                </svg></button>
                            <div class="absolute inset-0 w-16 h-16 rounded-full bg-green-400 animate-ping opacity-75"></div>
                        </div>
                        <section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite"
                            aria-relevant="additions text" aria-atomic="false"></section>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Section-->
    <!-- carrusel de imagenes-->
    <!-- CARRUSEL 1
     <section id="destacados" style="padding: 60px 20px; background: #f8f9fa;">
      <h2 style="text-align:center; color:#004aad; margin-bottom: 30px;">
        Nuestros Productos Destacados
      </h2>

      <div class="carousel">
        <div class="carousel-images" id="carousel-images">
          <img class="carousel-img" src="tienda-sena/images/equipo1.jpg" alt="Monitor Multiparámetro">
          <img class="carousel-img" src="tienda-sena/images/equipo2.jpg" alt="Ecógrafo Portátil">
          <img class="carousel-img" src="tienda-sena/images/equipo3.jpg" alt="Autoclave de Mesa">
        </div>
        <button class="prev" onclick="moveSlide(-1)">❮</button>
        <button class="next" onclick="moveSlide(1)">❯</button>
      </div>
    </section>

    <script>
      let index = 0;
      const slides = document.getElementById("carousel-images");
      const total = slides.children.length;

      function moveSlide(step) {
        index = (index + step + total) % total;
        slides.style.transform = `translateX(-${index * 100}%)`;
      }

      setInterval(() => moveSlide(1), 5000);
    </script>

    <style>
      .carousel {
        position: relative;
        max-width: 900px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
      }

      .carousel-images {
        display: flex;
        transition: transform 0.5s ease-in-out;
      }

      .carousel-img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 20px;
      }

      .carousel button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255,255,255,0.8);
        border: none;
        padding: 10px;
        cursor: pointer;
        font-size: 18px;
        border-radius: 50%;
      }

      .prev { left: 10px; }
      .next { right: 10px; }
    </style>
    -->
    <!-- INTENTO DE CARRUSEL  <section>
    <img class="carousel-img" src="{{ asset('tienda-sena/images/descarga.jpeg') }}" alt="Monitor ">
    <img class="carousel-img" src="images/equipo2.jpg" alt="Ecógrafo Portátil">
    <img class="carousel-img" src="images/equipo3.jpg" alt="Autoclave de Mesa">
    </section>
    <style>
        section {
            display: flex;
            width: 600px;
            height: 430px;
        }
        section img {
            width: 0px;
            flex-grow: 1;
            object-fit: cover;
            opacity: .8;
            transition: .5s ease;
        }
        section img:hover {
            cursor: crosshair;
            width: 300px;
            opacity: 1;
            filter: contrast(120%);
        }


    </style>
    -->

    <section class="py-5" style="background-color: var(--bs-gray);">
        <div class="container px-4 px-lg-5 mt-1">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($productos as $producto)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('uploads/productos/' . $producto->imagen) }}"
                                alt="{{$producto->nombre}}" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$producto->nombre}}</h5>
                                    <!-- Product price-->
                                    $ {{number_format($producto->precio, 2)}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                        href="{{route('web.show', $producto->id)}}">Ver
                                        producto</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card-footer clearfix">
                {{ $productos->appends(['search' => request('search'), 'sort' => request('sort')])->links() }}
            </div>
        </div>
        </div>
    </section>
@endsection