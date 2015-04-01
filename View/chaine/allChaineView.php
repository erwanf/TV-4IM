<section>
    <table class="table">
        <thead>
            <tr>
                <td>Nom Chaine</td>
                <td>Adresse</td>
                <td>Code Postal</td>
                <td>Ville</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($chaines as $chaineDTO){?>
            <tr>
                <td><?= ucfirst($chaineDTO->getNom_chaine());?></td>
                <td><?= $chaineDTO->getAdresse();?></td>
                <td><?= $chaineDTO->getCode_postal();?></td>
                <td><?= $chaineDTO->getVille();?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</section>

<section class="form-insert">
    <form method="post" action="index.php?controller=chaine&action=insert" class="form-inline">
        <fieldset>
            <legend>Nouvelle Chaine</legend>
            <input type="text" name="nom_chaine" placeholder="Nom de chaine" required="required">
            <input type="text" name="adresse" placeholder="Adresse">
            <input type="text" name="code_postal" placeholder="Code postal">
            <input type="text" name="ville" placeholder="Ville">
            <input type="number" name="telephone" placeholder="N° de tel">
            <input type="number" name="fax" placeholder="N° de fax">
            <fieldset>
                <legend>Chaine cablée ?</legend>
                <label for="cable1">Oui</label>
                <input type="radio" name="chaine_cablee" id="cable1" value="1" checked="checked">
                <label for="cable2">Non</label>
                <input type="radio" name="chaine_cablee" id="cable2" value="0">
            </fieldset>
            <input type="submit" value="Soumettre" class="btn">
        </fieldset>
    </form>
</section>