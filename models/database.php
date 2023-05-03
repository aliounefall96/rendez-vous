<?php 
    // connexion avec la base de données
    try {
        $db = new PDO("mysql:dbname=reservation;host=localhost", "root" , "");
    } catch (PDOException $e) {
        die("erreur :". $e->getMessage());
    }

    function connexion($email, $password){
        global $db;
        try {
            $rq = $db->prepare(" SELECT * FROM docteur WHERE email = :email AND password= :password");

            $rq->execute([
                "email" => $email,
                "password" => $password,
            ]);
            return $rq->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("erreur :". $e->getMessage());
        }
    }

    //rv par statut et par docteur
    function getRvByStatut($statut){
        global $db;
        try {
            $rq = $db->prepare("SELECT *  FROM rv WHERE idDocteur=:id AND statut=:statut");
        } catch (PDOException $e) {
            die("erreur :". $e->getMessage());
        }
    }

    // ajout reservation
    function addRv($nom, $email, $tel, $dateNaiss, $heure, $idDoc, $symptome, $statut ){
        global $db;
        try {
            $rq = $db->prepare("INSERT INTO rv VALUES (null ,:nom, :email, :tel, :dateNaiss, :heure, :idDoc, :symptome, :statut)");
            return $rq->execute([
                "nom" => $nom,
                "email" => $email,
                "tel" => $tel,
                "dateNaiss" => $dateNaiss,
                "heure" => $heure,
                "idDoc" => $idDoc,
                "symptome" => $symptome,
                "statut" => $statut
            ]);
        } catch (PDOException $e) {
            die("erreur :". $e->getMessage());
        }
    }

    function deleteDocteur($id){
        global $db;
        try {
            $rq = $db->prepare("DELETE FROM docteur WHERE idDocteur =:id");
            return $rq->execute([
                'id' => $id
            ]);
        } catch (PDOException $e) {
            die("erreur :". $e->getMessage());
        }
    }

    function editDocteur($id, $nom, $specialite, $telephone, $email){
        global $db;
        try {
            $rq = $db->prepare("UPDATE docteur SET nom = :nom, specialite =:specialite, telephone =:telephone,
            email =:email
            WHERE idDocteur = :id");
            return $rq->execute([
                "nom" => $nom,
                "specialite" => $specialite,
                "telephone" => $telephone,
                "email" => $email,
                "id" => $id
            ]);
        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }

    function getDocteurById($id){
        global $db;
        try {
            $rq = $db->prepare("SELECT * FROM docteur WHERE idDocteur = :id");
            $rq->execute([
                "id" => $id]);

            return $rq->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }

    function getAllDocteur(){
        global $db;
        try {
            $rq = $db->prepare("SELECT * FROM docteur ORDER BY idDocteur DESC");
            $rq->execute();

            return $rq->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("erreur :". $e->getMessage());
        }
    }

    function addDocteur($nom, $specialite, $telephone, $email, $password){
        global $db;
        try {
            $rq = $db->prepare("INSERT INTO docteur (nom, specialite, telephone, email, password) VALUES (:nom, :specialite, :tel, :email, :password)");
            return $rq->execute([
                "nom" => $nom,
                "specialite" => $specialite,
                "tel" => $telephone,
                "email" => $email,
                "password" => $password,
            ]);
        } catch (PDOException $e) {
            die("erreur :". $e->getMessage());
        }
    }
?>