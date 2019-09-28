# PHP_PizzaSystem
<i>A pizza restaurant administration system for a school project</i>

## How to install:
<p>This project was made to run in the app <b>USBWebserver</b>, if you trying to use it in a different
program give a look in <b>Config files</b> the topic bellow. If you´re using USBWebserver just do the following:</p>

- Git clone the project
- Copy the **Administration** and **User** folder as well as the **connect.php** file
- Inside _USBWebserver\root_ create a new folder named "PizzaSystem"
- Inside this new folder (PizzaSystem) paste the file and the two folders
- Go back to the git clone folder and copy the **db_pizzasystem.sql** file
- Paste it in _USBWebserver_ folder or anywhere you like 
- Inside your sql admin page _(my case: localhost:8080/phpmyadmin)_ go to import and execute the **db_pizzasystem.sql** file

## Config files:
<p>To manually config the project if you´re not using USBWebserver or if you want to change some server
  config information give a look in this files:</p>
<p>Frist, and more important of all, the <b>connect.php</b> file will give you all the connection information
  that you can manipulate as you like:</p>

```
<?php
$host = "127.0.0.1";
$user = "root";
$password = "usbw";
$database = "db_pizzasystem";
$port = 3307;
$connection = mysqli_connect($host, $user,$password, $database, $port) or die(mysqli_connect_errno())
?>
```

<p>Observation: To avoid erros i recommend always keep the folder struct like:</p>

```
PizzaSystem
├── Administration
│   └── adm files
├── User
│   └── User files
└── connect.php
```

<p>Next, in every file of registration like: <b>clientregister.php</b> or <b>pizzaregister.php</b> and some other pages like <b>index.php</b> it will be a line like this:</p>

```
include("../connect.php");
```
> this line must always point to **connect.php**

<p>If you change the name of the folder to anything besides PizzaSystem then you have to go in both <b>basepage.php</b> and change the folder name referenced:</p>

```
<li class="nav-item active">
  <a class="nav-link" href="/P̶i̶z̶z̶a̶S̶y̶s̶t̶e̶m̶  to newFolderName/Administration" style="color:#f7fff7;">Home<span class="sr-only">(current)</span></a>
</li>
```
