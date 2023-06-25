/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     6/25/2023 3:34:44 PM                         */
/*==============================================================*/

drop table if exists BLOG;
drop table if exists CATEGORIAS;
drop table if exists CIUDAD;
drop table if exists CLIENTE;
drop table if exists COMENTARIOS;
drop table if exists CONTACTO;
drop table if exists CURSOSCAPACITACION;

drop table if exists EMPLEO;

drop table if exists EMPRESA;

drop table if exists EVENTOS;

drop table if exists GENERO;

drop table if exists INFORMACION;

drop table if exists PAGO;

drop table if exists PROVINCIA;

drop table if exists REDES_SOCIALES;

drop table if exists SERVICIOS;

/*==============================================================*/
/* Table: BLOG                                                  */
/*==============================================================*/
create table BLOG
(
   ID_BLG               int not null,
   ID_CLT               int,
   ID_COM               int,
   ID_CAT               int,
   TITULO_BLG           varchar(256),
   VALORACION_BLG       int,
   primary key (ID_BLG)
);

/*==============================================================*/
/* Table: CATEGORIAS                                            */
/*==============================================================*/
create table CATEGORIAS
(
   ID_CAT               int not null,
   NOMBRE_CAT           varchar(100),
   primary key (ID_CAT)
);

/*==============================================================*/
/* Table: CIUDAD                                                */
/*==============================================================*/
create table CIUDAD
(
   ID_CIU               int not null,
   ID_PRO               int,
   NOMBRE_CIU           varchar(50),
   primary key (ID_CIU)
);

/*==============================================================*/
/* Table: CLIENTE                                               */
/*==============================================================*/
create table CLIENTE
(
   ID_CLT               int not null,
   ID_EMPR              int,
   ID_GEN               int,
   ID_PRO               int,
   ID_EMP               int,
   NOMBRE_CLT           varchar(100),
   FECHA_NACIMIENTO_CLT date,
   TELEFONO1_CLT        varchar(13),
   TELEFONO2_CLT        varchar(13),
   EMAIL_CLT            varchar(1024),
   TITULO_CLT           varchar(1024),
   ROL_CLT              varchar(1024),
   EXPERIENCIA_CLT      varchar(1024),
   FOTO_CLT             varchar(1023),
   primary key (ID_CLT)
);

/*==============================================================*/
/* Table: COMENTARIOS                                           */
/*==============================================================*/
create table COMENTARIOS
(
   ID_COM               int not null,
   CONTENIDO_COM        varchar(1024),
   FECHA_PUBLICACION_COM date,
   REVISION_COM         int,
   primary key (ID_COM)
);

/*==============================================================*/
/* Table: CONTACTO                                              */
/*==============================================================*/
create table CONTACTO
(
   ID_CONT              int not null,
   NOMBRE_CONT          varchar(256),
   TELEFONO1_CONT       varchar(13),
   TELEFONO2_CONT       varchar(13),
   EMAIL1_CONT          varchar(256),
   EMAIL2_CONT          varchar(256),
   primary key (ID_CONT)
);

/*==============================================================*/
/* Table: CURSOSCAPACITACION                                    */
/*==============================================================*/
create table CURSOSCAPACITACION
(
   ID_CUR               int not null,
   ID_CLT               int,
   NOMBRE_CUR           varchar(10),
   DESCRIPCION_CUR      varchar(1024),
   PUBLICO_CUR          varchar(50),
   EDAD_MINIMA_CUR      varchar(10),
   EDAD_MAXIMA_CUR      varchar(10),
   LINK_CUR             varchar(1024),
   CUPOS_CUR            int,
   COSTO_CUR            int,
   primary key (ID_CUR)
);

/*==============================================================*/
/* Table: EMPLEO                                                */
/*==============================================================*/
create table EMPLEO
(
   ID_EMP               int not null,
   NOMBRE_EMP           varchar(256),
   DESCRIPCION_EMP      varchar(1024),
   MODALIDAD_EMP        varchar(256),
   HORARIO_EMP          time,
   FECHA_PUBLICACION_EMP date,
   EXPERIENCIA_EMP      int,
   primary key (ID_EMP)
);

/*==============================================================*/
/* Table: EMPRESA                                               */
/*==============================================================*/
create table EMPRESA
(
   ID_EMPR              int not null,
   NOMBRE_EMPR          varchar(256),
   LOGO_EMPR            varchar(1023),
   primary key (ID_EMPR)
);

/*==============================================================*/
/* Table: EVENTOS                                               */
/*==============================================================*/
create table EVENTOS
(
   ID_EVT               int not null,
   NOMBRE_EVT           varchar(256),
   DESCRIPCION_EVT      varchar(1024),
   FECHA_EVT            date,
   HORA_EVT             time,
   OBSERVACIONES_EVT    varchar(1024),
   UBICACION_EVT        varchar(1024),
   primary key (ID_EVT)
);

