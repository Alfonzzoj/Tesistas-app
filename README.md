  

# Tesistas-app 👨‍🎓👩‍🎓🏫

  

_Sistema web destinado a tesistas de la universidad catolica andres bello UCAB_

  

## Comenzando 🚀

  

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

  

Mira **Deployment** para conocer como desplegar el proyecto.

  
  

### Pre-requisitos 📋


_Que cosas necesitas para instalar el software y como instalarlas_

 - [Git v2.x](https://git-scm.com/downloads) - Sistema de control de versiones
 - [WAMP Server v3.2](https://www.wampserver.com/en/) - Este paquete incluye principalmente PHP(*v7.4.9*),  Apache(*v2.4.46*), Además permite la integracion con PostgreSQL.
			 *( El proceso a seguir durante la Instalación, es él  por defecto(es decir siguiente, siguiente y siguiente... ))*
 - [PostgreSQL v14.1](https://www.enterprisedb.com/downloads/postgres-postgresql-downloads) - Sistema Gestor de Base de Datos (SGBD) *([Tutorial de instalación](https://jsotoux.com/postgresql-en-servidor-local-con-wamp-y-xampp/))*


### Instalación 🔧

 

_Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutándose_


 1. Ir a la ruta c:/wamp64/www y clonar el repositorio
	```bash
	git clone git@github.com:Alfonzzoj/Tesistas-app.git
	```
2. Cambiar la version de Php de 7.3 > 7.4 en Wamp
![Cambiar version de php en wamp](https://i.imgur.com/TmDN3SR.png)
*Reiniciar los servicios para que la version cambie *
3. Habilitar extensiones de postgreSQL para php [Blog con Instrucciones](https://jsotoux.com/postgresql-en-servidor-local-con-wamp-y-xampp/#:~:text=Habilitar%20extensiones%20de%20PostgresSQL)

> **Nota**: Para wamp, puede suceder algo curioso, algo que me puso a dar muchas vueltas,  **hay 2 archivos php.ini**. Hay que modificar los dos.
C:\wamp\bin\apache\apache2.4.46\bin  
C:\wamp\bin\php\php7.4.9
Esta es la ruta de mi PHP y Apache. Si tienes varias versiones de php, realiza el cambio en todos los php.ini

_Se puede acceder a la base de datos por pgadmin4 o si se quiere ingresar por el navegador realizar el paso opcional en la web [Habilitar pgadmin web](https://jsotoux.com/postgresql-en-servidor-local-con-wamp-y-xampp/#:~:text=Opcional:%20Habilitar%20PHPPgAdmin)_

Al tener los servicos de wamp inicializados el resultado final puede comprobarse con:

1. Ingresando a http://localhost/
![Correctamente instalado](http://imgfz.com/i/1qwoWJB.png)


  

## Ejecutando las pruebas de base de datos ⚙️

  

_Proceso para mantener la base de datos actualizada_

  

## Despliegue 📦

  

_Agrega notas adicionales sobre como hacer deploy_

  

## Construido con 🛠️

  

_Herramientas utilizadas en el proyecto_

  

* [PHP](https://www.php.net//) - Lenguaje de programacion 

* [PostgreSQL](https://www.postgresql.org/) - Sistema Gestor de Base de Datos (SGBD)

* [Bootstrap 5](https://getbootstrap.com/) - Libreria CSS para el Front-end del sistema
  



## Wiki 📖

  

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki](https://github.com/tesistas-app/wiki)

  

## Versionado 📌

  *Versiones disponibles*

  

## Autores ✒️

  

* **Jesús Alfonzo** - *Programador* -  [Alfonzzoj](https://github.com/Alfonzzoj)

* **Oliver Torres** - *Programador* - [Otorres28](https://github.com/otorres828)

* **Cesar Sotillo** - *Programador* - 

* **Ricardo Colina** - *Programador* -


## Licencia 📄

  Proyecto dedicado exclusivamente a la Universidad Catolica Andres Bello "UCAB Guayana",  con uso para la asignatura sistemas de bases de datos I.

  

---

