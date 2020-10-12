# senderglobal-php-laravel
Integración de Laravel con www.senderglobal.com

### Instalación 📋

Configuraciones:

```
php artisan vendor:publish --provider="Eduardom\SenderGlobal\SenderGlobalServiceProvider"
```

Añade en tu .env los datos que os ha dado senderglobal

```
SENDERGLOBAL_API_URL=http://webapp.senderglobal.com/transac/XXXXXXX
SENDERGLOBAL_API_ID=XXXXXX
SENDERGLOBAL_API_USER=XXXXXXXXX_API
SENDERGLOBAL_API_PASS=XXXXXXXXXXXXX
SENDERGLOBAL_API_ID_ACCOUNT=X
SENDERGLOBAL_FROM_NAME=FromName
SENDERGLOBAL_REPLY_EMAIL=reply@email.com
```

### Correos transaccionales ✉️

Simplemente desde cualquier controlador:

```
SenderGlobal::transactional()
            ->setEmailRecipient('eduardomateossoto@gmail.com')
            ->setSubject('mail de prueba')
            ->setContent(rawurlencode('contenido del mail'))
            ->sendMail();
```

Si necesitas cargar las configuraciones de la API definidas en el .env dinámicamente puedes hacerlo así:

```
SenderGlobal::transactional()
            ->setEmailRecipient('eduardomateossoto@gmail.com')
            ->setFromName('From Name')
            ->setSubject('mail de prueba')
            ->setContent(rawurlencode('contenido del mail'))
            ->setEmailReply('email@reply.es')
            ->setId('XXXXXX')
            ->setUser('XXXXXXXXX_API')
            ->setPass('XXXXXXXXXXXXX')
            ->setIdAccount('X')
            ->setUrlApi('http://webapp.senderglobal.com/transac/XXXXXXX')
            ->sendMail();
```
### Carritos abandonados 🛒

Ejemplo de envio de un carrito abandonado:

```
$products = [];
foreach(range(0, 2) as $n){
    $product = [
        'nombre' => 'Iphone 1'.$n,
        'url' => 'https://www.apple.es',
        'img' => 'https://www.teknofilo.com/wp-content/uploads/2020/05/iPhone-12.jpg',
        'price' => '1000',
        'desc' => 'A simple phone',
    ];
    array_push($products, $product);
}

$now = Carbon\Carbon::now('Europe/Madrid');
$response = SenderGlobal::abandonedCart()
            ->setUrlApi('http://webapp.senderglobal.com/app/APIS/XXXXXXXXXXXXXXX')
            ->setUser('XXXXXXXXX_API')
            ->setPass('XXXXXXXXXXXXX')
            ->setBaseCode('XXXXXXXX')
            ->setEmailRecipient('eduardomateossoto@gmail.com')
            ->setSource('ES')
            ->setTemplate('1')
            ->setProducts($products)
            ->setDate($now)
            ->send();
```

## Autores ✒️

Creado por Eduardo Mateos Soto

https://www.linkedin.com/in/eduardo-mateos-soto/

He trabajado en varias ocasiones con senderglobal y no viene mal este tipo de packages para agilizar integraciones.