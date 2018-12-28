<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('home');
		//redirect('/welcome/dashboard');
	}


	public function login()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			if ($this->form_validation->run() == FALSE)
	        {
	            $this->load->view('login');
	        }else{
	        	$user = $this->db->where(array('email'=>$_POST['email'],'password'=>$_POST['password']))->get('client')->row();
				//echo $this->db->last_query();
				//print_r($user);
				//die;
				if(empty($user)){
					$this->session->set_flashdata('error','Invalid User');
					redirect('welcome/login');
				}else{
					$login = array(
						'id'=>$user->id,
						'email'=>$user->email,
						'fname'=>$user->fname,
					);
					$this->session->set_userdata('front_login',$login);
					$this->session->set_flashdata('message','Login successfully');
					redirect('welcome');
				}
	        }
		
		}else{
			$this->load->view('login');
		}
		//redirect('/welcome/dashboard');
	}

	public function signup()
	{

		if($this->input->post()){
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[client.email]');
				if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('signup');
                }else{
                	$user=array(
        				'fname'=>$_POST['fname'],
        				'lname'=>$_POST['lname'],
        				'email'=>$_POST['email'],
        				'password'=>$_POST['password'],
        				'mobile'=>$_POST['mobile'],
                	);
                	if($this->db->insert('client',$user)){
                		$last_id = $this->db->insert_id();
                		$user_session = array(
								'id'=>$last_id,
								'email'=>$_POST['email'],
								'fname'=>$_POST['fname'],
                		); 
                		$this->session->set_userdata('front_login',$user_session);
                		$this->session->set_flashdata('message','Registration successfully');
                		redirect(base_url('welcome/signup'));
                	}else{
                		$this->session->set_flashdata('error','Registration Failed');
                		redirect(base_url('welcome/signup'));
                	}
                	echo "string";
                	die;
                       // $this->load->view('formsuccess');
                }
		}else{
		$this->load->view('signup');
		}
		//redirect('/welcome/dashboard');
	}

	public function plan()
	{
		$this->load->view('plan');
		//redirect('/welcome/dashboard');
	}

	public function profile()
	{
		$session = $this->session->userdata('front_login');
		if(empty($session)){
			redirect(base_url());
		}
		$data['user']=$this->db->where('id',$session['id'])->get('client')->row();
		$this->load->view('profile',$data);
		//redirect('/welcome/dashboard');
	}

	public function setting()
	{
		$this->load->view('setting');
		//redirect('/welcome/dashboard');
	}

	public function change_password()
	{
		$this->load->view('change_password');
		//redirect('/welcome/dashboard');
	}

public function reffer()
	{
		$this->load->view('reffer');
		//redirect('/welcome/dashboard');
	}

public function logout(){

		$this->session->unset_userdata('front_login');
		redirect(base_url());
	}























	
public function purchase(){
		
		$userId = $this->input->post('userId');
		$goldId = $this->input->post('goldId');
		$buyQty = $this->input->post('buyQty');
		$gold_type = $this->input->post('gold_type');
		$purchaseAmount = $this->input->post('purchaseAmount');
		$remainingAmount = $this->input->post('remainingAmount');
		$user = userData($userId);
		if($gold_type == '1'){
			//gold
			$userUpdate = array(
				'amount'=>$remainingAmount,
				'gold'=>$user->gold+$buyQty
				);
			$head_id = '3';
		}else{
			//silver
			$userUpdate = array(
				'amount'=>$remainingAmount,
				'silver'=>$user->silver+$buyQty
				);
			$head_id = '4';
		}
		
		$purchase = array(
			'user_id'=>$userId,
			'gold_id'=>$goldId,
			'qty'=>$buyQty,
			'amount'=>$purchaseAmount,
			'created_date'=>date('Y-m-d h:m:s'),
		);

		$account[] = array(
			'user_id'=>$userId,
			'head_id'=>$head_id,
			'type'=>'dr',
			'amount'=>$purchaseAmount,
			'created_by'=>$this->session->userdata('login')['id'],
		);
		
		$account[] = array(
			'user_id'=>$userId,
			'head_id'=>'6',
			'type'=>'cr',
			'amount'=>$purchaseAmount,
			'created_by'=>$this->session->userdata('login')['id'],
		);

		//echo json_encode($purchase);
		//echo json_encode($account);die;
		$this->db->trans_begin();
		$this->db->insert_batch('account_entry',$account);
		$this->db->insert('purchase_detail',$purchase);
		$this->db->where('id',$userId)->update('user',$userUpdate);
		if ($this->db->trans_status() === FALSE)
		{
		    $this->db->trans_rollback();
		    $response = array('status'=>'failed','message'=>'Record Failed');
		}
		else
		{
		    $this->db->trans_commit();
		    $response = array('status'=>'success','message'=>'Record Save Successfully');
		}
		echo json_encode($response);
}
public function getGoldPrice(){
	$type = $this->input->post("type");
	if($type == '1'){
		$result = getGold();
	}else if($type == '2'){
		$result = getSilver();
	}
	$data['gold'] =$result;
	//$data['user'] =$this->session->userdata('login')['id'];
	$data['user'] =userData($this->session->userdata('login')['id']);
	echo json_encode($data);
}

	
public function cources($id='')
{
	$data['id']=$id;
	$data['cource'] = $this->db->where('id',$id)->get('cources')->row();
	$data['roles'] = $this->db->where('active','1')->get('role')->result();

	if($this->input->post()){
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/cources',$data);
		}
		else
		{
			$id = $this->input->post('id');
			$title = $this->input->post('title');
			$price = $this->input->post('price');
			$description = $this->input->post('description');
			$cources = array(
				'title'=>$title,
				'price'=>$price,
				'description'=>$description,
			);
			if($_FILES['image']['name']!=''){
				$path = 'resources/img/cources/';
				$config['upload_path']          = $path;
                $config['allowed_types']        = 'gif|jpg|png';
                //  $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$cources['image']=$uploadData['file_name'];
					if($id !=''){
						if(file_exists($path.$data['cource']->image)){
							unlink($path.$data['cource']->image);
						}
					}
                    // $this->load->view('upload_success', $data);
                }
			}
			
			if($id!=''){
				if($this->db->where('id',$id)->update('cources',$cources)){
						$this->session->set_flashdata('message','Cources Update Successfully');
				}else{
						$this->session->set_flashdata('error','Cources Update Failed');
				}
			}else{
				if($this->db->insert('cources',$cources)){
						$this->session->set_flashdata('message','Cources Save Successfully');
				}else{
						$this->session->set_flashdata('error','Cources Save Failed');
				}	
			}
			
			redirect('welcome/cources');
		    //$this->load->view('formsuccess');
		}
	}else{
		$this->load->view('admin/cources',$data);
	}
}
	public function member_view()
	{

		$data['cources'] = $this->db->select('tab1.*')->get('cources as tab1')->result();
		$this->load->view('admin/view_cources',$data);
	}
}
