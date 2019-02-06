#!/bin/bash

#creamos las variables 

DIRECTORIO=""
DIA=`date +"%d/%m/%Y"`
HORA=`date +"%H:%M"`

#le decimos al usuario en que directorio quiere guardar el proyecto en local/servidor

echo "escribe el directorio donde lo quieras guardar"
read DIRECTORIO
echo "$DIRECTORIO"

# si el directorio que escribe existe...

if [ -d "$DIRECTORIO" ]
then
   echo "El directorio ${DIRECTORIO} existe"
   cd $DIRECTORIO
   git pull origin master
   git add .
   git commit -m "$DIA"
	echo " $DIA -  $HORA"
   git commit -m "$DIA" 
    echo "$DIA - $HORA"
   git push -u origin master
   
#si el directorio no existe primero lo creo hace el clone y continua   
   
else
    echo "El directorio ${DIRECTORIO} no existe"
    git clone https://github.com/Talde5/settox $DIRECTORIO
    cd $DIRECTORIO
    git pull origin master
    git add .
    git commit -m "$DIA"
	echo " $DIA -  $HORA"
echo "$DIA"
    git push -u origin master 
fi



echo " Tareas completadas gracias por confiar en Settox"
