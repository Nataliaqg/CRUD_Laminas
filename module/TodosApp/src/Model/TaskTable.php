<?php
namespace TodosApp\Model;

use Laminas\Db\TableGateway\TableGatewayInterface;
use RuntimeException;

class TaskTable
{
   /** @var TableGatewayInterface */
   private $tableGateway;

   public function __construct(TableGatewayInterface $tableGateway)
   {
       $this->tableGateway = $tableGateway;
   }

   public function fetchAll()
   {
       return $this->tableGateway->select();
   }

   public function getTask($id)
   {
       $id = (int)$id;
       $rowset = $this->tableGateway->select(['id' => $id]);
       $row = $rowset->current();
       if (!$row) {
           throw new RuntimeException(sprintf(
               'Could not find row with identifier %d',
               $id
           ));
       }

       return $row;
   }
}