#!/bin/bash

DIRECTORIO=""
DIA=`date +"%d/%m/%Y"`
HORA=`date +"%H:%M"`

echo "escribe el directorio donde lo quieras guardar"
read DIRECTORIO
echo "$DIRECTORIO"

<<<<<<< HEAD
=======

>>>>>>> 45b843b670f422b4765789966b5b9fe9aea24728
if [ -d "$DIRECTORIO" ]
then
   echo "El directorio ${DIRECTORIO} existe"
   cd $DIRECTORIO
   git pull origin master
   git add .
<<<<<<< HEAD
   git commit -m "$DIA"
	echo " $DIA -  $HORA"
=======
   git commit -m "$DIA" 
    echo "$DIA - $HORA"
>>>>>>> 45b843b670f422b4765789966b5b9fe9aea24728
   git push -u origin master
   
   
   
else
    echo "El directorio ${DIRECTORIO} no existe"
    git clone https://github.com/Talde5/settox $DIRECTORIO
    cd $DIRECTORIO
    git pull origin master
    git add .
    git commit -m "$DIA"
<<<<<<< HEAD
	echo " $DIA -  $HORA"
=======
echo "$DIA"
>>>>>>> 45b843b670f422b4765789966b5b9fe9aea24728
    git push -u origin master 
fi



