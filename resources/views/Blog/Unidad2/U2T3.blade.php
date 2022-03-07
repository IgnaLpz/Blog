@extends('Blog.layout.template')
@section('content')
<section>
    <header class="major">
        <h2 id="modelVC">Modelo Vista Controlador</h2>
    </header>
    <div>
        <center><img src="https://codigosdeprogramacion.com/cursos/wp-content/uploads/2017/06/MVC.jpg" alt=""></center>
        <h3>Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos.</h3>
        <u>
            <h3>Modelo</h3>
        </u>
        <h3>Este es el que puede acceder al almacenamiento de los datos, pero ideal es que el modelo sea independiente del sistema y define la funcionalidad del sistema.</h3>
        <u>
            <h3>Controlador</h3>
        </u>
        <h3>Recibe los eventos de entrada y contiene reglas de gestión de eventos que son efectuados al recibir o no una acción. Estas acciones pueden suponer peticiones al modelo o a las vistas.</h3>
        <u>
            <h3>Vista</h3>
        </u>
        <h3>Se reciben los datos del modelo y los muestra al usuario. Tienen un registro de su controlador asociado.</h3>
    </div>
</section>
<section>
    <header>
        <h2 id="controlMVC">Flujo De Control Del MVC</h2>
    </header>
    <div>
        <center><img src="http://nicobobb.com/wp-content/uploads/2019/07/Modelo-Vista-Controlador-MVC-e1563542027578.png" alt=""></center>
        <h3>El usuario interactúa con la interfaz de usuario de alguna forma, el controlador recibe la notificación de la acción solicitada, el controlador gestiona el evento que llega, frecuentemente a través de un gestor de eventos (handler) o callback. El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción solicitada por el usuario. Los controladores complejos están a menudo estructurados usando un patrón de comando que encapsula las acciones y simplifica su extensión.</h3>
        <h3>El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de usuario. La vista obtiene sus datos del modelo para generar la interfaz apropiada para el usuario donde se refleja los cambios en el modelo. El modelo no debe tener conocimiento directo sobre la vista. Sin embargo, se podría utilizar el patrón observador para proveer cierta indirección entre el modelo y la vista, permitiendo al modelo notificar a los interesados de cualquier cambio. Un objeto vista puede registrarse con el modelo y esperar a los cambios, pero aun así el modelo en sí mismo sigue sin saber nada de la vista. El controlador no pasa objetos de dominio a la vista aunque puede dar la orden a la vista para que se actualice.</h3>
    </div>
</section>
@endsection
@section('temas')
<section>
    <div>
        <nav>
            <a href="#modelVC">Modelo Vista Controlador</a>
            <a href="#controlMVC">Flojo De Control Del Modelo VC</a>
        </nav>
    </div>
</section>
@endsection