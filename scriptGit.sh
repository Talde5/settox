#!/bin/bash

DIRECTORIO=/home/ik_2dw3/Escritorio/sep
DIA=`date +"%d/%m/%Y"`


if [ -d "$DIRECTORIO" ]
then
   echo "El directorio ${DIRECTORIO} existe"
   cd /home/ik_2dw3/Escritorio/sep
   git pull origin master
   git add .
   git commit -m "$DIA"
   git push -u origin master
   
   
   
else
    echo "El directorio ${DIRECTORIO} no existe"
    git clone https://github.com/Talde5/settox /home/ik_2dw3/Escritorio/sep
    cd /home/ik_2dw3/Escritorio/sep
    git pull origin master
    git add .
    git commit -m "$DIA"
    git push -u origin master 
fi



