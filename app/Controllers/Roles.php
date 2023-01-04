<?php 
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RolesModel;
use App\Models\PermisosModel;
use App\Models\DetalleRolesPermisosModel;

class Roles extends BaseController
{

    protected $roles, $permisos, $detalleRoles;
    protected $reglas;

    public function __construct()
    {
        $this->roles = new RolesModel();
        $this->permisos = new PermisosModel();
        $this->detalleRoles = new DetalleRolesPermisosModel();
        helper(['form']);

        $this->reglas =[
            'nombre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.'
                ]
            ],
        ];

    }

    public function index($activo = 1)
    {
        $roles = $this->roles->where('activo',$activo)->findAll();
        $data = ['titulo' => 'Roles', 'datos' => $roles];

        echo view('header');
        echo view('roles/roles', $data);
        echo view('footer');
    }
    public function eliminados($activo = 0)
    {
        $roles = $this->roles->where('activo',$activo)->findAll();
        $data = ['titulo' => 'Roles eliminadas', 'datos' => $roles];

        echo view('header');
        echo view('roles/eliminados', $data);
        echo view('footer');
    }
    public function nuevo()
    { 
        $data = ['titulo' => 'Agregar rol'];
      
        echo view('header');
        echo view('roles/nuevo', $data);
        echo view('footer');

    }
    public function insertar()
    {
        if($this->request->getMethod() == "post" && $this->validate( $this->reglas)){
            $this->roles->save(['nombre'=> $this->request->getPost('nombre')]);
            return redirect()->to(base_url().'/roles');
        } else{
            $data = ['titulo' => 'Agregar rol', 'validation' => $this->validator];
      
            echo view('header');
            echo view('roles/nuevo', $data);
            echo view('footer');
        }
        
    }
    public function editar($id, $valid=null)
    { 
        $rol = $this->roles->where('id',$id)->first();
        
        if($valid != null){
            $data = ['titulo' => 'Editar rol', 'datos' => $rol, 'validation' => $valid];
        }else{

            $data = ['titulo' => 'Editar rol', 'datos' => $rol];
        }
        
        
        $data = ['titulo' => 'Editar rol', 'datos' => $rol];
      
        echo view('header');
        echo view('roles/editar', $data);
        echo view('footer');

    }
    public function actualizar()
    {
        if($this->request->getMethod() == "post" && $this->validate( $this->reglas)){
            $this->roles->update($this->request->getPost('id'), ['nombre'=> $this->request->getPost('nombre')]);
            return redirect()->to(base_url().'/roles');
        } else{
            return $this->editar($this->request->getPost('id'), $this->validator);
        }
    }

    public function eliminar($id)
    {
        $this->roles->update($id, ['activo' => 0]);
        return redirect()->to(base_url().'/roles');
    }
    public function reingresar($id)
    {
        $this->roles->update($id, ['activo' => 1]);
        return redirect()->to(base_url().'/roles');
    }

    public function detalles($idRol){
        
        $permisos = $this->permisos->findAll();

        $permisosAsignados = $this->detalleRoles->where('id_rol', $idRol)->findAll();
        $datos= array();

        //$this->detalleRoles->verificaPermisos($idRol, 'MenuProductos');

        foreach($permisosAsignados as $permisoAsignado){
            $datos[$permisoAsignado['id_permiso']] = true;

        }

        $data = ['titulo' => 'Asignar permisos', 'permisos' => $permisos, 'id_rol' => $idRol, 'asignado' => $datos];

        echo view('header');
        echo view('roles/detalles', $data);
        echo view('footer');

    }
    
    public function guardaPermisos(){

        if($this->request->getMethod() == "post"){

            $idRol = $this->request->getPost('id_rol');
            $permisos = $this->request->getPost('permisos');

            $this->detalleRoles->where('id_rol', $idRol)->delete();

            foreach($permisos as $permiso){

                $this->detalleRoles->save(['id_rol' => $idRol, 'id_permiso' => $permiso]);

            }

            return redirect()->to(base_url()."/roles");
        }
    }
}
