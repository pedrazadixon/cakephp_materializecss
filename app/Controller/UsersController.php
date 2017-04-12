<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow( /* 'add', */ 'logout');
    }

    public function iniciar_sesion() {
        $this->layout = 'login';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Session->setFlash(__('Datos invalidos'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function ver($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
    }

    public function agregar() {

      $this->loadModel('Users_role');
      $this->set('roles',$this->Users_role->find('list', array('fields' => array('id','rol'))));

        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Usuario creado correctamente','flash/ok');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('El usuario no puede ser creado. Por favor intente nuevamente.')
            );
        }
    }

    public function editar($id = null) {
        $this->User->id = $id;

        $this->loadModel('Users_role');
        $this->set('roles',$this->Users_role->find('list', array('fields' => array('id','rol'))));

        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function eliminar($id = null) {
        $this->request->allowMethod('post');

        if ($id === '1') {
          $this->Session->setFlash('No se permite eliminar el usuario ID 1 (reservado para el administrador)', 'Flash/alerta');
          return $this->redirect(array('action' => 'index'));
        }

        $this->User->id = $id;
        $usuario = ($this->User->findById($id));
        if (!$this->User->exists()) {
            throw new NotFoundException(__('ID de usuario invalido'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash('Usuario <b>'.$usuario["User"]["username"].'</b> ha sido ELIMINADO correctamente.', 'Flash/ok');
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('El usuario no pudo ser borrado'));
        return $this->redirect(array('action' => 'index'));
    }
}
?>
