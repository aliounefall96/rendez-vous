<?php require_once('partials/header.php'); ?>
<!-- image d'accueil -->
<section class="img-accueil" id="accueil">
    <img src="assets/image/doctor.jpg" alt="Equipe docteur" style="width: 100%; height: 600px;">
</section>

<!-- a prpopos -->
<div class="justify-content-center" id="a-propos">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="ml-5">
                <h1 class="titre">A Propos de Nous</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, repellat, 
                    vel soluta rem suscipit minima vitae nulla quas veniam a odio quos perferendis ut fugiat eligendi!
                    Ea quo assumenda doloribus quia, harum perspiciatis repellat, soluta fugit error reiciendis ipsum incidunt,
                    quisquam adipisci corporis sunt ab nihil quasi necessitatibus! Perferendis, a distinctio expedita, 
                    at excepturi dolor assumenda laborum ratione blanditiis obcaecati voluptate, explicabo repudiandae? 
                    Architecto nemo, ipsum eius voluptatum temporibus explicabo quia ab exercitationem perspiciatis veritatis
                    possimus quasi laboriosam veniam dolores. Sapiente sed voluptatem vitae sunt veniam voluptas tempora 
                    dolor amet obcaecati vel alias, odit aliquid aliquam pariatur tenetur optio nam, labore odio nisi. 
                    Culpa temporibus accusamus repellendus illo at! Provident quos, nostrum cumque nobis animi optio 
                    numquam possimus ex itaque ab, quisquam facilis.        
                </p>
            </div>
        </div>
        <div class="col-md-6 m-auto d-flex justify-content-center h-100">
            <div class="experience  align-self-center">
                <p class="text-center pt-4 mt-3">
                    <span>12</span> ans <br>
                    d'Expérience 
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Recherche -->
<section class="mt-5 mr-4 ml-5 justify-content-center" id="recherche">
    <div class="mt-4 mr-5 ml-5">
        <h3 class="text-center titre" style="font-size: 48px;">Rechercher l'historique des rendez-vous par numéro <br> de téléphone portable</h3>
    </div>
    <div class="mr-3 ml-5 mt-5">
        <form class="form-inline">
            <input class="form-control mr-sm-2 mr-1" style="width: 80%;" type="search" placeholder="L'historique des rendez-vous par numéro de téléphone" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0 ml-4" type="submit">Rechercher</button>
        </form>
    </div>
</section>

<section class="mt-5 pl-5 pr-5 mb-5 justify-content-center" id="galerie">
    <h3 style="font-size: 48px;" class="titre">Nos Galeries</h3>
    <div class="row pr-3 mt-3">
        <div class="col-md-6 mb-2">
            <img src="assets/image/doctor1.jpg" class="g-img" alt="Galerie Hopital">
        </div>
        <div class="col-md-6 mb-2">
            <img src="assets/image/doctor2.jpg" class="g-img" alt="Galerie Hopital">
        </div>
    </div>
    <div class="row pr-3 mt-4 mb-5">
        <div class="col-md-6 mb-2">
            <img src="assets/image/doctor3.jpg" class="g-img" alt="Galerie Hopital">
        </div>
        <div class="col-md-6 mb-2">
            <img src="assets/image/doctor4.jpg" class="g-img" alt="Galerie Hopital">
        </div>
    </div>
</section>

<!-- formulaire de reservation -->
<section class="mt-5 pl-5 pr-5 mb-5" id="reservations">
    <h3 style="font-size: 48px;" class="titre text-center">Formulaire de reservation</h3>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nom Complet <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nomComplet" placeholder="Entrer votre nom complet">
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Entrer votre adresse mail">
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">N° Téléphone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="telephone" placeholder="Entrer votre numéro de téléphone">
                    </div> 
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Date de naissance <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="dateNaiss" >
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Heure <span class="text-danger">*</span></label>
                        <input type="time" class="form-control" name="heure" >
                    </div> 
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Docteur <span class="text-danger">*</span></label>
                        <select name="idDocteur" id="" class="form-control">
                            <option value="">Selectionner un docteur </option>
                            <?php foreach ($docteurs as $doc):?>
                                <option value="<?=$doc->idDocteur?>"><?= $doc->nom ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div> 
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Symptome <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="symptome" id="" cols="30" rows="3" placeholder="Information supplémentaire"></textarea>
                    </div> 
                </div>
                <div class="col">
                    <button type="submit" name="ajouter" class="btn btn-outline-success">Valider</button>
                </div>
            </div>
        </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</section>

<!-- contact -->
<section class="mt-5 contact pt-5 pb-5 ml-auto" id="contact">
    <div class="row">
        <div class="col-md-4">
            <div class="text-center">
                <h3 style="font-size: 48px;" class="titre">Ouverture</h3>
                <p class="p1">7j/7 <br> 24H/24 </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <h3 style="font-size: 48px;" class="titre">Contact</h3>
                <p class="p2">Email: sunuhopital@gmail.com <br>  Tel : +221 77 874 87 78</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <h3 style="font-size: 48px;" class="titre">Adresse</h3>
                <p class="p2">PA.U17 <br> EN FACE <br> TERMINUS 227 </p>
            </div>
        </div>
    </div>
</section>

<a href="#accueil" class="haut">Haut</a>

<footer class="pt-4 pb-4 pied">
    <div class="ml-5 mr-5 mt-n2">
        <span class="float-left">Tout droit réservé. © 2020 Sunu Hopital. </span>   
        <span class="float-right">Conçu avec coeur par <span class="text-warning">Fall Codeur</span> </span>   
    </div>
</footer>

<?php require_once('partials/footer.php'); ?>