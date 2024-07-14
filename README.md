Lineas de codigo para ejecutar las migraciones (creaciones de tabla) en orden, esto porque las tablas contienen relaciones:

php artisan migrate --path=/database/migrations/2024_07_06_230412_create_adminis_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230412_create_puestos_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230412_create_comerciantes_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230412_create_arrendamientos_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230413_create_productos_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230413_create_inventarios_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230413_create_ventas_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230413_create_pagos_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230414_create_mantenimiento_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230414_create_inspecciones_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230415_create_tareas_mantenimiento_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230414_create_gastos_table.php
php artisan migrate --path=/database/migrations/2024_07_06_230414_create_ingresos_table.php
php artisan db:seed --class=PuestosTableSeeder

prueba de un merge
Nota #1: Dirigirse literalmente al archivo README.md del repositorio y poner en vision 'Code' para que la creacion de las migraciones y data este de manera correcta y funcione en la consola linea tras linea.

Nota #2: en caso de que se creen solo 12 tablas de 13, peguen de nuevo las anteriores lineas de codigo y dar enter en la ultima linea, la migracion que no se crea en la de 'ingresos_table.php'