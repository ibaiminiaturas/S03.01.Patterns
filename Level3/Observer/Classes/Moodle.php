<?php
require_once(__DIR__ . "\Mentor.php");

class Moodle
{
    /**
     * @var Mentor[]
     */
    private array $mentors = [];

    public function __construct()
    {
        $this->mentors = [];
    }

    public function registerMentor(Mentor $mentor)
    {
        if (!in_array($mentor, $this->mentors, true)) {
            array_push($this->mentors, $mentor);
        }
    }


    public function newDelivery(string $delivery)
    {
        for ($i = 0; $i < count($this->mentors); $i++) {
            $this->mentors[$i]->NewDelivery($delivery);
        }
    }

}



?>