<?php

/**
 * Polish (Poland) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('pl_PL', $lang) && is_array($lang['pl_PL'])) {
	$lang['pl_PL'] = array_merge($lang['en_US'], $lang['pl_PL']);
} else {
	$lang['pl_PL'] = $lang['en_US'];
}

$lang['pl_PL']['AssetAdmin']['CHOOSEFILE'] = 'Wybierz plik';
$lang['pl_PL']['AssetAdmin']['DELETEDX'] = 'Usunięto %s plików. %s';
$lang['pl_PL']['AssetAdmin']['FILESREADY'] = 'Pliki gotowe do wgrania';
$lang['pl_PL']['AssetAdmin']['FOLDERDELETED'] = 'katalog został usunięty.';
$lang['pl_PL']['AssetAdmin']['FOLDERSDELETED'] = 'katalogi zostały usunięte.';
$lang['pl_PL']['AssetAdmin']['MENUTITLE'] = 'Pliki i Obrazy';
$lang['pl_PL']['AssetAdmin']['MENUTITLE'] = 'Pliki i Obrazy';
$lang['pl_PL']['AssetAdmin']['MOVEDX'] = 'Przeniesiono %s plików';
$lang['pl_PL']['AssetAdmin']['NEWFOLDER'] = 'Nowy Folder';
$lang['pl_PL']['AssetAdmin']['NOTEMP'] = 'Nie ma ustawionego folderu tymczasowego dla uploadu plików. Ustaw upload_tmp_dir w php.ini.';
$lang['pl_PL']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Nie ma nic do wgrania';
$lang['pl_PL']['AssetAdmin']['NOWBROKEN'] = 'Te strony mają zepsute linki';
$lang['pl_PL']['AssetAdmin']['NOWBROKEN2'] = 'Ich właściciele zostali powiadomieni przez e-maile i poprawią te strony.';
$lang['pl_PL']['AssetAdmin']['SAVEDFILE'] = 'Zapisano plik %s';
$lang['pl_PL']['AssetAdmin']['SAVEFOLDERNAME'] = 'Zapisz nazwę folderu';
$lang['pl_PL']['AssetAdmin']['THUMBSDELETED'] = 'Wszystkie nieużywane miniatury zostały usunięte.';
$lang['pl_PL']['AssetAdmin']['UPLOAD'] = 'Wgraj pliki z listy poniżej';
$lang['pl_PL']['AssetAdmin']['UPLOADEDX'] = 'Wgrano pliki (%s)';
$lang['pl_PL']['AssetAdmin_left.ss']['CREATE'] = 'Stwórz';
$lang['pl_PL']['AssetAdmin_left.ss']['DELETE'] = 'Usuń ...';
$lang['pl_PL']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Usuń zaznaczone foldery';
$lang['pl_PL']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Zezwól na przeciąganie elementów';
$lang['pl_PL']['AssetAdmin_left.ss']['FOLDERS'] = 'Foldery';
$lang['pl_PL']['AssetAdmin_left.ss']['GO'] = 'Idź';
$lang['pl_PL']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Wybierz foldery, które chcesz usunąć i kliknij przycisk poniżej';
$lang['pl_PL']['AssetAdmin_left.ss']['TOREORG'] = 'Aby zreorganizować twoje foldery, przenieś je w wybrane miejsca';
$lang['pl_PL']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Proszę wybrać stronę po lewej';
$lang['pl_PL']['AssetAdmin_right.ss']['WELCOME'] = 'Witamy w ';
$lang['pl_PL']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Nie masz uprawnień do wgrania plików do tego folderu ';
$lang['pl_PL']['AssetTableField']['CAPTION'] = 'Nagłówek';
$lang['pl_PL']['AssetTableField']['CREATED'] = 'Pierwszy wgrany';
$lang['pl_PL']['AssetTableField']['DIM'] = 'Rozmiar';
$lang['pl_PL']['AssetTableField']['DIMLIMT'] = 'Określ Limit Wymiarów Okienka Popup';
$lang['pl_PL']['AssetTableField']['EDITIMAGE'] = 'Edytuj ten obrazek';
$lang['pl_PL']['AssetTableField']['FILENAME'] = 'Nazwa pliku';
$lang['pl_PL']['AssetTableField']['GALLERYOPTIONS'] = 'Opcje Galerii';
$lang['pl_PL']['AssetTableField']['IMAGE'] = 'Obrazek';
$lang['pl_PL']['AssetTableField']['ISFLASH'] = 'Jest Dokumentem Flash';
$lang['pl_PL']['AssetTableField']['LASTEDIT'] = 'Ostatnia zmiana';
$lang['pl_PL']['AssetTableField']['MAIN'] = 'Główna';
$lang['pl_PL']['AssetTableField']['NOLINKS'] = 'Do tego pliku nie prowadzą żadne odnośniki.';
$lang['pl_PL']['AssetTableField']['OWNER'] = 'Właściciel';
$lang['pl_PL']['AssetTableField']['PAGESLINKING'] = 'Następujące strony zawierają linki do tej strony:';
$lang['pl_PL']['AssetTableField']['POPUPHEIGHT'] = 'Wysokość Okienka Popup';
$lang['pl_PL']['AssetTableField']['POPUPWIDTH'] = 'Szerokość Okienka Popup';
$lang['pl_PL']['AssetTableField']['SIZE'] = 'Rozmiar';
$lang['pl_PL']['AssetTableField.ss']['DELFILE'] = 'Usuń ten plik';
$lang['pl_PL']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Przenieś folder do pliku po lewej';
$lang['pl_PL']['AssetTableField.ss']['EDIT'] = 'Edytuj obiekt';
$lang['pl_PL']['AssetTableField.ss']['SHOW'] = 'Pokaż obiekt';
$lang['pl_PL']['AssetTableField']['SWFFILEOPTIONS'] = 'Opcje Pliku SWF';
$lang['pl_PL']['AssetTableField']['TITLE'] = 'Tytuł';
$lang['pl_PL']['AssetTableField']['TYPE'] = 'Rodzaj';
$lang['pl_PL']['AssetTableField']['URL'] = 'URL';
$lang['pl_PL']['CMSBatchActions']['PUBLISH_PAGES'] = 'Opublikuj';
$lang['pl_PL']['CMSLeft.ss']['DELPAGE'] = 'Usuń strony ...';
$lang['pl_PL']['CMSLeft.ss']['DELPAGES'] = 'Usuń zaznaczone strony';
$lang['pl_PL']['CMSLeft.ss']['GO'] = 'Idż';
$lang['pl_PL']['CMSLeft.ss']['NEWPAGE'] = 'Nowa strona ...';
$lang['pl_PL']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Zaznacz strony które chcesz usunąć i kliknij przycisk poniżej';
$lang['pl_PL']['CMSLeft.ss']['SITECONT'] = 'Zawartość strony';
$lang['pl_PL']['CMSMain']['ACCESS'] = 'Dostęp do %s w CMSie';
$lang['pl_PL']['CMSMain']['CANCEL'] = 'Anuluj';
$lang['pl_PL']['CMSMain']['CHOOSEREPORT'] = '(Wybierz raport)';
$lang['pl_PL']['CMSMain']['COMPARINGV'] = 'Porównaj wersję #%d i #%d';
$lang['pl_PL']['CMSMain']['COPYPUBTOSTAGE'] = 'Naprawdę chcesz skopiować publikowaną treść tej strony?';
$lang['pl_PL']['CMSMain']['DELETE'] = 'Usuń ze strony roboczej';
$lang['pl_PL']['CMSMain']['DESCREMOVED'] = 'i %s potomków';
$lang['pl_PL']['CMSMain']['EMAIL'] = 'E-mail';
$lang['pl_PL']['CMSMain']['GO'] = 'Idź';
$lang['pl_PL']['CMSMain']['MENUTITLE'] = 'Zawartość strony';
$lang['pl_PL']['CMSMain']['MENUTITLE'] = 'Zawartość Strony';
$lang['pl_PL']['CMSMain']['METADESCOPT'] = 'Opis';
$lang['pl_PL']['CMSMain']['METAKEYWORDSOPT'] = 'Słowa kluczowe';
$lang['pl_PL']['CMSMain']['NEW'] = 'Nowy';
$lang['pl_PL']['CMSMain']['NOCONTENT'] = 'brak zawartości';
$lang['pl_PL']['CMSMain']['NOTHINGASSIGNED'] = 'Nie masz nic przydzielonego';
$lang['pl_PL']['CMSMain']['NOWAITINGON'] = 'Obecnie nie oczekujesz na nikogo.';
$lang['pl_PL']['CMSMain']['NOWBROKEN'] = 'Poniższe strony mają nieprawidłowe linki:';
$lang['pl_PL']['CMSMain']['NOWBROKEN2'] = 'Właściciele zostaną powiadomieni mailem i naprawią strony';
$lang['pl_PL']['CMSMain']['OK'] = 'OK';
$lang['pl_PL']['CMSMain']['PAGEDEL'] = 'Usunięto stronę %d';
$lang['pl_PL']['CMSMain']['PAGENOTEXISTS'] = 'Ta strona nie istnieje';
$lang['pl_PL']['CMSMain']['PAGEPUB'] = '%d opublikowana strona';
$lang['pl_PL']['CMSMain']['PAGESDEL'] = 'Usunięto strony %d';
$lang['pl_PL']['CMSMain']['PAGESPUB'] = '%d opublikowane strony';
$lang['pl_PL']['CMSMain']['PAGETYPEOPT'] = 'Typ strony';
$lang['pl_PL']['CMSMain']['PRINT'] = 'Drukuj';
$lang['pl_PL']['CMSMain']['PUBALLCONFIRM'] = 'Opublikuj każdą stronę witryny, kopiując zawartość z brudnopisu';
$lang['pl_PL']['CMSMain']['PUBALLFUN'] = 'Funkcja "Opublikuj wszystkie"';
$lang['pl_PL']['CMSMain']['PUBALLFUN2'] = 'Naciśnięcie przycisku jest równoznaczne z naciśnięciem "publikuj" każdej strony. Używaj tego gdy zamierzasz edytować całą zawartość, np. kiedy strona jest tworzona po raz pierwszy';
$lang['pl_PL']['CMSMain']['PUBPAGES'] = 'Gotowe: Opublikowano %d strony';
$lang['pl_PL']['CMSMain']['REMOVED'] = 'Usunięto \'%s\'%s z wersji online';
$lang['pl_PL']['CMSMain']['REMOVEDFD'] = 'Usuń ze strony roboczej';
$lang['pl_PL']['CMSMain']['REMOVEDPAGE'] = 'Usunięto \'%s\' z opublikowanej strony';
$lang['pl_PL']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = 'Usunięto \'%s\' z wersji roboczej strony';
$lang['pl_PL']['CMSMain']['REPORT'] = 'Raport';
$lang['pl_PL']['CMSMain']['RESTORED'] = 'Odzyskiwanie\'%s\' udane';
$lang['pl_PL']['CMSMain']['ROLLBACK'] = 'Wróć do tej wersji.';
$lang['pl_PL']['CMSMain']['ROLLEDBACKPUB'] = 'Poprzednia opublikowana wersja. Nowy numer wersji to #%d';
$lang['pl_PL']['CMSMain']['ROLLEDBACKVERSION'] = 'Poprzednia wersja to #%d. Nowy numer wersji to #%d';
$lang['pl_PL']['CMSMain']['SAVE'] = 'Zapisz';
$lang['pl_PL']['CMSMain']['SENTTO'] = 'Wysłano do %s %s po akceptację';
$lang['pl_PL']['CMSMain']['STATUSOPT'] = 'Status';
$lang['pl_PL']['CMSMain']['TITLEOPT'] = 'Tytuł';
$lang['pl_PL']['CMSMain']['TOTALPAGES'] = 'W sumie stron:';
$lang['pl_PL']['CMSMain']['VERSIONSNOPAGE'] = 'Nie można znaleźć strony #%d';
$lang['pl_PL']['CMSMain']['VIEWING'] = 'Oglądasz wersję #%d, stworzoną %s';
$lang['pl_PL']['CMSMain']['VISITRESTORE'] = 'zobacz restorepage/(ID)';
$lang['pl_PL']['CMSMain']['WAITINGON'] = 'Poczekaj na innych ludzi pracujących nad tymi <b>%</b> stronami';
$lang['pl_PL']['CMSMain']['WORKTODO'] = 'Pracujesz na tych <b>%</b> stronach';
$lang['pl_PL']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Nie znaleziono nazwy przycisku';
$lang['pl_PL']['CMSMain_dialog.ss']['NOLINKED'] = 'Nie odnaleziono window.linkedObject aby wysłać sygnał przyciśnięcia przycisku z powrotem do głównego okna';
$lang['pl_PL']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Dodałeś do oczekujących i jeszcze nie opublikowanych stron';
$lang['pl_PL']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Dodaj kryterium ...';
$lang['pl_PL']['CMSMain_left.ss']['BATCHACTIONS'] = 'Akcja pliku';
$lang['pl_PL']['CMSMain_left.ss']['CHANGED'] = 'zmienione';
$lang['pl_PL']['CMSMain_left.ss']['CLOSEBOX'] = 'kliknij aby zamknąć';
$lang['pl_PL']['CMSMain_left.ss']['COMPAREMODE'] = 'Tryb porównania (wybierz 2 poniżej)';
$lang['pl_PL']['CMSMain_left.ss']['CREATE'] = 'Stwórz';
$lang['pl_PL']['CMSMain_left.ss']['DEL'] = 'usunięte';
$lang['pl_PL']['CMSMain_left.ss']['DELETECONFIRM'] = 'Usuń zaznaczone strony';
$lang['pl_PL']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Usunąłeś z oczekujących stron ale ciągle jest aktywna';
$lang['pl_PL']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Zmieniłeś oczekującą stronę ale jeszcze nie opublikowałeś ';
$lang['pl_PL']['CMSMain_left.ss']['EDITEDSINCE'] = 'Edytowane od';
$lang['pl_PL']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Zezwól na zmianę przenieś i puść ';
$lang['pl_PL']['CMSMain_left.ss']['GO'] = 'idź';
$lang['pl_PL']['CMSMain_left.ss']['HIDDEN'] = 'ukryte';
$lang['pl_PL']['CMSMain_left.ss']['KEY'] = 'Klucz:';
$lang['pl_PL']['CMSMain_left.ss']['NEW'] = 'nowy';
$lang['pl_PL']['CMSMain_left.ss']['NOTINMENU'] = 'Nie pokazuj w menu';
$lang['pl_PL']['CMSMain_left.ss']['OPENBOX'] = 'kliknij aby otworzyć';
$lang['pl_PL']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Wersja archiwalna strony';
$lang['pl_PL']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Publikuj zaznaczone strony';
$lang['pl_PL']['CMSMain_left.ss']['SEARCH'] = 'Szukaj';
$lang['pl_PL']['CMSMain_left.ss']['SEARCHTITLE'] = 'Szukaj przez URL, Tytuł, Tytuł Menu i Zawartość';
$lang['pl_PL']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Zaznacz strony które chcesz zmienić i kliknij polecenie: ';
$lang['pl_PL']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Wybierz strony, które chcesz zduplikować, to, czy ich podstrony powinny zostać uwzględnione oraz gdzie chcesz umieścić duplikaty';
$lang['pl_PL']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Pokaż tylko zmienione strony';
$lang['pl_PL']['CMSMain_left.ss']['SHOWUNPUB'] = 'pokaż nieopublikowane wersje';
$lang['pl_PL']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Zawartość i struktura strony';
$lang['pl_PL']['CMSMain_left.ss']['SITEREPORTS'] = 'Raporty strony';
$lang['pl_PL']['CMSMain_right.ss']['ANYMESSAGE'] = 'Czy masz jakieś wiadomości do edytowania? ';
$lang['pl_PL']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Proszę wybrać stronę po lewej';
$lang['pl_PL']['CMSMain_right.ss']['LOADING'] = 'wczytuję...';
$lang['pl_PL']['CMSMain_right.ss']['MESSAGE'] = 'wiadomość';
$lang['pl_PL']['CMSMain_right.ss']['SENDTO'] = 'Wyślij do ';
$lang['pl_PL']['CMSMain_right.ss']['STATUS'] = 'Status';
$lang['pl_PL']['CMSMain_right.ss']['SUBMIT'] = 'przedstaw do akceptacji';
$lang['pl_PL']['CMSMain_right.ss']['WELCOMETO'] = 'Witamy w ';
$lang['pl_PL']['CMSMain_versions.ss']['AUTHOR'] = 'Autor';
$lang['pl_PL']['CMSMain_versions.ss']['NOTPUB'] = 'Nie opublikowany';
$lang['pl_PL']['CMSMain_versions.ss']['PUBR'] = 'Publikujący';
$lang['pl_PL']['CMSMain_versions.ss']['UNKNOWN'] = 'Nieznany';
$lang['pl_PL']['CMSMain_versions.ss']['WHEN'] = 'Kiedy';
$lang['pl_PL']['CMSRight.ss']['CHOOSEPAGE'] = 'Proszę wybrać stronę po lewej';
$lang['pl_PL']['CMSRight.ss']['ECONTENT'] = 'Edytuj zawartość';
$lang['pl_PL']['CMSRight.ss']['WELCOMETO'] = 'Witamy w';
$lang['pl_PL']['CommentAdmin']['ACCEPT'] = 'Akceptuj';
$lang['pl_PL']['CommentAdmin']['APPROVED'] = 'Zaakceptowano %s komentarzy.';
$lang['pl_PL']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Zaakceptowane Komentarze';
$lang['pl_PL']['CommentAdmin']['AUTHOR'] = 'Autor';
$lang['pl_PL']['CommentAdmin']['COMMENT'] = 'Komentarz';
$lang['pl_PL']['CommentAdmin']['COMMENTS'] = 'Komentarze';
$lang['pl_PL']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Komentarze oczekujące na moderację';
$lang['pl_PL']['CommentAdmin']['DATEPOSTED'] = 'Data Wysłania';
$lang['pl_PL']['CommentAdmin']['DELETE'] = 'Usuń';
$lang['pl_PL']['CommentAdmin']['DELETEALL'] = 'Usuń wszystkie';
$lang['pl_PL']['CommentAdmin']['DELETED'] = 'Usunięto %s komentarzy';
$lang['pl_PL']['CommentAdmin']['MARKASNOTSPAM'] = 'To nie jest spam!';
$lang['pl_PL']['CommentAdmin']['MARKEDNOTSPAM'] = 'Oznaczono %s komentarzy jako nie-spam.';
$lang['pl_PL']['CommentAdmin']['MARKEDSPAM'] = 'Oznaczono %s komentarzy jako spam.';
$lang['pl_PL']['CommentAdmin']['MENUTITLE'] = 'Komentarze';
$lang['pl_PL']['CommentAdmin']['MENUTITLE'] = 'Komentarze';
$lang['pl_PL']['CommentAdmin']['NAME'] = 'Nazwa';
$lang['pl_PL']['CommentAdmin']['PAGE'] = 'Strona';
$lang['pl_PL']['CommentAdmin']['SPAM'] = 'Spam';
$lang['pl_PL']['CommentAdmin']['SPAMMARKED'] = 'Oznacz jako spam';
$lang['pl_PL']['CommentAdmin_left.ss']['COMMENTS'] = 'Komentarze';
$lang['pl_PL']['CommentAdmin_right.ss']['WELCOME1'] = 'Witaj w';
$lang['pl_PL']['CommentAdmin_right.ss']['WELCOME2'] = 'sekcji zarządzania komentarzami. Wybierz folder z listy po lewej.';
$lang['pl_PL']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Zaakceptowane';
$lang['pl_PL']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Oczekujące na moderację';
$lang['pl_PL']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Komentarze';
$lang['pl_PL']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['pl_PL']['CommentList.ss']['CREATEDW'] = 'Komentarze są tworzone za każdym razem, gdy jest wykonywane jedno z poleceń - Opublikuj, Odrzuć, Zatwierdź';
$lang['pl_PL']['CommentList.ss']['NOCOM'] = 'Nie ma komentarzy na tej stronie';
$lang['pl_PL']['CommentTableField']['FILTER'] = 'Filtr';
$lang['pl_PL']['CommentTableField']['SEARCH'] = 'Szukaj';
$lang['pl_PL']['CommentTableField.ss']['APPROVE'] = 'zaakceptuj';
$lang['pl_PL']['CommentTableField.ss']['APPROVECOMMENT'] = 'Zaakceptuj ten komentarz';
$lang['pl_PL']['CommentTableField.ss']['DELETE'] = 'usuń';
$lang['pl_PL']['CommentTableField.ss']['DELETEROW'] = 'Usuń ten rząd';
$lang['pl_PL']['CommentTableField.ss']['EDIT'] = 'edytuj';
$lang['pl_PL']['CommentTableField.ss']['HAM'] = 'ham';
$lang['pl_PL']['CommentTableField.ss']['MARKASSPAM'] = 'Oznacz ten komentarz jako spam';
$lang['pl_PL']['CommentTableField.ss']['MARKNOSPAM'] = 'Oznacz ten komentarz jako nie-spam';
$lang['pl_PL']['CommentTableField.ss']['NOITEMSFOUND'] = 'Nie znaleziono żadnych obiektów';
$lang['pl_PL']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['pl_PL']['ComplexTableField']['CLOSEPOPUP'] = 'Zamknij Okienko';
$lang['pl_PL']['ComplexTableField']['SUCCESSADD'] = 'Dodano %s %s %s';
$lang['pl_PL']['ImageEditor.ss']['ACTIONS'] = 'akcje';
$lang['pl_PL']['ImageEditor.ss']['APPLY'] = 'zastosuj';
$lang['pl_PL']['ImageEditor.ss']['BRIGHTNESS'] = 'jasność';
$lang['pl_PL']['ImageEditor.ss']['CANCEL'] = 'skasuj';
$lang['pl_PL']['ImageEditor.ss']['CONTRAST'] = 'kontrast';
$lang['pl_PL']['ImageEditor.ss']['CROP'] = 'wytnij';
$lang['pl_PL']['ImageEditor.ss']['CURRENTACTION'] = 'aktualna&nbsp;akcja';
$lang['pl_PL']['ImageEditor.ss']['EDITFUNCTIONS'] = 'funkcje&nbsp;edycji';
$lang['pl_PL']['ImageEditor.ss']['EFFECTS'] = 'efekty';
$lang['pl_PL']['ImageEditor.ss']['EXIT'] = 'wyjdź';
$lang['pl_PL']['ImageEditor.ss']['GAMMA'] = 'gamma';
$lang['pl_PL']['ImageEditor.ss']['GREYSCALE'] = 'odcień szarości';
$lang['pl_PL']['ImageEditor.ss']['HEIGHT'] = 'wysokość';
$lang['pl_PL']['ImageEditor.ss']['REDO'] = 'powtórz';
$lang['pl_PL']['ImageEditor.ss']['ROT'] = 'odwróć';
$lang['pl_PL']['ImageEditor.ss']['SAVE'] = 'zapisz&nbsp;obraz';
$lang['pl_PL']['ImageEditor.ss']['SEPIA'] = 'sepia';
$lang['pl_PL']['ImageEditor.ss']['UNDO'] = 'cofnij ';
$lang['pl_PL']['ImageEditor.ss']['UNTITLED'] = 'Nienazwany dokument';
$lang['pl_PL']['ImageEditor.ss']['WIDTH'] = 'szerokość';
$lang['pl_PL']['LeftAndMain']['CHANGEDURL'] = 'Zmieniony URL to \'%s\'';
$lang['pl_PL']['LeftAndMain']['COMMENTS'] = 'Komentarze';
$lang['pl_PL']['LeftAndMain']['FILESIMAGES'] = 'Pliki i Obrazy';
$lang['pl_PL']['LeftAndMain']['HELP'] = 'Pomoc';
$lang['pl_PL']['LeftAndMain']['PAGETYPE'] = 'Rodzaj strony:';
$lang['pl_PL']['LeftAndMain']['PERMAGAIN'] = 'Zostałeś wylogowany z CMSa. Jeśli chcesz zalogować się ponownie, wpisz username i hasło poniżej';
$lang['pl_PL']['LeftAndMain']['PERMALREADY'] = 'Niestety nie masz dostępu do tej części CMS. Jeśli chcesz zaloguj się jako inny użytkownik poniżej.';
$lang['pl_PL']['LeftAndMain']['PERMDEFAULT'] = 'Proszę wybrać metodę identyfikacji i wpisać swoje dane, aby uruchomić CMSa.';
$lang['pl_PL']['LeftAndMain']['PLEASESAVE'] = 'Proszę zapisać stronę: Ta strona nie może być nadpisana ponieważ nie została jeszcze zapisana.';
$lang['pl_PL']['LeftAndMain']['REPORTS'] = 'Raporty';
$lang['pl_PL']['LeftAndMain']['REQUESTERROR'] = 'Błąd zapytania';
$lang['pl_PL']['LeftAndMain']['SAVED'] = 'zapisane';
$lang['pl_PL']['LeftAndMain']['SAVEDUP'] = 'Zapisane';
$lang['pl_PL']['LeftAndMain']['SECURITY'] = 'Bezpieczeństwo';
$lang['pl_PL']['LeftAndMain']['SITECONTENT'] = 'Zawartość Strony';
$lang['pl_PL']['LeftAndMain']['SITECONTENTLEFT'] = 'Zawartość strony';
$lang['pl_PL']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'To jest';
$lang['pl_PL']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'wersja, której aktualnie używasz, jest gałęzią CVS';
$lang['pl_PL']['LeftAndMain.ss']['ARCHS'] = 'Archiwalne strony';
$lang['pl_PL']['LeftAndMain.ss']['DRAFTS'] = 'Wersje robocze';
$lang['pl_PL']['LeftAndMain.ss']['EDIT'] = 'Edytuj';
$lang['pl_PL']['LeftAndMain.ss']['EDITINCMS'] = 'Edytuj tą stronę w CMSie';
$lang['pl_PL']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['pl_PL']['LeftAndMain.ss']['LOADING'] = 'Wczytywanie...';
$lang['pl_PL']['LeftAndMain.ss']['LOGGEDINAS'] = 'Zalogowany jako';
$lang['pl_PL']['LeftAndMain.ss']['LOGOUT'] = 'Wyloguj';
$lang['pl_PL']['LeftAndMain.ss']['PUBLIS'] = 'Opublikowane strony';
$lang['pl_PL']['LeftAndMain.ss']['REQUIREJS'] = 'CMS wymaga włączonej obsługi JavaScript';
$lang['pl_PL']['LeftAndMain.ss']['SSWEB'] = 'Strona Silverstripe';
$lang['pl_PL']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Zobacz tą stronę na Próbnej Stronie';
$lang['pl_PL']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Zobacz tą stronę na Opublikowanej Witrynie';
$lang['pl_PL']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Widok strony:';
$lang['pl_PL']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = 'Opublikowano \'%s\' poprawnie';
$lang['pl_PL']['LeftAndMain']['STATUSTO'] = 'Status zmieniony na \'%s\'';
$lang['pl_PL']['LeftAndMain']['TREESITECONTENT'] = 'Zawartość strony';
$lang['pl_PL']['MemberList.ss']['FILTER'] = 'Filtr';
$lang['pl_PL']['MemberList_PageControls.ss']['DISPLAYING'] = 'Wyświetlono';
$lang['pl_PL']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'użytkownicy';
$lang['pl_PL']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'użytkownicy';
$lang['pl_PL']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'użytkownicy';
$lang['pl_PL']['MemberList_PageControls.ss']['OF'] = 'z';
$lang['pl_PL']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'użytkownicy';
$lang['pl_PL']['MemberList_PageControls.ss']['TO'] = 'do';
$lang['pl_PL']['MemberList_PageControls.ss']['VIEWFIRST'] = 'Zobacz pierwsze';
$lang['pl_PL']['MemberList_PageControls.ss']['VIEWLAST'] = 'Zobacz ostatnie';
$lang['pl_PL']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Zobacz następnych';
$lang['pl_PL']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Zobacz ostatnie';
$lang['pl_PL']['MemberList_Table.ss']['EMAIL'] = 'Adres e-mail';
$lang['pl_PL']['MemberList_Table.ss']['FN'] = 'Imię';
$lang['pl_PL']['MemberList_Table.ss']['PASSWD'] = 'Hasło';
$lang['pl_PL']['MemberList_Table.ss']['SN'] = 'Nazwisko';
$lang['pl_PL']['MemberTableField']['ADD'] = 'Dodaj';
$lang['pl_PL']['MemberTableField']['ADDEDTOGROUP'] = 'Dodaj użytkownika do grupy';
$lang['pl_PL']['MemberTableField']['ADDINGFIELD'] = 'Dodawanie zakończone niepowodzeniem';
$lang['pl_PL']['MemberTableField']['ANYGROUP'] = 'Dowolna grupa';
$lang['pl_PL']['MemberTableField']['ASC'] = 'Rosąco';
$lang['pl_PL']['MemberTableField']['DESC'] = 'Malejąco';
$lang['pl_PL']['MemberTableField']['EMAIL'] = 'E-mail';
$lang['pl_PL']['MemberTableField']['FILTER'] = 'Filtr';
$lang['pl_PL']['MemberTableField']['FILTERBYGROUP'] = 'Filtruj wg grupy';
$lang['pl_PL']['MemberTableField']['FIRSTNAME'] = 'Imię';
$lang['pl_PL']['MemberTableField']['ORDERBY'] = 'Sortuj według';
$lang['pl_PL']['MemberTableField']['SEARCH'] = 'Szukaj';
$lang['pl_PL']['MemberTableField.ss']['ADDNEW'] = 'Dodaj nowość';
$lang['pl_PL']['MemberTableField.ss']['DELETEMEMBER'] = 'Usuń tego użytkownika';
$lang['pl_PL']['MemberTableField.ss']['EDITMEMBER'] = 'Edytuj tego użytkownika';
$lang['pl_PL']['MemberTableField.ss']['SHOWMEMBER'] = 'Pokaż tego użytkownika';
$lang['pl_PL']['MemberTableField']['SURNAME'] = 'Nazwisko';
$lang['pl_PL']['ModelAdmin']['ADDBUTTON'] = 'Dodaj';
$lang['pl_PL']['ModelAdmin']['ADDFORM'] = 'Wypełnij formularz aby dodać %s do bazy danych';
$lang['pl_PL']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Wybierz kolumny wyniku...';
$lang['pl_PL']['ModelAdmin']['CLEAR_SEARCH'] = 'Wyczyść Wyszukiwanie';
$lang['pl_PL']['ModelAdmin']['CREATEBUTTON'] = 'Stwórz \'%s\'';
$lang['pl_PL']['ModelAdmin']['DELETE'] = 'Usuń';
$lang['pl_PL']['ModelAdmin']['DELETEDRECORDS'] = 'Usunięto %s rekordów.';
$lang['pl_PL']['ModelAdmin']['FOUNDRESULTS'] = 'Twoje wyszukiwanie zwróciło %s wyników';
$lang['pl_PL']['ModelAdmin']['GOBACK'] = 'Wstecz';
$lang['pl_PL']['ModelAdmin']['GOFORWARD'] = 'Naprzód';
$lang['pl_PL']['ModelAdmin']['IMPORT'] = 'Importuj z CSV';
$lang['pl_PL']['ModelAdmin']['IMPORTEDRECORDS'] = 'Zaimportowano %s rekordów.';
$lang['pl_PL']['ModelAdmin']['ITEMNOTFOUND'] = 'Nie mogę znaleźć tego elementu';
$lang['pl_PL']['ModelAdmin']['LOADEDFOREDITING'] = 'Załadowano \'%s\' do edycji';
$lang['pl_PL']['ModelAdmin']['NOCSVFILE'] = 'Wybierz plik CSV do zaimportowania';
$lang['pl_PL']['ModelAdmin']['NOIMPORT'] = 'Nie ma niczego do zaimportowania';
$lang['pl_PL']['ModelAdmin']['NORESULTS'] = 'Twoje wyszukiwanie nie zwróciło żadnych wyników';
$lang['pl_PL']['ModelAdmin']['SAVE'] = 'Zapisz';
$lang['pl_PL']['ModelAdmin']['SEARCHRESULTS'] = 'Wyniki wyszukiwania';
$lang['pl_PL']['ModelAdmin']['SELECTALL'] = 'wybierz wszystko';
$lang['pl_PL']['ModelAdmin']['SELECTNONE'] = 'odznacz wszystko';
$lang['pl_PL']['ModelAdmin']['UPDATEDRECORDS'] = 'Poprawiono %s rekordów.';
$lang['pl_PL']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Kolumny bazy danych';
$lang['pl_PL']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = 'Pokaż specyfikację %s';
$lang['pl_PL']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'Relacje';
$lang['pl_PL']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = 'Specyfikacja %s';
$lang['pl_PL']['ModelAdmin_left.ss']['ADDLISTING'] = 'Dodaj Listing';
$lang['pl_PL']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'Importuj';
$lang['pl_PL']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Przeszukaj Listingi';
$lang['pl_PL']['ModelAdmin_right.ss']['WELCOME1'] = 'Witaj w %s. Wybierz jeden z wpisów po lewej.';
$lang['pl_PL']['ModelSidebar.ss']['ADDLISTING'] = 'Dodaj';
$lang['pl_PL']['ModelSidebar.ss']['IMPORT_TAB_HEADER'] = 'Importuj';
$lang['pl_PL']['ModelSidebar.ss']['SEARCHLISTINGS'] = 'Szukaj';
$lang['pl_PL']['PageComment']['Comment'] = 'Komentarz';
$lang['pl_PL']['PageComment']['COMMENTBY'] = 'Komentarz \'%s\' do %s';
$lang['pl_PL']['PageComment']['IsSpam'] = 'Spam?';
$lang['pl_PL']['PageComment']['Name'] = 'Imię Autora';
$lang['pl_PL']['PageComment']['NeedsModeration'] = 'Wymaga Moderacji?';
$lang['pl_PL']['PageComment']['PLURALNAME'] = 'Komentarze do strony';
$lang['pl_PL']['PageComment']['SINGULARNAME'] = 'Komentarz do strony';
$lang['pl_PL']['PageCommentInterface']['COMMENTERURL'] = 'Adres URL strony';
$lang['pl_PL']['PageCommentInterface']['POST'] = 'Post';
$lang['pl_PL']['PageCommentInterface']['SPAMQUESTION'] = 'Pytanie anty-spamowe: %s';
$lang['pl_PL']['PageCommentInterface.ss']['COMMENTS'] = 'Komentarze';
$lang['pl_PL']['PageCommentInterface.ss']['NEXT'] = 'następny';
$lang['pl_PL']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Nikt nie skomentował jeszcze tej strony';
$lang['pl_PL']['PageCommentInterface.ss']['POSTCOM'] = 'Dodaj komentarz';
$lang['pl_PL']['PageCommentInterface.ss']['PREV'] = 'poprzedni';
$lang['pl_PL']['PageCommentInterface.ss']['RSSFEEDALLCOMMENTS'] = 'RSS dla wszystkich komentarzy';
$lang['pl_PL']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'Subskrybuj komentarze przez RSS na tej stronie';
$lang['pl_PL']['PageCommentInterface.ss']['RSSVIEWALLCOMMENTS'] = 'Zobacz wszystkie komentarze';
$lang['pl_PL']['PageCommentInterface']['YOURCOMMENT'] = 'Komentarze';
$lang['pl_PL']['PageCommentInterface']['YOURNAME'] = 'Twoje imię';
$lang['pl_PL']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Pytanie anty-spamowe: %s';
$lang['pl_PL']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Twój komentarz został wysłany i oczekuje na moderację.';
$lang['pl_PL']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Twoja wiadomość to:';
$lang['pl_PL']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Wykryto spam!!';
$lang['pl_PL']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'zaakceptuj ten komentarz';
$lang['pl_PL']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'ten komentarz nie jest spamem';
$lang['pl_PL']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'ten komentarz jest spamem';
$lang['pl_PL']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Dodane przez';
$lang['pl_PL']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'zmień ten komentarz';
$lang['pl_PL']['ReportAdmin']['MENUTITLE'] = 'Raporty';
$lang['pl_PL']['ReportAdmin_left.ss']['REPORTS'] = 'Raporty';
$lang['pl_PL']['ReportAdmin_right.ss']['WELCOME1'] = 'Witamy w';
$lang['pl_PL']['ReportAdmin_right.ss']['WELCOME2'] = 'Sekcja raportów. Proszę wybrać jeden z raportów po lewej';
$lang['pl_PL']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Raporty';
$lang['pl_PL']['SecurityAdmin']['ADDMEMBER'] = 'Dodaj użytkownika';
$lang['pl_PL']['SecurityAdmin']['EDITPERMISSIONS'] = 'Edytuj zezwolenia i adresy IP dla każdej z grup';
$lang['pl_PL']['SecurityAdmin']['MENUTITLE'] = 'Bezpieczeństwo';
$lang['pl_PL']['SecurityAdmin']['MENUTITLE'] = 'Bezpieczeństwo';
$lang['pl_PL']['SecurityAdmin']['NEWGROUP'] = 'Nowa grupa';
$lang['pl_PL']['SecurityAdmin']['SAVE'] = 'Zapisz';
$lang['pl_PL']['SecurityAdmin']['SGROUPS'] = 'Grupa bezpieczeństwa';
$lang['pl_PL']['SecurityAdmin_left.ss']['CREATE'] = 'Stwórz';
$lang['pl_PL']['SecurityAdmin_left.ss']['DEL'] = 'Usuń ...';
$lang['pl_PL']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Usuń zaznaczone grupy';
$lang['pl_PL']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Zezwól na przeciąganie elementów';
$lang['pl_PL']['SecurityAdmin_left.ss']['GO'] = 'Idź';
$lang['pl_PL']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Grupa bezpieczeństwa';
$lang['pl_PL']['SecurityAdmin_left.ss']['SELECT'] = 'Zaznacz strony które chcesz usunąć i kliknij przycisk poniżej';
$lang['pl_PL']['SecurityAdmin_left.ss']['TOREORG'] = 'Aby zmienić układ witryny, przeciągnij strony w odpowiadające Ci miejsca.';
$lang['pl_PL']['SecurityAdmin_right.ss']['WELCOME1'] = 'Witamy w';
$lang['pl_PL']['SecurityAdmin_right.ss']['WELCOME2'] = 'Sekcja administracji bezpieczeństwem. Proszę wybrać jedną z grup po lewej';
$lang['pl_PL']['SideReport']['EMPTYPAGES'] = 'Puste strony';
$lang['pl_PL']['SideReport']['LAST2WEEKS'] = 'Strony zmienione w ostatnich 2 tygodniach';
$lang['pl_PL']['SideReport']['REPEMPTY'] = '%s raport jest pusty';
$lang['pl_PL']['SideReport']['TODO'] = 'Do zrobienia';
$lang['pl_PL']['StaticExporter']['BASEURL'] = 'Podstawowy URL';
$lang['pl_PL']['StaticExporter']['EXPORTTO'] = 'Eksportuj do tego folderu';
$lang['pl_PL']['StaticExporter']['FOLDEREXPORT'] = 'Folder przeniesiony do';
$lang['pl_PL']['StaticExporter']['NAME'] = 'Statyczny eksport';
$lang['pl_PL']['TableListField_PageControls.ss']['DISPLAYING'] = 'Wyświetlane';
$lang['pl_PL']['TableListField_PageControls.ss']['OF'] = 'z';
$lang['pl_PL']['TableListField_PageControls.ss']['TO'] = 'do';
$lang['pl_PL']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Zobacz pierwszy';
$lang['pl_PL']['TableListField_PageControls.ss']['VIEWLAST'] = 'Zobacz ostatni';
$lang['pl_PL']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Zobacz następny';
$lang['pl_PL']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Zobacz poprzedni';
$lang['pl_PL']['ThumbnailStripField']['NOFLASHFOUND'] = 'Nie znaleziono żadnych plików flash';
$lang['pl_PL']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'Nie znaleziono plików flash w';
$lang['pl_PL']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'Nie znaleziono obrazków w';
$lang['pl_PL']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Nie znaleziono obrazków w';
$lang['pl_PL']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Wybierz powyższy folder)
';
$lang['pl_PL']['ViewArchivedEmail.ss']['CANACCESS'] = 'Masz dostęp do archiwalnej strony pod adresem:';
$lang['pl_PL']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Zobacz zawartość naszej strony na';
$lang['pl_PL']['WaitingOn.ss']['ATO'] = 'przypisane do';
$lang['pl_PL']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Dostępne Widgety';
$lang['pl_PL']['WidgetAreaEditor.ss']['INUSE'] = 'Aktualnie używane widgety';
$lang['pl_PL']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Aktualnie nie są dostępne żadne widgety';
$lang['pl_PL']['WidgetAreaEditor.ss']['TOADD'] = 'Aby dodać widgety, przeciągnij je z lewej strony tutaj';
$lang['pl_PL']['WidgetEditor.ss']['DELETE'] = 'Usuń';

?>