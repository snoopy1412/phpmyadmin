<?php
/* $Id$ */

/**
 * Translated by: Laurent Dhima <laurenti at users.sourceforge.net>
*/

$charset = 'iso-8859-1';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Djl', 'H�n', 'Mar', 'M�r', 'Enj', 'Pre', 'Sht'); //albanian days
$month = array('Jan', 'Shk', 'Mar', 'Pri', 'Maj', 'Qer', 'Kor', 'Gsh', 'Sht', 'Tet', 'N�n', 'Dhj'); //albanian months
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B, %Y at %I:%M %p'; //albanian time
$timespanfmt = '%s dit�, %s or�, %s minuta dhe %s sekonda';

$strAPrimaryKey = 'Nj� ky� primar u shtua tek %s';
$strAbortedClients = 'D�shtoi';
$strAbsolutePathToDocSqlDir = 'Ju lutem, shkruani pozicionin absolut n� webserver p�r tek directory e docSQL';
$strAccessDenied = 'Hyrja nuk u pranua';
$strAccessDeniedExplanation = 'phpMyAdmin u p�rpoq t� lidhet me server-in MySQL, dhe server-i refuzoi lidhjen. Kontrollo emrin e host, username dhe password tek file config.inc.php dhe sigurohu q� korrispondojn� me informacionet q� ju ka dh�n� administratori i server-it MySQL.';
$strAction = 'Veprimi';
$strAddAutoIncrement = 'Shto vler� AUTO_INCREMENT';
$strAddDeleteColumn = 'Shto/Fshi fush�n';
$strAddDeleteRow = 'Shto/Fshi kriterin';
$strAddDropDatabase = 'Shto DROP DATABASE';
$strAddIntoComments = 'Shto tek komentet';
$strAddNewField = 'Shto nj� fush� t� re';
$strAddPriv = 'Shto nj� privilegj t� ri';
$strAddPrivMessage = 'Ke shtuar nj� privilegj t� ri.';
$strAddPrivilegesOnDb = 'Shto privilegje tek databaza n� vazhdim';
$strAddPrivilegesOnTbl = 'Shto privilegje tek tabela n� vazhdim';
$strAddSearchConditions = 'Shto kushte k�rkimi (trupi i specifikimit "where"):';
$strAddToIndex = 'Shto tek treguesi i &nbsp;%s&nbsp;kolon�s(ave)';
$strAddUser = 'Shto nj� p�rdorues t� ri';
$strAddUserMessage = 'Ke shtuar nj� p�rdorues t� ri.';
$strAddedColumnComment = 'Komenti u shtua n� kollon�';
$strAddedColumnRelation = 'Relacioni u shtua p�r kollon�n';
$strAdministration = 'Administrimi';
$strAffectedRows = 'Rreshtat e ndikuar:';
$strAfter = 'Mbas %s';
$strAfterInsertBack = 'Mbrapa';
$strAfterInsertNewInsert = 'Shto nj� record t� ri';
$strAll = 'T� gjith�';
$strAllTableSameWidth = 'vizualizon t� gjitha tabelat me t� nj�jt�n gj�r�si?';
$strAlterOrderBy = 'Transformo tabel�n e renditur sipas';
$strAnIndex = 'Nj� tregues u shtua tek %s';
$strAnalyzeTable = 'Analizo tabel�n';
$strAnd = 'Dhe';
$strAny = '�far�do';
$strAnyColumn = '�far�do kolone';
$strAnyDatabase = '�far�do databaz�';
$strAnyHost = '�far�do host';
$strAnyTable = '�far�do tabel�';
$strAnyUser = '�far�do p�rdorues';
$strArabic = 'Arabisht';
$strArmenian = 'Armene';
$strAscending = 'Ngjitje';
$strAtBeginningOfTable = 'N� fillim t� tabel�s';
$strAtEndOfTable = 'N� fund t� tabel�s';
$strAttr = 'Pron�si';
$strAutodetect = 'Zbulim automatik';
$strAutomaticLayout = 'Faqosje automatike';

$strBack = 'Mbrapa';
$strBaltic = 'Baltike';
$strBeginCut = 'FILLIMI I CUT';
$strBeginRaw = 'FILLIMI I RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'T� dh�na t� tipit binar - mos ndrysho';
$strBookmarkAllUsers = 'Lejo q� �do p�rdorues t� ket� hyrje n� k�t� lib�rsh�nues';
$strBookmarkDeleted = 'Lib�rsh�nuesi u fshi.';
$strBookmarkLabel = 'Etiket�';
$strBookmarkOptions = 'Opcionet e lib�rsh�nuesit';
$strBookmarkQuery = 'Query SQL shtuar t� preferuarve';
$strBookmarkThis = 'Shtoja t� preferuarve k�t� query SQL';
$strBookmarkView = 'Shfaq vet�m';
$strBrowse = 'Shfaq';
$strBrowseForeignValues = 'Shfleto opcionet e huaja';
$strBulgarian = 'Bullgarisht';
$strBzError = 'phpMyAdmin nuk �sht� n� gjendje t� kompresoj� dump-in p�r arsye t� prapashtes�s Bz2 t� gabuar n� k�t� version t� php. Ju rekomandojm� patjet�r vendosjen e <code>$cfg[\'BZipDump\']</code> tek file juaj i konfigurimit t� phpMyAdmin n� <code>FALSE</code>. N�qoft�se d�shironi t� p�rdorni patjet�r specifikat e kompresimit Bz2, duhet t� rifreskoni php n� versionin e fundit. Hidhini nj� sy php bug report %s p�r informacione t� holl�sishme.';
$strBzip = '"kompresuar me bzip2"';

