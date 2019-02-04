#!/bin/bash

DIRECTORIO=""
DIA=`date +"%d/%m/%Y"`

echo " Escribe el directorio donde quieres almacenar tu proyecto"
read DIRECTORIO
if [ -d "$DIRECTORIO" ]
then
   echo "El directorio ${DIRECTORIO} existe"
   cd $DIRECTORIO
   git pull origin master
   git add .
   git commit -m "$DIA"
   git push -u origin master
   
   
   
else
    echo "El directorio ${DIRECTORIO} no existe"
    git clone https://github.com/Talde5/settox $DIRECTORIO
    cd $DIRECTORIO
    git pull origin master
    git add .
    git commit -m "$DIA"
    git push -u origin master 
fi



