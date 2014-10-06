<?php
require_once("config.php");
require_once("Collection.php" );

class dbExec {
	private $conn = null;

	private $message = '';

	/**
	 * get message
	 * @return string the message of transferring process
	 */
	public function getMessage() {
		return $this -> message;
	}

	/**
	 * transfer money from the $from account to $to account
	 * @param int $from
	 * @param int $to
	 * @param float $amount
	 * @return true on success or false on failure. The message is logged in the
	 * $message
	 */
	public function transfer($from, $to, $amount) {

		try {
			$this -> conn -> beginTransaction();

			// get available amount of the transferred account
			$sql = 'SELECT amount FROM accounts WHERE id=:from';
			$stmt = $this -> conn -> prepare($sql);
			$stmt -> execute(array(":from" => $from));
			$availableAmount = (int)$stmt -> fetchColumn();
			$stmt -> closeCursor();

			if ($availableAmount < $amount) {
				$this -> message = 'Insufficient amount to transfer';
				return false;
			}
			// deduct from the transferred account
			$sql_update_from = 'UPDATE accounts
	SET amount = amount - :amount
	WHERE id = :from';
			$stmt = $this -> conn -> prepare($sql_update_from);
			$stmt -> execute(array(":from" => $from, ":amount" => $amount));
			$stmt -> closeCursor();

			// add to the receiving account
			$sql_update_to = 'UPDATE accounts
	SET amount = amount + :amount
	WHERE id = :to';
			$stmt = $this -> conn -> prepare($sql_update_to);
			$stmt -> execute(array(":to" => $to, ":amount" => $amount));

			// commit the transaction
			$this -> conn -> commit();

			$this -> message = 'The amount has been transferred successfully';

			return true;
		} catch (Exception $e) {
			$this -> message = $e -> getMessage();
			$this -> conn -> rollBack();
		}
	}

	/**
	 * Open the database connection
	 */
	public function __construct() {
		// apre la connessione 
		$connectionString = sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME);
		try {
			$this -> conn = new PDO($connectionString, DB_USER, DB_PASSWORD);

		} catch (PDOException $pe) {
			die($pe -> getMessage());
		}
	}

	/**
	 * close the database connection
	 */
	public function __destruct() {
		// close the database connection
		$this -> conn = null;
	}

	public function Execute(){
		
	}
	
	public function ExecuteInTransaction(Commands $Commands){
		
		try {
			$this -> conn -> beginTransaction();
			
			foreach ($Commands as $key => $value) {
				$conn->query($value);
			}
			$this -> conn -> commit();
		} catch (exception $ex){
			
			
		}
		
		
		
		
		
	
	}
}
?>