$strCSVOptions = 'Opcione CSV';
$strCannotLogin = 'E pamundur kryerja e login tek server-i MySQL';
$strCantLoad = 'I pamundur ngarkimi i prapashtes�s %s,<br />kontrollo konfigurimin e PHP';
$strCantLoadMySQL = 'nuk arrij t� ngarkoj prapashtes�n MySQL,<br />kontrollo konfigurimin e PHP.';
$strCantLoadRecodeIconv = 'I pamundur ngarkimi i prapashtes�s iconv apo recode t� nevoitsh�m p�r konvertimin e karaktereve, konfiguroni php p�r t� lejuar p�rdorimin e k�tyre prapashtesave ose disaktivoni konvertimin e set t� karaktereve n� phpMyAdmin.';
$strCantRenameIdxToPrimary = 'I pamundur riem�rtimi i treguesit n� PRIMAR!';
$strCantUseRecodeIconv = 'I pamundur p�rdorimi i funksioneve iconv apo libiconv apo recode_string p�r shkak se ekstensioni duhet t� ngarkohet. Kontrolloni konfigurimin e php.';
$strCardinality = '';
$strCarriage = 'Kryerradha: \\r';
$strCaseInsensitive = 'case-insensitive';
$strCaseSensitive = 'case-sensitive';
$strCentralEuropean = 'Europa qendrore';
$strChange = 'Ndrysho';
$strChangeCopyMode = 'Krijo nj� p�rdorues t� ri me t� nj�jta t� drejta dhe ...';
$strChangeCopyModeCopy = '... mbaj t� vjetrin.';
$strChangeCopyModeDeleteAndReload = ' ... elemino t� vjetrin nga tabela e p�rdoruesve e pastaj rilexo t� drejtat.';
$strChangeCopyModeJustDelete = ' ... elemino t� vjetrin nga tabela e p�rdoruesve.';
$strChangeCopyModeRevoke = ' ... hiq t� gjitha t� drejtat nga i vjetri e pastaj eleminoje.';
$strChangeCopyUser = 'Ndrysho Informacionet e Login / Kopjo p�rdoruesin';
$strChangeDisplay = 'Zgjidh fush�n q� d�shiron t� shoh�sh';
$strChangePassword = 'Ndrysho password';
$strCharset = 'Familje g�rmash';
$strCharsetOfFile = 'Familja g�rmave t� file:';
$strCharsets = 'Familje g�rmash';
$strCharsetsAndCollations = 'Familje g�rmash dhe Collations';
$strCheckAll = 'Zgjidhi t� gjith�';
$strCheckDbPriv = 'Kontrollo t� drejtat e databaz�s';
$strCheckPrivs = 'Kontrollo t� drejtat';
$strCheckPrivsLong = 'Kontrollo t� drejtat p�r databaz�n &quot;%s&quot;.';
$strCheckTable = 'Kontrollo tabel�n';
$strChoosePage = 'Ju lutem zgjidhni faqen q� d�shironi t� modifikoni';
$strColComFeat = 'Vizualizimi i komenteve t� kollonave';
$strCollation = 'Collation';
$strColumn = 'Kollona';
$strColumnNames = 'Emrat e kollonave';
$strColumnPrivileges = 'Privilegjet relative t� kollonave';
$strCommand = 'Komanda';
$strComments = 'Komente';
$strCompleteInserts = 'T� shtuarat komplet';
$strCompression = 'Kompresim';
$strConfigFileError = 'phpMyAdmin nuk arrin t� lexoj� file e konfigurimit!<br />Kjo mund t� ndodh� kur php gjen nj� parse error n� t� apo kur php nuk arrin ta gjej� k�t� file.<br />Ju lutem ngarkoheni direkt file e konfigurimit duke p�rdorur link-un e m�posht�m dhe lexoni mesazhin(et) e gabimeve php q� merrni. N� shumic�n e rasteve mund t\'ju mungoj� nj� apostrof� apo nj� presje.<br />N�se faqja q� do t\'ju hapet �sht� bosh (e bardh�), at�here gjith�ka �sht� n� rregull.';
$strConfigureTableCoord = 'Ju lutem, konfiguroni koordinatat p�r tabel�n %s';
$strConfirm = 'I sigurt q� d�shiron ta b�sh?';
$strConnections = 'Lidhje';
$strCookiesRequired = 'Nga kjo pik� e tutje, cookies duhet t� jen� t� aktivuara.';
$strCopyTable = 'Kopjo tabel�n tek (databaz�<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s u kopjua tek %s.';
$strCopyTableSameNames = 'I pamundur kopjimi i tabel�s tek vetvetja!';
$strCouldNotKill = 'phpMyAdmin nuk �sht� n� gjendje t� p�rfundoj� thread %s. Ka mund�si t� ket� p�rfunduar m� par�.';
$strCreate = 'Krijo';
$strCreateIndex = 'Krijo nj� tregues tek &nbsp;%s&nbsp;columns';
$strCreateIndexTopic = 'Krijo nj� tregues t� ri';
$strCreateNewDatabase = 'Krijo nj� databaz� t� re';
$strCreateNewTable = 'Krijo nj� tabel� t� re tek databaz� %s';
$strCreatePage = 'Krijo nj� faqe t� re';
$strCreatePdfFeat = 'Krijimi i PDF-ve';
$strCriteria = 'Kriteri';
$strCroatian = 'Kroate';
$strCyrillic = 'Cyrillic';
$strCzech = '�ekisht';

$strDBComment = 'Komenti p�r Databaz�n: ';
$strDBGContext = 'Konteksti';
$strDBGContextID = 'ID e kontekstit';
$strDBGHits = 'Hits';
$strDBGLine = 'Rreshti';
$strDBGMaxTimeMs = 'Koha maksimum, ms';
$strDBGMinTimeMs = 'Koha minimum, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Koha/Hit, ms';
$strDBGTotalTimeMs = 'Koha gjithsej, ms';
$strDanish = 'Danisht';
$strData = 'T� dh�na';
$strDataDict = 'Data Dictionary';
$strDataOnly = 'Vet�m t� dh�na';
$strDatabase = 'Databaz� ';
$strDatabaseExportOptions = 'Opcione t� eksportimit t� databaz�s';
$strDatabaseHasBeenDropped = 'Databaza %s u eleminua.';
$strDatabaseNoTable = 'Kjo databaz� nuk p�rmban tabela!';
$strDatabaseWildcard = 'Database (wildcards e lejuara):';
$strDatabases = 'databaz�';
$strDatabasesDropped = '%s databaza u eleminuan korrekt�sisht.';
$strDatabasesStats = 'Statistikat e databazave';
$strDatabasesStatsDisable = 'Disaktivo Statistikat';
$strDatabasesStatsEnable = 'Aktivo Statistikat';
$strDatabasesStatsHeavyTraffic = 'Sh�nim: Aktivimi k�tu i statistikave t� Databaz�s mund t� shkaktoj� rritjen e trafikut midis server-it web dhe MySQL.';
$strDbPrivileges = 'Privilegje specifike t� databaz�s';
$strDbSpecific = 'specifik i databaz�s';
$strDefault = 'Prezgjedhur';
$strDefaultValueHelp = 'P�r vlerat e prezgjedhura, ju lutem shtoni nj� vler� t� vetme, pa backslash escaping apo thonj�za, duke p�rdorur k�t� format: a';
$strDelOld = 'Faqja aktuale p�rmban riferime ndaj tabelash q� nuk ekzistojn� m�. D�shironi t\'i eleminoni k�to riferimente?';
$strDelete = 'Fshi';
$strDeleteAndFlush = 'Fshi p�rdoruesit dhe pastaj rilexo privilegjet.';
$strDeleteAndFlushDescr = 'Kjo �sht� rruga m� e past�r, por ngarkimi i privilegjeve mund t� zgjas� disa �aste m� shum�.';
$strDeleteFailed = 'Fshirja d�shtoi!';
$strDeleteUserMessage = 'Ke fshir� p�rdoruesin %s.';
$strDeleted = 'rreshti u fshi';
$strDeletedRows = 'rreshtat e fshir�:';
$strDeleting = 'N� fshirje e sip�r t� %s';
$strDescending = 'Zbrit�s';
$strDescription = 'P�rshkrimi';
$strDictionary = 'fjalor';
$strDisabled = 'Jo aktiv';
$strDisplay = 'Shfaq';
$strDisplayFeat = 'Shfaq karakteristikat';
$strDisplayOrder = 'M�nyra e shfaqjes:';
$strDisplayPDF = 'Shfaq skem�n e PDF';
$strDoAQuery = 'Zbato "query nga shembull" (karakteri jolly: "%")';
$strDoYouReally = 'Konfermo: ';
$strDocu = 'Dokumentet';
$strDrop = 'Elemino';
$strDropDB = 'Elemino databaz�n %s';
$strDropSelectedDatabases = 'Elemino Databazat e zgjedhura';
$strDropTable = 'Elemino tabel�n';
$strDropUsersDb = 'Elemino databazat q� kan� em�r t� nj�jt� me p�rdoruesit.';
$strDumpComments = 'P�rfshi komentet e kollonave si komente-SQL n� linj�';
$strDumpSaved = 'Dump u ruajt tek file %s.';
$strDumpXRows = 'Dump i %s rreshta duke filluar nga rreshti %s.';
$strDumpingData = 'Dump i t� dh�nave p�r tabel�n';
$strDynamic = 'dinamik';

