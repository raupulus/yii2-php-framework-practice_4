#!/usr/bin/env bash
# -*- ENCODING: UTF-8 -*-

BASE_DIR=$(dirname $(readlink -f "$0"))

if [[ "$1" != "test" ]]; then
    psql -h localhost -U practica4_yii2_ -d practica4_yii2_ < $BASE_DIR/practica4_yii2_.sql
    psql -h localhost -U practica4_yii2_ -d practica4_yii2_ < $BASE_DIR/practica4_yii2__datos.sql
fi

psql -h localhost -U practica4_yii2_ -d practica4_yii2__test < $BASE_DIR/practica4_yii2_.sql
psql -h localhost -U practica4_yii2_ -d practica4_yii2__test < $BASE_DIR/practica4_yii2__datos.sql
