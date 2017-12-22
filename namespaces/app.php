<?php
namespace App;
include "project.php";
use Project\Table as ProjectTable;
class Table {
	public static function get() {
		echo "app.Table.get \n";
	}
}
ProjectTable::get();