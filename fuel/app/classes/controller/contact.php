<?php
use Fuel\Core\Controller;
use Fuel\Core\Session;

class Controller_Contact extends Controller
{
    public function action_index()
    {
        // Load Smarty template engine
        $smarty = new Smarty;

        $error = Session::get_flash('errors');
        $db_success = Session::get_flash('db_success');
        $db_error = Session::get_flash('db_error');

        // Set Smarty template directory
        $smarty->setTemplateDir(APPPATH . 'views/contact/');

        $smarty->assign('errors', $error);
        $smarty->assign('db_success', $db_success);
        $smarty->assign('db_error', $db_error);

        // Render the template
        $output = $smarty->fetch('index.html');


        // Display the rendered template
        return Response::forge($output);
    }

    public function action_formSubmit()
    {
        $errors = [];
        $isValid = true;

        $name = Input::post('name');
        $gender = Input::post('gender');
        $email = Input::post('email');
        $phone = Input::post('phone');
        $content = Input::post('content');


        if(!$name) {
            $errors['name']['error'] = "Name cannot be empty";
            $errors['name']['value'] = "";
            $isValid = false;
        }else{
            $errors['name']['value'] = $name;
        }

        if (!$gender){
            $errors['gender']['error'] = "Have to select at least one gender";
            $errors['gender']['value'] = "";
            $isValid = false;
        }else{
            $errors['gender']['value'] = $gender;
        }

        if (!$email){
            $errors['email']['error'] = "Have to enter a valid email";
            $errors['email']['value'] = "";
            $isValid = false;

        }else{
            $errors['email']['value'] = $email;
        }

        if (!$phone){
            $errors['phone']['error'] = "Have to enter a valid phone";
            $errors['phone']['value'] = "";
            $isValid = false;

        } else{
            $errors['phone']['value'] = $phone;
        }

        if (!$content){
            $errors['content']['error'] = "Content cannot be empty";
            $errors['content']['value'] = "";
            $isValid = false;

        }else{
            $errors['content']['value'] = $content;
        }

        if($isValid){
            Session::set("data", $errors);
            Response::redirect('/contact/confirmation');
        }else{
            Session::set_flash('errors', $errors);
            Response::redirect('/contact');
        }
    }

    public function action_confirmation() {
        // Load Smarty template engine
        $smarty = new Smarty;

        $data = Session::get('data');

        // Set Smarty template directory
        $smarty->setTemplateDir(APPPATH . 'views/contact/');

        $smarty->assign('data', $data);

        // Render the template
        $output = $smarty->fetch('confirmation.html');

        // Display the rendered template
        return Response::forge($output);
    }


    public function action_createContact()
    {
        try {
            $data = Session::get('data');
            $contact = new Model_Contact();
            $contact->name = $data['name']['value'];
            $contact->email = $data['email']['value'];
            $contact->gender = $data['gender']['value'];
            $contact->phone = $data['phone']['value'];
            $contact->content = $data['content']['value'];
            $contact->save();
            Session::delete('data');
            Session::set_flash("db_success", "Data inserted successfully");
        }catch (Exception $exception) {
            Session::set_flash("db_error", "Something went wrong");
        }
        Response::redirect('/contact');

    }
}