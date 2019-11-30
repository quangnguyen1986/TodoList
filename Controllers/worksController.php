<?php
class worksController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Work.php');
        $Works = new Work();
        $d['works'] = $Works->showAllWorks();
        $this->set($d);
        $this->render("index");
    }
	
	function viewcalendar()
    {
        require(ROOT . 'Models/Work.php');
        $Works = new Work();
        $d['works'] = $Works->showAllWorks();
        $this->set($d);
        $this->render("viewcalendar");
    }
	
    function add()
    {
        if (isset($_POST["work_name"]))
        {
			require(ROOT . 'Models/Work.php');
            $Work= new Work();
            if ($Work->add($_POST["work_name"], $_POST["starting_date"], $_POST["ending_date"], $_POST["status"]))
            {
                header("Location: " . WEBROOT . "Works/index");
            }
        }
        $this->render("add");
    }
	
    function edit($id)
    {
        require(ROOT . 'Models/Work.php');
        $Work= new Work();
        $d["work"] = $Work->getWorkById($id);
        if (isset($_POST["work_name"]))
        {
			if ($Work->edit($id, $_POST["work_name"], $_POST["starting_date"], $_POST["ending_date"], $_POST["status"]))
            {
                header("Location: " . WEBROOT .  "Works/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }
	
    function delete($id)
    {
        require(ROOT . 'Models/Work.php');
        $Work = new Work();
        if ($Work->delete($id))
        {
            header("Location: " . WEBROOT .  "Works/index");
        }
    }
}
?>