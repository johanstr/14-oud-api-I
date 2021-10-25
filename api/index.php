<?php

/* API
 * --------------------------------------------------------------------
 * API om valuta data op te vragen met aanvullende functionaliteit
 *
 * SYNTAX:
 * http://<api domein>/index.php?cmd=all        
 *      Geeft alle data terug
 * http://<api domein>/index.php?cmd=one&abbr=<valuta code>
 *      Geeft data terug van een munteenheid
 * http://<api domein>/index.php?cmd=calc&from=<valuta code>&to=<valuta code>&amount=<aantal>
 *      Rekent de waarde van een valuta om naar de waarde van een andere valuta
 * 
 * Alle verzoeken komen via een GET-request binnen in onze API
 */

