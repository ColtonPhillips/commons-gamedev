<?php
/** Ligure (Ligure)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Dario vet
 * @author Dedee
 * @author Gastaz
 * @author Malafaya
 * @author Urhixidur
 * @author ZeneizeForesto
 */

$fallback = 'it';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Speçiale',
	NS_TALK             => 'Discûscion',
	NS_USER             => 'Utente',
	NS_USER_TALK        => 'Discûscioîn_ûtente',
	NS_PROJECT_TALK     => 'Discûscioîn_$1',
	NS_FILE             => 'Immaggine',
	NS_FILE_TALK        => 'Discûscioîn_immaggine',
	NS_MEDIAWIKI_TALK   => 'Discûscioîn_MediaWiki',
	NS_TEMPLATE_TALK    => 'Discûscioîn_template',
	NS_HELP             => 'Agiûtto',
	NS_HELP_TALK        => 'Discûscioîn_agiûtto',
	NS_CATEGORY         => 'Categorîa',
	NS_CATEGORY_TALK    => 'Discûscioîn_categorîa',
);

$namespaceAliases = array(
	'Speciale' => NS_SPECIAL,
	'Discussione' => NS_TALK,
	'Discussioni_utente' => NS_USER_TALK,
	'Discussioni_$1' => NS_PROJECT_TALK,
	'Immagine' => NS_FILE,
	'Discussioni_immagine' => NS_FILE_TALK,
	'Discussioni_MediaWiki' => NS_MEDIAWIKI_TALK,
	'Discussioni_template' => NS_TEMPLATE_TALK,
	'Aiuto' => NS_HELP,
	'Discussioni_aiuto' => NS_HELP_TALK,
	'Categoria' => NS_CATEGORY,
	'Discussioni_categoria' => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'Messaggi' ),
	'Allpages'                  => array( 'Tûtte e paggine' ),
	'Ancientpages'              => array( 'Paggine meno reçenti' ),
	'Block'                     => array( 'Blocca' ),
	'Blockme'                   => array( 'BloccaProxy' ),
	'Booksources'               => array( 'RiçercaISBN' ),
	'Categories'                => array( 'Categorîe' ),
	'ChangePassword'            => array( 'Rimposta paròlla d\'ordine' ),
	'Confirmemail'              => array( 'Comferma l\'e-mail' ),
	'Contributions'             => array( 'Contribûti' ),
	'Deadendpages'              => array( 'Paggine sensa sciortîa' ),
	'Emailuser'                 => array( 'Mandighe \'n\'e-mail' ),
	'Export'                    => array( 'Esporta' ),
	'Fewestrevisions'           => array( 'Paggine con meno revixoîn' ),
	'Import'                    => array( 'Importa' ),
	'BlockList'                 => array( 'IP bloccæ' ),
	'Listadmins'                => array( 'Amministratoî' ),
	'Listbots'                  => array( 'Bot' ),
	'Listfiles'                 => array( 'Immaggini' ),
	'Listredirects'             => array( 'Rediression' ),
	'Listusers'                 => array( 'Utenti' ),
	'Lockdb'                    => array( 'BloccaDB' ),
	'Log'                       => array( 'Registri', 'Registro' ),
	'Lonelypages'               => array( 'Paggine orfane' ),
	'Longpages'                 => array( 'Paggine ciû longhe' ),
	'MIMEsearch'                => array( 'RiçercaMIME' ),
	'Mostcategories'            => array( 'Paggine con ciû categorîe' ),
	'Mostimages'                => array( 'Immaggini ciû domandæ' ),
	'Mostlinked'                => array( 'Paggine ciû domandæ' ),
	'Mostlinkedcategories'      => array( 'Categorîe ciû domandæ' ),
	'Mostlinkedtemplates'       => array( 'Template ciû domandæ' ),
	'Mostrevisions'             => array( 'Paggine con ciû revixoîn' ),
	'Movepage'                  => array( 'Sposta' ),
	'Mycontributions'           => array( 'Mæ Contribûti' ),
	'Mypage'                    => array( 'Mæ Paggina Utente' ),
	'Mytalk'                    => array( 'Mæ Discûscioîn' ),
	'Newimages'                 => array( 'Immaggini reçenti' ),
	'Newpages'                  => array( 'Paggine ciû reçenti' ),
	'Popularpages'              => array( 'Paggine ciû viscitæ' ),
	'Preferences'               => array( 'Preferense' ),
	'Prefixindex'               => array( 'Prefisci' ),
	'Protectedpages'            => array( 'Paggine protezûe' ),
	'Protectedtitles'           => array( 'Tittoli protezûi' ),
	'Randompage'                => array( 'Paggina a brettio' ),
	'Randomredirect'            => array( 'Rediression a brettio' ),
	'Recentchanges'             => array( 'Ûrtime modiffiche' ),
	'Recentchangeslinked'       => array( 'Modiffiche correlæ' ),
	'Revisiondelete'            => array( 'Scassa revixon' ),
	'Search'                    => array( 'Riçerca', 'Çerca' ),
	'Shortpages'                => array( 'Paggine ciû cûrte' ),
	'Specialpages'              => array( 'Paggine speçiali' ),
	'Statistics'                => array( 'Statistighe' ),
	'Uncategorizedcategories'   => array( 'Categorîe sensa categorîa' ),
	'Uncategorizedimages'       => array( 'Immaggini sensa categorîa' ),
	'Uncategorizedpages'        => array( 'Paggine sensa categorîa' ),
	'Uncategorizedtemplates'    => array( 'Template sensa categorîa' ),
	'Unlockdb'                  => array( 'SbloccaDB' ),
	'Unusedcategories'          => array( 'Categorîe sensa ûso' ),
	'Unusedimages'              => array( 'Immaggini sensa ûso' ),
	'Unusedtemplates'           => array( 'Template sensa ûso' ),
	'Unwatchedpages'            => array( 'Paggine no osservæ' ),
	'Upload'                    => array( 'Carrega' ),
	'Userlogin'                 => array( 'Intra', 'Registrate' ),
	'Userlogout'                => array( 'Sciorti' ),
	'Userrights'                => array( 'Permissi utente' ),
	'Version'                   => array( 'Verscion' ),
	'Wantedcategories'          => array( 'Categorîe domandæ' ),
	'Wantedpages'               => array( 'Paggine domandæ' ),
	'Watchlist'                 => array( 'Osservæ speçiali' ),
	'Whatlinkshere'             => array( 'Cose appunta chì' ),
	'Withoutinterwiki'          => array( 'Sensa Interwiki' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Sottolineâ i collegamenti',
'tog-highlightbroken'         => 'Evidensia <a href="" class="new">coscì</a> i collegamenti a-e paggine inexisténti (se disattivou: coscì<a href="" class="internal">?</a>)',
'tog-justify'                 => 'Alliniamento di paragrafi giustificòu',
'tog-hideminor'               => 'asconde e modifiche minori inte ùrtime modifiche',
'tog-hidepatrolled'           => 'Ascondi e modifiche verifichè inte ùrtime modifiche',
'tog-newpageshidepatrolled'   => 'Ascondi e paggine verifiché da-o elenco de paggine ciù reçenti',
'tog-extendwatchlist'         => 'mostrâ tùtte e modifiche a-i òsserve speciali',
'tog-usenewrc'                => 'Usâ e ùrtime modifiche avansê (serve Javascript)',
'tog-numberheadings'          => 'Nùmeraçion aotomàtica di tìtoli de seçión',
'tog-showtoolbar'             => 'Fâ vedde a barra de strumenti de modìffica (con JavaScript)',
'tog-editondblclick'          => 'Modifica e paggine co-o dópio clic (serve Javascrpt)',
'tog-editsection'             => 'Modifica e seçión co-o colegamento [modifica]',
'tog-editsectiononrightclick' => 'Modifica e seçión co-o clic destro in sciô tìtolo (serve Javascipt)',
'tog-showtoc'                 => "Fanni védde l'indiçe pe-e pàgine con ciù de 3 seçioìn",
'tog-rememberpassword'        => "Arregorda a mæ paròlla d'ordine (a-o màscimo pe $1 {{PLURAL:$1|day|days}})",
'tog-watchcreations'          => 'Azónzi e pàgine a-i oservæ speciâli',
'tog-previewontop'            => "Veddi l'anteprimma de d'äto a-o spaçio pe cangiâ",
'tog-previewonfirst'          => "Veddi l'anteprimma a-o primmo cangiamento",
'tog-enotifwatchlistpages'    => "Fammelo savéi via e-mail quande 'na paggina inta mæ lista in osservassion a va cangiaa.",
'tog-enotifusertalkpages'     => "Màndime un messaggio e-mail se gh'é de-e modìffiche inta pagina de discuscion da mæ pagina d'utente.",
'tog-showhiddencats'          => 'Fa vedde e categorîe ascose',

'underline-always' => 'Sempre',
'underline-never'  => 'Mâi',

# Dates
'sunday'        => 'Domenega',
'monday'        => 'Lunedì',
'tuesday'       => 'Martedì',
'wednesday'     => 'Mäcordì',
'thursday'      => 'Zeuggia',
'friday'        => 'Venardì',
'saturday'      => 'Sabbo',
'sun'           => 'Dom',
'mon'           => 'Lun',
'tue'           => 'Mar',
'wed'           => 'Mäc',
'thu'           => 'Zeu',
'fri'           => 'Ven',
'sat'           => 'Sab',
'january'       => 'Zenâ',
'february'      => 'Frevâ',
'march'         => 'Marso',
'april'         => 'Arvî',
'may_long'      => 'Mazzo',
'june'          => 'Zûgno',
'july'          => 'Lûggio',
'august'        => 'Agosto',
'september'     => 'Setenbre',
'october'       => 'Ôtobre',
'november'      => 'Novembre',
'december'      => 'Dexembre',
'january-gen'   => 'Zenâ',
'february-gen'  => 'Frevâ',
'march-gen'     => 'Marso',
'april-gen'     => 'Arvî',
'may-gen'       => 'Mazzo',
'june-gen'      => 'Zûgno',
'july-gen'      => 'Lûggio',
'august-gen'    => 'Agosto',
'september-gen' => 'Settembre',
'october-gen'   => 'Ötobre',
'november-gen'  => 'Novembre',
'december-gen'  => 'Dexembre',
'jan'           => 'Zen',
'feb'           => 'Fre',
'mar'           => 'Mar',
'apr'           => 'Arv',
'may'           => 'Maz',
'jun'           => 'Zûg',
'jul'           => 'Lûg',
'aug'           => 'Ago',
'sep'           => 'Set',
'oct'           => 'Öto',
'nov'           => 'Nov',
'dec'           => 'Dex',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Categorîa|Categorîe}}',
'category_header'                => 'Pàgine inta categorîa "$1"',
'subcategories'                  => 'Sottocategorîe',
'category-media-header'          => 'Archivio inta categorîa "$1"',
'category-empty'                 => "''Pe òua sta categorîa a no contegne nisciùnn-a pàgina ò archivio moltimedia.''",
'hidden-categories'              => '{{PLURAL:$1|Categoria ascoza|Categorie ascoze}}',
'hidden-category-category'       => 'Categorîe ascôse',
'category-subcat-count'          => "{{PLURAL:$2|Sta categoria a contegne sôlo 'na sottocategoria, chi de segoito.|Sta categoria a contegne {{PLURAL:$1|a sottocategoria indicâ|e $1 sottocategorie indicæ}} di segoito, pe in totale de $2.}}",
'category-subcat-count-limited'  => "'Sta categorîa a contegne {{PLURAL:$1|ûnn-a sottocategorîa, indicaa|$1 sottocategorîe, indicæ}} chì inzû.",
'category-article-count'         => "{{PLURAL:$2|Sta categoria a contegne sôlo inna pagina, chi de segoito.|Sta categoria a contegne {{PLURAL:$1|a pàgina a l'é|e $1 pàgine son}} de segoito, pe in totale de $2.}}",
'category-article-count-limited' => "'Sta categorîa a contegne {{PLURAL:$1|'sta paggina|'ste $1 paggine}}.",
'category-file-count'            => "{{PLURAL:$2|Sta categoria a contegne sôlo in file, chi de segoito.|Sta categoria a contegne {{PLURAL:$1|o file o l'é|e $1 file son}} de segoito, pe in totale de $2.}}",
'listingcontinuesabbrev'         => 'cont.',
'noindex-category'               => 'Pàgine sénsa indiçe',

