<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Admin-mappe';
$string['availablelangs'] = 'Tilgængelige sprogpakker';
$string['chooselanguagehead'] = 'Vælg et sprog';
$string['chooselanguagesub'] = 'Vælg et sprog til brug under installationen. Dette sprog vil også blive brugt som standardsprog på webstedet, men det kan altid ændres til et andet sprog.';
$string['clialreadyconfigured'] = 'Konfigurationsfilen config.php eksisterer allerede. Benyt venigst admin/cli/install_database.php til at installere Moodle for dette site.';
$string['clialreadyinstalled'] = 'Filen config.php eksisterer allerede, brug admin/cli/install_database.php hvis du ønsker at opgradere dette websted.';
$string['cliinstallheader'] = 'Moodle {$a} kommandolinje-installationsprogram';
$string['databasehost'] = 'Databasevært';
$string['databasename'] = 'Databasenavn';
$string['databasetypehead'] = 'Vælg databasedriver';
$string['dataroot'] = 'Datamappe';
$string['datarootpermission'] = 'Rettighed til data mapper';
$string['dbprefix'] = 'Præfiks for tabeller';
$string['dirroot'] = 'Moodle-mappe';
$string['environmenthead'] = 'Kontrollerer din serveropsætning...';
$string['environmentsub2'] = 'Hver version af Moodle har nogle minimumskrav til PHP-version og nogle obligatoriske PHP-extensions.
Installationsprogrammet udfører et tjek før hver installation og opgradering. Kontakt din serveradministrator hvis ikke du ved hvordan du installerer en ny version eller aktiverer PHP-extensions.';
$string['errorsinenvironment'] = 'Systemtjekket mislykkedes!';
$string['installation'] = 'Installation';
$string['langdownloaderror'] = 'Sproget "{$a}" blev desværre ikke installeret. Installationen vil fortsætte på engelsk.';
$string['memorylimithelp'] = '<p>Den mængde hukommelse PHP kan bruge, er sat til {$a}.</p>

<p>Det kan forårsage at der opstår problemer senere, især hvis du har mange moduler aktiveret eller mange brugere.</p>

<p>Vi anbefaler at du konfigurerer PHP med mere hukommelse, f.eks. 40M. Der er flere måder hvorpå du kan ændre det.</p>
<ol>
<li>Hvis du har mulighed for det, kan du rekompilere PHP med <i>--enable-memory-limit</i>. Det vil tillade at Moodle selv kan definere hvor meget hukommelse der er brug for.</li>
<li>Hvis du har adgang til php.ini filen kan du ændre <b>memory_limit</b>-indstillingen til noget i retning af 40M. Hvis du ikke har direkte adgang til den kan du bede systemadministratoren om at gøre det for dig.</li>
<li>På nogle servere kan du oprette en \'.htaccess\'-fil og gemme den i moodle-mappen med linjen: <blockquote><div>php_value memory_limit 40M</div></blockquote>

<p>Det kan dog på nogle servere forhindre <b>alle</b> PHP-siderne i at virke (du vil se fejl når du ser på siderne). I så fald kan du blive nødt til at fjerne \'.htaccess\'filen igen.</p></li> </ol>';
$string['paths'] = 'Stier';
$string['pathserrcreatedataroot'] = 'Datamappen ({$a->dataroot}) kan ikke oprettes af installationsprogrammet.';
$string['pathshead'] = 'Bekræft stier';
$string['pathsrodataroot'] = 'Datamappen er skrivebeskyttet.';
$string['pathsroparentdataroot'] = 'Den overordnede mappe ({$a->parent}) er skrivebeskyttet. Datamappen ({$a->dataroot}) kan ikke oprettes af installationsprogrammet.';
$string['pathssubadmindir'] = 'Enkelte webhoteller bruger /admin som speciel URL til kontrolpanelet el. lign. Desværre konflikter det med Moodles standardplacering af admin-sider. Du kan klare dette ved at give admin-mappen et andet navn i din installation og skrive det her. Det kan f.eks. være <em>moodleadmin</em>. Det vil fikse admin-links i Moodle.';
$string['pathssubdataroot'] = '<p>En mappe hvori Moodle kan gemme uploadede filer.</p>
<p>Webserver-brugeren (som regel \'www-data\', \'nobody\', eller \'apache\') skal have læse- og skriveadgang til den.</p>
<p>Mappen  må ikke være tilgængelig direkte fra internettet.</p>
<p>Hvis ikke den allerede eksisterer, vil Installationsprogrammet forsøge at oprette den</p>';
$string['pathssubdirroot'] = '<p>Den fulde sti til mappen med Moodlekoden.</p>';
$string['pathssubwwwroot'] = '<p>Moodles fulde web-adresse, dvs. adressen som den skal stå i browserens adressefelt for at komme ind på Moodle.</p>
<p>Moodle kan ikke bruges fra flere adresser. Hvis dit websted kan tilgås fra flere adresser, skal du vælge den enkleste og opsætte permanent viderestilling for hver af de øvrige.</p>
<p>Hvis dit websted er tilgængeligt fra både internettet og et internt net (nogen gange kaldet intranet), skal du bruge den offentlige adresse her</p>
<p>Hvis ikke adressen er korrekt, skal du ændre URL\'en i din browser og genstarte installationen.</p>';
$string['pathsunsecuredataroot'] = 'Datamappen er ikke sikret';
$string['pathswrongadmindir'] = 'Adminmappe eksisterer ikke';
$string['phpextension'] = '{$a} PHP-extension';
$string['phpversion'] = 'PHP-version';
$string['phpversionhelp'] = '<p>Moodle kræver mindst PHP version 5.6.5. eller 7.1 (7.0.x har nogle maskinbegrænsninger).</p>
<p>Webserveren bruger i øjeblikket version {$a}</p>
<p>Du bliver nødt til at opgradere PHP eller flytte systemet over på en anden webserver der har en nyere version af PHP!</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Du ser denne side fordi du har installeret og åbnet pakken <strong>{$a->packname} {$a->packversion}</strong> på din computer.
Tillykke med det!';
$string['welcomep30'] = 'Denne version af <strong>{$a->installername}</strong> indeholder programmerne til at oprette et miljø, hvori <strong>Moodle</strong> vil operere, nemlig:';
$string['welcomep40'] = 'Pakken indeholder også <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Brugen af programmerne i denne pakke reguleres af deres respektive licenser. Hele <strong>{$a->installername}</strong>-pakken er <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> og distribueret under <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>-licensen.';
$string['welcomep60'] = 'De følgende sider vil hjælpe dig gennem nogle nemme trin til konfiguration og opsætning af <strong>Moodle</strong> på din computer. Du kan acceptere standardindstillingerne, eller vælge at ændre dem så de bedre svarer til dine egne behov.';
$string['welcomep70'] = 'Klik på "Næste" herunder for at forsætte opsætningen af <strong>Moodle</strong>.';
$string['wwwroot'] = 'Webadresse';
