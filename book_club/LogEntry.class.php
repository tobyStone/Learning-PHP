<?php


class LogEntry {

    protected $data = array(
        "memberId" => "",
        "pageUrl" => "",
        "numVisits" => "",
        "lastAccess" => ""
    );
    public function __construct( $data ) {
        foreach ( $data as $key => $value ) {
            if ( array_key_exists( $key, $this->data ) ) $this->data[$key] =
            $value;
        }
    }

    public function getValue( $field ) {
        if ( array_key_exists( $field, $this->data ) ) {
            return $this->data[$field];
        } else {
            die( "Field not found" );
        }
    }
   
     
    public function getValueEncoded( $field ){
        return htmlspecialchars( $this->getValue( $field ) );
    }



    public static function getLogEntries( $memberId) {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $conn->setAttribute( PDO::ATTR_PERSISTENT, true );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        $sql = "SELECT * FROM " . TBL_ACCESS_LOG . " WHERE memberId = :memberId 
        ORDER BY lastAccess DESC"; 

        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":memberId", $memberId, PDO::PARAM_INT );
            $st->execute();
            $logEntries = array();
            foreach ( $st->fetchAll() as $row ) {
                $logEntries[] = new LogEntry( $row );
            }
            $conn = "";
            return $logEntries;
        } catch ( PDOException $e ) {
            $conn = "";
            die("Query failed: " . $e->getMessage() );
        }
    }

    }
?>


