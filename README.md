Trabajo Practico Especial.

CONSIGNA 1;
Nombres de los integrantes del grupo (emails): 

    --Lucia Magali Anta (magali_anta@hotmail.com / magaant18@gmail.com). 
    -- Bautista Menna Zujani (bautimenna6@gmail.com).
    
Temática del TPE:
  El trabajo se basará en las Olimpiadas.
  
Breve descripción de la temática:
  En esta pagina mostraremos informacion y actividades sobre las Olimpiadas. Se hará
  
  una pagina en la cual implantaremos los sucesos ocurridos y qué actividades competitivas hay actualmente.
  
Diagrama de entidad relación (DER):

[Diagrama DER.olimpiadas.drawio.pdf](https://github.com/LuciaAnta/TPE-wed2/files/12707621/Diagrama.DER.olimpiadas.drawio.pdf)

El codigo SQL se encuentra en tpe_olimpiadas.sql , dentro del repositorio. 

Consigna 2;

El sitio debe cumplir con los siguientes requerimientos: 
Requerimientos Funcionales
    Acceso público:
        Deben existir diferentes secciones donde se muestre el contenido dinámicamente generado desde la base de datos. Estas secciones pueden ser accedidas de manera pública, no es necesario loguearse.
            -Listado de ítems: Se debe poder visualizar todos los items cargados
            -Detalle de ítem: Se debe poder navegar y visualizar cada ítem particularmente 
            -Listado de categorías: Se debe poder visualizar un listado con todas las categorías cargadas
            -Listado de ítems por categoría: Se debe poder visualizar los ítems perteneciente a una categoría seleccionada
Importante: En cada ítem siempre se debe mostrar el nombre de la categoría a la que pertenece.

Acceso administrador de datos 
    Debe existir una sección para la administración de datos, la cual es accedida solo a usuarios administradores del sitio.*
        -El usuario administrador debe loguearse con usuario y contraseña. 
            .Debe exisitir al menos un administrador con usuario “webadmin” y contraseña “admin” para pruebas.
        -El usuario debe poder desloguearse (logout)
        -Solo los usuarios logueados pueden modificar las categorías y los ítems.
        
Se debe crear servicios de ABM (alta/baja/modificación) para administrar los datos:
    Administrar Ítems (entidad del lado N de la relación).
        -Lista de Items (Noticias/Productos/…)
        -Agregar Items (Noticias/Productos/…)
        -Eliminar Items (Noticias/Productos/…)
        -Editar Items (Noticias/Productos/…)
