<?php

use Fuel\Core\Controller;

class Controller_Student extends Controller
{
    public function action_index()
    {
        $data = array();
        if (Input::get()) {
            $name = Input::get('search');
            $data['Students'] = Model_Student::find(
                'all',
                array(
                    'where' => array(
                        array('name', 'like', '%' . $name . '%'),
                    )
                )
            );
            if ($data['Students'] === null) {
                throw new HttpNotFoundException();
            }
        } else {
            $data['Students'] = Model_Student::find('all');
        }
        return Response::forge(View::forge('student/index', $data, false));
    }


    public function action_createStudent()
    {
        $name = Input::post('name');
        $Student = new Model_Student();
        $Student->name = $name;
        $Student->save();
        Response::redirect('/');
    }

    // 127.0.0.1:8000/student/test
    public function action_test() {
        // Load Smarty template engine
        $smarty = new Smarty;

        // Set Smarty template directory
        $smarty->setTemplateDir(APPPATH . 'views/student/');

        $data = array();
        if (Input::get()) {
            $name = Input::get('search');
            $data['Students'] = Model_Student::find(
                'all',
                array(
                    'where' => array(
                        array('name', 'like', '%' . $name . '%'),
                    )
                )
            );
            if ($data['Students'] === null) {
                throw new HttpNotFoundException();
            }
            $smarty->assign('query', $name);
        } else {
            $data['Students'] = Model_Student::find('all');
            $smarty->assign('query', false);
        }

        // Assign variables to Smarty template
        $smarty->assign('Students', $data['Students']);

        // Render the template
        $output = $smarty->fetch('test.tpl');

        // Display the rendered template
        return Response::forge($output);
    }
}
