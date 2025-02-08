<?php
class Etudiants
{

    private int $cpetu, $annetu, $numetu;
    private string $nometu, $prenometu, $adretu, $viletu, $teletu, $datentetu, $remetu, $sexetu, $datnaietu;

    private object $db;


    public function __construct(PDO $db, $data = [])
    {
        $this->db = $db;
        $this->numetu = 0;
        $this->nometu = "Raoul";
        $this->prenometu = "Bidule";
        $this->adretu = "105 rue jean jacque";
        $this->viletu = "saint-etienne";
        $this->cpetu = 93;
        $this->teletu = "0845685247";
        $this->datentetu = "2023-09-23";
        $this->annetu = 2;
        $this->remetu = "remarque";
        $this->sexetu = "M";
        $this->datnaietu = "2002-10-12";
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }


    public function create()
    {
        try {
            $query = "INSERT INTO etudiants (nometu, prenometu, adretu, viletu, cpetu, teletu, datentetu, annetu, remetu, sexetu, datnaietu)
            VALUES (:nometu, :prenometu, :adretu, :viletu, :cpetu, :teletu, :datentetu, :annetu, :remetu, :sexetu, :datnaietu)";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(':nometu', $this->nometu);
            $stmt->bindParam(':prenometu', $this->prenometu);
            $stmt->bindParam(':adretu', $this->adretu);
            $stmt->bindParam(':viletu', $this->viletu);
            $stmt->bindParam(':cpetu', $this->cpetu, PDO::PARAM_INT);
            $stmt->bindParam(':teletu', $this->teletu);
            $stmt->bindParam(':datentetu', $this->datentetu);
            $stmt->bindParam(':annetu', $this->annetu, PDO::PARAM_INT);
            $stmt->bindParam(':remetu', $this->remetu);
            $stmt->bindParam(':sexetu', $this->sexetu);
            $stmt->bindParam(':datnaietu', $this->datnaietu);

            $stmt->execute();

            echo "etudiant ajouté";


        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }



    function fetch($numetu)
    {

        $query = "SELECT * FROM etudiants WHERE numetu = :numetu";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':numetu', $numetu, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $this->hydrate($result);
        } else {
            echo "Aucun étudiant trouvé avec ce numéro.";
        }

        if ($result) {
            $this->hydrate($result);
        } else {
            echo "Aucun étudiant trouvé avec cet ID.";
        }

        return $result;
    }

    public static function fetchAll($db)
    {
        $list_elements = [];

        $sql = "SELECT * FROM etudiants";

        $stmt = $db->prepare($sql);
        $stmt->execute();

        if ($stmt) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $current) {
                $list_elements[] = new Etudiants($db, $current);
            }
        }

        return $list_elements;
    }
    function find($db, $critere)
    {

        $query = "SELECT * FROM etudiants WHERE ";
        $conditions = [];
        $params = [];

        foreach ($critere as $key => $value) {
            $conditions[] = "$key = :$key";
            $params[":$key"] = $value;
        }

        $query .= implode(' AND ', $conditions);
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $current) {
            $list_elements[] = new Etudiants($db, $current);
        }
        return $list_elements;


    }





    function update()
    {
        try {
            $query = "UPDATE etudiants SET nometu = :nometu, prenometu = :prenometu, adretu = :adretu, viletu = :viletu, cpetu = :cpetu, teletu = :teletu, datentetu = :datentetu, annetu = :annetu, remetu = :remetu, sexetu = :sexetu, datnaietu = :datnaietu WHERE numetu = :numetu";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(':numetu', $this->numetu, PDO::PARAM_INT);
            $stmt->bindParam(':nometu', $this->nometu);
            $stmt->bindParam(':prenometu', $this->prenometu);
            $stmt->bindParam(':adretu', $this->adretu);
            $stmt->bindParam(':viletu', $this->viletu);
            $stmt->bindParam(':cpetu', $this->cpetu, PDO::PARAM_INT);
            $stmt->bindParam(':teletu', $this->teletu);
            $stmt->bindParam(':datentetu', $this->datentetu);
            $stmt->bindParam(':annetu', $this->annetu, PDO::PARAM_INT);
            $stmt->bindParam(':remetu', $this->remetu);
            $stmt->bindParam(':sexetu', $this->sexetu);
            $stmt->bindParam(':datnaietu', $this->datnaietu);

            $stmt->execute();

            echo "Étudiant mis à jour";

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function delete()
    {
        try {
            $query = "DELETE FROM etudiants WHERE numetu = :numetu";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':numetu', $this->numetu, PDO::PARAM_INT);
            $stmt->execute();

            echo "Étudiant supprimé";

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }



    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }


    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }



    public function hydrate(array $data)
    {
        $this->numetu = filter_var($data['numetu'], FILTER_VALIDATE_INT) ?? 0;
        $this->nometu = filter_var($data['nometu']) ?? '';
        $this->prenometu = filter_var($data['prenometu']) ?? '';
        $this->adretu = filter_var($data['adretu']) ?? '';
        $this->viletu = filter_var($data['viletu']) ?? '';
        $this->cpetu = filter_var($data['cpetu'], FILTER_VALIDATE_INT) ?? 0;
        $this->teletu = filter_var($data['teletu']) ?? '';
        $this->datentetu = filter_var($data['datentetu']) ?? '';
        $this->annetu = filter_var($data['annetu'], FILTER_VALIDATE_INT) ?? 0;
        $this->remetu = filter_var($data['remetu']) ?? '';
        $this->sexetu = filter_var($data['sexetu']) ?? '';
        $this->datnaietu = filter_var($data['datnaietu']) ?? '';
    }



    public function getClassementModules() {
        $query = "SELECT modules.nommod AS nom_module, RANK() OVER (ORDER BY AVG(avoir_note.note) DESC) AS rang
                  FROM avoir_note
                  JOIN epreuves ON avoir_note.numepr = epreuves.numepr
                  JOIN matieres ON epreuves.matepr = matieres.nummat
                  JOIN modules ON matieres.nummod = modules.nummod
                  WHERE avoir_note.numetu = :numetu
                  GROUP BY modules.nummod";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':numetu', $this->numetu, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getClassementParAnnee($annee) {
        $query = "SELECT etudiants.nometu AS nom_etudiant, RANK() OVER (ORDER BY AVG(avoir_note.note) DESC) AS rang
                  FROM avoir_note
                  JOIN etudiants ON avoir_note.numetu = etudiants.numetu
                  JOIN epreuves ON avoir_note.numepr = epreuves.numepr
                  JOIN matieres ON epreuves.matepr = matieres.nummat
                  JOIN modules ON matieres.nummod = modules.nummod
                  WHERE etudiants.annetu = :annetu
                  GROUP BY etudiants.numetu";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':annetu', $annee, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}



