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

---

### Desarrollado por

Esteban Juárez
