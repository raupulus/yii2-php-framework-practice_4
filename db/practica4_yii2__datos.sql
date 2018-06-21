INSERT INTO propietarios (nombre, dni, telefono) VALUES
    ('Pepe', 'asdgvffrer43', '666666666')
  , ('Antonio', 'bgfrsdfs32fsf', '333333333')
  , ('María', 'ññakdfasdf', '999999999')
;

INSERT INTO embarcaciones (propietario_id, plazas, precio, motor, vela, remo)
VALUES
    (1, 2, 120, true, false, true)
  , (2, 4, 180, false, true, true)
  , (3, 6, 290, true, true, false)
;
