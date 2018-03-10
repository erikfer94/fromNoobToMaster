ALTER TABLE f_organigrama ADD CONSTRAINT puesto_prganigrama FOREIGN KEY (f_organigrama_puesto) REFERENCES c_puesto(c_puesto_id);

ALTER TABLE f_organigrama ADD CONSTRAINT jefe_empleado FOREIGN KEY (f_organigrama_padre) REFERENCES f_organigrama(f_organigrama_id);

ALTER TABLE f_organigrama_empleado ADD CONSTRAINT organigrama_empleado FOREIGN KEY (f_organigrama_empleado_organigrama) REFERENCES f_organigrama(f_organigrama_id);

ALTER TABLE f_organigrama_empleado ADD CONSTRAINT empleado_organigrama FOREIGN KEY (f_organigrama_empleado_empleado) REFERENCES o_empleado(o_empleado_id);