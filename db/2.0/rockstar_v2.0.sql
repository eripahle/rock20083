/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/30/2015 6:01:17 PM                        */
/*==============================================================*/


drop table if exists ANGGOTA_GROUP;

drop table if exists FANBASE;

drop table if exists GALLERY_BARANG;

drop table if exists GALLERY_PRIBADI;

drop table if exists GROUPS;

drop table if exists JENIS_USER;

drop table if exists KOMENTAR;

drop table if exists LIKES;

drop table if exists NEWS;

drop table if exists STATUS_USERS;

drop table if exists TEMAN;

drop table if exists TRANSAKSI_REGISTRASI;

drop table if exists USERS;

/*==============================================================*/
/* Table: ANGGOTA_GROUP                                         */
/*==============================================================*/
create table ANGGOTA_GROUP
(
   ID_USERS             int not null,
   ID_GROUPS            char(50) not null,
   primary key (ID_USERS, ID_GROUPS)
);

/*==============================================================*/
/* Table: FANBASE                                               */
/*==============================================================*/
create table FANBASE
(
   ID_FANBASE           bigint not null,
   NAMA                 char(50) not null,
   WARNA                char(20) not null,
   LOGO                 text not null,
   SUBDOMAIN            char(20) not null,
   primary key (ID_FANBASE)
);

/*==============================================================*/
/* Table: GALLERY_BARANG                                        */
/*==============================================================*/
create table GALLERY_BARANG
(
   ID_GALLERY_BARANG    int not null,
   ID_USERS             int,
   NAMA_GALLERY         varchar(50) not null,
   KODE_GALLERY         char(32) not null,
   JENIS_GALLERY        char(50) not null,
   SAMPEL_GALLERY       text,
   GAMBAR_GALLERY       text,
   HARGA_POINT          bigint not null,
   HARGA_POINT_BONUS    bigint not null,
   HARGA_CASH           bigint not null,
   primary key (ID_GALLERY_BARANG)
);

/*==============================================================*/
/* Table: GALLERY_PRIBADI                                       */
/*==============================================================*/
create table GALLERY_PRIBADI
(
   ID_GALLERY_PROBADI   char(50) not null,
   ID_FANBASE           bigint,
   ID_USERS             int,
   GAMBAR_GALLERY_PRIBADI text not null,
   primary key (ID_GALLERY_PROBADI)
);

/*==============================================================*/
/* Table: GROUPS                                                */
/*==============================================================*/
create table GROUPS
(
   ID_GROUPS            char(50) not null,
   ID_USERS             int,
   ID_FANBASE           bigint,
   NAMA_GROUP           char(50) not null,
   DESKRIPSI            text not null,
   primary key (ID_GROUPS)
);

/*==============================================================*/
/* Table: JENIS_USER                                            */
/*==============================================================*/
create table JENIS_USER
(
   ID_JENIS             int not null,
   NAMA_JENIS           char(30) not null,
   primary key (ID_JENIS)
);

/*==============================================================*/
/* Table: KOMENTAR                                              */
/*==============================================================*/
create table KOMENTAR
(
   ID_KOMENTAR          char(50) not null,
   ID_STATUS_USERS      char(50),
   ID_USERS             int,
   KOMENTAR             text not null,
   DATETIME_KOMENTAR    datetime not null,
   primary key (ID_KOMENTAR)
);

/*==============================================================*/
/* Table: LIKES                                                 */
/*==============================================================*/
create table LIKES
(
   ID_STATUS_USERS      char(50),
   ID_USERS             int,
   DATETIME_LIKE        datetime not null
);

/*==============================================================*/
/* Table: NEWS                                                  */
/*==============================================================*/
create table NEWS
(
   ID_NEWS              char(50) not null,
   ID_USERS             int,
   ID_FANBASE           bigint,
   BERITA               text not null,
   TANGGAL_NEWS         date not null,
   GAMBAR_NEWS          text not null,
   primary key (ID_NEWS)
);

/*==============================================================*/
/* Table: STATUS_USERS                                          */
/*==============================================================*/
create table STATUS_USERS
(
   ID_STATUS_USERS      char(50) not null,
   ID_FANBASE           bigint,
   ID_USERS             int,
   DATETIME_STATUS      datetime not null,
   KONTEN               text not null,
   primary key (ID_STATUS_USERS)
);

/*==============================================================*/
/* Table: TEMAN                                                 */
/*==============================================================*/
create table TEMAN
(
   ID_FANBASE           bigint,
   ID_USERS             int,
   USE_ID_USERS         int,
   TANGGAL_TEMAN        date not null,
   STATUS_TEMAN         char(1) not null
);

