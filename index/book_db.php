<?php
include_once "../includes/dbh.inc.php";


class booking_details{
 public function get_all_patient_info($db)
 {
   $cmd="select 
   pd.id as pid,
   pd.duration as pduration,
   pd.date as pdate,
   pd.patients_id as did,
   dd.FirstName as dfirstname,
   dd.LastName as dlastname,
   dd.Email as demail,
   dd.phonenumber as dphonenumber
   
   from timeslots as pd ,patients as dd where pd.patients_id=dd.id ";

   $statment = $dbo->conn->prepare($cmd);
   $statment->execute();

   $rv= $statment->fetchAll(PDO::FETCH_ASSOC);
   return $rv;
 }
}
?>