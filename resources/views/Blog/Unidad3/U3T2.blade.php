@extends('Blog.layout.template')
@section('content')
<section>
    <header class="major">
        <h2 id="acid">Modelo ACID</h2>
    </header>
    <div>
        <h3>ACID es el conjunto de propiedades que garantizan que las transacciones de una Base de Datos se procesan de manera fiable. De forma muy resumida, las propiedades son:</h3>
        <center><img src="https://lh4.googleusercontent.com/UVTzS_Zlb-f0jo7MIKAXysQ1qjLOQMNzt2TRQ6R6rHcrfeDI2tmgbChpZIgimYRkT0SSIx13hd7rNqpHJJ0mOzCk9tqk5AkiNvj8na8O5I71SwxVB-oV68EUf68ut5_hGTAcA6Ds" alt="" height="450" width="700"></center>
        <ul>
            <li>
                <h3>Atomicidad</h3>
            </li>
            <h3>Implica que requiere que cada transición sea “todo o nada” debido a que si una parte de estas falla las operaciones realizadas en la transacción fallaran y por lo tanto la BD no recibe información alguna y no se produce ningún cambio. Debido a eso el sistemas debe garantiza la atomicidad en cualquier operación o situación.</h3>
            <li>
                <h3>Consistencia</h3>
            </li>
            <h3>Esta asegura que cualquier transacción dará a la BD un estado de validación con el cual se garantiza que cualquier dato que se escriba en ella tiene que ser validado con respecto a una serie de reglas definidas.</h3>
            <li>
                <h3>Aislamiento</h3>
            </li>
            <h3>En esta se asegura la ejecución concurrente de las transacciones que resultan de un estado del sistema que se obtiene una vez las transacciones fueron ejecutadas de manera consecutiva.</h3>
            <li>
                <h3>Durabilidad</h3>
            </li>
            <h3>Esta significa que una transacción que se confirmó queda permanentemente guardada.</h3>
        </ul>
    </div>
