NB. le variabilli vanno definite dentro la funzione...non come in JS dove le cerca nello scope globale.

Per includere si può usare anche required.
La differenza sta nel tipo di errore restituito se il file non viene trovato:
Include genererà un warning
Require lancerà un fatal error, bloccando l’esecuzione della pagina