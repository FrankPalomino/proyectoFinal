# Instrucciones para run en local
## Crear .env
- Crear el archivo .env dentro de test-react-symfony, el contenido debe ser:
```
APP_ENV=dev
APP_SECRET=a938f58dd2abb54d0355a47bb7f41e53
DATABASE_URL="mysql://tuUsuario:tuContrasena@127.0.0.1:3306/basiclogin?serverVersion=5.7"
```
- Modifica el archivo y pon tus credenciales de acceso a la base de datos

##Descargar las dependencias
- En la linea de comandos ejecutar: ```composer install```
- En la linea de comandos ejecutar: ```yarn install```

##Run de la aplicación
- hacer un: ```symfony server:start```
- hacer un: ```yarn encore dev --watch```
