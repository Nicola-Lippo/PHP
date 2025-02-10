Alla base della OOP c’è il concetto di Classe.
In PHP, una classe è un modello che definisce le proprietà (variabili/attributi) e i metodi (funzioni) di un oggetto.
Le classi vengono utilizzate nella programmazione orientata agli oggetti (OOP) per creare istanze (oggetti) che possono avere caratteristiche e comportamenti definiti dalla classe stessa.
NB. PascalCase per i nomi delle classi.

NB. abbiamo 3 key per definire un attributu public, private, protected.
NB.  Per accedere agli attributi/funzioni di un'istanza si usa l’operatore  ->.

PHP è un linguaggio dinamicamente tipizzato
NB: Però al fine di rendere il nostro codice più robusto e leggibile, è buona prassi aggiungere la dichiarazione del tipo ai parametri e ai valori di ritorno dei metodi e alle proprietà di una classe.

GETTER E SETTER 
Per convenzione, il nome dei metodi inizia con la parola get o set seguita dal nome dell'attributo.
I getter non hanno parametri e restituiscono un tipo di dato uguale al tipo dell'attributo. 
I setter non restituiscono nulla e hanno un parametro di tipo uguale al tipo dell'attributo.