<?php

use Fuel\Core\Controller;

class Controller_Student extends Controller
{
    public function action_index()
    {
        $data = array();
        if (Input::get()) {
            $query = Input::get();
            $data['Students'] = Model_Student::find(
                'first',
                array(
                    'where' => array(
                        'name' =>  $query['search'],
                    )
                )
            );
            if ($data['Students']) {
                throw new HttpNotFoundException();
            }
        } else {
            $data['Students'] = Model_Student::find('all');
        }
        return Response::forge(View::forge('student/index', $data, false));
    }
}
