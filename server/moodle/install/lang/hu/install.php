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

$string['admindirname'] = 'Rendszergazda-könyvtár';
$string['availablelangs'] = 'Elérhető nyelvek listája';
$string['chooselanguagehead'] = 'Nyelv kiválasztása';
$string['chooselanguagesub'] = 'Válasszon nyelvet a telepítéshez! Ez lesz a portál alapbeállítás szerinti nyelve, de később módosíthatja.';
$string['clialreadyconfigured'] = 'A config.php már létezik, a portál telepítéséhez használja az admin/cli/install_database.php állományt.';
$string['clialreadyinstalled'] = 'A config.php már létezik, a portál frissítéséhez használja az admin/cli/upgrade.php állományt.';
$string['cliinstallheader'] = 'A Moodle {$a} parancssori telepítő programja';
$string['databasehost'] = 'Az adatbázis gazdagépe';
$string['databasename'] = 'Az adatbázis neve';
$string['databasetypehead'] = 'Adatbázismotor kiválasztása';
$string['dataroot'] = 'Adatkönyvtár';
$string['datarootpermission'] = 'Engedély adatkönyvtárakhoz';
$string['dbprefix'] = 'Táblázat előtagja';
$string['dirroot'] = 'Moodle-könyvtár';
$string['environmenthead'] = 'Környezetének ellenőrzése ...';
$string['environmentsub2'] = 'Minden Moodle-változat valamilyen minimális verziójú PHP és szükséges számú PHP-bővítmény használatát írja elő. A telepítések és frissítések előtt teljes környezet-ellenőrzésre kerül sor. Ha nem tudja, hogyan kell egy új verziót telepíteni és a PHP-bővítményeket bekapcsolni, forduljon a rendszergazdához.';
$string['errorsinenvironment'] = 'A környezet ellenőrzése nem sikerült!';
$string['installation'] = 'Telepítés';
$string['langdownloaderror'] = 'A(z) "{$a}" nyelvet nem lehet letölteni. A telepítés angolul folytatódik.
';
$string['memorylimithelp'] = '<p>Szerverén a PHP memóriakorlátja jelenleg {$a}. </p><p>Ez a Moodle számára a későbbiekben gondot okozhat, különösen akkor, ha sok modulja és/vagy sok felhasználója van bekapcsolva.</p><p> Ha lehet, állítsa be a PHP-t magasabb korláttal, pl. 40M-tal. Többféleképpen próbálkozhat:</p><ol><li> Ha lehet, fordítsa újra a PHP-t <i>--enable-memory-limit</i>-tel. Így a Moodle maga állíthatja be a memóriakorlátot.</li><li>Ha elérhető a php.ini állomány, módosítsa a <b>memory_limit</b> beállítását pl. 40M-ra. Ha nem éri el az állományt, kérje meg a rendszergazdát a módosítás elvégzésére.</li><li>Egyes PHP-szervereken létrehozhat egy .htaccess állományt a Moodle-könyvtárban az alábbi sorral: <blockquote><div>php_value memory_limit 40M.</div></blockquote>    <p> Vannak szerverek, ahol ez az összes PHP-oldal működését megakadályozza (az oldalak hibát jeleznek), ezért el kell távolítania a .htaccess állományt.</p></li></ol>';
$string['paths'] = 'Útvonalak';
$string['pathserrcreatedataroot'] = 'A telepítő nem tudja létrehozni az adatkönyvtárat ({$a->dataroot}).';
$string['pathshead'] = 'Útvonalak megerősítése';
$string['pathsrodataroot'] = 'Az adatok gyökérkönyvtára nem írható.';
$string['pathsroparentdataroot'] = 'A felettes könyvtár ({$a->parent}) nem írható. A telepítő nem tudja létrehozni az adatkönyvtárat ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Egy pár webes gazdagép esetén az /admin speciális URL pl. a vezérlőpanel eléréséhez. Ez ütközik a Moodle admin oldalainak standard helyével. Javítás: a telepítésben nevezze át a rendszergazda könyvtárát, az új nevet pedig írja be ide. Például: <em>moodleadmin</em>. Ezzel helyrehozhatók a Moodle rendszergazdai ugrópontjai.';
$string['pathssubdataroot'] = 'Szüksége van egy helyre, ahol a Moodle mentheti a feltöltött állományokat. Ez a könyvtár a webszerver felhasználója (általában \'nobody\' vagy \'apache\') számára legyen mind olvasható, MIND ÍRHATÓ. Ha nem létezik, a telepítő megpróbálja létrehozni.';
$string['pathssubdirroot'] = 'Teljes útvonal a Moodle telepítéséhez. ';
$string['pathssubwwwroot'] = 'A Moodle elérésére használandó teljes webcím. A Moodle egyszerre több címről nem érhető el. Ha portálja több címet használ, a jelen cím kivételével az összeshez állandó
átirányítást kell beállítania. Ha portálja mind intranetről, mind az internetről elérhető, a nyilvános címet itt adja meg, a DNS-t pedig úgy állítsa be, hogy az intranetről a nyilvános cím is elérhető legyen. Ha a cím hibás, módosítsa böngészőjében a webcímet, hogy a telepítés egy másik értékkel induljon újra.';
$string['pathsunsecuredataroot'] = 'Az adatok gyökérkönyvtára nem biztonságos.';
$string['pathswrongadmindir'] = 'Nem létezik az admin könyvtár.';
$string['phpextension'] = '{$a} PHP-bővítmény';
$string['phpversion'] = 'PHP-verzió';
$string['phpversionhelp'] = 'A Moodle használatához legalább a PHP 5.6.5 vagy 7.1 verziója szükséges
 (a 7.0.x bizonyos korlátokkal rendelkezik).</p>
<p> Az Ön által használt
verzió {$a}. </p>
<p>Frissítse a PHP-verziót, vagy térjen át újabb PHP-verziót
működtető gazdagépre!</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Azért látja ezt az oldalt, mert sikeresen telepítette és futtatja a(z) {$a->packname} {$a->packversion} csomagot számítógépén. Gratulálunk!';
$string['welcomep30'] = 'A(z) {$a->installername} tartalmazza azokat az alkalmazásokat, amelyekkel a Moodle számára kialakítható a működési környezet, azaz:';
$string['welcomep40'] = 'A csomag tartalmazza a Moodle {$a->moodlerelease} ({$a->moodleversion})-t is.';
$string['welcomep50'] = 'A csomagban lévő alkalmazások használatára a vonatkozó engedélyek érvényesek. A teljes {$a->installername} csomag <a href="http://www.opensource.org/docs/definition_plain.html">nyílt forráskódú</a>, közreadása pedig a <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>-licenc alapján történik.';
$string['welcomep60'] = 'A következő oldalak segítségével számítógépén egyszerűen telepítheti és állíthatja be a <strong>Moodle</strong>-t. Elfogadhatja az alapbeállításokat, de igényeinek megfelelően módosíthatja is őket.';
$string['welcomep70'] = 'Kattintson az alábbi "Következő" gombra és folytassa a Moodle telepítését.';
$string['wwwroot'] = 'Webcím';
