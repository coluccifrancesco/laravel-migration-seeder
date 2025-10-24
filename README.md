# laravel-migration-seeder

### Svolgimento
Creiamo una tabella trains e relativa Migration, cercando di capire la natura dei campi necessari. 

Ogni treno dovrà avere:

- Azienda;
- Stazione di partenza;
- Stazione di arrivo;
- Orario di partenza;
- Orario di arrivo;
- Codice Treno;
- Totale Carrozze;
- Se in orario o meno;
- Se cancellato o meno.

Saranno necessarie altre colonne per far funzionare la tabella nel modo corretto.

Inventiamo dei dati fittizi e inseriamoli tramite PhpMyAdmin.

Creiamo un Model per i treni ed un relativo Controller per poi mostrare nella home page tutti i treni che sono in partenza dalla data odierna in avanti, in ordine cronologico.

### Bonus 
Inventiamo lo stile del nostro tabellone treni! 
Font suggerito "Share Tech Mono".