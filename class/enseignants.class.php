<?php
class Enseignants
{
    private int $numens, $cpens;
    private string $nomens, $preens, $foncens, $adrens, $vilens, $telens, $datnaiens, $datembens;

    private object $db;

    public function __construct(PDO $db, $data = [])
    {
        $this->db = $db;
        $this->numens = 0;
        $this->nomens = "Dupont";
        $this->preens = "Jean";
        $this->foncens = "AGREGE";
        $this->adrens = "10 rue de la Paix";
        $this->vilens = "Paris";
        $this->cpens = 75000;
        $this->telens = "0123456789";
        $this->datnaiens = "1980-01-01";
        $this->datembens = "2010-09-01";
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    public function create()
    {
        try {
            $query = "INSERT INTO enseignants (nomens, preens, foncens, adrens, vilens, cpens, telens, datnaiens, datembens)
            VALUES (:nomens, :preens, :foncens, :adrens, :vilens, :cpens, :telens, :datnaiens, :datembens)";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(':nomens', $this->nomens);
            $stmt->bindParam(':preens', $this->preens);
            $stmt->bindParam(':foncens', $this->foncens);
            $stmt->bindParam(':adrens', $this->adrens);
            $stmt->bindParam(':vilens', $this->vilens);
            $stmt->bindParam(':cpens', $this->cpens, PDO::PARAM_INT);
            $stmt->bindParam(':telens', $this->telens);
            $stmt->bindParam(':datnaiens', $this->datnaiens);
            $stmt->bindParam(':datembens', $this->datembens);

            $stmt->execute();

            echo "Enseignant ajouté";

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function fetch($numens)
    {
        $query = "SELECT * FROM enseignants WHERE numens = :numens";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':numens', $numens, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $this->hydrate($result);
        } else {
            echo "Aucun enseignant trouvé avec ce numéro.";
        }

        return $result;
    }

    public static function fetchAll($db)
    {
        $list_elements = [];

        $sql = "SELECT * FROM enseignants";

        $stmt = $db->prepare($sql);
        $stmt->execute();

        if ($stmt) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $current) {
                $list_elements[] = new Enseignants($db, $current);
            }
        }

        return $list_elements;
    }

    function find($db, $critere)
    {
        $query = "SELECT * FROM enseignants WHERE ";
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
            $list_elements[] = new Enseignants($db, $current);
        }
        return $list_elements;
    }

    function update()
    {
        try {
            $query = "UPDATE enseignants SET nomens = :nomens, preens = :preens, foncens = :foncens, adrens = :adrens, vilens = :vilens, cpens = :cpens, telens = :telens, datnaiens = :datnaiens, datembens = :datembens WHERE numens = :numens";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(':numens', $this->numens, PDO::PARAM_INT);
            $stmt->bindParam(':nomens', $this->nomens);
            $stmt->bindParam(':preens', $this->preens);
            $stmt->bindParam(':foncens', $this->foncens);
            $stmt->bindParam(':adrens', $this->adrens);
            $stmt->bindParam(':vilens', $this->vilens);
            $stmt->bindParam(':cpens', $this->cpens, PDO::PARAM_INT);
            $stmt->bindParam(':telens', $this->telens);
            $stmt->bindParam(':datnaiens', $this->datnaiens);
            $stmt->bindParam(':datembens', $this->datembens);

            $stmt->execute();

            echo "Enseignant mis à jour";

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    function delete()
    {
        try {
            $query = "DELETE FROM enseignants WHERE numens = :numens";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':numens', $this->numens, PDO::PARAM_INT);
            $stmt->execute();

            echo "Enseignant supprimé";

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
        $this->numens = filter_var($data['numens'], FILTER_VALIDATE_INT) ?? 0;
        $this->nomens = filter_var($data['nomens']) ?? '';
        $this->preens = filter_var($data['preens']) ?? '';
        $this->foncens = filter_var($data['foncens']) ?? '';
        $this->adrens = filter_var($data['adrens']) ?? '';
        $this->vilens = filter_var($data['vilens']) ?? '';
        $this->cpens = filter_var($data['cpens'], FILTER_VALIDATE_INT) ?? 0;
        $this->telens = filter_var($data['telens']) ?? '';
        $this->datnaiens = filter_var($data['datnaiens']) ?? '';
        $this->datembens = filter_var($data['datembens']) ?? '';
    }
}



