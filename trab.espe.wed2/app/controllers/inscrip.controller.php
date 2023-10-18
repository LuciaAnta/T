<?php
require_once 'app/models/inscrip.model.php';
require_once 'app/views/inscrip.view.php';
require_once 'app/helpers/auth.helper.php';


class inscripcontroller
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new InscripModel();
        $this->view = new InscripView();
    }

    public function verInscripto()
    {
        AuthHelper::init();
        
        // obtengo Equipos del controlador
        $equipos = $this->model->mostrar();

        // muestro las tareas desde la vista
        $this->view->mostrar($equipos);
    }

    public function agregarInscripto()
    {
        AuthHelper::verify();



        // obtengo los datos del usuario
        $nombre_del_equipo = $_POST['equipo'];
        $id_facultad = $_POST['facultad'];
        $deporte = $_POST['deporte'];

        // validaciones de datos
        if (empty($nombre_del_equipo) || empty($id_facultad)) {
            $this->view->Error("Debe completar los campos");
            return;
        }
        //INSERTO EN DB
        //una vez que se inscribio lo redirijimos a la pag.principal.
        $id = $this->model->insertarInscripto($nombre_del_equipo, $id_facultad, $deporte);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            $this->view->Error("Error al inscribirse");
        }
    }

    function removerInscripto($id)
    {
        AuthHelper::verify();
        $this->model->eliminarInscripto($id);
        header('Location: ' . BASE_URL);
    }

    function editarInscripto($id)
    {
        AuthHelper::verify();
        $this->model->updateInscripto($id);
        header('Location: ' . BASE_URL);
    }
}
