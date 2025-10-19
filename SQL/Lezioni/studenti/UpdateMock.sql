select * from mock_data order by last_name asc; -- Ordina in ordine crescente

select * from mock_data order by last_name desc;

select email as posta from mock_data where first_name = 'Oriana'; -- Alias; Sostituisce email con posta e mostra la posta con nome Oriana

select distinct first_name from mock_data; -- Visualizza senza i doppioni

select * from mock_data limit 10; -- Mostra 10 campi

select * from mock_data limit 10 offset 4; -- Mostra 10 campi partendo dal quinto