$strEdit = 'Ndrysho';
$strEditPDFPages = 'Ndrysho faqen PDF';
$strEditPrivileges = 'Ndrysho t� drejtat';
$strEffective = 'Efektiv';
$strEmpty = 'Zbraz';
$strEmptyResultSet = 'MySQL ka kthyer nj� t� p�rbashk�t boshe (p.sh. zero rreshta).';
$strEnabled = 'Aktiv';
$strEnd = 'Fund';
$strEndCut = 'FUNDI I CUT';
$strEndRaw = 'FUNDI I RAW';
$strEnglish = 'Anglisht';
$strEnglishPrivileges = 'Sh�nim: emrat e t� drejtave t� MySQL jan� n� Anglisht';
$strError = 'Gabim';
$strEstonian = 'Estoneze';
$strExcelOptions = 'Opcione t� Excel';
$strExecuteBookmarked = 'Zbaton query nga lib�rsh�nuesi';
$strExplain = 'Shpjego SQL';
$strExport = 'Eksporto';
$strExportToXML = 'Eksporto n� formatin XML';
$strExtendedInserts = 'T� shtuara t� zgjeruara';
$strExtra = 'Extra';

$strFailedAttempts = 'P�rpjekje t� d�shtuara';
$strField = 'Fush�';
$strFieldHasBeenDropped = 'Fusha %s u eleminua';
$strFields = 'Fusha';
$strFieldsEmpty = ' Numratori i fushave �sht� bosh! ';
$strFieldsEnclosedBy = 'Fush� e p�rb�r� nga';
$strFieldsEscapedBy = 'Fush� e kufizuar nga';
$strFieldsTerminatedBy = 'Fush� q� mbaron me';
$strFileAlreadyExists = 'File %s ekziston n� server: t� lutem, ndrysho emrin e file ose zgjidh opcionin "Mbishkruaj".';
$strFileCouldNotBeRead = 'File nuk mund t� lexohet';
$strFileNameTemplate = 'Emri i file template';
$strFileNameTemplateHelp = 'P�rdor __DB__ p�r emrin e databaz�s, __TABLE__ si em�r p�r tabel�n dhe %sany strftime%s opcione p�r specifikat e koh�s, prapashtesa do t� shtohet automatikisht. �do tekst tjet�r do t� konservohet.';
$strFileNameTemplateRemember = 'kujto template';
$strFixed = 'fiks';
$strFlushPrivilegesNote = 'Sh�nim: phpMyAdmin lexon privilegjet e p�rdoruesve direkt nga tabela e privilegjeve t� MySQL. P�rmbajtja e k�saj tabele mund t� ndryshoj� nga privilegjet e p�rdorur nga serveri n�se jan� kryer ndryshime manuale. N� k�t� rast, duhet t� %srifreskoni privilegjet%s para se t� vazhdoni.';
$strFlushTable = 'Rifillo ("FLUSH") tabel�n';
$strFormEmpty = 'Mungon nj� vler� n� formular!';
$strFormat = 'Formati';
$strFullText = 'Teksti i plot�';
$strFunction = 'Funksioni';

$strGenBy = 'Gjeneruar nga';
$strGenTime = 'Gjeneruar m�';
$strGeneralRelationFeat = 'Karakteristikat e p�rgjithshme t� relacionit';
$strGerman = 'Gjermanisht';
$strGlobal = 'globale';
$strGlobalPrivileges = 'Privilegje globale';
$strGlobalValue = 'Vler� Globale';
$strGo = 'Zbato';
$strGrantOption = 'Grant';
$strGrants = 'Lejo';
$strGreek = 'Greqisht';
$strGzip = '"kompresuar me gzip"';

$strHasBeenAltered = 'u ndryshua.';
$strHasBeenCreated = 'u krijua.';
$strHaveToShow = 'Zgjidh t� pakt�n nj� kolon� p�r t� par�';
$strHebrew = 'Hebraike';
$strHome = 'Faqja web';
$strHomepageOfficial = 'Faqja zyrtare e phpMyAdmin';
$strHomepageSourceforge = 'Faqja e phpMyAdmin tek sourceforge.net';
$strHost = 'Host';
$strHostEmpty = 'Emri i host �sht� bosh!';
$strHungarian = 'Hungarisht';

$strId = 'ID';
$strIdxFulltext = 'Teksti komplet';
$strIfYouWish = 'P�r t� ngarkuar t� dh�nat vet�m p�r disa kollona t� tabel�s, specifiko list�n e fushave (t� ndara me presje).';
$strIgnore = 'Shp�rfill';
$strIgnoringFile = 'File %s u shp�rfill';
$strImportDocSQL = 'Importo files docSQL';
$strImportFiles = 'Importo files';
$strImportFinished = 'Importimi p�rfundoi';
$strInUse = 'n� p�rdorim';
$strIndex = 'Treguesi';
$strIndexHasBeenDropped = 'Treguesi %s u eleminua';
$strIndexName = 'Emri i treguesit&nbsp;:';
$strIndexType = 'Lloji i treguesit&nbsp;:';
$strIndexes = 'Tregues';
$strInnodbStat = 'Gj�ndja InnoDB';
$strInsecureMySQL = 'File i konfigurimit n� p�rdorim p�rmban zgjedhje (root pa asnj� password) q� korrispondojn� me t� drejtat e account MySQL t� paracaktuar. Nj� server MySQL funksionues me k�to zgjedhje �sht� i pambrojtur ndaj sulmeve, dhe ju duhet patjet�r t� korrigjoni k�t� vrim� n� siguri.';
$strInsert = 'Shto';
$strInsertAsNewRow = 'Shto nj� rresht t� ri';
$strInsertNewRow = 'Shto nj� rresht t� ri';
$strInsertTextfiles = 'Shto nj� file teksti n� tabel�';
$strInsertedRowId = 'U shtua id e rreshtit:';
$strInsertedRows = 'Rreshtat e shtuar:';
$strInstructions = 'Instruksione';
$strInternalNotNecessary = '* Nuk ka nevoj� p�r nj� relacion t� brendsh�m kur ky relacion ekziston n� InnoDB.';
$strInternalRelations = 'Relacione t� brendshme';
$strInvalidName = '"%s" �sht� nj� fjal� e rezervuar; nuk mund ta p�rdor�sh si em�r p�r databaz�/tabel�/fush�.';

