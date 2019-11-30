<?php
class Work 
{
    public function add($work_name,  $starting_date, $ending_date, $status)
    {
        $sql = "INSERT INTO works (work_name, starting_date, ending_date, status) VALUES (:work_name, :starting_date, :ending_date, :status)";
        $req = Database::getDatabase()->prepare($sql);
        return $req->execute([
            'work_name' => $work_name,
            'starting_date' => $starting_date,
            'ending_date' => $ending_date,
			'status' => $status
        ]);
    }
    public function getWorkById($work_id)
    {
        $sql = "SELECT * FROM works WHERE work_id =" . $work_id;
        $req = Database::getDatabase()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }
    public function showAllWorks()
    {
        $sql = "SELECT * FROM works";
        $req = Database::getDatabase()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    public function edit($work_id, $work_name,  $starting_date, $ending_date, $status)
    {
        $sql = "UPDATE works SET work_name = :work_name, starting_date = :starting_date , ending_date = :ending_date, status = :status WHERE work_id = :work_id";
        $req = Database::getDatabase()->prepare($sql);
        return $req->execute([
            'work_id' => $work_id,
            'work_name' => $work_name,
            'starting_date' => $starting_date,
            'ending_date' => $ending_date,
			'status' => $status
        ]);
    }
    public function delete($work_id)
    {
        $sql = 'DELETE FROM works WHERE work_id = ?';
        $req = Database::getDatabase()->prepare($sql);
        return $req->execute([$work_id]);
    }
}
?>