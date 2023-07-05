<?php
include('../admin/model.php');


class control extends model
{
	function __construct()
	{
		session_start();
		
		model::__construct();
		
		$PATH = $_SERVER['PATH_INFO'];  

		switch ($PATH) {

            case '/Login':
            if(isset($_REQUEST['submit']))
			{
				$username=$_REQUEST['username'];
				$pass=md5($_REQUEST['pass']); 
				
				$arr=array("username"=>$username,"pass"=>$pass);
				
				$res=$this->select_where('user',$arr); // func call  and cond check 
				$chk=$res->num_rows; // check res by rows that cond true or not
			
				if($chk==1) // 1 means true / and 0 means false
				{
					$fetch=$res->fetch_object(); // data fetch after function call
					$status=$fetch->status;

					if($status=="unblock")
					{
						// session create 
					$_SESSION['user_id']=$fetch->user_id;
					$_SESSION['username']=$fetch->username;
					$_SESSION['name']=$fetch->name;
					
					
					echo "
					<script>
					alert('Login Success');
					window.location='Home';
					</script>
					";
					}
					else
					{
						echo "
						<script>
						alert('Login Failed due to Block Account');
						window.location='Home';
						</script>
						";
					}
					
				}
				else
				{
					echo "
					<script>
					alert('Login Failed due to wrong creadential !');
					window.location='login';
					</script>
					";
				}
			}
			include_once('Login.php');
			break;

			case '/Signup':
			$countries_arr=$this->select('country');
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$username=$_REQUEST['username'];
				$pass=md5($_REQUEST['pass']); // enc pass
				$gen=$_REQUEST['gen'];
				$lag_arr=$_REQUEST['lag']; // checkbox arr 
				$lag=implode(",",$lag_arr); // convert into string
				
				$cid=$_REQUEST['cid'];
				date_default_timezone_set('asia/calcutta');
				$created_id=date('Y-m-d H:i:s');
				$updated_id=date('Y-m-d H:i:s');
				
				$file=$_FILES['file']['name']; // get img name
				$path='upload/user/'.$file; // path
				$tmp_file=$_FILES['file']['tmp_name']; // dup file
				move_uploaded_file($tmp_file,$path); // move dup file in path
				
				
				$arr=array("name"=>$name,"email"=>$email,"username"=>$username,"pass"=>$pass,"gen"=>$gen,"lag"=>$lag,"file"=>$file,"cid"=>$cid,"created_id"=>$created_id,"updated_id"=>$updated_id);
				
				$res=$this->insert('user',$arr);
				if($res)
				{
					echo "
					<script>
					alert('Registered Success');
					window.location='Home';
					</script>
					";
				}
				else
				{
					echo "not success";
				}
				
			}
			include_once('Signup.php');
			break;

			case '/Logout':
			unset($_SESSION['user_id']);
			unset($_SESSION['username']);
			unset($_SESSION['name']);
			echo "
					<script>
					alert('Logout Success');
					window.location='Home';
					</script>
					";
			break;
		
			
			case '/profile':
			$where=array("user_id"=>$_SESSION['user_id']);
			
			$res=$this->select_where('user',$where);
			$fetch=$res->fetch_object();
			include_once('profile.php');
			break;
    
			case '/Home':
			 $location_arr=$this->select('location');
            
			if(isset($_REQUEST['search']))
			 {
				 $search=$_REQUEST['location_id'];
				 $car_arr=$this->select_search('car_adv','location_id',$search);

			}
			else
			{
				 $car_arr=$this->select('car_adv');
			}
			include_once('Home.php');
			break;

			case '/bookingform':
			$booking_arr=$this->select('booking');
			$res= $this->select('user');
			if(isset($_REQUEST['submit']))
			{
				$user_id=$_REQUEST['user_id'];
				$adv_id=$_REQUEST['adv_id'];
				$name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $mobile=$_REQUEST['mobile'];
                $address=$_REQUEST['address'];
                $city=$_REQUEST['city'];
                
                        date_default_timezone_set('asia/calcutta');
                        $created_dt=date('Y-m-d H:i:s');
                        $updated_dt=date('Y-m-d H:i:s');


                        $arr=array("user_id"=>$user_id,"adv_id"=>$adv_id,"name"=>$name,"email"=>$email,"mobile"=>$mobile,"address"=>$address,"city"=>$city,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
                        $res=$this->insert('booking',$arr);

                         if($res)
                        {
                            echo "
                            <script>
                            alert('Thanks for Booking car...');
                            window.location='Home';
                            </script>
                            ";
                        }
                        else
                        {
                            echo "not success";
                        }
			}
			include_once('bookingform.php');
			break;
			
			case '/About':
			include_once('About.php');
			break;

			case '/Cars':
			$category_arr=$this->select('category');
            $location_arr=$this->select('location');
               if(isset($_REQUEST['submit']))
                    {
                        $name=$_REQUEST['name'];
                        $car_name=$_REQUEST['car_name'];
                        $vehical_number=$_REQUEST['vehical_number'];
                        $mobile=$_REQUEST['mobile'];
                        $category_id=$_REQUEST['category_id'];
                        $address=$_REQUEST['address'];
                        $location_id=$_REQUEST['location_id'];
                    

                        $Deposite=$_REQUEST['Deposite'];
                        $Driver=$_REQUEST['Driver'];
                        $charge=$_REQUEST['charge'];
                        $Term_condition=$_REQUEST['Term_condition'];                 
                          
                        $file=$_FILES['file']['name']; // get img name
                        $path='upload/car/'.$file; // path
                        $tmp_file=$_FILES['file']['tmp_name']; // dup file
                        move_uploaded_file($tmp_file,$path); // move dup file in path
                          
                        date_default_timezone_set('asia/calcutta');
                        $created_dt=date('Y-m-d H:i:s');
                        $updated_dt=date('Y-m-d H:i:s');

    
                        $arr=array("name"=>$name,"car_name"=>$car_name,"vehical_number"=>$vehical_number,"mobile"=>$mobile,"category_id"=>$category_id, "address"=>$address,"location_id"=>$location_id,"Deposite"=>$Deposite,"Driver"=>$Driver,"charge"=>$charge,"Term_condition"=>$Term_condition,"file"=>$file,
                        "created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
                        $res=$this->insert('car_adv',$arr);
                        if($res)
                        {
                            echo "
                            <script>
                            alert('Thanks for adding your car...');
                            window.location='Home';
                            </script>
                            ";
                        }
                        else
                        {
                            echo "not success";
                        }
                    }

			include_once('Cars.php');
			break;

			case '/Services':
			include_once('Services.php');
			break;

			case '/viewbooking':
			$book_arr=$this->select('booking');
			include_once('viewbooking.php');
			break;


			case '/Contact':
			$con_arr=$this->select('contact');
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$mobile=$_REQUEST['mobile'];
				$message=$_REQUEST['message'];
				
				date_default_timezone_set('asia/calcutta');
				$created_dt=date('Y-m-d H:i:s');
				$updated_dt=date('Y-m-d H:i:s');
				
				$arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"message"=>$message,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
				
				$res=$this->insert('Contact',$arr);
				if($res)
				{
					
					echo "
					<script>
					alert('Contact Success');
					window.location='Contact';
					</script>
					";
				}
				else
				{
					echo "not success";
				}
				
			}
			include_once('Contact.php');
			break;
		    
		   case '/edit':
			if(isset($_REQUEST['edit_uid']))
			{
				$user_id=$_REQUEST['edit_uid'];
				$where=array("user_id"=>$user_id);
				$res=$this->select_where('user',$where);
				$fetch=$res->fetch_object();
				
				// get old file for delete
				$old_img=$fetch->file;
				
				if(isset($_REQUEST['save']))
					{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$username=$_REQUEST['username'];
					$gen=$_REQUEST['gen'];
					$lag_arr=$_REQUEST['lag']; // checkbox arr 
					$lag=implode(",",$lag_arr); // convert into string
					$cid=$_REQUEST['cid'];
					
					date_default_timezone_set('asia/calcutta');
					$updated_at=date('Y-m-d H:i:s');
					
					if($_FILES['file']['size']>0)
					{
						$file=$_FILES['file']['name']; // get img name
						$path='upload/customer/'.$file; // path
						$tmp_file=$_FILES['file']['tmp_name']; // dup file
						move_uploaded_file($tmp_file,$path); // move dup file in path
						
						$arr=array("name"=>$name,"email"=>$email,"username"=>$username,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"file"=>$file,"updated_id"=>$updated_id);
						
						$res=$this->update('user',$arr,$where);
						if($res)
						{
							unlink('upload/customer/'.$old_img);
							echo "
							<script>
							alert('Update Success');
							window.location='profile';
							</script>
							";
						}
					}
					else
					{
						$arr=array("name"=>$name,"email"=>$email,"username"=>$username,"gen"=>$gen,"lag"=>$lag,"cid"=>$cid,"updated_id"=>$updated_id);
						
						$res=$this->update('user',$arr,$where);
						if($res)
						{
							echo "
							<script>
							alert('Update Success');
							window.location='profile';
							</script>
							";
						}
					}
					
				}
				
			}
			$countries_arr=$this->select('country');
			include_once('edit_profile.php');
			break;
			    
		}
	}
}

$obj = new Control();

?>