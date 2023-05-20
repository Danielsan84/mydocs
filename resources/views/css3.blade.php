<x-layout>
    <div class="container-fluid">
        <h1 class="text-center">CSS</h1>
        <h2>CASCADING STYLE SHEET</h2>
        <div class="container-spiega">
            <p>IL CSS è un linguaggio di fogli di stile utilizzato per descrivere l'aspetto e la formattazione di un
                documento HTML.
                Attraverso il CSS, è possibile definire come i diversi elementi HTML devono essere visualizzati sullo
                schermo, sui dispositivi mobili o su altri tipi di media.</p>
            <p>In pratica, il CSS permette di separare la struttura di un documento HTML (contenuto) dalla sua
                presentazione visuale
                (stile).
                Con il CSS, puoi definire regole che specificano come i vari elementi del documento devono essere
                visualizzati, includendo colori, dimensioni del testo, posizioni, sfondi, bordi e molto altro.</p>
            <p>Le regole CSS sono definite utilizzando selettori che identificano gli elementi HTML a cui si applicano,
                e dichiarazioni che specificano le proprietà e i valori che si desidera assegnare a quegli elementi.
            </p>
        </div>
    </div>

    <div class="matrix-text-container3">
        <div class="frase1">
            {{-- <h2>Selettori</h2>
            <h2 data-target="#selettori">Selettori</h2> --}}
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="container-spiega">
                        <ol>                           
        <li><p>* Nel contesto di CSS, questo simbolo rappresenta un selettore universale.
                Viene utilizzato per selezionare tutti gli elementi presenti in una pagina HTML.
                Quindi, se si applica uno stile utilizzando il selettore *, verranno interessati tutti gli
                elementi HTML presenti nel documento.</p>
        </li>
        <li><p>Il selettore per tag in CSS è uno dei selettori più semplici e comuni.
               Consente di selezionare tutti gli elementi che corrispondono a un determinato tipo di tag HTML.
               Per utilizzare il selettore per tag, devi semplicemente specificare il nome del tag come
               selettore.
               Ad esempio, se vuoi selezionare tutti gli elementi di h4 nel tuo documento HTML, utilizzerai il
               selettore per tag h4.</p></li>
        <li><p>Il selettore per classe in CSS ti consente di selezionare elementi HTML in base al valore dell'attributo class.
               Le classi sono utilizzate per identificare e raggruppare elementi simili all'interno di un
               documento HTML.
               Per utilizzare il selettore per classe, devi specificare il nome della classe preceduto da un
               punto (".") come selettore.
               Ad esempio, se hai un elemento div con la classe "code", utilizzerai il selettore ".code" per
               selezionarlo.</p>
        </li> 
        <li><p>Il selettore per ID in CSS ti consente di selezionare un elemento HTML in base al valore dell'attributo id.
               Gli ID sono identificatori unici assegnati a elementi specifici all'interno di un documento HTML.
               Per utilizzare il selettore per ID, devi specificare l'ID dell'elemento preceduto da un
               cancelletto ("#") come selettore.
               Ad esempio, se hai un elemento div con l'ID "ido", utilizzerai il selettore "#ido" per
               selezionarlo.
               In questo caso, il selettore #ido selezionerà l'elemento con l'ID "ido" e applicherà uno stile
               che imposta il colore del testo su rosso.
               Gli ID sono univoci all'interno di un documento HTML, il che significa che ogni ID deve essere
               assegnato a un solo elemento.
               Pertanto, il selettore per ID selezionerà sempre al massimo un elemento nel tuo documento.
               A differenza delle classi, che possono essere applicate a più elementi, gli ID sono progettati
               per essere utilizzati per identificare un elemento specifico e devono essere unici all'interno
               del documento.</p>
            </li> 
        <li><p>Selettore discendente seleziona gli elementi figli di un altro elemento.
               Ad esempio, div p seleziona tutti gli elementi p che sono discendenti diretti di un elemento div.</p></li>
        <li><p>Selettore di attributo: Seleziona gli elementi che hanno un determinato attributo.
               Ad esempio, input[type="text"] seleziona tutti gli elementi input con l'attributo type uguale a
               "text".</p>
            </li>
        <li><p>Selettore di combinazione combina più selettori per identificare elementi specifici.
               Ad esempio, div .classe seleziona gli elementi con class="classe" che sono discendenti diretti di
               un elemento div.</p>
            </li>
        <li><p>Selettore di pseudo-classe seleziona elementi in base a uno stato o a un'interazione specifica.
               Ad esempio, a:hover seleziona i link quando vengono "hoverati" con il mouse.</p></li>
                             
                            





























                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- CSS = CASCADING STYLE SHEET --}}

        {{-- metodo inline --}}
        {{-- <h1 style="color: rgb(180, 73, 73)">CSS</h1> --}}

        {{-- metodo interno --}}
        {{-- <style>
        h2 {
            color: blue;
        }

        p {
            color: green;
        }
    </style> --}}

        {{-- metodo esterno con il file style.css che è quello che usiamo sempre...sotto parte la pagina css3 --}}

        <hr>
        <h2>Titolo con effetto glow</h2>
        <button onclick="stopGlowAnimation()">Stop</button>





       
        <p> 
        </p>


        <pre>
        <div class="element">
         <div class="riga44">riga 44</div>           
        </div>
 <code class="code">
   * {
       color; red;
   }
   h4 {
       color: red;
   }
   .code {
       color: green;
   }
   #ido {
       color: blue;
   }
 </code>
    </pre>
        <h2 data-target="#selettori">Selettori</h2>
        <h2>Unità di misura</h2>
        <p>Le unità di misura sono importanti per la responsività del sito, perchè se usiamo unità di misura fisse,
            quando la pagina si riduce o si ingrandisce, i nostri elementi non si adatteranno alla pagina, ma rimarranno
            sempre uguali, quindi per questo motivo si usano le unità di misura relative, che sono:</p>
        <ul>
            <li>px</li>
            <li>em</li>
            <li>rem</li>
            <li>vh</li>
            <li>vw</li>
            <li>%</li>
        </ul>

        <h3>I px</h3>
        <p>Sono le unità di misura fisse, quindi se noi mettiamo un elemento a 100px, questo rimarrà sempre a 100px,
            indipendentemente dalla grandezza della pagina.</p>
        <h3>em</h3>
        <p>Sono le unità di misura relative al font-size del tag padre, quindi se noi mettiamo un elemento a 2em, questo
            sarà il doppio del font-size del tag padre</p>
        <pre>
 <code>body {
     font-size: 16px;
   }
   
   h1 {
     font-size: 2em; /* 32px (16px x 2) */
   }
   
   p {
     font-size: 1.5em; /* 24px (16px x 1.5) */
   }
   </code>
 </pre>

        <p>Nell'esempio sopra, la dimensione del carattere predefinita del corpo del documento è impostata su 16px.
            L'elemento <code>h1</code> ha una dimensione del carattere di 2em, quindi sarà 32px, mentre l'elemento
            <code>p</code> ha una dimensione del carattere di 1.5em, quindi sarà 24px.
            Utilizzando l'unità "em", è possibile creare un layout flessibile e facilmente scalabile, in cui le
            dimensioni degli elementi si adattano proporzionalmente alle dimensioni del carattere dell'elemento padre.
        </p>

        <h3>rem</h3>
        <p>L'unità di misura "rem" (root em) in CSS è una unità di misura relativa basata sulla dimensione del carattere
            radice (root) dell'elemento HTML.
            A differenza dell'unità "em" che si basa sulla dimensione del carattere dell'elemento padre, l'unità "rem"
            si riferisce alla dimensione del carattere radice dell'intero documento HTML. Di solito, il carattere radice
            è definito nel selettore html nel CSS.</p>
        <pre>
 <code>html {
     font-size: 16px;
   }
   
   h1 {
     font-size: 2rem; /* 32px (16px x 2) */
   }
   
   p {
     font-size: 1.5rem; /* 24px (16px x 1.5) */
   }
   </code>
 </pre>
        <p>Nell'esempio sopra, il carattere radice (impostato sull'elemento html) ha una dimensione di 16px.
            Quindi, l'elemento <code>h1</code> avrà una dimensione del carattere di 2rem, che sarà 32px (16px x 2),
            mentre l'elemento <code>p</code> avrà una dimensione del carattere di 1.5rem, che sarà 24px (16px x 1.5).
        </p>

        <p>La principale differenza tra "rem" ed "em" è che "rem" fa riferimento alla dimensione del carattere radice,
            mentre "em" fa riferimento alla dimensione del carattere dell'elemento padre più vicino.
            L'utilizzo dell'unità "rem" può semplificare il controllo delle dimensioni del carattere e degli elementi in
            un documento.</p>

        <p>Poiché l'unità "rem" si basa sulla dimensione del carattere radice, le dimensioni degli elementi rimarranno
            coerenti in tutto il documento, indipendentemente dalla gerarchia degli elementi.
            L'uso di "rem" è particolarmente utile per la creazione di layout responsivi, in cui le dimensioni degli
            elementi si adattano in modo uniforme in base alla dimensione del carattere radice e possono essere
            facilmente scalate in base alle dimensioni del dispositivo o alle preferenze dell'utente.</p>

        <h3>vh</h3>
        <p>l'unità di misura "vh" sta per "viewport height" (altezza del viewport). Rappresenta una percentuale
            dell'altezza totale del viewport, ovvero l'area visibile sullo schermo del dispositivo.</p>
        <p>Un viewport corrisponde all'area in cui viene visualizzato il contenuto di una pagina web. La sua altezza può
            variare a seconda delle dimensioni del dispositivo o delle impostazioni del browser.
            Ad esempio, se la dimensione del viewport è di 800px in altezza, 1vh rappresenterà l'1% di questi 800px,
            ovvero 8px.</p>
        <p>Ecco un esempio per illustrare l'uso dell'unità "vh" in CSS:</p>

        <pre>
