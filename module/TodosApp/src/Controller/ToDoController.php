<?php
namespace TodosApp\Controller;

use Laminas\View\Model\ViewModel;
use TodosApp\Model\TaskTable;

class ToDoController extends \Laminas\Mvc\Controller\AbstractActionController
{
    private $table;

    public function __construct(TaskTable $table){
        $this->table=$table;
    }

   public function indexAction(): ViewModel
   {
       $tasks = $this->table->fetchAll();
       return new ViewModel(['tasks' => $tasks]);
   }
}