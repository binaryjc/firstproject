<?php

namespace App\Controllers;

use App\Models\ContactModel;

class ContactController extends BaseController{

    public function index(){

        $data = array();

        $this->template('contact',$data);
    }

    public function create(){
        /*perform data manipulation here
            or save data to database via model
        */
        helper(['form', 'url']);

        $formvalidate = $this->validate([
            'name_of_contact' => 'required',
            'email' => 'required|valid_email',
            'message'  => 'required|min_length[5]',
        ]);

        $model_contact = new ContactModel();

        if (!$formvalidate){ //if formvalidate is false
 
            $data['validation'] = $this->validator;
            $this->template('contact',$data);

        }else{
            $data_to_save = array(
                'name' => $this->request->getVar('name_of_contact'),
                'email'  => $this->request->getVar('email'),
                'message'  => $this->request->getVar('message'),
            );

            //echo $this->request->getVar('name_of_contact');

            $model_contact->save($data_to_save);

            $data = array();
            $this->template('contact_success',$data);

        }


    }

    public function view_contacts(){
        $model_contact = new ContactModel();

        $data['allcontacts'] = $model_contact->findAll();

        $this->template('contact_list',$data);

    }


    public function sample_page(){

        return view('sample_page');
    }

    public function template(string $page,array $data){
        echo view('templates/header',$data);
        echo view($page,$data);
        echo view('templates/footer',$data);
    }

}
