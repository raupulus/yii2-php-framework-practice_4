-- -*- encoding: utf-8 -*-
-------------------------------------------------------------------------------
--
-- Author:       Raúl Caro Pastorino
-- Email Author: tecnico@fryntiz.es
-- Web Author:   http://www.fryntiz.es
-- github:       https://github.com/fryntiz
-- gitlab:       https://gitlab.com/fryntiz
-- twitter:      https://twitter.com/fryntiz
--
-- Create Date: 2018
-- Project Name:
-- Description:
--
-- Dependencies:
--
-- Revision 0.01 - File Created
-- Additional Comments:
--
-- Código fuente:
-------------------------------------------------------------------------------
--
-- Copyright (C) 2018  Raúl Caro Pastorino
--
-- This program is free software: you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation, either version 3 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program.  If not, see <http://www.gnu.org/licenses/>
-------------------------------------------------------------------------------

DROP TABLE IF EXISTS propietarios;

CREATE TABLE propietarios (
    id              BIGSERIAL PRIMARY KEY
  , nombre          VARCHAR(255)
  , dni             VARCHAR(255)
  , telefono        VARCHAR(255)
);

DROP TABLE IF EXISTS embarcaciones;

CREATE TABLE embarcaciones (
    id              BIGSERIAL PRIMARY KEY
  , propietario_id  BIGINT REFERENCES propietarios(id)
  , plazas          BIGINT NOT NULL
  , precio          BIGINT NOT NULL
  , motor           BOOLEAN DEFAULT FALSE
  , vela            BOOLEAN DEFAULT FALSE
  , remo            BOOLEAN DEFAULT FALSE
);
