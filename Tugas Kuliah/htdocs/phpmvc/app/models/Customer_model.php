<?php
class Customer_model
{
    private $table = 'customer';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllCustomer()
    {
        $this->db->query('SELECT * FROM' . $this->table);
        return $this->db->resultSet();
    }
    public function getCustomerById($id)
    {
        $this->db->query('SELECT * FROM' . $this->table . 'WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
//     private $dbh; // database  handler
//     private $stmt;

//     public function __construct()
//     {
//         //data source name
//         $dsn = 'mysql:host=localhost;dbname=sd_it wash';
//         try {
//             $this->dbh = new PDO($dsn, 'root', '');
//         } catch (PDOException $e) {
//             die($e->getMessage());
//         }
//     }
//     public function getAllCustomer()
//     {
//         $this->stmt = $this->dbh->prepare('SELECT * FROM customer');
//         $this->stmt->execute();
//         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
//     }
// }


//     private $csr = [
//         [
//             "Id" => "1",
//             "Username" => "Jeno Lee",
//             "Alamat" => "Jalan Baning Hulu",
//             "No Telepon" => "081345456722",
//             "Email" => "jeno@yahoo.com"
//         ],
//         [
//             "Id" => "2",
//             "Username" => "Andy Park",
//             "Alamat" => "Jalan Bulan Sewindu",
//             "No Telepon" => "081345452233",
//             "Email" => "andyP@gmail.com"
//         ],
//         [
//             "Id" => "3",
//             "Username" => "Karina",
//             "Alamat" => "Jalan Kwangya",
//             "No Telepon" => "081347551212",
//             "Email" => "karina@gmail.com"
//         ],
//         [
//             "Id" => "4",
//             "Username" => "Ning Ning",
//             "Alamat" => "Jalan Kwangya 2",
//             "No Telepon" => "081547552920",
//             "Email" => "ning2@gmail.com"
//         ],
//         [
//             "Id" => "5",
//             "Username" => "Renjun ",
//             "Alamat" => "Jalan Mimpi",
//             "No Telepon" => "081245623310",
//             "Email" => "renjun@gmail.com"
//         ]
//     ];
//     public function getAllCustomer()
//     {
//         return $this->csr;
//     }
// }