$strJapanese = 'Japonisht';
$strJumpToDB = 'Kalo tek databaza &quot;%s&quot;.';
$strJustDelete = 'Vet�m fshi p�rdoruesit nga tabelat e privilegjeve.';
$strJustDeleteDescr = 'P�rdoruesit e &quot;fshir�&quot; do t� ken� akoma mund�si t� futen n� server si zakonisht derisa privilegjet t� ringarkohen p�rs�ri.';

$strKeepPass = 'Mos ndrysho password';
$strKeyname = 'Emri i ky�it';
$strKill = 'Hiq';
$strKorean = 'Koreane';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'Opcione LaTeX';
$strLandscape = 'Horizontale';
$strLatexContent = 'P�rmbajtja e tabel�s __TABLE__';
$strLatexContinued = '(vazhdon)';
$strLatexContinuedCaption = 'N�ntitulli i tabel�s vazhduese';
$strLatexIncludeCaption = 'P�rfshi n�ntitullin e tabel�s';
$strLatexLabel = '�elsi i etiket�s';
$strLatexStructure = 'Struktura e tabel�s __TABLE__';
$strLength = 'Gjat�sia';
$strLengthSet = 'Gjat�sia/Set*';
$strLimitNumRows = 'record p�r faqe';
$strLineFeed = 'Fundi i rreshtit: \\n';
$strLines = 'Record';
$strLinesTerminatedBy = 'Rreshta q� mbarojn� me';
$strLinkNotFound = 'Lidhja nuk u gjet';
$strLinksTo = 'Lidhje me';
$strLithuanian = 'Lituane';
$strLoadExplanation = 'Metoda m� e mir� �sht� zgjedhur si default, por ju jepet mund�sia t\'a ndryshoni n�qoft�se d�shton.';
$strLoadMethod = 'Metoda e NGARKIMIT';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Pozicioni i file';
$strLogPassword = 'Password:';
$strLogServer = 'Server-i';
$strLogUsername = 'Emri i p�rdoruesit:';
$strLogin = 'Lidh';
$strLoginInformation = 'Informacione mbi Login';
$strLogout = 'Shk�put';

$strMIME_MIMEtype = 'Lloji MIME';
$strMIME_available_mime = 'Lloje MIME n� dispozicion';
$strMIME_available_transform = 'Transformacionet n� dispozicion';
$strMIME_description = 'P�rshkrimi';
$strMIME_file = 'Emri i File';
$strMIME_nodescription = 'Asnj� p�rshkrim n� dispozicion p�r k�t� transformim.<br />Ju lutem pyet autorin, �far� %s b�n.';
$strMIME_transformation = 'Transformimi i Browser';
$strMIME_transformation_note = 'P�r list�n e opcioneve t� transformimeve n� dispozicion dhe transformimet relativ� t� llojeve-MIME, kliko tek %sp�rshkrimet e transformimeve%s';
$strMIME_transformation_options = 'Opcione t� transformimeve';
$strMIME_transformation_options_note = 'Ju lutem shkruani vlerat p�r opcionet e transformimit duke p�rdorur k�t� format: \'a\',\'b\',\'c\'...<br />N�se keni nevoj� t� shtoni nj� backslash ("\") apo nj� apostrof� ("\'") midis k�tyre vlerave, duhet ti backslash-oni (p�r shembull \'\\\\xyz\' ose \'a\\\'b\').';
$strMIME_without = 'Llojet-MIME t� print-uar n� italics kan� nj� funksion transformacioni t� ve�ant�';
$strMissingBracket = 'Mungojn� thonj�za';
$strModifications = 'Ndryshimet u shp�tuan';
$strModify = 'Ndrysho';
$strModifyIndexTopic = 'Ndrysho nj� tregues';
$strMoreStatusVars = 'M� shum� t� ndryshueshme t� gjendjes';
$strMoveTable = 'Sposto tabel�n n� (databaz�<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s u l�viz tek %s.';
$strMoveTableSameNames = 'E pamundur l�vizja e tabel�s tek vetvetja!';
$strMultilingual = 'shum�gjuh�sh';
$strMustSelectFile = 'Duhet t� zgjidhni file q� d�shironi t� shtoni.';
$strMySQLCharset = 'Set karakteresh MySQL';
$strMySQLReloaded = 'MySQL u rifillua.';
$strMySQLSaid = 'Mesazh nga MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% n� ekzekutim tek %pma_s2% si %pma_s3%';
$strMySQLShowProcess = 'Shfaq proceset n� ekzekutim';
$strMySQLShowStatus = 'Shfaq informacionet e runtime t� MySQL';
$strMySQLShowVars = 'Shfaq t� ndryshueshmet e sistemit t� MySQL';

