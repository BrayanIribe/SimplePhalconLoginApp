<?php

class RegisterController extends ControllerBase
{

    public function indexAction()
    {
        if ($this->session->has('login')) {
            $this->response->redirect('/');
            return;
        }

        if (true === $this->request->isPost()) {
            $user = $this->request->getPost('user');
            if ($user === "admin") {
                $this->flash->success("Login");
                $this->session->set("login", true);
            } else {
                $this->flash->error("invalid");
            }
            // Access POST data
        }
    }

    public function registerAction()
    {

    }

}
