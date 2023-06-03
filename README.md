
# Como instalar el proyecto

1. Clonar el repositorio del proyecto en Laravel
Para clonar tu proyecto abre una terminal o consola de comandos y escribe la siguiente nomenclatura recuerda cambiar la dirección del repositorio por la tuya esto es después de la instrucción git clone agrega tu dirección:

```bash
  git clone git@github.com:Tavo077/elecciones2023.git
```

2. Instalar dependencias del proyecto
Cuando guardas tu proyecto Laravel en un repositorio GIT, en el archivo .gitignore se excluye la carpeta vendor que es donde están las librerías que usa tu proyecto, es por eso que se debe correr en la terminal una instrucción que tome del archivo composer.json todas las referencias de las librerías que deben estar instaladas en tu proyecto.

Ingresa desde la terminal a la carpeta de tu proyecto y escribe:

```bash
 composer install
```
NOTA: Además debemos de instalar npm dentro de nuestro proyecto ejecutando el siguiente comando.


```bash
 npm install
```

Este comando instalará todas las librerías que están declaradas para tu proyecto.

Existen ocasiones que en vez de usar el comanado anterior es necesario hacer un update y para ello en la terminal de comandos ejecuta la instrucción:

```bash
 composer update
```

3. Generar archivo .env
Por seguridad el archivo .env está excluido del repositorio, para generar uno nuevo se toma como plantilla el archivo .env.example para copiar este archivo en una nuevo escribe en tu terminal:

```bash
 cp .env.example .env
```

4. Generar Key
Para que tu proyecto en Laravel corra sin problemas es necesario generar una key de seguirdad, para ello en tu terminal corre el siguiente comando:

```bash
 php artisan key:generate
```

Esta key nueva se agregará al archivo .env de tu proyecto en Laravel.

5. Crear base de datos elecciones2023, con el usuario root y sin contraseña la conexión debe de hacerse en local.

7. Crear vínculo simbólico
Sí tu proyecto guarda algún tipo de archivo como imágenes, pdf’s etc., necesitas desde la consola de comandos crear un vínculo o enlace simbólico de la carpeta public a la carpeta storage para que tu sistema pueda tener acceso a los archivos, desde tu terminal teclea:

```bash
 php artisan storage:link
```

8. Composer dump-autoload
Sí en tu proyecto creaste nuevas clases como helpers tienes que correr este comando para que se agreguen al cargador automático de clases de otra manera cuando algún método mande a llamar estás clases te arrojará un error:

```bash
 composer dump-autoload
```

9. Correr migraciones y seeds
Sí tu proyecto no usa los seeds para sembrar datos en la base de datos solo corre el comando:

```bash
 php artisan migrate --seed
```

NOTA: No olvides ejecutar los comando para correr el servidor de vite y el servidor de laravel:


```bash
 php artisan serve
```

```bash
 npm run dev
```

Con esto debería poder visualizar el proyecto en la ruta local http://127.0.0.1::8000 y las credenciales de administrador utilizar:

Usuario: admin@test.dev

Contraseña: password

