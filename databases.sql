create table guru(
    nip int(10) primary key auto_increment,
    nama_guru varchar(25) not null,
    alamat varchar(25) not null,
    gelar varchar(25) not null
);

create table siswa(
    nis int(10) primary key auto_increment,
    nama varchar(25) not null,
    alamat varchar(25) not null,
    usia varchar(11) not null,
    kelas varchar(10) not null
);

create table mapel(
    kode_mapel int(10)  primary key auto_increment,
    nip int(10) not null,
    nama_mapel varchar(25) not null,
    semester int(10) not null,
    foreign key (nip) references guru (nip) on update cascade on delete cascade
);

create table nilai(
    kode_nilai int(10) primary key auto_increment,
    nis int(10) not null,
    kode_mapel int(10) not null,
    nilai int(11) not null,
     foreign key (nis) references siswa (nis) on update cascade on delete cascade,
     foreign key (kode_mapel) references mapel (kode_mapel) on update cascade on delete cascade
);

insert into siswa values
('2022001','ADAM AL GHONY SOETOJOE','MGT','17','XI'),
('','AFRIDA FUTRISIAM','TAMBUN','17','XI'),
('','AKBAR SURYA','SETU','17','XI'),
('','ANNATATYA PUTRI','CIBITUNG','15','XI'),
('','BAMBANG HASTOBROTO','JATIMULYA','17','XI');

insert into guru values
('1001','Dedi Setiawan','MGT','S.Kom'),
('1002','Subandri','Cibitung','M.Kom'),
('1003','M.Fajri','Gabus','S.Kom');

insert into mapel values
('','1001','Network Wireless','4'),
('','1002','Mikrotik','6'),
('','1003','Cisco','6');
('','1002','Network Administrator','6');
('','1003','AIJ','6');

