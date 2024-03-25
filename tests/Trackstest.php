<?php
// tests/Entity/TracksTest.php

namespace App\Tests\Entity;

use App\Entity\Tracks;
use App\Entity\POIS;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TracksTest extends KernelTestCase
{
    protected function setUp(): void
    {
        self::bootKernel();
    }

    public function testGettersAndSetters()
    {
        // Create a Tracks object
        $tracks = new Tracks();
        
        // Set values using setters
        $tracks->setTrackID(1);
        $tracks->setTrackName('Test Track');
        $tracks->setTrackDistance(1000.0);
        $tracks->setTrackSurface('Gravel');
        $tracks->setTrackImage('test_image.png');
        
        // Test getters
        $this->assertSame(1, $tracks->getTrackID());
        $this->assertSame('Test Track', $tracks->getTrackName());
        $this->assertSame(1000.0, $tracks->getTrackDistance());
        $this->assertSame('Gravel', $tracks->getTrackSurface());
        $this->assertSame('test_image.png', $tracks->getTrackImage());
    }

    public function testPOISRelationship()
    {
        // Create a Tracks object
        $tracks = new Tracks();
        
        // Create a POIS object
        $pois = new POIS();
        
        // Add POIS to Tracks
        $tracks->addPOI($pois);
        
        // Test the relationship
        $this->assertCount(1, $tracks->getPOIS());
        $this->assertSame($tracks, $pois->getTrack());
    }
}
