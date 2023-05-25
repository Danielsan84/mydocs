<x-layout>
    <div class="container-fluid">
        <h1 class="text-center">This is htm5</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container-html">
                    <ol>
                        <h6>Ecco una lista delle categorie di tag HTML comuni che puoi utilizzare per organizzare il
                            tuo contenuto:</h6>
                        <li>Tag di testo:</li>
                        <p>Questi tag vengono utilizzati per definire e formattare il testo, ad esempio h1 per i titoli
                            principali, p per i paragrafi, span per porzioni di testo specifiche, strong per il testo in
                            grassetto, em per il testo in corsivo, u per il testo sottolineato, etc.</p>
                        <li>Tag di layout:</li>
                        <p>Questi tag vengono utilizzati per creare la struttura e il layout della pagina, ad esempio
                            div per i contenitori generici, header per l'intestazione, nav per la navigazione, main per
                            il contenuto principale, footer per il piè di pagina, section per le sezioni di contenuto,
                            article per gli articoli autonomi, etc.</p>
                        <li>Tag di elenchi:</li>
                        <p>Questi tag vengono utilizzati per creare elenchi di elementi, ad esempio ul per elenchi non
                            ordinati, ol per elenchi ordinati, li per gli elementi di un elenco, dl per elenchi di
                            definizioni, dt per i termini di definizione, dd per le definizioni stesse.</p>
                        <li>Tag multimediali:</li>
                        <p>Questi tag vengono utilizzati per incorporare contenuti multimediali come immagini, audio e
                            video, ad esempio img per le immagini, audio per i file audio, video per i file video,
                            iframe per incorporare contenuti da altre pagine o servizi, etc.</p>
                        <li>Tag di collegamento:</li>
                        <p>Questi tag vengono utilizzati per creare collegamenti ipertestuali, ad esempio a per i link,
                            link per i collegamenti a fogli di stile esterni, nav per la navigazione, etc.</p>
                        <li>Tag di form:</li>
                        <p>Questi tag vengono utilizzati per creare moduli e campi di input, ad esempio form per i
                            moduli, input per i campi di input, button per i pulsanti, select per le liste di selezione,
                            textarea per i campi di testo multi-linea, etc.</p>
                        <li>Altri tag:</li>
                        <p> Ci sono molti altri tag HTML disponibili per scopi specifici, come table per le tabelle, hr
                            per le linee orizzontali, blockquote per i blocchi di citazioni, abbr per le abbreviazioni,
                            code per il codice, cite per le citazioni, etc.</p>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container-spiega">
                    <ol>
                        <li>Il TAG DIV:</li>
                        <p>Il div è un contenitore che può contenere altri elementi html, ha comportamento
                            bloccante,cioè occupa tutto lo spazio orizzontale, quindi tutti gli elementi dopo questo div
                            vanno a capo.</p>
                        <span class="descr_esempio"> In questo esempio abbiamo dato colore a tutto il div con la scritta
                            "Ciaone"</span>
                        <div style="background-color: burlywood">Ciaone</div>
                        <div>Ciaone</div>
                        <div>Ciaone</div>
                        <div>Ciaone</div>
                        <hr>
                        <li>IL TAG SPAN:</li>
                        <p>Lo span è un contenitore che può contenere altri elementi html, ha comportamento inline
                            quindi occupa solo lo spazio del contenuto relativo al singolo span e non va a capo e si usa
                            per canzoni e poesie.</p>
                        <span class="descr_esempio">In questo esempio abbiamo dato colore solo allo spazio che occupa lo
                            SPAN</span>
                        <span style="background-color: burlywood">Ciaone</span>
                        <span>Ciaone</span>
                        <span>Ciaone</span>
                        <span>Ciaone</span>
                        <hr>
                        <li>Il TAG P=PARAGRAFO:</li>
                        <p>Il paragrafo ha comportamento bloccante come il div e crea uno spazio fra paragrafi di
                            default.</p>
                        <hr>
                        <li>Il TAG BR serve per mandare a CAPO.</li>
                        <span>In questo esempio abbiamo usato il br per una poesia, in visual code è una riga.</span>
                        <p>Mattina ( Giuseppe Ungaretti ): <br> <br> M'illumino <br> d'immenso. <br> </p>
                        <hr>
                        <li>Il TAG HR serve per creare una linea orizzontale come in questo caso.</li>
                        <hr>
                        <li>Il TAG A serve per inserire un link.</li>
                        <a href="https://www.google.com/">Google</a>
                        <hr>
                        <p>tag ipertestuaLi aggiungere target=_self per rimanere nella stessa tab con _blank apre un
                            altra tab.</p>
                        {{-- ./home --}}
                        <a href="{{ route('home') }}" target="_blank">Home</a>
                        <hr>
                        <li>Il TAG I serve per inserire un testo in corsivo.</li>
                        <i>Questo testo è in corsivo</i>
                        <hr>
                        <li>Il TAG B serve per inserire un testo in grassetto.</li>
                        <b>Questo testo è in grassetto</b>
                        <hr>
                        <li>Il TAG U serve per inserire un testo sottolineato.</li>
                        <u>Questo testo è sottolineato</u>
                        <hr>
                        <li>Il TAG STRONG serve per inserire un testo in grassetto.</li>
                        <strong>Questo testo è in grassetto</strong>
                        <hr>
                        <li>Il TAG EM serve per inserire un testo in corsivo.</li>
                        <em>Questo testo è in corsivo</em>
                        <hr>
                        <li>Il TAG DEL serve per inserire un testo barrato.</li>
                        <del>Questo testo è barrato</del>
                        <hr>
                        <li>Il TAG INS serve per inserire un testo sottolineato.</li>
                        <ins>Questo testo è sottolineato</ins>
                        <hr>
                        <li>Il TAG SUB serve per inserire un testo in pedice.</li>
                        <sub>Questo testo è in pedice</sub>
                        <p> H<sub>2</sub>O</p>
                        <hr>
                        <li>Il TAG SUP serve per inserire un testo in apice.</li>
                        <sup>Questo testo è in apice</sup>
                        <p> H<sup>2</sup>O</p>
                        <hr>
                        <li>Il TAG Q serve per inserire un testo in virgolette.</li>
                        <q>Questo testo è in virgolette</q>
                        <hr>
                        <li>Il TAG IMG serve per inserire un'immagine.</li>
                        <img src="{{ asset('media\città-matrix.png') }}" alt="città -matrix" width="650"
                            eight="350">
                        <hr>
                        <li>IL TAG VIDEO serve per inserire un video.</li>
                        <video width="320" height="240" controls>
                            <source src="{{ asset('media\video.mp4') }}" type="video/mp4">
                            <source src="{{ asset('media\video.ogg') }}" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <hr>
                        <li>Il TAG AUDIO serve per inserire un audio.</li>
                        <audio controls>
                            <source src="{{ asset('media\audio.mp3') }}" type="audio/mpeg">
                            <source src="{{ asset('media\audio.ogg') }}" type="audio/ogg">
                            Your browser does not support the audio element.
                        </audio>
                        <hr>
                        <li>Il TAG IFRAME serve per inserire un iframe.</li>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.630742821031!2d9.1904983155671!3d45.46421197910001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c7b0b0b0b0b9%3A0x3b0b0b0b0b0b0b0b!2sVia%20Giovanni%20Battista%20Pirelli%2C%2020133%20Milano%20MI!5e0!3m2!1sit!2sit!4v1623345050009!5m2!1sit!2sit"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <hr>
                        <li>IL TAG h= heading per i titoli e si mette solo un h1 in una pagina perchè fà problemi la
                            seo.</li>
                        <h1>Titolo</h1>
                        <h2>Titolo</h2>
                        <h3>Titolo</h3>
                        <h4>Titolo</h4>
                        <h5>Titolo</h5>
                        <h6>Titolo</h6>
                        <hr>
                        <li>IL TAG l=lista</li>
                        <p></p>
                        <p>lista non ordinata</p>
                        <ul>
                            <li>uno</li>
                            <li>due</li>
                            <li>tre</li>
                            <li>tre</li>
                            <li>tre</li>
                        </ul>

                        <ul>
                            <li>lista:
                                <ul>
                                    <li>lista
                                        <ul>
                                            <li>lista</li>
                                            <li>lista</li>
                                            <li>lista</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p></p>
                        <p>lista ordinata</p>
                        <ol>
                            <li>uno</li>
                            <li>due</li>
                            <li>tre</li>
                            <li>tre</li>
                            <li>tre</li>
                        </ol>
                        <p></p>
                        <p>lista di definizione/descrittiva</p>
                        <dl>
                            <dt>uno</dt>
                            <dd>descrizione</dd>
                            <dt>due</dt>
                            <dd>descrizione</dd>
                            <dt>tre</dt>
                            <dd>descrizione</dd>
                            <dt>tre</dt>
                            <dd>descrizione</dd>
                            <dt>tre</dt>
                            <dd>descrizione</dd>
                        </dl>

                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container-spiega">




                    <ol>
                        <li>IL TAG FORM.</li>
                        <form action="" method="post">
                            <input type="text" name="nome" id="">
                            <input type="text" name="cognome" id="">
                            <input type="submit" value="invia">
                        </form>
                        <hr>
                        <p>Nel tag input l id serve a collegare l input al label.</p>
                        <div>
                            <label for="name">Nome</label>
                            <input type="text" name="" id="name" placeholder="Inserisci il nome">
                            <button type="submit">invia</button>
                        </div>
                        <hr>
                        <p>Gli altri tipi di input sono:</p>
                        <input type="date" name="" id="">
                        <input type="datetime-local" name="" id="">
                        <input type="password">
                        <input type="email">
                        <input type="number">
                        <input type="text" name="nome" id="">
                        <input type="text" name="cognome" id="">
                        <input type="submit" value="invia">
                        <hr>
                        <li>IL TAG TEXTAREA:</li>
                        <p>è un elemento HTML utilizzato per creare un'area di testo modificabile all'interno di una
                            pagina
                            web. È simile all'elemento di input di testo input type="text", ma a differenza di
                            quest'ultimo, textarea consente agli utenti di inserire più righe di testo.</p>
                        <textarea rows="4" cols="50">
                            Questo è un esempio di un'area di testo.
                            Puoi inserire più righe di testo qui.
                            </textarea>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <hr>
                        <li>IL TAG SELECT:</li>
                        <p>è un elemento HTML utilizzato per creare un menu a discesa (dropdown) che permette agli
                            utenti di
                            selezionare una sola opzione da un elenco di scelte predefinite.</p>
                            <p>il tag option è l opzione che si può selezionare nel tag select e il tag value è il valore che si assegna all opzione. </p>

                        <select name="" id="">
                            <option value="1">Roma</option>
                            <option value="2">Milano</option>
                            <option value="3">Napoli</option>
                            <option value="4">Torino</option>
                        </select>
                        <hr>
                        <li>IL TAG BUTTON</li>
                        <button>invia</button>
                        <hr>
                        <li>IL TAG FIELDSET:</li>
                        <p>in HTML viene utilizzato per creare un gruppo di controlli di input all'interno di un modulo.
                            Viene solitamente combinato con il tag legend, che specifica una descrizione o un titolo per
                            il gruppo di controlli.Il tag HTML fieldset /fieldset viene utilizzato per raggruppare un insieme di elementi di modulo correlati all'interno di un modulo HTML. Viene spesso utilizzato in combinazione con il tag legend /legend, che fornisce una descrizione o un titolo per il gruppo di elementi racchiusi nel fieldset /fieldset.
                            L'uso di fieldset /fieldset aiuta a organizzare e strutturare i moduli HTML, rendendoli più comprensibili per gli utenti. Il tag fieldset /fieldset crea un riquadro visivo intorno al gruppo di elementi associati, delineando il loro confine.</p>
                        <form>
                            <fieldset>
                                <legend>Informazioni personali</legend>
                                <label for="name">Nome:</label>
                                <input type="text" id="name"><br>
                                <label for="email">Email:</label>
                                <input type="email" id="email"><br>
                                <!-- Altri controlli di input correlati -->
                            </fieldset>
                        </form>
                        <form>
                            <fieldset>
                                <legend>Informazioni personali</legend>
                                <label for="name">Nome:</label>
                                <input type="text" id="name" name="name"><br>
    
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email"><br>
    
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password"><br>
                            </fieldset>
    
                            <fieldset>
                                <legend>Preferenze</legend>
                                <label for="color">Colore preferito:</label>
                                <input type="color" id="color" name="color"><br>
    
                                <label for="food">Cibo preferito:</label>
                                <input type="text" id="food" name="food"><br>
                            </fieldset>
    
                            <button type="submit">Invia</button>
                        </form>
                        <hr>

                        <li>Il tag HTML optgroup /optgroup viene utilizzato all'interno di un elemento select /select per creare gruppi di opzioni correlate all'interno di un menu a discesa.
                            Il tag optgroup /optgroup aiuta a organizzare e strutturare le opzioni all'interno di un menu a discesa, consentendo di raggruppare insieme opzioni che hanno una relazione o un tema comune.</li>
                            
                            <select>
                                <optgroup label="Frutta">
                                    <option value="mela">Mela</option>
                                    <option value="banana">Banana</option>
                                    <option value="arancia">Arancia</option>
                                </optgroup>
                                <optgroup label="Verdura">
                                    <option value="carota">Carota</option>
                                    <option value="peperone">Peperone</option>
                                    <option value="zucchina">Zucchina</option>
                                </optgroup>
                            </select>                        
                                                    
                               <hr>
                               <li>Il tag HTML menu /menu viene utilizzato per definire un menu o un elenco di comandi all'interno di una pagina web.
                                Tuttavia, è importante notare che il tag menu /menu è stato deprecato in HTML5 ed è considerato obsoleto. Pertanto, è sconsigliato utilizzarlo nelle nuove implementazioni e si consiglia invece di utilizzare tag semantici appropriati come <ul></ul> (elenco non ordinato) o ol /ol (elenco ordinato) insieme a CSS per creare il menu.
                                Sebbene il tag menu /menu sia stato deprecato, era originariamente utilizzato per creare menu di navigazione o elenchi di comandi all'interno di un'applicazione web. Poteva contenere elementi come li /li (elementi di lista) per rappresentare le voci del menu o i comandi.</li>
                                
                                <menu>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Profilo</a></li>
                                    <li><a href="#">Impostazioni</a></li>
                                    <li><a href="#">Esci</a></li>
                                </menu>                         
                                                         
                                                            
                                 <hr>
                        <li>IL TAG TABLE:</li>
                        <p>viene utilizzato per creare una tabella che contiene righe e colonne.</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Cognome</th>
                                    <th>Età</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nome</td>
                                    <td>Cognome</td>
                                    <td>Età</td>
                                </tr>
                                <tr>
                                    <td>Nome</td>
                                    <td>Cognome</td>
                                    <td>Età</td>
                                </tr>
                                <tr>
                                    <td>Nome</td>
                                    <td>Cognome</td>
                                    <td>Età</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Nome</td>
                                    <td>Cognome</td>
                                    <td>Età</td>
                                </tr>
                            </tfoot>
                        </table>
                        <hr>
                        <li> Il tag HTML caption viene utilizzato all'interno di un elemento di tabella table per fornire una didascalia o un titolo alla tabella. È importante notare che il tag caption non è obbligatorio, e una tabella può funzionare anche senza di esso. Tuttavia, l'uso del tag caption può migliorare l'accessibilità e la comprensione della tabella da parte degli utenti, specialmente quelli che utilizzano screen reader.</li>
                        <li>Il tag HTML thead viene utilizzato all'interno di un elemento di tabella table per definire l'intestazione della tabella. Contiene di solito una o più righe ( tr ) che rappresentano l'intestazione delle colonne della tabella.</li>

                        <table>
                            <caption>Lista di persone</caption>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Cognome</th>
                                    <th>Età</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nome</td>
                                    <td>Cognome</td>
                                    <td>Età</td>
                                </tr>
                                <tr>
                                    <td>Nome</td>
                                    <td>Cognome</td>
                                    <td>Età</td>
                                </tr>
                                <tr>
                                    <td>Nome</td>
                                    <td>Cognome</td>
                                    <td>Età</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Nome</td>
                                    <td>Cognome</td>
                                    <td>Età</td>
                                </tr>
                            </tfoot>
                        <hr>
                        <li>Il tag HTML colgroup viene utilizzato all'interno di un elemento di tabella table per definire un gruppo di colonne con proprietà comuni. L'uso del tag colgroup può essere utile per applicare stili o attribuire a un gruppo di colonne, come sfondi, allineamenti, larghezze, ecc. Inoltre, può semplificare il codice HTML quando si desidera applicare proprietà comuni a più colonne</li>
                        
                        <table>
                            <colgroup>
                                <col style="background-color: rgb(58, 73, 163);">
                                <col span="2" style="background-color: rgb(9, 76, 98);">
                            </colgroup>
                            <tr>
                                <th>Nome</th>
                                <th>Età</th>
                                <th>Città</th>
                            </tr>
                            <tr>
                                <td>Mario</td>
                                <td>25</td>
                                <td>Roma</td>
                            </tr>
                            <tr>
                                <td>Luigi</td>
                                <td>30</td>
                                <td>Milano</td>
                            </tr>
                        </table>
                        <li>Il tag HTML tbody viene utilizzato all'interno di un elemento di tabella table per raggruppare il contenuto delle righe della tabella in un corpo principale.</li>


                        <hr>
                        <li>La costruzione home giusta per la seo.</li>
                        <textarea name="" id="" cols="30" rows="10">
                        <nav>
                            <a href="">link</a>
                        </nav>                
                        <p>Costruzione pagina html</p>
                        <header>
                            <h1>Titolo</h1>
                            <img src="" alt="">
                        </header>
                        <main>
                            <section>
                                <h2>Titolo</h2>
                                <p>Paragrafo</p>
                            </section>
                        </main>
                        <footer>

                        </footer>
                        </textarea>
                        <hr>
                        {{-- tag semantici cioè comunicano qualcosa al programma --}}

                        <li>IL TAG ASIDE:</li>
                        <p> viene utilizzato per rappresentare un contenuto collegato al contenuto principale della pagina, ma che non è essenziale per la comprensione del contenuto principale stesso.&#160;Il contenuto all'interno del tag aside è spesso utilizzato per fornire informazioni di supporto, come ad esempio: notizie correlate, link a risorse correlate pubblicità, note o dettagli aggiuntivi su un argomento. Il tag aside può essere utilizzato all'interno di un tag        article, section o div, ed è spesso posizionato in un'area laterale della pagina o in una sezione separata.</p>

                        <nav></nav>
                        <article>
                            <h2>Titolo dell'articolo</h2>
                            <p>Contenuto principale dell'articolo</p>
                            <aside>
                                <h3>Informazioni correlate</h3>
                                <ul>
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a></li>
                                </ul>
                            </aside>
                        </article>
                        <hr>
                        <li>IL TAG DETAILS:</li>
                        <p>Il tag details viene utilizzato per creare un elemento espandibile che mostra o nasconde
                            ulteriori dettagli o formazioni quando l'utente interagisce con esso. È spesso utilizzato
                            per
                            fornire contenuti aggiuntivi o opzioni nascoste in modo da mantenere la pagina più pulita e
                            compatta.</p>
                        <p>
                        <details>
                            <summary>Mostra dettagli</summary>
                            <p>Contenuto aggiuntivo che può essere visualizzato o nascosto.</p>
                        </details>
                        </p>
                        <p>altro esempio, Puoi anche avere più elementi details all'interno della tua pagina, o annidare
                            altri elementi HTML
                            all'interno dell'elemento details per creare una struttura più complessa.</p>
                        <p>
                        <details>
                            <summary>Sezione 1</summary>
                            <p>Contenuto della sezione 1.</p>
                            <details>
                                <summary>Sotto-sezione 1</summary>
                                <p>Contenuto della sotto-sezione 1.</p>
                            </details>
                        </details>
                        </p>
                        <p>In questo caso, abbiamo un elemento details che contiene una sezione principale e una
                            sotto-sezione. La sotto-sezione sarà nascosta finché l'utente non interagirà con essa.</p>
                        <p>È importante notare che il comportamento preciso del tag details può variare tra i diversi
                            browser. Alcuni browser possono mostrare i dettagli come elementi espandibili di default,
                            mentre
                            altri possono richiedere l'uso di CSS o JavaScript per controllare l'espansione e la
                            visualizzazione dei dettagli.</p>
                        <p>Il tag summary in HTML viene utilizzato all'interno di un elemento details per fornire una
                            breve
                            descrizione o un titolo per l'elemento espandibile. Funge da intestazione o etichetta per il
                            contenuto nascosto che può essere visualizzato o nascosto quando l'utente interagisce con
                            l'elemento details.</p>
                        <hr>
                        <li>IL TAG DIALOG:</li>
                        <p>definisce un pulsante HTML con l'attributo onclick che richiama la funzione openDialog().
                            Inoltre, hai creato un elemento dialog con un attributo id e un contenuto all'interno di
                            esso.
                            L'attributo id viene utilizzato per identificare la finestra di dialogo e può essere
                            utilizzato
                            per riferirsi ad essa nel tuo codice JavaScript.</p>
                        <p>Quando l'utente fa clic sul pulsante "Apri finestra di dialogo", viene attivato l'evento
                            onclick,
                            che a sua volta richiama la funzione openDialog(). La funzione openDialog() dovrebbe essere
                            definita nel tuo codice JavaScript e può essere utilizzata per mostrare la finestra di
                            dialogo.
                        </p>
                        <p>L'elemento dialog rappresenta la finestra di dialogo stessa. L'attributo id viene utilizzato
                            per
                            identificarla e può essere utilizzato per riferirsi ad essa nel tuo codice JavaScript.
                            All'interno dell'elemento dialog, hai un paragrafo di contenuto e un pulsante "Chiudi" con
                            un
                            attributo onclick che richiama la funzione closeDialog().</p>
                        <button onclick="openDialog()">Apri finestra di dialogo</button>

                        <dialog id="myDialog">
                            <p>Contenuto della finestra di dialogo.</p>
                            <button onclick="closeDialog()">Chiudi</button>
                        </dialog>

                        <script>
                            function openDialog() {
                                var dialog = document.getElementById("myDialog");
                                dialog.showModal();
                            }

                            function closeDialog() {
                                var dialog = document.getElementById("myDialog");
                                dialog.close();
                            }
                        </script>
                        <hr>
                        <li>Il tag mark:</li>
                        <p>Questo è un esempio di testo <mark>evidenziato</mark> con il tag mark.</p>
                        <p>Il tag HTML mark viene utilizzato per evidenziare un testo all'interno di un paragrafo o di
                            un
                            altro elemento di testo. Questo tag viene spesso utilizzato per indicare parti di un testo
                            che
                            sono importanti, rilevanti o necessitano di attenzione.</p>
                        <mark></mark>
                        <hr>
                        <li>IL TAG TIME:</li>
                        <p>Il tag HTML time viene utilizzato per rappresentare una data, un'ora o una combinazione di
                            dati e
                            ora all'interno di un documento HTML. Il tag time offre una semantica specifica per
                            rappresentare dati temporali nel markup HTML, fornendo contesto e struttura al tuo contenuto
                            relativo al tempo.</p>
                        <p>L'evento si terrà il <time datetime="2023-05-20">20 maggio 2023</time> alle 14:00.</p>
                        <time></time>
                        <hr>
                        <li>IL TAG PROGRESS:</li>
                        <p>viene utilizzato per creare una barra di avanzamento o un indicatore visivo che rappresenta
                            lo
                            stato di completamento di un'attività o di un processo. Puoi personalizzare ulteriormente
                            l'aspetto della barra di avanzamento utilizzando CSS per adattarla al design della tua
                            pagina.
                            Puoi specificare attributi di stile come il colore di sfondo, il colore di riempimento, la
                            dimensione, l'animazione e altro ancora.</p>

                        <progress value="50" max="100"></progress>
                        {{-- Il tag HTML <progress>viene utilizzato per creare una barra di avanzamento o un indicatore visivo che rappresenta lo stato di completamento di un'attività o di un processo. --}}
                        {{-- Puoi personalizzare ulteriormente l'aspetto della barra di avanzamento utilizzando CSS per adattarla al design della tua pagina. Puoi specificare attributi di stile come il colore di sfondo, il colore di riempimento, la dimensione, l'animazione e altro ancora.

                         È possibile aggiornare dinamicamente il valore della barra di avanzamento utilizzando JavaScript. Ad esempio, puoi impostare il valore valuedel tag <progress>in base allo stato di completamento dell'attività o del processo in corso.

                         È importante notare che il supporto per il tag <progress>può variare tra i diversi browser. Alcuni browser potrebbero mostrare la barra di avanzamento come una barra con una percentuale di completamento, mentre altri potrebbero fornire un'indicazione visiva diversa.

                       Inoltre, puoi fornire un fallback testuale per i browser che non supportano il tag <progress>, inserendo un testo di fallback all'interno del tag <progress>. Ad esempio: --}}
                        <progress value="50" max="100">50%</progress>
                        {{-- Inoltre, puoi utilizzare attributi e metodi JavaScript per manipolare dinamicamente il valore e lo stato della barra di avanzamento. Ad esempio, puoi aggiornare il valore della barra di avanzamento durante l'esecuzione di un'operazione per mostrare il progresso in tempo reale.  --}}
                        <progress id="myProgress" value="0" max="100"></progress>
                        <p> Esempio di aggiornamento del progresso ogni secondo:</p>
                        <pre><code>
                            var progress = document.getElementById("myProgress");
                  
                          function updateProgress(value) {
                              progress.value = value;
                          }                 
                           
                              var counter = 0;
                             setInterval(function() {
                               counter += 10;
                               updateProgress(counter);
                             }, 1000);
                        </code></pre>

                        {{-- Esempio di aggiornamento del progresso ogni secondo --}}
                        {{-- <script>
                          var progress = document.getElementById("myProgress");
                  
                          function updateProgress(value) {
                              progress.value = value;
                          }                 
                           
                              var counter = 0;
                             setInterval(function() {
                               counter += 10;
                               updateProgress(counter);
                             }, 1000);
                      </script>  --}}
                        <progress></progress>
                        <hr>
                        <li>IL TAG METER:</li>
                        <p>viene utilizzato per rappresentare una misurazione o un scalato all'interno di un intervallo
                            specifico. Può essere utilizzato per mostrare il progresso, il livello di completamento, la
                            capacità o altre misure simili.Assicurati di fornire una descrizione testuale significativa
                            all'interno del tag meter, in modo che sia accessibile agli utenti che non possano
                            visualizzare
                            la rappresentazione visiva del tag, ad esempio tramite screen reader.</p>
                        <meter value="75" min="0" max="100">75%</meter>
                        <meter></meter>
                        <hr>
                        <li>IL TAG CODE:</li>
                        <p>viene utilizzato per rappresentare un frammento di codice o testo preformattato all'interno
                            di
                            una pagina web. Viene utilizzato per evidenziare il codice e renderlo distintivo dal resto
                            del
                            testo.</p>
                        <p>Per visualizzare l'output a schermo in JavaScript, puoi utilizzare il tag code:
                            <code>console.log()</code>.
                        </p>
                        <p>Il tag HTML code viene utilizzato per rappresentare un frammento di codice. Il contenuto del
                            tag
                            code è tipicamente visualizzato in un font monospace. Il tag code è spesso utilizzato per
                            visualizzare il codice di programmazione. Inoltre, se si desidera mostrare più righe di
                            codice o
                            un blocco di codice completo, è possibile utilizzare il tag pre insieme al tag code. Il tag
                            pre
                            conserva la formattazione del testo, inclusi spazi, ritorni a capo e indentazioni. Ecco un
                            esempio di come utilizzare il tag pre insieme al tag code:</p>
                        <pre><code>function sayHello() {
                                  console.log("Hello World!");
                                }</code></pre>
                        <p>Il tag HTML pre viene utilizzato per rappresentare il testo preformattato. Il testo
                            all'interno
                            del tag pre viene visualizzato in un font monospace e conserva gli spazi, i ritorni a capo e
                            le
                            altre spaziature del testo. Il tag pre è spesso utilizzato per visualizzare il codice di
                            programmazione. Inoltre, se si desidera mostrare più righe di codice o un blocco di codice
                            completo, è possibile utilizzare il tag pre insieme al tag code. Il tag pre conserva la
                            formattazione del testo, inclusi spazi, ritorni a capo e indentazioni.</p>
                        <code></code>
                    </ol>

                </div>
            </div>
        </div>
    </div>


    <div class="container-spiega">

        <ol>

            <li>IL TAG VAR:</li>
            <p>viene utilizzato per rappresentare una variabile in un contesto matematico o di programmazione. Il tag
                var può
                essere utilizzato per rappresentare una variabile in un contesto matematico o di programmazione. Il
                contenuto
                del tag var è tipicamente visualizzato in un font corsivo.</p>
            <p>La formula per calcolare l'area di un cerchio è: <var>π</var> * <var>r</var> * <var>r</var>
            </p>
            <hr>
            <li>IL TAG SAMP:</li>
            <p>viene utilizzato per rappresentare un campione di output da un programma, un computer o un altro
                dispositivo. Il
                contenuto del tag samp è tipicamente visualizzato in un font monospace.</p>
            <p>L'output del programma è <samp>Hello, World!</samp></p>
            <hr>
            <li>IL TAG KBD:</li>
            <p>viene utilizzato per rappresentare un input del dispositivo utente, come un tasto dellatastiera, un
                comando di
                mouse o un gesto di trackpad. Il contenuto del tag kbd è tipicamente visualizzato in un font monospace.
                Il tag
                kbd è spesso utilizzato per visualizzare i tasti della tastiera.</p>
            <p>Per salvare un documento in Microsoft Word, premi <kbd>Ctrl</kbd> + <kbd>S</kbd>.</p>
            <p>Per copiare il testo selezionato, premi <kbd>Ctrl</kbd> + <kbd>C</kbd>.</p>
            <hr>
            <li>IL TAG DFN:</li>
            <p>Il tag HTML dfn viene utilizzato per rappresentare il termine definito all'interno di un documento. Il
                contenuto
                del tag dfn è tipicamente visualizzato in un font corsivo.</p>
            <p>Il termine <dfn>HTML</dfn> significa HyperText Markup Language.</p>
            <hr>
            <li>IL TAG ABBR:</li>
            <p>viene utilizzato per rappresentare un'abbreviazione o un acronimo. Il contenuto del tag abbr è
                tipicamente
                visualizzato in un font corsivo.</p>
            <p>Il termine <abbr title="HyperText Markup Language">HTML</abbr> significa HyperText Markup Language.</p>
            <hr>
            <li>IL TAG BLOCKQUOTE:</li>
            <p>viene utilizzato per citare testo da un'altra fonte o per creare un blocco di testo con rientro a
                sinistra. Viene
                utilizzato per evidenziare un estratto di testo che proviene da un'altra fonte, come un articolo, un
                libro o un
                discorso.</p>
            <p>Nell'esempio sotto, abbiamo un blocco di citazione blockquote che racchiude un paragrafo p con il testo
                da
                citare. All'interno del blocco di citazione, è anche possibile includere un elemento cite per
                specificare
                l'autore o la fonte della citazione. Il tag blockquote viene solitamente visualizzato con un rientro a
                sinistra
                e, a seconda del browser e del CSS applicato, può avere uno stile di blocco o una barra verticale sul
                lato
                sinistro per indicare l'inizio della citazione.</p>
            <blockquote>
                <li>Il tag HTML CITE:</li>
                <p>La conoscenza è potere.</p>
                <cite>Francis Bacon</cite>
            </blockquote>
            <hr>
            <li>IL TAG ADDRESS:</li>
            <p>il tag address viene utilizzato per indicare le informazioni di contatto o l'indirizzo di un autore o di
                una
                sezione di contatti all'interno di un documento HTML. Viene spesso utilizzato per fornire informazioni
                come
                l'indirizzo e-mail, il numero di telefono, l'indirizzo fisico o altre informazioni di contatto.</p>
            <address>
                <strong>OpenAI Headquarters</strong><br>
                123 Main Street<br>
                Cityville, State 12345<br>
                Country
            </address>
        </ol>
    </div>




    {{--  --}}














    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container-spiega">

                    <ol>
                        <li>Il tag HTML bdo viene utilizzato per specificare la direzione di scrittura del testo all'interno di un documento HTML. L'acronimo "bdo" sta per "Bi-Directional Override" (sovrascrittura bidirezionale). Il tag bdo è utile quando si desidera sovrascrivere la direzione di scrittura predefinita di un testo, che può essere da sinistra a destra (come in inglese) o da destra a sinistra (come in arabo o ebraico). Nell'esempio sopra, il testo "Questo testo è scritto da destra a sinistra" è racchiuso tra i tag bdo e bdo, e l'attributo dirviene utilizzato per specificare la direzione di scrittura come "rtl" (right-to-left).</li>
                 

                    <bdo dir="rtl">Questo testo è scritto da destra a sinistra.</bdo>
                    {{--   --}}
                    <bdo></bdo>

                    <hr>

                    <li>il tag HTML dfn viene utilizzato per definire un termine in un documento HTML. L'acronimo "dfn" sta per "Definition".
                        Il tag dfn viene utilizzato per marcare una parola o una frase all'interno di un testo HTML come termine definito, il cui significato può essere fornito da un'altra parte del testo, da un glossario o da un dizionario. Il contenuto del tag dfn è il termine stesso che si sta definendo.</li>

                    <p>La <dfn>programmazione</dfn> è l'arte di scrivere istruzioni per il computer.</p>
                    {{--  --}}
                    <dfn></dfn>

                    <hr>

                    <li>Il tag HTML ruby viene utilizzato per creare annotazioni di testo, noti anche come "ruby text". Questo tag viene spesso utilizzato nella scrittura di lingue asiatiche come il giapponese o il cinese, dove è comune fornire una pronuncia o una spiegazione di caratteri o parole complesse. in questo esempio, i caratteri "漢" e "字" rappresentano i caratteri cinesi per "Kanji" e "Carattere" rispettivamente. Le pronunce giapponesi di questi caratteri sono fornite all'interno dei tag rt. Il browser visualizzerà le pronunce come annotazioni di testo sopra o accanto ai caratteri.
                        Il tag ruby viene utilizzato insieme ad altri due tag: rt (ruby text) e rp (ruby parentheses).</li>

                    <ruby>
                        漢 <rt>かん</rt>
                        字 <rt>じ</rt>
                    </ruby>
                    {{--   --}}

                    <hr>

                    <li>Il tag rp viene utilizzato per fornire una rappresentazione alternativa dell'annotazione di testo nei browser che non supportano o non visualizzano le annotazioni ruby. Di solito, viene utilizzato per mostrare parentesi tonde che racchiudono l'annotazione di testo. Ad esempio:</li>

                    {{--  --}} 
                    <ruby>
                        漢 <rt>かん</rt>
                        <rp>(</rp>kan<rp>)</rp>
                        字 <rt>じ</rt>
                        <rp>(</rp>ji<rp>)</rp>
                    </ruby>
                    {{-- In questo caso, se il browser non supporta le annotazioni ruby, verranno visualizzate le parentesi tonde con le pronunce in mezzo.
È importante notare che il supporto per il tag <ruby>può variare tra i browser ei dispositivi. Quindi, potrebbe non essere visualizzato correttamente su tutti i o dispositivi browser. --}}
                    <ruby></ruby>
<hr>

















                    {{-- si usa come sopra --}}
                    <rt></rt>

                    <li>Il tag HTML RT DA FARE viene utilizzato insieme al tag ruby per fornire una rappresentazione alternativa dell'annotazione di testo ruby ​​nei browser che non supportano o non visualizzano le annotazioni ruby.
Il tag rp viene utilizzato per specificare il testo che verrà visualizzato al di fuori delle annotazioni ruby, generalmente sotto forma di parentesi tonde. Questo testo è utile per assicurarsi che l'annotazione ruby ​​abbia un fallback visivo leggibile anche su browser o dispositivi che non supportano le annotazioni ruby.</li>

                    {{--  --}}
                    <rp></rp>

                    <hr>

                    <li>Il tag HTML wbr viene utilizzato per indicare un possibile punto di rottura delle parole all'interno di un testo. L'acronimo "wbr" sta per "word break opportunities" (opportunità di rottura delle parole).
Questo tag viene utilizzato per suggerire al browser di inserire una possibile rottura di parola in un punto specifico nel testo, se necessario, per adattare al layout della pagina o alle dimensioni del contenitore.</li>

                    <p>Questo testo potrebbe contenere una parola molto lunga come:
                        pneumoultramicroscopicsilicovolcanoconiosi<wbr>.</p>
                    {{--  --}}
                    <wbr>
                        <hr>

                        <li>Il tag HTML canvas viene utilizzato per creare una regione all'interno di una pagina web in cui è possibile disegnare grafica, animazioni, grafici e altro ancora utilizzando JavaScript.
                            Il tag canvas fornisce uno spazio di disegno vuoto in cui puoi utilizzare JavaScript per manipolare i pixel e creare contenuti grafici interattivi. Per poter disegnare sul canvas, devi utilizzare le API di disegno fornite dallo standard HTML5 chiamato "Canvas API". In questo esempio, abbiamo ottenuto il riferimento al canvas utilizzando getElementByIde creato un oggetto di contesto 2D ( ctx) utilizzando il metodo getContext('2d'). Successivamente, abbiamo utilizzato il metodo fillRectper disegnare un rettangolo rosso sulla tela. vedere in script.js Le API di disegno fornite dalla Canvas API consentono di disegnare forme, linee, testo, immagini e altro ancora sulla tela. È possibile applicare trasformazioni, gestire eventi e creare animazioni utilizzando JavaScript.
                                               

                    <canvas id="myCanvas" width="500" height="300"></canvas>
                    {{-- Successivamente, utilizzando JavaScript, puoi ottenere il riferimento al canvas e utilizzare le API di disegno per creare grafica, animazioni e altro ancora. Ad esempio: --}}
                    const canvas = document.getElementById('myCanvas');
                    const ctx = canvas.getContext('2d');

                    // Esempio di disegno di un rettangolo rosso
                    ctx.fillStyle = 'red';
                    ctx.fillRect(50, 50, 200, 100);
                    {{--  --}}
                    <canvas></canvas>

                    <hr>

                    <li>Il tag HTML noscript viene utilizzato per fornire un contenuto alternativo da mostrare quando lo scripting (solitamente JavaScript) non è supportato o è disabilitato nel browser dell'utente.
Quando un browser incontra il tag noscript, visualizza il contenuto compreso tra i tag noscript e /noscript solo se lo scripting non è disponibile. Questo può essere utile per fornire istruzioni o avvisi agli utenti che hanno disabilitato lo scripting nel loro browser o che utilizzano un browser che non supporta lo scripting.</li>

                    <noscript>
                        <p>Il tuo browser non supporta JavaScript o lo hai disabilitato. Abilita JavaScript per
                            visualizzare
                            correttamente questa pagina.</p>
                    </noscript>
                    {{--   --}}
                    <noscript></noscript>

                    <hr>

                    <li>Il tag HTML datalist viene utilizzato insieme al tag input per fornire una lista predefinita di opzioni per l'utente durante l'inserimento di dati in un modulo web.
Il tag datalist viene utilizzato come contenitore per gli elementi option che seleziona le possibili scelte o suggerimenti per l'utente. Queste opzioni vengono richieste come suggerimenti durante l'interazione con un campo di input associato.</li>

                    <input list="fruits" name="fruit">
                    <datalist id="fruits">
                        <option value="Mela">
                        <option value="Banana">
                        <option value="Arancia">
                        <option value="Pera">
                    </datalist>
                    {{--  --}}
                    <datalist></datalist>

                    <hr>

                    <li>Il tag HTML output viene utilizzato per visualizzare il risultato di un calcolo o di un'operazione all'interno di un modulo web.
                        Il tag output può essere utilizzato in combinazione con elementi di input, come input o select, per indicare il campo in cui verrà visualizzato il risultato. In questo esempio, abbiamo un semplice form con due campi di input numerici inputcon gli ID "a" e "b". Il risultato della somma di questi due campi viene calcolato utilizzando l'attributo oninputdel tag form e viene visualizzato nel tag output.
                        Quando l'utente include o modifica i valori nei campi di input "a" e "b", l'attributo oninputviene attivato e viene eseguita la funzione JavaScript specificata. In questo caso, la funzione calcola la somma dei valori e assegna il risultato all'elemento output con il nome "result".
                        Il contenuto dell'elemento output può essere aggiornato utilizzando JavaScript o tramite l'attributo oninputo altri eventi che si verificano nel form.
                        L'utilizzo del tag output fornisce un modo conveniente per visualizzare il risultato di un calcolo o di un'operazione all'interno del contesto del modulo web.</li>

                    <form oninput="result.value = parseInt(a.value) + parseInt(b.value)">
                        <input type="number" id="a" name="a">
                        +
                        <input type="number" id="b" name="b">
                        =
                        <output name="result"></output>
                    </form>
                    {{--  --}}
                    <output></output>

                    <hr>

                    <li>Il tag HTML iframe viene utilizzato per incorporare un'altra pagina web all'interno di una pagina web principale. L'acronimo "iframe" sta per "Inline Frame" (frame incorporato).
Quando utilizzi il tag iframe, puoi specificare l'URL della pagina web che desideri incorporare tramite l'attributo src. Il browser caricherà quindi quella pagina web all'interno del frame dell'iframe e la visualizzerà all'interno della pagina principale. Tuttavia, è importante notare che l'utilizzo di iframe per incorporare contenuti di altre pagine web può comportare alcune considerazioni di sicurezza.</li>

                    <iframe src="https://www.example.com"></iframe>
                    {{--  --}}
                    <iframe src="https://www.example.com" width="500" height="300"></iframe>
                    {{-- Puoi anche incorporare contenuti da pagine web locali o relativi utilizzando percorsi di file anziché URL. Ad esempio: --}}
                    <iframe src="path/to/localpage.html"></iframe>
                    {{-- L'iframe può essere personalizzato ulteriormente utilizzando altri attributi, come frameborderper impostare i bordi del frame, allowfullscreenper consentire la visualizzazione a schermo intero del contenuto dell'iframe e molti altri. --}}
                    <iframe></iframe>

                    <hr>

                    <li>Il tag HTML embed viene utilizzato per incorporare o inserire contenuti multimediali, come audio, video, immagini o altri tipi di file, all'interno di una pagina web. L'acronimo "embed" sta per "embedded media", che significa "media incorporati".Il tag embed viene utilizzato principalmente per incorporare file multimediali esterni nel documento HTML. Puoi specificare l'URL del file da incorporare tramite l'attributo src. Puoi personalizzare ulteriormente l'elemento embed utilizzando attributi come width (larghezza), height (altezza), autoplay (riproduzione automatica), loop (riproduzione in loop) e molti altri, a seconda delle tue esigenze specifiche.Tuttavia, è importante notare che il supporto e il comportamento del tag embed possono variare tra i browser ei tipi di file multimediali supportati possono dipendere dalle capacità del browser stesso.In alternativa al tag embed, è possibile utilizzare anche altri tag HTML come video per i video, audio per l'audio o img per le immagini, che offrono funzionalità più avanzate e un supporto più ampio per i file multimediali.</li>

                    <embed src="path/to/video.mp4" type="video/mp4">
                    {{--  --}}
                    <embed>

                    <hr>

                    <li>Il tag HTML object viene utilizzato per incorporare oggetti multimediali, come file SWF (Flash), applet Java o contenuti interattivi, all'interno di una pagina web.
Il tag object consente di specificare l'URL o il percorso del file che si desidera incorporare tramite l'attributo datao src. Inoltre, è possibile fornire alternative testuali o fallback utilizzando il contenuto incluso tra i tag di apertura e chiusura object. Questo contenuto verrà visualizzato nel caso in cui l'oggetto non possa essere caricato o visualizzato correttamente dal browser. Alcuni browser potrebbero limitare il supporto per i plugin o le tecnologie obsolete come Flash o Java. Pertanto, è consigliabile utilizzare soluzioni alternative come l'utilizzo di tag HTML5 come video, audio, canvas o tecnologie come JavaScript per implementare funzionalità interattive.</li>

                    <object data="path/to/file.swf" type="application/x-shockwave-flash">
                       {{-- <p>Il tuo browser non supporta Flash. Scarica l'ultima versione del plugin Flash.</p> --}}
                    </object>
                    {{--  --}} <p></p>
                   
                    <hr>

                    <li>Il tag HTML param viene utilizzato all'interno del tag object o del tag applet per specificare i parametri o le opzioni di configurazione per l'oggetto o l'applet incorporato.
Il tag param viene utilizzato per passare valori specifici al codice dell'oggetto o dell'applet, consentendo di personalizzare il loro comportamento o la visualizzazione. È importante notare che l'utilizzo dei tag object ed param è principalmente associato a tecnologie obsolete come Flash o applet Java. In generale, per incorporare contenuti multimediali o interattivi nelle pagine web, è consigliabile utilizzare approcci moderni come HTML5, CSS3 e JavaScript</li>

                    <object data="path/to/file.swf" type="application/x-shockwave-flash">
                        <param name="movie" value="path/to/file.swf">
                        <param name="autoplay" value="true">
                        <param name="loop" value="false">
                    </object>
                    {{--  . --}}
                    <param>
                   
                    <hr>
 
                    <li>Il tag HTML source viene utilizzato insieme al tag video o al tag audio per specificare le diverse fonti o versioni di un file multimediale. Questo tag consente al browser di selezionare la fonte più appropriata in base alle capacità del dispositivo e al tipo di contenuto supportato.
Il tag source non ha tag di chiusura e viene utilizzato all'interno del tag video o audio per fornire alternative o versioni alternative dello stesso contenuto multimediale.</li>

                    <video controls>
                        <source src="path/to/video.mp4" type="video/mp4">
                        <source src="path/to/video.webm" type="video/webm">
                        <source src="path/to/video.ogv" type="video/ogg">
                        Il tuo browser non supporta la riproduzione di video.
                    </video>
                    {{--  --}}
                    <source>
                   
                        <hr>
                        <li>Il tag HTML video viene utilizzato per incorporare e riprodurre video all'interno di una pagina web. È un elemento multimediale molto utile per mostrare contenuti video direttamente sul sito. È possibile specificare ulteriori attributi per personalizzare la visualizzazione e il comportamento del video, ad esempio:
widthe heightper impostare le dimensioni del video.
autoplayper avviare la riproduzione automatica del video.
loopper impostare la riproduzione in loop del video.
posterper specificare un'immagine di anteprima da visualizzare prima della riproduzione del video.</li>

                    <video src="path/to/video.mp4" controls></video>
                    {{--   --}}
                    <video></video>

                    <hr>

                    <li>Il tag HTML audio viene utilizzato per incorporare e riprodurre file audio all'interno di una pagina web. È un elemento multimediale che consente di aggiungere facilmente file audio ai tuoi siti web. L'attributo controlsviene utilizzato per visualizzare i controlli di riproduzione standard, come il pulsante Play/Pausa, il controllo del volume e la barra di scorrimento, consentendo all'utente di interagire con l'audio. Come per il tag video, puoi specificare ulteriori attributi per personalizzare la visualizzazione e il comportamento dell'audio, come autoplay, loope preload. In questo caso, il browser selezionerà la prima fonte audio supportata in base alle capacità del dispositivo.</li>

                    <audio src="path/to/audio.mp3" controls></audio>
                    {{--  --}}
                    <audio controls>
                        <source src="path/to/audio.mp3" type="audio/mpeg">
                        <source src="path/to/audio.ogg" type="audio/ogg">
                       <p>Il tuo browser non supporta l'elemento audio.</p> 
                    </audio>
                    <hr>

                    <li>Il tag HTML map viene utilizzato insieme al tag img per definire una mappa immagine, che consente di definire sono cliccabili all'interno di un'immagine e associarle ad azioni o collegamenti specifici. In questo esempio, il tag map viene utilizzato per definire la mappa immagine, mentre il tag img viene utilizzato per visualizzare l'immagine stessa. L'attributo usemapnell'elemento img viene utilizzato per associare la mappa all'immagine utilizzando l'identificatore specificato dopo il simbolo "#".
                        All'interno del tag map, vengono definiti gli elementi area che rappresentano le diverse aree cliccabili dell'immagine. Ogni area ha l'attributo shape, che può essere impostato su "rect" per un rettangolo, "circle" per un cerchio o "poly" per un poligono. L'attributo coordsspecifica le coordinate dell'area in base alla forma selezionata.
                        Inoltre, l'attributo hrefspecifica il collegamento o l'URL associato all'area cliccabile, mentre l'attributo altfornisce una descrizione testuale dell'area per scopi di accessibilità.
                        Le mappe immagine sono spesso utilizzate per creare menu interattivi, pulsanti o collegamenti all'interno di un'immagine. Cliccando su un'area definita nella mappa, l'utente verrà reindirizzato alla pagina specificata nell'attributo href.
                        È importante notare che le coordinate delle aree cliccabili segnalate dalla posizione all'interno dell'immagine e devono essere specificate in pixel.</li>

                        <img src="{{ asset('media\città-matrix.png') }}" alt="città -matrix" usemap="#mapname" width="650"
                        eight="350">
                    <map name="mapname">
                        <!-- Definizione delle aree cliccabili -->
                        <area shape="rect" coords="x1,y1,x2,y2" href="pagina.html" alt="Descrizione area">
                        <area shape="circle" coords="x,y,radius" href="pagina.html" alt="Descrizione area">
                        <area shape="poly" coords="x1,y1,x2,y2,x3,y3,..." href="pagina.html"
                            alt="Descrizione area">
                    </map>


                </ol>
                
               
            </div>
        </div>
    </div>
</div>





                   

                    
                 

                

                    {{--  --}}
                  
                  

                    {{--  --}}
                   
                    <optgroup></optgroup>
                    <option></option>



                    {{--  --}}
                    
                    <menu></menu>








</x-layout>
