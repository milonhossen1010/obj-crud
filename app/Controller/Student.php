<?php
    namespace Crud\Controller;
    use Crud\Support\Database;

    /**
     * Class Student
     */
    class Student extends Database{

    	public function addNewStudent($name, $email, $cell, $photo)
    	{

    		//Photo Upload
    		$this -> fileUpload($photo, "media/img/students/");

    		// Send Data
    		parent::insert('students', [

    			'name'		=>		$name,
    			'email'		=>		$email,
    			'cell'		=>		$cell

    		] );
    	}

    }

