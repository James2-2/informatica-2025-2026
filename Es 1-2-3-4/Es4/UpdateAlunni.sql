alter table alunni change cf codice_fiscale char(16);

alter table alunni change data data_nascita date;

alter table alunni add column corso char(20);

alter table alunni add column sezione char(5);

alter table alunni change corso indirizzo char(20);