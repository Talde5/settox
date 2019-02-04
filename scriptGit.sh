#!/bin/bash

DIRECTORIO=""
DIA=`date +"%d/%m/%Y"`
HORA=`date +"%H:%M"`

echo "escribe el directorio donde lo quieras guardar"
read DIRECTORIO
echo "$DIRECTORIO"


if [ -d "$DIRECTORIO" ]
then
   echo "El directorio ${DIRECTORIO} existe"
   cd $DIRECTORIO
   git pull origin master
   git add .
   git commit -m "$DIA" 
    echo "$DIA - $HORA"
   git push -u origin master
   
   
   
else
    echo "El directorio ${DIRECTORIO} no existe"
    git clone https://github.com/Talde5/settox $DIRECTORIO
    cd $DIRECTORIO
    git pull origin master
    git add .
    git commit -m "$DIA"
echo "$DIA"
    git push -u origin master 
fi



