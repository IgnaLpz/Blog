@extends('Blog.layout.template')
@section('content')
<section>
    <header class="major">
        <h2 id="nprogramweb">Nivel Vinculado A Programación Web</h2>
    </header>
    <div>
        <center><img src="https://tec755.files.wordpress.com/2017/08/com.jpg?w=640" alt=""></center>
        <h3>Al referirse a “nivel” se hace referencia a los procesos que se ejecutan cuando se realiza una petición, este mensaje a un receptor el cual se encarga de procesar la petición y enviar una respuesta. Esto puede desencadenar una serie de peticiones futuras las cuales tendrán una respuesta generando un bucle.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="level2">Planificación En 2 Niveles</h2>
    </header>
    <div>
        <center><img src="https://slideplayer.es/slide/12961734/79/images/12/Modelo+2+capas.jpg" alt="" height="400" width="600"></center>
        <h3>La arquitectura en 2 niveles se utiliza para describir los sistemas cliente/servidor en donde el cliente solicita recursos y el servidor responde con sus propios recursos dando a entender que no requiere otra aplicación para proporcionar un servicio.<br>El modelo cliente servidor de dos capas comenzó a desarrollarse para redes LAN a finales de los 80 y principios de los 90 y estos compartían archivos. Inicialmente el modelo usaba equipos que no tienen la característica de servidor de archivos en red y un cliente.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="level3">Planificación En 3 Niveles</h2>
    </header>
    <div>
        <center><img src="https://player.slideplayer.es/79/12961734/slides/slide_13.jpg" alt="" height="400" width="600"></center>
        <h3>La arquitectura generalmente está compartida por un cliente que solicita los recursos generalmente un navegador Web, el servidor de aplicaciones cuya tarea es proporcionar los recursos solicitados, pero que requiere de otro servidor para hacerlo y el servidor de datos, que proporciona al servidor de aplicaciones los datos que requiere.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="levels">Planificación Multiniveles.</h2>
    </header>
    <div>
        <center><img src="http://contenidos.sucerman.com/nivel4/desarrollo/unidad2/img/modelo-n-capas.jpg" alt="" height="400" width="600"></center>
        <h3>Un servidor puede utilizar los servicios de otros servidores para proporcionar su propio servicio. Por consiguiente, la arquitectura es potencialmente una arquitectura en N-niveles.</h3>
    </div>
</section>
@endsection
@section('temas')
<section>
    <div>
        <nav>
            <a href="#nprogramweb">Nivel Victulado A Web</a>
            <a href="#level2">Nivel 2</a>
            <a href="#level3">Nivel 3</a>
            <a href="#levels">Multiniveles</a>
        </nav>
    </div>
</section>
@endsection