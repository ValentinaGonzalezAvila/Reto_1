# Reto 1 - Postobón

## Pregunta:
¿Cómo podemos garantizar que los proveedores de material transformado aseguren el suministro del material en la calidad, cantidad y frecuencia necesarias para que POSTOBÓN materialice la circularidad de sus envases y empaques?

## Tabla de Contenidos
[1. Introducción](#introducción)

[2. Descripción del problema](#descripción-del-problema)

[3. Descripción de la solución](#descripción-de-la-solución)

[4. Requerimientos Funcionales](#requerimientos-funcionales)

[5. Requerimientos No Funcionales](#requerimientos-no-funcionales)

[6. Diagrama Relacional](#diagrama-relacion)

[7. Herramientas necesarias para el desarrollo de la solución](#herramientas-necesarias-para-el-desarrollo-de-la-solución)

[8. Conclusiones](#conclusiones)

***

### 1. Introducción

A través de la historia las compañías han evolucionado conforme a las diferentes necesidades que presentan tanto sus consumidores como ellas mismas en sí.
Hoy en día, gracias a la tecnología se están generando grandes cantidades de información, los datos generados en cada segundo, deben ser almacenados, para luego poder acceder a ellos y generar a través de lo que conocemos como Business Intelligence estrategias, soluciones sostenibles y porqué no, nuevos productos.

### 2. Descripción del problema

Las diferentes compañias están buscando la manera en la que a través de proyectos sostenibles se reduzca el uso de plásticos de un solo uso, una de las soluciones planteadas es reciclar los materiales para que no vayan a parar a los océanos y dañen la fauna y flora.
Otra de las problemáticas a la que nos enfrentamos es la informalidad en el sector del reciclaje, por lo que para hacerle frente a esto, a través de la resolución 1407 de 2018, se busca formalizar las empresas de reciclaje junto con sus diferentes colaboradores.


### 3. Descripción de la solución 

En las diferentes reuniones sostenidas, se nos planteó la necesidad de la obtención de información de los proveedores de las empresas transformadoras para que consigo las empresas que necesiten obtener la información de una oferta de determinado material puedan saber quién tiene disponible ese material.
El problema es que esa información no la tiene nadie disponible. Sin embargo, a través de la resolución 1342 de 2020, la cuál modifica la resolución 1407 de 2020, podemos acceder a un formato de registro que utilizan las empresas transformadoras para su formalización con la entidad ambiental territorial encargada.
Con la información que pretendemos obtener de esos formatos, plantemos una página web en la cuál las empresas como Postobón y las transformadoras tendrán que registrarse con un usuario el cual tendrá un rol específico. Por ejemplo, para Postobón, será un rol el cual tendrá la posibilidad de ver la información de la disponibilidad de materiales y de su transformadora, a través de una tabla en tiempo real, mientras que una empresa transformadora en su rol de usuario podrá registrar/actualizar la información de sus productos en tiempo real. Todo esto será posible gracias al uso de una base de datos que permite el registro, la actualización y el control de los datos que se ingresen.


### 4. Requerimientos Funcionales
Los requerimientos funcionales de un sistema, son aquellos que describen cualquier actividad que este deba realizar, en otras palabras, el comportamiento o función particular de un sistema o software cuando se cumplen ciertas condiciones.

Por lo general, estos deben incluir funciones desempeñadas por pantallas específicas, descripciones de los flujos de trabajo a ser desempeñados por el sistema y otros requerimientos de negocio, cumplimiento, seguridad u otra índole.

Para nuestro proyecto los requerimientos funcionles serian los siguientes:

 1. El sistema debe ser capaz de procesar N transacciones por dia ingresados por cada empresa.
 2. Toda funcionalidad del sistema y transacción de negocio debe responder al usuario en menos de 5 segundos.
 3. Los permisos de acceso al sistema podrán ser cambiados solamente por el administrador de acceso a datos.
 4. Página web (Para uso de Postobón y empresas transformadoras)
 5. La pagina web debe ser compatible con todos los sistemas de busqueda
 6. Al ingresar ordenes de entrega de materiales , cada oreden esteasociada a un unico numero.
 7. El sistema permitirá el registro y la visualización de la información técnica.
 8. Base de datos relacional con información de transformadoras de cantidad, calidad, transformación (ton/año), entre otros).
 
### 5. Requerimientos No Funcionales
Los requerimientos no funcionales representan características generales y restricciones de la aplicación o sistema que se esté desarrollando.

Suelen presentar dificultades en su definición dado que su conformidad o no conformidad podría ser sujeto de libre interpretación, por lo cual es recomendable acompañar su definición con criterios de aceptación que se puedan medir.

Para nuestro proyecto los requerimientos no funcionales son los sigueintes

 1. Descripciones de los datos a ser ingresados en el sistema
 2. Definición de quien puede ingresar datos en el sistema
 3. Definir cuales son los elementos a ingresar por cada empresa
 4. Diseño de la página web, formularios (colores, estructura y formas) y visuales de consulta.
 5. Logo y colores de Postobón.

### 6. Diagrama Relacional
![image](https://user-images.githubusercontent.com/88067732/137773543-1e4e4e6e-3d36-432b-9d97-22a31bb59a58.png)

### 7. Herramientas necesarias para el desarrollo de la solución

- Microsoft SQL Server (Base de datos)
- Pagina web (.html)  

- Control XAMPP (version 3.2.2)
  * Archivos de configuración de SQL Server (.dll)
  * Conexión de Pagina web con Base de datos por medio de PHP (XAMPP)
  * Crear localhost en XAMPP
  

### 8. Conclusiones

  1. Con esta iniciativa podemos llegar a proponer una solución sostenible para lograr tener una capacidad de consultar la cantidad y calidad del material transformado que ellos (Postobón) requieren.
  2. Se logró la conexión de la página web con la base de datos por medio de PHP (XAMPP)
  3. Se realizar la coexión de Microsoft SQL server con PHP y HTML
  4. Gracias al conocimiento adquirido en la unidad de estudio Bases de Datos, logramos proponer una solución tecnológica al problema planteado por Postobón.

