<?php 

Class TripReport {

    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    /**
     * Submit a new trip report
     *
     * @param string $title
     * @param string $report
     * @param string $author
     * @param string|null $email
     * @param integer|null $weight
     * @param integer|null $year
     * @param integer|null $age
     * @return array|false
     */
    public function create(string $title, string $report, string $author, string $email = null, int $weight = null, int $year = null, int $age = null):array|false {
        return $this->database->queryWithParams('INSERT INTO tripreports ')
    }

    /**
     * Move a tripreport from tripreports_rev to tripreports table
     *
     * @param integer $id
     * @return void
     */
    public function approve(int $id) {
        return $this->database->queryWithParams('INSERT INTO tripreports SELECT * FROM tripreports_rev WHERE id = :id; DELETE tr FROM tripreports_rev tr JOIN tripreports t', ["id" => $id]);
    }



}