<code>div {
    height: 50vh; /* l'altezza sarà il 50% dell'altezza totale del viewport */
  }
  </code>
</pre>
        <p>Nell'esempio sopra, l'elemento <code>div</code> avrà un'altezza del 50% dell'altezza totale del viewport.
            Indipendentemente dalle dimensioni del dispositivo o dalle dimensioni del contenuto, l'altezza del div si
            adatterà proporzionalmente alla dimensione del viewport.</p>
        <p>L'utilizzo di "vh" è particolarmente utile quando si desidera impostare l'altezza di un elemento in base alla
            dimensione del viewport, ad esempio per creare layout responsivi o per garantire che un elemento occupi una
            percentuale specifica dello schermo.</p>

        <h3>vw</h3>
        <p>l'unità di misura "vw" sta per "viewport width" (larghezza del viewport). Rappresenta una percentuale della
            larghezza totale del viewport, ovvero l'area visibile sullo schermo del dispositivo.</p>
        <p>Un viewport corrisponde all'area in cui viene visualizzato il contenuto di una pagina web. La sua larghezza
            può
            variare a seconda delle dimensioni del dispositivo o delle impostazioni del browser. Ad esempio, se la
            dimensione del viewport è di 800px in larghezza, 1vw rappresenterà l'1% di questi 800px, ovvero 8px.</p>
        <p>Ecco un esempio per illustrare l'uso dell'unità "vw" in CSS:</p>

        <pre>
 <code>
 div {
  width: 50vw; /* la larghezza sarà il 50% della larghezza totale del viewport */
}
</code>
 </pre>
        <p>Nell'esempio sopra, l'elemento <code>div</code> avrà una larghezza del 50% della larghezza totale del
            viewport.
            Indipendentemente dalle dimensioni del dispositivo o dalle dimensioni del contenuto, la larghezza del div si
            adatterà proporzionalmente alla dimensione del viewport.</p>
        <p>L'utilizzo di "vw" è particolarmente utile quando si desidera impostare la larghezza di un elemento in base
            alla
            dimensione del viewport, ad esempio per creare layout responsivi o per garantire che un elemento occupi una
            percentuale specifica dello schermo.</p>

        <h3>%</h3>

        <p>l'unità di misura "%" sta per "percentuale". Rappresenta una percentuale della dimensione dell'elemento padre
            più
            vicino.</p>
        <p>Ad esempio, se un elemento <code>div</code> ha un'altezza di 200px e un elemento <code>p</code> ha un'altezza
            di
            50%, l'altezza del paragrafo sarà di 100px (50% di 200px).</p>
        <p>Ecco un esempio per illustrare l'uso dell'unità "%" in CSS:</p>

        <pre>
    <code>
 div {
     height: 200px;
   }
   
   p {
     height: 50%; /* l'altezza sarà il 50% dell'altezza dell'elemento padre */
   }                   
            </code>                 
        </pre>
        <p>Nell'esempio sopra, l'elemento <code>p</code> avrà un'altezza del 50% dell'altezza dell'elemento
            <code>div</code>. Indipendentemente dalle dimensioni del dispositivo o dalle dimensioni del contenuto,
            l'altezza
            del paragrafo si adatterà proporzionalmente all'altezza dell'elemento padre.
        </p>
        <p>L'utilizzo di "%" è particolarmente utile quando si desidera impostare le dimensioni di un elemento in base
            alle
            dimensioni dell'elemento padre, ad esempio per creare layout responsivi o per garantire che un elemento
            occupi
            una percentuale specifica dello schermo.</p>



        <h3> vmin</h3>
        <p>l'unità di misura "vmin" sta per "viewport minimum" (minimo viewport). Rappresenta una percentuale del valore
            minimo tra la larghezza e l'altezza del viewport.</p>
        <p>Un viewport corrisponde all'area in cui viene visualizzato il contenuto di una pagina web. La sua larghezza e
            altezza possono variare a seconda delle dimensioni del dispositivo o delle impostazioni del browser. Ad
            esempio,
            se la dimensione del viewport è di 800px in larghezza e 600px in altezza, 1vmin rappresenterà l'1% di questi
            600px, ovvero 6px.</p>
        <p>Ecco un esempio per illustrare l'uso dell'unità "vmin" in CSS:</p>

        <pre>
 <code>div {
     width: 50vmin; /* la larghezza sarà il 50% del valore minimo tra la larghezza e l'altezza del viewport */
   }
   </code>
