#!/bin/env bash

if [ -z $1 ] 
then
    echo "Primer parametro no puede estar vacio"
    exit
fi

cp -r $1/* ./