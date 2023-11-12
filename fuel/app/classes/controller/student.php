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
}