</pre>
        <p>Nell'esempio sopra, l'elemento <code>div</code> avrà una larghezza del 50% del valore minimo tra la larghezza
            e
            l'altezza del viewport. Indipendentemente dalle dimensioni del dispositivo o dalle dimensioni del contenuto,
            la
            larghezza del div si adatterà proporzionalmente alla dimensione del viewport.</p>
        <p>L'utilizzo di "vmin" è particolarmente utile quando si desidera impostare la larghezza di un elemento in base
            alla dimensione del viewport, ad esempio per creare layout responsivi o per garantire che un elemento occupi
            una
            percentuale specifica dello schermo.</p>

        <h3> vmax</h3>
        <p>l'unità di misura "vmax" sta per "viewport maximum" (massimo viewport). Rappresenta una percentuale del
            valore
            massimo tra la larghezza e l'altezza del viewport.</p>
        <p>Un viewport corrisponde all'area in cui viene visualizzato il contenuto di una pagina web. La sua larghezza e
            altezza possono variare a seconda delle dimensioni del dispositivo o delle impostazioni del browser. Ad
            esempio,
            se la dimensione del viewport è di 800px in larghezza e 600px in altezza, 1vmax rappresenterà l'1% di questi
            800px, ovvero 8px.</p>
        <p>Ecco un esempio per illustrare l'uso dell'unità "vmax" in CSS:</p>

        <pre>
