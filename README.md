<h1 align="center">Digital Rugby House</h1> 

<p align="center">
<img src="/etapa2/public/images/drh_logo80.png"> 
</p>

<p align="center">
  <b>Links útiles:</b><br>
  <a href="#">Link 1</a> |
  <a href="#">Link 2</a> |
  <a href="#">Link 3</a>
  <br><br>
  <img src="https://media.giphy.com/media/pNZcFyDjxOawU/giphy.gif">
</p>

<h4> Introducción </h4>

---

<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque metus magna, venenatis ut facilisis sit amet, eleifend in diam. Pellentesque a dignissim dolor, in ultricies arcu. Sed dapibus sem quis dui rhoncus, non sodales magna venenatis. Ut vel faucibus est. Nam euismod, eros vitae maximus luctus, felis augue aliquet nulla, eu viverra quam mauris vel nisl. Sed mollis congue luctus. Nulla dapibus sagittis augue, at venenatis metus semper sit amet. Donec in vehicula sapien, vitae imperdiet est. Donec quis accumsan libero. Quisque laoreet ut est nec posuere.  </p>

<h4> Instalación </h4>

---

<h6>  Primero clonar el repositorio: </h6>

```
 git clone https://github.com/FrancoBenito/Proyecto-Integrador-1.git 
```

<h6> Instalar Composer: </h6>

```
cd etapa2
composer install
```

<h6> MySQL Workbench </h6>

Instalar <a href="https://www.mysql.com/products/workbench/">MySQL Workbench</a>

```
Crear schema con el nombre: digitalrugby_db
```

<h6> Configurar .env </h6>

<p>Clonar el archivo .env.example, renombrarlo .env y modificar lo siguiente:</p>

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=digitalrugby_db
DB_USERNAME=root
DB_PASSWORD=root
```

<h6> Correr artisan (Migraciones y Seeders) </h6>

```
cd etapa2
php artisan migrate
php artisan db:seed
```
<h6> Levantar el localhost </h6>

```
cd etapa2
php artisan serv
```

**Se debe tener MAMP instalado y corriendo para que el Laravel se conecte con la db**

<h4> Autores </h4>

---

<p>Christian Fischer</p>
<p>Bautista Tancredi</p>
