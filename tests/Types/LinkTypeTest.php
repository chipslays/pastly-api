<?php

use Pastly\Types\Link;
use PHPUnit\Framework\TestCase;

final class LinkTypeTest extends TestCase
{
    public function testLinkType()
    {
        $links = collection([
            'source' => 'source',
            'clone' => 'clone',
            'raw' => 'raw',
            'download' => 'download',
            'markdown' => 'markdown',
        ]);

        $paste = new Link($links);

        $this->assertEquals('source', $paste->getSource());
        $this->assertEquals('clone', $paste->getClone());
        $this->assertEquals('raw', $paste->getRaw());
        $this->assertEquals('download', $paste->getDownload());
        $this->assertEquals('markdown', $paste->getMarkdown());
    }
}