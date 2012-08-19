<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   efg
 * @author    Thomas Kuhn <mail@th-kuhn.de>
 * @license   http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @copyright Thomas Kuhn 2007-2012
 */


$GLOBALS['TL_LANG']['tl_form']['storeFormdata']['0'] = "Daten im Modul \"Formular-Daten\" speichern";
$GLOBALS['TL_LANG']['tl_form']['storeFormdata']['1'] = "Wenn Sie diese Option wählen, werden die Daten im Backend-Modul \"Formular-Daten\" gespeichert.<br>Hinweis: Nach Ergänzung oder Änderung von Formular-Feldern bitte das Formular erneut speichern.";
$GLOBALS['TL_LANG']['tl_form']['efgAliasField']['0'] = "Formularfeld für Alias";
$GLOBALS['TL_LANG']['tl_form']['efgAliasField']['1'] = "Wählen Sie hier das Formularfeld, dessen Inhalt zur Erzeugung des Formulardaten-Alias verwendet wird.";
$GLOBALS['TL_LANG']['tl_form']['efgStoreValues']['0'] = "Options-Werte speichern";
$GLOBALS['TL_LANG']['tl_form']['efgStoreValues']['1'] = "Wenn Sie diese Option wählen, wird bei Radio-Buttons, Checkboxen und Selects der ausgewählte \"Wert\" anstelle der \"Bezeichnung\" gespeichert";
$GLOBALS['TL_LANG']['tl_form']['useFormValues']['0'] = "Feldwerte exportieren";
$GLOBALS['TL_LANG']['tl_form']['useFormValues']['1'] = "Wenn Sie diese Option wählen, werden beim Export der Formulardaten die ausgewählten Werte von Formularfeldern anstelle der ausgewählten Bezeichnungen exportiert. Dies trifft für alle Radio-Buttons, Checkboxen und Selects zu.";
$GLOBALS['TL_LANG']['tl_form']['useFieldNames']['0'] = "Feldnamen exportieren";
$GLOBALS['TL_LANG']['tl_form']['useFieldNames']['1'] = "Wenn Sie diese Option wählen, werden beim Export der Formulardaten die Feldnamen anstelle der Feldbezeichnungen exportiert.";
$GLOBALS['TL_LANG']['tl_form']['sendConfirmationMail']['0'] = "Bestätigung per E-Mail versenden";
$GLOBALS['TL_LANG']['tl_form']['sendConfirmationMail']['1'] = "Wenn Sie diese Option wählen, wird eine Bestätigung per E-Mail an den Absender des Formulars versendet.";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailRecipientField']['0'] = "Formularfeld mit E-Mail-Adresse des Empfängers";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailRecipientField']['1'] = "Wählen Sie hier das Formularfeld, in dem der Absender seine E-Mail-Adresse angibt oder ein Formularfeld, das die Empfänger-Adresse als Wert enthält.";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailRecipient']['0'] = "Empfänger";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailRecipient']['1'] = "Kommagetrennte Liste von E-Mail-Adressen, falls die E-Mail-Adresse nicht per Formularfeld definiert wird, oder die E-Mail an weitere Empfänger gesendet werden soll.";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailSender']['0'] = "Absender";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailSender']['1'] = "Bitte geben Sie hier die Absender-E-Mail-Adresse ein.";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailReplyto']['0'] = "Antwort an (Reply-To)";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailReplyto']['1'] = "Kommagetrennte Liste von E-Mail-Adressen, falls Antworten auf die E-Mail nicht an den Absender gesendet werden sollen.";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailSubject']['0'] = "Betreff";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailSubject']['1'] = "Bitte geben Sie eine Betreffzeile für die Bestätigungs-E-Mail ein. Wenn Sie keine Betreffzeile erfassen, steigt die Wahrscheinlichkeit, dass die E-Mail als SPAM identifiziert wird.";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailText']['0'] = "Text der Bestätigungs-E-Mail";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailText']['1'] = "Bitte geben Sie hier den Text der Bestätigungs-E-Mail ein. Neben den allgemeinen Insert-Tags werden Tags der Form form::FORMULARFELDNAME unterstützt.";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailTemplate']['0'] = "HTML-Vorlage für die Bestätigungs-E-Mail";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailTemplate']['1'] = "Wenn die Bestätigungs-E-Mail als HTML-E-Mail versendet werden soll, wählen Sie hier die HTML-Vorlage aus dem Dateisystem.";
$GLOBALS['TL_LANG']['tl_form']['addConfirmationMailAttachments']['0'] = "Dateien an Bestätigungs-E-Mail anhängen";
$GLOBALS['TL_LANG']['tl_form']['addConfirmationMailAttachments']['1'] = "Der Bestätigungs-E-Mail können hier Dateien zum Versand angehängt werden.";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailAttachments']['0'] = "Dateianhänge";
$GLOBALS['TL_LANG']['tl_form']['confirmationMailAttachments']['1'] = "Bitte wählen Sie hier die anzuhängenden Dateien aus.";
$GLOBALS['TL_LANG']['tl_form']['addFormattedMailAttachments']['0'] = "Dateien an E-Mail anhängen";
$GLOBALS['TL_LANG']['tl_form']['addFormattedMailAttachments']['1'] = "Der E-Mail können hier Dateien zum Versand angehängt werden.";
$GLOBALS['TL_LANG']['tl_form']['formattedMailAttachments']['0'] = "Dateianhänge";
$GLOBALS['TL_LANG']['tl_form']['formattedMailAttachments']['1'] = "Bitte wählen Sie hier die anzuhängenden Dateien aus.";
$GLOBALS['TL_LANG']['tl_form']['sendFormattedMail']['0'] = "Per E-Mail versenden (formatierter Text / HTML)";
$GLOBALS['TL_LANG']['tl_form']['sendFormattedMail']['1'] = "Der Inhalt der Nachricht kann frei angegeben werden, unter Verwendung von Insert-Tags. Die Nachricht kann auch als HTML-E-Mail versendet werden.";
$GLOBALS['TL_LANG']['tl_form']['formattedMailText']['0'] = "Text der E-Mail";
$GLOBALS['TL_LANG']['tl_form']['formattedMailText']['1'] = "Bitte geben Sie hier den Text der E-Mail ein. Neben den allgemeinen Insert-Tags werden Tags der Form form::FORMULARFELDNAME unterstützt.";
$GLOBALS['TL_LANG']['tl_form']['formattedMailTemplate']['0'] = "HTML-Vorlage für die E-Mail";
$GLOBALS['TL_LANG']['tl_form']['formattedMailTemplate']['1'] = "Wenn die E-Mail als HTML-E-Mail versendet werden soll, wählen Sie hier die HTML-Vorlage aus dem Dateisystem.";
$GLOBALS['TL_LANG']['tl_form']['efgStoreFormdata_legend'] = "(EFG) Formular-Daten speichern";
$GLOBALS['TL_LANG']['tl_form']['efgSendFormattedMail_legend'] = "(EFG) Per E-Mail versenden";
$GLOBALS['TL_LANG']['tl_form']['efgSendConfirmationMail_legend'] = "(EFG) Bestätigung per E-Mail versenden";

?>