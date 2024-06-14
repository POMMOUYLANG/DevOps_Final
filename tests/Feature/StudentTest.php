<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * Test creating a student.
     *
     * @return void
     */
    public function test_create_student()
    {
        $student = Student::create([
            'name' => 'John Doe',
            'email' => 'e20201008@itc.edu.kh',
            'phone' => '012 345 678',
            'dob' => '2003-10-01'
        ]);

        $this->assertTrue($student->exists());
    }
}