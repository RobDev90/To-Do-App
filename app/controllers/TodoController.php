<?php


    namespace App\Controllers;

    use App\Core\App;
    use \Datetime;


    class TodoController {

        public function store() {

            $strDateAdded = new DateTime(date('Y-m-d'));
            $strDueDate = new DateTime($_POST['due_date']);

            $dateAddedTS = $strDateAdded->getTimestamp(); // Unix timestamp
            $dueDateTS = $strDueDate->getTimestamp(); // Unix timestamp

            $formattedDateAdded = $strDateAdded->format('Y-m-d');
            $formattedDueDate = $strDueDate->format('Y-m-d');

            $fields = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'date_added' => $formattedDateAdded,
                'due_date' => $formattedDueDate
            ];

            App::get('database')->insert('todos', $fields);

            return view('add-todo');

        }

    }