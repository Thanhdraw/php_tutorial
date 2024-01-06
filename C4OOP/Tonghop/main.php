<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);


include_once "interface.php";
include_once "abstract.php";
include_once "student.php";
include_once "course.php";

use abtract_student\Person;
use Student\Student;
use course_student\Course;

class School
{
    private $students = [];
    private $courses = [];


    public function addStudent(Student $student)
    {
        $this->students[] = $student;
    }

    public function addCourse(Course $course)
    {
        $this->courses[] = $course;
    }
    public function removeCourseById($courseId)
    {
        // Convert courseId to integer
        $courseId = (int) $courseId;

        // Find the index of the course with the given courseId
        foreach ($this->courses as $index => $course) {
            // Check if the current course has the matching courseId
            if ($course->getCourseID() === $courseId) {
                // Remove the course at the found index
                unset($this->courses[$index]);
                $this->courses = array_values($this->courses); // Reindex the array
                // echo "Course removed successfully.";
                return $this->courses;
            }
        }

        // If the loop completes without finding a matching course, display an error
        echo "====Course not found in the list.====";
        return $this->courses;
    }
    public function getStudents()
    {
        return $this->students;
    }

    public function getCourses()
    {
        return $this->courses;
    }
}

$courseMath = new Course(101, "Mathematics");
$courseEnglish = new Course(102, "English");
$courseHistory = new Course(103, "History");


$student1 = new Student(1001, "Alice");
$student2 = new Student(1002, "Bob");
$school = new School();
$school->addStudent($student1);
$school->addStudent($student2);
$school->addCourse($courseMath);
$school->addCourse($courseEnglish);
$school->addCourse($courseHistory);


$courseIdToRemove = 102; // Replace with the actual courseId you want to remove
$school->removeCourseById($courseIdToRemove);



foreach ($school->getStudents() as $student) {
    echo $student . "<br>";
}

// Display courses
foreach ($school->getCourses() as $course) {
    echo $course . "<br>";
}

echo "====Courses after removal=====:<br>";
foreach ($school->getCourses() as $course) {
    echo $course . "<br>";
}
// Debugging output
// var_dump($school->getStudents());
// var_dump($school->getCourses());
?>