-=[ Sourcemod Webadmin Script ]=-

Release: 2.1 Final
Release Date: juli 2010

SourceMod Webadmin Script 2007 - 20XX by Andreas Dahl alias HSFighter. All rights reserved.

******************************************************************************
* 				                                             *
* News und Download der aktuellsten Version auf: 			     *
* http://www.forum.sourceserver.info/viewtopic.php?f=48&t=451  		     *
*                               			                     *
******************************************************************************

----- Bitte Lesen -----

Es wird keine Haftung f�r evt. Sch�den �bernommen
die durch das benutzten dieses Skriptes entstehen.
Wenn ihr Bugs findet und melden wollt, dann bitte in der 
Sourcemod Sektion of http://www.forum.sourceserver.info

---- Was ist Sourcemod Webadmin? ----

Sourcemod Webadmin ist ein PHP-Script um Sourcemod Plugins mit MySQL Support zu verwalten.

----- Systemanforderungen -----

Web server:             Web server Apache, IIS 
Middleware:             PHP4.3 oder h�her
Database, core system:  MySQL
Vorrausetzug:		Sourcemod >>> v1.3 <<< oder h�her!

----- Installation -----

Wenn bereits das MySQL-Admin Plugin mit einer Datenbank verwendet wird,
bitte bei Schritt 4 anfangen !!!

1.  Erstelle eine neue Datenbank. z.B. admin 
2.  Importiere "create_admins" aus dem Verzeichniss "addons/sourcemod/configs/sql-init-scripts/mysql" in die Datenbank.
3.  Editiere die "databases.cfg" in dem "addons/sourcemod/configs" Verzeichnis auf dem Gameserver.
4.  Endpacke die .rar Datei und lade alle Dateien auf den Webserver hoch.
5.  �ffne die Datei "../inc/config.php" und trage die Einstellungen f�r deine MySQL Datenbank ein.
6.  Starte die "../setup.php" von deinem Webbrowser aus.
7.  Setze Chmod 777 f�r das "../temp" Verzeichnis.
8.  Setze Chmod 777 f�r das "../inc/pics/games" Verzeichnis.
9.  L�sche die "../setup.php" auf deinem Web-Server!!!
10. �ffne das Webinterface �ber "../index.php" in deinem Webbrowser
11. Login Daten...
    Username: admin
    Passwort: 123456

12. Fertig...!

----- Update zu Ver. 2.1 Final -----

1. L�sche alle Dateien von dem Sourcemod Webadmin auf dem webserver!
2. Endpacke die .rar Datei und lade alle Dateien auf den Webserver hoch.
3. �ffne die Datei "../inc/config.php" und trage die Einstellungen f�r deine MySQL Datenbank ein.
4. Starte die "../setup.php" von deinem Webbrowser aus.
5. Setze Chmod 777 f�r das "../temp" Verzeichnis
6. Setze Chmod 777 f�r das "../inc/pics/games" Verzeichnis.
7. L�sche die "../setup.php" auf deinem Web-Server!!!

8. Fertig...!


---- SQL-Admins Gruppen f�r verschiedene Server ----
===> Diese Funktion ist optional <===

Um den Mutltiserversupport f�r SQL-Admins zu nutzen, wird dieses Plugin ben�tigt
"SQL Admin Plugins MultiServ Edition" >>> http://forums.alliedmods.net/showthread.php?p=730330 <<<

Die ben�tigten SQL-Tabellen werden automatisch bei der installation oder update auf Sourcemod-Webadmin v2.0 or h�er erstellt!
Es m�ss das "admin-sql-prefetch.smx" oder "admin-sql-threaded.smx" mit dem neuen Plugin ausgetauscht werden.

Wenn ihr vorher keine SQL-Admins genutzt habt, 
dann ist die installation von dem "sql-admin-manager.smx" plugin zus�tzlich notwendig.
Dieses Plugin liegt bei Sourcemod bei.


Um die Pluginfunktion im Webinterface zu nutzen m�ssen die 
"Servergroups" im Men� "Interface" --> "Settings" aktiviert werden.

Auchtung:
* Nur Gruppen die mit Server �ber "Server Groups" verbunden sind haben Adminrechte auf dem Server
* Alle anderen "gruppen" und "clients" haben keine Adminrechte auf dem Server.
* Servergroups werden beim exportieren der localen Admindateien mit ber�cksichtigt.

===> End optional <===

Danke an "MistaGee" f�r dieses excillente Plugin


---- Credits ----

Project Manager, Hauptentwickler:

    * HSFighter 

Sprach�bersetzungen:
    
    * HSFighter (*Bad* English) 
    * UnFixed (*Better* English)
    * HSFighter (German)
    * HO!NO! (French)
    * elpouletorange (French) 
    * Fighter777 (French) 
    * manix (French)
    * eric0279 (French)
    * Flyflo (French)
    * S@ndel (Russian) 

Besonderen Dank an:

    * Bailopan (Developer of Sourcemod)
    * moggiex
    * muukis
    * Nephyrin
    * MistaGee
    * -=|JFH|=-Naris
    * W][LDF][RE
    * Chrisber
    * NuX
    * DeaD_EyE
    * Isias
    * GonZo 


----- Feedback -----

Feedback, Kommentare, etc sind gerne erw�nscht - Sourcemod Sektion auf:
http://www.forum.sourceserver.info (Deutscher Support)
oder
http://www.forums.alliedmods.net/showthread.php?t=60174 (Englischer Support)

Viel Spa�!
