<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class home_Controller extends CI_Controller{

        public function __construct(){
            parent:: __construct();
            $this->load->database();
            $this->load->model('Hmw_Model');
            $this->load->library('pdf');
        }

        public function viewhome(){

            $this->load->view('home'); 
        }
        
        public function viewhealthytips(){

            $this->load->view('healthytips');
        }

        public function viewfoodforlife(){

            $this->load->view('foodforlife');
        }

        public function viewexerciseforlife(){

            $this->load->view('exerciseforlife');
        }

        public function viewworkoutreport(){

            $result['data'] = $this->Hmw_Model->viewworkoutdata();
            $this->load->view('displayworkout',$result);
        }

        public function viewworkout(){

            $this->load->view('workout');

            if($this->input->post('save')){
                $day = $this->input->post('day');
                $wdistance = $this->input->post('wdistance');
                $rdistance = $this->input->post('rdistance');
                $cdistance = $this->input->post('cdistance');
                $wtrain = $this->input->post('wtrain');
                $pushup = $this->input->post('pushup');
                $situp = $this->input->post('situp');
                $stretching = $this->input->post('stretching');
                

                $this->Hmw_Model->saveworkoutdata($day,$wdistance,$rdistance,
                                                  $cdistance,$wtrain,$pushup,
                                                  $situp,$stretching); //calling query from model
                
               
                redirect("http://localhost/hmwweb/index.php/home_controller/viewworkoutreport");
                

            }

        }
        
        
        
        

        public function updatedate(){

            $id = $this->input->get('id');
            $result['data']=$this->Hmw_Model->displaydaybyid($id);
            $this->load->view('updatedate',$result);

            if($this->input->post('update')){

                $id = $this->input->get('id'); 
                $day = $this->input->post('day');
                $wdistance = $this->input->post('wdistance');
                $rdistance = $this->input->post('rdistance');
                $cdistance = $this->input->post('cdistance');
                $wtrain = $this->input->post('wtrain');
                $pushup = $this->input->post('pushup');
                $situp = $this->input->post('situp');
                $stretching = $this->input->post('stretching');
                $this->Hmw_Model->updatedayworkout($id,$day,$wdistance,$rdistance,
                                                   $cdistance,$wtrain,$pushup,
                                                   $situp,$stretching);
                                                   
                $this->load->helper('url');
                redirect("http://localhost/hmwweb/index.php/home_controller/viewworkoutreport");
            }
        }

     


            public function deletedate(){

                $id = $this->input->get('id');
                $this->Hmw_Model->deletedaybyid($id);
                $this->load->helper('url');
                redirect("http://localhost/hmwweb/index.php/home_controller/viewworkoutreport");
            }
        
  
            public function pdfdetails(){
			$html_content='<style>
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			   }

			td, th {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			     }
			</style>';
			$html_content.='<center><h3>Workout Report</h3>';
			$html_content.=$this->Hmw_Model->fetchUserDetails();
			$html_content.='</center>';
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("report.pdf",array("Attachment"=>0));
		}


       

    }


?>