'about'         => 'Informaçioìn',
'article'       => 'Pagina de i contenùi',
'newwindow'     => "(O s'arve inte 'n âtro barcon)",
'cancel'        => 'Scancella',
'moredotdotdot' => 'De ciû...',
'mypage'        => 'A mea pagina',
'mytalk'        => 'Mæ discuscioin',
'anontalk'      => 'Discuscion pe questo indirisso IP',
'navigation'    => 'Navegaçión',
'and'           => '&#32;e',

# Cologne Blue skin
'qbfind'         => 'Attrêuva',
'qbedit'         => 'Cangia',
'qbpageoptions'  => "Opsioîn de 'sta paggina",
'qbpageinfo'     => 'Informassion inscia paggina',
'qbmyoptions'    => 'E mæ paggine',
'qbspecialpages' => 'Pagine speçiä',
'faq'            => 'Domande frequenti',

# Vector skin
'vector-action-addsection' => 'Azónzi discusción',
'vector-action-delete'     => 'Scancella',
'vector-action-move'       => 'Mescia',
'vector-action-protect'    => 'Protezzi',
'vector-view-create'       => 'Crea',
'vector-view-edit'         => 'Càngia',
'vector-view-history'      => 'Fanni védde a Stöia',
'vector-view-view'         => 'Lêzi',
'vector-view-viewsource'   => 'Veddi a sorgénte',
'actions'                  => 'Açioìn',
'namespaces'               => 'Namespaces',
'variants'                 => 'Diferense',

