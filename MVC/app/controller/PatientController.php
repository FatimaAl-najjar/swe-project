<?php

require_once(__ROOT__ . "controller/Controller.php");

class PatientController extends Controller
{
    // It is supposed to be static 
    // but I am using Model object
    // WHAT TO DO?!!!
    public function login()
    {
        $FirstName = $_REQUEST['FirstName'];
        $LastName = $_REQUEST['LastName'];
        $Email = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
        $Phonenumber = $_REQUEST['Phonenumber'];
        $this->model->addPatient($FirstName, $LastName, $Email, $Password, $Phonenumber);
    }

    public function insert()
    {
        $FirstName = $_REQUEST['FirstName'];
        $LastName = $_REQUEST['LastName'];
        $Email = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
        $Phonenumber = $_REQUEST['Phonenumber'];
        //validation
        $this->model->insertPatient($FirstName, $LastName, $Email, $Password, $Phonenumber);
    }

    public function edit()
    {
        $FirstName = $_REQUEST['FirstName'];
        $LastName = $_REQUEST['LastName'];
        $Email = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
        $Phonenumber = $_REQUEST['Phonenumber'];
        
        $this->model->editPatient($FirstName, $LastName, $Email, $Password, $Phonenumber);
    }

    public function allPatients()
    {
        $this->model->selectAllPatients();
    }

    public function find($id)
    {
        $id = $_REQUEST['id'];
        $this->model->searchForPatient($id);
    }

    public function delete()
    {
        $this->model->deletePatient();
    }
}
?>