<code>div {
    width: 50vmax; /* la larghezza sarà il 50% del valore massimo tra la larghezza e l'altezza del viewport */
  }
  </code>
</pre>
        <p>Nell'esempio sopra, l'elemento <code>div</code> avrà una larghezza del 50% del valore massimo tra la
            larghezza e
            l'altezza del viewport. Indipendentemente dalle dimensioni del dispositivo o dalle dimensioni del contenuto,
            la
            larghezza del div si adatterà proporzionalmente alla dimensione del viewport.</p>
        <p>L'utilizzo di "vmax" è particolarmente utile quando si desidera impostare la larghezza di un elemento in base
            alla dimensione del viewport, ad esempio per creare layout responsivi o per garantire che un elemento occupi
            una
            percentuale specifica dello schermo.</p>



        <div class="element257"></div>




        <div class="padre">
            <div class="element258"></div>

            <div class="element258"></div>

            <div class="element258"></div>

        </div>

        {{-- <nav class="navbar">
        <h3 class="logo">Logo</h3>

        <ul class="list">
            <li class="margin-x-link">Home</li>
             <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
                <li class="nav-item"><a class="nav-link" href="">Create Article</a></li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Lavora con noi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('css3') }}">CSS3</a>
              </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('html5') }}">Html5</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link" href="">Register</a>
              </li>
            <li class="margin-x-link">Chi siamo</li>
            <li class="margin-x-link">Contatti</li>
        </ul>
    </nav> --}}


        {{-- inizio spiegazione --}}

        <h3>Proprietà di allineamento ORIZZONTALE degli elementi</h3>


        <div class="">
            <p>Flex-start: Gli elementi vengono allineati all'inizio del contenitore. L'elemento iniziale sarà
                posizionato
                all'estremità sinistra.</p>
            <p>Flex-end: Gli elementi vengono allineati alla fine del contenitore. L'elemento finale sarà posizionato
                all'estremità destra.</p>
            <p>Center: Gli elementi vengono allineati al centro del contenitore lungo l'asse orizzontale.</p>
            <p>Space-between: Gli elementi vengono distribuiti uniformemente lungo l'asse orizzontale con spazi vuoti
                tra di
                essi.
                Il primo elemento sarà posizionato all'inizio del contenitore e l'ultimo elemento alla fine del
                contenitore.
            </p>
            <p>Space-around: Gli elementi vengono distribuiti uniformemente lungo l'asse orizzontale con spazi vuoti
                attorno
                ad essi.
                Gli spazi vuoti saranno uguali alla metà dello spazio vuoto tra gli elementi.
                Il primo elemento sarà posizionato all'inizio del contenitore e l'ultimo elemento alla fine del
                contenitore.
                Gli elementi vengono distribuiti uniformemente lungo l'asse orizzontale con spazi vuoti sia tra di essi
                che all'inizio e alla fine del contenitore. Lo spazio tra gli elementi è uguale allo spazio tra gli
                elementi
                e
                i bordi del contenitore.</p>
            <p>Space-evenly: Gli elementi vengono distribuiti uniformemente lungo l'asse orizzontale con spazi vuoti sia
                tra
                di essi
                che all'inizio e alla fine del contenitore. Lo spazio tra gli elementi è uguale.</p>
            <p>Start: Equivalent to flex-start.</p>
            <p>End: Equivalent to flex-end.</p>
            <p>Left: Gli elementi vengono allineati all'estremità sinistra del contenitore.</p>
            <p>Right: Gli elementi vengono allineati all'estremità destra del contenitore.</p>
        </div>

        <h3>Proprietà di allineamento VERTICALE degli elementi</h3>

        <div class="">
            <p>Queste proprietà vengono solitamente utilizzate in combinazione con i layout flessibili (display: flex o
                display: inline-flex) per allineare gli elementi all'interno di un contenitore flessibile lungo l'asse
                trasversale.</p>
            <p>Align-items: stretch: Questa è l'impostazione predefinita.
                Gli elementi vengono estesi lungo l'asse trasversale del contenitore per occupare l'intera altezza
                disponibile.</p>
            <p>Align-items: flex-start:
                Gli elementi vengono allineati all'inizio del contenitore lungo l'asse trasversale.
                Se gli elementi hanno altezze diverse, vengono posizionati in cima al contenitore.</p>
            <p>Align-items: flex-end: Gli elementi vengono allineati alla fine del contenitore lungo l'asse trasversale.
                Se gli elementi hanno altezze diverse, vengono posizionati in fondo al contenitore.</p>
            <p>Align-items: center: Gli elementi vengono allineati al centro del contenitore lungo l'asse trasversale.
            </p>
            <p>Align-items: baseline: Gli elementi vengono allineati lungo la loro linea di base comune.
                Questo può essere utile se gli elementi contengono testo con altezze diverse.</p>
            <p>Align-items: initial: Ripristina il valore predefinito dell'attributo align-items.</p>
            <p>Align-items: inherit: Eredità del valore di align-items dal genitore.</p>
            <p>Flex-wrap: wrap; Gli elementi vengono avvolti su righe o colonne aggiuntive se non c'è abbastanza spazio
                sul contenitore principale.
                In questo caso, gli elementi in eccesso vengono spostati su una nuova riga o colonna
                per rendere responsive gli elementi.</p>
            <p> L'attributo flex-direction: column viene utilizzato insieme al layout flessibile
                (display: flex o display: inline-flex) per specificare l'orientamento dei componenti all'interno
                di un contenitore flessibile lungo l'asse principale.
                Quando si imposta flex-direction: column, gli elementi all'interno del contenitore flessibile vengono
                posizionati verticalmente, uno sopra l'altro, anziché orizzontalmente su una singola riga.
                In pratica, se hai un contenitore flessibile con flex-direction: column, gli elementi al suo interno
                verranno impilati verticalmente.
                Questo può essere utile quando si desidera creare una colonna di elementi,
                ad esempio una lista verticale.
            </p>
        </div>

        <div class="card-container">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>

        <h3>ATTRIBUTO POSITION:</h3>

        <P>L'attributo position in CSS viene utilizzato per controllare il posizionamento degli elementi all'interno di
            un
            layout.
            Ci sono diverse opzioni che possono essere utilizzate con position:</P>
        <P>Position: static (valore predefinito): Gli elementi vengono posizionati secondo il normale flusso del
            documento.
            Questo valore non consente di utilizzare altre proprietà di posizionamento come top, bottom, left e right.
        </P>
        <p>Position: relative: Gli elementi vengono posizionati in base alla loro posizione normale nel flusso del
            documento.
            Tuttavia, è possibile utilizzare le proprietà top, bottom, left e right per spostare l'elemento rispetto
            alla sua posizione originale. L'elemento mantiene comunque il suo spazio originale nel layout.</p>
        <p>Position: absolute: L'elemento viene posizionato rispetto al suo primo genitore posizionato o all'elemento
            radice (di solito il documento HTML).
            Puoi utilizzare le proprietà top, bottom, left e right per specificare la posizione dell'elemento.
            L'elemento viene rimosso dal flusso del documento, quindi gli altri elementi possono sovrapporsi ad esso.
            Se nessuno dei genitori ha una posizione esplicita, l'elemento verrà posizionato rispetto al documento HTML.
        </p>
        <p>Position: fixed: L'elemento viene posizionato rispetto alla finestra del browser e rimarrà fisso
            anche quando si scorre la pagina.
            Puoi utilizzare le proprietà top, bottom, left e right per specificare la posizione fissa dell'elemento.
            Gli elementi con position: fixed vengono rimossi dal flusso del documento, quindi gli altri elementi possono
            sovrapporsi ad essi.</p>
        <p>Position: sticky: L'elemento rimarrà nella posizione specificata finché non viene superata una soglia
            definita,
            quindi diventerà un elemento fixed fino a quando non tornerà nella sua posizione iniziale quando viene
            superata
            un'altra soglia.
            Questo valore è spesso utilizzato per creare elementi che rimangono "appiccicati" all'interno di un
            contenitore
            quando si scorre la pagina.</p>
        <p>L'attributo z-index: è una proprietà CSS che determina l'ordinamento degli elementi posizionati lungo l'asse
            Z (profondità) all'interno di uno stack di elementi sovrapposti.
            In altre parole, l'attributo z-index consente di controllare quale elemento HTML viene visualizzato sopra
            gli altri quando si verificano sovrapposizioni.
            Il valore dell'attributo z-index può essere un numero intero, un valore decimale o la parola chiave "auto".
            I numeri più grandi indicano un ordine superiore rispetto ai numeri più piccoli. Se due elementi hanno lo
            stesso valore di z-index, l'ordine di sovrapposizione viene determinato dall'ordine di posizionamento nel
            codice HTML.
            È importante notare che l'attributo z-index funziona solo sugli elementi con una posizione definita,
            come position: relative, position: absolute o position: fixed. Inoltre, l'attributo z-index influisce solo
            sugli elementi che si sovrappongono nello stesso contesto di posizionamento.</p>


        <div class="container-5">
            <div class="box-5">

            </div>
        </div>



        <div class="container6">
            <ul>
                <li><span>home</span></li>
                <li><span>products</span></li>
                <li><span>services</span></li>
                <li><span>contact</span></li>
            </ul>
        </div>

        <h3>Pseudo-classi</h3>
        <p>:hover: Seleziona un elemento quando il cursore del mouse si trova sopra di esso.
            È spesso utilizzato per creare effetti di rollover.</p>
        <p>:active: Seleziona un elemento quando viene attivato, ad esempio quando viene fatto clic su di esso.</p>
        <p>:focus: Seleziona un elemento che ha il focus, ad esempio quando viene selezionato con la tastiera o tramite
            un
            dispositivo di input.</p>
        <p>:visited: Seleziona un link visitato. È utilizzato per applicare stili specifici ai link visitati.</p>
        <p>:first-child: Seleziona il primo elemento figlio del suo genitore.
            È utile per applicare stili specifici al primo elemento di una lista o di un contenitore.</p>
        <p>:last-child: Seleziona l'ultimo elemento figlio del suo genitore. Simile a :first-child,
            ma seleziona l'ultimo elemento invece del primo.</p>
        <p>:nth-child(n): Seleziona l'elemento figlio specifico in base a un'espressione numerica. Ad esempio,
            :nth-child(2)
            selezionerà il secondo elemento figlio.</p>
        <p>:nth-of-type(n): Seleziona l'elemento specifico di un determinato tipo in base a un'espressione numerica. Ad
            esempio, :nth-of-type(odd) selezionerà gli elementi di un tipo specifico (come p , div , ecc.) con un indice
            dispari.</p>
        <p>:not(selector): Seleziona gli elementi che non corrispondono al selettore specificato. Ad esempio,
            :not(.classe) selezionerà gli elementi che non hanno la classe specificata.</p>
        <p>Queste sono solo alcune delle pseudoclassi più comuni, ce ne sono molte altre che offrono una vasta gamma di
            possibilità per selezionare elementi specifici in base a vari stati o condizioni.</p>
        <p>:nth-last-child(n): Seleziona l'elemento figlio specifico in base a un'espressione numerica, contando
            dall'ultimo
            elemento figlio. Ad esempio, :nth-last-child(3) selezionerà il terzo elemento figlio dall'ultimo.</p>
        <p>:nth-last-of-type(n): Seleziona l'elemento specifico di un determinato tipo in base a un'espressione
            numerica,
            contando dall'ultimo elemento di quel tipo. Ad esempio, :nth-last-of-type(2) selezionerà il secondo elemento
            di
            un tipo specifico dall'ultimo.</p>
        <p>:only-child: Seleziona gli elementi che sono l'unico figlio del loro genitore. Ad esempio, :only-child
            selezionerà gli elementi che sono l'unico figlio all'interno del loro contenitore.</p>
        <p>:only-of-type: Seleziona gli elementi che sono l'unico elemento di un determinato tipo all'interno del loro
            genitore. Ad esempio, :only-of-type selezionerà gli elementi che sono l'unico elemento di un determinato
            tipo
            all'interno del loro contenitore.</p>
        <p>:empty: Seleziona gli elementi che non hanno contenuto testuale o figli. Ad esempio, :empty selezionerà gli
            elementi vuoti,
            come <code>span>/span> o div>/div.</code></p>

        <h3>Pseudo-elementi</h3>
        <p>Gli pseudoelementi in CSS consentono di selezionare e stilizzare parti specifiche di un elemento HTML. A
            differenza delle pseudoclassi, che selezionano gli elementi in base a stati o condizioni, gli pseudoelementi
            selezionano parti specifiche dell'elemento stesso, come il suo primo carattere o la sua prima riga.</p>
        <p>Per selezionare un pseudoelemento, è necessario utilizzare due punti (::) invece di uno solo (:). Questo è
            stato fatto per distinguere gli pseudoelementi dalle pseudoclassi, che utilizzano un solo due punti.</p>
        <p>Alcuni degli pseudoelementi più comuni sono:</p>
        <p>::first-letter: Seleziona la prima lettera di un elemento. Ad esempio, ::first-letter selezionerà la prima
            lettera di un paragrafo.</p>
        <p>::first-line: Seleziona la prima riga di un elemento. Ad esempio, ::first-line selezionerà la prima riga di
            un
            paragrafo.</p>
        <p>::before: Consente di inserire contenuti prima del contenuto di un elemento. Ad esempio, ::before consente di
            inserire del testo prima del contenuto di un elemento.</p>
        <p>::after: Consente di inserire contenuti dopo il contenuto di un elemento. Ad esempio, ::after consente di
            inserire del testo dopo il contenuto di un elemento.</p>
        <p>::placeholder: Seleziona il testo segnaposto di un elemento. Ad esempio, ::placeholder selezionerà il testo
            segnaposto di un input.</p>
        <p>::selection: Seleziona il testo selezionato dall'utente. Ad esempio, ::selection selezionerà il testo
            selezionato dall'utente.</p>
        <p>::marker: Seleziona il marcatore di un elemento. Ad esempio, ::marker selezionerà il marcatore di un elemento
            di elenco.</p>
        <p>::backdrop: Seleziona l'elemento di sfondo di un elemento. Ad esempio, ::backdrop selezionerà l'elemento di
            sfondo di un elemento.</p>
        <p>::grammar-error: Seleziona il testo con errori grammaticali. Ad esempio, ::grammar-error selezionerà il testo
            con errori grammaticali.</p>
        <p>::spelling-error: Seleziona il testo con errori di ortografia. Ad esempio, ::spelling-error selezionerà il
            testo con errori di ortografia.</p>
        <p>::before-page e ::after-page: Questi pseudo-elementi consentono di inserire contenuto prima e dopo il
            contenuto di una pagina stampata.</p>





        <button class="light">
            Hover over me
        </button>












</x-layout>
