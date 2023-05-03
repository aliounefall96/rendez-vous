<?php require_once('assets/theme/header.php'); ?>

<div class="row justify-content-center mt-n5">
    <div class="col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Formulaire d'<?php if(isset($d)): ?>edition<?php else: ?>ajout <?php endif; ?> docteur</h4>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <a href="?page=docteur" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php if(isset($d)): ?>
                        <input type="hidden" name="id" value="<?= $d->idDocteur ?>" >
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="">Nom <span class="text-danger">*</span></label>
                        <input type="text" name="nom" value="<?= isset($d)? $d->nom : ''  ?>" required  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Spécialité <span class="text-danger">*</span></label>
                        <input type="text" name="specialite" value="<?= isset($d)? $d->specialite : ''  ?>" required  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Téléphone <span class="text-danger">*</span></label>
                        <input type="tel" name="telephone" value="<?= isset($d)? $d->telephone : ''  ?>" required  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" value="<?= isset($d)? $d->email : ''  ?>" required  class="form-control">
                    </div>
                    <?php if(isset($d)): ?>
                        <button type="submit" name="modifier" class="btn btn-outline-warning">Modifier</button>
                    <?php else: ?>
                        <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('assets/theme/footer.php'); ?>