# video-rent-managing-software-assignment
Assignment from my University's Databases Course. Car Rent stores managing software

[![CI](https://github.com/marcorossiIT/car-rent-managing-software-assignment/actions/workflows/ftpUpl.yml/badge.svg)](https://github.com/marcorossiIT/car-rent-managing-software-assignment/actions/workflows/ftpUpl.yml)

Testo dell'assignment
===

## Descrizione dell'azienda

Una società di noleggio video vuole automatizzare i punti vendita.

La società gestisce 8 punti vendita in varie località; in ogni punto vendita lavorano da 1 a 6 addetti più il responsabile del negozio.

La società ha 6 fornitori che dopo 90 giorni di affitto ritirano la merce.

Ogni settimana avviene uno scarico dei nuovi video e la restituzione dei video scaduti.

Ogni video è contraddistinto da più attori, un titolo, un regista, la casa produttrice, la durata in minuti ed un genere.

I punti vendita noleggiano i video a giorni interi e le tariffe sono decrescenti all'aumentare del periodo di noleggio.

Il responsabile del punto vendita può applicare degli sconti ad alcuni clienti fidelizzati, ma la politica degli sconti deve essere codificata.

I clienti dovranno essere rintracciabili e deve essere tenuta traccia del cliente e dei video che ha in noleggio.

Per ogni cliente si dovrà conoscere: nome, cognome, indirizzo, telefono abitazione, telefono cellulare, indirizzo e-mail e data di nascita.

 Ogni cliente dovrà firmare una liberatoria per la legge sulla privacy e si dovrà tenere traccia delle coordinate del documento cartaceo corrispondente. Per ogni cliente si dovrà mantenere uno storico dei noleggi effettuati.

Gli addetti saranno caratterizzati da un nome, cognome, matricola.

Ogni addetto riceverà incentivi se supererà certi volumi di vendita.

## Operazioni dell'azienda (operatività)

-  Carico e Scarico dei video a magazzino con frequenza 1 operazione a settimana per punto vendita.
-  Stampa della ricevuta di attivazione noleggio al cliente e contestuale diminuzione dalla disponibilità (frequenza 7000 / gg).
-  Stampa della ricevuta di termine noleggio al cliente e contestuale aumento della disponibilità del titolo (frequenza 7000 / gg).
-  Ricerca sul catalogo per genere (10.000/gg).
-  Ricerca sul catalogo per titolo (10.000/gg).
-  Calcolo incasso giornaliero per punto vendita e per addetto. Prenotazione di titoli in uscita da parte dei clienti (500/gg).
-  Stampa ricevuta di addebito al cliente dei video restituiti in cattivo stato e quindi da rimborsare al fornitore.

## Obbiettivi dello studente (cosa si deve realizzare)

- Definire lo schema concettuale e formalizzare tutti i documenti allegati
-  Definire lo schema logico e formalizzare tutti i documenti allegati.
-  Fornire una spiegazione circa le scelte fatte in termini di ristrutturazione schema E-R.
-  Definire un possibile schema fisico.
-  Implementare con linguaggio php le funzioni descritte nelle slide: operatività distinguendo gli ambienti operativi per i diversi livelli: responsabile negozio e addetto negozio.
-  Gli script potranno essere resi disponibili via web e dovranno essere inviati per posta elettronica al mio indirizzo di email.
