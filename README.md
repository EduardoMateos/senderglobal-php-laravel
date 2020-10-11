# Package Laravel Senderglobal
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

### Uso 📖

Simplemente desde cualquier controlador:

```
SenderGlobal::setEmailRecipient('eduardomateossoto@gmail.com')
            ->setSubject('mail de prueba')
            ->setContent(rawurlencode('contenido del mail'))
            ->sendMail();
```

Si necesitas cargar las configuraciones de la API definidas en el .env dinámicamente puedes hacerlo así:

```
SenderGlobal::setEmailRecipient('eduardomateossoto@gmail.com')
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

## Autores ✒️

Creado por Eduardo Mateos Soto

https://www.linkedin.com/in/eduardo-mateos-soto/

He trabajado en varias ocasiones con senderglobal y no viene mal este tipo de packages para agilizar integraciones.