/*==============================================================*/
/* Table: TRANSAKSI_REGISTRASI                                  */
/*==============================================================*/
create table TRANSAKSI_REGISTRASI
(
   ID_REGISTRASI        int not null,
   ID_FANBASE           bigint,
   NAMA_LENGKAP         char(50) not null,
   TEMPAT               char(30) not null,
   TANGGAL              date not null,
   NEGARA               char(40) not null,
   PROVINSI             char(40) not null,
   KOTA                 char(40) not null,
   ALAMAT               text not null,
   KODE_POS             char(5) not null,
   NO_TELP              char(15) not null,
   EMAIL                char(30) not null,
   TWITTER              char(30) not null,
   NAMA_IBU             char(30) not null,
   NAMA_AYAH            char(30) not null,
   NO_SAKTI             char(16) not null,
   CORP                 char(30) not null,
   VAD                  char(16) not null,
   STATUS_REKONSILIASI  char(1) not null,
   STATUS_RELEASE       char(1) not null,
   TANGGAL_TRANSAKSI    date not null,
   primary key (ID_REGISTRASI)
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS
(
   ID_USERS             int not null,
   ID_REGISTRASI        int,
   ID_FANBASE           bigint,
   ID_JENIS             int,
   PASSWORD             char(50) not null,
   NOMER_SAKTI          char(16) not null,
   VAS                  char(16) not null,
   STATUS               char(1) not null,
   primary key (ID_USERS)
);

alter table ANGGOTA_GROUP add constraint FK_ANGGOTA_GROUP foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table ANGGOTA_GROUP add constraint FK_ANGGOTA_GROUP2 foreign key (ID_GROUPS)
      references GROUPS (ID_GROUPS) on delete restrict on update restrict;

alter table GALLERY_BARANG add constraint FK_USERS_TO_GALLERY_BARANG foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table GALLERY_PRIBADI add constraint FK_FANBASE_TO_GALLERY_PRIBADI foreign key (ID_FANBASE)
      references FANBASE (ID_FANBASE) on delete restrict on update restrict;

alter table GALLERY_PRIBADI add constraint FK_USER_GALLERY_PRIBADI foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table GROUPS add constraint FK_FANBASE_TO_GROUP foreign key (ID_FANBASE)
      references FANBASE (ID_FANBASE) on delete restrict on update restrict;

alter table GROUPS add constraint FK_USER_TO_CORP foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table KOMENTAR add constraint FK_STATUS_TO_KOMENTAR foreign key (ID_STATUS_USERS)
      references STATUS_USERS (ID_STATUS_USERS) on delete restrict on update restrict;

alter table KOMENTAR add constraint FK_USER_TO_KOMENTAR foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table LIKES add constraint FK_STATUS_TO_LIKE foreign key (ID_STATUS_USERS)
      references STATUS_USERS (ID_STATUS_USERS) on delete restrict on update restrict;

alter table LIKES add constraint FK_USER_TO_LIKE foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table NEWS add constraint FK_FANBASE_TO_NEWS foreign key (ID_FANBASE)
      references FANBASE (ID_FANBASE) on delete restrict on update restrict;

alter table NEWS add constraint FK_USER_TO_NEWS foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table STATUS_USERS add constraint FK_F_STATUS foreign key (ID_FANBASE)
      references FANBASE (ID_FANBASE) on delete restrict on update restrict;

alter table STATUS_USERS add constraint FK_USER_TO_STATUS foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table TEMAN add constraint FK_DARI foreign key (ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table TEMAN add constraint FK_FANBASE_TO_TEMAN foreign key (ID_FANBASE)
      references FANBASE (ID_FANBASE) on delete restrict on update restrict;

alter table TEMAN add constraint FK_KE foreign key (USE_ID_USERS)
      references USERS (ID_USERS) on delete restrict on update restrict;

alter table TRANSAKSI_REGISTRASI add constraint FK_F_TRANSAKSI foreign key (ID_FANBASE)
      references FANBASE (ID_FANBASE) on delete restrict on update restrict;

alter table USERS add constraint FK_F_USER foreign key (ID_FANBASE)
      references FANBASE (ID_FANBASE) on delete restrict on update restrict;

alter table USERS add constraint FK_JENIS_TO_USER foreign key (ID_JENIS)
      references JENIS_USER (ID_JENIS) on delete restrict on update restrict;

alter table USERS add constraint FK_TRANSAKSI_REGISTRASI_TO_USER foreign key (ID_REGISTRASI)
      references TRANSAKSI_REGISTRASI (ID_REGISTRASI) on delete restrict on update restrict;

