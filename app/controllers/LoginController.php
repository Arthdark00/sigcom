<?php
 
class LoginController extends BaseController {
 
    public function postUser()
    {
        // get POST data
        $userdata = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        $reglas= array(
            'email' => 'required',
            'password' => 'required'
            );
 
        
        //validando las credenciales
        $validador = Validator::make($userdata,$reglas);


        //en caso de que las credenciales sean válidas. Intenta logear al usuario.
        if($validador->passes())
        {
            if(Auth::attempt($userdata))
            {
                //if successfull redirect the user
            return var_dump(Auth::user()->email);
            }
            //else send back the login failure message.
            //return "Error Datos no válidos.";
            return Redirect::back()->withInput()->with('failure','username or password is invalid!');

                
        }
            //send back the validation errors.
        return Redirect::back()->withErrors($validador)->withInput();
    }

        /*
        if(Auth::attempt($userdata))
        {
            // we are now logged in, go to admin
            return "Usuario logeado correctamente.";
        }
        else
        {
            return "Error Datos no válidos.";
        }
        */

    public function getLogin()
    {   
        return View::make('login');
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
?>