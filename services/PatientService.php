<!-- <?php

    require_once APP_ROOT.'/app/models/Patient.php';
    require_once APP_ROOT.'/app/config/config.php';


    class PatientService{

      public function getAllPatients(){
          $patients = [];
          $dbConnection = new DB();

          if ($dbConnection != null){
              $conn = $dbConnection->getConnection();
              if($conn != null){
                  $sql = "SELECT * FROM patients";
                  $stmt = $conn->query($sql);

                  while ($row = $stmt->fetch()){
                      $patient = new Patient($row['id'], $row['name'], $row['gender']);
                      $patients[] = $patient;
                  }

                  return $patients;
              }
          }
      }
      public function createPatient($name, $gender) {
        $dbConnection = new DB();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();
            if ($conn != null) {
                $sql = "INSERT INTO patients (name,gender) VALUES (:name, :gender)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(":name", $name); 
                $stmt->bindParam(":gender", $gender);

                if ($stmt->execute()) {
                    return true;
                } else {
                    return null;
                }
            }
        }
        return null; 
      }

    
      public function updatePatient($id, $name, $gender) {
        $dbConnection = new DB();

        if ($dbConnection != null) {
          $conn = $dbConnection->getConnection();
          if ($conn != null) {
            $sql = "UPDATE patients SET name = :name, gender = :gender WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name); 
            $stmt->bindParam(":gender", $gender); 

            if ($stmt->execute()) {
              return true; 
            } else {
                return false;
            }
          }
        }

        return false; 
      }

      public function deletePatient($id) {
        $dbConnection = new DB();

        if ($dbConnection != null) {
          $conn = $dbConnection->getConnection();
          if ($conn != null) {
            $sql = "DELETE FROM patients WHERE id = :id";
            $id=(int)$id;
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);

            if ($stmt->execute()) {
              return true; 
            } else {
              return false;
            }
          }
        }

        return false; 
      }
  }
?> -->