<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function createTask(Request $request)
    {
        $title = trim($request->request->get('title'));
        if (empty($title))
            return $this->redirectToRoute('to_do_list');

        $entityManager = $this->getDoctrine()->getManager();

        $task = new Task;
        $task->setTitle($title);
        $entityManager->persist($task);
        $entityManager->flush();

        return $this->redirectToRoute('to_do_list');
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
