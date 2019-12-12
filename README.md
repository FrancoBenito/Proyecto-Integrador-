<h1 align="center">Digital Rugby House</h1> 

<p align="center">
  <img src="/etapa2/public/images/drh_logo80.png"> 
</p>

<p align="center">
  <img src="https://media.giphy.com/media/pNZcFyDjxOawU/giphy.gif">
</p>

<h1> Introducción </h1>

<p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque metus magna, venenatis ut facilisis sit amet, eleifend in diam. Pellentesque a dignissim dolor, in ultricies arcu. Sed dapibus sem quis dui rhoncus, non sodales magna venenatis. Ut vel faucibus est. Nam euismod, eros vitae maximus luctus, felis augue aliquet nulla, eu viverra quam mauris vel nisl. Sed mollis congue luctus. Nulla dapibus sagittis augue, at venenatis metus semper sit amet. Donec in vehicula sapien, vitae imperdiet est. Donec quis accumsan libero. Quisque laoreet ut est nec posuere.  </p>

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

<h1> Autores </h1>

<p>Christian Fischer</p>
<p>Bautista Tancredi</p>
