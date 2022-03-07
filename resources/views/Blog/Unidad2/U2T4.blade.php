@extends('Blog.layout.template')
@section('content')
<section>
    <header>
        <h2 id="api">API</h2>
    </header>
    <div>
    <center><img src="https://digitalcosmonot.com/static/assets/img/blog/api-yonetimi.gif" alt="" height="400" width="600" ></center>
    <H3>Las API permiten que sus productos y servicios se comuniquen con otros, sin necesidad de saber cómo están implementados. Esto simplifica el desarrollo de las aplicaciones y permite ahorrar tiempo y dinero. Las API le otorgan flexibilidad; simplifican el diseño, la administración y el uso de las aplicaciones; y ofrecen oportunidades de innovación.</H3>
    <center><img src="https://c.tenor.com/RNpjaR9Iq0oAAAAC/files-api.gif" alt=""></center>
    <h3>Application Programming Interface o interfaz de programación de aplicaciones ‘API’ permite a los programadores acceder a determinadas funciones. Las interfaces actúan como punto de acceso para otros programas. A través de una API, los dos programas pueden comunicarse entre sí, intercambiar datos y transferir comandos. Esto funciona tanto para el software de escritorio como para las aplicaciones móviles o las aplicaciones web. También se puede estructurar un solo programa de tal manera que los diferentes módulos se comuniquen entre sí a través de interfaces.</h3>
    <center><img src="https://i.pinimg.com/originals/6a/cf/67/6acf67c5c9341c3c467179668c200895.gif" alt="" height="400" width="650"></center>
    <h3>Las API son un medio simplificado para conectar su propia infraestructura a través del desarrollo de aplicaciones nativas de la nube, pero también le permiten compartir sus datos con clientes y otros usuarios externos. Las API públicas aportan un valor comercial único porque simplifican y amplían sus conexiones con los partners y además, pueden rentabilizar sus datos.</h3>
    </div>
</section>
<section>
    <header>
        <h2 id="sockets">Sockets</h2>
    </header>
    <div>
        <center><img src="https://psp.codeandcoke.com/_media/apuntes:sockets.png" alt=""></center>
        <h3>Son un mecanismo que nos permite establecer un enlace entre dos programas que se ejecutan independientes el uno del otro en este caso un programa cliente y uno servidor. Para esto Java provee dos clases: Socket para implementar la conexión desde el lado del cliente y ServerSocket que nos permitirá manipular la conexión desde el lado del servidor.</h3>
    </div>
</section>
<section>
    <header>
        <h2 id="communicationCS">Comunicación Cliente/Servidor Con Socket TCP</h2>
    </header>
    <div>
    <h3>Se crear un objeto de la clase Socket, indicando host y puerto donde corre el servicio, se obtiene las referencias al stream de entrada y al de salida al socket y estas se leen o escriben en el stream de acuerdo al protocolo del servicio mediante la implementación de paquetes java.io.</h3>
        <center><img src="https://mate.uprh.edu/~jse/cursos/4097/notas/java/javaEspanol/JavaTut/Cap9/cliserv.gif" alt=""></center>
        <h3>Se utilizan patrones relevantes en el diseño de la capa de presentación. Los patrones de diseño simplifican la implementación y mantenimiento de la capa de presentación y aportan la robustez de soluciones probadas y de éxito en la industria</h3>
    </div>
</section>
<section>
    <header>
        <h2 id="implement">Implementar Un Servidor </h2>
    </header>
    <div>
        <h3>Se crea un objeto de la clase ServerSocket para escuchar peticiones en el puerto asignado al servicio y se debe esperar una solicitud del cliente</h3>
        <h3>Debe aceptar la conexión obteniendo un objeto de la clase Socket Obtener las referencias al stream de entrada y al de salida al socket. Leer datos del socket, procesarlos y enviar respuestas al cliente, escribiendo en el stream del socket.</h3>
    </div>
</section>
@endsection
@section('temas')
<section>
    <div>
        <nav>
            <a href="#api">API</a>
            <a href="#sockets">Sockets</a>
            <a href="#communicationCS">Comunicaciòn SC Con Sockets</a>
            <a href="#implement">implementar Un Servicio</a>
        </nav>
    </div>
</section>
@endsection