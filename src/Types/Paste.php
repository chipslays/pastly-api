<?php

namespace Pastly\Types;

use Chipslays\Collection\Collection;

class Paste
{
    /**
     * @var string
     */
    protected $paste;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $views;

    /**
     * @var int
     */
    protected $updated;

    /**
     * @var string
     */
    protected $syntax;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var Link
     */
    protected $links;

    public function __construct(Collection $data)
    {
        $this->paste = $data->get('paste', '');
        $this->title = $data->get('title', '');
        $this->type = $data->get('type', '');
        $this->views = $data->get('views', 0);
        $this->updated = $data->get('updated');
        $this->syntax = $data->get('syntax', '');
        $this->text = $data->get('text', '');
        $this->links = new Link(collection($data->get('links', [])));
    }

    /**
     * Get the value of paste
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->paste;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of views
     *
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Get the value of updated
     *
     * @return int
     */
    public function getLastModified()
    {
        return $this->updated;
    }

    /**
     * Get the value of text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get the value of syntax
     *
     * @return string
     */
    public function getSyntax()
    {
        return $this->syntax;
    }

    /**
     * Get the value of syntax
     *
     * @return Link
     */
    public function getLinks()
    {
        return $this->links;
    }
}