$strName = 'Emri';
$strNext = 'N� vazhdim';
$strNo = ' Jo ';
$strNoDatabases = 'Asnj� databaz�';
$strNoDatabasesSelected = 'Asnj� databaz� �sht� zgjedhur.';
$strNoDescription = 'asnj� p�rshkrim';
$strNoDropDatabases = 'Komandat "DROP DATABASE" nuk jan� aktive.';
$strNoExplain = 'Mos shpjego SQL';
$strNoFrames = 'phpMyAdmin funksionon m� mir� me browser q� suportojn� frames';
$strNoIndex = 'Asnj� tregues i p�rcaktuar!';
$strNoIndexPartsDefined = 'Asnj� pjes� e treguesit �sht� p�rcaktuar!';
$strNoModification = 'Asnj� ndryshim';
$strNoOptions = 'Ky format nuk ka opcione';
$strNoPassword = 'Asnj� password';
$strNoPermission = 'Server-i web nuk ka t� drejtat e duhura p�r t� ruajtur file %s.';
$strNoPhp = 'pa kod PHP';
$strNoPrivileges = 'Asnj� privilegj';
$strNoQuery = 'Asnj� query SQL!';
$strNoRights = 'Nuk ke t� drejta t� mjaftueshme p�r t� kryer k�t� operacion!';
$strNoSpace = 'Hap�sir� e pamjaftueshme p�r t� ruajtur file %s.';
$strNoTablesFound = 'Nuk gjenden tabela n� databaz�.';
$strNoUsersFound = 'Nuk u gjet asnj� p�rdorues.';
$strNoUsersSelected = 'Nuk �sht� seleksionuar asnj� p�rdorues.';
$strNoValidateSQL = 'Mos vleft�so SQL';
$strNone = 'Asnj� lloj';
$strNotNumber = 'Ky nuk �sht� nj� num�r!';
$strNotOK = 'jo OK';
$strNotSet = '<b>%s</b> tabela nuk u gjet ose nuk �sht� p�rcaktuar tek %s';
$strNotValidNumber = ' nuk �sht� nj� rresht i vlefsh�m!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s korrispondon(jn�) tek tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Gjithsej:</b> <i>%s</i> korrispondues(�)';
$strNumTables = 'Tabela';

$strOK = 'OK';
$strOftenQuotation = 'Zakonisht nga dopjo thonjza. ME D�SHIR� tregon q� vet�m fushat <I>char</I> dhe <I>varchar</I> duhet t� delimitohen nga karakteri i treguar.';
$strOperations = 'Operacione';
$strOptimizeTable = 'Optimizo tabel�n';
$strOptionalControls = 'Me d�shir�. Ky karakter kontrollon si t� shkruash apo lexosh karakteret special�.';
$strOptionally = 'ME D�SHIR�';
$strOptions = 'Mund�si';
$strOr = 'Ose';
$strOverhead = 'Mbi limit';
$strOverwriteExisting = 'Mbishkruaj file(s) ekzistues';

$strPHP40203 = '�sht� n� p�rdorim PHP 4.2.3, q� p�rmban nj� difekt serioz me stringat multi-byte strings (mbstring). Shiko raportin 19404 t� bug PHP. Ky version i PHP nuk rekomandohet p�r tu p�rdorur me phpMyAdmin.';
$strPHPVersion = 'Versioni i PHP';
$strPageNumber = 'Numri i faqes:';
$strPaperSize = 'P�rmasat e letr�s';
$strPartialText = 'Tekst i pjes�sh�m';
$strPassword = 'Password';
$strPasswordChanged = 'Password p�r p�rdoruesin %s u ndryshua me sukses.';
$strPasswordEmpty = 'Password �sht� bosh!';
$strPasswordNotSame = 'Password nuk korrispondon!';
$strPdfDbSchema = 'Skema e databaz� "%s" - Faqja %s';
$strPdfInvalidPageNum = 'Numri i faqes s� PDF i pap�rcaktuar!';
$strPdfInvalidTblName = 'Tabela "%s" nuk ekziston!';
$strPdfNoTables = 'Asnj� tabel�';
$strPerHour = 'n� or�';
$strPerMinute = 'n� minut�';
$strPerSecond = 'n� sekond�';
$strPhoneBook = 'numratori';
$strPhp = 'Krijo kodin PHP';
$strPmaDocumentation = 'Dokumente t� phpMyAdmin';
$strPmaUriError = 'Direktiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DUHET t� p�rcaktohet tek file i konfigurimit!';
$strPortrait = 'Vertikal';
$strPos1 = 'Fillim';
$strPrevious = 'Paraardh�si';
$strPrimary = 'Primar';
$strPrimaryKey = 'Ky� primar';
$strPrimaryKeyHasBeenDropped = 'Ky�i primar u eleminua';
$strPrimaryKeyName = 'Emri i ky�it primar duhet t� jet�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>duhet</b> t� jet� emri i, dhe <b>vet�m i</b>, nj� ky�i primar!)';
$strPrint = 'Printo';
$strPrintView = 'Shfaq p�r printim';
$strPrintViewFull = 'Shfaq p�r printim (me full text)';
$strPrivDescAllPrivileges = 'P�rfshin t� gjitha t� drejtat me p�rjashtim t� GRANT.';
$strPrivDescAlter = 'Lejon ndryshimin e struktur�s s� tabelave ekzistuese.';
$strPrivDescCreateDb = 'Lejon krijimin e tabelave t� reja dhe databazave t� reja.';
$strPrivDescCreateTbl = 'Lejon krijimin e tabelave t� reja.';
$strPrivDescCreateTmpTable = 'Lejon krijimin e tabelave t� p�rkoh�shme.';
$strPrivDescDelete = 'Lejon fshirjen e t� dh�nave.';
$strPrivDescDropDb = 'Lejon eleminimin e databazave dhe tabelave.';
$strPrivDescDropTbl = 'Lejon eleminimin e tabelave.';
$strPrivDescExecute = 'Lejon ekzekutimin e procedurave t� regjistruara; Nuk ka efekt n� k�t� version t� MySQL.';
$strPrivDescFile = 'Lejon importimin e t� dh�nave nga dhe eksportimin e t� dh�nave n� files.';
$strPrivDescGrant = 'Lejon t� shtosh p�rdorues dhe privilegje pa ringarkuar tabelat e privilegjeve.';
$strPrivDescIndex = 'Lejon krijimin dhe eleminimin e treguesve.';
$strPrivDescInsert = 'Lejon futjen dhe mbishkrimin e t� dh�nave.';
$strPrivDescLockTables = 'Lejon bllokimin e tabelave p�r thread e momentit.';
$strPrivDescMaxConnections = 'Kufizon numrin e lidhjeve t� reja q� nj� p�rdorues mund t� hap� n� nj� or�.';
$strPrivDescMaxQuestions = 'Kufizon numrin e k�rkesave q� nj� p�rdorues mund ti d�rgoj� server-it n� nj� or�.';
$strPrivDescMaxUpdates = 'Kufizon numrin e komandave q� mund t� ndryshojn� nj� tabel� apo databaz� q� nj� p�rdorues mund t� zbatoj� n� nj� or�.';
$strPrivDescProcess3 = 'Lejon vrasjen e proceseve t� p�rdoruesve t� tjer�.';
$strPrivDescProcess4 = 'Lejon shikimin e queries komplete tek lista e proceseve.';
$strPrivDescReferences = 'Nuk ka asnj� efekt tek ky version i MySQL.';
$strPrivDescReload = 'Lejon ringarkimin e parametrave t� server-it dhe risetimin e cache t� server/ve.';
$strPrivDescReplClient = 'I jep t� drejt�n nj� p�rdoruesi t� pyes� se ku gjenden slaves / masters.';
$strPrivDescReplSlave = 'Nevoitet p�r replikimin e slaves.';
$strPrivDescSelect = 'Lejon leximin e t� dh�nave.';
$strPrivDescShowDb = 'Mund�son hyrjen tek lista komplete e databazave.';
$strPrivDescShutdown = 'Lejon fikjen e server-it.';
$strPrivDescSuper = 'Lejon lidhje t� tjera, edhe po t� jet� arritur numri maksimal i lidhjeve; I nevojsh�m p�r shum� operacione administrimi si p�rcaktimi i t� ndryshueshmeve globale apo fshirja e threads t� p�rdoruesve t� tjer�.';
$strPrivDescUpdate = 'Lejon ndryshimin e t� dh�nave.';
$strPrivDescUsage = 'Asnj� privilegj.';
$strPrivileges = 'Privilegje';
$strPrivilegesReloaded = 'Privilegjet u ringarkuan me sukses.';
$strProcesslist = 'Lista e Proceseve';
$strProperties = 'Pron�si';
$strPutColNames = 'Vendos emrat e kollonave tek rreshti i par�';