</section>
<section>
    <header>
        <h2 id="triggers">Disparadores</h2>
    </header>
    <div>
        <h3>Los disparadores o mejor conocidos como triggers hace referencia a una acción que se produce en la BD siempre y cuando se cumplan los requerimientos para que estos sucedan. Estos se ejecutan mediante un código en el que se establecen las condiciones y a este se le denomina cuerpo del disparador el cual esta formado por bloques PL/SQL.</h3>
        <center><img src="https://javieroto.files.wordpress.com/2020/03/data-processing-wp.jpg" alt="" width="700"></center>
        <u>
            <h3>Elementos del gestor de transacciones</h3>
        </u>
        <ul>
            <li>
                <h3>Disparador de nivel fila</h3>
            </li>
            <h3>Este disparador se ejecuta cuando se ejecuta una transacción de tipo INSERT, UPDATE o DELETE por una instrucción DML. Los disparadores de nivel de fila se crean utilizando la cláusula FOR EACH ROW en el comando CREATE TRIGGER.</h3>
            <center><img src="https://www.mysqltutorial.org/wp-content/uploads/2019/09/MySQL-Triggers.png" alt=""></center>
            <li>
                <h3>Disparador de nivel de introducción</h3>
            </li>
            <h3>Se ejecutan una vez para cada instrucción DML. Los disparadores de nivel de instrucción son el tipo predeterminado que se crea con el comando CREATE TRIGGER.</h3>
            <center><img src="https://www.mysqltutorial.org/wp-content/uploads/2019/09/MySQL-AFTER-UPDATE-Trigger.png" alt=""></center>
            <li>
                <h3>Disparador before/after</h3>
            </li>
            <h3>Luego que los disparadores son ejecutados por sucesos, puede establecerse que se produzcan inmediatamente antes (before) o después (after) de dichos sucesos.</h3>
            <center><img src="https://www.mysqltutorial.org/wp-content/uploads/2019/09/MySQL-BEFORE-INSERT-Trigger.png" alt=""></center>
            <li>
                <h3>Disparador instead of</h3>
            </li>
            <h3>Puede utilizar INSTEAD OF para indicar a Oracle lo que tiene que hacer en lugar de realizar las acciones que invoca el disparador</h3>
            <center><img src="https://www.sqlservertutorial.net/wp-content/uploads/SQL-Server-INSTEAD-OF-trigger-illustration.png" alt="" height="320" width="600"></center>
            <li>
                <h3>Disparador de esquema</h3>
            </li>
            <h3>Puede crear disparadores sobre operaciones en el nivel de esquema tales como CREATE table, alter table, DROP table, AUDIT, RENAME, TRUNCATE y REVOKE. Puede incluso crear disparadores para impedir que los usuarios eliminen sus propias tablas. En su mayor parte, los disparadores de nivel de esquema proporcionan dos capacidades: impedir operaciones DDL y proporcionar una seguridad adicional que controle las operaciones DDL cuando estar se producen.</h3>
            <center><img src="https://docs.oracle.com/cd/A57673_01/DOC/server/doc/SCN73/image062.gif" alt="" height="320" width="600"></center>
            <li>
                <h3>Disparador en nivel de BD</h3>
            </li>
            <h3>Puede crear disparadores que se activen al producirse sucesos de la base de datos, incluyendo errores, inicios de sesión, conexiones y desconexiones. Puede utilizar este tipo de disparador para automatizar el mantenimiento de la base de datos o las acciones de auditoría.</h3>
            <center><img src="https://i0ba83ftsgi2rzkek1hlusq1-wpengine.netdna-ssl.com/wp-content/uploads/2018/04/how-it-works-opt.gif" alt=""></center>
        </ul>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="gestion">Procesos de gestión</h2>
    </header>
    <div>
        <center><img src="https://cesararsep.com/wp-content/uploads/2021/05/webdesign.gif" alt=""></center>
        <ul>
            <li>
                <h3>Procesos de servio</h3>
            </li>
            <h3>Es una serie de procesos que permiten dar seguimiento, estandarizar y buscar la mejora de los servicios y atención que una empresa o negocio brinda a sus clientes. Gracias a ella, es posible medir el desempeño, encontrar oportunidades de innovación y garantizar la satisfacción de las personas que interactúan con la organización. De acuerdo a la gestión, se considera al servicio como un eslabón de la cadena de suministro que (junto a otros como el control de calidad y procesos de venta) ayuda a conservar a los clientes. Por eso necesita valerse de herramientas que permitan automatizar aspectos como el control de inventario, fluidez en las entregas de artículos, registro de devoluciones o mercancía dañada e incluso las comunicaciones que se tienen con un cliente en particular hasta el momento.</h3>
            <li>
                <h3>Supervicion de ejecucion</h3>
            </li>
            <h3>La supervisión es una actividad técnica y especializada que tiene como fin fundamental utilizar racionalmente los factores que le hacen posible la realización de los procesos de trabajo: el hombre, la materia prima, los equipos, maquinarias, herramientas, dinero, entre otros elementos que en forma directa o indirecta intervienen en la consecución de bienes, servicios y productos destinados a la satisfacción de necesidades de un mercado de consumidores, cada día más exigente, y que mediante su gestión puede contribuir al éxito de la empresa.</h3>
            <li>
                <h3>Redistribucion de las cargas de trabajo</h3>
            </li>
            <h3>Se trata de que cada colaborador tenga la posibilidad de: influir y tomar decisiones en la realización de sus actividades, con base en sus conocimientos y habilidades actuar con cierta autonomía o tomando la iniciativa participar y manejar los cambios, y aportar soluciones para crear mejores formas de trabajo y un entorno organizacional favorable.</h3>
            <li>
                <h3>Transaccion</h3>
            </li>
            <h3>La gestión de transacciones trata el problema de asegurar la bd en un estado consistente aún en casos de acceso concurrente y de fallas.</h3>
            <li>
                <h3>Comunicaciones</h3>
            </li>
            <h3>Se trata del proceso de desarrollar un enfoque y un plan apropiados para las actividades de comunicación del proyecto basados en las necesidades de información de cada interesado o grupo, en los activos de la organización disponibles y en las necesidades del proyecto. Gestionar las Comunicaciones. Es el proceso de garantizar que la recopilación, creación, distribución, almacenamiento, recuperación, gestión, monitoreo y disposición final de la información del proyecto sean oportunos y adecuados. Monitorear las Comunicaciones. Es el proceso de asegurar que se satisfagan las necesidades de información del proyecto y de sus interesados.</h3>
        </ul>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="transaccion">Gestión de transacción</h2>
    </header>
    <div>
        <h3>Conforman lo que se denomina el sistema de base de datos (a veces, se utiliza simplemente el término base de datos para denominarlo). En términos generales, un SGBD es un software que sigue un modelo de sistema de base de datos y, por lo tanto, resulta decisivo a la hora de configurarla, administrarla y utilizarla. Solo cuando el sistema gestor de base de datos está instalado y configurado, los usuarios pueden introducir y consultar los datos. Los permisos de lectura y escritura, así como las funciones de administración generales, se establecen mediante las interfaces específicas de la aplicación y el lenguaje de definición de datos correspondiente.</h3>
        <u>
            <h3>Componentes de un sistema gestor de transacciones</h3>
        </u>
        <ul>
            <li>
                <h3>Diccionario de datos</h3>
            </li>
            <h3>Consiste en una lista de metadatos que reflejan las características de los diversos tipos de datos incluidos en la base de datos. Además, estos metadatos informan sobre los permisos de uso de cada registro y su representación física. De esta manera, el diccionario proporciona toda la información relevante sobre los datos almacenados.</h3>
            <center><img src="https://media.slid.es/uploads/693956/images/3739752/xtremio-database-storage-analytics.png" alt="" height="400" width="600"></center>                       
            <ul>
                <li>
                    <h3>DDL</h3>
                </li>
                <h3>Consiste en una lista de metadatos que reflejan las características de los diversos tipos de datos incluidos en la base de datos. Además, estos metadatos informan sobre los permisos de uso de cada registro y su representación física. De esta manera, el diccionario proporciona toda la información relevante sobre los datos almacenados.</h3>
                <center><img src="data:image/png;base64,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" alt="" height="350" width="500"></center>
                <li>
                    <h3>DML</h3>
                </li>
                <h3>El lenguaje de definición de datos, también llamado lenguaje de base de datos o DDL (data definition language), sirve para estructurar el contenido de la base de datos. Gracias a este lenguaje, es posible crear, modificar y eliminar objetos individuales, como referencias, relaciones o derechos de usuario.</h3>
                <center><img src="data:image/png;base64,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" alt="" height="350" width="500"></center>
                <li>
                    <h3>DCL</h3>
                </li>
                <h3>Un Lenguaje de Control de Datos es un lenguaje proporcionado por el sistema de gestión de base de datos que permiten al administrador controlar el acceso a los datos contenidos en la base de datos.</h3>
                <center><img src="https://media.geeksforgeeks.org/wp-content/uploads/20200511185632/DCL.png" alt="" height="350" width="500"></center>
                <li>
                    <h3>TCL</h3>
                </li>
                <h3>El Lenguaje de control de transacción es, o TCL, son comandos que permiten manejar transacciones en una base de datos relacional, por lo que es importante primeramente aclarar el concepto de transacción.</h3>
                <center><img src="data:image/png;base64,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" alt="" height="350" width="500"></center>
            </ul>
        </ul>
    </div>
</section>
@endsection
@section('temas')
<div>
    <nav>
        <ul>
            <li><a href="#acid">Modelo ACID</a></li>
            <li><a href="#triggers">Disparadores</a></li>
            <li><a href="#gestion">Proceso de gestión</a></li>
            <li><a href="#transaccion">Gestion de transacciones</a></li>
        </ul>
    </nav>
</div>
@endsection