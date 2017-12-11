<!-- Modal -->
<div class="modal fade" id="modalAjout" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ajout salarié</h4>
            </div>
            <form method="post" action="traiter_connexion.php">
                <div class="form-group col-sm-10 col-sm-offset-1" id="divMail">
                    <input type="text" class="form-control" id="inputNom" name="inputNom" placeholder="Nom">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="text" class="form-control" id="inputPrenom" name="inputPrenom" placeholder="Prénom">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="tel" class="form-control" id="inputTel" name="inputTel" placeholder="Téléphone">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="text" class="form-control" id="inputAdresse" name="inputAdresse" placeholder="Adresse">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="text" class="form-control" id="inputVille" name="inputVille" placeholder="Ville">
                </div>
                <div class="form-group col-sm-10 col-sm-offset-1">
                    <input type="number" class="form-control" id="inputCodePostal" name="inputCodePostal" placeholder="Code Postal">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-default center-block" value="Connexion" id="inputConnexion"/>
                </div>
            </form>
        </div>

    </div>
</div>
