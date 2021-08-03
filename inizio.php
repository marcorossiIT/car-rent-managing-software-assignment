<!doctype html>
<html lang="it">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="shortcut icon" href="https://www.w3schools.com/favicon.ico" />

    <link href="./inizio.css" rel="stylesheet">


    <title>Hello, world!</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row gx-2">
            <div class="col-2" id="sidebar">
                <div id="sidebarTitleWrapper">

                    <h3 class="titoloSidebar">Prova 1</h3>
                    <p class="descrizioneSidebar">Prova 1 in itinere di Basi Di Dati</p>
                </div>
                <div class="sidebarContentWrapper">
                    <ul>

                        <li class="liActive"><a href="Home">&nbsp;Home</a></li>
                        <li><a href="analisi del lavoro/analisi.html">&nbsp;Analisi del lavoro</a></li>
                        <li><a href="#">&nbsp;Carica db</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-10">
                <div class="container">

                    <div class="row">
                        <div class="col">
                            <h1>Benvenut<span class="rainbowLetter">ə</span>!</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="alert alert-light alert-informativo-1" role="alert">
                                <h4 class="alert-heading">Per favore seguire le istruzioni di seguito</h4>
                                <h5><b>1.</b> Attivare javascript</h5>
                                <p>Ho utilizzato javascript allo scopo di presentazione e comodità di utilizzo, tuttavia al fine di garantire il corretto svolgimento della presentazione si consiglia di attivarlo.</p>
                                <hr>
                                <p class="mb-0"><i>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</i></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">

                            <h2>Assignment</h2>
                            <h3>Descrizione dell'azienda</h3>
                            <p>
                                Una società di noleggio video vuole automatizzare i punti vendita.
                            </p>
                            <p>
                                La società gestisce 8 punti vendita in varie località; in ogni punto vendita lavorano
                                da 1 a 6 addetti più il responsabile del negozio. La società ha 6 fornitori che dopo
                                90 giorni di affitto ritirano la merce.
                            </p>
                            <p>
                                Ogni settimana avviene uno scarico dei nuovi video e la restituzione dei video
                                scaduti.
                            </p>
                            <p>
                                Ogni video è contraddistinto da più attori, un titolo, un regista, la casa
                                produttrice, la durata in minuti ed un genere.
                            </p>
                            <p>
                                I punti vendita noleggiano i video a giorni interi e le tariffe sono decrescenti
                                all'aumentare del periodo di noleggio. Il responsabile del punto vendita può
                                applicare degli sconti ad alcuni clienti fidelizzati, ma la politica degli sconti deve
                                essere codificata.
                            </p>
                            <p>
                                I clienti dovranno essere rintracciabili e deve essere tenuta traccia del cliente e dei
                                video che ha in noleggio. Per ogni cliente si dovrà conoscere: nome, cognome,
                                indirizzo, telefono abitazione, telefono cellulare, indirizzo e-mail e data di nascita.
                                Ogni cliente dovrà firmare una liberatoria per la legge sulla privacy e si dovrà
                                tenere traccia delle coordinate del documento cartaceo corrispondente. Per ogni
                                cliente si dovrà mantenere uno storico dei noleggi effettuati.
                            </p>
                            <p>
                                Gli addetti saranno caratterizzati da un nome, cognome, matricola. Ogni addetto
                                riceverà incentivi se supererà certi volumi di vendita.
                            </p>
                            <h3>Operazioni dell'azienda</h3>
                            <ul>
                                <li>

                                    Carico e Scarico dei video a magazzino con frequenza 1 operazione a
                                    settimana per punto vendita.
                                </li>
                                <li>
                                    Stampa della ricevuta di attivazione noleggio al cliente e contestuale
                                    diminuzione dalla disponibilità (frequenza 7000 / gg).
                                </li>
                                <li>
                                    Stampa della ricevuta di termine noleggio al cliente e contestuale aumento
                                    della disponibilità del titolo (frequenza 7000 / gg).
                                </li>
                                <li>
                                    Ricerca sul catalogo per genere (10.000/gg).
                                </li>
                                <li>
                                    Ricerca sul catalogo per titolo (10.000/gg).
                                </li>
                                <li>
                                    Calcolo incasso giornaliero per punto vendita e per addetto.
                                    Prenotazione di titoli in uscita da parte dei clienti (500/gg).
                                </li>
                                <li>
                                    Stampa ricevuta di addebito al cliente dei video restituiti in cattivo stato e
                                    quindi da rimborsare al fornitore.</li>
                            </ul>
                            <h3>Obbiettivi dello studente</h3>
                            <ul>
                                <li>Cosa si deve realizzare

                                    Definire lo schema concettuale e formalizzare tutti i documenti allegati
                                </li>
                                <li>
                                    Definire lo schema logico e formalizzare tutti i documenti allegati.
                                </li>
                                <li>
                                    Fornire una spiegazione circa le scelte fatte in termini di ristrutturazione schema
                                    E-R.
                                </li>
                                <li>
                                    Definire un possibile schema fisico.
                                </li>
                                <li>
                                    Implementare con linguaggio php le funzioni descritte nelle slide: “operatività”
                                    distinguendo gli ambienti operativi per i diversi livelli: responsabile negozio e
                                    addetto negozio.
                                </li>
                                <li>
                                    Gli script potranno essere resi disponibili via web e dovranno essere inviati per
                                    posta elettronica al mio indirizzo di email.
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>