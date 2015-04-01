<section>
    <h1> Info Chaine</h1>

    <form action="index.php?controller=chaine&action=update&id=<?=$chaineDTO->getChaine_id()?>" method="post">
        <fieldset>
            <legend>Modifier une chaîne</legend>
            <input type="hidden" name="chaine_id" value="<?=$chaineDTO->getChaine_id()?>">
            <input type="text" name="nom_chaine" value="<?=$chaineDTO->getNom_chaine()?>" placeholder="Nom de la chaine"/>
            <input type="text" name="adresse" value="<?=$chaineDTO->getAdresse()?>" placeholder="Adresse"/>
            <input type="text" name="code_postal" value="<?=$chaineDTO->getCode_postal()?>" placeholder="Code postal"/>
            <input type="text" name="ville" value="<?=$chaineDTO->getVille()?>" placeholder="Ville"/>
            <input type="tel" name="telephone" value="<?=$chaineDTO->getTelephone()?>" placeholder="N° de téléphone"/>
            <input type="tel" name="fax" value="<?=$chaineDTO->getFax()?>" placeholder="N° de fax"/>
            <fieldset id="minifs">
                <legend>Chaîne cablée?</legend>
                <label for="cable1">Oui</label>
                <input type="radio" name="chaine_cablee" id="cable1" value="1"
                    <?php if($chaineDTO->getChaine_cablee()==1){ echo("checked");} ?>/>
                <label for="cable2">Non</label>
                <input type="radio" name="chaine_cablee" id="cable2" value="0"
                    <?php if($chaineDTO->getChaine_cablee()==0){ echo("checked");}?>/>
            </fieldset>
            <input type="submit" value="Modifier" />
        </fieldset>
    </form>

</section>