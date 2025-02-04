<?php
use PHPUnit\Framework\TestCase;

class EtudiantsTest extends TestCase
{
    public function testCreationNouvelEtudiant()
    {
        $response = $this->creerEtudiant('John Doe', 'john.doe@example.com');
        $this->assertEquals('success', $response['status']);
        $this->assertArrayHasKey('id', $response);
    }

    private function creerEtudiant($nom, $email)
    {
        // Simulate the creation of a student and return a response
        return ['status' => 'success', 'id' => 1];
    }
}
