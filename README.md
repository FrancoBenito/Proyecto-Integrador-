<h1 align="center">Digital Rugby House</h1> 

<p align="center">
  <img src="/etapa2/public/images/drh_logo80.png"> 
</p>

<p align="center">
  <img src="https://media.giphy.com/media/pNZcFyDjxOawU/giphy.gif">
</p>

<h1> Introduction </h1>

<p> 
En este proyecto se utilizó Laravel, en su versión 5.8 para desarrollar el backend. Para trabajar en el frontend, se utilizaron varios archivos Javascript para manejar la API de Provincias, el tema del sitio y el Easter Egg. </p>

<h1> Installation </h1>

```
git clone https://github.com/FrancoBenito/Proyecto-Integrador-1.git 
cd Proyecto-Integrador-1
cd etapa2
composer install
# Crear archivo .env a partir del .env.example
# Crear esquema en la db y configurar .env con el nombre del esquema y la contraseña de la db
php artisan link:storage
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serv
```

<h1> Database Design </h1>

<p align="center">
  <img src="/etapa2/public/images/database.png">
</p>

<h1> Authors </h1>

<p>Christian Fischer</p>
<p>Bautista Tancredi</p>
