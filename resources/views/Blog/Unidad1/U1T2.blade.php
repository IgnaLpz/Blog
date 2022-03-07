@extends('Blog.layout.template')
@section('content')
<section>
    <header class="major">
        <h2 id="masterprogram">Programa Maestro</h2>
    </header>
    <div>
        <h3>En inglés Master production Schedule (MPS) los programas maestros de producción son programas con la finalidad de mostrar los productos que serán fabricados especificando la cantidad que se podrá obtener en un lapso de tiempo. Si bien esta se encarga de ser guía en las acciones de producción, esta necesita de una definición de tiempo de producción lo cual permite el análisis de productividad.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="jobMP">Procesos Y Tareas Del Programa Maestro</h2>
    </header>
    <div>
        <h3>Abrir un puerto local bien conocido al cual pueda acceder los clientes<br>Esperar las peticiones de los clientes.<br>Elegir un puerto local para las peticiones que llegan en informar al cliente del nuevo puerto, (innecesario en la mayoría de los casos).<br>Iniciar un programa esclavo o proceso hijo que atienda la petición en el puerto local, (el esclavo cuando termina de manejar una petición no se queda esperando por otras).<br>Esperar que el esclavo termine de manejar la petición.<br>Informar al cliente del resultado de la petición.<br>Cerrar el puerto local.Volver a la espera de peticiones mientras los esclavos, en forma concurrente, se ocupan de las anteriores peticiones.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="servers">Tipos De Servidores</h2>
    </header>
    <div>
        <u>
            <h3>Servidores concurrentes</h3>
        </u>
        <h3>Este tipo de servidor busca atender a varios usuarios al mismo tiempo, pero el problema ocurre debido espera su de atención que esta maneja. A esto se le puede agregar si se piden archivos demasiado grandes lo que provoca que la espera sea mayor.</h3>
        <center><img src="http://3.bp.blogspot.com/_Z20u51kajjo/TK-eN0ZmEJI/AAAAAAAAABU/XHnLRAGB55E/s1600/concurrente.gif" alt=""></center>
        <u>
            <h3>Servidor iterativo</h3>
        </u>
        <h3>Con este tipo de servidor se atiende en un ciclo de uno en uno a los clientes la cual desde el archivo se lee y escribe un socket hasta encontrar una marca de fin de archivo suele a tener el mismo problema que los servidores concurrentes debido a la exigencia que se puede llegar a presentar con los archivos de gran tamaño.</h3>
        <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-rCupAfkkOfG1yr1wDgVLXzIwbQypdQV4RN1g8vf-fbQq3qPKQNwwCNr6TGW6SwrPmz8&usqp=CAU" alt=""></center>
        <u>
            <h3>Servidor con estado</h3>
        </u>
        <h3>Un host con estado es un host que conserva todas las configuraciones y vibraciones instaladas incluso después de reiniciarla. Aunque se requiere un servidor de despliegue automático para implementar servidores de no estado porque los archivos de inicio necesarios para activar los servidores no marcados se almacenan en servidores de implementación automática, servidores amigables con un servidor amigable sin una infraestructura similar. De hecho, los archivos de inicio necesarios para activar el servidor de estado almacenado en su disco duro.</h3>
        <center><img src="https://ibermega.com/wp-content/uploads/2017/03/Para-monitorear-el-estado-de-nuestro-servidor.jpg" alt=""></center>
        <u>
            <h3>Servidor sin estado</h3>
        </u>
        <h3>Se refieren a los casos en los que están aislados de información. En otras palabras, no hay información almacenada en actividades anteriores o referencias proporcionadas. Cada actividad está hecha desde el principio, como si fuera la primera vez. Comprenda las aplicaciones que brindan servicios o funciones y use servidores de impresión, redes de distribución de contenido (CDN) o web para manejar estos requisitos a corto plazo.</h3>
        <center><img src=" https://grupocarranzasa.com/wp-content/uploads/2021/06/sgspiGE-1.png" alt=""></center>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="des_venta">Ventajas Y Desventajas De La Arquitectura Cliente/Servidor</h2>
    </header>
    <div>
        <h2>Ventajas</h2>
        <h3>Existencia de plataformas de hardware cada vez más baratas. Esta constituye a su vez una de las más palpables ventajas de este esquema, la posibilidad de utilizar máquinas mucho más baratas que las requeridas por una solución centralizada, basada en sistemas grandes (mainframes). Además, se pueden utilizar componentes, tanto de hardware como de software, de varios fabricantes, lo cual contribuye considerablemente a la reducción de costos y favorece la flexibilidad en la implantación y actualización de soluciones. Facilita la integración entre sistemas diferentes y comparte información, permitiendo por ejemplo que las máquinas ya existentes puedan ser utilizadas, pero utilizando interfaces más amigables el usuario. De esta manera, se puede integrar PCs con sistemas medianos y grandes, sin necesidad de que todos tengan que utilizar el mismo sistema operativo. Al favorecer el uso de interfaces gráficas interactivas, los sistemas construidos bajo este esquema tienen una mayor y más intuitiva con el usuario. En el uso de interfaces gráficas para el usuario, presenta la ventaja, con respecto a uno centralizado, de que no siempre es necesario transmitir información gráfica por la red pues esta puede residir en el cliente, lo cual permite aprovechar mejor el ancho de banda de la red. La estructura inherentemente modular facilita además la integración de nuevas tecnologías y el crecimiento de la infraestructura computacional, favoreciendo así la escalabilidad de las soluciones. Contribuye además a proporcionar a los diferentes departamentos de una organización, soluciones locales, pero permitiendo la integración de la información.</h3>
        <h2>Desventajas</h2>
        <h3>El mantenimiento de los sistemas es más difícil pues implica la interacción de diferentes partes de hardware y de software, distribuidas por distintos proveedores, lo cual dificulta el diagnóstico de fallas. Cuenta con muy escasas herramientas para la administración y ajuste del desempeño de los sistemas. Es importante que los clientes y los servidores utilicen el mismo mecanismo, lo cual implica que se deben tener mecanismos generales que existan en diferentes plataformas. Hay que tener estrategias para el manejo de errores y para mantener la consistencia de los datos. El desempeño (performance), problemas de este estilo pueden presentarse por congestión en la red, dificultad de tráfico de datos, etc.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="cloud">Cómputo En La Nube</h2>
    </header>
    <div>
        <center><img src="https://i2ds.org/wp-content/uploads/2020/03/computacion-en-la-nube-para-empresas.png" alt="" height="300" width="500"></center>
        <h3>permite acceder en cualquier lugar y momento, a un software de almacenamiento de archivos y procesamiento de datos a través de Internet, sin la necesidad de conectarse servidor local. La nube utiliza la conectividad a gran escala desde internet para almacenar todos los recursos que el usuario vea la necesidad de almacenar.</h3>
        <center><img src="https://cdn.ttgtmedia.com/rms/onlineImages/111031_002_290X230.jpg" alt="" height="300" width="500"></center>
        <h3>Algunas de sus características son el reducir costos de infraestructura debido a que elimina el gasto capital con compras de un almacenamiento externo, no ocupa espacio físico dado que los recursos permanecen almacenados online, evitando que todos los datos se mantengan en distintos programas, cantidad ideal de recursos de almacenamiento y procesamientos y su accesibilidad permitiendo al dueño acceder desde cualquier dispositivo conectado a una red de internet.</h3>
    </div>
