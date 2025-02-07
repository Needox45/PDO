<?php
class Epreuves
{
    private int $numepr, $ensepr, $matepr, $coefepr, $annepr;
    private string $libepr;
    private ?string $datepr;
    private object $db;

    public function __construct(PDO $db, $data = [])
    {
        $this->db = $db;
        $this->numepr = 0;
        $this->libepr = "";
        $this->ensepr = 0;
        $this->matepr = 0;
        $this->datepr = null;
        $this->coefepr = 0;
        $this->annepr = 0;
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    public function create()
    {
        try {
            $query = "INSERT INTO epreuves (libepr, ensepr, matepr, datepr, coefepr, annepr) VALUES (:libepr, :ensepr, :matepr, :datepr, :coefepr, :annepr)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':libepr', $this->libepr);
            $stmt->bindParam(':ensepr', $this->ensepr, PDO::PARAM_INT);
            $stmt->bindParam(':matepr', $this->matepr, PDO::PARAM_INT);
            $stmt->bindParam(':datepr', $this->datepr);
            $stmt->bindParam(':coefepr', $this->coefepr, PDO::PARAM_INT);
            $stmt->bindParam(':annepr', $this->annepr, PDO::PARAM_INT);
            $stmt->execute();
            echo "Épreuve ajoutée";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function fetch($numepr)
    {
        $query = "SELECT * FROM epreuves WHERE numepr = :numepr";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':numepr', $numepr, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $this->hydrate($result);
        } else {
            echo "Aucune épreuve trouvée avec ce numéro.";
        }
        return $result;
    }

    public static function fetchAll($db)
    {
        $list_elements = [];
        $sql = "SELECT * FROM epreuves";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        if ($stmt) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $current) {
                $list_elements[] = new Epreuves($db, $current);
            }
        }
        return $list_elements;
    }

    function update()
    {
        try {
            $query = "UPDATE epreuves SET libepr = :libepr, ensepr = :ensepr, matepr = :matepr, datepr = :datepr, coefepr = :coefepr, annepr = :annepr WHERE numepr = :numepr";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':numepr', $this->numepr, PDO::PARAM_INT);
            $stmt->bindParam(':libepr', $this->libepr);
            $stmt->bindParam(':ensepr', $this->ensepr, PDO::PARAM_INT);
            $stmt->bindParam(':matepr', $this->matepr, PDO::PARAM_INT);
            $stmt->bindParam(':datepr', $this->datepr);
            $stmt->bindParam(':coefepr', $this->coefepr, PDO::PARAM_INT);
            $stmt->bindParam(':annepr', $this->annepr, PDO::PARAM_INT);
            $stmt->execute();
            echo "Épreuve mise à jour";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function delete()
    {
        try {
            $query = "DELETE FROM epreuves WHERE numepr = :numepr";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':numepr', $this->numepr, PDO::PARAM_INT);
            $stmt->execute();
            echo "Épreuve supprimée";
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
        $this->numepr = filter_var($data['numepr'], FILTER_VALIDATE_INT) ?? 0;
        $this->libepr = filter_var($data['libepr']) ?? '';
        $this->ensepr = filter_var($data['ensepr'], FILTER_VALIDATE_INT) ?? 0;
        $this->matepr = filter_var($data['matepr'], FILTER_VALIDATE_INT) ?? 0;
        $this->datepr = filter_var($data['datepr']) ?? null;
        $this->coefepr = filter_var($data['coefepr'], FILTER_VALIDATE_INT) ?? 0;
        $this->annepr = filter_var($data['annepr'], FILTER_VALIDATE_INT) ?? 0;
    }
}



