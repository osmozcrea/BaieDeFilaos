/**
 * Created by NOYAF-PC on 11/08/2017.
 */
/*DataTable Init*/

"use strict";

$(document).ready(function() {
    "use strict";

    $('#datable_listeClients').DataTable({
        "ajax": '../ajax/data/arrays.txt'
    });
} );