'errorpagetitle'    => 'Erô',
'returnto'          => 'Tornâ a $1.',
'tagline'           => 'Da {{SITENAME}}',
'help'              => 'Agiùtto',
'search'            => 'Çerca',
'searchbutton'      => 'Çerca',
'go'                => 'Vanni',
'searcharticle'     => 'Vanni',
'history'           => 'Stöia da pàgina',
'history_short'     => 'Stöia',
'printableversion'  => 'Verscion da stanpâ',
'permalink'         => 'Inganso fisso',
'print'             => 'Stampa',
'edit'              => 'Càngia',
'create'            => 'Crea',
'editthispage'      => "Modificâ 'sta pagina",
'create-this-page'  => "Crea 'sta paggina",
'delete'            => 'Scancella',
'deletethispage'    => "Scassa 'sta paggina",
'protect'           => 'Proteze',
'protect_change'    => 'cangiâ',
'protectthispage'   => "Proteze 'sta paggina.",
'unprotect'         => 'Càngia proteçión',
'unprotectthispage' => 'Càngia a proteçión de sta paggina',
'newpage'           => 'Nêuva pàgina',
'talkpage'          => 'Paggina de discûxon',
'talkpagelinktext'  => 'Ciæti',
'specialpage'       => 'Pagina speçiâ',
'personaltools'     => 'Strùmenti personâli',
'articlepage'       => 'Veddi a voxe',
'talk'              => 'Ciæti',
'views'             => 'Vìxite',
'toolbox'           => 'Arneixi',
'projectpage'       => 'Veddi a pagina de o progetto',
'viewtalkpage'      => 'Veddi o ciæto',
'otherlanguages'    => 'In âtre lengóe',
'redirectedfrom'    => '(Rediritto da $1)',
'redirectpagesub'   => 'Paggina de rindirissamento',
'lastmodifiedat'    => "Sta pagina a l'è stæta cangiâ l'urtima votta a e $2 do $1.",
'viewcount'         => "'Sta paggina a l'è stæta vista {{PLURAL:$1|solo 'na vòtta|$1 vòtte}}.",
'protectedpage'     => 'Paggina protezûa',
'jumpto'            => 'Vanni a:',
'jumptonavigation'  => 'Navegaçión',
'jumptosearch'      => 'çerca',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Informaçioìn in sciô {{SITENAME}}',
'aboutpage'            => 'Project:Informaçioìn',
'copyright'            => 'O contegnûo o se peu trovâ a $1.',
'copyrightpage'        => "{{ns:project}}:Diritti d'autô",
'currentevents'        => 'Atualitæ',
'currentevents-url'    => 'Project:Atualitæ',
'disclaimers'          => 'Avértense',
'disclaimerpage'       => 'Project:Avertense generâli',
'edithelp'             => "Agiùtto pe l'ediçion",
'edithelppage'         => 'Help:Modiffica',
'helppage'             => 'Help:Contegnûi',
'mainpage'             => 'Pàgina prinçipâ',
'mainpage-description' => 'Pagina prinçipâ',
'policy-url'           => 'Project:Lezzi',
'portal'               => 'Pòrtego da comunitæ',
'portal-url'           => 'Project:Pòrtego da comunitæ',
'privacy'              => 'Politica in sci dæti privæ',
'privacypage'          => 'Project:Leze in sci dæti privæ',

