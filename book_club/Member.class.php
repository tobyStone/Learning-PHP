<?php

require_once "config.php";

class Member {


    protected $data = array(
        "id" => "",
        "username" => "",
        "password" => "",
        "firstName" => "",
        "lastName" => "",
        "joinDate" => "",
        "gender" => "",
        "favouriteGenre" => "",
        "emailAddress" => "",
        "otherInterests" => "",
    );

    private $_genres = array(
        "crime" => "Crime",
        "horror" => "Horror",
        "thriller" => "Thriller",
        "romance" => "Romance",
        "sciFi" => "Sci-Fi",
        "adventure" => "Adventure",
        "nonFiction" => "Non-Fiction"
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



    public function getMembers( $startRow, $numRows, $order) {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $conn->setAttribute( PDO::ATTR_PERSISTENT, true );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_MEMBERS . " ORDER BY 
        $order LIMIT :startRow, :numRows";

        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":startRow", $startRow, PDO::PARAM_INT );
            $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
            $st->execute();
            $members = array();
            foreach ( $st->fetchAll() as $row ) {
                $members[] = new Member( $row );
            }
            $st = $conn->query( "SELECT found_rows() AS totalRows" );
            $row = $st->fetch();
            $conn = "";
            return array( $members, $row["totalRows"] );
        }catch ( PDOException $e ) {
            $conn = "";
            die("Query failed: " . $e->getMessage() );
        }

    }

    public static function getMember ( $id ) {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $conn->setAttribute( PDO::ATTR_PERSISTENT, true );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $sql = "SELECT * FROM " . TBL_MEMBERS . " WHERE id = :id";

        try {
            $st = $conn->prepare( $sql );
            $st->bindValue( ":id", $id, PDO::PARAM_INT );
            $st->execute();
            $row = $st->fetch();
            $conn = "";
            if ( $row ) return new Member( $row );
        } catch ( PDOException $e ) {
            $conn = "";
            die( "Query failed: " . $e->getMessage() );
        }



        }
    

    public function getGenderString() {
        return ( $this->data["gender"] == "f" ) ? "Female": "Male";
    }


    public function getFavouriteGenreString() {
        return ( $this->_genres[$this->data["favouriteGenre"]] );
    }

}
?>


