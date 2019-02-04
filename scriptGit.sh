#!/bin/bash

DIRECTORIO=/var/www/html/settox
DIA=`date +"%d/%m/%Y"`


if [ -d "$DIRECTORIO" ]
then
   echo "El directorio ${DIRECTORIO} existe"
   cd /var/www/html/settox
   git pull origin master
   git add .
   git commit -m "$DIA"
   git push -u origin master
   
   
   
else
    echo "El directorio ${DIRECTORIO} no existe"
    git clone https://github.com/Talde5/settox /var/www/html/settox
    cd /var/www/html/settox
    git pull origin master
    git add .
    git commit -m "$DIA"
    git push -u origin master 
fi