$strQBE = 'Query nga shembull';
$strQBEDel = 'Fshi';
$strQBEIns = 'Shto';
$strQueryFrame = 'Dritarja e Query';
$strQueryFrameDebug = 'Informacione t� Debug';
$strQueryFrameDebugBox = 'T� ndryshueshme aktive p�r formularin e query:\nDB: %s\nTabella: %s\nServer-i: %s\n\nT� ndryshueshmet aktuale p�r formularin e query:\nDB: %s\nTabella: %s\nServer-i: %s\n\nPozicioni i Opener: %s\nPozicioni i Frameset: %s.';
$strQueryOnDb = 'SQL-query tek databaz� <b>%s</b>:';
$strQuerySQLHistory = 'Kronollogjia e SQL';
$strQueryStatistics = '<b>Statistikat e Query</b>: Q� nga nisja e tij, server-it i jan� d�rguar %s queries.';
$strQueryTime = 'Query ka zgjatur %01.4f sec';
$strQueryType = 'Lloji i query';
$strQueryWindowLock = 'Mos e mbishkruaj k�t� query nga jasht� dritares';

$strReType = 'Rifut';
$strReceived = 'Marr�';
$strRecords = 'Record';
$strReferentialIntegrity = 'Kontrollo integritetin e informacioneve:';
$strRelationNotWorking = 'Karakteristikat shtes� jan� disaktivuar p�r sa i takon funksionimit me tabelat e link-uara. P�r t� zbuluar p�rse, klikoni %sk�tu%s.';
$strRelationView = 'Shiko relacionet';
$strRelationalSchema = 'Skema relazionale';
$strRelations = 'Relacione';
$strReloadFailed = 'Rinisja e MySQL d�shtoi.';
$strReloadMySQL = 'Rinis MySQL';
$strReloadingThePrivileges = 'Duke rilexuar privilegjet';
$strRememberReload = 'Kujtohu t� rinis�sh MySQL.';
$strRemoveSelectedUsers = 'Heq p�rdoruesit e zgjedhur';
$strRenameTable = 'Riem�rto tabel�n n�';
$strRenameTableOK = 'Tabela %s u riem�rtua %s';
$strRepairTable = 'Riparo tabel�n';
$strReplace = 'Z�v�nd�so';
$strReplaceNULLBy = 'Zev�nd�so NULL me';
$strReplaceTable = 'Z�v�nd�so t� dh�nat e tabel�s me file';
$strReset = 'Rinis';
$strResourceLimits = 'Limitet e rezervave';
$strRevoke = 'Hiq';
$strRevokeAndDelete = 'Hiqja t� gjitha t� drejtat aktive p�rdoruesve dhe pastaj eleminoi.';
$strRevokeAndDeleteDescr = 'P�rdoruesit DO T� MUND T� P�RDORIN sidoqoft� privilegjin deri at�here kur privilegjet t� ringarkohen.';
$strRevokeGrant = 'Hiq t� drejtat';
$strRevokeGrantMessage = 'Ke hequr privilegjet e t� drejtave p�r %s';
$strRevokeMessage = 'Ke anulluar privilegjet p�r %s';
$strRevokePriv = 'Anullo privilegjet';
$strRowLength = 'Gjat�sia e rreshtit';
$strRowSize = 'Dimensioni i rreshtit';
$strRows = 'rreshta';
$strRowsFrom = 'rreshta duke filluar nga';
$strRowsModeFlippedHorizontal = 'horizontal (headers t� rrotulluar)';
$strRowsModeHorizontal = ' horizontal ';
$strRowsModeOptions = ' n� modalitetin %s dhe p�rs�rit headers mbas %s qeli ';
$strRowsModeVertical = ' vertikal ';
$strRowsStatistic = 'Statistikat e rreshtave';
$strRunQuery = 'D�rgo Query';
$strRunSQLQuery = 'Zbato query SQL tek databaz� %s';
$strRunning = 'n� ekzekutim tek %s';
$strRussian = 'Rusisht';

