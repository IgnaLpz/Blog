@extends('Blog.layout.template')
@section('content')
<section>
    <header class="major">
        <h2 id="pdistributed">Presentación Distribuida</h2>
    </header>
    <div>
        <h3>La capa de presentación se encuentra distribuida entre el cliente y el servidor, de manera que en el cliente se modifica o adapta la presentación que ofrece el servidor. Este tipo de sistemas tienen un difícil mantenimiento.</h3>
        <center><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image010.jpg" alt=""></center>
    </div>
</section>
<section>
    <header>
        <h2 id="premote">Presentación Remota</h2>
    </header>
    <div>
        <h3>La capa de presentación de datos se ejecuta en el cliente totalmente. En ella se realizan las validaciones de los datos de entrada, el formateo de los de salida, etc. La lógica de negocio y el acceso a la base de datos se aloja en el servidor.</h3>
        <center><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image008.jpg" alt=""></center>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="plogic">Presentación Lógica</h2>
    </header>
    <div>
        <h3>Las distintas arquitecturas cliente-servidor varían en su forma de operar sobre la base de 3 conceptos generales:</h3>
        <h4>
            <li>La lógica de acceso a datos: funcione que gestionan todas las interacciones entre el SW y los almacenes de datos.</li>
        </h4>
        <h4>
            <li>La lógica de presentación: funciones que gestionan la interfaz entre los usuarios del sistema y el SW.</li>
        </h4>
        <h4>
            <li>La lógica de negocio o lógica de aplicación: funciones que transforman entradas en salidas.</li>
        </h4>
        <center><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image016.jpg" alt=""></center>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="BDdistributed">Bases De Datos Distribuidas</h2>
    </header>
    <div>
        <h3>Las capas de negocio y de presentación se ejecutan completamente en el cliente, mientras que la base de datos está distribuida entre el cliente y el servidor. Se requieren de mecanismos para asegurar la coherencia en los datos.</h3>
        <center><img src="http://isa.uniovi.es/domotica/Temas/T6/T6-ClienteServidor_archivos/image014.jpg" alt=""></center>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="laccess">Lógica De Acceso</h2>
    </header>
    <div>
        <h3>Hace referencia a la capacidad de administrar todas las interacciones entre el software y los almacenes de datos, díganse estas interacciones como recuperación, consulta, la actualización, la seguridad y el control de concurrencia.</h3>
        <center><img src="https://1.bp.blogspot.com/-1NIDe2zvKZ8/V_N5sARJlgI/AAAAAAAAABU/8KL-kEfu5YsP2fbX_Pu7Q1gTP-3yvWW7gCLcB/s1600/silabo_1368_imagenesdeseguridadinformatica.jpg" alt="" height="400" width="550"></center>
        <u>
            <h3>Diseño y desarrollo:</h3>
        </u>
        <h3>Para crear un diseño general en la capa de acceso a datos es necesario identificar los requerimientos de las fuentes de datos (data sources), determinar el enfoque para acceder a los datos, estructurar un mapeo y las conexiones de los datos resultantes y determinar cómo se manejarán los errores al momento de conectar las fuentes de datos.</h3>
        <u>
            <h3>Diseñar de componentes de acceso a datos</h3>
        </u>
        <h3>Se enumerar las fuentes de datos a las que va a acceder, se elige un método de acceso para cada fuente de datos, determinar que componentes auxiliares o librerías para facilitar el acceso a los datos, así como las tareas de desarrollo y mantenimiento y aplicar patrones de diseño en el acceso a los datos.</h3>
        <u>
            <h3>Diseñar de componentes auxiliares</h3>
        </u>
        <h3>Identificar que funcionalidades de acceso a datos y crear un componente auxiliar para su reutilización, buscar librerías de componentes auxiliares y contemplar componentes auxiliares para solucionar problemas como conexiones, autenticación, monitorización o tratamiento de excepciones.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="lpresentation">Lógica Presentación </h2>
    </header>
    <div>        <
        <h3>Son funciones de administración de interfases, incluyendo la visualización e impresión de formularios e informes, y la posibilidad de validar las entradas del sistema.</h3>
        center><img src="https://programacionwebisc.files.wordpress.com/2013/11/mod2capas.png" alt=""></center>
        <u>
            <h3>Diseño y desarrollo:</h3>
        </u>
        <h3>Determinar la presentación de los datos. Este es el formato de su capa de presentación y como se presentarán los datos en su interfaz de usuario, elegir una estrategia de validación de datos teniendo claro que es lógica de negocio o proceso de datos y que es presentación de datos, podemos desacoplar (separar) las capas. Si se tiene una aplicación con arquitectura multicapa se debe establecer una estrategia se comunicación entre capas, así como patrones relevantes en el diseño de la capa de presentación que simplifiquen la implementación y mantenimiento de la capa de presentación y aportan la robustez de soluciones probadas y de éxito en la industria y siempre se debe diseñar los componentes de manera separada y conocer el tipo de presentación que es del agrado del usuario.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="ldates">lógica Negocio A Datos </h2>
    </header>
    <div>
        <h3>Convertir las entradas en salidas, que incluyen de todos los temas finanzas, ciencia, modelos de ingeniería y más.</h3>
        <center><img src="https://www.angexim.com.pe/assets/images/cliente-servidor-1014x660.png" alt="" height="350" width="550"></center>
        <u>
            <h3>Diseño y desarrollo:</h3>
        </u>
        <h3>Identificar los consumidores de la capa de negocio y determinar cómo se va a exponer la capa de negocio, los requerimientos de seguridad, de validación y de caché y la estrategia de tratamiento de excepciones de la capa de negocio.</h3>
        <u>
            <h3>Componentes de negocio</h3>
        </u>
        <h3>Determinar las interacciones, acoplamiento y ubicación de los componentes de negocio, seleccionar el soporte transaccional adecuado e identificar como se van a tratar las reglas de negocio y los patrones que se ajusten a los requerimientos de negocio.</h3>
        <u>
            <h3>Entidades de negocio</h3>
        </u>
        <h3>Consiste seleccionar el formato de datos adecuado, el diseño correcto de la entidad de negocio y el tipo de serialización que vamos a necesitar.</h3>
        <u>
            <h3>Componentes de flujos de trabajo</h3>
        </u>
        <h3>Se debe identificar los escenarios de uso de flujos de trabajo, determinar reglas y cómo van a ser tratadas, especificar el flujo de trabajo para nuestra aplicación y crear componentes de negocio que soporten ese flujo.</h3>
    </div>
</section>
@endsection
@section('temas')
<section>
    <div>
        <nav>
            <a href="#pdistributed">Presentación Distribuida</a>
            <a href="#premote">Presentación Remota</a>
            <a href="#plogic">Presentación Lògica</a>
            <a href="#BDdistributed">Base De Datos Distribuida</a>
            <a href="#laccess">Lògica De Acceso</a>
            <a href="#lpresentation">Lògica Presentación</a>
            <a href="#ldates">Lògica Negocio A Datos</a>
        </nav>
    </div>
</section>
@endsection
