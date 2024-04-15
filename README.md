## Instalar Proyecto Landind-Page-Automotive

### Clonar el Repositorio de git

```bash
git clone https://github.com/panqueva764/LANDING-PAGE-AUTOMOTIVE.git
```

### Moverse al directorio del proyecto

```bash
cd landing-page-automotive
```

### Descargar Dependencias del Proyecto

Como las dependencias del proyecto las maneja **composer** debemos ejecutar el comando:

```bash
composer install
```

### Configurar Entorno

La configuración del entorno se hace en el archivo **.env** pero esé archivo no se puede versionar según las restricciones del archivo **.gitignore**, igualmente en el proyecto hay un archivo de ejemplo  **.env.example** debemos copiarlo con el siguiente comando:

```bash
cp .env.example .env
```

Luego es necesario modificar los valores de las variables de entorno para adecuar la configuración a nuestro entorno de desarrollo, por ejemplo los parámetros de conexión a la base de datos.

### Instalación con Lando

Si en la maquina se tiene isntalada la herramienta Lando, lo unico que se debria hacer es correr el comando 

```bash
lando start
```

### Migrar la Base de Datos

el proyecto ya tiene los modelos, migraciones y seeders generados. Entonces lo único que nos hace falta es ejecutar la migración y ejecutar el siguiente comando:

Archivo enviado

### Crear la Base de Datos desde artisan

```bash
lando php artisan migrate
```

### Flujos de usuario

#### Home Page
Home Page donde se valida si hay algun usuario con la propiedad is_winner, la cual nos indica quien es el ganador del concurso

```bash
https://landing-page-automotive.lndo.site/
```

#### Register Page
Register es la vista para poder registrar los clientes, esta tambien contola qu eno se vayan a registrar los mismo datos

```bash
https://landing-page-automotive.lndo.site/register
```

#### Admin Page
Admin Page es una simulacion de autenticación para Aministradores, en la cual puedes descargar archivo excel en formato csv, tambien puede escoger o actualizar al ganador del concurso con un simple click

```bash
https://landing-page-automotive.lndo.site/admin/clients
```

