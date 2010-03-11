<?php

/**
 * Czech (Czech Republic) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('cs_CZ', $lang) && is_array($lang['cs_CZ'])) {
	$lang['cs_CZ'] = array_merge($lang['en_US'], $lang['cs_CZ']);
} else {
	$lang['cs_CZ'] = $lang['en_US'];
}

$lang['cs_CZ']['AssetAdmin']['CHOOSEFILE'] = 'Vybrat soubor';
$lang['cs_CZ']['AssetAdmin']['DELETEDX'] = 'Smazáno %s souborů.%s';
$lang['cs_CZ']['AssetAdmin']['FILESREADY'] = 'Soubory připravené k nahrání:';
$lang['cs_CZ']['AssetAdmin']['FOLDERDELETED'] = 'složka odstraněna.';
$lang['cs_CZ']['AssetAdmin']['FOLDERSDELETED'] = 'adresáře smazány.';
$lang['cs_CZ']['AssetAdmin']['MENUTITLE'] = 'Soubory & Obrázky';
$lang['cs_CZ']['AssetAdmin']['MENUTITLE'] = 'Soubory & Obrázky';
$lang['cs_CZ']['AssetAdmin']['MOVEDX'] = 'Přesunuto %s souborů';
$lang['cs_CZ']['AssetAdmin']['NEWFOLDER'] = 'Nová složka';
$lang['cs_CZ']['AssetAdmin']['NOTEMP'] = 'Nenalezen dočasný adresář pro upload. Prosím nastavte upload_tmp_dir v php.ini.';
$lang['cs_CZ']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Nic k nahrání';
$lang['cs_CZ']['AssetAdmin']['NOWBROKEN'] = 'Následující stránky mají nyní nefunkční odkazy:';
$lang['cs_CZ']['AssetAdmin']['NOWBROKEN2'] = 'Jejich majitelé byly upozorněni e-mailem a měli by spravit tyto stránky.';
$lang['cs_CZ']['AssetAdmin']['SAVEDFILE'] = 'Soubor %s uložen';
$lang['cs_CZ']['AssetAdmin']['SAVEFOLDERNAME'] = 'Uložit název složky';
$lang['cs_CZ']['AssetAdmin']['THUMBSDELETED'] = 'Všechny nepoužívané miniatury byly odstraněny.';
$lang['cs_CZ']['AssetAdmin']['UPLOAD'] = 'Nahrát soubory sepsané níže';
$lang['cs_CZ']['AssetAdmin']['UPLOADEDX'] = 'Nahráno %s souborů';
$lang['cs_CZ']['AssetAdmin_left.ss']['CREATE'] = 'Vytvořit';
$lang['cs_CZ']['AssetAdmin_left.ss']['DELETE'] = 'Smazat';
$lang['cs_CZ']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Smazat vybrané složky';
$lang['cs_CZ']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Povolit přeřazení &quot;táhni a pusť&quot;';
$lang['cs_CZ']['AssetAdmin_left.ss']['FILESYSTEMSYNC'] = 'Hledat nové soubory';
$lang['cs_CZ']['AssetAdmin_left.ss']['FILESYSTEMSYNC_DESC'] = 'SilverStripe udržuje svoji vlastní databázi souborů &amp; obrázků uložených ve vašem assets/ adresáři. Klikněte na tlačítko k obnovení této databáze, když jsou soubory přidány do assets/ adresáře mimo SilverStripe, například, když jste soubory nahráliif přes FTP.';
$lang['cs_CZ']['AssetAdmin_left.ss']['FOLDERS'] = 'Složky';
$lang['cs_CZ']['AssetAdmin_left.ss']['GO'] = 'Proveď';
$lang['cs_CZ']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Vyberte složky, které chcete smazat. Pak klikněte na tlačítko níže';
$lang['cs_CZ']['AssetAdmin_left.ss']['TOREORG'] = 'Pro organizaci Vašich složek je přetáhněte, kam potřebujete.';
$lang['cs_CZ']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Prosím vyberte stránku vlevo.';
$lang['cs_CZ']['AssetAdmin_right.ss']['WELCOME'] = 'Vítejte v';
$lang['cs_CZ']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Nemáte oprávnění pro nahrávání souborů do této složky.';
$lang['cs_CZ']['AssetAdmin_uploadiframe.ss']['TITLE'] = 'Rámec nahrávání obrázku';
$lang['cs_CZ']['AssetTableField']['CAPTION'] = 'Titulek';
$lang['cs_CZ']['AssetTableField']['CREATED'] = 'Poprvé nahráno';
$lang['cs_CZ']['AssetTableField']['DIM'] = 'Rozměry';
$lang['cs_CZ']['AssetTableField']['DIMLIMT'] = 'Omezit velikost popup okna';
$lang['cs_CZ']['AssetTableField']['EDITIMAGE'] = 'Upravit tento obrázek';
$lang['cs_CZ']['AssetTableField']['FILENAME'] = 'Název souboru';
$lang['cs_CZ']['AssetTableField']['GALLERYOPTIONS'] = 'Nastavení galerie';
$lang['cs_CZ']['AssetTableField']['IMAGE'] = 'Obrazek';
$lang['cs_CZ']['AssetTableField']['ISFLASH'] = 'Je dokument typu Flash';
$lang['cs_CZ']['AssetTableField']['LASTEDIT'] = 'Naposledy změněno';
$lang['cs_CZ']['AssetTableField']['MAIN'] = 'Hlavni';
$lang['cs_CZ']['AssetTableField']['NOLINKS'] = 'Na tento soubor neodkazují žádné jiné stránky.';
$lang['cs_CZ']['AssetTableField']['OWNER'] = 'Vlastník';
$lang['cs_CZ']['AssetTableField']['PAGESLINKING'] = 'Následující stránky odkazují na tento soubor:';
$lang['cs_CZ']['AssetTableField']['POPUPHEIGHT'] = 'Výška popup okna';
$lang['cs_CZ']['AssetTableField']['POPUPWIDTH'] = 'Šířka popup okna';
$lang['cs_CZ']['AssetTableField']['SIZE'] = 'Velikost';
$lang['cs_CZ']['AssetTableField.ss']['DELFILE'] = 'Smazat tento soubor';
$lang['cs_CZ']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Pro přesun souboru ho přetáhněte do složky vlevo';
$lang['cs_CZ']['AssetTableField.ss']['EDIT'] = 'Upravit přednosti';
$lang['cs_CZ']['AssetTableField.ss']['SHOW'] = 'Zobrazit přednosti';
$lang['cs_CZ']['AssetTableField']['SWFFILEOPTIONS'] = 'Nastavení SWF souboru';
$lang['cs_CZ']['AssetTableField']['TITLE'] = 'Titulek';
$lang['cs_CZ']['AssetTableField']['TYPE'] = 'Typ';
$lang['cs_CZ']['AssetTableField']['URL'] = 'URL';
$lang['cs_CZ']['CMSBatchActions']['DELETED_PAGES'] = 'Smazáno %d stránek ze zveřejněného webu';
$lang['cs_CZ']['CMSBatchActions']['DELETE_PAGES'] = 'Smazat ze zveřejněného webu';
$lang['cs_CZ']['CMSBatchActions']['DELETING_PAGES'] = 'Mazání vybraných stránek ze zveřejněného webu';
$lang['cs_CZ']['CMSBatchActions']['PUBLISHED_PAGES'] = 'Zveřejněných %d stránek';
$lang['cs_CZ']['CMSBatchActions']['PUBLISHING_PAGES'] = 'Zveřejňování stránek';
$lang['cs_CZ']['CMSBatchActions']['PUBLISH_PAGES'] = 'Zveřejnit';
$lang['cs_CZ']['CMSBatchActions']['UNPUBLISHED_PAGES'] = 'Nezveřejněných %d stránek';
$lang['cs_CZ']['CMSBatchActions']['UNPUBLISHING_PAGES'] = 'Nezveřejňování stránek';
$lang['cs_CZ']['CMSBatchActions']['UNPUBLISH_PAGES'] = 'Nezveřejnit';
$lang['cs_CZ']['CMSLeft.ss']['DELPAGE'] = 'Smazat stránky...';
$lang['cs_CZ']['CMSLeft.ss']['DELPAGES'] = 'Smazat vybrané stránky';
$lang['cs_CZ']['CMSLeft.ss']['GO'] = 'Proveď';
$lang['cs_CZ']['CMSLeft.ss']['NEWPAGE'] = 'Nová stránka...';
$lang['cs_CZ']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Vyberte stránky, které chcete smazat. Pak klikněte na tlačítko níže';
$lang['cs_CZ']['CMSLeft.ss']['SITECONT'] = 'Obsah webu';
$lang['cs_CZ']['CMSMain']['ACCESS'] = 'Přístup do %s v CMS';
$lang['cs_CZ']['CMSMain']['ACCESSALLINTERFACES'] = 'Přístup ke všem rozhraním CMS';
$lang['cs_CZ']['CMSMain']['CANCEL'] = 'Zrušit';
$lang['cs_CZ']['CMSMain']['CHOOSEREPORT'] = '(Vyberte výkaz)';
$lang['cs_CZ']['CMSMain']['COMPARINGV'] = 'Porovnáváte verze #%d a #%d';
$lang['cs_CZ']['CMSMain']['COPYPUBTOSTAGE'] = 'Opravdu chcete zkopírovat zveřejněný obsah do úschovny?';
$lang['cs_CZ']['CMSMain']['DELETE'] = 'Odstranit z návrhu';
$lang['cs_CZ']['CMSMain']['DESCREMOVED'] = 'a %s potomci';
$lang['cs_CZ']['CMSMain']['EMAIL'] = 'Email';
$lang['cs_CZ']['CMSMain']['GO'] = 'Proveď';
$lang['cs_CZ']['CMSMain']['MENUTITLE'] = 'Obsah webu';
$lang['cs_CZ']['CMSMain']['MENUTITLE'] = 'Obsah stránky';
$lang['cs_CZ']['CMSMain']['MENUTITLEOPT'] = 'Navigační návěstí';
$lang['cs_CZ']['CMSMain']['METADESCOPT'] = 'Popis';
$lang['cs_CZ']['CMSMain']['METAKEYWORDSOPT'] = 'Klíčová slova';
$lang['cs_CZ']['CMSMain']['NEW'] = 'Nový';
$lang['cs_CZ']['CMSMain']['NOCONTENT'] = 'bez obsahu';
$lang['cs_CZ']['CMSMain']['NOTHINGASSIGNED'] = 'Nemáte nic přiřazeného.';
$lang['cs_CZ']['CMSMain']['NOWAITINGON'] = 'Nečekáte na nikoho.';
$lang['cs_CZ']['CMSMain']['NOWBROKEN'] = 'Následující stránky mají nyní neplatné odkazy:';
$lang['cs_CZ']['CMSMain']['NOWBROKEN2'] = 'Jejich vlastníci byli informováni emailem a tyto stránky opraví.';
$lang['cs_CZ']['CMSMain']['OK'] = 'OK';
$lang['cs_CZ']['CMSMain']['PAGEDEL'] = '%d stránka smazána';
$lang['cs_CZ']['CMSMain']['PAGENOTEXISTS'] = 'Tato stránka neexistuje';
$lang['cs_CZ']['CMSMain']['PAGEPUB'] = '%d stránek zveřejněno';
$lang['cs_CZ']['CMSMain']['PAGESDEL'] = '%d stránky (stránek) smazáno';
$lang['cs_CZ']['CMSMain']['PAGESPUB'] = '%d stránek zveřejněno';
$lang['cs_CZ']['CMSMain']['PAGETYPEOPT'] = 'Typ stránky';
$lang['cs_CZ']['CMSMain']['PRINT'] = 'Tisk';
$lang['cs_CZ']['CMSMain']['PUBALLCONFIRM'] = 'Prosím zveřejněte veškeré stránky z úschovny';
$lang['cs_CZ']['CMSMain']['PUBALLFUN'] = 'Funkce "Publikovat vše"';
$lang['cs_CZ']['CMSMain']['PUBALLFUN2'] = 'Stisknutí tohoto tlačítka se rovná zveřejnění každé jednotlivé stránky. Toto tlačítko má být použito, pokud se vyskytly rozsáhlé úpravy obsahu, jako např. když poprvé sestavujete stránky.';
$lang['cs_CZ']['CMSMain']['PUBPAGES'] = 'Hotovo: Zveřejněno %d stránek';
$lang['cs_CZ']['CMSMain']['REMOVED'] = 'Smazán \'%s\'%s ze živé stránky';
$lang['cs_CZ']['CMSMain']['REMOVEDFD'] = 'Smazáno z konceptů';
$lang['cs_CZ']['CMSMain']['REMOVEDPAGE'] = '\'%s\' odstraněno ze zveřejněných';
$lang['cs_CZ']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = '\'%s\' odebrano  z navrhu';
$lang['cs_CZ']['CMSMain']['REPORT'] = 'Výpis';
$lang['cs_CZ']['CMSMain']['RESTORED'] = '\'%s\' úspěšně obnoven';
$lang['cs_CZ']['CMSMain']['ROLLBACK'] = 'Vrátit se zpět na tuto verzi';
$lang['cs_CZ']['CMSMain']['ROLLEDBACKPUB'] = 'Vracím se zpět na zveřejněnou verzi. Číslo nové verze je #%d';
$lang['cs_CZ']['CMSMain']['ROLLEDBACKVERSION'] = 'Vracím se zpět na verzi #%d. Číslo nové verze je #%d';
$lang['cs_CZ']['CMSMain']['SAVE'] = 'Uložit';
$lang['cs_CZ']['CMSMain']['SENTTO'] = 'Posláno %s %s ke schválení.';
$lang['cs_CZ']['CMSMain']['STATUSOPT'] = 'Stav';
$lang['cs_CZ']['CMSMain']['TITLEOPT'] = 'Titul';
$lang['cs_CZ']['CMSMain']['TOTALPAGES'] = 'Celkem stránek:';
$lang['cs_CZ']['CMSMain']['VERSIONSNOPAGE'] = 'Nemohu najít stránku #%d';
$lang['cs_CZ']['CMSMain']['VIEWING'] = 'Prohlížíte verzi #%s, vytvořenou %s - autor %s';
$lang['cs_CZ']['CMSMain']['VISITRESTORE'] = 'navštívit restorepage/(ID)';
$lang['cs_CZ']['CMSMain']['WAITINGON'] = 'Čekáte na jiné lidi, než dokončí práci na těchto <b>%d</b> stránkách.';
$lang['cs_CZ']['CMSMain']['WORKTODO'] = 'Máte na těchto <b>%d</b> stránkách práci k udělání.';
$lang['cs_CZ']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Systém nemůže nelézt jméno tlačítka';
$lang['cs_CZ']['CMSMain_dialog.ss']['NOLINKED'] = 'Nemůžete najít objekt window.linkedObject pro zaslání kliknutí na tlačítko zpět do hlavního okna.';
$lang['cs_CZ']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Přidáno do konceptů, ale ještě nezveřejněno';
$lang['cs_CZ']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Přidat kritérium...';
$lang['cs_CZ']['CMSMain_left.ss']['BATCHACTIONS'] = 'Skupinové akce';
$lang['cs_CZ']['CMSMain_left.ss']['CHANGED'] = 'změněno';
$lang['cs_CZ']['CMSMain_left.ss']['CLEARTITLE'] = 'Vyčistit hledání a zobrazit všechny položky';
$lang['cs_CZ']['CMSMain_left.ss']['CLOSEBOX'] = 'klikněte pro zavření pole';
$lang['cs_CZ']['CMSMain_left.ss']['COMPAREMODE'] = 'Mód porovnávání (klikněte níže)';
$lang['cs_CZ']['CMSMain_left.ss']['CREATE'] = 'Vytvořit';
$lang['cs_CZ']['CMSMain_left.ss']['DEL'] = 'smazáno';
$lang['cs_CZ']['CMSMain_left.ss']['DELETECONFIRM'] = 'Smazat vybrané stránky';
$lang['cs_CZ']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Smazáno z konceptů, ale stále na stránkách';
$lang['cs_CZ']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Upraveno v konceptech, ale ještě nezveřejněno';
$lang['cs_CZ']['CMSMain_left.ss']['EDITEDSINCE'] = 'Naposledy upraveno';
$lang['cs_CZ']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Povolit přesuny drag &amp; drop';
$lang['cs_CZ']['CMSMain_left.ss']['GO'] = 'Proveď';
$lang['cs_CZ']['CMSMain_left.ss']['HIDDEN'] = 'skrytý';
$lang['cs_CZ']['CMSMain_left.ss']['KEY'] = 'Klíč:';
$lang['cs_CZ']['CMSMain_left.ss']['NEW'] = 'nový';
$lang['cs_CZ']['CMSMain_left.ss']['NOTINMENU'] = 'Vynecháno z navigační nabídky';
$lang['cs_CZ']['CMSMain_left.ss']['OPENBOX'] = 'klikněte pro otevření tohoto pole';
$lang['cs_CZ']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Historie verzí stránky';
$lang['cs_CZ']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Zveřejnit vybrané stránky';
$lang['cs_CZ']['CMSMain_left.ss']['SEARCH'] = 'Hledat';
$lang['cs_CZ']['CMSMain_left.ss']['SEARCHTITLE'] = 'Prohledávat URL, Titulky, Titulky Menu, &amp; Obsah';
$lang['cs_CZ']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Vyberte stránky, které chcete změnit &amp; pak klikněte na akci:';
$lang['cs_CZ']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Vyberte stránky, které chcete duplikovat, zda chcete duplikovat i jejich podstránky, a kam chcete nové kopie umístit';
$lang['cs_CZ']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Zobrazovat jen změněné stránky';
$lang['cs_CZ']['CMSMain_left.ss']['SHOWUNPUB'] = 'Ukázat nezveřejněné verze';
$lang['cs_CZ']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Obsah a struktura webu';
$lang['cs_CZ']['CMSMain_left.ss']['SITEREPORTS'] = 'Výkazy stránek';
$lang['cs_CZ']['CMSMain_right.ss']['ANYMESSAGE'] = 'Máte nějakou zprávu pro Vašeho redaktora?';
$lang['cs_CZ']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Prosím vyberte stránku vlevo.';
$lang['cs_CZ']['CMSMain_right.ss']['LOADING'] = 'nahrávání...';
$lang['cs_CZ']['CMSMain_right.ss']['MESSAGE'] = 'Zpráva';
$lang['cs_CZ']['CMSMain_right.ss']['SENDTO'] = 'Poslat';
$lang['cs_CZ']['CMSMain_right.ss']['STATUS'] = 'Stav';
$lang['cs_CZ']['CMSMain_right.ss']['SUBMIT'] = 'Odevzdat na schválení';
$lang['cs_CZ']['CMSMain_right.ss']['WELCOMETO'] = 'Vítejte v';
$lang['cs_CZ']['CMSMain_versions.ss']['AUTHOR'] = 'Autor';
$lang['cs_CZ']['CMSMain_versions.ss']['NOTPUB'] = 'Nezveřejněno';
$lang['cs_CZ']['CMSMain_versions.ss']['PUBR'] = 'Vydavatel';
$lang['cs_CZ']['CMSMain_versions.ss']['UNKNOWN'] = 'Neznámý';
$lang['cs_CZ']['CMSMain_versions.ss']['WHEN'] = 'Kdy';
$lang['cs_CZ']['CMSRight.ss']['CHOOSEPAGE'] = 'Prosím vyberte stránku vlevo.';
$lang['cs_CZ']['CMSRight.ss']['ECONTENT'] = 'Upravit obsah';
$lang['cs_CZ']['CMSRight.ss']['WELCOMETO'] = 'Vítejte v';
$lang['cs_CZ']['CommentAdmin']['ACCEPT'] = 'Schválit';
$lang['cs_CZ']['CommentAdmin']['APPROVED'] = 'Schváleno %s komentářů.';
$lang['cs_CZ']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Schválené komentáře';
$lang['cs_CZ']['CommentAdmin']['AUTHOR'] = 'Autor';
$lang['cs_CZ']['CommentAdmin']['COMMENT'] = 'Komentář';
$lang['cs_CZ']['CommentAdmin']['COMMENTERURL'] = 'URL';
$lang['cs_CZ']['CommentAdmin']['COMMENTS'] = 'Komentáře';
$lang['cs_CZ']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Komentáře čekající na schválení';
$lang['cs_CZ']['CommentAdmin']['DATEPOSTED'] = 'Datum vložení';
$lang['cs_CZ']['CommentAdmin']['DELETE'] = 'Odstranit';
$lang['cs_CZ']['CommentAdmin']['DELETEALL'] = 'Odstranit vše';
$lang['cs_CZ']['CommentAdmin']['DELETED'] = 'Smazáno %s komentářů.';
$lang['cs_CZ']['CommentAdmin']['MARKASNOTSPAM'] = 'Označit NENÍ SPAM';
$lang['cs_CZ']['CommentAdmin']['MARKEDNOTSPAM'] = 'Označeno %s komentařů jako NENÍ SPAM.';
$lang['cs_CZ']['CommentAdmin']['MARKEDSPAM'] = 'Označeno %s komentářů jako SPAM';
$lang['cs_CZ']['CommentAdmin']['MENUTITLE'] = 'Komentáře';
$lang['cs_CZ']['CommentAdmin']['MENUTITLE'] = 'Komentáře';
$lang['cs_CZ']['CommentAdmin']['NAME'] = 'Jméno';
$lang['cs_CZ']['CommentAdmin']['PAGE'] = 'Strana';
$lang['cs_CZ']['CommentAdmin']['SPAM'] = 'Spam';
$lang['cs_CZ']['CommentAdmin']['SPAMMARKED'] = 'Označit jako SPAM';
$lang['cs_CZ']['CommentAdmin_left.ss']['COMMENTS'] = 'Komentáře';
$lang['cs_CZ']['CommentAdmin_right.ss']['WELCOME1'] = 'Vítejte v';
$lang['cs_CZ']['CommentAdmin_right.ss']['WELCOME2'] = 'správa komentářů. Prosím vyberte složku vpravo.';
$lang['cs_CZ']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Schváleno';
$lang['cs_CZ']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Čekající na schválení';
$lang['cs_CZ']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Komentáře';
$lang['cs_CZ']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['cs_CZ']['CommentList.ss']['CREATEDW'] = 'Komentáře se vytvářejí, kdykoliv provedete nějakou pracovní akci - Zveřejnění, Zamítnutí, Odevzdání.';
$lang['cs_CZ']['CommentList.ss']['NOCOM'] = 'Na tuto stránku ještě nikdo neposlal komentář.';
$lang['cs_CZ']['CommentTableField']['FILTER'] = 'Filtr';
$lang['cs_CZ']['CommentTableField']['SEARCH'] = 'Hledání';
$lang['cs_CZ']['CommentTableField.ss']['APPROVE'] = 'schvalit';
$lang['cs_CZ']['CommentTableField.ss']['APPROVECOMMENT'] = 'Schválit tento komentář';
$lang['cs_CZ']['CommentTableField.ss']['DELETE'] = 'odstranit';
$lang['cs_CZ']['CommentTableField.ss']['DELETEROW'] = 'Smazat tento řádek';
$lang['cs_CZ']['CommentTableField.ss']['EDIT'] = 'zmenit';
$lang['cs_CZ']['CommentTableField.ss']['HAM'] = 'ham';
$lang['cs_CZ']['CommentTableField.ss']['MARKASSPAM'] = 'Označit komentář jako SPAM';
$lang['cs_CZ']['CommentTableField.ss']['MARKNOSPAM'] = 'Označit komentář jako normální (není SPAM)';
$lang['cs_CZ']['CommentTableField.ss']['NOITEMSFOUND'] = 'Nenalezeny žádné položky';
$lang['cs_CZ']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['cs_CZ']['ComplexTableField']['CLOSEPOPUP'] = 'Zavřít';
$lang['cs_CZ']['ComplexTableField']['SUCCESSADD'] = 'Přidáno %s %s %s';
$lang['cs_CZ']['ImageEditor.ss']['ACTIONS'] = 'akce';
$lang['cs_CZ']['ImageEditor.ss']['ADJUST'] = 'adjustace';
$lang['cs_CZ']['ImageEditor.ss']['APPLY'] = 'použít';
$lang['cs_CZ']['ImageEditor.ss']['BLUR'] = 'blur';
$lang['cs_CZ']['ImageEditor.ss']['BRIGHTNESS'] = 'světlost';
$lang['cs_CZ']['ImageEditor.ss']['CANCEL'] = 'zrušit';
$lang['cs_CZ']['ImageEditor.ss']['CONTRAST'] = 'kontrast';
$lang['cs_CZ']['ImageEditor.ss']['CROP'] = 'oříznout';
$lang['cs_CZ']['ImageEditor.ss']['CURRENTACTION'] = 'aktuální&nbsp;akce';
$lang['cs_CZ']['ImageEditor.ss']['EDITFUNCTIONS'] = 'změnit&nbsp;funkce';
$lang['cs_CZ']['ImageEditor.ss']['EFFECTS'] = 'efekty';
$lang['cs_CZ']['ImageEditor.ss']['EXIT'] = 'konec';
$lang['cs_CZ']['ImageEditor.ss']['GAMMA'] = 'gamma';
$lang['cs_CZ']['ImageEditor.ss']['GREYSCALE'] = 'šedá škála';
$lang['cs_CZ']['ImageEditor.ss']['HEIGHT'] = 'výška';
$lang['cs_CZ']['ImageEditor.ss']['REDO'] = 'znovu';
$lang['cs_CZ']['ImageEditor.ss']['ROT'] = 'otočit';
$lang['cs_CZ']['ImageEditor.ss']['SAVE'] = 'uložit&nbsp;obrázek';
$lang['cs_CZ']['ImageEditor.ss']['SEPIA'] = 'sepia';
$lang['cs_CZ']['ImageEditor.ss']['UNDO'] = 'zpět';
$lang['cs_CZ']['ImageEditor.ss']['UNTITLED'] = 'Nepojmenovaný dokument';
$lang['cs_CZ']['ImageEditor.ss']['WIDTH'] = 'šířka';
$lang['cs_CZ']['LeftAndMain']['CANT_REORGANISE'] = 'Nemáte oprávnění rearanžovat strukturu webu. Vaše změny nebyly uloženy.';
$lang['cs_CZ']['LeftAndMain']['CHANGEDURL'] = 'URL změněno na \'%s\'';
$lang['cs_CZ']['LeftAndMain']['COMMENTS'] = 'Komentáře';
$lang['cs_CZ']['LeftAndMain']['FILESIMAGES'] = 'Soubory & Obrázky';
$lang['cs_CZ']['LeftAndMain']['HELP'] = 'Nápověda';
$lang['cs_CZ']['LeftAndMain']['PAGETYPE'] = 'Typ stránky:';
$lang['cs_CZ']['LeftAndMain']['PERMAGAIN'] = 'Byli jste odhlášeni z CMS. Pokud se chcete znovu přihlásit, zadejte níže své uživatelské jméno a heslo.';
$lang['cs_CZ']['LeftAndMain']['PERMALREADY'] = 'Je nám líto, ale nemůžete vstoupit do této části CMS. Pokud se chcete přihlásit jako někdo jiný, udělejte tak níže';
$lang['cs_CZ']['LeftAndMain']['PERMDEFAULT'] = 'Pro přístup do CMS vložte Vaši e-mailovou adresu a heslo.';
$lang['cs_CZ']['LeftAndMain']['PLEASESAVE'] = 'Prosím uložte stránku: Tato stránka nemohla být aktualizována, protože ještě nebyla uložena.';
$lang['cs_CZ']['LeftAndMain']['REPORTS'] = 'Reporty';
$lang['cs_CZ']['LeftAndMain']['REQUESTERROR'] = 'Chyba v požadavku';
$lang['cs_CZ']['LeftAndMain']['SAVED'] = 'uloženo';
$lang['cs_CZ']['LeftAndMain']['SAVEDUP'] = 'Uloženo';
$lang['cs_CZ']['LeftAndMain']['SECURITY'] = 'Bezpečnost';
$lang['cs_CZ']['LeftAndMain']['SITECONTENT'] = 'Obsah stránky';
$lang['cs_CZ']['LeftAndMain']['SITECONTENTLEFT'] = 'Obsah webu';
$lang['cs_CZ']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Toto je';
$lang['cs_CZ']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'verze, kterou nyní používáte, je technicky CVS větev';
$lang['cs_CZ']['LeftAndMain.ss']['ARCHS'] = 'Archiv';
$lang['cs_CZ']['LeftAndMain.ss']['DRAFTS'] = 'Koncepty';
$lang['cs_CZ']['LeftAndMain.ss']['EDIT'] = 'Upravit';
$lang['cs_CZ']['LeftAndMain.ss']['EDITINCMS'] = 'Editovat tuto stránku v CMS';
$lang['cs_CZ']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['cs_CZ']['LeftAndMain.ss']['LOADING'] = 'Nahrávání...';
$lang['cs_CZ']['LeftAndMain.ss']['LOGGEDINAS'] = 'Přihlášen jako';
$lang['cs_CZ']['LeftAndMain.ss']['LOGOUT'] = 'odhlásit';
$lang['cs_CZ']['LeftAndMain.ss']['PUBLIS'] = 'Zveřejněné';
$lang['cs_CZ']['LeftAndMain.ss']['REQUIREJS'] = 'SilverStripe vyžaduje zaplý Javascript.';
$lang['cs_CZ']['LeftAndMain.ss']['SSWEB'] = 'Webová stránka SilverStripe';
$lang['cs_CZ']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Zobraz stránku v návrhu stránky';
$lang['cs_CZ']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Zobraz stránku v publikovaných stránkách';
$lang['cs_CZ']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Zobrazení stránky:';
$lang['cs_CZ']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = '\'%s\' publikováno úspěšně';
$lang['cs_CZ']['LeftAndMain']['STATUSTO'] = 'Stav změněn na \'%s\'';
$lang['cs_CZ']['LeftAndMain']['TREESITECONTENT'] = 'Obsah webu';
$lang['cs_CZ']['MemberList.ss']['FILTER'] = 'Filtr';
$lang['cs_CZ']['MemberList_PageControls.ss']['DISPLAYING'] = 'Zobrazuji';
$lang['cs_CZ']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'členové';
$lang['cs_CZ']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'členové';
$lang['cs_CZ']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'členové';
$lang['cs_CZ']['MemberList_PageControls.ss']['OF'] = 'z';
$lang['cs_CZ']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'členové';
$lang['cs_CZ']['MemberList_PageControls.ss']['TO'] = 'do';
$lang['cs_CZ']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Zobrazit první';
$lang['cs_CZ']['MemberList_PageControls.ss']['VIEWLAST'] = 'Zobrazit poslední';
$lang['cs_CZ']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Zobrazit další';
$lang['cs_CZ']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Zobrazit předešlý';
$lang['cs_CZ']['MemberList_Table.ss']['EMAIL'] = 'Emailová adresa';
$lang['cs_CZ']['MemberList_Table.ss']['FN'] = 'Křestní jméno';
$lang['cs_CZ']['MemberList_Table.ss']['PASSWD'] = 'Heslo';
$lang['cs_CZ']['MemberList_Table.ss']['SN'] = 'Příjmení';
$lang['cs_CZ']['MemberTableField']['ADD'] = 'Přidat';
$lang['cs_CZ']['MemberTableField']['ADDEDTOGROUP'] = 'Přidat člena do skupiny';
$lang['cs_CZ']['MemberTableField']['ADDINGFIELD'] = 'Přidání selhalo';
$lang['cs_CZ']['MemberTableField']['ANYGROUP'] = 'Každá skupina';
$lang['cs_CZ']['MemberTableField']['ASC'] = 'Vzestupně';
$lang['cs_CZ']['MemberTableField']['DESC'] = 'Sestupně';
$lang['cs_CZ']['MemberTableField']['EMAIL'] = 'Email';
$lang['cs_CZ']['MemberTableField']['ERRORADDINGUSER'] = 'Nastala chyba pri přidání uživatele do skupiny: %s';
$lang['cs_CZ']['MemberTableField']['FILTER'] = 'Filtr';
$lang['cs_CZ']['MemberTableField']['FILTERBYGROUP'] = 'Filtrovat podle skupiny';
$lang['cs_CZ']['MemberTableField']['FIRSTNAME'] = 'KrestniJmeno';
$lang['cs_CZ']['MemberTableField']['ORDERBY'] = 'Seřadit podle';
$lang['cs_CZ']['MemberTableField']['SEARCH'] = 'Hledani';
$lang['cs_CZ']['MemberTableField.ss']['ADDNEW'] = 'Přidat nový';
$lang['cs_CZ']['MemberTableField.ss']['DELETEMEMBER'] = 'Smazat tohoto člena';
$lang['cs_CZ']['MemberTableField.ss']['EDITMEMBER'] = 'Upravit tohoto člena';
$lang['cs_CZ']['MemberTableField.ss']['NOITEMSFOUND'] = 'Žádné položky nalezeny';
$lang['cs_CZ']['MemberTableField.ss']['SHOWMEMBER'] = 'Zobrazit tohoto člena';
$lang['cs_CZ']['MemberTableField']['SURNAME'] = 'Prijmeni';
$lang['cs_CZ']['ModelAdmin']['ADDBUTTON'] = 'Přidat';
$lang['cs_CZ']['ModelAdmin']['ADDFORM'] = 'Vyplňte tento formulář pro přidání  %s do databáze';
$lang['cs_CZ']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Vybrat sloupec výsledků...';
$lang['cs_CZ']['ModelAdmin']['CLEAR_SEARCH'] = 'Čisté hledání';
$lang['cs_CZ']['ModelAdmin']['CREATEBUTTON'] = 'Vytvořit \'%s\'';
$lang['cs_CZ']['ModelAdmin']['DELETE'] = 'Smazat';
$lang['cs_CZ']['ModelAdmin']['DELETEDRECORDS'] = 'Odstraněno %s záznamů.';
$lang['cs_CZ']['ModelAdmin']['FOUNDRESULTS'] = 'Vaše vyhledávání nalezlo % položek';
$lang['cs_CZ']['ModelAdmin']['GOBACK'] = 'Zpět';
$lang['cs_CZ']['ModelAdmin']['GOFORWARD'] = 'Vpřed';
$lang['cs_CZ']['ModelAdmin']['IMPORT'] = 'Importovat ze souboru CSV';
$lang['cs_CZ']['ModelAdmin']['IMPORTEDRECORDS'] = 'Importováno %s záznamů.';
$lang['cs_CZ']['ModelAdmin']['ITEMNOTFOUND'] = 'Systém nemůže najít tuto položku';
$lang['cs_CZ']['ModelAdmin']['LOADEDFOREDITING'] = '\'%s\' načteno pro editaci';
$lang['cs_CZ']['ModelAdmin']['NOCSVFILE'] = 'Prosím, vyhledejte soubor CSV pro import';
$lang['cs_CZ']['ModelAdmin']['NOIMPORT'] = 'Nic k importu';
$lang['cs_CZ']['ModelAdmin']['NORESULTS'] = 'Bez výsledků';
$lang['cs_CZ']['ModelAdmin']['SAVE'] = 'Uložit';
$lang['cs_CZ']['ModelAdmin']['SEARCHFOR'] = 'Hledat';
$lang['cs_CZ']['ModelAdmin']['SEARCHRESULTS'] = 'Výsledky hledání';
$lang['cs_CZ']['ModelAdmin']['SELECTALL'] = 'označit vše';
$lang['cs_CZ']['ModelAdmin']['SELECTNONE'] = 'Vybrat žádné';
$lang['cs_CZ']['ModelAdmin']['UPDATEDRECORDS'] = 'Aktualizováno %s záznamů.';
$lang['cs_CZ']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Sloupce v databázi';
$lang['cs_CZ']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'Zobrazit specifikace pro %s';
$lang['cs_CZ']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'Vztahy';
$lang['cs_CZ']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'Specifikace pro %s';
$lang['cs_CZ']['ModelAdmin_left.ss']['ADDLISTING'] = 'Přidat';
$lang['cs_CZ']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Importovat';
$lang['cs_CZ']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Hledat';
$lang['cs_CZ']['ModelAdmin_right.ss']['WELCOME1'] = 'Vítejte v %s. Vyberte si prosím jednu z položek v levém panelu.';
$lang['cs_CZ']['ModelSidebar.ss']['ADDLISTING'] = 'Přidat';
$lang['cs_CZ']['ModelSidebar.ss']['IMPORT_TAB_HEADER'] = 'Importovat';
$lang['cs_CZ']['ModelSidebar.ss']['SEARCHLISTINGS'] = 'Hledat';
$lang['cs_CZ']['PageComment']['Comment'] = 'Komentář';
$lang['cs_CZ']['PageComment']['COMMENTBY'] = 'Komentář od \'%s\' na %s';
$lang['cs_CZ']['PageComment']['IsSpam'] = 'Spam?';
$lang['cs_CZ']['PageComment']['Name'] = 'Jméno autora';
$lang['cs_CZ']['PageComment']['NeedsModeration'] = 'Vyžaduje moderování?';
$lang['cs_CZ']['PageComment']['PLURALNAME'] = 'Komentáře stránky';
$lang['cs_CZ']['PageComment']['SINGULARNAME'] = 'Komentáře';
$lang['cs_CZ']['PageCommentInterface']['COMMENTERURL'] = 'URL vaší webové stránky';
$lang['cs_CZ']['PageCommentInterface']['POST'] = 'Příspěvek';
$lang['cs_CZ']['PageCommentInterface']['SPAMQUESTION'] = 'Antispamová otázka: %s';
$lang['cs_CZ']['PageCommentInterface.ss']['COMMENTLOGINERROR'] = 'Nemůžete přidat komentáře pokud nejste přihlášen/a';
$lang['cs_CZ']['PageCommentInterface.ss']['COMMENTPERMISSIONERROR'] = 'a nemáte příslušnou úroveň oprávnění';
$lang['cs_CZ']['PageCommentInterface.ss']['COMMENTPOSTLOGIN'] = 'Přihlášení zde';
$lang['cs_CZ']['PageCommentInterface.ss']['COMMENTS'] = 'Komentáře';
$lang['cs_CZ']['PageCommentInterface.ss']['COMMENTSDISABLED'] = 'Odesílání kometářů bylo znemožněno';
$lang['cs_CZ']['PageCommentInterface.ss']['NEXT'] = 'další';
$lang['cs_CZ']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Nikdo na této stránce ještě nepřidal komentář.';
$lang['cs_CZ']['PageCommentInterface.ss']['POSTCOM'] = 'Zaslat komentář';
$lang['cs_CZ']['PageCommentInterface.ss']['PREV'] = 'předchozí';
$lang['cs_CZ']['PageCommentInterface.ss']['RSSFEEDALLCOMMENTS'] = 'RSS kanál pro všechny komentáře';
$lang['cs_CZ']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'RSS kanál pro komentáře na této stránce';
$lang['cs_CZ']['PageCommentInterface.ss']['RSSVIEWALLCOMMENTS'] = 'Zobrazit všechny komentáře';
$lang['cs_CZ']['PageCommentInterface']['YOURCOMMENT'] = 'Komentáře';
$lang['cs_CZ']['PageCommentInterface']['YOURNAME'] = 'Vaše jméno';
$lang['cs_CZ']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Antispamová kontrolní otázka: %s';
$lang['cs_CZ']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Váš komentář byl odeslán a čeká na schválení.';
$lang['cs_CZ']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Vámi zaslaná zpráva:';
$lang['cs_CZ']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Odhalen SPAM!!!';
$lang['cs_CZ']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'povolit tento komentář';
$lang['cs_CZ']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'tento komentář není spam';
$lang['cs_CZ']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'tento komentář je spam';
$lang['cs_CZ']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Zaslal(a)';
$lang['cs_CZ']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'odstranit tento komentář';
$lang['cs_CZ']['ReportAdmin']['MENUTITLE'] = 'Reporty';
$lang['cs_CZ']['ReportAdmin_left.ss']['REPORTS'] = 'Výkazy';
$lang['cs_CZ']['ReportAdmin_right.ss']['WELCOME1'] = 'Vítejte v';
$lang['cs_CZ']['ReportAdmin_right.ss']['WELCOME2'] = 'sekci výkazů. Prosím vyberte výkaz vlevo.';
$lang['cs_CZ']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Výkazy';
$lang['cs_CZ']['SecurityAdmin']['ADDMEMBER'] = 'Přidat člena';
$lang['cs_CZ']['SecurityAdmin']['EDITPERMISSIONS'] = 'Upravit oprávnění a IP adresy pro každou skupinu';
$lang['cs_CZ']['SecurityAdmin']['MENUTITLE'] = 'Uživatelé & skupiny';
$lang['cs_CZ']['SecurityAdmin']['MENUTITLE'] = 'Bezpečnost';
$lang['cs_CZ']['SecurityAdmin']['NEWGROUP'] = 'Nová skupina';
$lang['cs_CZ']['SecurityAdmin']['SAVE'] = 'Uložit';
$lang['cs_CZ']['SecurityAdmin']['SGROUPS'] = 'Bezpečnostní skupiny';
$lang['cs_CZ']['SecurityAdmin_left.ss']['CREATE'] = 'Vytvořit';
$lang['cs_CZ']['SecurityAdmin_left.ss']['DEL'] = 'Smazat';
$lang['cs_CZ']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Smazat vybrané skupiny';
$lang['cs_CZ']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Povolit přeřazení &quot;táhni a pusť&quot;';
$lang['cs_CZ']['SecurityAdmin_left.ss']['GO'] = 'Proveď';
$lang['cs_CZ']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Bezpečnostní skupiny';
$lang['cs_CZ']['SecurityAdmin_left.ss']['SELECT'] = 'Vyberte stárnky, které chcete smazat. Pak klikněte na tlačítko níže';
$lang['cs_CZ']['SecurityAdmin_left.ss']['TOREORG'] = 'Pro reorganizaci Vašich stránek, přetáhněte stránky, kam potřebujete.';
$lang['cs_CZ']['SecurityAdmin_right.ss']['WELCOME1'] = 'Vítejte v';
$lang['cs_CZ']['SecurityAdmin_right.ss']['WELCOME2'] = 'sekci administrace bezpečnosti. Prosím vyberte skupinu vlevo.';
$lang['cs_CZ']['SideReport']['EMPTYPAGES'] = 'Prázdné stránky';
$lang['cs_CZ']['SideReport']['LAST2WEEKS'] = 'Stránky upravené během posledních 2 týdnů';
$lang['cs_CZ']['SideReport']['REPEMPTY'] = 'Výkaz %s je prázdný.';
$lang['cs_CZ']['SideReport']['TODO'] = 'Udělat';
$lang['cs_CZ']['StaticExporter']['BASEURL'] = 'Základní URL';
$lang['cs_CZ']['StaticExporter']['EXPORTTO'] = 'Exportovat do této složky';
$lang['cs_CZ']['StaticExporter']['FOLDEREXPORT'] = 'Složka, kam se má exportovat';
$lang['cs_CZ']['StaticExporter']['NAME'] = 'Statický exportér';
$lang['cs_CZ']['TableListField_PageControls.ss']['DISPLAYING'] = 'Zobrazuji';
$lang['cs_CZ']['TableListField_PageControls.ss']['OF'] = 'z';
$lang['cs_CZ']['TableListField_PageControls.ss']['TO'] = 'do';
$lang['cs_CZ']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Zobraz první';
$lang['cs_CZ']['TableListField_PageControls.ss']['VIEWLAST'] = 'Zobraz poslední';
$lang['cs_CZ']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Zobrazit další';
$lang['cs_CZ']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Zobrazit předchozí';
$lang['cs_CZ']['ThumbnailStripField']['NOFLASHFOUND'] = 'Flash soubory nenalezeny';
$lang['cs_CZ']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'Flash soubory nenalezeny v';
$lang['cs_CZ']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'Obrázky nenalezeny v';
$lang['cs_CZ']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Žádný obrázky nenalezeny.';
$lang['cs_CZ']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Vyberte složku nebo použijte vyhledávání)';
$lang['cs_CZ']['ViewArchivedEmail.ss']['CANACCESS'] = 'Můžete přistupovat k archivu pomocí tohoto odkazu:';
$lang['cs_CZ']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Požadovali jste prohlížet obsah našich stránek během';
$lang['cs_CZ']['WaitingOn.ss']['ATO'] = 'přiřazeno k';
$lang['cs_CZ']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Dostupné widgety';
$lang['cs_CZ']['WidgetAreaEditor.ss']['INUSE'] = 'Aktuálně používané widgety';
$lang['cs_CZ']['WidgetAreaEditor.ss']['NOAVAIL'] = 'V současnosti nejsou povoleny žádné widgety.';
$lang['cs_CZ']['WidgetAreaEditor.ss']['TOADD'] = 'Pro přidání widgetu jej přetáhněte z levé strany do této oblasti.';
$lang['cs_CZ']['WidgetEditor.ss']['DELETE'] = 'Odstranit';

?>