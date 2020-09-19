<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    /**
     * @Route("/", name="to_do_list")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'ToDoListController',
        ]);
    }

    /**
     * @Route("/create", name="create_task", methods={"POST"})
     */
    public function createTask()
    {
        exit('to do: create new task');
    }

    /**
     * @Route("/switch-status/{id}", name="switch_status")
     * @param $id
     */
    public function switchStatus($id)
    {
        exit('to do: switch status of the task'. $id);
    }

    /**
     * @Route("/delete/{id}", name="delete_task")

     */
    public function deleteTask($id)
    {
        exit('to do: delete task with the id of: '. $id );
    }

}
