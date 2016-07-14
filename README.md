# Instalación

### Requisitos

- Git
- Servidor Web
- PHP v5.4 (mínimo)
- [Node.js](https://nodejs.org/)

## Configurando dependencias

### Git

Primero instale git para poder proceder con el proyecto, lo puede descargar [aqui](https://git-scm.com/downloads)
Ahora bien, también puede usar la versión gráfica ofrecida por GitHub, llamada (GitHub Desktop)[https://desktop.github.com/]

### Node.js

Instale (Node.js)[https://nodejs.org/] para su plataforma.
Con **npm** instale **grunt** y **grunt-contrib-copy**

```
npm install -g grunt
npm install grunt-contrib-copy
```

Estas dependencias son para manetener las fuentes en su lugar (por ahora).
 
## Instalando Proyecto

### Obteniendo el proyecto

Clone el repositorio en su raíz de documentos 
```
git clone https://github.com/apexJCL/ctt_mockup.git
```

### Configurando el servidor

**Esta configuración es para Apache, si usted tiene otro servidor, favor de seguir pasos similares para su servidor**

Primero asegúrese de que esté habilidato **mod_rewrite** y se permita el uso de archivos **.htaccess**
Agregue esto a su configuración de **vhosts**:
```
<VirtualHost ctt.com>
    DocumentRoot "C:\xampp\htdocs\ctt_mockup\web"
    ServerName localhost
    ServerAlias ctt.com
    Options +FollowSymlinks
</VirtualHost>
```


### Configurando el proyecto

En la raíz del proyecto, ejecutar los siguientes comandos:
```
composer update
grunt copy
```

El proyecto debería estar funcionando por ahora