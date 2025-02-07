<?php
class Matieres
{
    private int $nummat, $nummod, $coefmat;
    private string $nommat;
    private object $db;

    public function __construct(PDO $db, $data = [])
    {
        $this->db = $db;
        $this->nummat = 0;
        $this->nommat = "";
        $this->nummod = 0;
        $this->coefmat = 0;
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    public function create()
    {
        try {
            $query = "INSERT INTO matieres (nommat, nummod, coefmat) VALUES (:nommat, :nummod, :coefmat)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nommat', $this->nommat);
            $stmt->bindParam(':nummod', $this->nummod, PDO::PARAM_INT);
            $stmt->bindParam(':coefmat', $this->coefmat, PDO::PARAM_INT);
            $stmt->execute();
            echo "Matière ajoutée";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function fetch($nummat)
    {
        $query = "SELECT * FROM matieres WHERE nummat = :nummat";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nummat', $nummat, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $this->hydrate($result);
        } else {
            echo "Aucune matière trouvée avec ce numéro.";
        }
        return $result;
    }

    public static function fetchAll($db)
    {
        $list_elements = [];
        $sql = "SELECT * FROM matieres";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        if ($stmt) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $current) {
                $list_elements[] = new Matieres($db, $current);
            }
        }
        return $list_elements;
    }

    function update()
    {
        try {
            $query = "UPDATE matieres SET nommat = :nommat, nummod = :nummod, coefmat = :coefmat WHERE nummat = :nummat";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nummat', $this->nummat, PDO::PARAM_INT);
            $stmt->bindParam(':nommat', $this->nommat);
            $stmt->bindParam(':nummod', $this->nummod, PDO::PARAM_INT);
            $stmt->bindParam(':coefmat', $this->coefmat, PDO::PARAM_INT);
            $stmt->execute();
            echo "Matière mise à jour";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function delete()
    {
        try {
            $query = "DELETE FROM matieres WHERE nummat = :nummat";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':nummat', $this->nummat, PDO::PARAM_INT);
            $stmt->execute();
            echo "Matière supprimée";
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
        $this->nummat = filter_var($data['nummat'], FILTER_VALIDATE_INT) ?? 0;
        $this->nommat = filter_var($data['nommat']) ?? '';
        $this->nummod = filter_var($data['nummod'], FILTER_VALIDATE_INT) ?? 0;
        $this->coefmat = filter_var($data['coefmat'], FILTER_VALIDATE_INT) ?? 0;
    }
}



