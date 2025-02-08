<?php
class Modules
{
    private int $nummod, $coefmod;
    private string $nommod;
    private object $db;

    public function __construct(PDO $db, $data = [])
    {
        $this->db = $db;
        $this->nummod = 0;
        $this->nommod = "";
        $this->coefmod = 0;
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    public function create()
    {
        try {
            $query = "INSERT INTO modules (nommod, coefmod) VALUES (:nommod, :coefmod)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nommod', $this->nommod);
            $stmt->bindParam(':coefmod', $this->coefmod, PDO::PARAM_INT);
            $stmt->execute();
            echo "Module ajouté";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function fetch($nummod)
    {
        $query = "SELECT * FROM modules WHERE nummod = :nummod";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nummod', $nummod, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $this->hydrate($result);
            return true;
        } else {
            echo "Aucun module trouvé avec ce numéro.";
            return false;
        }
    }

    public static function fetchAll($db)
    {
        $list_elements = [];
        $sql = "SELECT * FROM modules";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        if ($stmt) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $current) {
                $list_elements[] = new Modules($db, $current);
            }
        }
        return $list_elements;
    }

    function update()
    {
        try {
            $query = "UPDATE modules SET nommod = :nommod, coefmod = :coefmod WHERE nummod = :nummod";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nummod', $this->nummod, PDO::PARAM_INT);
            $stmt->bindParam(':nommod', $this->nommod);
            $stmt->bindParam(':coefmod', $this->coefmod, PDO::PARAM_INT);
            $stmt->execute();
            echo "Module mis à jour";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function delete()
    {
        try {
            $query = "DELETE FROM modules WHERE nummod = :nummod";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nummod', $this->nummod, PDO::PARAM_INT);
            $stmt->execute();
            echo "Module supprimé";
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
        $this->nummod = filter_var($data['nummod'], FILTER_VALIDATE_INT) ?? 0;
        $this->nommod = filter_var($data['nommod']) ?? '';
        $this->coefmod = filter_var($data['coefmod'], FILTER_VALIDATE_INT) ?? 0;
    }

    public function getClassementEtudiants()
    {
        $query = "SELECT etudiants.nometu AS nom_etudiant, RANK() OVER (ORDER BY AVG(avoir_note.note) DESC) AS rang
                  FROM avoir_note
                  JOIN etudiants ON avoir_note.numetu = etudiants.numetu
                  JOIN epreuves ON avoir_note.numepr = epreuves.numepr
                  JOIN matieres ON epreuves.matepr = matieres.nummat
                  WHERE matieres.nummod = :nummod
                  GROUP BY etudiants.numetu";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nummod', $this->nummod, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMatieres()
    {
        $query = "SELECT * FROM matieres WHERE nummod = :nummod";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nummod', $this->nummod, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Matieres');
    }
}