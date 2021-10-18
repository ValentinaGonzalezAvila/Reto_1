create database RetoPostobon

create table empresa(
	nombre varchar(50),
	identificacion int,
	nombre_representante varchar(50),
	telefono int,
	direccion_camara varchar(50),
	cargo_responsable varchar(50),
	correo varchar(50),
	fecha date,
	tipo_de_empresa int,
	ciudad varchar(50)
	primary key(identificacion)
	)

CREATE TABLE [dbo].[transformadora](
	[identificacion] [int] NULL,
	[direccion] [varchar](50) NULL,
	[tipo_de_material] [varchar](50) NULL,
	[reciclaje] [float] NULL,
	[valorizacion] [float] NULL,
	[coprocesamiento] [float] NULL,
	[otro] [float] NULL,
	[eficiencia_reciclaje] [float] NULL,
	[eficiencia_valo] [float] NULL,
	[eficiencia_co] [float] NULL,
	[eficiencia_otro] [float] NULL
	) ON [PRIMARY]
	GO

	create table ciudad(
		id_ciudad int,
		nombre varchar(50),
		municipio_distrito varchar(50),
		departamento varchar(5),
		pais varchar(50)
	)