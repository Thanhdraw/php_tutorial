<?php


namespace course_student;

class Course
{
    private int $courseId;
    private string $courseName;

    public function __construct($courseId, $courseName)
    {
        $this->courseId = $courseId;
        $this->courseName = $courseName;
    }

    public function getCourseID()
    {
        return $this->courseId;
    }
    public function getCourseName()
    {
        return $this->courseName;
    }

    public function __toString()
    {
        return "Course ID: {$this->courseId}, Name: {$this->courseName}";
    }
}





?>