'badaccess'        => "No ti g'hæ o permisso",
'badaccess-group0' => "No ti g'hæ o permisso pe fâ quest'assion.",
'badaccess-groups' => "L'assion che ti vêu fâ a l'è permissa solo a i ûtenti de ûn di grûppi $1.",

'ok'                      => "D'accòrdio",
'retrievedfrom'           => 'Estræto da "$1"',
'youhavenewmessages'      => "Ti gh'æ $1 ($2).",
'newmessageslink'         => 'Nêuvi messaggi',
'newmessagesdifflink'     => 'Differensa co-a revixon preçedente',
'youhavenewmessagesmulti' => "Ti t'æ neuvi messaggi in scia $1",
'editsection'             => 'Càngia',
'editold'                 => 'càngia',
'viewsourceold'           => 'veddi a sorgénte',
'editlink'                => 'càngia',
'viewsourcelink'          => 'Veddi a sorgénte',
'editsectionhint'         => 'Càngia a seçión $1',
'toc'                     => 'Indiçe',
'showtoc'                 => 'Fâ vedde',
'hidetoc'                 => 'Asconde',
'viewdeleted'             => 'Vedde $1?',
'site-rss-feed'           => 'Feed RSS de $1',
'site-atom-feed'          => 'Feed Atom de $1',
'page-rss-feed'           => 'Feed RSS pe "$1"',
'page-atom-feed'          => 'Feed Atom pe "$1"',
'red-link-title'          => '$1 (ancon da scrîve)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'     => 'Pàgina',
'nstab-user'     => 'Utente',
'nstab-special'  => 'Pàgina speçiâ',
'nstab-project'  => 'Paggina de servissio',
'nstab-image'    => 'Archivio',
'nstab-template' => 'Template',
'nstab-help'     => 'Agiûtto',
'nstab-category' => 'Categorîa',

# Main script and global functions
'nosuchactiontext' => "L'URL a no corisponde a 'n comando reconosciûo da-o software MediaWiki",

# General errors
'error'              => 'Errô',
'databaseerror'      => 'Errô da a base de i dæti',
'readonly'           => 'Database bloccòu',
'missing-article'    => "O database o no l'à trovòu o testo di 'na pàgina che ghe saiêiva dovûa êse  co-o nómme de \"\$1\" \$2.

Spésse vòtte questo o sucede quande a vegne riciamâ, da stöia ò dò-u confronto tra revixioìn, in colegaménto a 'na pàgina scancelâ, a in confronto tra revixioìn che no ghe son ciù ò a in confronto tra revixioìn sénsa ciù a stöia.

Se coscì no fîse l'é probabile che t'aggi scoverto 'n erô into software MediaWiki.
Pe favô ti peu segnalâ quello che l'é sucesso a in [[Special:ListUsers/sysop|aministratô]] dîndo  l'URL in questión.",
'missingarticle-rev' => '(nùmero da revixón: $1)',
'internalerror'      => 'Errô interno',
'filecopyerror'      => 'Non ho potùo copiâ o papê "$1" in te "$2".',
'filedeleteerror'    => 'Non ho potùo scassâ o papê "$1".',
'filenotfound'       => 'Non ho trovoö o papê "$1".',
'badarticleerror'    => "L'açion che ti te veu fâ a non l'è permissa in sta pagina.",
'cannotdelete'       => 'Non çe peu scassâ a pagina o o papê. (o peu ese za stæto scassoö da quarchedun ätro).',
'badtitle'           => "O tìtolo o no l'è corretto.",
'badtitletext'       => "O tittolo da paggina çercâa o l'è vêuo, sballiòu o con caratteri no accettæ, oppûre o deriva da 'n errô inti collegamenti tra scîti Wiki diversci o verscioîn in léngue diversce do mæximo scîto.",
'viewsource'         => 'Veddi a fonte',
'protectedpagetext'  => "'Sta paggina a l'è stæta protezûa pe impedîghe a modiffica.",
'viewsourcetext'     => "O l'è poscibbile vedde e copiâ o còddice sorgente de 'sta paggina:",

# Login and logout pages
'welcomecreation'            => "== Benvegnûo, $1! ==

