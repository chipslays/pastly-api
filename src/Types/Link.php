<?php

namespace Pastly\Types;

use Chipslays\Collection\Collection;

class Link
{
    /**
     * @var string|null
     */
    protected $source;

    /**
     * @var string|null
     */
    protected $markdown;

    /**
     * @var string|null
     */
    protected $raw;

    /**
     * @var string|null
     */
    protected $download;

    /**
     * @var string|null
     */
    protected $clone;

    public function __construct(Collection $data)
    {
        $this->source = $data->get('source');
        $this->markdown = $data->get('markdown');
        $this->raw = $data->get('raw');
        $this->download = $data->get('download');
        $this->clone = $data->get('clone');
    }

    /**
     * Get the value of source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Get the value of markdown
     *
     * @return string|null
     */
    public function getMarkdown()
    {
        return $this->markdown;
    }

    /**
     * Get the value of raw
     *
     * @return string|null
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * Get the value of download
     *
     * @return string|null
     */
    public function getDownload()
    {
        return $this->download;
    }

    /**
     * Get the value of clone
     *
     * @return string|null
     */
    public function getClone()
    {
        return $this->clone;
    }
}
