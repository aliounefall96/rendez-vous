<?php require_once('assets/theme/header.php');?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-8">
                <h3 class="m-0 text-success">Liste des docteurs</h3>
            </div>
            <div class="col-md-4 text-md-right">
                <a href="?page=docteur&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Specialité</th>
                        <th>Téléphone</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($docteurs as $doc):?>
                        <tr>
                            <td class="text-info"><?= $doc->nom ?></td>
                            <td>
                                <span class="badge bg-warning"><?= $doc->specialite ?></span>
                            </td>
                            <td><?= $doc->telephone ?></td>
                            <td><?= $doc->email ?></td>
                            <td>
                                <a href="?page=docteur&type=edit&id=<?= $doc->idDocteur ?>" class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="?page=docteur&delete=<?= $doc->idDocteur ?>" onclick="return sure();" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    
                    <?php endforeach ;?>
                    <script>
                        function sure(){
                            return(confirm('Etes-vous sûr de vouloir supprimer ?'));
                        }
                    </script>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once('assets/theme/footer.php');?>