O teu account o l'è stæto creòu bén. No te ascordâ de cangiâ e teu {{SITENAME}}.[[Special:Preferences|preferençe de {{SITENAME}}]].",
'yourname'                   => 'Nomme',
'yourpassword'               => 'Pòula segretta:',
'yourpasswordagain'          => 'Scrivi tórna a pòula segrétta:',
'remembermypassword'         => 'Aregòrda a mæ login in sto navegatô (pe in mascìmo de $1 {{PLURAL:$1|giórno|giórni}})',
'yourdomainname'             => 'Indirisso do scito:',
'login'                      => 'Intra',
'nav-login-createaccount'    => 'Intra / Registrate',
'loginprompt'                => 'Ti devi avéi i cookie abilitæ into teu navigatô pe intrâ in {{SITENAME}}.',
'userlogin'                  => 'Intra / Registrate',
'logout'                     => 'Sciorti',
'userlogout'                 => 'Sciorti',
'nologin'                    => "No ti gh'æ ancon l'aceizo? '''$1'''.",
'nologinlink'                => "Creâ 'n account",
'createaccount'              => "Crea 'n nêuvo account",
'gotaccount'                 => "Ti ghe l'æ za 'n conto d'aceizo? '''$1'''.",
'gotaccountlink'             => 'Intra',
'userlogin-resetlink'        => "T'æ ascordòu i teu dæti de aceizo?",
'badretype'                  => "E paròlle d'ordine che t'hæ scrîo son despægie.",
'userexists'                 => "O nomme d'ûtente inserîo o l'è zà in ûso.<br />
Pe piaxei prêuva a scellie 'n âtro.",
'loginerror'                 => "Errô inte l'accesso",
'noname'                     => "O nomme d'ûtente o l'è sballiòu.",
'loginsuccesstitle'          => 'Accesso effettuòu',
'loginsuccess'               => "'''O collegamento a-o server de {{SITENAME}} co-o nomme d'ûtente \"\$1\" o l'è attivo.'''",
'nosuchuser'                 => 'No gh\'è nisciûn ûtente con quello nomme "$1". Verificâ o nomme inserîo ò creâ \'n nêuvo accesso.',
'nosuchusershort'            => 'No gh\'è nisciûn ûtente con quello nomme "$1". Verificâ o nomme inserîo.',
'nouserspecified'            => "O se deive inserî 'n nomme d'ûtente.",
'wrongpassword'              => "Ti gh'æ scrîo 'na paròlla d'ordine sbaliâ. Tenta torna.",
'wrongpasswordempty'         => "No ti g'hæ scrîo nisciûnn-a paròlla d'ordine. Tenta torna.",
'passwordtooshort'           => "A paròlla d'ordine che ti gh'æ misso a no serve òu a l'é tròppo cûrta.
A dêve contegnî mìnimo $1 caratteri e esse diverza da-o teu nómme utente.",
'mailmypassword'             => "Invia 'na nêuva paròlla segrétta a-a mæ e-mail",
'passwordremindertitle'      => "Servissio Password Reminder (nêuva paròlla d'ordine temporannia) de {{SITENAME}}",
'passwordremindertext'       => "Quarchedûn (probabilmente ti, con indirisso IP \$1) o g'ha domandòu l'invîo de 'na nêuva paròlla d'ordine pe l'accesso a {{SITENAME}} (\$4).
A paròlla d'ordine pe l'ûtente \"\$2\" a l'è stæta impostâa a \"\$3\".
O se conseggia de fâ l'accesso quanto primma e cangiâ a paròlla d'ordine immediatamente.
Se no ti è stæto ti a fâ 'sta domanda, oppûre se ti g'hæ ritrovòu a têu paròlla d'ordine e no ti vêu cangiâla ciû, ti pêu ignorâ 'sto messaggio e andâ avanti ûsando a vegia paròlla d'ordine.",
'noemail'                    => 'No gh\'è nisciûn indirisso e-mail registròu pe l\'ûtente "$1".',
'passwordsent'               => "Ûnn-a nêuva paròlla d'ordine a l'è stæta inviâa a l'indirisso e-mail registròu pe l'ûtente \"\$1\".
Pe piaxei, fa 'n accesso appenn-a ti a ghe reçeivi.",
'blocked-mailpassword'       => "O teu indirisso IP o l'è affirmoö, e pe sta razon o non se peu usâ a funscion de remandâ a pòula segretta.",
'eauthentsent'               => "'N messaggio e-mail de confermassion o l'è stæto inviòu a l'indirisso indicòu.
Pe abilitâ l'invîo de messaggi e-mail pe quest'accesso, o se deive seguî l'istrûssioîn indicæ, coscì ti confermi che ti t'è o legittimo propietâjo de l'indirisso.",
'acct_creation_throttle_hit' => 'O ne dispiâxe, ma ti hæ zà creòu $1 accesci. No ti pêu creâne de ciû!',
'emailauthenticated'         => "O teu indirisso de posta elettronega o l'è stæto autenticoö o $1.",
'emailconfirmlink'           => 'Conferma o teu indirisso de posta elettronega',
'accountcreated'             => 'Graçie pe esëte registroö!!!',
'accountcreatedtext'         => "Utente $1, ti te guägno l'açeiso!",
'loginlanguagelabel'         => 'Lengoa: $1',

