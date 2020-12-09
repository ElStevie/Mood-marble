# Mood marble

Mood marble es una aplicación cuyo propósito es llevar un registro diario del sentir de los miembros de un equipo; ésta es una herramienta pensada para los equipos de desarrolladores que utilizan metodologías Ágiles (Agile).

---

## Instrucciones de instalación

1. Clonar el repo: `git clone https://github.com/ElStevie/mood-marble.git`
2. Entrar en la carpeta donde se almacenan los contenidos: `cd mood-marble`
3. Crear archivo con las variables de entorno: `cp .env.example .env`
4. Modificar el archivo `.env` con el nombre de la base de datos (preferentemente **mood_marble**)
5. Instalar las dependencias necesarias: `composer install`
6. Generar la llave de la aplicación: `php artisan key:generate`
7. Ejecutar las migraciones: `php artisan migrate`

### Extra

Adicionalmente, se pueden ejecutar los seeders de Usuarios: `php artisan db:seed --class=UserSeeder`.

Se cargan **30 Usuarios**, **cada uno** con un **Equipo personal**; a los primeros cinco Equipos se les asigna los 25 Usuarios restantes, es decir, los **primeros cinco** equipos cuentan con **6 miembros** (propietario y más miembros); cada Usuario cuenta con los Estados de ánimo de la última semana (**7 Estados de ánimo por Usuario**).

---

### Desarrollado por

Esteban Juárez
