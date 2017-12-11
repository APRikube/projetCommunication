<!-- Modal -->
<div class="modal fade" id="modalAjout" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Demande de congés</h4>
            </div>
            <form method="post" action="traiter_connexion.php">
                <div class="form-group col-sm-10 col-sm-offset-1" id="divMail">
                    <input type="text" class="form-control" id="inputNom" name="inputNom" placeholder="Nom">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="date" class="form-control" onchange="calculjoursconges()" id="date_debut_conges" name="date_debut_conges" placeholder="date_debut">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="date" class="form-control" onchange="calculjoursconges()" id="date_fin_conges" name="date_fin_conges" placeholder="date_fin">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="text" class="form-control" id="nb_jours_conges" name="nb_jours_conges" placeholder="Nombre Jours de congés" disabled>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-default center-block" value="Connexion" id="inputConnexion"/>
                </div>
            </form>
        </div>

    </div>
</div>
<script>
    function dateDiff(date1, date2){
        var diff = {}                           // Initialisation du retour
        var tmp = date2 - date1;

        tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
        diff.sec = tmp % 60;                    // Extraction du nombre de secondes

        tmp = Math.floor((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
        diff.min = tmp % 60;                    // Extraction du nombre de minutes

        tmp = Math.floor((tmp-diff.min)/60);    // Nombre d'heures (entières)
        diff.hour = tmp % 24;                   // Extraction du nombre d'heures

        tmp = Math.floor((tmp-diff.hour)/24);   // Nombre de jours restants
        diff.day = tmp;

        return diff;
    }
    function calculjoursconges(){
        if(document.getElementById("date_debut_conges").value != '' && document.getElementById("date_fin_conges").value != '')
        {
            var diff = dateDiff(new Date(document.getElementById("date_debut_conges").value),
                new Date(document.getElementById("date_fin_conges").value));
            document.getElementById("nb_jours_conges").value = diff.day;
        }
        if(document.getElementById("date_debut_conges").value != '' && document.getElementById("date_fin_conges").value == '')
        {
            document.getElementById("date_fin_conges").min = document.getElementById("date_debut_conges").value;
        }

    }
</script>