$strSQL = 'SQL';
$strSQLOptions = 'Opcione SQL';
$strSQLParserBugMessage = 'Ka mund�si q� ka nj� bug tek parser SQL. Ju lutem, kontrolloni query tuaj me kujdes, dhe kontrolloni q� presjet t� jen� ku duhet dhe jo t� gabuara. Nj� shkak tjet�r i mundsh�m i gabimit mund t� jet� q� po mundoheni t� uploadoni nj� file binar jasht� nj� zone teksti t� kufizuar me presje. Mund edhe t� provoni query tuaj MySQL nga interfaqja e shkruar e komandave. Gabimi i m�posht�m i kthyer nga server-i MySQL, n�se ekziston nj� i till�, mund tju ndihmoj� n� diagnostikimin e problemit. N�se ka akoma probleme, apo n.q.s. parser-i SQL i phpMyAdmin gabon kur p�rkundrazi nga interfaqja e komandave t� thjeshta nuk rezultojn� probleme, ju lutem zvog�loni query tuaj SQL n� hyrje n� query e vetme q� shkakton probleme, dhe d�rgoni nj� bug raportim me t� dh�nat rezultuese nga seksioni CUT i m�posht�m:';
$strSQLParserUserError = 'Mesa duket ekziston nj� gabim tek query juaj SQL e futur. Gabimi i server-it MySQL i treguar m� posht�, n�se ekziston, mund t\'ju ndihmoj� n� diagnostikimin e problemit';
$strSQLQuery = 'query SQL';
$strSQLResult = 'Rezultati SQL';
$strSQPBugInvalidIdentifer = 'Identifikues i pavlefsh�m';
$strSQPBugUnclosedQuote = 'Thonj�za t� pambyllura';
$strSQPBugUnknownPunctuation = 'String� Punctuation e panjohur';
$strSave = 'Shp�to';
$strSaveOnServer = 'Ruaje n� server tek directory %s';
$strScaleFactorSmall = 'Faktori i shkall�s �sht� shum� i vog�l p�r t� plot�suar skem�n n� faqe';
$strSearch = 'K�rko';
$strSearchFormTitle = 'K�rko n� databaz�';
$strSearchInTables = 'Tek tabela(at):';
$strSearchNeedle = 'Fjala(�) apo vlera(at) p�r t\'u k�rkuar (karakteri Jolly: "%"):';
$strSearchOption1 = 't� pakt�n nj�r�n nga fjal�t';
$strSearchOption2 = 't� gjitha fjal�t';
$strSearchOption3 = 'fraza precize';
$strSearchOption4 = 'si ekspresion i rregullt';
$strSearchResultsFor = 'K�rko rezultatet p�r "<i>%s</i>" %s:';
$strSearchType = 'Gjej:';
$strSecretRequired = 'Tani nevoitet nj� fjal�kalim sekret p�r file e konfigurimit(blowfish_secret).';
$strSelect = 'Zgjidh';
$strSelectADb = 'T� lutem, zgjidh nj� databaz�';
$strSelectAll = 'Zgjidh gjith�ka';
$strSelectFields = 'Zgjidh fushat (t� pakt�n nj�):';
$strSelectNumRows = 'tek query';
$strSelectTables = 'Zgjidh Tabelat';
$strSend = 'Ruaje me em�r...';
$strSent = 'D�rguar';
$strServer = 'Server %s';
$strServerChoice = 'Zgjedhja e server';
$strServerStatus = 'Informacione mbi Runtime';
$strServerStatusUptime = 'Ky server server MySQL po punon q� prej %s. U nis m� %s.';
$strServerTabProcesslist = 'Proceset';
$strServerTabVariables = 'T� ndryshueshmet';
$strServerTrafficNotes = '<b>Trafiku i server-it</b>: K�to tabela do t� shfaqin statistikat e trafikut t� rrjetit p�r k�t� server MySQL q� nga momenti i nisjes s� tij.';
$strServerVars = 'T� ndryshueshmet dhe parametrat e Server-it';
$strServerVersion = 'Versioni i MySQL';
$strSessionValue = 'Vlera seanc�s';
$strSetEnumVal = 'N.q.s. fusha �sht� "enum" apo "set", shtoni t� dh�nat duke p�rdorur formatin: \'a\',\'b\',\'c\'...<br />N�se megjithat� do t\'u duhet t� vini backslashes ("\") apo single quote ("\'") para k�tyre vlerave, backslash-ojini (p�r shembull \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Shfaq';
$strShowAll = 'Shfaqi t� gjith�';
$strShowColor = 'Shfaq ngjyr�n';
$strShowCols = 'Shfaq kollonat';
$strShowDatadictAs = 'Formati i Data Dictionary';
$strShowFullQueries = 'Shfaq Queries komplete';
$strShowGrid = 'Shfaq rrjet�n';
$strShowPHPInfo = 'Trego info mbi PHP';
$strShowTableDimension = 'Trego dimensionin e tabelave';
$strShowTables = 'Shfaq tabelat';
$strShowThisQuery = 'Tregoje p�rs�ri k�t� query';
$strShowingRecords = 'Vizualizimi i record ';
$strSimplifiedChinese = 'Kineze e thjesht�zuar';
$strSingly = '(nj� nga nj�)';
$strSize = 'Dimensioni';
$strSort = 'rreshtimi';
$strSortByKey = 'Rendit sipas �elsit';
$strSpaceUsage = 'Hap�sira e p�rdorur';
$strSplitWordsWithSpace = 'Fjal�t jan� t� ndara nga nj� hapsir� (" ").';
$strStatCheckTime = 'Kontrolli i fundit';
$strStatCreateTime = 'Krijimi';
$strStatUpdateTime = 'Ndryshimi i fundit';
$strStatement = 'Instruksione';
$strStatus = 'Gjendja';
$strStrucCSV = 't� dh�na CSV';
$strStrucData = 'Struktura dhe t� dh�na';
$strStrucDrop = 'Shto \'drop table\'';
$strStrucExcelCSV = 'CSV p�r t� dh�na Ms Excel';
$strStrucOnly = 'Vet�m struktura';
$strStructPropose = 'Propozo struktur�n e tabel�s';
$strStructure = 'Struktura';
$strSubmit = 'D�rgoje';
$strSuccess = 'Query u zbatua me sukses';
$strSum = 'Gjithsej';
$strSwedish = 'Suedisht';
$strSwitchToTable = 'Kalo tek tabela e kopjuar';

