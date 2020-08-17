<?php 
     class Hmw_Model extends CI_model{

          public function saveworkoutdata($day,$wdistance,$rdistance,$cdistance,$wtrain,$pushup,$situp,$stretching){

               $query= "insert into workout values('','$day','$wdistance','$rdistance','$cdistance','$wtrain','$pushup','$situp','$stretching')"; 
               $this->db->query($query);  
         
          }

          public function viewworkoutdata(){

                $query = $this->db->query('select * from workout');
                return $query->result();
          }

          public function displaydaybyid($id){

               $query=$this->db->query("select * from workout where id='".$id."'");
               return $query->result();
   
           }

          public function  updatedayworkout($id,$day,$wdistance,$rdistance,$cdistance,$wtrain,$pushup,$situp,$stretching){

               $query=$this->db->query("update workout SET day='$day' ,wdistance='$wdistance', rdistance='$rdistance', cdistance='$cdistance', 
                                          wtrain='$wtrain', pushup='$pushup', situp='$situp', stretching='$stretching' where id='".$id."'");
           }
          
           public function deletedaybyid($id){

               $this->db->query("delete from workout where id='".$id."'"); //sql query

              }


              public function fetchUserDetails(){
                   $query=$this->db->query('select * from workout');
                   $output='
                        <table>
                            <thead>
                              <tr>
                              <th>Day</th>
                              <th>Waliking Distance</th>
                              <th>Running Distance</th>
                              <th>Cycling Distance</th>
                              <th>Weight Training Time</th>
                              <th>Push Ups</th>
                              <th>Sit Ups</th>
                              <th>Stretching Time</th>
                              </tr>
                            </thead>
                           <tbody>';
                  foreach ($query->result() as $row){
                       $output.='
                       <tr>
                            <td>'.$row->day.'</td>
                            <td>'.$row->wdistance.'</td>
                               <td>'.$row->rdistance.'</td>
                            <td>'.$row->cdistance.'</td>
                               <td>'.$row->wtrain.'</td>
                            <td>'.$row->pushup.'</td>
                               <td>'.$row->situp.'</td>
                            <td>'.$row->stretching.'</td>
                         </tr>';
                    }
                  $output.='
                           </tbody>
                              </table>';
                  return $output;
              }
    


     }



     


?>