# Change password dialog
'resetpass'           => 'Reverti a pòula segretta',
'resetpass_header'    => 'Reverti a pòula segretta',
'retypenew'           => "Ripette a nêuva paròlla d'ordine:",
'resetpass_forbidden' => "No l'é poscìbile cangiâ e paròlle segrétte",

# Edit page toolbar
'bold_sample'     => 'Grascetto',
'bold_tip'        => 'Grascetto',
'italic_sample'   => 'Testo in corsciva',
'italic_tip'      => 'Corscivo',
'link_sample'     => "Nomme de l'inganço",
'link_tip'        => 'Inganço interno',
'extlink_sample'  => "http://www.example.com Nomme de l'inganço",
'extlink_tip'     => 'Colegaménto esterno (inclûdde o prefisso http:// )',
'headline_sample' => 'Tìtolo',
'headline_tip'    => 'Tìtolo de 2° livello',
'nowiki_sample'   => 'Inserî chì o testo sensa formattaçion',
'nowiki_tip'      => 'Ignorâ a formattassion wiki',
'image_sample'    => 'Exempio.jpg',
'image_tip'       => 'Inmàgine caregâ',
'media_sample'    => 'Exempio.ogg',
'media_tip'       => 'Colegaménto a file moltimediale',
'sig_tip'         => 'Firma con data e ôa',
'hr_tip'          => 'Linnia orissontâ',

# Edit pages
'summary'                          => 'Oggetto:',
'subject'                          => 'Argomento (tittolo):',
'minoredit'                        => 'Cangiamento minô (m)',
'watchthis'                        => 'Azzonze a-i osservæ speçiâli',
'savearticle'                      => 'Sarva a pàgina',
'preview'                          => 'Anteprìmma',
'showpreview'                      => "Veddi l'anteprimma",
'showdiff'                         => 'Veddi i cangiamenti',
'anoneditwarning'                  => "'''Attension:''' No ti t'hæ registròu. O têu indirisso IP o sajà misso inta stöja di cangiamenti da paggina.",
'summary-preview'                  => 'Anteprimma oggetto:',
'blockedtitle'                     => "L'utente o l'é bloccòu",
'blockedtext'                      => "''''Sto nomme d'ûtente ou indirisso IP o l'è stæto bloccòu.'''

O blòcco o l'è stæto fæto da \$1. A raxon dæta a l'è ''\$2''.

* Iniçio de l'affermassion: \$8
* Iniçio de l'affermassion: \$6
* Intervallo de l'affermassion: \$7

O l'è poscibbile contattâ \$1 o 'n âtro [[{{MediaWiki:Grouppage-sysop}}|amministratô]] pe discûtte inscio blòcco.
O no se pêu ûsâ o comando \"Inviâ 'na léttia elettronega a quest'ûtente\" se ti no ti g'hæ 'n indirisso e-mail registròu inte têu [[Special:Preferences|preferense]] e se o no l'è stæto bloccòu ascì.
O têu indirisso IP o l'è \$3, e o têu blòcco ID o l'è #\$5.
Pe piaxei mettighe ûn di doî in tûtte e domande che ti fæ.",
'autoblockedtext'                  => "O têu indirisso IP o l'è stæto bloccòu outomaticamente perché o l'ea za ûsòu da 'n âtro ûtente, bloccòu da \$1.
A raxon dæta a l'è stæta:

:''\$2''

* Inissio do blòcco: \$8
* Fin do blòcco: \$6

Ti pêu contattâ \$1 ou 'n âtro
[[{{MediaWiki:Grouppage-sysop}}|amministratô]] pe parlâ inscio blòcco.

Dagghe a mente a che no ti pêu ûsâ o comando \"manda na littia elettronega a sto utente\" se non ti g'hæ 'n indirisso de posta elettronega registroö in te têu [[Special:Preferences|preferense]] e se o no l'è stæto bloccòu ascì.

O têu blòcco ID o l'è \$5. Pe piaxei metti 'sto ID in tûtte e domande che ti fæ.",
'whitelistedittext'                => 'Pe cangia sta pagina devvi $1.',
'loginreqtitle'                    => "Besêugna registrâse primma de modificâ 'sta paggina.",
'accmailtitle'                     => 'Pòula segretta spedïa',
'accmailtext'                      => 'A pòula segretta pe-o utente "$1" a l\'è stæta spedïa a o indirisso $2.',
'newarticle'                       => '(Nêuvo)',
'newarticletext'                   => "Sto colegaménto o corisponde a 'na pàgina che ancon a no l'existe.