</section>
<section>
    <header class="major">
        <h2 id="architectures">Arquitecturas</h2>
    </header>
    <div>
        <h3>Definir los conceptos de Infrastructure as a Service (IAAS), Platform as a Service (PAAS), Software as a Service (SAAS).</h3>
        <u>
            <h3>IaaS</h3>
        </u>
        <h3>Cuando nos referimos a IaaS, estamos hablando de infraestructuras como servicio. Las empresas contratan la infraestructura de hardware a un tercero a cambio de una cuota o alquiler. La contratación de este hardware permite elegir la capacidad de proceso (procesadores), la memoria a utilizar (memoria RAM) y el espacio de almacenamiento (disco duro).</h3>
        <center><img src="https://www.csuc.cat/sites/default/files/2021-02/IaaS.png" alt="" height="400" width="550"></center>
        <u>
            <h3>PaaS</h3>
        </u>
        <h3>El servicio PaaS ofrece plataformas como servicios. En estas plataformas se pueden lanzar aplicaciones como bases de datos, middleware, herramientas de desarrollo, servicios de inteligencia empresarial, etc. Este tipo de servicios es el ideal para los desarrolladores que sólo quieran centrarse en la implementación y administración de sus aplicaciones. Al no tener que preocuparse por los recursos de hardware y software (sistemas operativo), mejoran su eficacia, centrándose sólo en la parte que les interesa.</h3>
        <center><img src="https://www.teamnet.com.mx/hubfs/PaaS.png" alt=""></center>
        <u>
            <h3>SaaS</h3>
        </u>
        <h3>Este modelo de software como infraestructura, aloja el software de la empresa, así como sus datos, en servidores externos a la misma, y paga una cuota por su utilización. Cualquier empleado de una empresa podrá acceder desde cualquier lugara las aplicaciones de la empresa sin necesidad de instalarlas en un equipo local. Cuando hablamos de software en la nube estamos hablando de SaaS. Con un SaaS la preocupación de la empresa será sólo cómo utilizar los programas de software necesarios para su funcionamiento, olvidándose del resto de recursos. El hardware requerido, sistemas operativos, aplicaciones, etc. son provistas por el proveedor del servicio que, además, se encarga de mantenerlas funcionando correctamente y actualizadas.</h3>
        <center><img src="https://www.inbest.cloud/hs-fs/hubfs/iNBest.Cloud-TemplateAlthea/Im%C3%A1genes/Blog/Art%C3%ADculosBlog/SAAS-Cloud%20Computing(1).png?width=590&name=SAAS-Cloud%20Computing(1).png" alt=""></center>
    </div>
</section>
@endsection
@section('temas')
<section>
    <div>
        <nav>
            <a href="#masterprogram">Programa Maestro</a>
            <a href="#jobMP">Procesos Y Tareas PM</a>
            <a href="#servers">Tipos De Servidores</a>
            <a href="#des_venta">Ventajas Y Desventajas Arquitectura CS</a>
            <a href="#cloud">Computo En La Nube</a>
            <a href="#architectures">Arquitecturas</a>
        </nav>
    </div>
</section>
@endsection