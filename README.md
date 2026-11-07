# MediCitas — Panel Administrativo

Panel web de demostración para la gestión de una clínica. Reúne en una interfaz las citas del día, el directorio de pacientes, el equipo médico y el historial clínico.

## Funcionalidades

- Resumen de actividad y métricas de la clínica.
- Vista de citas programadas.
- Formulario de demostración para agendar citas.
- Directorio de pacientes y lista de doctores.
- Vista de historial clínico.
- Interfaz adaptable a pantallas de escritorio y móviles.

## Tecnologías

- PHP 8 o superior
- HTML5
- CSS3
- JavaScript

No requiere paquetes ni dependencias externas para ejecutarse. La tipografía utiliza fuentes del sistema.

## Ejecución local

Sirve la carpeta raíz del proyecto con Apache/PHP. En Laragon, coloca `app-medica` dentro de `C:\laragon\www`, inicia Apache y abre `http://app-medica.test`.

También puedes usar el servidor integrado de PHP desde la carpeta del proyecto:

```sh
php -S 127.0.0.1:8000 -t .
```

Después, abre `http://127.0.0.1:8000` en el navegador.

## Estructura

```text
app-medica/
├── assets/
│   ├── css/style.css
│   └── js/app.js
├── includes/
│   ├── footer.php
│   └── header.php
├── agendar.php
├── ayuda.php
├── citas.php
├── configuracion.php
├── doctores.php
├── historial.php
├── index.php
└── pacientes.php
```

## Alcance de la demostración

Los nombres, citas y métricas son datos de ejemplo. El formulario muestra una confirmación en pantalla, pero no guarda información. El proyecto no incluye conexión a una base de datos.