Se o se vêu creâ a pàgina òua, o se pêu comensâ a scrive o testo into spàçio vêuo chì sotta.
(fâ riferimento a-e [[{{MediaWiki:Helppage}}|paggine d'agiûtto]] pe ciû informaçioìn).

Se t'ê intròu inte sto colegaménto pe sbàlio, o basta sciaccâ '''Inderê''' into navegatô.",
'noarticletext'                    => "Inte sto momento a pagina çercâ a l'è vêua. O l'è poscibbile [[Special:Search/{{PAGENAME}}|çercâ 'sto tittolo]] inte âtre pagine do scîto opû [{{fullurl:{{FULLPAGENAME}}|action=edit}} cangiâ a pagina òua].",
'noarticletext-nopermission'       => "Òua a pàgina çercâ a l'è vêua. O l'è poscìbile [[Special:Search/{{PAGENAME}}|çercâ sto tìtolo]] inte âtre pàgine do scîto opû [{{fullurl:{{FULLPAGENAME}}|action=edit}} cangiâ a pàgina òua].",
'previewnote'                      => "'''Questa chì a l'è solo 'n'anteprimma; i cangiamenti no son ancon stæti sarvæ!'''",
'editing'                          => 'Modiffica de $1',
'editingsection'                   => 'Càngio de $1 (seçión)',
'yourtext'                         => 'O teu testo',
'yourdiff'                         => 'Differense',
'copyrightwarning'                 => "Nota: Tùtte e contribuçioìn a {{SITENAME}} van conscideræ comme rilasciæ drento a-i termini da licensa d'ûso $2 (veddi $1 pe savéine de ciù).
Se no ti veu che i testi teu pêuan esse modificæ da quarchedùn sensa limitaçioìn, no mandâli a {{SITENAME}}.<br />
Inviando o testo ti diciâri, sott'a teu responsabilitæ, ch'o l'é stæto scrîto da ti personalmente oppure ch'o l'é stæto piggiòu da 'na fonte de pùbrico domìnio òu anàlogamente lìbea.<br />
'''NO INVIÂ MATERIÂLE COVERTO DA DRÎTI D'AUTÔ SENSA OUTORIZAÇION!'''",
'templatesused'                    => '{{PLURAL:$1|Template adêuviòu|Template adêuviæ}} in sta pàgina:',
'templatesusedpreview'             => "Template dêuviæ inte 'st'anteprimma:",
'template-protected'               => '(protezûo)',
'template-semiprotected'           => '(semiprotezûo)',
'hiddencategories'                 => "Sta pàgina a l'é de {{PLURAL:$1|1 categoria ascoza|$1 categorie ascoze}}:",
'nocreatetext'                     => "A poscibilitæ de creâ nêuve paggine insce {{SITENAME}} a l'è stæta limitâ solo a-i ûtenti registræ.
O se pêu tornâ inderê e modificâ 'na paggina escistente, oppûre [[Special:UserLogin|intrâ ò creâ 'n accesso nêuvo]].",
'permissionserrorstext-withaction' => "No t'æ i permìssi pe $2 pe {{PLURAL:$1|sta raxon|ste raxoìn}}:",
'recreate-moveddeleted-warn'       => "Atençión: o se sta pe ricreâ 'na pàgina zà scancelâ into passòu.'''

O se deive consciderâ se o l'è davéi coretto continoâ  a cangiâ 'sta pàgina.
E cancellaçioìn e mesciaménti son publicæ chì sotta:",
'moveddeleted-notice'              => "Sta pàgina a l'é stæta cancelâ.
E scancelaçioìn e mescaménti son riportæ chi pe informaçión.",

# Parser/template warnings
'post-expand-template-inclusion-warning'  => "'''Atento:''' a dimensción di template che t'æ misso l'é tròppo grànde.
Quàrcheùn di teu template no saiâ azónto.",
'post-expand-template-inclusion-category' => "Pàgine con di template che gh'àn a dimensción ciù âta do limite mascimo",
'post-expand-template-argument-warning'   => "'''Atençión:''' sta pàgina a contegne un ò ciù argomenti di template che son tròppo gràndi pe êse espansi. Sti argomenti no saiàn fæti védde.",
'post-expand-template-argument-category'  => 'Pàgine con di template che ghe mancàn di argoménti',

# Account creation failure
'cantcreateaccounttitle' => 'Non çe peu registrâ o utente',
'cantcreateaccount-text' => "A registrascion de utenti da questo indirisso IP (<b>$1</b>) a l'è stæta affermaä da [[User:$3|$3]].

A razon dæta a l'è ''$2''",

# History pages
'viewpagelogs'           => "Veddi i log relativi a 'sta paggina.",
'currentrev'             => 'Verscion attuâle',
'currentrev-asof'        => 'Ùrtima revixón de-e $1',
'revisionasof'           => 'Verscion do $1',
'revision-info'          => 'Verscion do $1, outô: $2',
'previousrevision'       => '← Verscion meno recente',
'nextrevision'           => 'Revixon ciù nêuva →',
'currentrevisionlink'    => 'Ûrtima revixon',
'cur'                    => 'cor',
'next'                   => 'Proscimo',
'last'                   => 'Ûrtima',
'page_first'             => 'primma',
'page_last'              => 'ûrtima',
'histlegend'             => "Confronto tra verscioîn: selessionâ e cascette corispondenti a-e verscioîn descideræ e schissâ Inviâ oppûre o pomello lì sotta.

Leggenda: (corr) = differense co-a verscion corrente, (prec) = differense co-a verscion preçedente, '''m''' = modiffica minô",
'history-fieldset-title' => 'Véddi a stöia',
'history-show-deleted'   => 'Sôlo scancelæ',
'histfirst'              => 'Prìmmo',
'histlast'               => 'Ùrtimo',
'historyempty'           => '(vêua)',

# Revision feed
'history-feed-title'          => 'Stöia de e revisioin',
'history-feed-item-nocomment' => '$1 o $2',

# Revision deletion
'rev-delundel'           => 'fanni védde/ascondi',
'revdel-restore'         => 'càngia a vixibilitæ',
'revdel-restore-deleted' => 'Revixioìn scancelæ',
'revdel-restore-visible' => 'revixioìn che se peuan védde',

# Merge log
'revertmerge' => 'Anùlla union',

# Diffs
'history-title'           => 'Stöia de revixoìn de "$1"',
'difference'              => '(Differense fra e revixoîn)',
'lineno'                  => 'Linia $1:',
'compareselectedversions' => 'Confronta e verscioîn selessionæ',
'editundo'                => 'Anùlla',
'diff-multi'              => '({{PLURAL:$1|Inna revixión intermedia|$1 revixioìn intermedie}} de {{PLURAL:$2|un utente|$2 utenti}} no son mostræ)',

# Search results
'searchresults'                    => 'Resultati da reçerca',
'searchresults-title'              => 'Rezoltati da riçerca de "$1"',
'searchsubtitle'                   => "Ti t'è çercoö '''[[:$1]]'''",
'searchsubtitleinvalid'            => "Ti t'è çercoö '''$1'''",
'prevn'                            => 'Precedenti {{PLURAL:$1|$1}}',
'nextn'                            => 'Proscima {{PLURAL:$1|$1}}',
'prevn-title'                      => '{{PLURAL:$1|rezoltato precedénte|rezoltati precedénti}}',
'nextn-title'                      => 'Pròscimo $1 {{PLURAL:$1|rezoltato|rezoltati}}',
'shown-title'                      => 'Fanni védde {{PLURAL:$1|in rizoltato|$1 rizoltati}} pe pàgina',
'viewprevnext'                     => 'Veddi ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-exists'                => "'''In sciô scîto l'existe za 'na pàgina co-o nómme \"[[:\$1]]\"'''",
'searchmenu-new'                   => 'Crea la pagina "[[:$1]]" su questo sito',
'searchhelp-url'                   => 'Help:Contegnûi',
'searchprofile-articles'           => 'Pàgina di contegnûi',
'searchprofile-project'            => 'Pàgine de agiùtto e relative a-o progetto',
'searchprofile-images'             => 'Moltimedia',
'searchprofile-everything'         => 'Tùtto',
'searchprofile-advanced'           => 'Avansæ',
'searchprofile-articles-tooltip'   => 'Çerca in $1',
'searchprofile-project-tooltip'    => 'Çerca in $1',
'searchprofile-images-tooltip'     => 'Çerca file',
'searchprofile-everything-tooltip' => 'Çerca in ògni dove (anche inte pàgine de discusción)',
'searchprofile-advanced-tooltip'   => 'Çerca inti namespace personalizæ',
'search-result-size'               => '$1 ({{PLURAL:$2|1 paròlla|$2 paròlle}})',
'search-result-category-size'      => '{{PLURAL:$1|1 utente|$1 utenti}} ({{PLURAL:$2|1 sottocategoria|$2 sottocategorie}}, {{PLURAL:$3|1 file|$3 file}})',
'search-redirect'                  => '(redirect $1)',
'search-section'                   => '(seçión $1)',
'search-suggest'                   => 'Fòscia ti voéivi: $1',
'searchrelated'                    => 'relativi',
'searchall'                        => 'tùtti',
'showingresultsheader'             => "{{PLURAL:$5|Rizoltato '''$1''' di '''$3'''|Rizoltati '''$1 - $2''' de '''$3'''}} pe '''$4'''",
'search-nonefound'                 => 'Mi no ò trovòu nìnte',
'powersearch'                      => 'Çerca',

# Preferences page
'preferences'             => 'Preferençe',
'mypreferences'           => 'Mæ preferense',
'changepassword'          => 'Cangiâ a pòula segretta',
'skin-preview'            => 'Anteprimma',
'prefs-datetime'          => 'Data e oùa',
'saveprefs'               => 'Sarva',
'prefs-editing'           => 'Cangia',
'searchresultshead'       => 'Çerca',
'timezonelegend'          => 'Oùa',
'allowemail'              => 'Permitti a posta elettronega da ätri utenti',
'default'                 => 'Predefinïo',
'prefs-files'             => 'Papê',
'youremail'               => 'Indirìsso email:',
'username'                => "Nomme d'utente",
'yourrealname'            => 'Nomme vêo:',
'yourlanguage'            => 'Léngoa:',
'yourvariant'             => 'Differensa',
'yournick'                => 'Nommeaggio:',
'badsig'                  => 'Errô in ta firma; controlla i comandi HTML.',
'badsiglength'            => "O nommeaggio o l'é tròppo lóngo; o dêve avéi meno de $1 caratteri.",
'email'                   => 'Posta elettronega',
'prefs-help-realname'     => '* Nomme vëo (opsionâ): se o se scellie de scrivilo, o sajà dêuviòu pe ascrivighe a paternitæ di contegnûi inviæ.',
'prefs-help-email'        => "L'emal a no l'é obligatöia, ma a teu peu permette de reçéive a paròlla segrétta se ti t'ascòrdi.",
'prefs-help-email-others' => 'Ti ti peu ascì scélie de lasciâ che i âtri te contâtino da-e teu pàgine utente ò de discoscioìn sénsa revelâ a teu indentitæ.',

# Groups
'group-user' => 'Ûtenti',

'grouppage-sysop' => '{{ns:project}}:Amministratoî',

# User rights log
'rightslog' => "Diritti d'ûtente",

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'càngia sta pàgina',

# Recent changes
'nchanges'                        => '$1 {{PLURAL:$1|modiffica|modiffiche}}',
'recentchanges'                   => 'Ùrtimi cangiamenti',
'recentchanges-legend'            =