/*==============================================================*/
/* Table: GENERO                                                */
/*==============================================================*/
create table GENERO
(
   ID_GEN               int not null,
   NOMBRE_GEN           varchar(100),
   primary key (ID_GEN)
);

/*==============================================================*/
/* Table: INFORMACION                                           */
/*==============================================================*/
create table INFORMACION
(
   ID_INF               int not null,
   ID_RDS               int,
   ID_CONT              int,
   MISION               varchar(1024),
   VISION               varchar(1024),
   CULTURA_ORGANIZACIONAL varchar(1024),
   primary key (ID_INF)
);

/*==============================================================*/
/* Table: PAGO                                                  */
/*==============================================================*/
create table PAGO
(
   ID_EMP               int,
   ID_CUR               int,
   ID_PAG               int not null,
   NOMBRE_PAG           varchar(100),
   METODO_PAG           varchar(100),
   FECHA_PAG            date,
   MONTO_PAG            numeric(8,2),
   primary key (ID_PAG)
);

/*==============================================================*/
/* Table: PROVINCIA                                             */
/*==============================================================*/
create table PROVINCIA
(
   ID_PRO               int not null,
   NOMBRE_PRO           varchar(50),
   primary key (ID_PRO)
);

/*==============================================================*/
/* Table: REDES_SOCIALES                                        */
/*==============================================================*/
create table REDES_SOCIALES
(
   ID_RDS               int not null,
   FACEBOOK             varchar(1024),
   INSTAGRAM            varchar(1024),
   LINKEDIN             varchar(1024),
   TIKTOK               varchar(1024),
   primary key (ID_RDS)
);

/*==============================================================*/
/* Table: SERVICIOS                                             */
/*==============================================================*/
create table SERVICIOS
(
   ID_SER               int not null,
   ID_CLT               int,
   NOMBRE_SER           varchar(100),
   DESCRIPCION_SER      varchar(1023),
   OBSERVACIONES_SER    varchar(1023),
   primary key (ID_SER)
);

alter table BLOG add constraint FK_RELATIONSHIP_1 foreign key (ID_COM)
      references COMENTARIOS (ID_COM) on delete restrict on update restrict;

alter table BLOG add constraint FK_RELATIONSHIP_11 foreign key (ID_CLT)
      references CLIENTE (ID_CLT) on delete restrict on update restrict;

alter table BLOG add constraint FK_RELATIONSHIP_2 foreign key (ID_CAT)
      references CATEGORIAS (ID_CAT) on delete restrict on update restrict;

alter table CIUDAD add constraint FK_RELATIONSHIP_6 foreign key (ID_PRO)
      references PROVINCIA (ID_PRO) on delete restrict on update restrict;

alter table CLIENTE add constraint FK_RELATIONSHIP_12 foreign key (ID_EMPR)
      references EMPRESA (ID_EMPR) on delete restrict on update restrict;

alter table CLIENTE add constraint FK_RELATIONSHIP_4 foreign key (ID_GEN)
      references GENERO (ID_GEN) on delete restrict on update restrict;

alter table CLIENTE add constraint FK_RELATIONSHIP_7 foreign key (ID_PRO)
      references PROVINCIA (ID_PRO) on delete restrict on update restrict;

alter table CLIENTE add constraint FK_RELATIONSHIP_8 foreign key (ID_EMP)
      references EMPLEO (ID_EMP) on delete restrict on update restrict;

alter table CURSOSCAPACITACION add constraint FK_RELATIONSHIP_10 foreign key (ID_CLT)
      references CLIENTE (ID_CLT) on delete restrict on update restrict;

alter table INFORMACION add constraint FK_RELATIONSHIP_13 foreign key (ID_CONT)
      references CONTACTO (ID_CONT) on delete restrict on update restrict;

alter table INFORMACION add constraint FK_RELATIONSHIP_14 foreign key (ID_RDS)
      references REDES_SOCIALES (ID_RDS) on delete restrict on update restrict;

alter table PAGO add constraint FK_RELATIONSHIP_15 foreign key (ID_EMP)
      references EMPLEO (ID_EMP) on delete restrict on update restrict;

alter table PAGO add constraint FK_RELATIONSHIP_16 foreign key (ID_CUR)
      references CURSOSCAPACITACION (ID_CUR) on delete restrict on update restrict;

alter table SERVICIOS add constraint FK_RELATIONSHIP_5 foreign key (ID_CLT)
      references CLIENTE (ID_CLT) on delete restrict on update restrict;