$strTable = 'Tabela';
$strTableComments = 'Komente mbi tabel�n';
$strTableEmpty = 'Emri i tabel�s �sht� bosh!';
$strTableHasBeenDropped = 'Tabela %s u eleminua';
$strTableHasBeenEmptied = 'Tabela %s u zbraz';
$strTableHasBeenFlushed = 'Tabela %s u rifreskua';
$strTableMaintenance = 'Administrimi i tabel�s';
$strTableOfContents = 'Tabela e p�rmbajtjes';
$strTableOptions = 'Opcione p�r tabel�n';
$strTableStructure = 'Struktura e tabel�s';
$strTableType = 'Lloji i tabel�s';
$strTables = '%s tabela(at)';
$strTblPrivileges = 'T� drejta relative me tabelat';
$strTextAreaLength = ' P�r shkak t� gjat�sis� saj,<br /> kjo fush� nuk mund t� ndryshohet ';
$strThai = 'Thai';
$strTheContent = 'P�rmbajtja e file u shtua.';
$strTheContents = 'P�rmbajtja e file z�v�nd�son rreshtat e tabel�s me t� nj�jtin ky� primar apo ky� t� vet�m.';
$strTheTerminator = 'Karakteri p�rfundues i fushave.';
$strThisHost = 'K�t� Host';
$strThisNotDirectory = 'Kjo nuk �sht� nj� directory';
$strThreadSuccessfullyKilled = 'Thread %s u p�rfundua me sukses.';
$strTime = 'Koha';
$strToggleScratchboard = '(dis)aktivo scratchboard';
$strTotal = 'Gjithsej';
$strTotalUC = 'Gjithsej';
$strTraditionalChinese = 'Kineze tradicionale';
$strTraffic = 'Trafiku';
$strTransformation_image_jpeg__inline = 'Shfaq nj� thumbnail t� klikuesh�m; mund�sit�: gj�r�sia, lart�sia n� pixels (ruan proporcionin origjinal)';
$strTransformation_image_jpeg__link = 'Shfaq nj� lidhje p�r tek kjo figur� (download blob direkt, p.sh.).';
$strTransformation_image_png__inline = 'Shiko figur�n/jpeg: n� line';
$strTransformation_text_plain__dateformat = 'Merr nj� fush� TIME, TIMESTAMP apo DATETIME dhe e formaton duke p�rdorur formatin e dat�s lokale. Mund�sia e par� �sht� offset (n� or�) q� do ti shtohet timestamp (Default: 0). Mund�sia e dyt� �sht� nj� format date n� p�rputhje me parametrat n� dispozicion p�r funksionin strftime() t� PHP.';
$strTransformation_text_plain__external = 'VET�M P�R LINUX: L�shon nj� program t� jasht�m dhe plot�son t� dh�nat e fushave me an� t� standard input. Jep si rezultat standard output e programit. Vendosja default �sht� Tidy, p�r t� printuar si duhet kodin HTML. P�r arsye sigurie, do t\'ju duhet t� ndryshoni file libraries/transformations/text_plain__external.inc.php dhe t� shkruani instrumentet q� lejoni t� p�rdoren. Mund�sia e par� pra �sht� numri i programit q� d�shironi t� p�rdorni dhe e dyta jan� parametrat p�r programin. Parametri i tret�, n.q.s. i vendosur n� 1 do t� konvertoj� output duke p�rdorur htmlspecialchars() (Prezgjedhur: 1). Nj� paramet�r i kat�rt, po t� jet� vendosur n� 1 do t\'i shtoj� nj� NOWRAP p�rmbajtjes s� qelis� k�shtu q� output komplet do t� shfaqet pa u riformatuar (Default: 1)';
$strTransformation_text_plain__formatted = 'Konservon formatimin origjinal t� fush�s. Nuk aplikohet asnj� Escaping.';
$strTransformation_text_plain__imagelink = 'Shfaq nj� figur� dhe nj� link, fusha p�rmban emrin e file; opcioni i par� �sht� nj� prefiks si "http://domain.com/", opcioni i dyt� �sht� gj�r�sia n� pixels, i treti �sht� lart�sia.';
$strTransformation_text_plain__link = 'Shfaq nj� link, fusha p�rmban emrin e file; opcioni i par� �sht� nj� prefiks si "http://domain.com/", opcioni i dyt� �sht� nj� titull p�r lidhjen.';
$strTransformation_text_plain__substr = 'Shfaq vet�m nj� pjes� t� string-�s. Opcioni i par� �sht� offset-i q� sh�rben p�r t� p�rcaktuar ku fillon output i tekstit tuaj (Default 0). Opcioni i dyt� �sht� nj� offset q� tregon se sa tekst kthehet. Po t� jet� bosh, kthen t� gjith� tekstin e mbetur. Opcioni i tret� p�rcakton �far� karakteresh do t� shtohen n� fund t� output kur kthehet nj� n�n-string-� (Default: ...) .';
$strTransformation_text_plain__unformatted = 'Shfaq kodin HTML si entitet HTML. Formatimi HTML nuk shfaqet.';
$strTruncateQueries = 'Shkurton (nd�rpret) Queries e Shfaqura';
$strTurkish = 'Turqisht';
$strType = 'Lloji';

$strUkrainian = 'Ukrainase';
$strUncheckAll = 'Deseleksionoi t� gjith�';
$strUnicode = 'Unicode';
$strUnique = 'I vet�m';
$strUnknown = 'e panjohur';
$strUnselectAll = 'Deseleksiono gjith�ka';
$strUpdComTab = 'Ju lutem lexoni dokumentet mbi rifreskimin e tabel�s suaj Column_comments';
$strUpdatePrivMessage = 'Ke rifreskuar lejet p�r %s.';
$strUpdateProfile = 'Rifresko profilin:';
$strUpdateProfileMessage = 'Profili u rifreskua.';
$strUpdateQuery = 'Rifresko Query';
$strUpgrade = 'Duhet t� instaloni %s %s ose superior.';
$strUsage = 'P�rdorimi';
$strUseBackquotes = 'P�rdor backquotes me emrat e tabelave dhe fushave';
$strUseHostTable = 'P�rdor Tabel�n e Host-it';
$strUseTables = 'P�rdor tabelat';
$strUseTextField = 'P�rdor fush� teksti';
$strUseThisValue = 'P�rdor k�t� vler�';
$strUser = 'P�rdorues';
$strUserAlreadyExists = 'P�rdoruesi %s ekziston!';
$strUserEmpty = 'Emri i p�rdoruesit �sht� bosh!';
$strUserName = 'Emri i p�rdoruesit';
$strUserNotFound = 'P�rdoruesi i zgjedhur nuk u gjet tek tabela e t� drejtave.';
$strUserOverview = 'Pamja e p�rgjithshme e p�rdoruesit';
$strUsers = 'P�rdorues';
$strUsersDeleted = 'P�rdoruesit e zgjedhur u hoq�n me sukses.';
$strUsersHavingAccessToDb = 'P�rdoruesit q� kan� hyrje tek &quot;%s&quot;';

$strValidateSQL = 'Vleft�so SQL';
$strValidatorError = 'Miratuesi SQL nuk arrin t� niset. Ju lutem kontrolloni instalimin e prapashtesave t� duhura php ashtu si p�rshkruhet tek %sdokumentimi%s.';
$strValue = 'Vler�';
$strVar = 'E ndryshueshme';
$strViewDump = 'Shfaq dump (skema) e tabel�s';
$strViewDumpDB = 'Shfaq dump (skema) e databaz�s';
$strViewDumpDatabases = 'Shfaq dump (skema) e databazave';

$strWebServerUploadDirectory = 'directory e upload t� server-it web';
$strWebServerUploadDirectoryError = 'Directory q� keni zgjedhur p�r upload nuk arrin t� gjehet';
$strWelcome = 'Mir�sevini tek %s';
$strWestEuropean = 'Europa Per�ndimore';
$strWildcard = 'wildcard';
$strWindowNotFound = 'Dritarja e destinimit t� browser nuk mund t� rifreskohet. Ka mund�si t� keni mbyllur dritaren n�n� apo q� browser-i juaj �sht� duke bllokuar rifreskimet nd�rmjet browser-ve p�r shkak t� ndonj� mase sigurie';
$strWithChecked = 'N.q.s. t� seleksionuar:';
$strWritingCommentNotPossible = 'I pamundur shkrimi i komentit';
$strWritingRelationNotPossible = 'I pamundur shkrimi i relacionit';
$strWrongUser = 'Em�r p�rdoruesi apo password i gabuar. Ndalohet hyrja.';

$strXML = 'XML';

$strYes = ' Po ';

$strZeroRemovesTheLimit = 'Sh�nim: Vendosja e k�tyre opcioneve n� 0 (zero) do t� thot� asnj� limit.';
$strZip = '"kompresuar me zip"';
// To translate

$strCheckOverhead = 'Check overheaded';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate

$strLatexCaption = 'Table caption';  //to translate

$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Chech-Slovak';  //to translate
?>
