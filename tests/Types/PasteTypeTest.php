<?php

use Pastly\Types\Link;
use Pastly\Types\Paste;
use PHPUnit\Framework\TestCase;

final class PasteTypeTest extends TestCase
{
    public function testPasteType()
    {
        $data = collection([
            'syntax' => 'text',
            'type' => 'public',
            'paste' => 'example',
            'title' => 'Title',
            'text' => 'Hello, World!',
            'updated' => 123456789,
            'views' => 123,
            'links' => [
                'source' => '1',
                'clone' => '2',
                'raw' => '3',
                'download' => '4',
                'markdown' => '5',
            ]
        ]);

        $paste = new Paste($data);

        $this->assertEquals('Title', $paste->getTitle());
        $this->assertEquals('Hello, World!', $paste->getText());
        $this->assertEquals('public', $paste->getType());
        $this->assertEquals('example', $paste->getSlug());
        $this->assertEquals('text', $paste->getSyntax());
        $this->assertEquals(123456789, $paste->getLastModified());
        $this->assertEquals(123, $paste->getViews());
        $this->assertInstanceOf(Link::class, $paste->getLinks());
    }
}