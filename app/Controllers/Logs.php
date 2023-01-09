<?php 
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LogsModel;

class Logs extends BaseController
{


    public function __construct()
    {
        $this->logs = new logsModel();
        helper(['form']);

    }

    public function index()
    {
        $session = session();
        $logs = $this->logs->where('id_usuario', $session->id_usuario)->findAll();
        $data = ['titulo' => 'Logs de acceso', 'datos' => $logs];
        echo view('header');
        echo view('logs/logs', $data);
        echo view('footer');
    }
}
