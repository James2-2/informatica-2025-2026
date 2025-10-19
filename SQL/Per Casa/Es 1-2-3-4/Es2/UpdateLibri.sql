alter table libri change anno anno_pubblicazione int;

alter table libri add cognome char(40);

alter table libri add nome char(40);

alter table libri drop column autore;

alter table libri change cognome autore_cognome char(40);

alter table libri change nome autore_nome char(40);

alter table libri modify nome char (40) not null;
alter table libri modify cognome char(40) not null;