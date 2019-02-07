#!/bin/bash

#           Datos requeridos para instalacion de git 


echo -e "Bienvenidos a SETTOX "
echo "completa los siguientes datos"

echo "¿correo de git?"
read getGit
echo "¿usuario de git?"
read usuario
echo "contraseña de git"
read pswGit
echo -e "\e[1m \e[32mInstalando espere por favor... \e[0m"
sleep 5


#                                Habilitando Repositorios REMI y EPEL

rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm


#                               Instalando servidor Web 
yum install -y httpd
systemctl start httpd
systemctl enable httpd
systemctl status httpd


#                                 Instalando MariaDB

touch /etc/yum.repos.d/MariaDB.repo
echo "[mariadb]
name = MariaDB
baseurl = http://yum.mariadb.org/10.3/centos7-amd64
gpgkey=https://yum.mariadb.org/RPM-GPG-KEY-MariaDB
gpgcheck=1" >> /etc/yum.repos.d/MariaDB.repo
yum install -y MariaDB-server MariaDB-client
systemctl enable mariadb
systemctl start mariadb
systemctl status mariadb
mysql -e "CREATE DATABASE settox"


#                            limpiando paginas de por defecto de httpd 
rm -rf /etc/httpd/conf.d/welcome.conf /etc/httpd/conf.d/welcome.save.conf


#                                                PHP 
yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm
yum install -y epel-release yum-utils
yum-config-manager --enable remi-php*
yum install -y php php-cli php-fpm php-mysqlnd php-mysql php-zip php-devel php-gd php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json php-common
systemctl start php-fpm
systemctl enable php-fpm
systemctl status php-fpm
systemctl restart httpd


#                                    Instalando Composer 

yum install -y curl
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
chmod +x /usr/local/bin/composer


#                                    Instalando NPM 

curl -sL https://rpm.nodesource.com/setup_10.x | bash -
yum install -y nodejs
npm --version


#                                Instalando SSH-Keyreg 

#Con SSH-Keyreg lo que lograremos es que la clave plubica de ssh que generamos sea introducida en GitHub
# sin necesidad de que tenga que hacer nada el usuario.

#curl https://raw.githubusercontent.com/b4b4r07/ssh-keyreg/master/bin/ssh-keyreg -o /usr/local/bin/ssh-keyreg
#chmod +x /usr/local/bin/ssh-keyreg


#                            Instalando y Configurando GIT 

yum install -y git
git config user.email "$getGit" #Introducimos como correo de git la proporcionada por el usuario
git config user.name "$usuario" #Configuramos el usuario de Git

#                        Generando SSH y vinculando a cuenta de GitHub 

directorio=$PWD
cd ~/.ssh
echo -e "\n\n\n" | ssh-keygen -t rsa -N "" -C "$getGit" #Aquí generamos una key SSH
'yes yes' | ssh-keyreg -u $usuario:$pswGit -p id_rsa.pub github #Con esta linea lo que hacemos es registrar el
cd "$directorio"


#                            Desplegando el proyecto e Instalandolo 

cd /var/www/html
git clone https://github.com/talde5/settox.git
cd reto/
chmod -R 775 /var/www/html/settox
chown -R apache.apache /var/www/html
chmod -R 777 /var/www/html/settox/storage
composer install
npm install
mysql -u root -p settox < settox.sql
npm run dev


#                                Cambiando Directorio Web 

echo "DocumentRoot \"/var/www/html/settox/public\"
<Directory \"/var/www/html/settox\">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>" >> /etc/httpd/conf/httpd.conf
systemctl restart httpd

echo -e "\e[1m \e[32mGracias por utilizar jJobson! \e[0m"
sleep 5
#https://askubuntu.com/questions/261079/how-can-i-create-zip-file-with-the-date-in-its-name
#https://stackoverflow.com/questions/47049510/php-script-to-push-site-backup-into-git-repositry-once-per-week
