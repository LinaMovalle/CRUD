# CRUD
## PRUEBA TÉCNICA PHP
### 1. Descripción

KONECTA, necesita para unas de sus cafeterías que tiene en sede de un software, que permita
almacenar y gestionar el inventario de sus productos. Este software debe permitir la creación de
productos, la edición de los productos, la eliminación de productos y listar todos los productos
registrados en el sistema.
Los datos que debe tener cada producto son:
 ID
 Nombre de producto: OBLIGATORIO
 Referencia: OBLIGATORIO
 Precio: ENTERO OBLIGATORIO
 Peso: ENTERO: OBLIGATORIO
 Categoría: OBLIGATORIO
 Stock, (Cantidad del producto en bodega) ENTERO: OBLIGATORIO
 Fecha de creación: date OBLIGATORIO

Adicionalmente se debe contar con un módulo que permita realizar la venta de un producto, el cual recibirá el
id del producto como parámetro y la cantidad del producto vendido. El software debe actualizará el campo de
stock restando la cantidad del producto vendido y registrar en una tabla la venta realizada (si el producto no
cuenta con stock mayor a cero debe mostrar un mensaje informando que no es posible realizar la venta).

Para finalizar se deben realizar 2 consultas directas en base de datos:
 Realizar una consulta que permita conocer cuál es el producto que más stock tiene.
 Realizar una consulta que permita conocer cuál es el producto más vendido.

PRUEBA TÉCNICA PHP

### 2. Condiciones
 El lenguaje de programación debe ser PHP.
 El motor de base de datos debe ser MYSQL.
 Recomendamos hacerlo en PHP nativo, pero se puede hacer uso de cualquier framework php
que conozcas.
 Dispones de 24 horas, a partir del momento en que recibes la prueba, para enviar la solución.

## Instalación
Descarge el programa y guardelo en la carpeta xampp -> htdocs.
Después de inicializar en xampp Apache y Mysql 
Cree una BD llamada bodega
Dirijase a phpMyAdmin he importe la BD.
Para importar la BD seleccione el archivo llamado bodega.sql

## Uso
Ingrese a http://localhost/pruebalina/EjercicioExterno/
seleccione la opción superior registro.
Ingrese los datos.
Después de creados este lo dirigira a Inicio de sesión.
llene la información con los datos diligenciados anteriormente.
Ya puede probar las funciones del CRUD solicitadas!

