CREATE TABLE insumos (
    insum_id SERIAL PRIMARY KEY, 
    insum_nombre VARCHAR (75),
    insum_cantidad INT,
    insum_marca VARCHAR (75),
    insum_proveedor VARCHAR (75), 
    insum_precio DECIMAL (10,2)
); 