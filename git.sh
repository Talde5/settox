#!/bin/bash

git pull
echo "Actualizado los archivos en en el servidor."
echo "Se va a realizar la copia a github."
git add --all . 
curtime=`date` 
git commit -m "Backup Automatico @ $curtime" 
git push origin master 
echo "Copia a github finalizada."
